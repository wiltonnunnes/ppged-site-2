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
                        <div class="jquery-accordion-menu-header">Alterar Evento</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de um novo evento:</p>
                                    
                                    <?php echo form_open_multipart('eventos/recebe_processa_evento');?>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="nome_evento">Nome do Evento</label>
                                                <?php echo form_input('nome_evento', isset($evento['nome_evento']) ? $evento['nome_evento'] : '', array('required' => 'required', 'id' => 'nome_evento', 'class' => 'form-control', 'placeholder' => 'Nome do Evento')); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="data">Data</label>
                                                <input type="date" name="data" id="data" value="<?php echo isset($evento['data']) ? $evento['data'] : ''; ?>" class="form-control" placeholder="00/00/0000" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="local">Local do Evento</label>
                                                <?php echo form_input('local', isset($evento['local']) ? $evento['local'] : '', array('required' => 'required', 'id' => 'local', 'class' => 'form-control', 'placeholder' => 'Local do Evento')); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="entidade_organizadora">Entidade Organizadora</label>
                                                <?php echo form_input('entidade_organizadora', isset($evento['entidade_organizadora']) ? $evento['entidade_organizadora'] : '', array('required' => 'required', 'id' => 'entidade_organizadora', 'class' => 'form-control', 'placeholder' => 'Entidade Organizadora')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cartaz">Cartaz</label>
                                                <input type="file" name="cartaz" id="cartaz" class="form-control-file" />
                                            </div>
                                        </div>

                                        <?php if (isset($evento['evento_id'])) echo form_hidden('evento_id', $evento['evento_id']); ?>

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