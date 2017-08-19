<?php

require 'class.phpmailer.php';

$mail = new PHPMailer;

/** Configurar SMTP **/
$mail->isSMTP();                                      // Indicamos que use SMTP
$mail->Host = 'smtp.gmail.com';  // Indicamos los servidores SMTP
$mail->SMTPAuth = true;                               // Habilitamos la autenticación SMTP
$mail->Username = 'gemorales.va@gmail.com';                 // SMTP username
$mail->Password = 'movj920710';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Habilitar encriptación TLS o SSL
$mail->Port = 465;                                    // TCP port

/** Configurar cabeceras del mensaje **/
$mail->From = 'gemorales.va@gmail.com';                       // Correo del remitente
$mail->FromName = 'Tu nombre y apellidos';           // Nombre del remitente
$mail->Subject = 'Asunto del correo';                // Asunto

/** Incluir destinatarios. El nombre es opcional **/
$mail->addAddress('gemorales.va@gmail.com', 'Nombre1');


/** Enviarlo en formato HTML **/
$mail->isHTML(true);                                  

/** Configurar cuerpo del mensaje **/
$mail->Body    = 'Este es el mensaje en HTML <b>en negrita!</b>';
$mail->AltBody = 'Este es el mansaje en texto plano para clientes que no admitan HTML';

/** Para que use el lenguaje español **/
$mail->setLanguage('es');

/** Enviar mensaje... **/
if(!$mail->send()) {
    echo 'El mensaje no pudo ser enviado.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado correctamente';
}


?>