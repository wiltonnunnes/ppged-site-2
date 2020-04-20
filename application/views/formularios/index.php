<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<div class="col-md-8 col-lg-8">
				<div class="content" style="width:100%">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
						<div class="jquery-accordion-menu-header">Formulários</div>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-3">

									<table class="table">
										<tbody>
											<?php foreach ($formularios as $formularios_item): ?>
											<tr>
												<td><span><?php echo $formularios_item['titulo']; ?></span></td>
												<td>
													(<a href="<?php echo base_url('uploads/arquivos/formularios/docx/' . $formularios_item['arquivo_docx']); ?>" target="_blank">.docx</a>) (<a href="<?php echo base_url('uploads/arquivos/formularios/pdf/' . $formularios_item['arquivo_pdf']); ?>" target="_blank">.pdf</a>)
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
                                    
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>