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
                        <div class="jquery-accordion-menu-header">Alterar formulario</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de um novo formulario:</p>
                                    
                                    <?php echo form_open_multipart('formularios/recebe_processa_formulario');?>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="titulo">Título do formulário</label>
                                                <?php echo form_input('titulo', isset($formulario['titulo']) ? $formulario['titulo'] : '', array('required' => 'required', 'id' => 'titulo', 'class' => 'form-control', 'placeholder' => 'Título do formulário')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="arquivo_pdf">Arquivo PDF</label>
                                                <input type="file" name="arquivo_pdf" id="arquivo_pdf" class="form-control-file" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="arquivo_docx">Arquivo DOCX</label>
                                                <input type="file" name="arquivo_docx" id="arquivo_docx" class="form-control-file" />
                                            </div>
                                        </div>

                                        <?php if (isset($informativo['formularios_id'])) echo form_hidden('formularios_id', $informativo['formularios_id']); ?>

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