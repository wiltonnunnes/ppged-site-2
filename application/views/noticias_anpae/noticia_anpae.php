<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <div class="internal-content">
        <section class="space-bottom">
          <h1><?php echo $noticia_anpae['titulo']; ?></h1>
          <!--<div class="container">-->
          <p class="text-muted size_p"><i class="far fa-calendar"></i>
            <?php setlocale(LC_ALL, NULL); echo strftime('%#d de %B de %Y', strtotime($noticia_anpae['data'])); ?>
          </p>
        </section>
        <!--<hr class="listra">-->

        <?php if($noticia_anpae['imagem']): ?>
        <figure class="figure">
          <?php echo img(['src' => 'uploads/arquivos/noticias_anpae/' . $noticia_anpae['imagem'], 'class' => 'figure-img img-responsive']); ?>
        </figure>
        <?php endif; ?>

        <p class="p-accordion" style="margin-top: 3rem;">
          <?php echo $noticia_anpae['texto']; ?>
        </p>
        <!--</div>-->
      </div>
    </div>
  </div>
</div>