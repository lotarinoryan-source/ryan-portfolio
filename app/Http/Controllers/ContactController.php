<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'service' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Save to database
            ContactSubmission::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'service' => $validated['service'] ?? null,
                'subject' => $validated['subject'] ?? null,
                'message' => $validated['message'],
                'is_read' => false,
            ]);

            // Prepare email data
            $emailData = [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'service' => $validated['service'] ?? 'N/A',
                'subject' => $validated['subject'] ?? 'Contact Form Submission',
                'user_message' => $validated['message'],
            ];

            // Send email notification
            try {
                Mail::send('emails.contact', $emailData, function($msg) use ($emailData) {
                    $msg->to('lotarinoryan@gmail.com')
                        ->subject('New Contact Form: ' . $emailData['subject'])
                        ->replyTo($emailData['email'], $emailData['first_name'] . ' ' . $emailData['last_name']);
                });
            } catch (\Exception $e) {
                // Email failed but data is saved, continue
                \Log::error('Email sending failed: ' . $e->getMessage());
            }

            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry, there was an error. Please try again.');
        }
    }
}
