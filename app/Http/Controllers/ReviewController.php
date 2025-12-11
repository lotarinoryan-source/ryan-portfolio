<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index()
    {
        // Use file-based storage for Vercel compatibility
        if (Storage::exists('reviews.json')) {
            $reviews = json_decode(Storage::get('reviews.json'), true);
            $totalReviews = count($reviews);
            $averageRating = $totalReviews > 0 ? array_sum(array_column($reviews, 'rating')) / $totalReviews : 0;
            
            return response()->json([
                'reviews' => $reviews,
                'total' => $totalReviews,
                'average' => round($averageRating, 1)
            ]);
        }
        
        return response()->json([
            'reviews' => [],
            'total' => 0,
            'average' => 0
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        // Load existing reviews
        $reviews = [];
        if (Storage::exists('reviews.json')) {
            $reviews = json_decode(Storage::get('reviews.json'), true);
        }

        // Add new review
        $newReview = [
            'id' => count($reviews) + 1,
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'created_at' => now()->toISOString(),
            'is_approved' => true
        ];

        array_unshift($reviews, $newReview); // Add to beginning

        // Save back to file
        Storage::put('reviews.json', json_encode($reviews, JSON_PRETTY_PRINT));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your review! It has been published.',
            'review' => $newReview
        ]);
    }
}
