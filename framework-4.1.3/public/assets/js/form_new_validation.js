$(document).ready(function() {
    $("#add_new").validate({
        rules: {
            headline: {
                required: true,
                minlength: 3
            },
            body: {
                required: true,
                minlength: 3
            },
            date: {
                required: true,
                date: true
            },
            slug: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            headline: {
                required: "El campo titular es obligatorio",
                minlength: "Introduce al menos 3 caracteres"
            },
            body: {
                required: "El campo cuerpo es obligatorio",
                minlength: "Introduce al menos 3 caracteres"
            },
            date: {
                required: "El campo fecha es obligatorio",
                minlength: "Introduce una fecha válida"
            },
            slug: {
                required: "El campo slug es obligatorio",
                minlength: "Introduce al menos 3 caracteres"
            }
        }
    });
});