<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");
        
        $senha1c=$_POST['senha1'];
        
        $sql="SELECT `nome`, `email`, `senha1` FROM cadastro2 WHERE senha1= '$senha1c'";
		
        require 'C:\xampp\htdocs\bloguber/vendor/autoload.php';

        $from = new SendGrid\Email(null,"motoristaplicativo@outlook.com" );
        $subject = "Esqueceu sua senha";
        $to = new SendGrid\Email(null, $senha1c);
        $content = new SendGrid\Content("text/html", "Olá Nivald0, <br><br>Nova mensagem de contato<br><br>Senha: $senha1c <br>");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = 'SENDGRID_API_KEY';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
		
        ?>
    </body>
</html>
