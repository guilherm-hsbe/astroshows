@extends('site.layout')

@section('content')

<!-- Carousel -------------------------------------------------------->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->

  <div class="carousel-inner" style="height:94.2vh">
    <div class="carousel-item active" data-interval="10000">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/artistas/scott-min.jpg') }}" alt="First slide">

      <div class="carousel-caption d-none d-md-block dark-div">
        <h3>Travis Scott</h3>
        <p>Travis Scott é um rapper, cantor, compositor e produtor musical norte-americano.</p>
        <button type="button" class="btn btn-outline-light" onclick="myFunction()"><i class="bi bi-arrow-bar-down"></i></button>

        <!-- Div escondida com detalhes do travis -->
        <div id="myDIV" style="display: flex;
                              justify-content: center;
                              flex-direction:row ;
                              align-items: center; gap:10px ">
          <p>Preço: $200</p>
          <p>Data: 21/10/2023</p>
          <p>Horário: 21:00</p>
        </div>
        <!-- Script do Travis -->
        <script>
          function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
        </script>
        <!--  -->
      </div>
    </div>

    <div class="carousel-item" data-interval="10000">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/artistas/skrillex.jpg') }}" alt="Second slide">

      <div class="carousel-caption d-none d-md-block">
        <h3>Skrillex</h3>
        <p>Skrillex é um premiado produtor musical, cantor e compositor norte americano de música eletrônica.</p>
        <button type="button" class="btn btn-outline-light" onclick="myFunction2()"><i class="bi bi-arrow-bar-down"></i></button>
        
        <!-- Div escondida com detalhes do Skrillex -->
        <div id="myDIV1" style="display: flex;
                              justify-content: center;
                              flex-direction:row ;
                              align-items: center; gap:10px ">
          <p>Preço: $100</p>
          <p>Data: 21/10/2023</p>
          <p>Horário: 21:00</p>
        </div>

        <!-- Script do Skrillex -->
        <script>
          function myFunction2() {
            var x = document.getElementById("myDIV1");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
        </script>
        <!--  -->

      </div>
    </div>

    <div class="carousel-item" data-interval="10000">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/artistas/lamar.jpg') }}" alt="Third slide">

      <div class="carousel-caption d-none d-md-block">
        <h3>Kendrick Lamar</h3>
        <p>Kendrick Lamar é um rapper, produtor musical e compositor, considerado como um dos artistas mais influentes de sua geração.</p>
        <button type="button" class="btn btn-outline-light" onclick="myFunction3()"><i class="bi bi-arrow-bar-down"></i></button>
        <!-- Div escondida com detalhes do Kendrão -->
        <div id="myDIV3" style="display: flex;
                              justify-content: center;
                              flex-direction:row ;
                              align-items: center; gap:10px ">
          <p>Preço: $300</p>
          <p>Data: 21/10/2023</p>
          <p>Horário: 21:00</p>
        </div>

        <!-- Script do Lamar -->
        <script>
          function myFunction3() {
            var x = document.getElementById("myDIV3");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
        </script>
        <!--  -->
      </div>
    </div>
  </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection