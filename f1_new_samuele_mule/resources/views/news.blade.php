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
    
    <div class="news-flex-container">
  <div class="news-left">
    <img src="{{ asset('imgs/f1_logo.png') }}" alt="News Main">
  </div>
  <div class="news-right">
    <div class="news-item">
      
    </div>
    <div class="news-item">
    </div>
    <div class="news-item">
    </div>
  </div>
  </div>

    
  </div>
  @include('partials.footer')
</body>
</html>
