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
          <li>
            <a href="#<?php echo $formularios_item['formularios_id']; ?>" data-toggle="collapse" class="blue-link">
              <h2 class="evento-title">
                <?php echo $formularios_item['titulo']; ?>
                <i class="fa fa-angle-down pull-right"></i>
              </h2>
            </a>
            <ol id="<?php echo $formularios_item['formularios_id']; ?>" class="collapse">
              <li><a href="#">
                  <h3>pdf</h3>
                </a></li>
              <li><a href="#">
                  <h3>docx</h3>
                </a></li>
            </ol>
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