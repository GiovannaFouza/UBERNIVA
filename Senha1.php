<?php
    $conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");

    $email=$_POST['email'];

    $sql3="SELECT * FROM cadastro2 WHERE email = '$email'";

    $resultado3=mysqli_query($conexao,$sql3);
    $registro3 =mysqli_num_rows($resultado3);

    
    if ($registro3>0)
    {
        while ($usuario =mysqli_fetch_array($resultado3))
        
        if ($email == $usuario['email'])
        {
            echo "Em breve você receberá sua senha";
        }
    }
    else 
    {
        echo "Email invalido";
    }
   
?>

