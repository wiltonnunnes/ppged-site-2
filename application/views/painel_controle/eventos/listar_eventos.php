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
                                    
                                    <p>Abaixo é exibida uma lista com todos os eventos cadastrados no sistema. Você pode editá-los, excluí-los ou buscá-los através da tabela abaixo:</p>
                                    <!--<button class="btn btn-primary mb-3" type="submit">Criar Novo</button>-->
                                    <a href="<?php echo site_url('eventos/adicionar'); ?>"><input type="submit" value="Criar Novo" class="button btn btn-primary mb-3"></a>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>Data</th>
                                                <th>Nome do evento</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                        <?php foreach ($eventos as $eventos_item): ?>
                                            <tr>
                                                <td><?php echo date_format(date_create($eventos_item['data']), 'd/m/Y'); ?></td>
                                                <td><?php echo $eventos_item['nome_evento']; ?></td>
                                                <td>
                                                    <!--<a href="#" title="Visualizar dados completos do evento"><i class="fa fa-user-circle"></i></a>-->
                                                    <a href="<?php echo site_url('eventos/alterar/' . $eventos_item['evento_id']); ?>" title="Alterar dados do evento"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo site_url('eventos/deletar/' . $eventos_item['evento_id']); ?>" title="Remover evento. CUIDADO: NÃO PODE SER DESFEITO"><i class="fa fa-trash"></i></a>
                                                </td>
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