# Testing Checklist

Run through this list after any change and before publishing. Tick each item and note the date and tester.

## Public pages

- [ ] Every menu link opens the correct page (Home, About, Programmes, News, Gallery, Fees, Contact, Apply now).
- [ ] News category pages and all six article pages load and link back correctly.
- [ ] Images, icons and fonts load with no broken links (check the browser console).
- [ ] Layout works on a phone (narrow screen), a tablet and a desktop.
- [ ] The mobile menu button opens and closes the navigation.

## Homepage slider

- [ ] Slides appear on `index.php` and rotate.
- [ ] `slides.php` returns valid JSON in the browser.
- [ ] A slide hidden in the admin panel disappears from the homepage.
- [ ] Slide buttons go to the correct pages.

## Admissions form

- [ ] Submitting with a required field empty shows the "complete all required fields" message.
- [ ] Choosing Baby, Middle or Top Class with **Boarding** is rejected.
- [ ] A valid application shows the "application received" page.
- [ ] The application appears in the admin panel with status `New`.
- [ ] Opening `submit-admission.php` directly redirects to `admissions.html`.

## Contact form

- [ ] An invalid email address is rejected.
- [ ] A message shorter than 10 characters is rejected.
- [ ] A valid message shows the confirmation page and appears in the admin inbox.
- [ ] Opening `submit-message.php` directly redirects to `contact.html`.

## Security

- [ ] `admin/login.php` rejects a wrong password.
- [ ] The default admin password has been changed.
- [ ] `yourdomain/database.sql` and `yourdomain/admin/config.php` are **not** downloadable (should show 403).
- [ ] Directory listing is off (visiting `/assets/` does not list files).
- [ ] The site loads over `https://`.

## Hosting

- [ ] `data/` and `assets/uploads/` are writable.
- [ ] A fresh admin backup downloads and opens correctly.

## Test log

| Date | Tester | Result | Notes |
| --- | --- | --- | --- |
| | | | |
