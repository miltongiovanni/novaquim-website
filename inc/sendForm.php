<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../lib/PHPMailer/src/Exception.php';
require '../lib/PHPMailer/src/PHPMailer.php';
require '../lib/PHPMailer/src/SMTP.php';

include_once('config_db.php');
$sql = "SELECT  description, value FROM configuration";
$stmt = $con->prepare($sql);
$stmt->execute();
$configuration = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
$recaptcha = $_POST['g-recaptcha-response'];
$recaptcha_site_key = $configuration['google_recaptcha_site_key'];
$google_api_key = $configuration['google_api_key'];
$projectId = $configuration['projectId'];
$correo_contacto = $configuration['correo_contacto'];

require('recaptcha.php');

$GoToEmail = false;

if (isset($recaptcha) && $recaptcha) {
    $GoToEmail = validate_rechapcha($recaptcha, $recaptcha_site_key, $google_api_key, $projectId );
}
$email_contacto = $_POST['email_contacto'];
$organizacion = $_POST['organizacion'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$acepta_politica = $_POST['acepta_politica'];
$nombre_contacto = $_POST['nombre_contacto'];
$tipo_consulta = $_POST['tipo_consulta'];
$mensaje = $_POST['mensaje'];
$email_body = '<!DOCTYPE html>
                <html lang="en">
                <head>
                  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                  <title>PHPMailer Test</title>
                </head>
                <body>
                <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                  <h1>Contacto desde el sitio Web</h1>
                  <br/>
                  <br/>
                  <p><strong>Nombre del contacto: </strong>'.$nombre_contacto.'.</p>
                  <p><strong>Correo electrónico del contacto: </strong>'.$email_contacto.'.</p>
                  <p><strong>Empresa: </strong>'.$organizacion.'.</p>
                  <p><strong>Asunto: </strong>'.$tipo_consulta.'.</p>
                  <p><strong>Teléfono contacto: </strong>'.$telefono.'.</p>
                  <p><strong>Número celular contacto: </strong>'.$celular.'.</p>
                  <p><strong>Cuerpo del mensaje: </strong></p>
                  <p>' . $mensaje . '</p>
                  <br/>
                  <br/>
                  <br/>
                  <p>Este mensaje se ha enviado desde el formulario de contacto de Industrias Novaquim S.A.S.</p>
                </div>
                </body>
                </html>';
$msg = '';
if ($GoToEmail === true) {


//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;              //Enable verbose debug output
        //   $mail->Mailer = 'smtp';
        $mail->isSMTP();                                    //Send using SMTP
        $mail->Host = 'mail.novaquim.com';                  //Set the SMTP server to send through
        $mail->SMTPAuth = true;                             //Enable SMTP authentication
        $mail->Username = EMAIL_USERNAME;                   //SMTP username
        $mail->Password = EMAIL_PASSWORD;                   //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    //Enable implicit TLS encryption
        $mail->Port = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        //Recipients
        $mail->setFrom(EMAIL_USERNAME, 'Contacto Web Industrias Novaquim');
        $mail->addAddress(EMAIL_NOVAQUIM, 'Contacto Web');     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($email_contacto, $nombre_contacto);
        $mail->addCC(CC_EMAIL_NOVAQUIM);
        $mail->msgHTML($email_body);


        $mail->Subject = "Consulta Web: " . $tipo_consulta;
        if (!$mail->send()) {
            $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $msg .= 'Message sent!';
            $sql = "INSERT INTO contacto (nombre_contacto, organizacion, email_contacto, telefono, celular, tipo_consulta, mensaje, acepta_politica, fecha_contacto)
                    VALUES ('$nombre_contacto', '$organizacion', '$email_contacto', $telefono, $celular, '$tipo_consulta', '$mensaje', $acepta_politica, NOW())";
            $stmt = $con->prepare($sql);
            $stmt->execute();
        }
    } catch (Exception $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    }


    die($msg);
}