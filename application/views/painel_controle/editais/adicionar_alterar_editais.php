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
                        <div class="jquery-accordion-menu-header">Alterar Edital</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de um novo edital:</p>
                                    
                                    <?php echo form_open_multipart('editais/recebe_processa_edital');?>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Título</label>
                                                <?php echo form_input('titulo', isset($edital['titulo']) ? $edital['titulo'] : '', array('required' => 'required', 'id' => 'Título', 'class' => 'form-control', 'placeholder' => 'Título')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        	<div class="col-md-6 mb-3">
                                                <label for="data">Data</label>
                                                <input type="date" name="data" id="data" value="<?php echo isset($edital['data']) ? $edital['data'] : ''; ?>" class="form-control" placeholder="00/00/0000" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="arquivo">Arquivo</label>
                                                <input type="file" name="arquivo" id="arquivo" class="form-control-file" />
                                            </div>
                                        </div>

                                        <?php if (isset($edital['edital_id'])) echo form_hidden('edital_id', $edital['edital_id']); ?>

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