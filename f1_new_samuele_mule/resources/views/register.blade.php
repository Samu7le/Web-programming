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
        <form method="POST" action="{{ route('users.store') }}" style="display: flex; flex-direction: column; align-items: center; justify-content: space-around;">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" />
            @error('name')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" />
            @error('email')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            @error('password')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <label for="password_confirmation">Confirm password:</label>
            <input type="password" name="password_confirmation" id="password_confimation" />
            @error('password_confirmation')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <input type="submit" value="Registrati">
        </form>
  </main>
  @include('partials.footer')
  </div>
  
</body>
</html>
