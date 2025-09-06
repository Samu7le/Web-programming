<header class="site-header">
      <div class="logo">F1</div>
      <nav class="nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/news') }}">News</a>
      </nav>
      <div class="profile">
        @guest
        <a class="login" href="{{ url('/login') }}">
          <span>Login</span>
        </a>
        <a class="login" href="{{ url('/register') }}">
          <span>Register</span>
        </a>
        @endguest
        @auth
        <a class="" href="{{ url('/profile') }}">
          <div style="display: flex; flex-direction: row; align-items: center; width: 54px; height: 54px; border: black solid 1px; overflow: hidden; border-radius: 50%;">
              <img src="{{ Auth::user()->url_image }}" alt="avatar" style="width: 50px; height: auto; object-fit: cover;">
            </div>
        </a>
        <a href="{{ route('logout') }}">Logout</a>
        @endauth

      </div>
    </header>