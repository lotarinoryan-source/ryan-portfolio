<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'John Dela Cruz',
                'email' => 'john@example.com',
                'rating' => 5,
                'comment' => "Ryan's design work is exceptional! He transformed our brand identity with creative and professional graphics. Highly recommended for anyone looking for quality design work.",
                'is_approved' => true
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'rating' => 5,
                'comment' => "Working with Ryan was a pleasure! His attention to detail and creativity brought our vision to life. The final designs exceeded our expectations. Will definitely work with him again!",
                'is_approved' => true
            ],
            [
                'name' => 'Alex Reyes',
                'email' => 'alex@example.com',
                'rating' => 5,
                'comment' => "Outstanding graphic designer! Ryan delivered high-quality work on time and was very responsive to feedback. His designs helped elevate our marketing materials significantly.",
                'is_approved' => true
            ],
            [
                'name' => 'Lisa Garcia',
                'email' => 'lisa@example.com',
                'rating' => 5,
                'comment' => "Ryan is incredibly talented! His creative approach and professional execution made our project a success. The designs are beautiful and perfectly capture our brand essence.",
                'is_approved' => true
            ],
            [
                'name' => 'Carlos Torres',
                'email' => 'carlos@example.com',
                'rating' => 5,
                'comment' => "Fantastic experience working with Ryan! His designs are modern, clean, and exactly what we needed. Great communication throughout the project. Highly professional!",
                'is_approved' => true
            ],
            [
                'name' => 'Sarah Lopez',
                'email' => 'sarah@example.com',
                'rating' => 5,
                'comment' => "Ryan's creativity and professionalism are top-notch! He understood our requirements perfectly and delivered stunning designs. Would absolutely recommend his services to anyone!",
                'is_approved' => true
            ]
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
