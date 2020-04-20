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
                        <div class="jquery-accordion-menu-header">Alterar Professor</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de uma novo professor:</p>
                                    
                                    <?php echo form_open_multipart('professores/recebe_processa_professor');?>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="nome">Nome</label>
                                                <input type="text" name="nome" id="nome" value="<?php echo isset($professor['nome']) ? $professor['nome'] : ''; ?>" class="form-control" placeholder="Nome" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lattes">Lattes</label>
                                                <?php echo form_input('lattes', isset($professor['lattes']) ? $professor['lattes'] : '', array('required' => 'required', 'id' => 'lattes', 'class' => 'form-control', 'placeholder' => 'Lattes')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        	<div class="col-md-6 mb-3">
                                                <label for="sigaa">SIGAA</label>
                                                <?php echo form_input('sigaa', isset($professor['sigaa']) ? $professor['sigaa'] : '', array('required' => 'required', 'id' => 'sigaa', 'class' => 'form-control', 'placeholder' => 'SIGAA')); ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">E-mail</label>
                                                <?php echo form_input('email', isset($professor['email']) ? $professor['email'] : '', array('required' => 'required', 'id' => 'email', 'class' => 'form-control', 'placeholder' => 'E-mail')); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="titulo">T&iacute;tulo</label>
                                                <?php 
                                                $options = array('' => '', 'Doutor' => 'Doutor', 'Mestre' => 'Mestre');
                                                echo form_dropdown('titulo', $options, isset($professor['titulo']) ? $professor['titulo'] : '', 'class="form-control" id="titulo"'); 
                                                ?>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="pesquisa">Linha de Pesquisa</label>
                                                <?php
                                                $options = array();
                                                foreach ($pesquisas as $pesquisas_item) {
                                                    $options[$pesquisas_item['pesquisa_id']] = $pesquisas_item['titulo'];
                                                }
                                                echo form_dropdown('pesquisa_id', $options, isset($professor['pesquisa_id']) ? $options[array_key_first($options)] : '', 'class="form-control" id="pesquisa"'); 
                                                ?>
                                            </div>
                                        </div>

                                        <?php if (isset($professor['professor_id'])) echo form_hidden('professor_id', $professor['professor_id']); ?>

                                        <input type="reset" value="Limpar" class="button btn btn-primary">
                                        <button class="btn btn-primary" type="submit">Enviar dados</button>
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

<script type="text/javascript">
    var $select = $('#pesquisa');
	function get_pesquisas(str) {
        if (str.length > 0) {
            $.get("<?php echo site_url('pesquisas/get_pesquisas') ?>", {'titulo_pesquisa' : str}, function(data, status) {
                var pesquisas = Object.values(data);
                $select.hide();
                if (pesquisas.length > 0) {
                    pesquisas.forEach(function(item) {
                        select.appendChild(new Option(item['titulo'], item['pesquisa_id']));
                    })
                    $select.show();
                }
            }, "json");
        } else {
            $select.hide();
        }
    }
</script>