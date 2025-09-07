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
            <ul class="news-container">
                @foreach($posts as $post)
                <li class="news-item-list">

                    <div class="news-card">
                        <div class="news-card-col-photo">
                            <a href="{{ route('posts.show', $post->id) }}">
                                <img class="news-card-img" src="{{ $post->url_image}}" alt="">
                            </a>
                        </div>
                        <div class="news-card-col-text">
                            <h2> l'Utente {{$post->user->name }} ha postato:</h2>
                            <hr>
                            <h3> {{ $post->title }}</h3>
                            <hr>
                            <p> {{ $post->description }} </p>
                            <div style="display: flex; justify-content: end; padding: 10px">
                                <a href="{{ route('posts.show', $post->id) }}"> vai al post</a>
                            </div>
                            
                        </div>
                    </div>

                </li>
                @endforeach
            </ul>
        </main>
        @include('partials.footer')
    </div>
</body>

</html>