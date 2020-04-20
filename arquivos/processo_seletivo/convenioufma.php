<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php
		require_once("includes/headtags.php");
		$pagina = "programa";
	?> 
	<!-- NIVO SLIDER -->
	<link rel="stylesheet" href="js/nivo-slider/nivo-slider.css">
	<link rel="stylesheet" href="js/nivo-slider/themes/default/default.css">
	
</head>

<body>
	
	<div id="header_wrapper">
		<header>
			<?php require_once("includes/top.php");?>
		</header>
	</div>
	
	<div id="content_wrapper">
		<div id="content">
					
			<div id="sidebar_left">
				<span></span>
				
				<h3>Admiss&atilde;o</h3>
				<div class="menu">
					<?php require("includes/submenus/admissao.php");?>
				</div>
				
				<?php require_once("includes/destaques_sidebar.php");?>
				
			</div>
			
			<div id="content_right">
				<h1 class="titulo_pagina">Processo Seletivo</h1>
				
				<div class="content_text">
                	<strong>Conv&ecirc;nio DINTER/UFMA</strong>
                
					<ul class="simple">
			<li><a href="arquivos/processo_seletivo/6 - Resultado final - DINTER-UFMA.pdf" target="_blank">Resultado final doutorado - sele&ccedil;&atilde;o 2013.2 - UFMA</a></li>
                        
                    	<li><a href="arquivos/processo_seletivo/4 - Resultado Analise de Projetos - UFMA.pdf" target="_blank">Resultado - an&aacute;lise dos projetos - UFMA</a></li>
                        <li><a href="arquivos/processo_seletivo/2-Resultado provaescrita-UFMA.pdf" target="_blank">Resultado prova escrita - UFMA</a></li>
                        <li><a href="arquivos/processo_seletivo/homologacaoUFMA.pdf" target="_blank">Homologa&ccedil;&atilde;o das Inscri&ccedil;&otilde;es</a></li>
					</ul>
										
				</div>
				
			</div>
						
			<div class="bg_divisao"></div>
			
			<?php require_once("includes/noticias_destaques.php");?>
			
		</div><!-- content -->
		
	</div><!-- content-wrapper -->
	
	<div id="footer_wrapper">
		<?php require_once("includes/footer.php");?>
	</div><!-- footer_wrapper -->
	
	<?php require_once("includes/incs_js.php");?>
</body>
</html>