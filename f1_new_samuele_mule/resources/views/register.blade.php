<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progetto Web - Layout</title>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/auth.css')}}" />
  <script src="{{ asset('js/auth.js')}}" defer></script>
  <script src="{{ asset('js/avatar.js')}}" defer></script>
</head>

<body>
  <div class="page-wrapper">

    @include('partials.header')
    <main class="site-main">
      <span class="form-auth">
        <img id="avatar-img" src="https://api.dicebear.com/9.x/identicon/svg" alt="avatar">
        <button id="button-img">Genera casualmente</button>
      </span>
      <hr>
      <form method="POST" action="{{ route('users.store') }}" class="form-auth" name="register">
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
        <input id="url_image" type="hidden" name="url_image" value="https://api.dicebear.com/9.x/identicon/svg">

        <input type="submit" value="Registrati">
      </form>

    </main>
    @include('partials.footer')
  </div>

</body>

</html>