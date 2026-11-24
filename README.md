# Advanced Website for Troas Primary School

A dynamic website for **Troas Primary School** (Wakisi Division, Njeru Municipality, Buikwe District, Uganda). I designed, built, tested and published it on a live domain and hosting account.

The public pages are fast, mobile-friendly HTML and CSS. A PHP back end powers the parts that need to change without editing code: the homepage slider, the admissions form, the contact form and a password-protected admin panel.

## Features

- **Public website:** Home, About, Programmes, News (with category pages and full articles), Gallery, Fees, Admissions and Contact.
- **Live homepage slider:** slides are stored in the database and served to the page as JSON by `slides.php`, so staff can change them from the admin panel.
- **Online admissions form:** parents submit a pupil's details; applications are saved with a `New` status for the school office. Boarding is blocked for the nursery classes.
- **Contact form:** validated messages are saved to an inbox in the admin panel.
- **Admin panel** (`admin/login.php`): manage slides, read admissions and messages, manage users, and download a database backup.
- **Spam and security basics:** hidden honeypot field on both forms, prepared SQL statements, server-side validation, protected config and database files via `.htaccess`.
- **Database choice:** SQLite by default (no setup needed), MySQL optional.

## Tech stack

| Layer | Technology |
| --- | --- |
| Front end | HTML5, CSS3, JavaScript, Font Awesome (local), Google Fonts |
| Back end | PHP 7.4+ (8.x works) with PDO |
| Database | SQLite (default) or MySQL (optional, see `database.sql`) |
| Hosting | Apache with `.htaccess` (cPanel / shared hosting, or WAMP locally) |

## Quick start

Full instructions are in [docs/SETUP.md](docs/SETUP.md). In short:

1. Copy the project into your web root (for example `public_html` on cPanel, or `www` in WAMP).
2. Make sure `data/` and `assets/uploads/` are writable.
3. Open the site. The SQLite database is created automatically on the first visit.
4. Sign in at `/admin/login.php` and choose your own password straight away.

## Documentation

- [Setup and hosting](docs/SETUP.md)
- [Project structure](docs/PROJECT-STRUCTURE.md)
- [Database schema](docs/DATABASE.md)
- [Testing checklist](docs/TESTING.md)
- [Changelog](CHANGELOG.md)
- `HOSTING-GUIDE.txt`: the original cPanel hosting walkthrough

## Security notes

- Never commit `admin/config.local.php` or your database file. `.gitignore` already excludes them.
- Change the default admin password on first login and use HTTPS on the live site.
- Keep `data/` and its `.htaccess` in place: they protect the database from direct download.

## Author

Mbabazi Pris Cillah Anitah, Bachelor of Information Technology, Mountains of the Moon University.
