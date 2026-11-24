# Setup and Hosting Guide

## Requirements

- PHP 7.4 or newer (8.x is fine) with the `pdo_sqlite` extension (on by default on almost every host).
- Apache with `.htaccess` support (cPanel shared hosting, or WAMP on Windows).
- MySQL is **optional**. The site uses SQLite unless you configure otherwise.

## Option A: Local (WAMP or PHP built-in server)

1. Copy the project folder into WAMP's `www` directory, or open a terminal in the project folder.
2. Built-in server alternative: `php -S localhost:8000`
3. Visit `http://localhost/<folder>/` (WAMP) or `http://localhost:8000` (built-in server).
4. The SQLite database is created automatically on the first visit.

## Option B: cPanel / shared hosting

1. Log in to cPanel, open **File Manager**, then open `public_html` (or your domain's folder).
2. Upload the project (as a zip) and click **Extract**. `index.html`, `about.html`, `admin/` and `assets/` must sit directly in that folder, not inside another folder.
3. Set permissions so `data/` and `assets/uploads/` are writable (755, or 775 if uploads fail).
4. Visit your domain. The database is created on the first visit.
5. Sign in at `yourdomain/admin/login.php`, then choose your own password when prompted.
6. Turn on the free SSL certificate (AutoSSL / Let's Encrypt) so the site and login use `https://`.

## Using MySQL instead of SQLite (optional)

1. Create `admin/config.local.php`. A template is provided in `admin/config.local.example.php`.
2. Import `database.sql` using phpMyAdmin.
3. Fill in the host, database name, user and password in `config.local.php`.

`config.local.php` is ignored by Git and blocked from the web by `.htaccess`, so your credentials are never published.

## Before going live

- Update the official fees, address, phone number, email address, staff names and social media links.
- Change the default admin password immediately and do not reuse it elsewhere.
- Back up regularly: download the database backup from the admin panel and the `assets/uploads/` folder.

## Troubleshooting

| Problem | Likely cause and fix |
| --- | --- |
| Blank page or HTTP 500 | `admin/config.php` is missing or PHP is older than 7.4. Check the host's PHP version. |
| "Could not open database" | `data/` is not writable. Set permissions to 755 or 775. |
| Image uploads fail | `assets/uploads/` is not writable. |
| Forms say "Submission rejected" | A hidden spam-trap field was filled in. This is the honeypot working as intended. |
| Pages show raw PHP code | The host is not running PHP for that folder. Contact the host. |
