<!-- sobre -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-9">
      <section class="internal-content">
        <section class="space-bottom">
          <h1>Docentes</h1>
        </section>
        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Links</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($professores as $professores_item): ?>
              <tr>
                <td>
                  <p>
                    <a href="#" data-toggle="modal" data-target="#professorDetails"
                      data-id="<?php echo $professores_item['professor_id']; ?>" class="modal-button">
                      <?php echo $professores_item['nome']; ?>
                    </a>
                  </p>
                  <p>Professor</p>
                </td>
                <td><?php echo anchor($professores_item['lattes'], 'Lattes'); ?> |
                  <?php echo anchor($professores_item['sigaa'], 'SIGAA'); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
</div>

<div class="modal" id="professorDetails" tabindex="-1" role="dialog" aria-labelledby="professorDetailsLabel"
  aria-hidden="true" style="margin: auto;">
  <div class="modal-dialog modal-dialog-centered modal-lg" style="background-color: transparent;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &times;
        </button>
        <h4 class="modal-title"><strong></strong></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4">
              <img alt="Foto" src="https://via.placeholder.com/616x625">
            </div>
            <div class="col-sm-8">
              <p><strong>Titulo</strong></p>
              <p id="teacher-review-modal"></p>
              <p><strong>E-mail</strong></p>
              <p id="teacher-contact-modal"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$("#professorDetails").on("show.bs.modal", function(event) {
  var anchor = $(event.relatedTarget);
  var id = anchor.data('id');

  var modal = $(this);

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var professor = JSON.parse(this.responseText);
      modal.find('.modal-title strong').text(professor.nome);
      modal.find('#teacher-review-modal').text(professor.titulo);
      modal.find('#teacher-contact-modal').text(professor.email);
    }
  };
  xmlhttp.open("GET", "professores/get_professor?professor_id=" + id, true);
  xmlhttp.send();
});
$(".close").click(function() {
  $('#professorDetails').modal('hide');
});
</script>