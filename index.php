<?php

    session_start();
    
    //

    require_once 'config/config.php';
    require_once 'lib/libFuncoes.php';
    require_once 'lib/libFormulario.php';
    require_once 'lib/libMensagem.php';

    //
    
    $func       = new libfuncoes();   
    $form       = new libFormulario();
    $mensagme   = new libMensagem();
    
    // Verifica se está logado
    
   // $func->esta_logado();
    
    //

    $pagina = "index";

    if ( isset( $_GET[ 'pagina' ] ) ){
        $pagina = $_GET[ 'pagina' ];
    }    
            
?>   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>RED GAMES</title>
        
        <link rel="icon" type="image/png"  />

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href=">css/style_customizado.css" rel="stylesheet">

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>

        <center>
            <div class="container">

                <div id="conteudo_topo">

                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="topo_logo">
                                <img class="img-responsive img_topo_logo">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-6 topo_centro">
                            <h1>RED GAMES</h1>
                        </div>
                    </div>
                <nav class="navbar  btn-danger ">
                        <div class="btn-group btn-group-xs" role="group" aria-label="menu">
                            <ul class="nav nav-pills">
                                    <li class=" btn btn-default navbar-btn"><a href="principal.php?pagina=principal">HOME</a></li>
                                    <li class=" btn btn-default navbar-btn"><a href="principal.php?pagina=sobre">SOBRE</a></li>
                                    <li class=" btn btn-default navbar-btn"><a href="principal.php?pagina=faleconosco">FALE CONOSCO</a></li>
                                    <li class=" btn btn-default navbar-btn"><a href="principal.php?pagina=login">LOGIN</a></li>
                                    <li class=" btn btn-default navbar-btn"><a href="principal.php?pagina=cadastro">CADASTRAR</a></li>
                            </ul>
                    </div>
                        
                </nav>
                    

                </div>

                <div class="row" id="principal_centro">

                    <div class="col-md-12">

                        <?php

                            require_once( $pagina . '.php' ); 

                        ?> 


                    </div>

                </div>

                <!-- Footer -->

                <div class="row" id="rodape_principal">

                    <div class="col-xs-12 rodape_texto">
                        <p>DESENVOLVIDO POR RED GAMES             |            EXPONHA SEU JOGOS AQUI.</p>
                    </div>

                </div>
                

            </div>        
        </center>     
    </body>
    
</html>
