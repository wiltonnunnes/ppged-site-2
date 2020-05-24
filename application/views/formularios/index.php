<!-- sobre -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <div class="internal-content">

        <section class="space-bottom">
          <h1>Formulários</h1>
        </section>



        <!--<div class="panel-group" id="accordion">-->
        <ol id="formularios">
          <?php foreach($formularios as $formularios_item): ?>
          <li class="item">
            <a href="#<?php echo $formularios_item['formularios_id']; ?>" data-toggle="collapse" class="blue-link" onclick="trocar_class(this);">
              <h2 class="item-title">
                <?php echo $formularios_item['titulo']; ?>
                <i class="fa fa-angle-down"></i>
              </h2>
            </a>
            <ul id="<?php echo $formularios_item['formularios_id']; ?>" class="collapse">
              <li><a href="<?php echo base_url(['uploads', 'arquivos', 'formularios', 'pdf', $formularios_item['arquivo_pdf']]); ?>" target="_blank" class="sec-eventos">
                  <h3 class="evento-title">
                    pdf
                    <i class="fa fa-file-pdf"></i>
                  </h3>
                </a></li>
              <li><a href="<?php echo base_url(['uploads', 'arquivos', 'formularios', 'docx', $formularios_item['arquivo_docx']]); ?>" class="sec-eventos">
                  <h3 class="evento-title">
                    docx
                    <i class="fa fa-file-word"></i>
                  </h3>
                </a></li>
            </ul>
          </li>

          <?php endforeach; ?>
        </ol>
        <!--</div>-->



        <nav class="text-center">
          <?php echo $links; ?>
        </nav>
      </div>
    </div>
  </div>
</div>