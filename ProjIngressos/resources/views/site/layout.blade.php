<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Veículos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">ReVeículos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? ' active' : '') }}"><a class="nav-link" href="{{ route('site.home') }}">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'contatosmanager.index' ? ' active' : '') }}"><a class="nav-link" href="{{ route('contatosmanager.index') }}">Contatos</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'veiculosmanager.index' ? ' active' : '') }}"><a class="nav-link" href="{{ route('veiculosmanager.index') }}">Estoque de Veículos</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.contatos' ? ' active' : '') }}"><a class="nav-link" href="{{ route('site.contatos') }}">Cadastrar Contatos</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.veiculos' ? ' active' : '') }}"><a class="nav-link" href="{{ route('site.veiculos') }}">Cadastrar Veículos</a></li>
      </ul>
    </div>
  </nav>
</header>

<main role="main">

    @yield('content')

<!-- FOOTER -->
    <p>&nbsp;</p>
    <footer class="text-center text-white" style="background-color: slategrey" >
        <p>&nbsp;</p>
        <p class="float-end"><a class="text-white" href="#">Back to top</a></p>
        <p>&copy; <!--<?= date('Y'); ?>--> {{ date ('Y') }} Company, Inc. &middot; <a class="text-white" href="#">Privacy</a> &middot; <a class="text-white" href="#">Terms</a></p>
        <p>&nbsp;</p>
    </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
