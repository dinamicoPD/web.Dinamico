<!DOCTYPE html>
<?php
require_once(dirname(__FILE__).'/componentes.php');
require_once("controller/juegosController.php");
?>
<html lang="es">
<head>
    <?php echo $HEAD ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos | Dinámico pedagogía y diseño</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/config.css" type="text/css">
    <link rel="stylesheet" href="css/servicios/style.css" type="text/css">
    <link rel="stylesheet" href="css/servicios/styleJuegos.css" type="text/css">
    <link rel="stylesheet" href="moodle/dinapage/css/articulos.css">
</head>
<body>
<?php echo $MENU; ?>
<script>
    var posicionMenu = document.getElementById('m5');
    posicionMenu.classList.add('menuActivo');
</script>
<section class="inicio">
    <p class="titulo1">Juegos</p>

    <div class="txtCinta">
        <img src="img/beneficios/cinta2@3x.png" alt="">
        <p>¡Nuevo reto de pentominós <strong>Calendario Dinámico</strong>!</p>
    </div>
    <p class="textoCinta">
        ¿Sabías que los <strong class="resaltado">pentominós</strong> son piezas geométricas fascinantes que pueden brindarnos horas de diversión y desafío mental?<br>¡<strong class="resaltado">Ubica las piezas</strong> y descubre <strong class="resaltado">tu fecha de cumpleaños</strong> en nuestro reto Calendario Dinámico!
    </p>
    <br>
    <div class="video-responsive">
        <iframe src="https://polypad.amplify.com/embed/cdAQi8V1ohCBoA" frameborder="0" allowfullscreen></iframe>
    </div>
<!--
    <div class="txtCinta">
        <img src="img/beneficios/cinta2@3x.png" alt="">
        <p>¡<strong>Descubre</strong> el placer de aprender de manera <strong>lúdica</strong>!</p>
    </div>

    <div class="textoCinta">  
        <p>¡<strong class="resaltado">Explora</strong> la <strong class="resaltado">diversión educativa</strong> con nuestra <strong class="resaltado">exclusiva colección de juegos</strong> diseñados para <strong class="resaltado">estimular</strong> el <strong class="resaltado">pensamiento creativo y crítico</strong> en los estudiantes!</p>
        <p>Cada uno de nuestros juegos está <strong class="resaltado">diseñado</strong> para hacer que el <strong class="resaltado">aprendizaje</strong> sea una <strong class="resaltado">experiencia dinámica</strong> y <strong class="resaltado">memorable</strong>. <strong class="resaltado">Únete</strong> a nosotros en esta <strong class="resaltado">aventura educativa</strong> donde la <strong class="resaltado">diversión</strong> y el <strong class="resaltado">conocimiento</strong> van de la mano.</p>
    </div>
-->
</section>
<section id="periodico" class="p-5">
    <?php echo $JuegosCatalogo; ?>
</section>

<?php echo $FOOTER; ?>
<?php echo $BOTONWPP_HOME; ?>
</body>
</html>