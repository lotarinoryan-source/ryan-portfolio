# Deploy Laravel Portfolio to Vercel

## Prerequisites
1. GitHub account
2. Vercel account (sign up at https://vercel.com)
3. Git installed on your computer

## Step-by-Step Deployment

### 1. Generate APP_KEY
```bash
php artisan key:generate --show
```
Copy the generated key (it looks like: base64:xxxxxxxxxxxxx)

### 2. Update vercel.json
Open `vercel.json` and replace `"APP_KEY": "base64:your-app-key-here"` with your actual key

### 3. Initialize Git Repository (if not already done)
```bash
git init
git add .
git commit -m "Initial commit - Laravel Portfolio"
```

### 4. Create GitHub Repository
1. Go to https://github.com/new
2. Create a new repository (e.g., "portfolio")
3. Don't initialize with README

### 5. Push to GitHub
```bash
git remote add origin https://github.com/YOUR_USERNAME/portfolio.git
git branch -M main
git push -u origin main
```

### 6. Deploy to Vercel
1. Go to https://vercel.com/new
2. Click "Import Project"
3. Select your GitHub repository
4. Vercel will auto-detect settings
5. Click "Deploy"

### 7. Environment Variables (Important!)
After deployment, go to:
- Project Settings → Environment Variables
- Add these variables:
  - `APP_KEY`: (your generated key)
  - `APP_ENV`: production
  - `APP_DEBUG`: false
  - `DB_CONNECTION`: (if using database)

### 8. Access Your Site
Your portfolio will be live at: `https://your-project.vercel.app`

## Important Notes

⚠️ **Vercel Limitations for Laravel:**
- No persistent file storage
- No database (use external DB like PlanetScale, Supabase)
- Contact form emails need external service (SendGrid, Mailgun)

## Alternative: Use Railway.app Instead
For full Laravel support with database:
```bash
# Install Railway CLI
npm i -g @railway/cli

# Login
railway login

# Deploy
railway init
railway up
```

Railway is better for Laravel because it supports:
✅ MySQL/PostgreSQL database
✅ File storage
✅ Background jobs
✅ Full PHP support

## Recommended: Railway.app
Visit: https://railway.app
- Connect GitHub
- Select repository
- Auto-deploy
- Free $5 credit monthly
