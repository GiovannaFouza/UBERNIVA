<?php

$conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");

   $nome=$_POST['nome'];
   $email=$_POST['email'];
   $senha1=$_POST['senha1'];
    
   $gravando = "INSERT INTO cadastro2 (nome,email,senha1) VALUES ('$nome','$email','$senha1')";

   $resultado = mysqli_query($conexao,$gravando);

   if (!$resultado)
   {
       echo "erro na gravação do registro <br>";
       echo mysqli_error();
           
   }
else{
      
    mysqli_close($conexao);
    echo ( "<script> window.location.href = \"indexuber.php\"; </script>");
  }
?>
