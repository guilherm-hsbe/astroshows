<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre | Cadastre-se</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <!-- Favicon -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/146/146074.png">
</head>
<body style="height:100vh" class="d-flex justify-content-center align-items-center">
    <div class="card text-center" style="border-radius:20px;border:none">   
      <div class="card-body">
        <img src="https://cdn-icons-png.flaticon.com/512/146/146074.png" class="img-fluid mb-4" alt="..." style="width:128px;height:128px">

        <h3 class="card-title font-weight-bold">Bem Vindo!</h3>
        <p class="card-text mb-2">
          <a href="{{ url('/register') }}" class="text-decoration-none font-weight-bold text-secondary">Cadastre-se</a> 
          ou 
          <a href="{{ url('/login') }}" class="text-decoration-none font-weight-bold text-secondary">Entre</a> 
          em sua conta...
        </p>

        <!-- <div class="mb-2">
          <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">Dashboard</a>
        </div> -->
      </div>
  </div>

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

