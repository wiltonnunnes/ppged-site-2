<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <h1>Editais</h1>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                    <div class="list-group list-group-flush">
                                    <?php foreach ($editais as $editais_item): ?>
                                        <a href="<?php echo base_url('uploads/arquivos/editais/' . $editais_item['arquivo']); ?>" class="list-group-item" target="_blank"><?php echo $editais_item['titulo']; ?> <span class="glyphicon glyphicon-file"></span></a>
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