$(document).ready(function() {
    $("#add_user").validate({
        rules: {
            user: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 3,
            },
            confirmpassword: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            user: {
                required: "El campo nombre de usuario es obligatorio",
                minlength: "Introduce al menos 3 caracteres"
            },
            email: {
                required: "El campo email es obligatorio",
                email: "Por favor introduce un email válido"
            },
            password: {
                required: "El campo contraseña es obligatorio",
                minlength: "Introduce al menos 3 caracteres"
            },
            confirmpassword: {
                required: "Tienes que repetir la contraseña",
                equalTo: "No coinciden las contraseñas"
            }
        }
    });
});