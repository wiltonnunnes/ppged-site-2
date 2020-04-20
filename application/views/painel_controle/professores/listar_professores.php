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
                        <div class="jquery-accordion-menu-header">Listar Notícias</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Abaixo é exibida uma lista com todos os professores cadastrados no sistema. Você pode editá-los, excluí-los ou buscá-los através da tabela abaixo:</p>
                                    <a href="<?php echo site_url('professores/adicionar'); ?>"><input type="submit" value="Criar Novo" class="button btn btn-primary mb-3"></a>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>Nome</th>
												<th>T&iacute;tulo</th>
												<th>E-mail</th>
												<th>Lattes</th>
												<th>SIGAA</th>
												<th>Op&ccedil;&otilde;es</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                        <?php foreach ($professores as $professores_item): ?>
                                            <tr>
                                                <td><?php echo $professores_item['nome']; ?></td>
                                                <td><?php echo $professores_item['titulo']; ?></td>
                                                <td><?php echo $professores_item['email']; ?></td>
												<td><?php echo anchor($professores_item['lattes'], 'Lattes'); ?></td>
												<td><?php echo anchor($professores_item['sigaa'], 'SIGAA'); ?></td>
                                                <td>
                                                    <!--<a href="#" title="Visualizar dados completos do usuário"><i class="fa fa-user-circle"></i></a>-->
                                                    <a href="<?php echo site_url('professores/alterar/' . $professores_item['professor_id']); ?>" title="Alterar dados do professor"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo site_url('professores/deletar/' . $professores_item['professor_id']); ?>" title="Remover professor. CUIDADO: NÃO PODE SER DESFEITO"><i class="fa fa-trash"></i></a>
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