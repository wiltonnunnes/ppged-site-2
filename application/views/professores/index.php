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
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($professores as $professores_item): ?>
                                    <tr>
                                        <td>
                                            <p><a href="#" data-toggle="modal" data-target="#teste"><?php echo $professores_item['nome']; ?></a></p>
                                            <p><?php echo $professores_item['titulo']; ?></p>    
                                        </td>
                                        <td><?php echo $professores_item['email']; ?></td>
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
<div id="teste" class="modal modal-lg" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function load_content_in_modal(id) {

    }
</script>