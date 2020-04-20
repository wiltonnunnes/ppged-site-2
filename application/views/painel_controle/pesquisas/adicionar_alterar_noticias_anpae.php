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
                        <div class="jquery-accordion-menu-header">Alterar Notícia</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de uma nova notícia:</p>

                                    <label for="destaque">
                                        <?php echo form_checkbox('status', '1', isset($noticia_anpae['status']) ? boolval($noticia_anpae['status']) : FALSE, 'id="destaque"'); ?>
                                        Notícia destaque (aparecerá de forma destacada na página inicial do site)
                                    </label>
                                    
                                    <?php echo form_open_multipart('noticia_anpaes/recebe_processa_noticia_anpae');?>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="data">Data</label>
                                                <input type="date" name="data" id="data" value="<?php echo isset($noticia_anpae['data']) ? $noticia_anpae['data'] : ''; ?>" class="form-control" placeholder="00/00/0000" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Título</label>
                                                <?php echo form_input('titulo', isset($noticia_anpae['titulo']) ? $noticia_anpae['titulo'] : '', array('required' => 'required', 'id' => 'Título', 'class' => 'form-control', 'placeholder' => 'Título')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleFormControlSelect1">Categoria (fique atento quando alterar notícias)</label>
                                                <?php 
                                                $options = array('notícia' => 'Noticias', 'alunos regulares' => 'Alunos Regulares', 'alunos especiais' => 'Alunos Especiais', 'bolsas' => 'Bolsa', 'outros' => 'Outros');
                                                echo form_dropdown('categoria', $options, isset($noticia_anpae['categoria']) ? $noticia_anpae['categoria'] : 'notícia', 'class="form-control" id="exampleFormControlSelect1"'); 
                                                ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="imagem">Imagem</label>
                                                <input type="file" name="imagem" id="imagem" class="form-control-file" />
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="editor1">Texto:</label>
                                                <textarea cols="80" id="editor1" name="texto" rows="10">
                                                    <?php if (isset($noticia_anpae['texto'])) echo $noticia_anpae['texto']; ?>
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

                                        <?php if (isset($noticia_anpae['noticia_id'])) echo form_hidden('noticia_id', $noticia_anpae['noticia_id']); ?>

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