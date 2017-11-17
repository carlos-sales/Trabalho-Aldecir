<?php

class libFormulario {

    function form_sub_titulo( $opc ){
        
        $cRet = "";
        
        if ( $opc == "I" ){
            $cRet = 'Inclusão';
        } else if ( $opc == "A" ){
            $cRet = 'Alteração';
        } else if ( $opc == "E" ){
            $cRet = 'Exclusão';
        } else if ( $opc == "V" ){
            $cRet = 'Visualização';
        }
        
        return $cRet;
        
    }
    
    
    function fReadOnly( $vOpc ){
     
        $cRet = "";
        
        if ( ( $vOpc == "V" ) || ( $vOpc == "E" ) ){
            $cRet = 'readonly="readonly"';
        }
        
        return $cRet;
        
    }    
    
    
    function fDisabled( $vOpc ){

        $cRet = "";
        
        if ( ( $vOpc == "V" ) || ( $vOpc == "E" ) ){
            $cRet = 'disabled="disabled"';
        }
        
        return $cRet;
        
    }

}    