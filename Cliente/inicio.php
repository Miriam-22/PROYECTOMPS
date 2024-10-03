<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <!--Encabezado-->
        <?php
    include_once("include/encabezado.php")
    ?>
        <!--Fin encabezado-->
    </header>
    <div class="container">
        <h2>INICIO</h2>
    </div>

    <!--Inicia Carrusel-->
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/fondo0.jpg" class="d-block w-100" alt="fondo2" width="800px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/Fondo.png" class="d-block w-100" alt="Fondo" width="800px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/f1.jpg" class="d-block w-100" alt="fondo2" width="800px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/fondo3.png" class="d-block w-100" alt="fondo2" width="800px" height="250">
    </div>
    <div class="carousel-item">
      <img src="img/f1.jpg" class="d-block w-100" alt="fondo2" width="800px" height="250">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    <!--Fin carrusel-->


    <footer style="text-align: center; padding: 10px ; ">

        <?php
    include_once("include/pie.php")
    ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>