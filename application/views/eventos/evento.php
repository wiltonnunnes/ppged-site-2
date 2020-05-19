<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <div class="internal-content">





        <section class="space-bottom">
          <h1><?php echo $evento['nome_evento']; ?></h1>

          <p class="text-muted size_p"><i class="far fa-calendar"></i>
            <?php setlocale(LC_ALL, NULL); echo strftime('%#d de %B de %Y', strtotime($evento['data'])); ?></p>
          <p class="text-muted size_p"><i class="fas fa-map-marker-alt"></i> <?php echo $evento['local']; ?></p>
        </section>

        <?php if($evento['cartaz']): ?>
        <?php if(pathinfo($evento['cartaz'], PATHINFO_EXTENSION) == 'pdf'): ?>
        <div class="embed-responsive embed-responsive-16by9">
          <embed src="<?php echo base_url('uploads/arquivos/eventos/' . $evento['cartaz']); ?>" type="application/pdf"
            class="embed-responsive-item"></embed>
        </div>
        <?php else: ?>
        <?php echo img(['src' => 'uploads/arquivos/eventos/' . $evento['cartaz'], 'class' => 'img-responsive']); ?>
        <?php endif; ?>
        <?php endif; ?>
        <?php
        if($evento['descricao']) {
          echo $evento['descricao'];
        }
        ?>


      </div>
    </div>
  </div>
</div>