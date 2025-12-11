<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #2b3990; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 30px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #2b3990; }
        .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Name:</span> {{ $first_name }} {{ $last_name }}
            </div>
            <div class="field">
                <span class="label">Email:</span> {{ $email }}
            </div>
            <div class="field">
                <span class="label">Service Interested In:</span> {{ $service }}
            </div>
            <div class="field">
                <span class="label">Subject:</span> {{ $subject }}
            </div>
            <div class="field">
                <span class="label">Message:</span>
                <p>{{ $user_message }}</p>
            </div>
        </div>
        <div class="footer">
            This email was sent from your portfolio contact form.
        </div>
    </div>
</body>
</html>
