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
      <div style="display: flex; flex-direction: column; align-items: center;">
        <form method="POST" action="{{ route('change.image') }}" style="display: flex; flex-direction: column; justify-content: space-around; width: 40%;">
          @csrf
          <span style="display: flex; justify-content: center">
            <div style="display: flex; flex-direction: row; align-items: center; width: 204px; height: 204px; border: black solid 2px; overflow: hidden;">
              <img src="{{ Auth::user()->url_image }}" alt="avatar" style="width: 200px; height: auto;object-fit: cover;">
            </div>
          </span>
          <input type="text" value="" placeholder="inserisci qui link" name="image">
          @error('image')
          <span class="error-text">{{ $message }}</span>
          @enderror
          <input type="submit" value="cambia immagine">

        </form>
        <div style="width: 40%; margin: 1rem;">
          <hr>
        </div>
        <form method="POST" action="{{ route('change.name') }}" style="display: flex; flex-direction: column; justify-content: space-around; width: 40%;">
          @csrf
          <span style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="{{ Auth::user()->name }}" />
            @error('name')
            <span class="error-text">{{ $message }}</span>
            @enderror
          </span>
          <span style="display: flex; justify-content: end;">
            <input type="submit" value="Cambia nome">
          </span>
        </form>
        <div style="width: 40%; margin: 1rem;">
          <hr>
        </div>
        <form action="{{ route('change.password') }}" method="post" style="display: flex; flex-direction: column; justify-content: space-around; width: 40%;">
          @csrf
          <span style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
            <label for="actual_password">Actual Password:</label>
            <input type="password" name="actual_password" id="actual_password" placeholder="*********" />
            @error('actual_password')
            <span class="error-text">{{ $message }}</span>
            @enderror
          </span>
          <span style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
            <label for="password">New Password:</label>
            <input type="password" name="password" id="password" />
            @error('password')
            <span class="error-text">{{ $message }}</span>
            @enderror
          </span>

          <span style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
            <label for="password_confirmation">Confirm password:</label>
            <input type="password" name="password_confirmation" id="password_confimation" />
            @error('password_confirmation')
            <span class="error-text">{{ $message }}</span>
            @enderror

          </span>
          <span style="display: flex; justify-content: end;">
            <input type="submit" value="Cambia password">
          </span>
        </form>
      </div>

    </main>
    @include('partials.footer')
  </div>

</body>

</html>