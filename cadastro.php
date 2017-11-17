<?php

    require_once 'funcaoUsuario.php';

    $funcUser = new funcaoUsuario();
    
    // Variaveis do formulário
    
    $vOpc           = $_GET[ 'opc' ];
    $vCodUsuario    = 0;
    $vNivel         = "";
    $vLogin         = "";
    $vSenha         = "";
    $vNomeCompleto  = "";
    $vStatus        = "";
    
    /*
     * Verifica se a opção é (visualização, alteração ou exclusão)
     * Caso seja busca os dados do usuário e atribui as variaveis
     */
    
    if ( $vOpc != "I" ){
        
        $arUser         = $funcUser->getUsuario( $conDb, $_GET[ 'CodUsuario' ] );
        $vCodUsuario    = $arUser->CodUsuario;
        $vNivel         = $arUser->Nivel;
        $vLogin         = $arUser->Login;
        $vSenha         = $arUser->Senha;
        $vNomeCompleto  = $arUser->NomeCompleto;
        $vStatus        = $arUser->Status;
        
    }
    

?>

<div class="row">
    
    <div class="col-md-12">

        <form action="faleconosco_envio.php" method="post" class="form">

            <div class="row">

                <div class="control-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome completo" maxlength="60" required>
                </div>

                <div class="control-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone para contato" maxlength="60" required >
                </div>

            </div>

            <div class="row">

                <div class="control-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail para contato: seunome@seudominio.com.br" maxlength="150" required>

                </div>

            </div>

            <div class="row">

                <div class="control-group col-md-6">
                    <label for="nome">Senha</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite sua Senha" maxlength="60" required>
                </div>

                <div class="control-group col-md-6">
                    <label for="telefone">Confimar Senha</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Confirme sua Senha" maxlength="60" required >
                </div>

            </div>

          

            <div class="row">
                <div class="control-group col-md-12">
                    &nbsp;
                </div>
            </div>

            <div class="row">
                <div class="control-group col-md-12">
                    <button class="btn btn-danger" type="submit">CADASTRAR</button>
                </div>
            </div>        

        </form>        

        </div>    
</div>