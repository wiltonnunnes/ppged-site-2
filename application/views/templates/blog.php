<div class="publicaciones-blog-home">
      <div class="container">
        <div class="">
          <div class="row-page row">
                    <div class="col-page col-sm-8 col-md-6">
                        <a href="<?php echo site_url('noticias/' . $noticias[0]['noticia_id']); ?>" class="black fondo-publicacion-home">
                            <div class="imgBlog img-publicacion-principal-home">
                            <img class="" src="<?php echo base_url('uploads/arquivos/noticias_anpae/' . $noticias[0]['imagem']); ?>" onerror="this.src='img/a.jpg';">
                            </div>
                            <div class="contenido-publicacion-principal-home">
                            <h3 class="spacingTop"><?php echo $noticias[0]['titulo']; ?></h3>
                            <p>Legenda<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                            <span>Ver</span>
                            </div>
                        </a>
                    </div>
                 
                    <?php for ($i = 1; $i < count($noticias); $i++): ?>
                    <div class="col-page col-sm-4 col-md-3">
                        <a href="<?php echo site_url('noticias/' . $noticias[$i]['noticia_id']); ?>" class="black fondo-publicacion-home">
                            <div class="img-publicacion-home">
                            <img class="imgBlog img-responsive" src="<?php echo base_url('uploads/arquivos/noticias_anpae/' . $noticias[$i]['imagem']); ?>" onerror="this.src='img/b.jpg';">
                            </div>
                            <div class="contenido-publicacion-home">
                            <h3><?php echo $noticias[$i]['titulo']; ?></h3>
                            <p>Legenda<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                            <span>Ver</span>
                            </div>
                        </a>
                    </div>
                    <?php endfor; ?>
                <div class="col-page col-sm-4 col-md-3">
                    <a href="<?php echo site_url('noticias'); ?>" class="todas-las-publicaciones-home">
                        <span>Ver todas as publicações anteriores</span>
                    </a>
                </div>
          </div>
        </div>
      </div>
</div>
