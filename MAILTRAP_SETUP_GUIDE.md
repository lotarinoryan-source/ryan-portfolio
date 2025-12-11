# Mailtrap Setup Guide (2 Minutes!)

Mailtrap is a fake SMTP server for testing emails. All emails will be captured and displayed in your Mailtrap inbox instead of being sent to real email addresses.

## Step 1: Sign Up for Mailtrap (Free)

1. Go to: https://mailtrap.io/
2. Click "Sign Up" (top right)
3. Sign up with:
   - Email: lotarinoryan@gmail.com
   - Or use "Sign up with Google" (faster!)
4. Verify your email if needed

## Step 2: Get Your Credentials

After signing up:

1. You'll be on the Mailtrap dashboard
2. Click on "Email Testing" in the left sidebar
3. Click on "My Inbox" (or the default inbox)
4. You'll see "SMTP Settings" section
5. Make sure "Integrations" dropdown shows "Laravel 9+"
6. Copy the credentials shown:
   - **Host:** sandbox.smtp.mailtrap.io
   - **Port:** 2525
   - **Username:** (looks like: 1a2b3c4d5e6f7g)
   - **Password:** (looks like: 9h8i7j6k5l4m3n)

## Step 3: Update Your .env File

Open `portfolio/laravel/.env` and update these lines:

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=1a2b3c4d5e6f7g
MAIL_PASSWORD=9h8i7j6k5l4m3n
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@ryanmark.com"
MAIL_FROM_NAME="Ryan Mark Portfolio"
```

Replace:
- `1a2b3c4d5e6f7g` with your actual Mailtrap username
- `9h8i7j6k5l4m3n` with your actual Mailtrap password

## Step 4: Clear Configuration Cache

Run this command:
```bash
cd C:\xampp\htdocs\portfolio\laravel
php artisan config:clear
```

## Step 5: Test It!

1. Go to your contact page: http://localhost/portfolio/laravel/public/contact
2. Fill out the form and submit
3. Go back to Mailtrap inbox: https://mailtrap.io/inboxes
4. You should see the email there!

## What You'll See in Mailtrap

Mailtrap will show you:
- ✅ The email subject
- ✅ The email body (HTML formatted)
- ✅ All the contact form details
- ✅ Who it would have been sent to (lotarinoryan@gmail.com)
- ✅ When it was sent

## Benefits of Mailtrap

- ✅ **Free forever** (up to 500 emails/month)
- ✅ **No Gmail setup needed**
- ✅ **Perfect for testing**
- ✅ **See emails in nice web interface**
- ✅ **Check HTML rendering**
- ✅ **No spam issues**
- ✅ **Works immediately**

## When to Switch to Real Email

Once your website is live and you want real emails sent to your Gmail:

1. Enable 2-Step Verification on Gmail
2. Create App Password
3. Update `.env` to use Gmail settings
4. Run `php artisan config:clear`

For now, Mailtrap is perfect for development and testing!

## Troubleshooting

**Emails not showing in Mailtrap:**
1. Check if credentials are correct in `.env`
2. Make sure you ran `php artisan config:clear`
3. Check Laravel logs: `storage/logs/laravel.log`
4. Verify you're looking at the correct inbox in Mailtrap

**Need help?**
- Mailtrap Docs: https://help.mailtrap.io/
- Laravel Mail Docs: https://laravel.com/docs/mail

---

That's it! Super simple and works perfectly for testing. 🎉
