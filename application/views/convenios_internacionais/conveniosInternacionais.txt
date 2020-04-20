<!DOCTYPE html> 

<?php
    session_start();
?>

<html>

<head>
    <title>PPGED - Pograma de Pós Graduação em Educação</title>
    <meta name="viewport" content="width=device-width">
	
	<!-- CSS -->
    <link href="../style.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" id="bootstrap-css">

    <!-- JavaScript -->
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.11.js"></script>
	
    <!-- Icone -->
	<link rel="shortcut icon" href="../img/icon.ico" >

    <!-- Edicao Tabela -->
    <link href="../css/tabela.css" rel="stylesheet">
    <script src="../js/jquery-tabela.js"></script>
    <script src="../js/bootstrap-tabela.js"></script>
	
</head>

<body>
<!-- menu -->
<?php 
	if(isset($_SESSION['adm'])) {
		include ("menuAdm.php");
	} else {
		include ("menu.php");	
	}
?>

<!-- Inicio -->
<?php include '../inicio.php';?>

<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include ("sideBar.php");	
				?>
			</div>

			<div class="col-md-8 col-lg-8">
				<div class="content" style="width:100%">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
						<div class="jquery-accordion-menu-header">Convênios Nacionais</div>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
									
                                    <p>Programa vem construindo uma cultura acadêmica em torno das temáticas de interesse de suas Linhas de Pesquisa mediante a articulação de seus docentes e discentes com grupos de pesquisas de excelência,
                                     na região, no país e no exterior.Nesse sentido, docentes e pós-graduandos do Programa têm realizado regularmente missões científicas de cooperação nacional e internacional.</p>

                                    <h3 align="center"><b>PROGRAMA NACIONAL DE COOPERAÇÃO ACADÊMICA (PROCAD)</b></h3>

                                    <p>O Programa de Cooperação Acadêmica (PROCAD), financiado pela CAPES, 
                                    constitui-se um campo profícuo de atividades de pesquisa e de docência realizada em colaboração entre grupos de pesquisa de diferentes instituições</p>
                                    
                                    <h5 align="justify" class="mt-5">01 - PROJETO: Currículo, trabalho pedagógico e inclusão escolar: produzindo redes de sentidos e significados na perspectiva histórico-cultural</h5>
                                    <p><b>Coordenação: </b>Prof.ª Dr.ª Márcia Maria Gurgel Ribeiro.<br>
                                    <b>Instituições participantes:</b></p>

                                    <ol>
                                        <li>Universidade Federal do Rio Grande do Norte (UFRN)</li>
                                        <li>Universidade de Brasília (UNB)</li>
                                        <li>Universidade Federal do Piauí (UFPI).</li>
								    </ol>

                                    <p><b>Objetivo: </b>O Projeto objetiva investigar como os sentidos e os significados sobre currículo, trabalho pedagógico e inclusão escolar promovem práticas emancipatórias na escola. 
                                    Propõe a constituição de redes de cooperação que articulem as atividades de estudo e de pesquisa no contexto da pós-graduação da UFPI, da UFRN e da UNB.</p>

                                    <hr>

                                    <h5 align="justify">02 - PROJETO: TORNAR-SE UNIVERSITÁRIO: do lugar, do sentido e do percurso do Ensino Médio e da Educação Superior.</h5>
                                    <p><b>Coordenação: </b>Prof.ª Dr.ª Betania Leite Ramalho<br>
                                    <b>Instituições participantes:</b></p>

                                    <ol>
                                        <li>Universidade do Estado da Bahia</li>
                                        <li>Universidade Federal do Ceará</li>
                                        <li>Universidade Federal de Sergipe</li>
								    </ol>

                                    <p><b>Objetivo: </b>O projeto apresenta uma proposta de criação de rede de estudos sobre a universidade pública inclusiva e a cultura universitária. É uma parceria que vem possibilitando 
                                        o desenvolvimento de estudos e atividades de pesquisa sobre a Universidade Pública Brasileira, no contexto da Região Nordeste, na qual os problemas os problemas
                                        sociais e educacionais são expressão de históricas desigualdades, com repercussões graves na qualidade da educação e no acesso da grande maioria da população aos estudos universitários.</p>
                                    <hr>

                                    <h5 align="justify">03 - PROJETO: Pesquisa (auto) biográfica: docência, formação e profissionalização.</h5>
                                    <p><b>Coordenação: </b>Prof.ª Dr.ª Maria da Conceição F. B. S. Passeggi<br>
                                    <b>Instituições participantes:</b></p>

                                    <ol>
                                        <li>Universidade de São Paulo – Faculdade de Educação</li>
                                        <li>Universidade do Estado da Bahia</li>
								    </ol>

                                    

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section id="footer">
			<?php include 'footer.php';?>
</section>

</body>

</html>