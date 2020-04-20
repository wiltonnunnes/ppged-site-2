<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">   
			<div class="col-md-4 col-lg-4">
                <?php 
                        include (APPPATH . "views/painel_controle/templates/sideBar.php");	
                    ?>
            </div>

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <div class="jquery-accordion-menu-header">Alterar dados pessoais</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Abaixo é exibida uma lista com todos os informativos cadastradas no sistema. Você pode editá-los, excluí-los ou buscá-los através da tabela abaixo:</p>
                                    <a href="<?php echo site_url('informativos/adicionar'); ?>"><input type="submit" value="Criar Novo" class="button btn btn-primary mb-3"></a>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>Data</th>
                                                <th>Categoria</th>
                                                <th>Status</th>
                                                <th>Título</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                        <?php foreach ($informativos as $informativos_item): ?>
                                            <tr>
                                                <td><?php echo date_format(date_create($informativos_item['data']), 'd/m/Y'); ?></td>
                                                <td><?php echo $informativos_item['categoria']; ?></td>
                                                <td><?php echo $informativos_item['status']; ?></td>
                                                <td><a href=""><?php echo $informativos_item['titulo']; ?></a> | <a href="<?php echo site_url('informativos/deletar/' . $informativos_item['informativo_id']); ?>" style="color: red;">[deletar]</a> | <a href="<?php echo site_url('informativos/alterar_status/' . $informativos_item['informativo_id']); ?>" style="color: red;">[alterar status]</a></td>
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