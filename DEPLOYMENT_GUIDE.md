# Portfolio Website Deployment Guide

## Option 1: Vercel (Recommended)

### Prerequisites
1. Create a GitHub account
2. Create a Vercel account (free)
3. Push your code to GitHub

### Steps:
1. **Prepare your Laravel app:**
   ```bash
   # In your portfolio/laravel directory
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Create vercel.json in your project root:**
   ```json
   {
     "version": 2,
     "functions": {
       "api/index.php": { "runtime": "vercel-php@0.6.0" }
     },
     "routes": [
       {
         "src": "/(.*)",
         "dest": "/api/index.php"
       }
     ],
     "env": {
       "APP_ENV": "production",
       "APP_DEBUG": "false",
       "APP_URL": "https://your-domain.vercel.app"
     }
   }
   ```

3. **Create api/index.php:**
   ```php
   <?php
   require __DIR__ . '/../public/index.php';
   ```

4. **Push to GitHub and connect to Vercel**

## Option 2: Railway (Laravel-Friendly)

### Steps:
1. **Create railway.json:**
   ```json
   {
     "$schema": "https://railway.app/railway.schema.json",
     "build": {
       "builder": "nixpacks"
     },
     "deploy": {
       "startCommand": "php artisan serve --host=0.0.0.0 --port=$PORT"
     }
   }
   ```

2. **Update .env for production:**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://your-app.railway.app
   ```

3. **Connect GitHub repo to Railway**

## Option 3: Shared Hosting (cPanel)

### Steps:
1. **Upload files via FTP/File Manager**
2. **Move public folder contents to public_html**
3. **Update index.php paths**
4. **Set up database**
5. **Configure .env file**

## Pre-Deployment Checklist

### 1. Environment Configuration
- [ ] Set APP_ENV=production
- [ ] Set APP_DEBUG=false
- [ ] Generate APP_KEY: `php artisan key:generate`
- [ ] Configure database settings
- [ ] Set up email configuration (Mailtrap for testing)

### 2. Database Setup
```bash
php artisan migrate
php artisan db:seed --class=ReviewSeeder
```

### 3. Optimize for Production
```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 4. File Permissions (Linux/Unix hosting)
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

## Important Files to Upload
- All Laravel files except `node_modules`
- `.env` file (configure for production)
- `composer.json` and `composer.lock`
- Database migration files
- Your uploaded images in `public/assets/`

## Domain Configuration
1. **Custom Domain:** Point your domain to hosting provider
2. **SSL Certificate:** Enable HTTPS (most hosts provide free SSL)
3. **Database:** Create MySQL database and update .env

## Testing After Deployment
1. Visit your website URL
2. Test all pages (Home, About, Services, Contact, Portfolio pages)
3. Test contact form (emails should go to Mailtrap)
4. Test review system
5. Test all 6 functional apps
6. Check mobile responsiveness

## Troubleshooting
- **500 Error:** Check file permissions and .env configuration
- **Database Error:** Verify database credentials in .env
- **Missing Images:** Ensure images are uploaded to public/assets/
- **Email Issues:** Verify Mailtrap credentials in .env