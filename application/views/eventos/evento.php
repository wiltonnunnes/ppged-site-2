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
                        <div class="jquery-accordion-menu-header"><?php echo $evento['nome_evento']; ?></div>

                            <p>Data do evento: <?php echo date_format(date_create($evento['data']), 'd/m/Y'); ?></p>
                            <p>Local: <?php echo $evento['local']; ?></p>
                            <p>Entidade(s) organizadora(s): <?php echo $evento['entidade_organizadora']; ?></p>

                            <?php if (!is_null($evento['cartaz'])): ?>
                            <div class="embed-responsive embed-responsive-1by1">
                                <embed class="embed-responsive-item" src="<?php echo base_url('uploads/arquivos/eventos/' . $evento['cartaz']); ?>"></embed>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>