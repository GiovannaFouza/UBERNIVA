<?php
    $conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");

function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function enviaEmail($de, $assunto, $senha1c, $para, $email_servidor) {
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, nl2br($mensagem), $headers);
}

$email_servidor = "motoristaplicativo@outlook.com";
$para = "giiiiferracinii@gmail.com";
$de = pegaValor("email");
$senha1c = pegaValor("senha1");
$assunto = "Esqueceu sua senha";

?>