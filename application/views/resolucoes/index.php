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
                        <div class="jquery-accordion-menu-header">Resoluções</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                <h2 align="center"> RESOLUÇÕES DO PPGED </h2>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        foreach ($resolucoes_ppged as $resolucoes_ppged_item) {
                                            $href = count(explode('/', $resolucoes_ppged_item['arquivo'])) > 1 ? $resolucoes_ppged_item['arquivo'] : base_url('arquivos/resolucoes/'. $resolucoes_ppged_item['arquivo']);
                                        ?>
                                            <tr>
                                                <td><?php echo $resolucoes_ppged_item['resolucao_id']; ?></td>
                                                <td><a href="<?php echo $href; ?>"><?php echo $resolucoes_ppged_item['titulo']; ?></a></td> 
                                                <td><?php echo $resolucoes_ppged_item['ano']; ?></td>
                                            </tr>
                                        <?php 
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <h2 align="center" class="mt-5"> RESOLUÇÕES DO CONSEPE </h2>
                                    <table id="teste" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        foreach ($resolucoes_consepe as $resolucoes_consepe_item) {
                                            $href = count(explode('/', $resolucoes_consepe_item['arquivo'])) > 1 ? $resolucoes_consepe_item['arquivo'] : base_url('arquivos/resolucoes/'. $resolucoes_consepe_item['arquivo']);
                                        ?>
                                            <tr>
                                                <td><?php echo $resolucoes_consepe_item['resolucao_id']; ?></td>
                                                <td><a href="<?php echo $href; ?>"><?php echo $resolucoes_consepe_item['titulo']; ?></a></td> 
                                                <td><?php echo $resolucoes_consepe_item['ano']; ?></td>
                                            </tr>
                                        <?php 
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>
                                            </tr>
                                        </tfoot>
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