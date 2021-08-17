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

    <title>Añadir usuario</title>
    <style>
        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }

        .foot {
            padding-top: 10%;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <!-- HEADER -->
        <?php include 'admin_header.php' ?>
        <!-- /HEADER -->

        <!-- CONTENT -->
        <section class="my-5">
            <h2 class="display-6 fw-light">Alta usuario nuevo</h2>
            <form method="post" id="add_user" name="add_user" action="<?php echo base_url('/admin/guardar_usuario') ?>">
                <div class="form-group row justify-content-center my-4">
                    <div class="col-lg-6 col-md-8">
                        <input type="text" name="user" class="form-control" placeholder="Nombre de usuario">
                    </div>
                </div>

                <div class="form-group row justify-content-center my-4">
                    <div class="col-lg-6 col-md-8">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="form-group row justify-content-center my-4">
                    <div class="col-lg-6 col-md-8">
                        <input type="text" name="password" id="password" class="form-control" placeholder="Contraseña">
                    </div>
                </div>

                <div class="form-group row justify-content-center my-4">
                    <div class="col-lg-6 col-md-8">
                        <input type="text" name="confirmpassword" class="form-control" placeholder="Introduce de nuevo la contraseña">
                    </div>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </div>
            </form>
        </section>

        <!-- CONTENT -->


        <hr />

        <!--FOOTER-->
        <footer class="fixed-md-bottom">
            <?php include 'footer.php' ?>
        </footer>
        <!--/FOOTER-->
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!--Jquery validation form-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('/assets/js/form_user_validation.js') ?>"></script>

</body>

</html>