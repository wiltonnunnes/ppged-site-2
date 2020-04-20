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
                                    
                                    <p>Abaixo é exibida uma lista com todas as publicações cadastrados no sistema. Você pode editá-las, excluí-las ou buscá-las através da tabela abaixo:</p>
                                    <!--<button class="btn btn-primary mb-3" type="submit">Criar Novo</button>-->
                                    <a href="<?php echo site_url('publicacoes/adicionar'); ?>"><input type="submit" value="Criar Novo" class="button btn btn-primary mb-3"></a>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>Ano</th>
												<th>Imagem</th>
												<th>Refer&ecirc;ncia</th>
												<th>Autores</th>
												<th>Op&ccedil;&otilde;es</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                        <?php foreach ($publicacoes as $publicacoes_item): ?>
                                            <tr>
                                                <td><?php echo $publicacoes_item['ano']; ?></td>
												<td><?php echo img('uploads/publicacoes/' . $publicacoes_item['imagem'], FALSE, array('alt' => '', 'height' => '100', 'class' => 'img-thumbnail')); ?></td>
												<td><?php echo $publicacoes_item['referencia']; ?></td>
												<td><?php echo $publicacoes_item['autores']; ?></td>
                                                <td>
                                                    <!--<a href="#" title="Visualizar dados completos do publicacao"><i class="fa fa-user-circle"></i></a>-->
                                                    <a href="<?php echo site_url('publicacoes/alterar/' . $publicacoes_item['publicacao_id']); ?>" title="Alterar dados do publicacão"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo site_url('publicacoes/deletar/' . $publicacoes_item['publicacao_id']); ?>" title="Remover publicacão. CUIDADO: NÃO PODE SER DESFEITO"><i class="fa fa-trash"></i></a>
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