
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

                <div class="control-group col-xs-12">
                    <div class="control-label">
                        <label for="opcao">Assunto</label>
                    </div>
                    <div class="controls">

                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto a ser tratado" maxlength="100" required>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="control-group col-md-12">

                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" rows="6" id="mensagem" name="mensagem" placeholder="Deixeu sua mensagem" maxlength="800"></textarea>

                </div>

            </div>            

            <div class="row">
                <div class="control-group col-md-12">
                    &nbsp;
                </div>
            </div>

            <div class="row">
                <div class="control-group col-md-12">
                    <button class="btn btn-danger" type="submit">Enviar</button>
                </div>
            </div>        

        </form>        

        </div>    
</div>