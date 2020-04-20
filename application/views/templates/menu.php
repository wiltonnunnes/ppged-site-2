<header id="header">
	<div id="barra-brasil">
		<div id="wrapper-barra-brasil">
			<div class="brasil-flag"><a href="https://gov.br" class="link-barra" target="_blank">Brasil</a></div>
			<nav>
				<ul id="lista-barra-brasil" class="list">
					<li><a href="#" id="menu-icon"></a></li>
					<li class="list-item first"><a href="http://www.saude.gov.br/coronavirus" style="color:red;" target="_blank">CORONAVÍRUS (COVID-19)</a></li>
					<li class="list-item"><a href="http://www.simplifique.gov.br" class="link-barra" target="_blank">Simplifique!</a></li>
					<li class="list-item"><a href="https://www.gov.br/pt-br/participacao-social/" class="link-barra" target="_blank">Participe</a></li>
					<li class="list-item"><a href="http://www.acessoainformacao.gov.br" class="link-barra" target="_blank">Acesso à informação</a></li>
					<li class="list-item"><a href="http://www.planalto.gov.br/legislacao" class="link-barra" target="_blank">Legislação</a></li>
					<li class="list-item last last-item"><a href="https://gov.br/pt-br/canais-do-executivo-federal" class="link-barra" target="_blank">Canais</a></li>
				</ul>
			</nav><span id="brasil-vlibras"><a class="logo-vlibras" id="logovlibras" href="#"></a><span class="link-vlibras"><img src="//barra.brasil.gov.br/imagens/vlibras.gif" class="barralazy" data-src="//barra.brasil.gov.br/imagens/vlibras.gif" width="132" height="116">&nbsp;<br>O conteúdo desse portal pode ser acessível em Libras usando o <a href="http://www.vlibras.gov.br" target="_blank">VLibras</a></span></span>
		</div>
	</div>
	<nav class="navbar-custom">
		<div class="container-custom">
			<div class="navbar-custom-header">
				<div class="barra-azul"></div><a class="navbar-custom-brand" id="logoufrn" title="Ir para a página inicial" href=""><img src="img/logo_ce.png">
					<span class="hidden-xs hidden-md hidden-lg">UNIVERSIDADE FEDERAL DO RIO GRANDE DO NORTE</span></a>
				<div class="container-pesquisaXS hidden-md hidden-lg">
					<div class="pesquisa collapse width" id="pesquisaXS" style="width:0">
						<form><input type="text"></form>
					</div>
				</div><button class="navbar-custom-toggle collapsed" type="button" data-toggle="collapse" data-target="#idMenu" aria-expanded="false"><span class="sr-only">Abrir/ocultar navegação</span><i class="fa fa-bars"></i></button>
			</div>
			<div class="box-subitens">
				<ul class="nav navbar-custom-nav sub-itens colapse hidden-xs hidden-sm hidden-md">
					<li><i class="fa fa-globe"></i></li>
					<li class="idiomas ativo"><a title="Ir para versão em Português" href="/">PT</a></li>
					<li><a title="Go to the version in English" href="en">en</a></li>
					<li><a title="Ir para la versión en Español" href="es">es</a></li>
					<li><a title="Aller à la version en Anglais" href="fr">fr</a></li>
				</ul>
				<ul class="nav navbar-custom-nav sub-itens hidden-lg">
					<li class="divisor hidden-xs hidden-sm hidden-md"></li>
					<li class="container-idiomas"><a title="Abrir/Fechar itens do sub-menu" href="#menuIdiomas" data-toggle="collapse" role="button" aria-expanded="false"><span class="ativo">PT</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul class="navbar-custom-subnav idiomas collapse" id="menuIdiomas">
							<li class="ativo"><a title="Ir para versão em Português" href="/">PT</a></li>
							<li><a title="Go to the version in English" href="en">en</a></li>
							<li><a title="Ir para la versión en Español" href="es">es</a></li>
							<li><a title="Aller à la version en Anglais" href="fr">fr</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-custom-nav sub-itens" id="menuPesquisa">
					<li class="divisor hidden-xs hidden-sm hidden-md"></li>
					<li><a class="btn-search-menu" alt="Clique para" href="#" onclick="return false;"><i class="fa fa-search"></i><span class="hidden-xs hidden-sm hidden-md">Pesquisar</span></a></li>
				</ul>
			</div>
			<div class="navbar-custom-collapse collapse" id="idMenu">
				<div class="title-name hidden-xs hidden-sm">
					<h1> universidade federal do rio grande do norte</h1>
				</div>
				<ul class="nav navbar-custom-nav" id="accordion"><span class="sr-only">Área do menu principal</span>
					<li class="panel"><a href="#menuPrograma" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="false"><span>Programa</span><span class="sr-only">Abrir/fechar sub-menu</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul class="navbar-custom-subnav collapse" id="menuPrograma">
							<li><?php echo anchor('apresentacao', 'Apresentação'); ?></li>
							<li><a href="">Equipe administrativa</a></li>
							<li><?php echo anchor('professores', 'Docentes'); ?></li>
							<li><?php echo anchor('pesquisas', 'Linha de pesquisa'); ?></li>
							<li><a href="">Colegiado</a></li>
							<li><a href="">Infraestrutura</a></li>
							<li><a href="">Bolsas</a></li>
							<li><a href="">Convênios e cooperações</a></li>
						</ul>
					</li>
					<li class="panel"><a href="#menuDocumentos" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="false"><span>Documentos</span><span class="sr-only">Abrir/fechar sub-menu</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul class="navbar-custom-subnav collapse" id="menuDocumentos">
							<li><?php echo anchor('regimento', 'Regimento'); ?></li>
							<li><?php echo anchor('resolucoes', 'Resoluções'); ?></li>
							<li><a href="https://drive.google.com/file/d/1_UAKSMdMwxNRnewEt3COJJPvDB99Dafj/view">Estrutura Curricular</a></li>
							<li><?php echo anchor('formularios', 'Formulários'); ?></li>
							<li><a href="">Bancas</a></li>
							<li><a href="">Reconhecimento de diplomas</a></li>
							<li><a href="">Oferta de disciplina</a></li>
							<li><a href="<?php echo base_url('arquivos/CALENDARIO DE MATRICULA 2020.1.pdf'); ?>">Calendários acadêmico</a></li>
						</ul>
					</li>
					<li class="panel"><a href="#menuIngresso" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="false"><span>Formas de ingresso</span><span class="sr-only">Abrir/fechar sub-menu</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul class="navbar-custom-subnav collapse" id="menuIngresso">
							<li><a href="">Aluno Regular</a></li>
							<li><a href="">Aluno Especial</a></li>
							<li><a href="">Estágio pós-doutoral</a></li>
							<li><a href="">Cotutela</a></li>
						</ul>
					</li>
					<li class="panel"><a href="#menuEditais" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="false"><span>Editais</span><span class="sr-only">Abrir/fechar sub-menu</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul class="navbar-custom-subnav collapse" id="menuEditais">
							<li><a href="">Seleção de aluno regular</a></li>
							<li><a href="">Reingresso de aluno regular</a></li>
							<li><a href="">Mudança de nivel</a></li>
							<li><a href="">Bolsas</a></li>
							<li><a href="">Publicações</a></li>
							<li><a href="">Credenciamento Docente</a></li>
							<li><a href="">Outros</a></li>
						</ul>
					</li>
					<li class="panel"><a href="#menuEventos" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="false"><span>Eventos</span><span class="sr-only">Abrir/fechar sub-menu</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul class="navbar-custom-subnav collapse" id="menuEventos">
							<li><a href="">Defesas de dissertações</a></li>
							<li><a href="">Defesa de teses</a></li>
							<li><a href="">Eventos Científicos</a></li>
							<li><a href="">Outros</a></li>
						</ul>
					</li>
					<li class="panel"><a href="#menuPublicacoes" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="false"><span>Pubicações</span><span class="sr-only">Abrir/fechar sub-menu</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul class="navbar-custom-subnav collapse" id="menuPublicacoes">
							<li><a href="">Banco de dissertações e teses</a></li>
							<li><a href="">Periódicos</a></li>
							<li><a href="">Livros</a></li>
							<li><a href="">Conselho Editorial</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>