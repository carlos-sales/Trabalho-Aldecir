<?php

class libfuncoes {

    /*
     *  Verifica se o usuário está logado, caso não esteja 
     *  será para a página de login
     */

     function esta_logado(){
         
        if ( isset( $_SESSION[ 'loginValido' ] ) ){
             
            if ( $_SESSION[ 'loginValido' ] != 'verdadeiro' ){
                session_destroy();
                header('Location: index.php');
             }
             
        } else {
            session_destroy();
            header('Location: index.php');
        }
         
    }

}