<?php
define('CLAVE', '6Leg43coAAAAAH_BzTPuaK4aAZB8TTyK38-wHZSJ');

$token = $_POST['token'];
$action = $_POST['action'];
$proceder = true;

$cu = curl_init();
curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($cu, CURLOPT_POST, 1);
curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cu);
curl_close($cu);

$datos = json_decode($response, true);

if($datos['success'] == 1 && $datos['score'] >= 0.5){
    if($datos['action'] == 'validarUsuario'){
        if (!empty($_POST['condicion'])) {
            $proceder = false;
        }
    }else{
        $proceder = false;
    }
}else{
    $proceder = false;
}

if($proceder == true){
    require_once('config-ext.php');

    // Verificar si los valores de $_POST están definidos
    if (isset($_POST['nameInput'], $_POST['emailInput'], $_POST['tipoSolicitud'], $_POST['mensajeInput'])) {
        $nameInput = $_POST['nameInput'];
        $emailInput = $_POST['emailInput'];
        $tipoSolicitud = $_POST['tipoSolicitud'];
        $opcionesPermitidas = array("beneficios", "PQRS", "Muestras docentes");
        $mensajeInput = $_POST['mensajeInput'];
        $telefonoInput = $_POST['telefonoInput'];

        // Sanitizar los valores de entrada
        $nameInput = filter_var($nameInput, FILTER_SANITIZE_STRING);
        $mensajeInput = filter_var($mensajeInput, FILTER_SANITIZE_STRING);
        $emailInput = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
        $telefonoInput = filter_var($telefonoInput, FILTER_SANITIZE_STRING);
        $tipoSolicitud = htmlspecialchars($tipoSolicitud);

        if (!preg_match('/^[\p{L}\s]+$/u', $nameInput) || str_word_count($nameInput) < 3) {
            header("Location: beneficios.php");
            exit();
        }

        if (!filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
            header("Location: beneficios.php");
            exit();
        }

        if (!in_array($tipoSolicitud, $opcionesPermitidas)) {
            header("Location: beneficios.php");
            exit();
        }

        if (!preg_match('/^[\p{L}0-9\s]+$/u', $mensajeInput) || strlen($mensajeInput) > 200) {
            header("Location: beneficios.php");
            exit();
        }

        // Verificar si el correo electrónico ya existe en la base de datos
        $sql = "SELECT email FROM PreDocentes WHERE email = ?";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("s", $emailInput);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $stmt->close();
            $link->close();
            mensajeEnvioBeneficio($nameInput, $emailInput, $tipoSolicitud, $mensajeInput);
        } else {
            $stmt->close();

            // Insertar un nuevo registro en la base de datos
            $sql = "INSERT INTO PreDocentes (nombre, email,	telefono, confirmado) VALUES (?, ?, ?, 1)";
            $stmt = $link->prepare($sql);
            $stmt->bind_param("sss", $nameInput, $emailInput, $telefonoInput);

            if ($stmt->execute()) {
                $stmt->close();
                $link->close();
                mensajeEnvioBeneficio($nameInput, $emailInput, $tipoSolicitud, $mensajeInput);
            } else {
                header("Location: beneficios.php");
                exit();
            }
        }
    } else {
        header("Location: beneficios.php");
        exit();
    }

    $stmt->close();
    $link->close();

}else{
    header("Location: beneficios.php");
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function mensajeEnvioBeneficio($nameInput, $emailInput, $tipoSolicitud, $mensajeInput) {
    require 'moodle/dinapage/phpMailer/Exception.php';
    require 'moodle/dinapage/phpMailer/PHPMailer.php';
    require 'moodle/dinapage/phpMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try{

        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                       // Send using SMTP
        $mail->CharSet 	  = 'UTF-8'; 
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = MAIL_USER;                     // SMTP username
        $mail->Password   = MAIL_PASSWORD;                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;

        $cssJD = '
			.tabla{width:450px;margin:auto;border-collapse:collapse;border:none;text-align:center;}table *{margin:0;padding:0;box-sizing:border-box;}.SkyBlue{background-color:#81D4E7;}.SkyBlueClaro{background-color:#CEF2F8;}.PaleGreen{background-color:#BDE298;}.PaleGreenClaro{background-color:#E5F1D6;}.Khaki{background-color:#FAD263;}.KhakiClaro{background-color:#FDDE90;}.Moccasin{background-color:#FFEBBA;}.oscuro{background-color:#424242;}.MediumPurple{background-color:#9AAFFE;}.MediumPurpleClaro{background-color:#D1DBFE;}.Blanco{background-color:#ffffff;}.fontBlanco{color:#ffffff;}.fontNegro{color:#424242;}.fontAzul{color:#368A9B;}.fontRojo{color:#F6746D;}.fontPoppins{font-family:"Poppins",sans-serif;}.fontRoboto{font-family:"Roboto",sans-serif;}.fontRobotoMono{font-family:"Roboto Mono",monospace;}.titulo{font-weight:700;padding:9px 0px;font-size:26px;}.span{background-color:#F6746D;}.tabla img{display:block;margin:auto;}.tablax4 td{width:112.5px;}.tablaX8 td{width:56.25px;}.tablaX6 td{width:75px;}.grupoTitulo{margin-top:17px;}.img80{width:80%;}.img100{width:100%;}.img50{width:50%;}.img30{width:30%;}.pestana{border-radius:12px 12px 0 0;font-size:12px;}.periodico{background-color:#EADED4;font-size:12px;padding:9px 6px 9px 6px;}.margenesDP{padding:9px 0px;}.carpetas{font-size:12px;padding:9px 6px 9px 6px;}.servicios{padding:5px;text-decoration:none;cursor:pointer;display:block;}.pantalla{width:100%;padding:10px 34px;}.play{width:35px;height:35px;border-radius:50%;padding:9.5px 0px 0px 2.5px;}.play img{width:15px;height:15px;}.progreso{width:90%;margin:auto;padding:3px 0;}.btnReproducir{width:60%;margin:auto;padding:3px 0;}.footer1{width:95%;margin:auto;font-size:10px;text-align:left;}.footer1 .social{width:15px;}.footer1 .social img{width:10px;}.footer1 .logo{width:49px;}.footer1 .logo img{width:40px;padding-right:5px;border-right:1px solid #ffffff;}.altoMensaje{height:215px;}.inputLicencia{width:90%;margin:auto;border:2px solid #424242;height:30px;border-radius:20px;margin:5px 0;}.bordeRedondeado{border-radius:3px;}.bordeSuperior{border-top:6px solid #ffffff;}.pasos1{padding:6.5px 3px;margin-right:3px;line-height:16px;}
		';

        $mail->setFrom('dinamico.moodle@gmail.com', 'Dinamico Web');
        $mail->addAddress($emailInput, $nameInput);        // a quien envia
        $mail->addAddress('dinamicopdadm@gmail.com', 'Dinamico Ventas');
        $mail->addCC('dinamico.moodle@gmail.com', 'Dinamico Web');

        $ruta_img = 'moodle/dinapage/img/correos/Recurso_1.png';
        $ruta_icon = 'moodle/dinapage/img/correos/Recurso_2.png';
        $ruta_persona = 'moodle/dinapage/img/correos/Recurso_3.png';
        $ruta_triangulo = 'moodle/dinapage/img/correos/Recurso_4.png';
        $ruta_progreso = 'moodle/dinapage/img/correos/Recurso_5.png';
        $ruta_btnFestival = 'moodle/dinapage/img/correos/Recurso_8.png';
        $ruta_btnLibros = 'moodle/dinapage/img/correos/Recurso_7.png';
        $ruta_btnJuegos = 'moodle/dinapage/img/correos/Recurso_6.png';
        $ruta_yt = 'moodle/dinapage/img/correos/youtube.png';
		$ruta_msm = 'moodle/dinapage/img/correos/email.png';
        $ruta_wpp = 'moodle/dinapage/img/correos/wpp.png';       		
        $ruta_in = 'moodle/dinapage/img/correos/instagram.png';
		$ruta_logo = 'moodle/dinapage/img/correos/el_logo.png';

        $mail->addEmbeddedImage($ruta_img, 'imagen_img');
        $mail->addEmbeddedImage($ruta_icon, 'imagen_icon');
        $mail->addEmbeddedImage($ruta_persona, 'imagen_persona');
        $mail->addEmbeddedImage($ruta_triangulo, 'imagen_triangulo');
        $mail->addEmbeddedImage($ruta_progreso, 'imagen_progreso');
        $mail->addEmbeddedImage($ruta_btnFestival, 'imagen_btnFestival');
        $mail->addEmbeddedImage($ruta_btnLibros, 'imagen_btnLibros');
        $mail->addEmbeddedImage($ruta_btnJuegos, 'imagen_btnJuegos');
        $mail->addEmbeddedImage($ruta_yt, 'imagen_yt');
		$mail->addEmbeddedImage($ruta_msm, 'imagen_msm');
        $mail->addEmbeddedImage($ruta_wpp, 'imagen_wpp');
        $mail->addEmbeddedImage($ruta_in, 'imagen_in');
		$mail->addEmbeddedImage($ruta_logo, 'imagen_logo');

        $mail->isHTML(true);
        $mail->Subject = 'Beneficios - '.$tipoSolicitud;
        $mail->Body .= '
            <html>
                <head>
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&family=Roboto+Mono:wght@300;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
                    <style>'.$cssJD.'</style>
                </head>
                <body>
                    <table class="tabla tablax4" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="4" class="titulo fontPoppins oscuro fontBlanco">¡Gracias por <span class="span">&nbsp;suscribirte!&nbsp;</span></td>
                        </tr>
                        <tr class="SkyBlue fontBlanco fontPoppins">
                            <td colspan="2">
                                <p>Ahora también formas<br> parte de <strong>nuestra gran<br> comunidad.</strong></p>
                            </td>
                            <td colspan="2">
                                <img class="img80" src="cid:imagen_img" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="PaleGreen margenesDP" colspan="2"><img class="img30" src="cid:imagen_icon" alt=""></td>
                            <td class="fontRoboto periodico" colspan="2" rowspan="5">
                            <p>Queremos agradecerte<br>
                            por unirte a nuestra comunidad.<br>
                            Tu apoyo y participación son<br>
                            muy importantes para nosotros.<br><br>
                            Estamos comprometidos a<br>
                            brindarte contenido de calidad y<br>
                            experiencias enriquecedoras. Si<br>
                            tienes alguna pregunta o<br>
                            sugerencia, no dudes en<br>
                            contactarnos.<br><br>
                            <strong>¡Gracias nuevamente por unirte<br>
                            a nosotros!</p></strong>
                        </td>
                        </tr>
                        <tr>
                            <td class="PaleGreen fontNegro fontPoppins margenesDP" colspan="2"><p><strong>HOLA,<br>'.$nameInput.'</strong></p></td>
                        </tr>
                        <tr class="PaleGreen fontPoppins">
                            <td></td>
                            <td><p class="grupoTitulo pestana fontNegro Khaki fontPoppins"><strong>Asunto</strong></p></td>
                        </tr>
                        <tr>
                            <td class="fontNegro Khaki fontRoboto carpetas" colspan="2"><p>'.$tipoSolicitud.'</p></td>
                            </tr>
                        <tr class="Khaki">
                            <td><p class="grupoTitulo pestana fontNegro Moccasin fontPoppins"><strong>Mensaje</strong></p></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="fontNegro Moccasin fontRoboto carpetas altoMensaje" colspan="2" rowspan="3"><p>'.$mensajeInput.'</p></td>
                            <td class="oscuro fontBlanco fontPoppins" colspan="2"><p><strong>Haz clic en<br>nuestros servicios</strong></p></td>
                        </tr>
                        <tr class="MediumPurple">
                            <td><img class="img50" src="cid:imagen_persona" alt=""></td>
                            <td>
                                <a href="https://youtu.be/jdvtfYZbq1c?si=YKH9Bne1DlhH6QOD" class="servicios">
                                    <div class="pantalla MediumPurpleClaro">
                                        <div class="play MediumPurple">
                                            <img src="cid:imagen_triangulo" alt="">
                                        </div>
                                    </div>
                                    <div class="fontPoppins fontBlanco">
                                        <p><strong>Festival</strong></p>
                                    </div>
                                    <div class="progreso">
                                        <img src="cid:imagen_progreso" alt="">
                                    </div>
                                    <div class="btnReproducir">
                                        <img src="cid:imagen_btnFestival" alt="">
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="Khaki">
                                <a href="https://youtu.be/7fZjLUcADeg?si=k0cs0SysByLSvED3" class="servicios">
                                    <div class="pantalla Moccasin">
                                        <div class="play Khaki">
                                            <img src="cid:imagen_triangulo" alt="">
                                        </div>
                                    </div>
                                    <div class="fontPoppins fontBlanco">
                                        <p><strong>Libros</strong></p>
                                    </div>
                                    <div class="progreso">
                                        <img src="cid:imagen_progreso" alt="">
                                    </div>
                                    <div class="btnReproducir">
                                        <img src="cid:imagen_btnLibros" alt="">
                                    </div>
                                </a>
                            </td>
                            <td rowspan="2" class="PaleGreen">
                                <a href="https://youtu.be/0kUK5PjQ8XM?si=N279OKfDH_2EAkSD" class="servicios">
                                    <div class="pantalla PaleGreenClaro">
                                        <div class="play PaleGreen">
                                            <img src="cid:imagen_triangulo" alt="">
                                        </div>
                                    </div>
                                    <div class="fontPoppins fontBlanco">
                                        <p><strong>Juegos</strong></p>
                                    </div>
                                    <div class="progreso">
                                        <img src="cid:imagen_progreso" alt="">
                                    </div>
                                    <div class="btnReproducir">
                                        <img src="cid:imagen_btnJuegos" alt="">
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="oscuro fontBlanco fontRoboto">
                                <table class="footer1">
                                    <tr>
                                        <td class="logo" rowspan="5"><img src="cid:imagen_logo" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td class="social"><img src="cid:imagen_yt" alt=""></td>
                                        <td>Dinámico Pedagogía y Diseño</td>
                                    </tr>
                                    <tr>
                                        <td class="social"><img src="cid:imagen_wpp" alt=""></td>
                                        <td>312 300 0100 - 312 301 0101</td>
                                    </tr>
                                    <tr>
                                        <td class="social"><img src="cid:imagen_msm" alt=""></td>
                                        <td>dinamicopdadm@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class="social"><img src="cid:imagen_in" alt=""></td>
                                        <td>dinamicopd</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </body>
            </html>
            ';

        $mail->send();

    } catch (Exception $e) {
        error_log("Error de envío:" . $mail->ErrorInfo);
    }

    header("Location: beneficios.php");
    exit();

}
?>