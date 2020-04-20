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

                        <div class="container">
                            <div class="jquery-accordion-menu-header">Eventos</div>

                            <?php foreach ($eventos as $eventos_item): ?>
                            <div class="card">
                                <div class="card-body">
                                    <a href="<?php echo site_url('eventos/' . $eventos_item['evento_id']); ?>" class="card-link">
                                        <div class="card-text"><?php echo date_format(date_create($eventos_item['data']), 'd/m/Y'); ?></div>
                                        <div class="card-text">Evento: <?php echo $eventos_item['nome_evento']; ?></div>
                                        <div class="card-text">Local: <?php echo $eventos_item['local']; ?></div>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <nav class="offset-md-5 navNoticia mt-2">
                                <?php echo $links; ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>