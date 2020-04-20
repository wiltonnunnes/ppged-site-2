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
                                    
                                    <p>Abaixo é exibida uma lista com todos os formulários cadastrados no sistema. Você pode editá-los, excluí-los ou buscá-los através da tabela abaixo:</p>
                                    <!--<button class="btn btn-primary mb-3" type="submit">Criar Novo</button>-->
                                    <a href="<?php echo site_url('formularios/adicionar'); ?>"><input type="submit" value="Criar Novo" class="button btn btn-primary mb-3"></a>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>T&iacute;tulo</th>
                                                <th>Arquivo PDF</th>
                                                <th>Arquivo DOCX</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                        <?php foreach ($formularios as $formularios_item): ?>
                                            <tr>
                                                <td><?php echo $formularios_item['titulo']; ?></td>
                                                <td><?php echo anchor(base_url('uploads/arquivos/formularios/pdf/' . $formularios_item['arquivo_pdf']), 'PDF'); ?></td>
                                                <td><?php echo anchor(base_url('uploads/arquivos/formularios/docx/' . $formularios_item['arquivo_docx']), 'DOCX'); ?></td>
                                                <td>
                                                    <!--<a href="#" title="Visualizar dados completos do formularios"><i class="fa fa-user-circle"></i></a>-->
                                                    <a href="<?php echo site_url('formularios/alterar/' . $formularios_item['formularios_id']); ?>" title="Alterar dados do formulario"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo site_url('formularios/deletar/' . $formularios_item['formularios_id']); ?>" title="Remover formulario. CUIDADO: NÃO PODE SER DESFEITO"><i class="fa fa-trash"></i></a>
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