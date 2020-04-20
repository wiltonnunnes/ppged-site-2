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
						<div class="jquery-accordion-menu-header">Informativos</div>
						<div class="container">
							<p class="text-muted size_p" style="margin-top:9%; margin-bottom:0px;"><?php echo date_format(date_create($informativo['data']), 'd M Y'); ?></p>
							<h2 class="p-accordion"><?php echo $informativo['titulo']; ?></h2>
							<p class="size_subtitle">Categoria: <?php echo $informativo['categoria']; ?></p>
							<hr class="listra">
							<p class="p-accordion">
							<?php echo $informativo['texto']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>