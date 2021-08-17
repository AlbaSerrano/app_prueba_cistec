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

    <title>Añadir noticia</title>
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

        .dropdown {
            margin-bottom: 10em;
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
            <h2 class="display-6 fw-light">Añadir noticia nueva</h2>
            <form method="post" id="add_new" name="add_new" action="<?php echo base_url('/admin/guardar_noticia') ?>">
                <div class="form-group row justify-content-center my-4">
                    <div class="col-lg-6 col-md-8">
                        <input type="text" name="headline" class="form-control" placeholder="Titular de la noticia">
                    </div>
                </div>
                <div class="form-group row justify-content-center my-4">
                    <div class="col-lg-6 col-md-8">
                        <textarea name="body" class="form-control" placeholder="Cuerpo de la noticia"></textarea>
                    </div>
                </div>
                <div class="form-group row justify-content-center my-4">
                    <div class="col-lg-6 col-md-8">
                        <input type="date" name="date" class="form-control" placeholder="Fecha de la noticia">
                    </div>
                </div>
                <div class="form-group row justify-content-center my-4">
                    <span>Seleccione una categoría</span>
                    <div class="col-lg-6 col-md-8">
                        <select class="custom-select custom-select-lg mb-3 form-control" name="selectCategory">

                            <?php if ($categories) : ?>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category['id'] ?>"><?php echo $category['Nombre'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </select>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--Jquery validation form-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('/assets/js/form_new_validation.js') ?>"></script>

</body>

</html>