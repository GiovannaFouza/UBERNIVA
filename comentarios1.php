<?php
    session_start();
    $conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");

    $usuario= $_SESSION['usuario'];
    $comentario=$_POST['comentario'];
    
    $gravando = "INSERT INTO comentarios (nome,comentario) VALUES ('$usuario','$comentario')";
    $resultado = mysqli_query($conexao,$gravando);    
    
    if (!$resultado)
   {
       echo "erro na gravação do registro <br>";
       echo mysqli_error();
           
   }
  else
  {
      mysqli_close($conexao);
        echo ( "<script> window.location.href = \"meu_perfil.php\"; </script>");
        

  }
     
?>