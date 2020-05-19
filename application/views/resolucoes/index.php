<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <div class="internal-content">
        <section class="space-bottom">
          <h1>Resoluções</h1>
        </section>

        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 mt-4">
              <div class="panel-group">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse1">RESOLUÇÕES DO PPGED</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="list-group">
                      <?php 
                      foreach ($resolucoes_ppged as $resolucoes_ppged_item) {
                        echo anchor($resolucoes_ppged_item['arquivo'], $resolucoes_ppged_item['titulo'], ['class' => "list-group-item", 'target' => '_blank']);
                      }
                      ?>
                    </div>
                  </div>
                </div>

                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse2">RESOLUÇÕES DO CONSEPE</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="list-group">
                      <?php 
                      foreach ($resolucoes_consepe as $resolucoes_consepe_item) {
                        echo anchor($resolucoes_consepe_item['arquivo'], $resolucoes_consepe_item['titulo'], ['class' => "list-group-item", 'target' => '_blank']);
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  $('#example').DataTable({
    "language": {
      "lengthMenu": "Mostrando _MENU_ registros por página",
      "zeroRecords": "Nada encontrado",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Nenhum registro disponível",
      "infoFiltered": "(filtrado de _MAX_ registros no total)",
      "sSearch": "Pesquisar"
    }
  });
});

$(document).ready(function() {
  $('#teste').DataTable({
    "language": {
      "lengthMenu": "Mostrando _MENU_ registros por página",
      "zeroRecords": "Nada encontrado",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "Nenhum registro disponível",
      "infoFiltered": "(filtrado de _MAX_ registros no total)",
      "sSearch": "Pesquisar"
    }
  });
});
</script>