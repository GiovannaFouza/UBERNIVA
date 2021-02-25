<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <title>Blog Motorista de Aplicativo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesmotorista.css">
    <link rel="icon" href="imagens/motorista222.png" type="image/x-icon"?v=2 />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <meta property="fb:app_id" content="{YOUR_APP_ID}" />
    </head>  
    
    <body>
        <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
        
        <nav class= " col-sm-12 col-md-12 col-lg-12 navbar navbar-default navbar-fixed-top" style="background-color: orange;" >
            <div class="container-fluid">
                
                 
                
                <!-- Menu hamburger Inicio -->
                <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#exemplo-navbar-collapse" aria-expanded="false">
                    
                    <span class="sr-only">Navegacao</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                </button>
                    
                    <span class="col-sm-1"><a class="navbar-brand-fixed-top" href="#inicio"><img src="imagens/motorista222.png" width="120px" height="80px"></a></span>
            </div>            
                <!-- Menu hamburger Fim -->
                
                
            <div class="collapse navbar-collapse" id="exemplo-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color=black><b>Galeria</b></font><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="FL" href="fotos.html">Fotos</a> </li>
                            <li><a class="Com" href="videos.html">Vídeos</a> </li>
                        </ul>
                    </li>
                    
                   <li><a class="VideosAuto" href="#qualidade"><font color=black><b>Qualidade</b></font><span class="sr-only">(current)></span></a></li>
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color=black><b>Informações</b></font><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="FL" href="faleconosco.html">Fale conosco</a> </li>
                            <li><a class="Com" href="#coment">Comentários</a> </li>
                            <li class="divider"></li>
                            <li><a class="Hos" href="Dicas.html">Dicas</a> </li>
                            <li><a class="mer" href="emergencia.html">Emergência</a> </li>
                            <li class="divider"></li>
                            <li><a class="mer" href="#patrocinio">Patrocínio</a> </li>
                            <li><a class="mer" href="curiosidades.html">Curiosidades</a> </li>
                        </ul>
                    </li> 
                </ul>
               <!--- <div id="tarefas" class="navbar-right">
                        <a href="cadastro.html"><font color=white><p class="nove"> Cadastre - se para comentar</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="senha.html"><font color=white>Esqueceu sua senha</font></p></a>
                    <div class="row">
                     <form class="form-inline navbar-right" name="indexuber" method="POST" action="entrar.php">
                         <label for="nome"><b>Login</b>&nbsp;</label><input class="form-control mr-sm-2" type="email" name ="email" minlength="6" placeholder="Ex:joaopedro@gmail.com" required aria-label="Ex:joaopedro@gmail.com">
                        <label>Senha&nbsp;</label><input class="form-control mr-sm-2" type="password" name="senha1" minlength="6" placeholder="Ex:123456" required aria-label="Ex:123456">
                        <button class="btn btn-success" type="submit">Entrar</button>
                        <button class="btn btn-danger" type="submit">Limpar</button>
                    </form>    
                        <br>
                    </div>
                </div>
            </div>--->
                </div>
            </div>
        </nav> 
        <div id="inicio">
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
        <!------------------------------ Inicio do carrosel ----------------------------------->
        
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>-->

                                    <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img  id="nos" src="imagens/venha.png" alt="Los Angeles" height="100%" width="100%">
                    </div>
                    <div class="item">
                        <img id="chicago" src="imagens/faster.png" alt="Chicago" height="100%" width="100%">
                    </div>
                    <div class="item">
                        <img id="novayork" src="imagens/indo.png" alt="novayork" height="100%" width="100%">
                    </div>
                </div>
            
                                <!-- Left and right controls -
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>-->
            </div>
            <br>
            
           <div id="vistosum" class="row col-sm-12 col-md-12 col-lg-12"><h3>separador</h3></div>
            <div id="vistos" class="row col-sm-12 col-md-12 col-lg-12">
            <h1><u>Os mais vistos</u></h1>
                <div id="vistos3" class="row col-sm-12 col-md-3 col-lg-3"></div>
                <div id="vistos1" class="row col-sm-12 col-md-3 col-lg-3">
                <img src="imagens/nivaeamigo.jpeg" height="100%" width="100%">
                </div>
                <div id="vistos4" class="row col-sm-12 col-md-1 col-lg-1"></div>
                <div id="vistos2" class="row col-sm-12 col-md-3 col-lg-3">
                <video src="videos/congo1.mp4" preload="auto" controls height="100%" width="100%"></video> <b><p class="seis">Ocupando São Paulo | Congolinária - Sabores do Congo no Sumaré, Vegan!</p></b>
                </div>
                <div id="vistos4" class="row col-sm-12 col-md-2 col-lg-2"></div>
            
            </div>
            
            <div id="vistosdois" class="row col-sm-12 col-md-12 col-lg-12"><h3>separador</h3></div>
            <div id="coment" class="row col-sm-12 col-md-12 col-lg-12">
                <h1><u>Comentários</u></h1>
                
                <center>
                <div class="fb-comments" data-colorscheme="light" data-href="https://www.motoristaplicativo.com" data-numposts="5"></div>
                </center>
                
                
                <!--<center>
                    <p class="oito">
                <?php
                    /*$conexao=mysqli_connect("localhost","root","","blogniva")or die ("erro na conexão do servidor");
        
                    $sql2="SELECT * FROM comentarios";
    
                    $resultado2=mysqli_query($conexao,$sql2);
                    $registro2 =mysqli_num_rows($resultado2);
        
                     
                    if ($registro2>0)
                    {
                        while ($usuario2 =mysqli_fetch_array($resultado2))
                        {
                            echo $usuario2 ['nome'].":&nbsp"; 
                            echo $usuario2 ['comentario']."<br />";
                            
                            
                        }
                    }*/
                ?> 
                </p>
                    <div>
            </center>-->
            </div>
            <br><br>
               
            <div id="vistostres" class="row col-sm-12 col-md-12 col-lg-12"><h3>separador</h3></div>
             <div id="qualidade" class="row col-sm-12 col-md-12 col-lg-12">
                 <h1 class="quinze"><u>Qualidade</u></h1><br><br>
                 <img src="imagens/imagemdocumento44441.png" height="100%" width="100%">
            <br>
            <br>
            <br>
            </div>
            
            <div id="vistosquatro" class="row col-sm-12 col-md-12 col-lg-12"><h3>separador</h3></div>
            
            <div id="teste"class="row col-sm-12 col-md-12 col-lg-12">
            <h1 class="testeum">"O &nbsp;&nbsp; tempo &nbsp;&nbsp; deixa&nbsp;&nbsp; <br><br> perguntas,&nbsp;&nbsp; mostra<br><br> &nbsp;&nbsp;respostas,&nbsp;&nbsp;<br><br> esclarece &nbsp;&nbsp;dúvidas,&nbsp;&nbsp;<br><br> mas,&nbsp;&nbsp;&nbsp;&nbsp; acima &nbsp;&nbsp;de &nbsp;&nbsp;tudo, <br><br>o &nbsp;&nbsp;tempo &nbsp;&nbsp;traz&nbsp;&nbsp; <br><br>verdades..." </h1>
            </div>
                 
            <!--<div id="frases" class="row col-sm-12 col-md-12 col-lg-12">
                <img id="viver6" src="imagens/viver12.png" height="100%" width="100%">
            </div> -->
            
            <div id="vistoscinco" class="row col-sm-12 col-md-12 col-lg-12"><h3>separador</h3></div>
            
            <div id="frases" class="row col-sm-12 col-md-12 col-lg-12">
                <img id="viver6" src="imagens/grupo888.png" height="100%" width="100%">
            </div>
            
            <!--<div id="frases1"class="row col-sm-4 col-md-4 col-lg-4">
            <p class="titulo1"> <u>Nossa História</u> </p>
            <p class="hist"> Somos &nbsp;&nbsp;&nbsp;um &nbsp;&nbsp;grupo &nbsp;&nbsp;<br>de &nbsp;&nbsp;pessoas&nbsp;&nbsp; que&nbsp;&nbsp; <br>decidimos&nbsp;&nbsp; criar&nbsp;&nbsp;<br> um &nbsp;&nbsp;blog,&nbsp;&nbsp; para &nbsp;&nbsp;<br>dar<br> conhecimento &nbsp;&nbsp;as&nbsp;&nbsp; <br>pessoas&nbsp;&nbsp; e&nbsp;&nbsp;<br> principalmente &nbsp;&nbsp;<br>aos&nbsp;&nbsp; passageiros.</p>
                
            </div>
            
            <div id="frases2"class="row col-sm-4 col-md-4 col-lg-4">
                <p class="titulo1"><u>Contato </u></p>
            
            <center>
                <a class="hist" href="https://www.facebook.com/napl.driver.1" target="_blank">
                         <img src="imagens/facebookl22.png" target="_blank" width="90px" height="90px">
                        </a>&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        <a class="hist" href="https://www.instagram.com/motoristaplicativo/" target="_blank">
                        <img src="imagens/intagraml1.png" target="_blank" width="90px" height="90px">
                        </a>
                    </center>
                <br><br>
                <p class="hist"> " Deixe pra traz o que não te leva<br> pra frente..."</p>
            </div>
            
            <div id="frases3"class="row col-sm-4 col-md-4 col-lg-4">
            <p class="titulo1"><u>Contato </u></p>
                <br><br><br>
            <p class="hist"> Email: motoristaplicativo@outlook.com<br>
                             São Paulo - Brasil</p>
                
               
            </div>-->
            
            
            <div id="vistosseis" class="row col-sm-12 col-md-12 col-lg-12"><h3>separador</h3></div>
            
            <div id="patrocinio" class="row col-sm-6 col-md-12 col-lg-12">
            <h1><u>Patrocínio</u></h1>
            <div class="col-sm-6 col-md-3 col-lg-3"><fieldset class="onze"><img src="imagens/congo.jpg" height="100%" width="100%"><p class="tres"><i>Terças - ferias no Congolinárioa: descobrindo os sabores do Congo..<br> Serviços :. <br> Almoço das 12h às 15h e JANTAR das 19h às 22h <br>Endereço :Av. Profesor Alfonso Bovero 382, próximo ao metrô Sumaré.<br>Ref: andar de cima da fatiado discos.</p></fieldset></div>
                
            <div class="col-sm-6 col-md-3 col-lg-3"><fieldset class="onze"><img src="imagens/patrocinio.jpeg" height="100%" width="100%"><p class="tres">Importante pensarmos sobre isso!<br>

Com a lavagem cerebral feita pela indústria farmacêutica, a grande maioria das pessoas estão construindo sua casa (corpo) em cima de areia.
                
<br>
É por isso que nunca na história da humanidade houve tantos casos de infarto, acidente vascular cerebral, diabetes, hipertensão, enxaqueca crônica....<!-- Os remédios alopáticos não dão sustentação verdadeira para a sua saúde, e desabam nas primeiras intempéries.... É ilusão pensar que nunca ficaremos doentes alguma vez na vida, mas se a sua saúde está sendo sustentada sobre uma rocha, a chance dessa doença ser fatal é muito menor.<br>

Óleos essenciais, alimentação equilibrada, emoções controladas são a rocha que você precisa para viver mais e melhor... Você já notou que àquelas pessoas que começam a usar óleos essenciais de forma regular não apenas curam suas doenças de forma natural, mas que com o tempo elas ficam menos doentes?<br>

Isso porque os óleos essenciais aumentam a capacidade de seu sistema imunológico e deixam ele forte como uma rocha.<br>

Impenetrável às doenças.<br> 
Doenças essas que fazem parte do dia a dia do brasileiro, mas que não precisam mais fazer parte de você. "André Ferraz " Aromoterapeuta--></p></fieldset></div>
                
                 <div class=" dezesseis col-sm-6 col-md-3 col-lg-3"><fieldset class="onze"><img src="imagens/tabmedia111.png" height="100%" width="100%"><p class="tres">O Tabmedia é uma plataforma de gestão de conteúdos para tablets capaz de gerenciar, segmentar, distribuir e mensurar conteúdos estáticos e interativos em tempo real. Através de um inteligente método de sincronização ambiente on-line gestor e aplicação no tablet, a solução permite acompanhamento e gerenciamento de todas as ações realizadas no tablet. 
</i></p></fieldset></div>
                
                <!--<div class="col-sm-12 col-md-2 col-lg-2"><img src="imagens/gif.gif" height="370px" width="250px"></div>-->
                
                <div class=" dezesseis col-sm-6 col-md-3 col-lg-3"><fieldset class="onze"><img src="imagens/spoleto.png" height="100%" width="100%"><p class="tres">A empresa foi criada em 1999 no Rio de Janeiro por Eduardo Ourivio e Mário Chady. O objetivo era criar um restaurante que unisse a qualidade do serviço a la carte com a rapidez do fast-food.<br>
                    Spoleto é uma rede de restaurantes multinacional brasileira que une o conceito de fast-food com a culinária italiana.
</i></p></fieldset></div>
        </div>
                
                <div id="patrocinio1" class="row col-sm-6 col-md-12 col-lg-12">
               <!-- <div class=" dezesseis col-sm-6 col-md-3 col-lg-3"><fieldset class="onze"><img src="imagens/spoleto.png" height="100%" width="100%"><p class="tres">A empresa foi criada em 1999 no Rio de Janeiro por Eduardo Ourivio e Mário Chady. O objetivo era criar um restaurante que unisse a qualidade do serviço a la carte com a rapidez do fast-food.<br>
                    Spoleto é uma rede de restaurantes multinacional brasileira que une o conceito de fast-food com a culinária italiana.
</i></p></fieldset></div>-->
                </div>
                    
        <!---------------------------------- FOOTER -------------------------------------------------> 
    <div class="treze col-sm-12 col-md-12 col-lg-12">
        <div class="footer">
        <div class="container navbar-fixed-down">
            <br>
            
        <p class="vinte"><i>Todos os direitos reservados Copyright © Blog motorista de aplicativo 2019 - T.I. - Five Members - cel: +55 11 94970-1896 </i></p>
                        </div>
                            <div id="xuxu2" class=" navbar-right row col-12 col-sm-12 col-md-7 col-lg-3">
                            <right class="img">
                                    <a class="xxx" href="https://www.facebook.com/napl.driver.1" target="_blank">
                                        <img src="imagens/facebookp1.png" target="_blank" width="40px" height="40px">
                                    </a>
                                    <a class="xxx" href="https://www.instagram.com/motoristaplicativo/" target="_blank">
                                    <img src="imagens/instagramp1.png" target="_blank" width="40px" height="40px">
                                    </a>
                                </right>
                            </div>
                        </div>
              </footer>
         </div> 
    </body>
</html>
        
            

 
               