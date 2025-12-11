# Vercel Deployment Guide - Step by Step

## Prerequisites ✅
- [x] vercel.json configured
- [x] api/index.php created
- [x] .gitignore created
- [x] Laravel app ready

## Step 1: Create GitHub Repository

### 1.1 Initialize Git (if not already done)
```bash
cd portfolio/laravel
git init
git add .
git commit -m "Initial commit - Laravel Portfolio"
```

### 1.2 Create GitHub Repository
1. Go to https://github.com
2. Click "New repository"
3. Name it: `portfolio-website` or `ryan-portfolio`
4. Make it **Public** (required for free Vercel)
5. Don't initialize with README (we already have files)
6. Click "Create repository"

### 1.3 Connect Local to GitHub
```bash
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
git branch -M main
git push -u origin main
```

## Step 2: Deploy to Vercel

### 2.1 Sign Up for Vercel
1. Go to https://vercel.com
2. Click "Sign Up"
3. Choose "Continue with GitHub"
4. Authorize Vercel to access your GitHub

### 2.2 Import Your Project
1. Click "New Project" on Vercel dashboard
2. Find your repository in the list
3. Click "Import"

### 2.3 Configure Project Settings
**Framework Preset:** Other
**Root Directory:** Leave empty (.)
**Build Command:** Leave empty
**Output Directory:** Leave empty
**Install Command:** `composer install`

### 2.4 Environment Variables
Click "Environment Variables" and add:

```
APP_NAME=Ryan Mark Portfolio
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://your-project.vercel.app

CACHE_DRIVER=array
SESSION_DRIVER=array
LOG_CHANNEL=stderr

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@ryanmark.com
MAIL_FROM_NAME=Ryan Mark Portfolio
```

### 2.5 Deploy
1. Click "Deploy"
2. Wait for deployment to complete (2-3 minutes)
3. Your site will be live at: `https://your-project.vercel.app`

## Step 3: Generate APP_KEY

### 3.1 Get Your APP_KEY
Run this locally:
```bash
php artisan key:generate --show
```

### 3.2 Update Environment Variable
1. Go to Vercel dashboard → Your project → Settings → Environment Variables
2. Edit APP_KEY variable
3. Paste the generated key (including `base64:` prefix)
4. Save and redeploy

## Step 4: Upload Your Logo
1. Save your `rylogo.png` file to `portfolio/laravel/public/assets/`
2. Commit and push:
```bash
git add public/assets/rylogo.png
git commit -m "Add logo"
git push
```
3. Vercel will auto-deploy the update

## Step 5: Test Your Live Website

### Test These Features:
- ✅ Homepage loads
- ✅ All navigation links work
- ✅ Portfolio pages display
- ✅ All 6 functional apps work
- ✅ Contact form (check Mailtrap)
- ✅ Review system
- ✅ Mobile responsive design

## Troubleshooting

### Common Issues:

**1. 500 Internal Server Error**
- Check APP_KEY is set correctly
- Verify all environment variables

**2. Missing Images**
- Ensure images are in `public/assets/`
- Check file paths in code

**3. Database Errors**
- Reviews won't work without database
- Consider using SQLite for simple deployment

**4. Email Not Working**
- Verify Mailtrap credentials
- Check MAIL_* environment variables

## Custom Domain (Optional)

### Add Your Own Domain:
1. Buy domain from any registrar
2. In Vercel: Settings → Domains
3. Add your domain
4. Update DNS records as instructed
5. SSL certificate auto-generated

## Automatic Deployments

Every time you push to GitHub:
- Vercel automatically rebuilds
- New version goes live in ~2 minutes
- Zero downtime deployments

## Your Live URLs:
- **Main Site:** https://your-project.vercel.app
- **Apps:** https://your-project.vercel.app/apps/task-manager
- **Portfolio:** https://your-project.vercel.app/app-design

## Next Steps After Deployment:
1. Share your live URL with clients
2. Add custom domain if desired
3. Monitor analytics in Vercel dashboard
4. Update content by pushing to GitHub