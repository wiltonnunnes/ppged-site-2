<section class="info-section">
	<div class="container">
		<div class="row">	

			<div class="col-md-8 col-lg-8">
				<div class="content" style="width:100%">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
						<h1><?php echo $informativo['titulo']; ?></h1>
						<!--<div class="container">-->
						<p class="text-muted size_p"><i class="far fa-calendar"></i> <?php setlocale(LC_ALL, NULL); echo strftime('%#d de %B de %Y', strtotime($informativo['data'])); ?></p>
						<!--<hr class="listra">-->
						<p class="p-accordion">
							<?php
							if($informativo['imagem'])
								echo img(['src' => 'uploads/arquivos/noticias_anpae/' . $informativo['imagem'], 'class' => 'img-responsive']);
							echo $informativo['texto']; 
							?>
						</p>
						<!--</div>-->
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>
	</div>
</section>