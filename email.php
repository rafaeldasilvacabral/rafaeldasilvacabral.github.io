<!-- email.php -->

<?php
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; // ou 'tls'
$mail->Host = 'smtp.seuservidor.com';
$mail->Port = 465; // ou 587
$mail->Username = 'rscabral.canada@gmail.com';
$mail->Password = 'lmr@4210CC';
$mail->setFrom('rscabral.canada@gmail.com', 'Rafael Cabral');
$mail->addAddress('rafael.cabral@hotmail.com.br', 'Rafael');
$mail->Subject = 'Teste do email';
$mail->Body = 'Ola tudo bem';
$mail->AltBody = 'Simples assim';

if(!$mail->send()) {
    echo 'Erro ao enviar email: ' . $mail->ErrorInfo;
} else {
    echo 'Email enviado com sucesso!';
}
?>




