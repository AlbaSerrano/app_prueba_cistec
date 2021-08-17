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

    <title>Lista noticias</title>

    <style>
        .foot {
            padding-top: 10%;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <?php include 'admin_header.php' ?>
        <!-- /HEADER -->

        <!-- CONTENT -->
        <section class="my-5">
            <h2 class="display-6 fw-light">Listado noticias</h2>
            <div class="d-flex justify-content-end">
                <a href="<?php echo base_url('/admin/añadir_noticia') ?>" class="btn btn-success mb-2">Añadir noticia</a>
            </div>

            <div class="mt-3">
                <table class="table table-bordered" id="users-list">
                    <thead>
                        <tr>
                            <th>Id noticia</th>
                            <th>Titular</th>
                            <th>Cuerpo</th>
                            <th>Fecha</th>
                            <th>Slug</th>
                            <th>Id usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($news) : ?>
                            <?php foreach ($news as $new) : ?>
                                <tr>
                                    <td><?php echo $new['id']; ?></td>
                                    <td><?php echo $new['Titular']; ?></td>
                                    <td><?php echo $new['Cuerpo']; ?></td>
                                    <td><?php echo $new['Fecha']; ?></td>
                                    <td><?php echo $new['Slug']; ?></td>
                                    <td><?php echo $new['usuarios_id']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('/admin/editar_noticia/' . $new['id']); ?>" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="<?php echo base_url('/admin/eliminar_noticia/' . $new['id']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
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