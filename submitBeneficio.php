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
        $opcionesPermitidas = array("beneficios", "PQRS");
        $mensajeInput = $_POST['mensajeInput'];

        // Sanitizar los valores de entrada
        $nameInput = filter_var($nameInput, FILTER_SANITIZE_STRING);
        $mensajeInput = filter_var($mensajeInput, FILTER_SANITIZE_STRING);
        $emailInput = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
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
            $sql = "INSERT INTO PreDocentes (nombre, email, confirmado) VALUES (?, ?, 1)";
            $stmt = $link->prepare($sql);
            $stmt->bind_param("ss", $nameInput, $emailInput);

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
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = MAIL_USER;                     // SMTP username
        $mail->Password   = MAIL_PASSWORD;                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;

        $mail->setFrom('dinamico.moodle@gmail.com', 'Dinamico Web');
        $mail->addAddress($emailInput, $nameInput);        // a quien envia
        //$mail->addAddress('dinamicopdadm@gmail.com', 'Dinamico Ventas');
        $mail->addCC('dinamico.moodle@gmail.com', 'Dinamico Web');

        $mail->isHTML(true);
        $mail->Subject = 'Beneficios - '.$tipoSolicitud;
        $mail->Body .= '<html>
                            <head>
                                <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;600&display=swap" rel="stylesheet">
                                <style>
                                    p{
                                        font-family: "Poppins", sans-serif;
                                    }
                                </style>
                            </head>';
            $mail->Body .= '<body>
                                <p><strong>Nombre: </strong>'.$nameInput.'</p>
                                <p><strong>Email: </strong>'.$emailInput.'</p>
                                <p><strong>Asunto: </strong>'.$tipoSolicitud.'</p>
                                <p><strong>Mensaje: </strong>'.$mensajeInput.'</p>
                            </body>
                        </html>';
        $mail->send();

    } catch (Exception $e) {
        error_log("Error de envío:" . $mail->ErrorInfo);
    }

    header("Location: beneficios.php");
    exit();

}
?>