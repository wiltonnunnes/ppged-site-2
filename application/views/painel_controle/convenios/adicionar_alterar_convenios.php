<?php echo form_open_multipart('convenios/recebe_processa_convenio');?>

Logomarca: <input type="file" name="logomarca" />
<br /><br />

T&iacute;tulo: <?php echo form_input('nome', isset($convenio['nome']) ? $convenio['nome'] : '', 'required="required"'); ?>
<br /><br />

CPF: <?php echo form_input('cpf', isset($convenio['cpf']) ? $convenio['cpf'] : ''); ?>
<br /><br />

CNPJ: <?php echo form_input('cnpj', isset($convenio['cnpj']) ? $convenio['cnpj'] : ''); ?>
<br /><br />

Telefone 1: <?php echo form_input('telefone_1', isset($convenio['telefone_1']) ? $convenio['telefone_1'] : ''); ?>
<br /><br />

Telefone 2: <?php echo form_input('telefone_2', isset($convenio['telefone_2']) ? $convenio['telefone_2'] : ''); ?>
<br /><br />

Telefone 3: <?php echo form_input('telefone_3', isset($convenio['telefone_3']) ? $convenio['telefone_3'] : ''); ?>
<br /><br />

Endereço: <?php echo form_input('endereco_rua', isset($convenio['endereco_rua']) ? $convenio['endereco_rua'] : ''); ?>
<br /><br />

Bairro: <?php echo form_input('endereco_bairro', isset($convenio['endereco_bairro']) ? $convenio['endereco_bairro'] : ''); ?>
<br /><br />

Número: <?php echo form_input('endereco_numero', isset($convenio['endereco_numero']) ? $convenio['endereco_numero'] : ''); ?>
<br /><br />

CEP: <?php echo form_input('endereco_cep', isset($convenio['endereco_cep']) ? $convenio['endereco_cep'] : ''); ?>
<br /><br />

E-mail: <?php echo form_input('email', isset($convenio['email']) ? $convenio['email'] : ''); ?>
<br /><br />

Site: <?php echo form_input('site', isset($convenio['site']) ? $convenio['site'] : ''); ?>
<br /><br />

Descrição: <?php echo form_textarea('descricao', isset($convenio['descricao']) ? $convenio['descricao'] : ''); ?>
<br /><br />

<?php if (isset($convenio['convenio_id'])) echo form_hidden('convenio_id', $convenio['convenio_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>

<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">   
			<div class="col-md-4 col-lg-4">
                <?php 
                        include (APPPATH . "views/painel_controle/templates/sideBar.php");	
                    ?>
            </div>

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <div class="jquery-accordion-menu-header">Alterar Publicação</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de uma nova publicação:</p>

                                    <?php echo form_open_multipart('convenios/recebe_processa_convenio');?>
                                    
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="imagem">Imagem</label>
                                                <input type="file" name="imagem" id="imagem" class="form-control-file" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="nome">T&iacute;tulo</label>
                                                <input type="text" name="nome" id="nome" value="<?php echo isset($convenio['nome']) ? $convenio['nome'] : ''; ?>" class="form-control" placeholder="Nome" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cpf">CPF</label>
                                                <input type="text" name="cpf" id="cpf" value="<?php echo isset($convenio['cpf']) ? $convenio['cpf'] : ''; ?>" class="form-control" placeholder="CPF" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cnpj">CNPJ</label>
                                                <input type="text" name="cnpj" id="cnpj" value="<?php echo isset($convenio['cnpj']) ? $convenio['cnpj'] : ''; ?>" class="form-control" placeholder="CNPJ" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="editor1">Refer&etilde;ncia:</label>
                                                <textarea cols="80" id="editor1" name="referencia" rows="10">
                                                    <?php if (isset($convenio['referencia'])) echo $convenio['referencia']; ?>
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor1', {
                                                    fullPage: true,
                                                    extraPlugins: 'docprops',
                                                    // Disable content filtering because if you use full page mode, you probably
                                                    // want to  freely enter any HTML content in source mode without any limitations.
                                                    allowedContent: true,
                                                    height: 320
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="editor1">Resumo:</label>
                                                <textarea cols="80" id="editor2" name="resumo" rows="10">
                                                    <?php if (isset($convenio['resumo'])) echo $convenio['resumo']; ?>
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor2', {
                                                    fullPage: true,
                                                    extraPlugins: 'docprops',
                                                    // Disable content filtering because if you use full page mode, you probably
                                                    // want to  freely enter any HTML content in source mode without any limitations.
                                                    allowedContent: true,
                                                    height: 320
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <?php if (isset($convenio['convenio_id'])) echo form_hidden('convenio_id', $convenio['convenio_id']); ?>

                                        <input type="reset" value="Limpar" class="button btn btn-primary">
                                        <button class="btn btn-primary" type="submit">Enviar dados</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>