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
      <?php include 'admin_header.php';  ?>
    </header>
    <!-- /HEADER -->

    <!--NEWS SLIDER-->

    <h3 class="text-center fw-light text-uppercase mt-5">NOTICIAS ACTUALES</h3>
    <div id="carouselNews" class="carousel slide my-5" data-bs-ride="carousel">
      <!--Indicacores del slider que corresponden a los botones inferiores que al hacer clic muestran su imagen correspondiente-->
      <div class="carousel-indicators">
        <!--Añadimos a cada button la clase bg-secondary para que se vean bien-->
        <?php
        $news_count =  count($news);
        for ($i = 0; $i < $news_count; $i++) {
          if ($i == 0) { ?>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="<?php echo $i ?>" class="active bg-secondary" aria-current="true" aria-label="Slide <?php echo $i ?>"></button>
          <?php
          } else { ?>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="<?php echo $i ?>" class="bg-secondary" aria-current="true" aria-label="Slide <?php echo $i ?>"></button>
        <?php }
        } ?>
      </div>


      <div class="carousel-inner text-center">

        <?php
        $cont = 0;
        if (isset($news)) :
          foreach ($news as $new) :
            if ($cont == 0) {
              $cont++; ?>
              <!--FIRST ITEM -->
              <div class="carousel-item mb-5 active">
                <img src="<?= base_url() ?>/assets/images/carousel_background.png" class="d-block w-100 my-5" alt="..." />
                <h5><?php echo $new['Titular']; ?></h5>
                <p>
                  <?php echo $new['Cuerpo']; ?>
                </p>
              </div>
              <!-- /FIRST ITEM-->
            <?php
            } else { ?>
              <!--OTHER ITEMS -->
              <div class="carousel-item mb-5">
                <img src="<?= base_url() ?>/assets/images/carousel_background.png" class="d-block w-100 my-5" alt="..." />
                <h5 class="mt-5"><?php echo $new['Titular']; ?></h5>
                <p>
                  <?php echo $new['Cuerpo']; ?>
                </p>
              </div>
              <!-- /OTHER ITEM-->
        <?php
            }
          endforeach;
        endif;
        ?>

      </div>

      <!--botones next y previous para pasar a la siguiente o a la anterior diapositiva-->
      <button class="carousel-control-prev text-secondary" type="button" data-bs-target="#carouselNews" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next text-secondary" type="button" data-bs-target="#carouselNews" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--/NEWS SLIDER-->


    <!--FOOTER-->
    <?php include 'footer.php'; ?>
    <!--/FOOTER-->
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>