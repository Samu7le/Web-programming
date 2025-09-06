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
        <form method="POST" action="{{ route('users.get') }}" style="display: flex; flex-direction: column; align-items: center; justify-content: space-around;">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" />
            @error('email')
            <h1>{{ $message }}</h1>
            @enderror
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            @error('password')
            <h1>{{ $message }}</h1>
            @enderror
            <input type="submit" value="Login">
        </form>
  </main>
  @include('partials.footer')
  </div>
  
</body>
</html>
