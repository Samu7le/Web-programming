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
    <main class="site-main">
        <div class="news-container-home">
          <div class="main-item">
            <a href="{{ url('/about') }}"> 
              <img src="{{ asset('imgs/f1_logo.png')}}" alt="">
            </a>
          </div>
          <div class="side-column">
            @foreach($posts as $post)
              <div class="news-item"> <a href="{{route('posts.show', $post->id)}}">{{$post->title}} </a> </div>
            @endforeach
          </div>
        </div>
    </main>
    @include('partials.footer')  
  </div>
</body>
</html>
