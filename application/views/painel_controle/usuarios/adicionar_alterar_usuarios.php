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
                            <p style="margin-top:8%;">Caro(a) Fulano,</p>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12">
                                    
                                    <p> preencha o formulário abaixo para fazer alteração nos seus dados pessoais:</p>
                                    
                                    <?php echo form_open('usuarios/recebe_processa_usuario'); ?>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="nome">Nome</label>
                                                <?php echo form_input('nome', isset($usuario['nome']) ? $usuario['nome'] : '', array('class' => 'form-control', 'id' => 'nome', 'placeholder' => 'Nome', 'required' => 'required')); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Email</label>
                                                <?php echo form_input('email', isset($usuario['email']) ? $usuario['email'] : '', array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'E-mail')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="telefone">Telefone</label>
                                                <?php echo form_input('telefone', isset($usuario['telefone']) ? $usuario['telefone'] : '', array('class' => 'form-control', 'id' => 'telefone', 'placeholder' => 'telefone')); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="celular">Celular</label>
                                                <?php echo form_input('celular', isset($usuario['celular']) ? $usuario['celular'] : '', array('class' => 'form-control', 'id' => 'celular', 'placeholder' => 'celular')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="login">Login</label>
                                                <?php echo form_input('login', isset($usuario['login']) ? $usuario['login'] : '', array('class' => 'form-control is-invalid', 'id' => 'login', 'placeholder' => 'Login', 'disabled' => 'disabled')); ?>
                                                <div class="invalid-feedback">
                                                    Não pode ser alterado
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="senha">Senha</label>
                                                <?php echo form_password('senha', isset($usuario['senha']) ? $usuario['senha'] : '', array('class' => 'form-control is-invalid', 'id' => 'senha', 'placeholder' => 'Senha', 'disabled' => 'disabled')); ?>
                                                <div class="invalid-feedback"><a href="#">Alterar a senha</a></div>
                                            </div>
                                        </div>

                                        <?php if (isset($usuario['usuario_id'])) echo form_hidden('usuario_id', $usuario['usuario_id']); ?>

                                        <button class="btn btn-primary" type="submit" formaction="<?php echo site_url('painel_controle/usuarios'); ?>">Dados originais</button>
                                        <button class="btn btn-primary" type="submit">Alterar dados</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>