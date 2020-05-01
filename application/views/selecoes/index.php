<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <h1>Processos Seletivos</h1>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                    <table id="example" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Título</th>
                                                <th>Ano</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($selecoes as $selecoes_item): ?>
                                            <tr>
                                                <td><?php echo anchor('selecoes/' . $selecoes_item['selecoes_id'], $selecoes_item['titulo']); ?></td> 
                                                <td><?php echo $selecoes_item['ano']; ?></td>
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
</script>