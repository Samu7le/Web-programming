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
    
    @include('partials.header')
    <div class="news-container">
      <div class="main-item">
          <img src="{{ asset('imgs/f1_logo.png')}}" alt="">
      </div>
      <div class="side-column">
          <div class="news-item">news 2</div>
          <div class="news-item">news 3</div>
          <div class="news-item">news 4</div>
      </div>
    </div>


    
  </div>
  @include('partials.footer')
</body>
</html>
