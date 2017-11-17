  <div class="container">

            <div class="row div_pgLogin">
                
                <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                        </div>
                        <div class="col-xs-12 col-md-8 div_login_topo_centro">
                            <h1>ÁREA DE LOGIN</h1>
                        </div>
                    </div>                    
                </div>
    
            </div>
            
            <div class="row">

                <div id="login" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 div_login">                    
                    <div class="panel panel-danger" >

                        <div class="panel-heading panel-info">
                            <div class="panel-title">Identificação</div>
                            <div style="float:right; font-size: 80%; position: relative; top:-10px">
                                <a href="#" onClick="$('#login').hide(); $('#criarlogin').hide(); $('#esqueceuasenha').show()">Esqueceu a senha?</a>
                            </div>
                        </div>

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">

                            </div>

                            <form method="POST" id="loginform" class="form-horizontal" role="form" action="login.php">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuário" required="required">                                        
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha" required="required">
                                </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-xs-2 controls">
                                        <button class="btn btn-danger">ENTRAR</button>
                                    </div>
                                    
                                </div>

                            </form>     

                        </div>                     
                    </div>  

                </div>                  

                <div id="esqueceuasenha" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 div_login">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Esqueceu a senha</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="POST" action="dadosUsuario.php" >
                            
                                <input type="hidden" name="tipoMovimento" id="tipoMovimento" value="ES">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">E-mail</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="exemplo@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-success">Enviar a Senha</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">

                                        <a id="signinlink" href="#" onclick="$('#esqueceuasenha').hide(); $('#login').show()">Voltar à tela de Login <<<</a>

                                    </div>
                                </div>         
                            </form>
                         </div>
                    </div>
                </div> 

            </div>
            
        </div>
        