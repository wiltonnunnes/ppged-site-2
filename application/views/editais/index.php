<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <h1 style="margin-bottom: 3rem;">Editais</h1>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                    
                                    <div class="list-group list-group-flush">
                                    <?php foreach ($editais as $editais_item): ?>
                                        <a href="<?php echo base_url('uploads/arquivos/editais/' . $editais_item['arquivo']); ?>" target="_blank" class="list-group-item">
                                            <span class="badge">14</span>
                                            <?php echo $editais_item['titulo']; ?>                                            
                                        </a>
                                    <?php endforeach; ?>
                                    </div>
                                        
                                                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
		</div>
	</div>
</section>