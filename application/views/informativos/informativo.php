<section class="info-section">
	<div class="container">
		<div class="row">	

			<div class="col-md-8 col-lg-8">
				<div class="content" style="width:100%">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
						<div style="margin-bottom: 3rem;">
							<h1><?php echo $informativo['titulo']; ?></h1>
							<!--<div class="container">-->
							<p class="text-muted size_p"><i class="far fa-calendar"></i> <?php setlocale(LC_ALL, NULL); echo strftime('%#d de %B de %Y', strtotime($informativo['data'])); ?></p>
						</div>
						<!--<hr class="listra">-->

						<?php if($informativo['imagem']): ?>
						<figure class="figure">
							<?php echo img(['src' => 'uploads/arquivos/informativos/' . $informativo['imagem'], 'class' => 'figure-img img-responsive']); ?>
						</figure>
						<?php endif; ?>

						<p class="p-accordion" style="margin-top: 3rem;">
							<?php echo $informativo['texto']; ?>
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