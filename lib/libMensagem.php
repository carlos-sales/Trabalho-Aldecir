<?php

class libMensagem {


    function alertaGravacao( $programa , $status, $TipoMovimento ){
        
        $cTexto = "";
        
        if ( $TipoMovimento == "I" ){
            $cMsg2 = ( $status == 0 ? "inclusão" : "incluído" );
        } else if ( $TipoMovimento == "A" ){
            $cMsg2 = ( $status == 0 ? "alteração" : "alterado" );
        } else if ( $TipoMovimento == "E" ){
            $cMsg2 = ( $status == 0 ? "exclusão" : "excluído" );
        }

        if ( $status == 0 ){
            ?>

            <div class="row" id="popMsg">
                
                <div class="col-md-12 alert-danger">
                    <p>
                        <?php echo "Falha na " . $cMsg2 . " do registro na tabela [ " . $programa . " ] !"; ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" onclick="document.getElementById('popMsg').style.display='nome';">[Fechar]</a>                        
                    </p>
                </div>
                    
            </div>

            <?php
        } else {
            
        }
        
    }
        
}