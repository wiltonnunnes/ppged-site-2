<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <div class="jquery-accordion-menu-header">Editais</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                <h2 align="center"> PESQUISAS </h2>
                                	<?php echo anchor('pesquisas/adicionar', 'Adicionar novo(a)'); ?>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>T&iacute;tulo</th>
                                                <th>Op&ccedil;&otilde;es</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($pesquisas as $pesquisas_item): ?>
											<tr>
												<td><?php echo $pesquisas_item['titulo']; ?></td>
												<td>
													<?php 
													echo anchor('pesquisas/deletar/' . $pesquisas_item['pesquisa_id'], 'Remover'); 
													echo anchor('pesquisas/alterar/' . $pesquisas_item['pesquisa_id'], 'Alterar');
													?>
												</td>
											</tr>
										<?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>T&iacute;tulo</th>
                                                <th>Op&ccedil;&otilde;es</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php echo $links; ?>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$('#example').DataTable({
		    "language": {
		        "lengthMenu": "Mostrando _MENU_ registros por página",
		        "zeroRecords": "Nada encontrado",
		        "info": "Mostrando página _PAGE_ de _PAGES_",
		        "infoEmpty": "Nenhum registro disponível",
		        "infoFiltered": "(filtrado de _MAX_ registros no total)",
				"sSearch" : "Pesquisar"
		    }
		});
	});

    $(document).ready(function(){
		$('#teste').DataTable({
		    "language": {
		        "lengthMenu": "Mostrando _MENU_ registros por página",
		        "zeroRecords": "Nada encontrado",
		        "info": "Mostrando página _PAGE_ de _PAGES_",
		        "infoEmpty": "Nenhum registro disponível",
		        "infoFiltered": "(filtrado de _MAX_ registros no total)",
				"sSearch" : "Pesquisar"
		    }
		});
	});
</script>