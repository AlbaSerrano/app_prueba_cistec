<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!--Font Awesome-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/fontawesome-free-5.15.2-web/css/all.css" />

  <title>Sitio Web Corporativo</title>
</head>

<body>
  <div class="container">
    <!-- HEADER -->
    <header>     
      <?php include 'public_header.php';  ?>
    </header>
    <!-- /HEADER -->

    <!--SLIDER-->
    <div id="carouselSlider" class="carousel slide mt-5" data-bs-ride="carousel">
      <!--Indicacores del slider que corresponden a los botones inferiores que al hacer clic muestran su imagen correspondiente-->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!--Diapositivas del slider-->
      <div class="carousel-inner">
        <!--ITEM 1-->
        <div class="carousel-item active">
          <img src="<?= base_url() ?>/assets/images/1.jpg" class="d-block w-100" alt="..." />
        </div>
        <!--/ITEM 1-->
        <!--ITEM 2-->
        <div class="carousel-item">
          <img src="<?= base_url() ?>/assets/images/2.jpg" class="d-block w-100" alt="..." />
        </div>
        <!--/ITEM 2-->
        <!--ITEM 3-->
        <div class="carousel-item">
          <img src="<?= base_url() ?>/assets/images/3.jpg" class="d-block w-100" alt="..." />
        </div>
        <!--/ITEM 3-->
      </div>
      <!--botones next y previous para pasar a la siguiente o a la anterior diapositiva-->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--/SLIDER-->

    <!--3 COLUMNAS-->
    <!--Tenemos una fila con un margen en el eje y de 3 rem y sus columnas van a estar centradas-->
    <div class="row my-5 text-center">
      <!--COLUMNA 1-->
      <!--En pantallas >= md ocupará 4 columnas de las 12 y en pantallas < md ocupará las 12 columnas-->
      <div class="col-md-4">
        <!--Metemos los iconos dentro de un div para poder cambiar sus estilos-->
        <!--Cambiamos el color del icono con text-info y el tamaño con h1-->
        <div class="text-info h1">
          <i class="fa fa-battery-empty" aria-hidden="true"></i>
        </div>
        <!--text-muted para poner el texto en gris-->
        <p class="text-muted">Lorem ipsum dolor sit.</p>
        <!--Separamos el título del parrafo inferior con un margen bottom de 1.5 rem-->
        <h4 class="text-uppercase mb-4">Lorem, ipsum dolor.</h4>
        <!--fw-light para disminuir el grosor de la letra y ponerla fina-->
        <p class="fw-light">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis
          provident, doloribus debitis ipsam sunt maiores.
        </p>
      </div>
      <!--/COLUMNA 1-->

      <!--COLUMNA 2-->
      <!--En pantallas >= md ocupará 4 columnas de las 12 y en pantallas < md ocupará las 12 columnas-->
      <div class="col-md-4">
        <!--Metemos los iconos dentro de un div para poder cambiar sus estilos-->
        <!--Cambiamos el color del icono con text-info y el tamaño con h1-->
        <div class="text-info h1">
          <i class="fa fa-battery-half" aria-hidden="true"></i>
        </div>
        <!--text-muted para poner el texto en gris-->
        <p class="text-muted">Lorem ipsum dolor sit.</p>
        <!--Separamos el título del parrafo inferior con un margen bottom de 1.5 rem-->
        <h4 class="text-uppercase mb-4">Lorem, ipsum dolor.</h4>
        <!--fw-light para disminuir el grosor de la letra y ponerla fina-->
        <p class="fw-light">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis
          provident, doloribus debitis ipsam sunt maiores.
        </p>
      </div>
      <!--/COLUMNA 2-->

      <!--COLUMNA 3-->
      <!--En pantallas >= md ocupará 4 columnas de las 12 y en pantallas < md ocupará las 12 columnas-->
      <div class="col-md-4">
        <!--Metemos los iconos dentro de un div para poder cambiar sus estilos-->
        <!--Cambiamos el color del icono con text-info y el tamaño con h1-->
        <div class="text-info h1">
          <i class="fa fa-battery-full" aria-hidden="true"></i>
        </div>
        <!--text-muted para poner el texto en gris-->
        <p class="text-muted">Lorem ipsum dolor sit.</p>
        <!--Separamos el título del parrafo inferior con un margen bottom de 1.5 rem-->
        <h4 class="text-uppercase mb-4">Lorem, ipsum dolor.</h4>
        <!--fw-light para disminuir el grosor de la letra y ponerla fina-->
        <p class="fw-light">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis
          provident, doloribus debitis ipsam sunt maiores.
        </p>
      </div>
      <!--/COLUMNA 3-->
    </div>
    <!--/3 COLUMNAS-->

    <!--Línea divisora-->
    <hr />

    <!--PORTAFOLIO-->
    <!--Título del portafolio-->
    <h3 class="text-center fw-light text-uppercase mt-5">
      Nuestro portafolio
    </h3>
    <div class="row my-5">
      <!--COLUMNA 1-->
      <!--En pantallas >= md ocupará cada contenedor 4 columnas de 12 y en pantallas < md ocupará las 12 columnas-->
      <div class="col-md-4">
        <!--Imagen responsive-->
        <img class="img-fluid" src="<?= base_url() ?>/assets/images/p1.jpg" alt="" />
        <!--.lead = fw-light + agranda el texto-->
        <p class="lead">Lorem ipsum dolor sit amet.</p>
      </div>
      <!--/COLUMNA 1-->

      <!--COLUMNA 2-->
      <!--En pantallas >= md ocupará cada contenedor 4 columnas de 12 y en pantallas < md ocupará las 12 columnas-->
      <div class="col-md-4">
        <!--Imagen responsive-->
        <img class="img-fluid" src="<?= base_url() ?>/assets/images/p1.jpg" alt="" />
        <!--.lead = fw-light + agranda el texto-->
        <p class="lead">Lorem ipsum dolor sit amet.</p>
      </div>
      <!--/COLUMNA 2-->

      <!--COLUMNA 3-->
      <!--En pantallas >= md ocupará cada contenedor 4 columnas de 12 y en pantallas < md ocupará las 12 columnas-->
      <div class="col-md-4">
        <!--Imagen responsive-->
        <img class="img-fluid" src="<?= base_url() ?>/assets/images/p1.jpg" alt="" />
        <!--.lead = fw-light + agranda el texto-->
        <p class="lead">Lorem ipsum dolor sit amet.</p>
      </div>
      <!--/COLUMNA 3-->
    </div>
    <!--/PORTAFOLIO-->

    <hr />

    <!--TESTIMONIOS-->
    <!--Título del portafolio-->
    <h3 class="text-center fw-light text-uppercase mt-5">Testimonios</h3>
    <div id="carouselTestimony" class="carousel slide my-5" data-bs-ride="carousel">
      <!--Indicacores del slider que corresponden a los botones inferiores que al hacer clic muestran su imagen correspondiente-->
      <div class="carousel-indicators">
        <!--Añadimos a cada button la clase bg-secondary para que se vean bien-->
        <button type="button" data-bs-target="#carouselTestimony" data-bs-slide-to="0" class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselTestimony" data-bs-slide-to="1" aria-label="Slide 2" class="bg-secondary"></button>
        <button type="button" data-bs-target="#carouselTestimony" data-bs-slide-to="2" aria-label="Slide 3" class="bg-secondary"></button>
      </div>
      <!--Diapositivas del slider-->
      <!--.text-center para centrar cada item del carousel-->
      <div class="carousel-inner text-center">
        <!--ITEM 1-->
        <!--mb-5 para separar el texto de los botones inferiores-->
        <div class="carousel-item active mb-5">
          <h5>Lorem ipsum dolor sit amet.1</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque
            mollitia animi molestiae veniam. Et, eveniet.
          </p>
        </div>
        <!--/ITEM 1-->
        <!--ITEM 2-->
        <div class="carousel-item mb-5">
          <h5>Lorem ipsum dolor sit amet.2</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque
            mollitia animi molestiae veniam. Et, eveniet.
          </p>
        </div>
        <!--/ITEM 2-->
        <!--ITEM 3-->
        <div class="carousel-item mb-5">
          <h5>Lorem ipsum dolor sit amet.3</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque
            mollitia animi molestiae veniam. Et, eveniet.
          </p>
        </div>
        <!--/ITEM 3-->
      </div>
      <!--botones next y previous para pasar a la siguiente o a la anterior diapositiva-->
      <button class="carousel-control-prev text-secondary" type="button" data-bs-target="#carouselTestimony" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next text-secondary" type="button" data-bs-target="#carouselTestimony" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--/TESTIMONIOS-->

    <hr />

    <!--FOOTER-->
    <?php include 'footer.php';  ?>
    <!--/FOOTER-->
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>