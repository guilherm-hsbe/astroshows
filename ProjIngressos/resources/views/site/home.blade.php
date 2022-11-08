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
      <img class="d-block w-100" src="https://dynaimage.cdn.cnn.com/cnn/digital-images/org/cc4f8999-309e-494f-90b3-3af14f73ee0b.jpg" alt="First slide">

      <div class="carousel-caption d-none d-md-block ">
          <h3>Travis Scott</h3>
          <p>Travis Scott é um rapper, cantor, compositor e produtor musical norte-americano.</p>
          <button type="button" class="btn btn-outline-light">Ver Ingressos</button>
      </div>
    </div>

    <div class="carousel-item" data-interval="10000">
      <img class="d-block w-100" src="https://thump-images.vice.com/images/articles/meta/2016/01/29/soundcollective-quien-es-skrillex-el-icono-pop-que-necesitamos-1454037433.jpg?crop=1xw:0.8445945945945946xh;center,center" alt="Second slide">

      <div class="carousel-caption d-none d-md-block">
          <h3>Skrillex</h3>
          <p>Skrillex é um premiado produtor musical, cantor e compositor norte americano de música eletrônica.</p>
          <button type="button" class="btn btn-outline-light">Ver Ingressos</button>
      </div>
    </div>

      <div class="carousel-item" data-interval="10000">
        <img class="d-block w-100" src="https://static01.nyt.com/images/2018/02/15/arts/15ALBUM-BLACKPANTHER1/15ALBUM-BLACKPANTHER1-superJumbo.jpg" alt="Third slide">
        
        <div class="carousel-caption d-none d-md-block">
            <h3>Kendrick Lamar</h3>
            <p>Kendrick Lamar é um rapper, produtor musical e compositor, considerado como um dos artistas mais influentes de sua geração.</p>
            <button type="button" class="btn btn-outline-light">Ver Ingressos</button>
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
