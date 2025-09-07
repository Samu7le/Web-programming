<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Progetto Web - Layout</title>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/profile.css')}}" />
</head>

<body>
  <div class="page-wrapper">

    @include('partials.header')
    <main class="site-main">
      <div class="profile-container">
        <form method="POST" action="{{ route('change.image') }}" class="form-profile">
          @csrf
          <span class="form-image-container">
            <div>
              <img src="{{ Auth::user()->url_image }}" alt="avatar">
            </div>
          </span>
          <span class="form-input">
            <label for="image">url image</label>
            <input type="text" value="" placeholder="inserisci qui link" name="image">
            @error('image')
            <span class="error-text">{{ $message }}</span>
            @enderror
          </span>
          <span class="form-button">
            <input type="submit" value="cambia immagine">
          </span>

        </form>
        <div class="separator">
          <hr>
        </div>
        <form method="POST" action="{{ route('change.name') }}" class="form-profile">
          @csrf
          <span class="form-input">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="{{ Auth::user()->name }}" />
            @error('name')
            <span class="error-text">{{ $message }}</span>
            @enderror
          </span>
          <span class="form-button">
            <input type="submit" value="Cambia nome">
          </span>
        </form>
        <div class="separator">
          <hr>
        </div>
        <form action="{{ route('change.password') }}" method="post" class="form-profile">
          @csrf
          <span class="form-input">
            <label for="actual_password">Actual Password:</label>
            <input type="password" name="actual_password" id="actual_password" placeholder="*********" />
            @error('actual_password')
            <span class="error-text">{{ $message }}</span>
            @enderror
          </span>
          <span class="form-input">
            <label for="password">New Password:</label>
            <input type="password" name="password" id="password" />
            @error('password')
            <span class="error-text">{{ $message }}</span>
            @enderror
          </span>

          <span class="form-input">
            <label for="password_confirmation">Confirm password:</label>
            <input type="password" name="password_confirmation" id="password_confimation" />
            @error('password_confirmation')
            <span class="error-text">{{ $message }}</span>
            @enderror

          </span>
          <span class="form-button">
            <input type="submit" value="Cambia password">
          </span>
        </form>
      </div>

    </main>
    @include('partials.footer')
  </div>

</body>

</html>