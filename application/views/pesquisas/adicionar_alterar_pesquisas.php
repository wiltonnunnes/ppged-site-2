<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<?php echo form_open_multipart('pesquisas/recebe_processa_pesquisa');?>

				<div class="form-group">
					<label for="titulo">T&iacute;tulo:</label>
					<?php echo form_input('titulo', isset($pesquisa['titulo']) ? $pesquisa['titulo'] : '', array('id' => 'titulo', 'class' => 'form-control')); ?>
				</div>

				<div class="form-group">
					<label for="texto">Texto:</label>
					<?php echo form_textarea('texto', isset($pesquisa['texto']) ? $pesquisa['texto'] : '', array('id' => 'texto', 'class' => 'form-control')); ?>
				</div>

				<div class="form-group">
					<label for="nome_professor">Nome do Professor(a):</label>
					<input type="text" oninput="search(this.value)" id="nome_professor" name="nome" class="form-control" autocomplete="off">
					<select style="display: none;" id="professor"></select>
				</div>

				<button type="submit" class="btn btn-primary" id="add_professor" formaction="<?php echo site_url('pesquisas/adicionar') ?>" disabled>Adicionar Professor(a)</button>
				<br /><br />

				<?php if (!empty($professores)): ?>
				<h2 align="center"> PROFESSORES </h2>
				<table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
					<caption>Professores</caption>
					<thead>
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>Op&ccedil;&otilde;es</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($professores as $professores_item): ?>
						<tr>
							<td><?php echo $professores_item['professor_id']; ?></td>
							<td><?php echo $professores_item['nome']; ?></td>
							<td><button type="submit" formaction="<?php echo site_url('pesquisas/adicionar?professor_id=' . $professores_item['professor_id']); ?>">Remover</button></td>
						</tr>
						<?php echo form_hidden('professor_id[]', $professores_item['professor_id']); ?>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>

				<?php if (isset($pesquisa['pesquisa_id'])) echo form_hidden('pesquisa_id', $pesquisa['pesquisa_id']); ?>

				<button type="reset" class="btn btn-primary">Limpar</button>
				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>

		</div>
	</div>
</section>

<script>
function search(str) {
	$select = $('#professor');
	if (str.length == 0) {
		$select.hide();
		return;
	}
	$.ajax({
		url: "<?php echo site_url('professores/get_professores'); ?>?q=" + str, 
		success: function(result) {
			var obj = JSON.parse(result);
			if (Object.keys(obj).length == 0) {
				$select.hide();
				return;
			}
			$select.hide();
			$select.empty();
			$select.append(new Option("", ""));
			obj.forEach(function(professor) {
				var option = new Option(professor['nome'], professor['professor_id']);
				$select.append(option);
			});
			$select.attr("size", obj.length);
			$select.show();
		}
	});
}
$('#professor').change(function(){
	var option = this.options[this.selectedIndex];
	$('#nome_professor').val(option.text);
	this.style.display = "none";
	$('#add_professor').removeAttr("disabled");
});
</script>