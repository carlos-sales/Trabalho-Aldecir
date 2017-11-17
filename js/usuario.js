/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    /*
     * Chega nivel de segurança da Senha
     */

    function checa_segur_senha( pass , campo , bBotEnviar )
    {
        var senha     = document.getElementById( pass ).value;
        var entrada   = 0;                 
        var lRet      = false;
        var resultado = "";

        // Verifica se o tamanho da senha é menor que 7 caracteres

        if ( senha.length < 7 )
        {
            entrada = entrada - 1;                 
        }

        // verifica se a senha possui caracteres alfanuméricos em minusculos ou numeros

        if ( !senha.match(/[a-z_]/i) || !senha.match(/[0-9]/ ) )
        {
            entrada = entrada - 1;                 
        }

        // Não-alfanumérico

        if ( !senha.match(/\W/) )
        {
            entrada = entrada - 1;
        }

        if ( entrada == 0 ) 
        {                                 
            resultado = 'A Seguranca de sua senha e: <b><font color=\'#99C55D\'>EXCELENTE</font></b>';
            lRet = true;
        } 
        else if ( entrada == -1 )
        {
            resultado = 'A Seguranca de sua senha e: <b><font color=\'#7F7FFF\'>BOM</font></b>';
            lRet = true;
        }
        else if ( entrada == -2 )
        {
            resultado = 'A Seguranca de sua senha e: <b><font color=\'#FF5F55\'>BAIXA</font></b>';
        } 
        else if( entrada == -3 )
        { 
            resultado = 'A Seguranca de sua senha e: <b><font color=\'#A04040\'>MUITO BAIXA</font></b>';
        }

        document.getElementById( campo ).innerHTML = resultado;

        if ( lRet )
        {
            document.getElementById( bBotEnviar ).disabled  = 0; // Habilita botão enviar
        }
        else
        {
            document.getElementById( pass ).focus = true;
            document.getElementById( bBotEnviar ).disabled  = 1; // Desabilita botão enviar
        }

        return lRet; 

    }

    /*
     * Valida formuário de usuário
     */

    function VldSubmitUsuario( esteFormulario )
    {

        var Vazio        = false;
        var lSenhaValida = true;

        if ( Vazio == false && document.getElementById("Nivel").value == "" )
        {
            alert("O Campo 'Nível' é obrigatório. Por favor Selecinar o Nível desejado.");
            Vazio = true;
        }

        if (Vazio == false && document.getElementById("Status").value == "" )
        {
            alert("O Campo 'Status' é obrigatório. Por favor preencha-o.");
            Vazio 		 = true;
        }

        if (Vazio == false && document.getElementById("NomeCompleto").value == ""  )
        {
            alert("O Campo 'Nome Completo' é obrigatório. Por favor preencha-o.");
            Vazio = true;
        }

        if (Vazio == false && document.getElementById("Login").value == "" )
        {
            alert("O Campo 'Login' é obrigatório. Por favor preencha-o.");
            Vazio = true;
        }

        if (Vazio == false && document.getElementById("Senha").value == "" )
        {
            alert("O Campo 'Senha' é obrigatório. Por favor preencha-o.");
            Vazio = true;
        }

        if (Vazio == false && document.getElementById("ConfSenha").value  == "" )
        {
            alert("O Campo 'Confirmação da Senha' é obrigatório. Por favor preencha-o.");
            Vazio = true;
        }

        if ( document.getElementById("Senha").value != document.getElementById("ConfSenha").value )
        {
            alert( "Senha não confere, favor redigitar a senha.");
            lSenhaValida = false;
        }

        if (    !Vazio && lSenhaValida ){
            form_usuario.submit();

        } else {
            return false;                
        }

    }
    
    
    
   /*
     * Valida formuário de usuário
     */

    function VldSubmitTrocaSenha( esteFormulario )
    {

        var Vazio        = false;
        var lSenhaValida = true;
        var vSenhaAtual  = "";
        
        if (Vazio == false && document.getElementById("SenhaAtual").value == "" )
        {
            alert("O Campo 'Senha Atual' é obrigatório. Por favor preencha-o.");
            Vazio = true;
        }

        if (Vazio == false && document.getElementById("NovaSenha").value == "" )
        {
            alert("O Campo 'Nova Senha' é obrigatório. Por favor preencha-o.");
            Vazio = true;
        }

        if (Vazio == false && document.getElementById("ConfNovaSenha").value  == "" )
        {
            alert("O Campo 'Confirmação da Nova Senha' é obrigatório. Por favor preencha-o.");
            Vazio = true;
        }

        if ( document.getElementById("NovaSenha").value != document.getElementById("ConfNovaSenha").value )
        {
            alert( "Nova Senha e Conferência de nova senha não são iguais, favor redigitar a senha.");
            lSenhaValida = false;
        }

        if (    !Vazio && lSenhaValida ){
            form_usuario_trocasenha.submit();

        } else {
            return false;                
        }

    }    

