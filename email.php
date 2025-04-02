<!-- email.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    if ($nome && $email && $subject && $mensagem) {
        // $to = "seuemail@dominio.com";
        // $headers = "From: $email\r\n" .
        //            "Reply-To: $email\r\n" .
        //            "Content-Type: text/plain; charset=UTF-8";
        // $body = "Nome: $nome\nEmail: $email\nAssunto: $subject\n\nMensagem:\n$mensagem";

        // if (mail($to, $subject, $body, $headers)) {
        //     echo "E-mail enviado com sucesso!";
        // } else {
        //     echo "Falha no envio do e-mail.";
        // }

        echo "<h3>Dados Recebidos:</h3>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Assunto:</strong> $subject</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
    } else {
        echo "<p>Preencha todos os campos corretamente.</p>";
    }
}
?>


