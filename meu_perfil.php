<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <title>Blog Motorista de Aplicativo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesmotorista.css">
    <link rel="icon" href="imagens/logotipo1.png" type="image/x-icon"?v=2 />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        $(document).on("keydown", "#TxtObservacoes", function () {
    var caracteresRestantes = 180;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;

    $(".caracteres").text(caracteresRestantes);
});</script>
    </head>  
    
    <body>
        <nav class= " col-sm-12 col-md-12 col-lg-12 navbar navbar-default navbar-fixed-top" style="background-color: orange;">
            <div class="container-fluid">
                
                 
                
                <!-- Menu hamburger Inicio -->
                <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#exemplo-navbar-collapse" aria-expanded="false">
                    
                    <span class="sr-only">Navegacao</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                </button>
                    
                    <span class="col-sm-1"><a class="navbar-brand-fixed-top" href="indexuber.php"><img src="imagens/logotipo1.png" width="70px" height="60px"></a></span>
            </div>            
                <!-- Menu hamburger Fim -->
                
                
            <div class="collapse navbar-collapse" id="exemplo-navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    
                    <li><a class="VideosAuto" href="fotos.html">Fotos<span class="sr-only">(current)></span></a></li>
               
                    <li><a class="VideosAuto" href="videos.html">Vídeos<span class="sr-only">(current)></span></a></li>
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informações<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="FL" href="faleconosco.html">Fale conosco</a> </li>
                            <li><a class="Hos" href="Dicas.html">Dicas</a> </li>
                            <li class="divider"></li>
                            <li><a class="mer" href="emergencia.html">Emergência</a> </li>
                            <li><a class="mer" href="curiosidades.html">Curiosidades</a> </li>
                        </ul>
                    </li> 
                </ul>
                <br>
            </div>
        </div>
    </nav> 
        
        <br><br><br><br>
        <h2>Meu perfil</h2>
        <center>
            <p class="sete"><b>Nome : 
            
                <?php 
                $conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");
                    session_start();
                    if  (isset ($_SESSION['usuario'])==true)
                    {
                        echo $_SESSION['usuario'];
                    }          
                    else
                    { 
                        mysqli_close($conexao);
                        echo ( "<script> window.location.href = \"logincorreto.html\"; </script>");
                    }
                ?>          
                </b></p>
        </center>
        <br><br>
        <h1>Meus comentários</h1>
        <br>
        <center>
            <p class="sete">Esses comentários serão públicados, se quiser falar conosco vá na página principal e entre no link 'Fale conosco'.</p><b>
            <?php
                $conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");
        
                if  (isset ($_SESSION['usuario'])==true)
                {
     
                    $nome = $_SESSION['usuario'];  
                    $sql1="SELECT * FROM comentarios WHERE nome= '$nome'";
    
                    $resultado1=mysqli_query($conexao,$sql1);
                    $registro1 =mysqli_num_rows($resultado1);
        
                     
                    if ($registro1>0)
                    {
                        while ($usuario1 =mysqli_fetch_array($resultado1))
                        {
                            echo $registro1."&nbsp&nbsp"; 
                            echo $usuario1 ['comentario']."<br />";
                            
                        }
                    }
                }
            
                else
                { 
                    mysqli_close($conexao);
                    echo ( "<script> window.location.href = \"logincorreto.html\"; </script>");
                }
            ?>        
        </b></center>
        <script>
            function validarComentario(form)
            {
	           comentario = document.Meu_perfil.comentario.value
	       
                if (comentario != comentario)
                {
                    alert("COMENTÁRIO NÃO FOI ENVIADO");
                    form.comentario.focus();
                    return false;
                }
	               else  
                { 
                    alert("COMENTÁRIO ENVIADO COM SUCESSO");
                    return true;
                }
        
            }
        </script>
        <center>
            <form name="Meu_perfil" method="POST" action="comentarios1.php" onsubmit="return validarComentario(this);">
                <p class="sete"><b>Escrever anotação</b></p><p>Limite de caracteres 180</p>
                <span class="caracteres">180</span> Restantes <br>
                <textarea id="TxtObservacoes" name="comentario" rows="5" cols="40" placeholder="Digite aqui o seu texto" maxlength=180 required></textarea><br>
                <input type="submit" class="btn btn-success" name="botao" value="Enviar">                 
                <input type="reset" class="btn btn-danger" name="salva" value="Limpar">
            </form>
        </center>
        <div class="treze col-sm-12 col-md-12 col-lg-12">
        <div class="footer">
        <div class="container navbar-fixed-down">
            <div class="row">
                <div class="col-lg-9"></div>
            </div>
            <hr>
            <footer>
                <div class="row">
                    <div class="col-lg-9">
                        <p>Todos os direitos reservados Copyright © Blog motorista de aplicativo 2019 - T.I. - Five Members - cel: +55 11 94970-1896 </p>
                        </div>
                            <div id="xuxu2" class=" navbar-right row col-12 col-sm-12 col-md-7 col-lg-3">
                            <right class="img">
                                    <a class="xxx" href="https://www.facebook.com/" target="_blank">
                                        <img src="imagens/facebook1.png" target="_blank" width="40px" height="40px">
                                    </a>
                                    <a class="xxx" href="https://www.youtube.com/" target="_blank">
                                        <img src="imagens/youtube1.png" width="45px" height="45px">
                                    </a>
                                    <a class="xxx" href="https://twitter.com/" target="_blank">
                                    <img src="imagens/twitter1.png" width="30px" height="30px">
                                    </a>
                                    <a class="xxx" href="https://www.instagram.com/?hl=pt-br" target="_blank">
                                    <img src="imagens/instagram4.png" target="_blank" width="40px" height="40px">
                                    </a>
                                </right>
                            </div>
                        </div>
                    </footer>
                </div> 
            </div>
        </div>
    </body>
</html>
    