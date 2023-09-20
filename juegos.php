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
</head>
<body>
<?php echo $MENU; ?>
<script>
    var posicionMenu = document.getElementById('m5');
    posicionMenu.classList.add('menuActivo');
</script>
<style>
#mantenimiento{
    width: 100vw;
    height: 55vw;
    background-image: url(img/mantenimiento@3x.png);
    background-size: 100vw;
    background-position: center;
    background-repeat: no-repeat;
}
#lfdskjfñls{
    width: 100vw;
    height: 9vw;
}
</style>
<section id="lfdskjfñls"></section>
<section id="mantenimiento"></section>

<?php echo $FOOTER; ?>
<?php echo $BOTONWPP_HOME; ?>
</body>
</html>