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
    <!-- mettere poi nel css -->
        <div style="display: flex; flex-direction: row; width: 100%;">
            <div style="display: flex; flex-direction: column; height: 100%; width: 50%;">
                <div>
                    <h1>the user {{$post->user->name}} has published</h1>
                </div>
                <div>
                    <img src="{{ $post->url_image}}" alt="{{$post->title}}" style= "object-fit: cover; width: 50%; height: auto;">
                </div>
                <hr>
                <div>
                    <h2> {{ $post->title }}</h2>
                    <p> {{ $post->content }} </p>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; height: 100%; width: 50%;">
                <div>
                    <form action="{{ url('/comments') }}" method="post">
                        @csrf
                        <input type="text" name="content">
                        <input type="hidden" name="post_id" value="{{ $post->id}}">
                        <input type="submit" value="Commenta">
                    </form>
                </div>
                <hr>
                @foreach($post->comments as $comment)
                <div>
                    <div>
                        <span>
                            <h3> {{$comment->user->name}} </h3>
                        </span>
                        <span>
                            <form action="{{ url('/likes') }}" method="post">
                                @csrf
                                <input type="text" value="{{ count($comment->likes) }}" disabled>
                                <input type="submit" value="❤️">
                                <input type="hidden" name="post_id" value="{{ $post->id}}">
                                <input type="hidden" name="comment_id" value="{{ $comment->id}}">
                            </form>
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