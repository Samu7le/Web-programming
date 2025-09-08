<header class="site-header">
  <script src="{{ asset('js/responsive.js') }}" defer></script>
  <div class="big-nav">
    <div class="logo">F1</div>
    <nav class="nav">
      <a href="{{ url('/') }}">Home</a>
      
      <a href="{{ url('/news') }}">News</a>
      @auth
      <a href="{{ url('/posts') }}">Posts</a>
      @endauth
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
        <div class="nav-bar-avater">
          <img src="{{ Auth::user()->url_image }}" alt="avatar">
        </div>
      </a>
      <a href="{{ route('logout') }}">Logout</a>
      @endauth

    </div>
  </div>

  <div class="small-nav">
    <div class="container-logo">
      <div class="logo">F1</div>
      <button id="hambuger-menu">
        Menu
      </button>
    </div>

    <div id="link-container">
      <div class="link-col">
        <a href="{{ url('/') }}">Home</a>
        
        <a href="{{ url('/news') }}">News</a>
        @auth
        <a href="{{ url('/posts') }}">Posts</a>
        @endauth

        @guest
        <a class="login" href="{{ url('/login') }}">
          Login
        </a>
        <a class="login" href="{{ url('/register') }}">
          Register
        </a>
        @endguest
        @auth
        <a class="" href="{{ url('/profile') }}">
          Profile
        </a>
        <a href="{{ route('logout') }}">Logout</a>
        @endauth
      </div>

    </div>

  </div>
</header>