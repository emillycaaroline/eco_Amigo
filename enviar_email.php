<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];
    $mensagem = $_POST['mensagem'];

    $to = "projetoecoamigo@gmail.com"; // Replace with your email address
    $subject = "Nova denúncia de $nome";
    $body = "Nome: $nome\nEmail: $email\nMotivo: $motivo\nMensagem: $mensagem";

    if (mail($to, $subject, $body)) {
        echo '<script>alert("Denúncia enviada com sucesso. Obrigado!");</script>';
    } else {
        echo '<script>alert("Erro ao enviar a denúncia. Tente novamente mais tarde.");</script>';
    }
}
?>
