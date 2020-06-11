

<!-- sobre -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <div class="internal-content">

        <section class="space-bottom">
          <h1>Editais</h1>
        </section>



        <!--<div class="panel-group" id="accordion">-->
        <ol id="formularios">
          <?php foreach($editais as $editais_item): ?>
          <li class="item">
            <a href="<?php echo base_url('uploads/arquivos/editais/' . $editais_item['arquivo']); ?>" class="blue-link" target="_blank">
              <h2 class="item-title">
                <?php echo $editais_item['titulo']; ?>
              </h2>
            </a>
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