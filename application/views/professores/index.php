<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">


			<div class="col-md-8 col-lg-8">
			    <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <h1>Docentes</h1>
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
                                                <a href="#" data-toggle="modal" data-target="#professorDetails" data-id="<?php echo $professores_item['professor_id']; ?>" class="modal-button">
                                                    <?php echo $professores_item['nome']; ?>                                                    
                                                </a>
                                            </p>
                                            <p><?php echo $professores_item['titulo']; ?></p>    
                                        </td>
                                        <td><?php echo anchor($professores_item['lattes'], 'Lattes'); ?> | <?php echo anchor($professores_item['sigaa'], 'SIGAA'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
		        </div>
			</div>


		</div>
	</div>
</section>
<div id="professorDetails" class="modal" role="dialog" tabindex="-1" style="margin: auto;" aria-hidden="true" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered modal-lg" style="background-color: transparent;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#professorDetails').modal('hide');">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <img alt="Foto" src="https://via.placeholder.com/616x625">
                </div>
                <div class="col-sm-8">
                    <p>Titulo</p>
                    <p id="teacher-review-modal"></p>
                    <p>E-mail</p>
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
            if(this.readyState == 4 && this.status == 200) {
                var professor = JSON.parse(this.responseText);
                modal.find('.modal-title').text(professor.nome);               
                modal.find('#teacher-review-modal').text(professor.titulo);
                modal.find('#teacher-contact-modal').text(professor.email);
            }
        };
        xmlhttp.open("GET", "professores/get_professor?professor_id=" + id, true);
        xmlhttp.send();
    });
</script>