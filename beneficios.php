<!DOCTYPE html>
<?php
require_once(dirname(__FILE__).'/componentes.php');
?>
<html lang="es">
<head>
    <?php echo $HEAD ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficios | Dinámico pedagogía y diseño</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/config.css" type="text/css">
    <link rel="stylesheet" href="css/beneficios/beneficiosStyle.css" type="text/css">

    <script src="https://www.google.com/recaptcha/api.js?render=6Leg43coAAAAAEqiZfDqJ49e055hJb1pVxECSWI6"></script>
</head>
<body>
<?php echo $MENU; ?>

<section class="inicio tituloLoco">
    <p class="titulo1">Beneficios</p>
    <div class="txtCinta">
        <p>¡Tu <strong>éxito</strong> es nuestro <strong>éxito</strong>!</p>
    </div>
    <div class="textoBeneficios">
        <p>
        ¡Bienvenido a nuestra sección de beneficios! Únete a nuestra <strong class="resaltado">comunidad de suscriptores</strong> y descubre un mundo lleno de ventajas diseñadas para mejorar tu experiencia y ayudarte a alcanzar tus objetivos. Al registrarte, recibirás <strong class="resaltado">beneficios exclusivos</strong>, noticias de la empresa y las últimas novedades directamente en tu correo. No dejes pasar esta oportunidad.
        <br>
        <br>
        <strong>¡Regístrate ahora para no perderte nada!</strong>
        </p>
    </div>
</section>
<section id="periodico">
    <div class="articulosBeneficios">
        <article data-aos="flip-up" data-aos-duration="250" data-aos-easing="ease-in-sine">
            <img src="img/beneficios/1Beneficios@3x.png" alt="Rallys">
            <div class="articleTitle RallysSer"><p>Rallys</p></div>
        </article>
        <article data-aos="flip-up" data-aos-duration="300" data-aos-easing="ease-in-sine">
            <img src="img/beneficios/2Beneficios@3x.png" alt="Cartillas">
            <div class="articleTitle CartillasSer"><p>Cartillas</p></div>
        </article>
        <article data-aos="flip-up" data-aos-duration="350" data-aos-easing="ease-in-sine">
            <img src="img/beneficios/3Beneficios@3x.png" alt="Juegos">
            <div class="articleTitle JuegosSer"><p>Juegos</p></div>
        </article>
    </div>
</section>
<section>
    <div class="articulosFormulario">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img data-aos="fade-up" style="width: 100%;" src="img/beneficios/formTitle@3x.png" alt="¡Explora, aprende y crece con nosotros!">
                </div>
                <div data-aos="flip-up"  data-aos-duration="300" data-aos-easing="ease-in-sine" class="col-md-6">
                    <form id="formularioBeneficios" method="POST" action="submitBeneficio.php">
                        <div class="formTitleJD">
                            <p><strong>Suscribete aqui:</strong></p>
                        </div>
                        <div id="msmErr" class="row ocultar">
                            <div class="col">
                                <p id="err_FormBeneficios" class="alert alert-danger"></p>
                            </div>
                        </div>
                        <div id="msmOk" class="row ocultar">
                            <div class="col">
                                <p id="Ok_FormBeneficios" class="alert alert-success">¡Muy bien hecho! Haz clic en enviar</p>
                            </div>
                        </div>
                        <div class="contenedorElform">
                            <div class="input-group mb-3">
                                <span class="input-group-text iconoBeneficios" id="name"><img src="img/beneficios/nombre.png" alt=""></span>
                                <div class="form-floating">
                                    <input type="text" class="form-control inputBeneficios" name="nameInput" id="nameInput" placeholder="Nombre y Apellidos" require>
                                    <label class="labelBeneficios" for="nameInput">Nombre y Apellidos</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text iconoBeneficios" id="email"><img src="img/beneficios/email.png" alt=""></span>
                                <div class="form-floating">
                                    <input type="email" class="form-control inputBeneficios" name="emailInput" id="emailInput" placeholder="Correo electrónico" aria-describedby="email" require>
                                    <label class="labelBeneficios" for="emailInput">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text iconoBeneficios"><img src="img/beneficios/beneficios.png" alt=""></span>
                                <select class="form-select inputBeneficios" name="tipoSolicitud" id="tipoSolicitud" require>
                                    <option disabled value="" selected>Asunto</option>
                                    <option value="beneficios">Beneficios</option>
                                    <option value="PQRS">PQRS</option>
                                    <option value="Muestras docentes">Muestras docentes</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 iconoBeneficios">
                                <span class="input-group-text" id="mensaje"><img src="img/beneficios/mensaje.png" alt=""></span>
                                <div class="form-floating">
                                    <textarea class="form-control inputBeneficios" name="mensajeInput" id="mensajeInput" placeholder="Mensaje" rows="3" require></textarea>
                                    <label class="labelBeneficios" for="mensajeInput">Mensaje (max 200 caracteres)</label>
                                </div>
                            </div>
                            <br>
                            <div class="row termycond">
                                <div class="col"><p><input type="checkbox" id="aviso1" require> He leido y acepto los términos y condiciones de uso.</p></div>
                            </div>
                            <div class="row termycond">
                                <div class="col"><p><input type="checkbox" id="aviso2" require> He leido y acepto las politicas de privacidad.</p></div>
                            </div>
                            <div class="col-12 text-center">
                                <input type="text" name="condicion" id="condicion" style="display: none">
                                <button type="button" id="guardar" style="background-color:#A6BAFF; color:#ffffff; padding:1vw 2vw;" class="btn">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var posicionMenu = document.getElementById('m4');
    posicionMenu.classList.add('menuActivo');
</script>
<?php echo $FOOTER; ?>
<?php echo $BOTONWPP_HOME; ?>

<script src="js/beneficos/beneficios.js"></script>
</body>
</html>