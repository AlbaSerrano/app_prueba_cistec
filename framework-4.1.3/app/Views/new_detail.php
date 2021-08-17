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

    <title>Index</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <?php include 'public_header.php';  ?>
        </header>
        <!-- /HEADER -->

        <!--DETAIL OF NEW-->
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title"><?php echo $new['Titular'] ?></h5>
                <p class="card-text"><?php echo $new['Cuerpo'] ?></p>
            </div>
            <div class="card-footer text-muted">
                <?php echo $new['Fecha'] ?>
            </div>
        </div>
        <!-- /DETAIL OF NEW-->


        <!--FOOTER-->
        <?php include 'footer.php';  ?>
        <!--/FOOTER-->
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>