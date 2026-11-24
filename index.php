<?php require __DIR__ . '/admin/config.php'; $slides = get_slides(); $nSlides = count($slides); ?>
<!doctype html><html><head><meta charset=utf8><meta name=viewport content="width=device-width,initial-scale=1,viewport-fit=cover"><style>:root{color-scheme:light;box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}html{scroll-padding-top:env(safe-area-inset-top,0px)}body{margin:0;padding:0;font:14px -apple-system,BlinkMacSystemFont,sans-serif;background:#fff;color:#000}img{max-width:100%}[hidden]:not([hidden=until-found i]){display:none!important}</style></head><body>
<title>Troas Primary School</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Fraunces:opsz,wght@9..144,600;9..144,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/fa/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<a class="skip" href="#main">Skip to content</a>

<div class="topbar">
  <div class="wrap">
    <span><i class="fa-solid fa-location-dot"></i> Wakisi Division, Njeru Municipality, Buikwe District, Uganda</span>
    <span class="topbar-r">
      <a href="tel:+256755662270"><i class="fa-solid fa-phone"></i> +256755662270</a>
      <a href="mailto:info@troasprimary.edu"><i class="fa-solid fa-envelope"></i> info@troasprimary.edu</a>
    </span>
  </div>
</div>

<header class="site-header">
  <div class="wrap nav-row">
    <a class="brand" href="index.php">
      <img src="assets/images/badge.jpg" alt="" width="46" height="56">
      <span><strong>Troas Primary School</strong><small>Never give up</small></span>
    </a>
    <button class="nav-toggle" aria-expanded="false" aria-controls="nav" aria-label="Menu"><span class="bars"></span></button>
    <nav id="nav" class="nav" aria-label="Main">
              <a href="index.php" class="on" aria-current="page">Home</a>
              <a href="about.html">About</a>
              <a href="programmes.html">Programmes</a>
              <a href="news.html">News</a>
              <a href="gallery.html">Gallery</a>
              <a href="fees.html">Fees</a>
              <a href="contact.html">Contact</a>
            <a class="btn btn-gold nav-cta" href="admissions.html">Apply now</a>
    </nav>
  </div>
</header>
<main id="main">

<!-- Image carousel -->
<section class="carousel" aria-roledescription="carousel" aria-label="School highlights" data-interval="5500">
  <div class="slides">
<?php foreach ($slides as $i => $s): ?>
    <div class="slide<?= $i === 0 ? ' is-active' : '' ?>" role="group" aria-roledescription="slide" aria-label="<?= $i + 1 ?> of <?= $nSlides ?>" style="background-image:url('<?= h($s['image']) ?>')">
      <div class="slide-shade"></div>
      <div class="wrap slide-body">
        <?= $i === 0 ? '<h1' : '<h2' ?> class="slide-title"><?= h($s['title']) ?></<?= $i === 0 ? 'h1' : 'h2' ?>>
        <?php if (!empty($s['body'])): ?><p><?= h($s['body']) ?></p><?php endif; ?>
        <?php if (!empty($s['link_text']) && !empty($s['link_url'])): ?><a class="btn btn-gold" href="<?= h($s['link_url']) ?>"><?= h($s['link_text']) ?> <i class="fa-solid fa-arrow-right"></i></a><?php endif; ?>
      </div>
    </div>
<?php endforeach; ?>
  </div>
  <button class="c-btn c-prev" aria-label="Previous slide"><i class="fa-solid fa-chevron-left"></i></button>
  <button class="c-btn c-next" aria-label="Next slide"><i class="fa-solid fa-chevron-right"></i></button>
  <div class="c-dots" role="tablist" aria-label="Choose slide">
    <?php foreach ($slides as $i => $s): ?><button role="tab" aria-label="Slide <?= $i + 1 ?>" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"<?= $i === 0 ? ' class="on"' : '' ?>></button><?php endforeach; ?>
  </div>
  <button class="c-pause" aria-label="Pause slideshow"><i class="fa-solid fa-pause"></i></button>
  </section>

<!-- Animated counters (numbers come from the database) -->
<section class="counters" aria-label="Troas in numbers">
  <div class="wrap counter-grid">
        <div class="counter">
      <i class="fa-solid fa-children"></i>
      <div class="counter-num"><span data-count="800">0</span>+</div>
      <div class="counter-label">Learners enrolled</div>
    </div>
        <div class="counter">
      <i class="fa-solid fa-chalkboard-user"></i>
      <div class="counter-num"><span data-count="60">0</span>+</div>
      <div class="counter-label">Teaching and support staff</div>
    </div>
        <div class="counter">
      <i class="fa-solid fa-award"></i>
      <div class="counter-num"><span data-count="24">0</span></div>
      <div class="counter-label">Years of excellence</div>
    </div>
        <div class="counter">
      <i class="fa-solid fa-school"></i>
      <div class="counter-num"><span data-count="10">0</span></div>
      <div class="counter-label">Classes, Baby to P.7</div>
    </div>
      </div>
</section>

<!-- Welcome -->
<section class="section">
  <div class="wrap split">
    <div>
      <p class="eyebrow">Welcome</p>
      <h2>A school where every child can grow, learn and lead</h2>
      <p>Founded on excellence and integrity, Troas Primary School has been educating children for over two decades. We warmly welcome all learners, parents and visitors to a school where education is built on knowledge, discipline and character.</p>
      <p>Our dedicated, qualified teachers use modern methods and individual attention so each child can reach their full potential. We value moral guidance, respect and responsibility, and we work in close partnership with parents and guardians.</p>
      <ul class="ticks">
        <li>Safe, supportive and inclusive learning environment</li>
        <li>Sports, music, dance, clubs and ICT beyond the classroom</li>
        <li>Strong record in national examinations and competitions</li>
      </ul>
      <a class="btn" href="about.html">Learn more about us</a>
    </div>
    <figure class="photo-frame"><img src="assets/images/slide-building.jpg" alt="Troas Primary School main building" loading="lazy" width="1600" height="889"></figure>
  </div>
</section>

<!-- Programmes -->
<section class="section tint">
  <div class="wrap">
    <div class="section-head"><p class="eyebrow">What we offer</p><h2>Our programmes</h2></div>
    <div class="cards">
            <article class="card">
        <img src="assets/images/slide-classroom.jpg" alt="" loading="lazy" width="640" height="400">        <div class="card-body"><i class="fa-solid fa-book-open card-icon"></i><h3>Academic Programmes</h3><p>A rigorous curriculum covering Mathematics, Sciences, Languages and Social Studies, tailored for primary education and PLE preparation.</p></div>
      </article>
            <article class="card">
        <img src="assets/images/swimming.jpg" alt="" loading="lazy" width="640" height="400">        <div class="card-body"><i class="fa-solid fa-music card-icon"></i><h3>Extracurriculars</h3><p>Diverse clubs including Music, Dance, Drama, Chess and Coding to help learners discover and nurture their talents.</p></div>
      </article>
            <article class="card">
        <img src="assets/images/slide-athletics.jpg" alt="" loading="lazy" width="640" height="400">        <div class="card-body"><i class="fa-solid fa-person-running card-icon"></i><h3>Sports and Athletics</h3><p>Physical education and competitive sports including football, swimming and track and field.</p></div>
      </article>
            <article class="card">
        <img src="assets/images/ict-lab.jpg" alt="" loading="lazy" width="640" height="400">        <div class="card-body"><i class="fa-solid fa-computer card-icon"></i><h3>ICT and Library</h3><p>A computer lab and reading resources that encourage a love of reading, independent research and digital skills.</p></div>
      </article>
            <article class="card">
        <img src="assets/images/bus.jpg" alt="" loading="lazy" width="640" height="400">        <div class="card-body"><i class="fa-solid fa-bus card-icon"></i><h3>School Transport</h3><p>Safe and reliable transport covering major residential areas, with professional drivers and attendants.</p></div>
      </article>
            <article class="card">
        <img src="assets/images/counselling.jpg" alt="" loading="lazy" width="640" height="400">        <div class="card-body"><i class="fa-solid fa-heart card-icon"></i><h3>Counselling and Support</h3><p>Dedicated support providing emotional guidance and academic counselling for every learner.</p></div>
      </article>
          </div>
  </div>
</section>

<!-- Latest news -->
<section class="section">
  <div class="wrap">
    <div class="section-head row"><div><p class="eyebrow">Stay in touch</p><h2>News and achievements</h2></div><a class="link-arrow" href="news.html">All news <i class="fa-solid fa-arrow-right"></i></a></div>
    <div class="cards">
            <article class="card">
        <a href="article-admissions-open-term-1-2027.html"><img src="assets/images/slide-building.jpg" alt="" loading="lazy" width="640" height="400"></a>
        <div class="card-body">
          <span class="tag">Announcements</span> <time>2 Nov 2026</time>
          <h3><a href="article-admissions-open-term-1-2027.html">Admissions open for Term 1, 2027</a></h3>
          <p>Apply online for Baby Class to Primary Seven, day or boarding.</p>
        </div>
      </article>
            <article class="card">
        <a href="article-annual-science-fair.html"><img src="assets/images/ict-lab.jpg" alt="" loading="lazy" width="640" height="400"></a>
        <div class="card-body">
          <span class="tag">Academic</span> <time>14 Nov 2025</time>
          <h3><a href="article-annual-science-fair.html">Annual Science Fair showcases young innovators</a></h3>
          <p>Learners presented projects from renewable energy to simple robotics.</p>
        </div>
      </article>
            <article class="card">
        <a href="article-athletics-champions.html"><img src="assets/images/slide-athletics.jpg" alt="" loading="lazy" width="640" height="400"></a>
        <div class="card-body">
          <span class="tag">Sports</span> <time>3 Oct 2025</time>
          <h3><a href="article-athletics-champions.html">Troas athletes shine at inter-school athletics</a></h3>
          <p>Our runners took home medals in the inter-school athletics competition.</p>
        </div>
      </article>
          </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="wrap cta-row">
    <div><h2>Admissions are open for Term 1, 2027</h2><p>Apply online in a few minutes. Baby Class to Primary Seven, day and boarding.</p></div>
    <a class="btn btn-gold btn-lg" href="admissions.html">Start your application</a>
  </div>
</section>

</main>
<footer class="site-footer">
  <div class="wrap foot-grid">
    <div>
      <div class="foot-brand"><img src="assets/images/badge.jpg" alt="" width="44" height="54"><strong>Troas Primary School</strong></div>
      <p>Nurturing young minds for a bright future. Quality education built on knowledge, discipline and character.</p>
      <p class="social">
        <a href="https://www.facebook.com/" aria-label="Facebook" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" aria-label="Instagram" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
      </p>
    </div>
    <div>
      <h3>Quick links</h3>
      <ul>
        <li><a href="index.php">Home</a></li><li><a href="about.html">About</a></li><li><a href="programmes.html">Programmes</a></li><li><a href="news.html">News</a></li><li><a href="gallery.html">Gallery</a></li><li><a href="fees.html">Fees</a></li><li><a href="contact.html">Contact</a></li>        <li><a href="admissions.html">Admissions</a></li>
      </ul>
    </div>
    <div>
      <h3>Contact</h3>
      <p><i class="fa-solid fa-location-dot"></i> Wakisi Division, Njeru Municipality, Buikwe District, Uganda</p>
      <p><i class="fa-solid fa-phone"></i> +256755662270</p>
      <p><i class="fa-solid fa-envelope"></i> info@troasprimary.edu</p>
      <p><i class="fa-solid fa-clock"></i> Mon - Fri, 7:30am - 5:00pm</p>
    </div>
  </div>
  <div class="wrap foot-bottom">
    <span>&copy; 2026 Troas Primary School. All rights reserved.</span>
    <span class="visitors" title="Total visits to this website"><i class="fa-solid fa-eye"></i> Visitors: <strong>14</strong></span>
    <a href="admin/login.php" class="staff-link">Staff login</a>
  </div>
<a class="whatsapp-float" href="https://wa.me/256755662270?text=Hello%20Troas%20Primary%20School" target="_blank" rel="noopener" aria-label="Chat with Troas on WhatsApp"><i class="fa-brands fa-whatsapp"></i><span>WhatsApp</span></a>
</footer>
<script src="assets/js/main.js" defer></script>

<script>document.body.classList.add("page-home");</script>

</body></html>