<!-- envio_email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $sub = $_POST['subject'];

    $to = 'rscabral.canada@gmail.com';
    $subject = $sub . ' ' . $nome;
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Falha no envio do email.";
    }
}
?>
