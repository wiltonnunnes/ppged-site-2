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
                        <h1><?php echo $evento['nome_evento']; ?></h1>

                            <p><i class="far fa-calendar"></i> <?php setlocale(LC_ALL, NULL); echo strftime('%#d de %B de %Y', strtotime($evento['data'])); ?></p>
                            <p><i class="fas fa-map-marker-alt"></i> <?php echo $evento['local']; ?></p>

                            <?php 
                            if($evento['cartaz']) {
                                if(pathinfo($evento['cartaz'], PATHINFO_EXTENSION) == 'pdf') {
                            ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <embed src="<?php echo base_url('uploads/arquivos/eventos/' . $evento['cartaz']); ?>" type="application/pdf" class="embed-responsive-item"></embed>
                            </div>
                            <?php
                                } else {
                                    echo img(['src' => 'uploads/arquivos/eventos/' . $evento['cartaz'], 'class' => 'img-responsive']);
                                }
                            }
                            if($evento['descricao']) {
                                echo $evento['descricao'];
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>