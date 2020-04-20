<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<?php echo $error; ?>

			<?php echo form_open_multipart('editais/recebe_cadastra_edital');?>

				<div class="form-group">
					<label for="titulo">Titulo:</label>
					<input type="text" name="titulo" class="form-control" id="titulo">
				</div>

				<div class="form-group">
					<label for="data">Data:</label>
					<input type="date" name="data" class="form-control" id="data">
				</div>

				<div class="form-group">
					<label for="arquivo">Arquivo:</label>
					<input type="file" name="arquivo" id="arquivo" />
				</div>

				<button type="reset" class="btn btn-primary">Limpar</button>
				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>

		</div>
	</div>
</section>