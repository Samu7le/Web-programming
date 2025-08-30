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
      <h1>PROFILE</h1>
    </main>

    
  </div>
  @include('partials.footer')
</body>
</html>
