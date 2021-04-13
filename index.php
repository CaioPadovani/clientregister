<html>

<head>
  <title>Cadastro de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
  footer {
  text-align: center;
  padding: 3px;
  background-color: #78866B;
  color: white;
  position:absolute;
  bottom:0;
  width:100%;
}
</style>



<body>
  <?php

  ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6D745F;">
  <div class="container-fluid">
    <a class="navbar-brand">CLIENT REGISTER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homeclientes.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="homeprodutos.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Venda de produtos militares
      </span>
    </div>
  </div>
</nav>
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="static/tanque.jpg" class="d-block h-50 w-100" alt="Exercito">
        </div>
        <div class="carousel-item">
          <img src="static/caça.jpg" class="d-block h-50 w-100" alt="Aeronaútica">
        </div>
        <div class="carousel-item">
          <img src="static/portaavioes.jpg" class="d-block h-50 w-100" alt="Marinha">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</body>
<footer>
  <p>Author: Caio Padovani<br>
  <a href="mailto:caiopadovani@gmail.com">Caio Padovani</a></p>
  <p>Author: Jorge Chinelato<br>
  <a href="mailto:jorgechinelato@gmail.com">Jorge Chinelato</a></p>
</footer>

</html>