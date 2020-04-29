<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">


			<div class="col-md-8 col-lg-8">
				<div class="content" style="width:100%">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
						<h1>Formulários</h1>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-3">
									
                                <div class="panel-group" id="accordion">
                                <?php foreach($formularios as $formularios_item): ?>
                                	<div class="panel panel-default">
                                		<div class="panel-heading">
                                			<h4 class="panel-title">
                                				<a data-toggle="collapse" href="#<?php echo $formularios_item['formularios_id'] ?>" data-parent="#accordion">
                                					<?php echo $formularios_item['titulo']; ?>
                                				</a>
                                			</h4>
                                		</div>
                                		<div id="<?php echo $formularios_item['formularios_id'] ?>" class="panel-collapse collapse">
                                			<div class="list-group">
                                				<?php echo anchor('uploads/arquivos/formularios/docx/' . $formularios_item['arquivo_docx'], 'docx', ['target' => '_blank', 'class' => 'list-group-item']); ?>
                                				<?php echo anchor('uploads/arquivos/formularios/pdf/' . $formularios_item['arquivo_pdf'], 'pdf', ['target' => '_blank', 'class' => 'list-group-item']); ?>
                                			</div>
                                		</div>
                                	</div>
                                <?php endforeach; ?>
                                </div>
                                    
								</div>
							</div>
						</div>
					</div>
				</div>
				<nav class="text-center">
                    <?php echo $links; ?>
                </nav>
			</div>
		</div>
	</div>
</section>