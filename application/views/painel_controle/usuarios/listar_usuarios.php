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
                                    
                                    <p>Abaixo é exibida uma lista com todos so usuários cadastrados no sistema. Você pode editá-los, excluí-los ou buscá-los através da tabela abaixo:</p>
                                    <button class="btn btn-primary mb-3" type="submit">Criar Novo</button>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>Usuários</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                                <th>Login</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                        <?php foreach ($usuarios as $usuarios_item): ?>
                                            <tr>
                                                <td><?php echo $usuarios_item['nome'] ?></td>
                                                <td><?php echo $usuarios_item['telefone'] ?></td>
                                                <td><?php echo $usuarios_item['email'] ?></td> 
                                                <td><?php echo $usuarios_item['login'] ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('usuarios/view/' . $usuarios_item['usuario_id']); ?>" title="Visualizar dados completos do usuário"><i class="fa fa-user-circle"></i></a>
                                                    <a href="<?php echo site_url('usuarios/alterar/' . $usuarios_item['usuario_id']); ?>" title="Alterar dados do usuário"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo site_url('usuarios/deletar/' . $usuarios_item['usuario_id']); ?>" title="Remover usuário. CUIDADO: NÃO PODE SER DESFEITO"><i class="fa fa-trash"></i></a>
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