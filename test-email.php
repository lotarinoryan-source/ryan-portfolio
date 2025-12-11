<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\Mail;

try {
    Mail::raw('This is a test email from your portfolio contact form.', function($message) {
        $message->to('lotarinoryan@gmail.com')
                ->subject('Test Email - Portfolio Contact Form');
    });
    
    echo "✅ Email sent successfully!\n";
    echo "Check your Mailtrap inbox at: https://mailtrap.io/inboxes\n";
} catch (Exception $e) {
    echo "❌ Error sending email:\n";
    echo $e->getMessage() . "\n";
}
