	<script type="text/javascript">
			$(window).scroll(function() {    
					var scroll = $(window).scrollTop();

					if (scroll >= 100) {
							$(".top-nav").addClass("light-header");
							document.getElementById("logo").src="<?php echo base_url('img/life.png'); ?>";
					} else {
							$(".top-nav").removeClass("light-header");
							document.getElementById("logo").src="<?php echo base_url('img/logo_FundoBlack.png'); ?>";
							
					}
			});
	</script>

<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="<?php echo base_url(); ?>"><strong><img id="logo" class="img-fluid" src="img/logo_FundoBlack.png" alt="" width="120"></strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url(); ?>">Início<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Área do usuário</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="todasNoticias.php">NOTÍCIAS</a>
				<a class="dropdown-item" href="sobre.php">SOBRE</a>
				<a class="dropdown-item" href="sobreLaboratorios.php">LABORATÓRIOS</a>
				<a class="dropdown-item" href="#">AÇÕES</a>
				<a class="dropdown-item" href="agenda.php">AGENDA</a>
				<a class="dropdown-item" href="contato.php">CONTATO</a>
			</div>
		      </li>
  		    <li class="nav-item">
			<a class="nav-link" href="areaAdm.php">Área do adm</a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="areaImagem.php">Área de imagens</a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="tabelaNoticia.php">Área de notícias</a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="cadastroDocumentos.php">Documentos</a>
		    </li>
		    <li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('usuarios/logout'); ?>">SAIR</a>
		    </li>
		    </ul>
		  </div>	
	</div>
</nav>

