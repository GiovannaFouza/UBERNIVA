<?php

$conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");

   $nome=$_POST['nome'];
   $email=$_POST['email'];
   $texto=$_POST['texto'];
    
   $gravando = "INSERT INTO faleconosco1 (nome,email,texto) VALUES ('$nome','$email','$texto')";

   $resultado = mysqli_query($conexao,$gravando);

   if (!$resultado)
   {
       echo "erro na gravação do registro <br>";
       echo mysqli_error();
           
   }
else{
      
    echo "Enviado com sucesso";
      mysqli_close($conexao);
  }
?>