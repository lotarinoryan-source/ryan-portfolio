# Email Setup Guide for Contact Form

Your contact form is configured to send emails to: **lotarinoryan@gmail.com**

## How to Enable Email Sending

To receive contact form submissions directly to your email, you need to set up a Gmail App Password:

### Step 1: Enable 2-Step Verification on Gmail
1. Go to your Google Account: https://myaccount.google.com/
2. Click on "Security" in the left menu
3. Under "How you sign in to Google", click "2-Step Verification"
4. Follow the steps to enable it (if not already enabled)

### Step 2: Create an App Password
1. Go to: https://myaccount.google.com/apppasswords
2. You may need to sign in again
3. In the "Select app" dropdown, choose "Mail"
4. In the "Select device" dropdown, choose "Other (Custom name)"
5. Type "Portfolio Website" or any name you prefer
6. Click "Generate"
7. Google will show you a 16-character password (like: abcd efgh ijkl mnop)
8. **Copy this password** - you'll need it in the next step

### Step 3: Update Your .env File
1. Open the file: `portfolio/laravel/.env`
2. Find the line that says: `MAIL_PASSWORD=your_app_password_here`
3. Replace `your_app_password_here` with the 16-character password from Step 2
4. Remove any spaces from the password
5. Save the file

Example:
```
MAIL_PASSWORD=abcdefghijklmnop
```

### Step 4: Clear Configuration Cache
Run this command in your terminal:
```bash
cd C:\xampp\htdocs\portfolio\laravel
php artisan config:clear
```

### Step 5: Test It!
1. Go to your website's contact page
2. Fill out the form and submit
3. Check your email at lotarinoryan@gmail.com
4. You should receive the message within a few seconds!

## What Happens When Someone Submits the Form?

1. ✅ Message is saved to your database
2. ✅ Email is sent to: lotarinoryan@gmail.com
3. ✅ Email includes: Name, Email, Service, Subject, and Message
4. ✅ You can reply directly to the customer's email

## Troubleshooting

**If emails are not arriving:**
1. Check your Gmail spam/junk folder
2. Make sure 2-Step Verification is enabled
3. Verify the App Password is correct (no spaces)
4. Run `php artisan config:clear` again
5. Check the Laravel log file: `storage/logs/laravel.log`

**Alternative: Use Your Phone Number**
If you prefer SMS notifications instead of email, you would need to:
1. Sign up for a service like Twilio (https://www.twilio.com/)
2. Get API credentials
3. I can help you set that up if needed

## Current Configuration

- **Your Email:** lotarinoryan@gmail.com
- **SMTP Server:** smtp.gmail.com
- **Port:** 587
- **Encryption:** TLS
- **Status:** ⚠️ Waiting for App Password

Once you complete the setup, all contact form submissions will be sent directly to your email!
