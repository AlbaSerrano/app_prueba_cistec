<!--Agregamos la clase flexbox que alinea los elementos hijos horizontalmente-->
<!--Para que los elementos del footer en dispositivos pequeños se vean centrados utilizamos la clase .text-center -->
<div class="row justify-content-around text-center mt-5 foot">
    <!--COLUMNA 1-->
    <!--En pantallas >= md cada contenedor ocupara 4 columnas de 12 y en pantallas < md ocupará 12 columnas-->
    <!--.text-md-start para colocar la columna a la izquierda del todo en pantallas > = md-->
    <div class="col-md-4 text-md-start">
        <!--.text-muted para poner el texto en gris-->
        <p class="text-muted">
            Todos los derechos reservados ©
        </p>
    </div>
    <!--/COLUMNA 1-->

    <!--COLUMNA 2-->
    <!--.text-md-end para colocar la columna a la derecha del todo en pantallas > = md-->
    <div class="col-md-4 text-md-end">
        <!--Agrandamos los íconos con la clase .h3-->
        <div class="h3">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-google-plus-square"></i>
        </div>
    </div>
    <!--/COLUMNA 2-->
</div>
