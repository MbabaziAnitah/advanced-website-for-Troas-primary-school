# Project Structure

```
.
├── index.html / index.php      Homepage (index.php renders the slider from the database)
├── about.html                  About the school
├── programmes.html             Academic programmes
├── admissions.html             Admissions information and application form
├── fees.html                   Fees
├── gallery.html                Photo gallery
├── contact.html                Contact details and message form
├── news.html                   News landing page
├── news-academic.html          News category: academic
├── news-announcements.html     News category: announcements
├── news-arts-culture.html      News category: arts and culture
├── news-sports.html            News category: sports
├── article-*.html              Individual news articles
├── slides.php                  Public JSON feed of live homepage slides
├── submit-admission.php        Handles the admissions form
├── submit-message.php          Handles the contact form
├── database.sql                MySQL schema (optional; SQLite is the default)
├── .htaccess                   Blocks private files, disables directory listing
├── HOSTING-GUIDE.txt           Original cPanel hosting walkthrough
├── admin/                      Admin panel, configuration and shared PHP helpers
│   ├── config.php              Database connection and helper functions
│   └── config.local.php        Optional local overrides (never committed)
├── assets/                     CSS, images, fonts, icons and uploads
│   └── uploads/                Files uploaded through the admin panel
├── data/                       SQLite database (created automatically, never committed)
└── docs/                       Project documentation
```

## How a request flows

1. A visitor opens a static page such as `about.html`. The browser loads CSS from `assets/css/`.
2. On the homepage, the slider data comes from the `content_items` table through `slides.php`.
3. When a form is submitted, the matching `submit-*.php` file validates the input, rejects spam, and stores a record using `admin/config.php`'s database connection.
4. Staff sign in through `admin/login.php` to read submissions and manage content.

## Files that must stay private

`database.sql`, `config.local.php`, `router.php` and the core PHP helpers (`layout.php`, `auth.php`, `config.php`) are denied direct web access by `.htaccess`. Do not remove those rules.
