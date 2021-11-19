<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer(true);
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$texto = $_POST['texto'];

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'codandodemadrugada@gmail.com';                     //SMTP username
    $mail->Password   = '$Hash34&&wWw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('codandodemadrugada@gmail.com', 'Unidentis Test');
    $mail->addAddress('codandodemadrugada@gmail.com');         
    $mail->addCC("{$email}");
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Formulário enviado por: {$nome}";
    $mail->Body    = "
        Um novo formulário foi preenchido por: <b>$nome</b> <br><br>
        <b> Nome: </b>  $nome <br>
        <b> CPF: </b>  $cpf <br>
        <b> E-mail: </b>  $email <br> 
        <b> Texto: </b>  $texto <br> 
        ";
    $mail->AltBody = "<b> Nome: </b>  $nome <br><b> E-mail: </b>  $email <br> <b> Cpf: </b>  $cpf <br> Texto: $texto ";

    $mail->send();
    header("Location:../../enviado.html");
    // echo 'Mensagem Enviada!';
} catch (Exception $e) {
    // echo "Erro no envio.";
    echo "A mensagem nao foi enviada: {$mail->ErrorInfo}";
}






