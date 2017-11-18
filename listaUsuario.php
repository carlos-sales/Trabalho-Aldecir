<?php

    require_once 'funcaoUsuario.php';
    
    $funcUser = new funcaoUsuario();
    
    $vFiltro_nivel = "T";
    
    if ( isset( $_POST[ "filtra_nivel" ] ) ){
        $vFiltro_nivel = $_POST[ 'filtra_nivel' ];
    }    

?>

    <div class="row">

        <div class="col-xs-7">

            <h3>Lista de Usuário</h3>

        </div>
        
        <div class="col-xs-4 control-group tabela_botoes">
            
            <form class="form-inline" method="POST" action="principal.php?pagina=listaUsuario" >
                
                <div class="form-group">
                    
                    <label for="filtra_nivel">Nível: </label>
                    
                    <select class="form-control" id="filtra_nivel" name="filtra_nivel" >
                        <option value="T" <?php echo ( $vFiltro_nivel == "T" ? 'selected="selected"' : '' ); ?>>Todos</option>
                        <option value="A" <?php echo ( $vFiltro_nivel == "A" ? 'selected="selected"' : '' ); ?>>Administrador</option>
                        <option value="U" <?php echo ( $vFiltro_nivel == "U" ? 'selected="selected"' : '' ); ?>>Usuário</option>                        
                    </select>
                    
                             
                </div>
                
                <button class="btn btn-default" type="submit">Filtrar</button>
                    
            </form>
            
        </div>
              
        <div class="col-xs-1 tabela_botoes">
            
            <a href="principal.php?pagina=formUsuario&opc=I" title="Incluir"><img src="<?php echo $path_img; ?>bt_novo.gif"></a>

        </div>

    </div>

    <div class="row">

        <div class="col-xs-12">

            <table border="1" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Código</th>
                        <th>Nome Completo</th>
                        <th>Login</th>
                        <th>Nivel</th>
                        <th colspan="3">Opções</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    
                    // Pegar a lista de usuários
                    
                    $rscUsuario = $funcUser->lista( $conDb, $vFiltro_nivel );
                    
                    if ( $conDb->db_num_linhas( $rscUsuario ) > 0 ){
                        
                        while ( $arUser = $conDb->db_busca_dados( $rscUsuario ) ){
                            ?>
                    
                            <tr>
                                <td align="center"><?php echo $funcUser->StatusUsuario( $arUser->Status ); ?></td>
                                <td align="center"><?php echo $arUser->CodUsuario; ?></td>
                                <td><?php echo $arUser->NomeCompleto; ?></td>
                                <td><?php echo $arUser->Login; ?></td>
                                <td><?php echo $funcUser->NivelUsuario( $arUser->Nivel ); ?></td>
                                <td>
                                    <a href="principal.php?pagina=formUsuario&opc=V&CodUsuario=<?php echo $arUser->CodUsuario; ?>" title="Visualizar"><img src="<?php echo $path_img; ?>bt_visualizar.gif"></a>
                                    <a href="principal.php?pagina=formUsuario&opc=A&CodUsuario=<?php echo $arUser->CodUsuario; ?>" title="Alterar"><img src="<?php echo $path_img; ?>bt_alterar.gif"></a>
                                    <a href="principal.php?pagina=formUsuario&opc=E&CodUsuario=<?php echo $arUser->CodUsuario; ?>" title="Excluir"><img src="<?php echo $path_img; ?>bt_excluir.gif"></a>
                                </td>
                            </tr>
                            
                            <?php
                            
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="6" align="center">
                                Nenhum registro encontrato para o filro informado...
                            </td>
                        </tr>
                        <?php
                    }
                    
                    ?>
                            
                </tbody>        

            </table>

        </div>

    </div>
