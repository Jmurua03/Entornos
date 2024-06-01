<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Recomendar sitio</title>
</head>
<body>
<div style="max-width: 40%; text-align: left; margin-left: 20px;"> 
    <form method="POST" action=""> 
        <div class="mb-3">

            <label for="recomienda" class="form-label" > Su nombre</label>
            <input type="text" class="form-control text-bg-light mb-2" id="recomienda" required="" name="recomienda">
            
            <label for="recomendado" class="form-label" > Nombre de su amigo</label>
            <input type="text" class="form-control text-bg-light mb-2" id="recomendado" required="" name="recomendado">

            <label for="maildescrip" class="form-label">Mail de su amigo</label>
            <input type="email" class="form-control text-bg-light mb-2" id="maildescrip" placeholder="name@example.com" name="email2" required="">
        </div>
        <div class="mb-3">
            <label for="textdescrip" class="form-label ">Por que recomienda el sitio?</label>
            <textarea class="form-control" id="textdescrip" rows="3" name="message" required=""></textarea>
        </div>
        <div class="col-auto text-end">
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </div>
    </form>
</div>  
</body>
<style>
.form-label{
    font-weight: bold;
}
body{
    background-color:rgb(140, 202, 204);
}
</style>
</html>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PhpMailer/Exception.php';
require 'PhpMailer/PHPMailer.php';
require 'PhpMailer/SMTP.php';
if(isset($_POST['enviar'])){

    $recomienda = $_POST['recomienda'];
    $recomendado = $_POST['recomendado'];
    $email2 = $_POST['email2'];
    $mensaje = $_POST['message'];


    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
            $mail->SMTPAuth = true;
            $mail->Username = 'entornosgraficos6@gmail.com'; // Tu correo de Gmail
            $mail->Password = 'rwyt ropf afts btbx'; // Tu contraseña de Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; // Puerto SMTP para TLS

        //Recipients
        $mail->setFrom('entornosgraficos6@gmail.com', "xSHOPINGx");
        $mail->addAddress("$email2");     //Add a recipient


        //Content
        $mail->isHTML(false);                                  //Set email format to HTML
        $mail->Subject = "Tu amigo $recomienda quiere decirte algo!"; // se que seria mejor enviar un html con mas datos, un link al sitio, etc. Lo hice asi a modo de prueba. 
        $mail->Body    = "$mensaje";


        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }

?>
