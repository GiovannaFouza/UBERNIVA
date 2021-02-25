<?php
    session_start();
    $conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");

    $email=$_POST['email'];
    $senha1c=$_POST['senha1'];

// ###################################### Aparecer o nome #####################################
    $sql="SELECT * FROM cadastro2 WHERE email= '$email' and senha1= '$senha1c'";

    $resultado=mysqli_query($conexao,$sql);
    $registro =mysqli_num_rows($resultado);



    if ($registro>0)
    {
        while ($usuario =mysqli_fetch_array($resultado))
        {
            $variavel = $usuario['nome'];      
            $_SESSION['usuario'] = $variavel;
        }
        
        $sql1="SELECT * FROM comentarios WHERE email= '$email'";
    
        $resultado1=mysqli_query($conexao,$sql1);
        $registro1 =mysqli_num_rows($resultado1);
    
        if ($registro1>0)
        {
        
            while ($usuario1 =mysqli_fetch_array($resultado1))
            {
                $variavel1 = $usuario1['comentario'];
                $_SESSION['usuario1'] = $variavel1;
            }
        }
    }

    else
    {
        $_SESSION= array();  
    }

    if (isset ($_SESSION['usuario'])==true)
    {
        mysqli_close($conexao);
        echo ( "<script> window.location.href = \"meu_perfil.php\"; </script>");
    } 
    else
    {      
        mysqli_close($conexao);
        echo ( "<script> window.location.href = \"logincorreto.html\"; </script>");
    }
?>