$(document).ready(function() {
    $("#add_category").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            name: {
                required: "El campo nombre de categoría es obligatorio",
                minlength: "Introduce al menos 3 caracteres"
            }
        }
    });
});