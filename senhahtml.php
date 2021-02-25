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
                <div id="tarefas" class="navbar-right">
                        <a href="cadastro.html"> Cadastre - se para comentar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="senhahtml.php">Esqueceu sua senha</a>
                    <div class="row">
                     <form class="form-inline navbar-right" name="indexuber" method="POST" action="entrar.php">
                        <label for="nome"><b>Login</b>&nbsp;</label><input class="form-control mr-sm-2" type="email" name ="email" minlength="6" placeholder="Ex:joaopedro@gmail.com" required aria-label="Ex:joaopedro@gmail.com">
                        <label>Senha&nbsp;</label><input class="form-control mr-sm-2" type="password" name="senha1" minlength="6" placeholder="Ex:123456" required aria-label="Ex:123456">
                        <button class="btn btn-success" type="submit">Entrar</button>
                        <button class="btn btn-success" type="submit">Limpar</button>
                    </form>    
                        <br>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </nav> 
        <br><br><br><br>
        <h1>Esqueceu sua senha ? Não tem problema</h1>
        <center>
            <form name="cad" method="POST" action="senha2.php">
                <label><h2>Digite seu e-mail</h2></label><br><input type="email" name="senha1" minlength="6" placeholder="Ex: joaopedro@gmail.com" required>&nbsp;&nbsp;&nbsp;
                <input type="submit" name="salva" class="btn btn-success" value="Enviar">
                <input type="button" name="botao" class="btn btn-success" value="Limpar">
            </form>
        </center>
        <div id="footer">
        <div class="container navbar-fixed-down">
            <div class="row">
                <div class="col-lg-9"></div>
            </div>
            <hr>
            <footer>
                <div class="row">
                    <div class="col-lg-9">
                        <p>Todos os direitos reservados Copyright © Blog motorista de aplicativo 2019 - T.I. - Five Members </p>
                    </div>
                    <div id="xuxu2" class=" navbar-right row col-12 col-sm-12 col-md-7 col-lg-3">
                        <right class="img">
                            <a class="xxx" href="javascript:facebook();" target="_blank">
                                <img src="imagens/facebook.png" target="_blank" width="40px" height="40px">
                            </a>
                            <a class="xxx" href="javascript:youtube();" target="_blank">
                                <img src="imagens/youtube.png" width="60px" height="60px">
                            </a>
                            <a class="xxx" href="javascript:twitter();" target="_blank">
                                <img src="imagens/twitter.png" width="30px" height="30px">
                            </a>
                            <a class="xxx" href="javascript:instagram();" target="_blank">
                                <img src="imagens/instagram2.png" target="_blank" width="40px" height="40px">
                            </a>
                        </right>
                    </div>
                </div>
            </footer>
        </div> 
        </div>
    </body>
</html>
    