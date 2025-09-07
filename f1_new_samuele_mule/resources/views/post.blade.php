<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Progetto Web - Layout</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/post.css')}}" />
</head>

<body>
    <div class="page-wrapper">

        @include('partials.header')
        <main class="site-main">
            <!-- mettere poi nel css -->
            <div class="post-container">
                <div class="post-col">
                    <div>
                        <h1>the user {{$post->user->name}} has published</h1>
                    </div>
                    <div>
                        <img src="{{ $post->url_image}}" alt="{{$post->title}}">
                    </div>
                    <hr>
                    <div>
                        <h2> {{ $post->title }}</h2>
                        <p> {{ $post->description }} </p>
                    </div>
                </div>
                <div class="post-col">
                    <div>
                        @auth
                        <form action="{{ url('/comments') }}" method="post">
                            @csrf
                            <input type="text" name="content">
                            <input type="hidden" name="post_id" value="{{ $post->id}}">
                            <input type="submit" value="Commenta">
                        </form>
                        @endauth
                    </div>
                    <hr>
                    @foreach($post->comments as $comment)
                    <div>
                        <div>
                            <span>
                                <h3> {{$comment->user->name}} </h3>
                            </span>
                            <span>
                                @auth
                                <form action="{{ url('/likes') }}" method="post">
                                    @csrf
                                    <label>{{ count($comment->likes) }}</label>
                                    <input type="submit" value="❤️">
                                    @error('like')
                                    <span class="error-text">{{ $message }}</span>
                                    @enderror
                                    <input type="hidden" name="post_id" value="{{ $post->id}}">
                                    <input type="hidden" name="comment_id" value="{{ $comment->id}}">
                                </form>
                                @endauth
                            </span>
                        </div>
                        <hr>
                        <p> {{$comment->content}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
        @include('partials.footer')
    </div>

</body>

</html>