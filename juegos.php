<!DOCTYPE html>
<?php
require_once(dirname(__FILE__).'/componentes.php');
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
        <p>¡<strong>Descubre</strong> el placer de aprender de manera <strong>lúdica</strong>!</p>
    </div>

    <div class="textoCinta">  
        <p>¡<strong class="resaltado">Explora</strong> la <strong class="resaltado">diversión educativa</strong> con nuestra <strong class="resaltado">exclusiva colección de juegos</strong> diseñados para <strong class="resaltado">estimular</strong> el <strong class="resaltado">pensamiento creativo y crítico</strong> en los estudiantes!</p>
        <p>Cada uno de nuestros juegos está <strong class="resaltado">diseñado</strong> para hacer que el <strong class="resaltado">aprendizaje</strong> sea una <strong class="resaltado">experiencia dinámica</strong> y <strong class="resaltado">memorable</strong>. <strong class="resaltado">Únete</strong> a nosotros en esta <strong class="resaltado">aventura educativa</strong> donde la <strong class="resaltado">diversión</strong> y el <strong class="resaltado">conocimiento</strong> van de la mano.</p>
    </div>
</section>
<section>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="juegosGaleria">
                    <img src="img/juegos/servicios/Recurso 1.jpg" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <div class="juegosGaleria">
                    <img src="img/juegos/servicios/Recurso 2.jpg" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <div class="juegosGaleria">
                    <img src="img/juegos/servicios/Recurso 3.jpg" alt="">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<?php echo $FOOTER; ?>
<?php echo $BOTONWPP_HOME; ?>
</body>
</html>