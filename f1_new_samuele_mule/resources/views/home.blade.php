<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progetto Web - Layout</title>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/home.css')}}" />
  <script src="{{ asset('js/home.js') }}" defer></script>
</head>

<body>
  <div class="page-wrapper">

    @include('partials.header')
    <main class="site-main">
      <div class="news-container-home">
        <div class="main-item" id="main-item">
          <a href="{{ url('/about') }}">
            <img src="{{ asset('imgs/f1_logo.png')}}" alt="">
            <h2>About:</h2>
          </a>
        </div>
        <div class="side-column">
          <h3> Gli ultimi 3 post pubblicati dagli utenti</h3>
          @foreach($posts as $post)
          <div class="news-item">
            <button>
              {{$post->title}}
              <input id="url" type="hidden" value="{{route('posts.show', $post->id)}}">
              <input id="img" type="hidden" value="{{ $post->url_image}}">
            </button>

          </div>
          @endforeach
        </div>
      </div>
    </main>
    @include('partials.footer')
  </div>
</body>

</html>