<!-- email.php -->

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Configuração do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('MAIL_USERNAME'); 
    $mail->Password   = getenv('MAIL_PASSWORD'); 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Endereços
    $mail->setFrom(getenv('MAIL_USERNAME'), 'Seu Nome');
    $mail->addAddress('rafael.cabral@hotmail.com.br', 'Destinatário');

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = 'Teste de envio pelo GitHub Actions';
    $mail->Body    = 'Este e-mail foi enviado automaticamente com <strong>PHPMailer</strong>.';

    $mail->send();
    echo "E-mail enviado com sucesso!";
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}
    
?>



