$(document).ready(function(){    
    $("#nameInput").keyup(function() {
        procesarCambio();
    });
    $("#emailInput").keyup(function() {
        procesarCambio();
    });
    $("#mensajeInput").keyup(function() {
        procesarCambio();
    });
    $("#tipoSolicitud").change(function() {
        procesarCambio();
    });
    $("#aviso1").change(function() {
        procesarCambio();
    });
    $("#aviso2").change(function() {
        procesarCambio();
    });
    $('#guardar').click(function() {
        var proceder = procesarCambio();
        if(proceder === true){
            const action = 'validarUsuario'; 
            grecaptcha.ready(function() {
                grecaptcha.execute('6Leg43coAAAAAEqiZfDqJ49e055hJb1pVxECSWI6', {action: action}).then(function(token) {
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'token',
                        value: token
                    }).prependTo('#formularioBeneficios');
                                
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'action',
                        value: action
                    }).prependTo('#formularioBeneficios');
                                
                    $('#formularioBeneficios').submit();
                });
            });
        }
    });
});

function procesarCambio(){
    var proceder = true;
    var mensaje_err = "";

    let err_form = "";
    let maxLength = "";
    let minLength = "";
    
    var nombre = $("#nameInput").val().trim();
    var correo = $("#emailInput").val().trim();
    var asunto = $("#tipoSolicitud").val();
    var mensaje = $("#mensajeInput").val().trim();
    var aviso1 = $("#aviso1").prop('checked');
    var aviso2 = $("#aviso2").prop('checked');

    if(nombre === ""){
        mensaje_err += "► Ingrese su nombre y apellido. ";
        $('#nameInput').removeClass('is-invalid');
        $('#nameInput').removeClass('is-valid');
        proceder = false;
    }else{
        err_form = /[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g;
        maxLength = 50;
        minLength = 4;

        if (!err_form.test(nombre) && nombre.length >= minLength && nombre.length <= maxLength) {

            var palabras = nombre.split(" ");
            if (palabras.length >= 3) {
                $('#nameInput').addClass('is-valid');
                $('#nameInput').removeClass('is-invalid');
            } else {
                mensaje_err += "► El valor de " + nombre + " es incorrecto. ";
                $('#nameInput').addClass('is-invalid');
                $('#nameInput').removeClass('is-valid');
                proceder = false;
            }           
        } else {
            mensaje_err += "► El valor de " + nombre + " es incorrecto. ";
            $('#nameInput').addClass('is-invalid');
            $('#nameInput').removeClass('is-valid');
            proceder = false;
        }
    }

    if(correo === ""){
        mensaje_err += "► Ingrese su correo electrónico. ";
        $('#emailInput').removeClass('is-valid');
        $('#emailInput').removeClass('is-invalid');
        proceder = false;
    }else{
        err_form = /([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})/g;
        maxLength = 50;
        minLength = 4;

        if (err_form.test(correo) == false) {
            mensaje_err += "► El valor de " + correo + " es incorrecto. ";
            $('#emailInput').addClass('is-invalid');
            $('#emailInput').removeClass('is-valid');
            proceder = false;
        }else{
            $('#emailInput').addClass('is-valid');
            $('#emailInput').removeClass('is-invalid');
        }
    }

    if(asunto === ""){
        mensaje_err += "► Seleccione un asunto valido. ";
        $('#tipoSolicitud').addClass('is-invalid');
        $('#tipoSolicitud').removeClass('is-valid');
        proceder = false;
    }else{
        $('#tipoSolicitud').addClass('is-valid');
        $('#tipoSolicitud').removeClass('is-invalid');
    }

    if(mensaje === ""){
        mensaje_err += "► Ingrese su mensaje. ";
        $('#mensajeInput').removeClass('is-valid');
        $('#mensajeInput').removeClass('is-invalid');
        proceder = false;
    }else{
        err_form = /[^a-zA-ZáéíóúÁÉÍÓÚñÑ\d\s]/g;
        maxLength = 200;
        minLength = 10;

        if (!err_form.test(mensaje) && mensaje.length >= minLength && mensaje.length <= maxLength) {
            $('#mensajeInput').addClass('is-valid');
            $('#mensajeInput').removeClass('is-invalid');
        } else {
            mensaje_err += "► El valor de " + mensaje + " es incorrecto. ";
            $('#mensajeInput').addClass('is-invalid');
            $('#mensajeInput').removeClass('is-valid');
            proceder = false;
        }
    }

    if(aviso1 === false || aviso2 === false){
        mensaje_err += "► No has aceptado los términos y condiciones. ";
        proceder = false;
    }

    if (proceder === false){
        $('#msmErr').removeClass('ocultar');
        $('#msmOk').addClass('ocultar');
        $('#err_FormBeneficios').text(mensaje_err);
        return false;
    }else{
        $('#msmErr').addClass('ocultar');
        $('#msmOk').removeClass('ocultar');
        return true;
    }

}