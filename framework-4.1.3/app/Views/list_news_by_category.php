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
        <?php include 'public_header.php' ?>
        <!-- /HEADER -->

        <!-- CONTENT -->
        <section class="my-5">
            <h2 class="display-6 fw-light">Listado noticias por categoría</h2>

            <div class="mt-3">

                <?php if ($category) { ?>
                    <div class="my-5">

                        <h4><?php echo $category['Nombre'] ?></h4>
                        <ul class="list-group">
                            <?php
                            if (isset($news)) {
                                for ($i = 0; $i < count($news); $i++) { ?>
                                    <li class="list-group-item"><?php echo $news[$i]['Titular']; ?></li>
                                <?php }
                            } else { ?>
                                <p>No se ha publicado todavía ninguna noticia de la categoría <?php echo $category['Nombre'] ?> </p>
                            <?php } ?>
                        </ul>
                    </div>

                <?php } ?>
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