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

                                    <?php echo form_open_multipart('publicacoes/recebe_processa_publicacao');?>
                                    
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="ano">Ano</label>
                                                <input type="text" name="ano" id="ano" value="<?php echo isset($publicacao['ano']) ? $publicacao['ano'] : ''; ?>" class="form-control" placeholder="Ano" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="imagem">Imagem</label>
                                                <input type="file" name="imagem" id="imagem" class="form-control-file" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="editor1">Refer&etilde;ncia:</label>
                                                <textarea cols="80" id="editor1" name="referencia" rows="10">
                                                    <?php if (isset($publicacao['referencia'])) echo $publicacao['referencia']; ?>
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
                                                    <?php if (isset($publicacao['resumo'])) echo $publicacao['resumo']; ?>
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

                                        <?php if (isset($publicacao['publicacao_id'])) echo form_hidden('publicacao_id', $publicacao['publicacao_id']); ?>

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