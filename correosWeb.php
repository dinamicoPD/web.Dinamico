<?php
require_once('config-ext.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_POST['condicion'] == 1) {

    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6LdWf58mAAAAAMk6pmEvOdHhH6S1LLP82zvWCYpr";
    $url = "https://www.google.com/recaptcha/api/siteverify";

    $respuesta = file_get_contents($url."?secret=".$secretkey."&response=".$captcha."&remoteip=".$ip);

    $atributos = json_decode($respuesta, TRUE);

    $error = array();

    if(!$atributos['success']){
        header("Location: index.php?envioMuestra=no");
        exit();
    }else{
        funcionPruebaGratis();
        header("Location: index.php");
        exit();
    }
}


function funcionPruebaGratis() {
     
    require 'moodle/dinapage/phpMailer/Exception.php';
    require 'moodle/dinapage/phpMailer/PHPMailer.php';
    require 'moodle/dinapage/phpMailer/SMTP.php';

    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = MAIL_USER;                     // SMTP username
        $mail->Password   = MAIL_PASSWORD;                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;
        
        // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        $ruta_img = 'moodle/dinapage/img/logo 2.png';
        $ruta_img2 = 'moodle/dinapage/img/dinamicoEscritorio.png';
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $css = "
        
        .table_1{
            width: 400px;
            font-family: Georgia, serif;
            margin: auto;
            border-collapse: collapse;
            border: none;
        }

        .cabeza{
            background-color: #1F1F1F;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }
    
        .img {
            width: 200px;
            padding: 6px;
        }
        
        .txtTitulo{
            color: #00435F;
            font-weight: bold;
            text-align: left;
        }
    
        .txt{
            color: #0080BB;
            font-weight: bold;
            text-align: justify;
        }
    
        .pie2{
            font-size: 10px;
            background-color: #1F1F1F;
            color: #8C8C8C;
            text-align: center;
        }        
        ";

        $mail->addEmbeddedImage($ruta_img, 'imagen_logo');

        //Recipients
        $mail->setFrom('dinamico.moodle@gmail.com', $nombre);
        $mail->addAddress('dinamicopdadm@gmail.com', 'Dinamico Ventas');        // a quien envia
        $mail->addCC($correo); // CC
        
      
        // Content */
        
        $mail->isHTML(true);// Set email format to HTML
        $mail->Subject = 'Muestra gratis - '.$nombre;
        $mail->Body =
        '<html>
            <head>
                <style>'.$css.'</style>
            </head>';
        $mail->Body .=
        '<table class="table_1">
            <thead>
                <tr>
                    <th class="cabeza" colspan="4">MUESTRA GRATIS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="txtTitulo" colspan="1">Nombre:</td>
                    <td class="txt" colspan="3">'.$nombre.'<hr></td>
                </tr>
                <tr>
                    <td class="txtTitulo" colspan="1">Email:</td>
                    <td class="txt" colspan="2">'.$correo.'<hr></td>
                </tr>
                <tr>
                    <td class="txtTitulo" colspan="1">Telefono:</td>
                    <td class="txt" colspan="2">'.$telefono.'<hr></td>
                </tr>
                <tr>
                    <td class="txtTitulo" colspan="1">Mensaje:</td>
                    <td class="txt" colspan="2">'.$mensaje.'</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table class="table_1">
                            <tr class="pie2">
                                <td colspan="2">
                                    <a href="http://dinamicopd.com/"><img class="img" src="cid:imagen_logo" alt=""></a>
                                </td>
                                <td colspan="2">
                                    <p>
                                        Cra 2E # 73 - 25<br>
                                        3123000100 | 3123010101<br>
                                        dinamicopdadm@gmail.com
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>';

        $mail->send();

    } catch (Exception $e) {
        error_log("El mensaje para reestablecer password no ha sido enviado. Error de Mailer:" . $mail->ErrorInfo);
    }
}

?>