<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <section class="internal-content">
        <div class="content" style="width:100%">
          <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
            <section class="space-bottom">
              <h1>Editais</h1>
            </section>
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-12 mt-4">
                  <div class="list-group list-group-flush">
                    <?php foreach ($editais as $editais_item): ?>
                    <a href="<?php echo base_url('uploads/arquivos/editais/' . $editais_item['arquivo']); ?>"
                      target="_blank" class="list-group-item">
                      <?php echo $editais_item['titulo']; ?>
                    </a>
                    <?php endforeach; ?>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
</div>