<?php

class funcaoUsuario {

    function getLogin( $conDb, $cLogin ){
   
        $rsc = $conDb->db_select( "SELECT *
                                   FROM usuario
                                   WHERE Login = ? " ,
                                   array( $cLogin )
                                );
        
        return $conDb->db_busca_dados( $rsc );
        
    }
    
    /*
     * Pega os usuários para serem listados
     */
        
    function lista( $conDb, $vNivel ){
    
        $cParQry = array();
        $cQry    = " SELECT * FROM usuario ";
        
        if ( $vNivel != 'T' ){
            $cQry .= " WHERE Nivel = ? ";
            $cParQry = array( $vNivel );
        }
        
        $cQry .= " ORDER BY NomeCompleto ";
        
        return $conDb->db_select( $cQry, $cParQry );
        
    }
    
    /*
     * Filtra usuário especifico e retornar um objeto com os dados do usuário.
     */
    
    function getUsuario( $conDb, $CodUsuario ){
        
        $rsc = $conDb->db_select( "SELECT * FROM usuario WHERE CodUsuario = ? ",
                                  array( $CodUsuario )
                                );
        
        return $conDb->db_busca_dados( $rsc );
        
    }
    
    
    /*
     *  Retorna o status do usuário em Imagem 
     */
    
    function StatusUsuario( $cStatus ){
        
        $cTitulo = "";
        $cImg    = "";
        
        if ( $cStatus == "A" ){
            $cTitulo = "Ativo";
            $cImg    = "ativo.gif";
        } else if ( $cStatus == "B" ){
            $cTitulo = "Bloqueado";
            $cImg    = "bloqueado.gif";
        } else if ( $cStatus == "I" ){
            $cTitulo = "Inativo";
            $cImg    = "inativo.gif";
        }
        
        return '<img src="img/status_' . $cImg . '" title="' . $cTitulo . '" />';
        
    }
    
    /*
     * Retorna descrição para o Nível do Usuário
     */

    function NivelUsuario( $cNivel ){
        
        $cRet = "";
        
        if ( $cNivel == "A" ){
            $cRet = "Administrador";
        } else If ( $cNivel == "U" ) {
            $cRet = "Usuário";
        }
        
        return $cRet;
        
    }

    
    /*
     * Função para gerar senhas aleatórias
     * 
     */

    function gerarSenha( $tam = 7, $maiusculos = true, $numeros = true , $simbolos = true ){

        $lMin = 'abcdefghijklmnopqrstuvwxyz';
        $lMai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lNum = '1234567890';
        $lSim = '!@#$%*-';
        
        $retorno = '';
        $caracteres = $lMin;
        
        if ( $maiusculos ) $caracteres .= $lMai;
        if ( $numeros    ) $caracteres .= $lNum;
        if ( $simbolos   ) $caracteres .= $lSim;

        $len = strlen($caracteres);
        
        for ( $n = 1 ; $n <= $tam ; $n++ ){
            
            $rand = mt_rand( 1 , $len );
            $retorno .= $caracteres[ $rand - 1 ];
            
        }
        
        return $retorno;
        
    }    
    
}
