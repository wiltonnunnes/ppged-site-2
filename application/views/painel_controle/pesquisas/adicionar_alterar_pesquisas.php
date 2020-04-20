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
                        <div class="jquery-accordion-menu-header">Alterar Pesquisa</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de uma nova pesquisa:</p>
                                    
                                    <?php echo form_open_multipart('pesquisas/recebe_processa_pesquisa');?>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Título</label>
                                                <?php echo form_input('titulo', isset($pesquisa['titulo']) ? $pesquisa['titulo'] : '', array('required' => 'required', 'id' => 'Título', 'class' => 'form-control', 'placeholder' => 'Título')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="editor1">Texto:</label>
                                                <textarea cols="80" id="editor1" name="texto" rows="10">
                                                    <?php if (isset($pesquisa['texto'])) echo $pesquisa['texto']; ?>
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

                                        <?php if (isset($pesquisa['pesquisa_id'])) echo form_hidden('pesquisa_id', $pesquisa['pesquisa_id']); ?>

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