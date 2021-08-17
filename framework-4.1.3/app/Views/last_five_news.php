<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/fontawesome-free-5.15.2-web/css/all.css" />

    <title>Últimas noticias</title>

    <style>
        .foot {
            padding-top: 10%;
        }

        .bg-color {
            background-color: #B3AC84;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <?php include 'public_header.php' ?>
        <!-- /HEADER -->

        <!-- CONTENT -->
        <section class="my-5 justify-content-center text-center">
            <h2 class="display-6 fw-light">Listado de las últimas 5 noticias</h2>

            <div class="row justify-content-center align-items-center text-center fw-light mt-3">

                <?php if ($news) : ?>
                    <?php foreach ($news as $new) : ?>
                        <div class="card text-black bg-color mb-3 mx-3" style="max-width: 18rem;">
                            <div class="card-header"><?php echo $new['Fecha']; ?></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $new['Titular']; ?></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </section>

        <!-- CONTENT -->


        <hr />

        <!--FOOTER-->
        <footer class="fixed-bottom">
            <?php include 'footer.php' ?>
        </footer>
        <!--/FOOTER-->
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>