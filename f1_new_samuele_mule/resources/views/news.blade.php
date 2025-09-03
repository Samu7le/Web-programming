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
                @foreach($news_list as $news)
                <li class="news-item-list">
                    
                        <div class="news-card">
                            <div class="news-card-col-photo">
                                <a href="{{route('news.show', $news->title)}}">
                                    <img class="news-card-img" src="{{ $news->urlToImage}}" alt="">
                                </a>
                            </div>
                            <div class="news-card-col-text">
                                <h2>{{$news->title}}</h2>
                                <hr>
                                <p>{{$news->description}}</p>
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