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
                        <form method="POST" action="{{ route('posts.store') }}" class="news-card-col-text">
                            @csrf
                            <input type="text" value="{{$news->title}}" name="title">
                            <hr>
                            <input type="text" value="{{$news->description}}" name="description">
                            <hr>
                            <input type="hidden" value="{{ $news->urlToImage}}" name= "image">
                            <input type="hidden" value="{{ $news->content}}" name= "content">
                            <input type="submit" value="repost">
                        </form>
                    </div>

                </li>
                @endforeach
            </ul>
        </main>
        @include('partials.footer')
    </div>
</body>

</html>