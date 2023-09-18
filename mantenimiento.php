<?php
require_once(dirname(__FILE__).'/componentes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $HEAD ?>
    <link rel="stylesheet" href="css/config.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento | Dinámico pedagogía y diseño</title>
</head>
<body>
<?php echo $MENU; ?>
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
<script src="js/aos.js"></script>
<script src="js/ajax.googleapis.com_ajax_libs_jquery_1.6.2_jquery.min.js"></script>
<script src="js/menu.js"></script>
<script>
$(document).ready(function() {
    AOS.init();
});
</script>
</body>
</html>