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
                        <div class="jquery-accordion-menu-header">
                        <?php
                        if (isset($resolucao['resolucao_id']))
                            echo "Alterar Resolucão";
                        else
                            echo "Adicionar Resolucão";
                        ?>
                        </div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de um nova resolucão:</p>
                                    
                                    <?php echo form_open_multipart('editais/recebe_processa_resolucao');?>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Título</label>
                                                <?php echo form_input('titulo', isset($resolucao['titulo']) ? $resolucao['titulo'] : '', array('required' => 'required', 'id' => 'Título', 'class' => 'form-control', 'placeholder' => 'Título')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        	<div class="col-md-6 mb-3">
                                                <label for="ano">Ano</label>
                                                <input type="text" name="ano" id="ano" value="<?php echo isset($resolucao['ano']) ? $resolucao['ano'] : ''; ?>" class="form-control" placeholder="Ano" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="arquivo">Arquivo</label>
                                                <input type="file" name="arquivo" id="arquivo" class="form-control-file" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="orgao">Orgão</label>
                                                <?php
                                                $options = array('PPGED' => 'PPGED', 'CONSEPE' => 'CONSEPE');
                                                echo form_dropdown('resolucao_id', $options, isset($professor['orgao']) ? $professor['orgao'] : '', 'class="form-control" id="orgao"'); 
                                                ?>
                                            </div>
                                        </div>

                                        <?php if (isset($resolucao['resolucao_id'])) echo form_hidden('resolucao_id', $resolucao['resolucao_id']); ?>

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