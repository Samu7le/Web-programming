<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progetto Web - Layout</title>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/auth.css')}}" />
  <script src="{{ asset('js/auth.js')}}" defer></script>
</head>
<body>
  <div class="page-wrapper">
    
  @include('partials.header')
  <main class="site-main">
        <form method="POST" action="{{ route('users.get') }}" class="form-auth" name="login">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" />
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            <input type="submit" value="Login">
            @error('credential')
            <h1>{{ $message }}</h1>
            @enderror
        </form>
  </main>
  @include('partials.footer')
  </div>
  
</body>
</html>
