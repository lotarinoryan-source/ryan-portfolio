# Vercel Environment Variables Setup

## Step 3: Add Environment Variables in Vercel

### How to Add Environment Variables:

1. **Go to your Vercel project dashboard**
2. **Click on your project name**
3. **Click "Settings" tab**
4. **Click "Environment Variables" in the left sidebar**
5. **Click "Add New" button**

### Required Environment Variables:

Add these one by one (Name → Value):

#### **APP_KEY**
- **Name:** `APP_KEY`
- **Value:** `base64:IFz5K6GRpF0V14LVuxcN1HI/yagQtXusw0HiIZHJcug=`
- **Environment:** All (Production, Preview, Development)

#### **APP_ENV**
- **Name:** `APP_ENV`
- **Value:** `production`
- **Environment:** All

#### **APP_DEBUG**
- **Name:** `APP_DEBUG`
- **Value:** `false`
- **Environment:** All

#### **CACHE_DRIVER**
- **Name:** `CACHE_DRIVER`
- **Value:** `array`
- **Environment:** All

#### **SESSION_DRIVER**
- **Name:** `SESSION_DRIVER`
- **Value:** `array`
- **Environment:** All

#### **LOG_CHANNEL**
- **Name:** `LOG_CHANNEL`
- **Value:** `stderr`
- **Environment:** All

### Optional - Email Configuration (Mailtrap):

#### **MAIL_MAILER**
- **Name:** `MAIL_MAILER`
- **Value:** `smtp`

#### **MAIL_HOST**
- **Name:** `MAIL_HOST`
- **Value:** `sandbox.smtp.mailtrap.io`

#### **MAIL_PORT**
- **Name:** `MAIL_PORT`
- **Value:** `2525`

#### **MAIL_USERNAME**
- **Name:** `MAIL_USERNAME`
- **Value:** `your_mailtrap_username`

#### **MAIL_PASSWORD**
- **Name:** `MAIL_PASSWORD`
- **Value:** `your_mailtrap_password`

#### **MAIL_ENCRYPTION**
- **Name:** `MAIL_ENCRYPTION`
- **Value:** `tls`

#### **MAIL_FROM_ADDRESS**
- **Name:** `MAIL_FROM_ADDRESS`
- **Value:** `noreply@ryanmark.com`

#### **MAIL_FROM_NAME**
- **Name:** `MAIL_FROM_NAME`
- **Value:** `Ryan Mark Portfolio`

### After Adding All Variables:

1. **Click "Save" for each variable**
2. **Go back to "Deployments" tab**
3. **Click "Redeploy" on the latest deployment**
4. **Wait for deployment to complete**

### ✅ Your website should now work at:
`https://your-project-name.vercel.app`