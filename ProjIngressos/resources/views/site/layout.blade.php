<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home · AstroShows</title>

    <!-- Boot -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <!-- Css -->
    @vite(['public/css/style.css'])

    <!-- Favicon -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/146/146074.png">
  </head>

  <body>
    <!-- NavBar -------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg">
      <a class="navbar-brand" href="#">AstroShows</a>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: space-between !important">
        <ul class="navbar-nav">
          <li class="nav-item active {{ (Route::current()->getName() === 'site.home' ? ' active' : '') }}">
            <a class="nav-link" href="{{ route('site.home') }}"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>

          <li class="nav-item {{ (Route::current()->getName() === 'site.artista' ? ' active' : '') }}">
            <a class="nav-link" href="{{ route('site.artista') }}">Artistas</a>
          </li>

          <li class="nav-item {{ (Route::current()->getName() === 'site.local' ? ' active' : '') }}">
            <a class="nav-link" href="{{ route('site.local') }}">Locais</a>
          </li>

          <li class="nav-item {{ (Route::current()->getName() === 'site.contatos' ? ' active' : '') }}">
            <a class="nav-link" href="{{ route('site.contatos') }}">Contato</a>
          </li>
        </ul>

        <div>
            
        <button class="btn btn-sm btn-outline-light" type="submit">Perfil</button>

        </div>
      </div>
    </nav>

    <!-- Main -->
    <main role="main">
        @yield('content')
    </main>

    <!-- Boot -------------------------------------------------------->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"></script>
  </body>
</html>
