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
                        <div class="jquery-accordion-menu-header">Listar Resolucões</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Abaixo é exibida uma lista com todos as resolucões cadastrados no sistema. Você pode editá-los, excluí-los ou buscá-los através da tabela abaixo:</p>
                                    <a href="<?php echo site_url('resolucoes/adicionar'); ?>"><input type="submit" value="Criar Novo" class="button btn btn-primary mb-3"></a>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
												<th>T&iacute;tulo</th>
												<th>Ano</th>
												<th>Orgão</th>
												<th>Op&ccedil;&otilde;es</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                        <?php foreach ($resolucoes as $resolucoes_item): ?>
                                            <tr>
                                                <td><?php echo $resolucoes_item['titulo']; ?></td>
                                                <td><?php echo $resolucoes_item['ano']; ?></td>
												<td><?php echo $resolucoes_item['orgao']; ?></td>
                                                <td>
                                                    <!--<a href="#" title="Visualizar dados completos do usuário"><i class="fa fa-user-circle"></i></a>-->
                                                    <a href="<?php echo site_url('resolucoes/alterar/' . $resolucoes_item['resolucao_id']); ?>" title="Alterar dados da resolucao"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo site_url('resolucoes/deletar/' . $resolucoes_item['resolucao_id']); ?>" title="Remover resolucao. CUIDADO: NÃO PODE SER DESFEITO"><i class="fa fa-trash"></i></a>
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