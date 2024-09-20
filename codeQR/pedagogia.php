<?php
if(isset($_GET['qr'])){
    //require_once('/var/www/html/moodle/config-ext.php');
    //$codigo = mysqli_real_escape_string($link, $_GET['qr']);
    //$insertar = ''
    $ip = $_SERVER['REMOTE_ADDR'];
    $geoData = file_get_contents("http://ip-api.com/json/{$ip}");
    $geoData = json_decode($geoData, true);

    if ($geoData['status'] === 'success') {
        echo "Ciudad: " . $geoData['city'] . "<br>";
        echo "Región: " . $geoData['regionName'] . "<br>";
        echo "País: " . $geoData['country'] . "<br>";
    } else {
        echo "No se pudo determinar la ubicación.";
    }
}
?>