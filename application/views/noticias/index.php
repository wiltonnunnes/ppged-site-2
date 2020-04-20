<div class="container">
	<div class="row">
	<?php foreach ($noticias as $noticias_item): ?>
		<div class="col-sm-4 py-2">
			<div class="card border border-primary rounded-0 h-100">
				<div class="card-body">
					<p class="card-text"><?php echo $noticias_item['data']; ?></p>
					<h4 class="card-title"><?php echo $noticias_item['titulo']; ?></h4>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
	<?php echo $links; ?>
</div>