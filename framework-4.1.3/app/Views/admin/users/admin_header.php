<!-- TÍTULO -->
<div class="row justify-content-center align-items-center text-center fw-light my-5 display-5">

    <div class="col-2"><img src="<?= base_url() ?>/assets/images/admin.png" class="w-50"></div>
    <div class="col-6">
        PANEL DE ADMINISTRADOR
    </div>

</div>

<!-- /TÍTULO -->

<!--NAVBAR-->
<!--el navbar está expandido en pantallas >= md-->
<!--Tendrá bordes arriba y abajo-->
<nav class="navbar navbar-expand-md navbar-light bg-light border-top border-bottom">
    <div class="container-fluid">
        <!--Botón que aparece cuando se colapsa el menú en pantallas < md-->
        <!--data-bs-toggle muestra/oculta el contenido colapsable-->
        <!--data-bs-target hace referencia al id del contenido colapsable-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Contenedor colapsable-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--NAV-->
            <!---auto para que quede centrado el menú-->
            <!--fw-bold pone en negrita los elementos de texto-->
            <ul class="navbar-nav m-auto mb-2 mb-md-0 text-uppercase fw-bold">
                <li class="nav-item">
                    <a class="nav-link active text-info" aria-current="page" href="<?php echo base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>/admin/lista_noticias"">Gestionar Noticias</a>
                </li>
                <li class=" nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>/admin/lista_categorias">Gestionar Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>/admin/lista_usuarios">Gestionar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/signout') ?>">Usuario: <?php echo session('user') ?>
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
            <!--/NAV-->
        </div>
    </div>
</nav>
<!- /-NAVBAR-->