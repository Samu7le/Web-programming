<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progetto Web - Layout</title>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
</head>
<body>
  <div class="page-wrapper">
    <header class="site-header">
      <div class="logo">F1</div>
      <nav class="nav">
        <a href="#">Home</a>
        <a href="#">News</a>
        <a href="#">Auto</a>
      </nav>
      <div class="profile">
        <div class="avatar">P</div>
        <span>Profilo</span>
      </div>
    </header>

    <main class="site-main">
      <section class="carousel">
        <h2>Carosello News</h2>
        <div class="carousel-placeholder">
          <p>Contenuto del carosello</p>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <p>© 2025 - Progetto Universitario</p>
      <div class="footer-buttons">
        <a class="footer-btn" href="https://github.com/Samu7le" target="_blank">GitHub</a>
        <a class="footer-btn" href="https://www.linkedin.com/in/samuele-mul%C3%A8/" target="_blank">LinkedIn</a>
      </div>
    </footer>
  </div>
</body>
</html>
