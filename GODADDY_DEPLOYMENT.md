# GoDaddy Web Hosting Deployment Guide

This guide explains how to deploy your Laravel-based ProPresence website on GoDaddy Shared Hosting. We provide two deployment approaches:
- **Approach A (Easiest)**: Single directory upload using the preconfigured root `.htaccess` file.
- **Approach B (Most Secure / Recommended)**: Splitting the public folder and core Laravel files to prevent unauthorized access to codebase files.

---

## Prerequisites

1. **PHP Version**: Ensure your GoDaddy cPanel is running **PHP 8.2 or higher** (matching current Laravel requirements). You can change this in cPanel under **Select PHP Version**.
2. **Database**: Create a MySQL database and user in GoDaddy cPanel (**MySQL Database Wizard**) and write down:
   - Database Name
   - Database User
   - Database Password
   - Database Host (usually `127.0.0.1` or `localhost`)

---

## Approach A: Single Directory Upload (Using `.htaccess`)
This is the easiest approach since it allows you to upload the entire project folder as a single ZIP file directly into your domain's document root (typically `public_html`).

### Step 1: Zip the Project
Compress the entire project directory (excluding `node_modules` and the `vendor` folder, as you will upload them, but excluding them reduces ZIP size if you want to run composer on the server, though uploading them is easier on shared hosting since GoDaddy doesn't always have Composer).
> [!TIP]
> On GoDaddy shared hosting, it is usually easiest to zip and upload the **entire** project including the `vendor/` folder, as running `composer install` via SSH is often blocked or runs out of memory.

### Step 2: Upload and Extract in cPanel
1. Open cPanel and navigate to **File Manager**.
2. Go to `public_html` (or the folder of your subdomain).
3. Click **Upload** and select your ZIP file.
4. Once uploaded, right-click the file and click **Extract**.

### Step 3: Configure Environment Variables
1. Show hidden files in File Manager (Settings -> check "Show Hidden Files").
2. Right-click the `.env` file and click **Edit**.
3. Update the following values:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_godaddy_db_name
   DB_USERNAME=your_godaddy_db_user
   DB_PASSWORD=your_godaddy_db_password
   ```
4. Save changes.

### Step 4: The Root `.htaccess` file
We have already created a secure `.htaccess` in your project's root folder. When you uploaded the project, it was extracted automatically. This file does two things:
1. Redirects all traffic arriving at `yourdomain.com` into `yourdomain.com/public` transparently.
2. Returns a `403 Forbidden` error if anyone tries to directly access sensitive folders (`app`, `config`, `routes`, etc.) or files (`.env`, `composer.json`, `artisan`).

---

## Approach B: Split Directory Structure (Highly Recommended)
This is the most secure method. By moving the core Laravel application files outside the web-accessible `public_html` folder, you guarantee that your code and credentials can never be accessed via a browser, even if server configurations change.

### Step 1: Create Core Folder
1. Log in to GoDaddy cPanel **File Manager**.
2. Go to your home directory `/home/your_username/` (one level above `public_html`).
3. Create a new folder named `laravel_core`.

### Step 2: Upload Files
1. Zip everything in your project **except** the `public` folder. Upload and extract this ZIP inside `/home/your_username/laravel_core/`.
2. Zip the contents of your `public/` directory. Upload and extract this ZIP directly inside `/home/your_username/public_html/` (or your subdomain's document root).

### Step 3: Edit `public_html/index.php`
Since the files are now in two separate locations, we need to update the path references in the public entry point.
1. Open `/home/your_username/public_html/index.php` in the cPanel Editor.
2. Modify the paths to point to the `laravel_core` folder. Change:
   - Line 9 (maintenance mode check):
     ```php
     if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
     ```
     to:
     ```php
     if (file_exists($maintenance = __DIR__.'/../laravel_core/storage/framework/maintenance.php')) {
     ```
   - Line 14 (Composer autoloader):
     ```php
     require __DIR__.'/../vendor/autoload.php';
     ```
     to:
     ```php
     require __DIR__.'/../laravel_core/vendor/autoload.php';
     ```
   - Line 18 (Bootstrap Laravel):
     ```php
     $app = require_once __DIR__.'/../bootstrap/app.php';
     ```
     to:
     ```php
     $app = require_once __DIR__.'/../laravel_core/bootstrap/app.php';
     ```
3. Save changes.

### Step 4: Configure Environment Variables
Configure the `.env` file located inside `/home/your_username/laravel_core/.env` following the instructions in **Approach A -> Step 3**.

---

## Useful GoDaddy Hacks & Troubleshooting

### 1. Database Migrations
If you don't have SSH access to run `php artisan migrate`, you can temporarily define a web route to run it.
Open `routes/web.php` and append this temporary helper route:
```php
Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return "Migrations ran successfully!<br><pre>" . Artisan::output() . "</pre>";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});
```
Visit `yourdomain.com/run-migrations` once to execute migrations, and then **delete the route** immediately for security.

### 2. Creating the Storage Link
Laravel uses symlinks for storage. If you don't have SSH access, use a temporary route:
```php
Route::get('/run-symlink', function () {
    try {
        Artisan::call('storage:link');
        return "Storage link created successfully!";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});
```
Visit `yourdomain.com/run-symlink` to set up the link, then **delete the route**.

### 3. Clear Caches
Whenever you edit `.env` or configurations, you might need to clear cached settings. Use this route if needed:
```php
Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "All caches cleared!";
});
```
