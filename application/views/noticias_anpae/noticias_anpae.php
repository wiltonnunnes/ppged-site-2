

<!-- Novo codigo -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <section class="internal-content">
        <?php include APPPATH . "/views/templates/buscar.php"; ?>
        <section class="space-bottom">
          <h1>Notícias da ANPED / FORPRED</h1>
          <p>Confira abaixo os eventos promovidos e/ou realizados pela UFRN.</p>
        </section>
        <!--
        <section>
          <h2>Próximos Eventos</h2>
          <ul class="eventos-upcoming sec-eventos" id="upcoming-events-list">
            <p>Nenhum evento encontrado</p>
          </ul>
        </section>
        -->
        <section>
          <!--<h2>Eventos anteriores</h2>-->
          <!--<ul class="sec-eventos" id="done-events-list">-->
            <div class="row itens">
              <?php foreach($noticias_anpae as $noticias_anpae_item): ?>
              <div class="col-xs-12 container-item">
                <!--<div class="evento">-->
                  
                  <div class="item">
                    <h2 class="item-title">
                      <a class="blue-link"
                        href="<?php echo site_url(['noticias', $noticias_anpae_item['noticia_id']]); ?>"><?php echo $noticias_anpae_item['titulo']; ?></a>
                    </h2>

                    <p class="item-date">
                    <?php 
                    setlocale(LC_ALL, NULL);
                    echo utf8_encode(strftime('%#d de %B de %Y', strtotime($noticias_anpae_item['data'])));
                    ?>
                    </p>
                  </div>
                <!--</div>-->
              </div>
              <?php endforeach; ?>



            </div>
          <!--</ul>-->
          <nav class="text-center" aria-label="Page navigation">
            <!--
                            <ul class="pagination" id="done-events-pagination">
                                <li class="disabled"><a href="javascript:;">&lt;</a></li>
                                <li class="active"><a href="#" data-page="1">1</a></li>
                                <li><a href="#" data-page="2">2</a></li>
                                <li><a href="#" data-page="3">3</a></li>
                                <li><a href="#" data-page="4">4</a></li>
                                <li><a href="#" data-page="5">5</a></li>
                                <li><a href="#" data-page="6">...</a></li>
                                <li><a href="#" data-page="137">137</a></li>
                                <li><a href="#" data-page="2" title="Próxima página">&gt;</a></li>
                            </ul>
                            -->
            <?php echo $links; ?>
          </nav>
        </section>
      </section>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-3">
      <div class="aside-interna">
        <div class="aside-interno">
          <form class="form-flex-group -clean hidden-xs hidden-sm" id="busca-form"
            action="<?php echo site_url('noticias'); ?>">
            <div class="form-group search"><i class="fa fa-search" aria-hidden="true"></i><input class="form-control"
                id="inputBuscarEvento" name="titulo" required="required" placeholder="Buscar Notícia">
              <div class="has-error"><label class="error help-block" for="titulo"></label></div>
            </div>
          </form>
          <section class="aside-calendar hidden-xs hidden-sm">
            <header>
              <h1>Filtrar por data</h1>
            </header>
            <div class="row">
              <div class="col-md-12" style="overflow:hidden;">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="datetimepicker12"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>



  <script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>

</div>
