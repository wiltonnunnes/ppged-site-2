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
                        <div class="jquery-accordion-menu-header">Linhas de Pesquisas</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">

                                    <h2 align="center" class="mt-3"> EDUCAÇÃO E INCLUSÃO EM CONTEXTOS EDUCACIONAIS </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>			
                                        <a href="http://lattes.cnpq.br/1188086132826132 ">Débora Regina de Paula Nunes</a>; 
                                        <a href="http://lattes.cnpq.br/6848746516562543 ">Francisco Ricardo Lins Vieira de Melo</a>; 
                                        <a href="http://lattes.cnpq.br/1834832958808690 ">Jefferson Fernandes Alves</a>; 
                                        <a href="http://lattes.cnpq.br/4028503466396532 ">Lúcia de Araújo Ramos Martins</a>;
                                        <a href="http://lattes.cnpq.br/1032425601643160 ">Luzia Guacira dos Santos Silva</a>;
                                        <a href="http://lattes.cnpq.br/1131977255034974">Maria Aparecida Dias</a>; 
                                        <a href="http://lattes.cnpq.br/0351736925269307 ">Rita de Cássia Barbosa Paiva Magalhães</a>.
                                    </p>
                                    
                                    <p class="p-accordion"> 
                                        <strong>DESCRITOR DA LINHA: </strong> <br>			
                                        Investiga, no campo da Educação Especial na perspectiva Inclusiva, temáticas relacionadas às políticas, à formação docente e às práticas pedagógicas e artísticas nos diversos níveis e contextos educacionais.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Educação de Pessoas com Necessidades Especiais.
                                    </p>

                                    <hr class="listra">

                                    <h2 align="center" class="mt-4"> EDUCAÇÃO, CONSTRUÇÃO DAS CIÊNCIAS E PRÁTICAS EDUCATIVAS </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>			
                                        <a href="Link Lattes;http://lattes.cnpq.br/2557880242678680 ">André Ferrer Pinto Martins</a>;
                                        <a href="http://lattes.cnpq.br/3258090174478169 ">Claudianny Amorim Noronha</a>; 
                                        <a href="http://lattes.cnpq.br/4034449429973970">Fredy Enrique Gonzalez</a>; 
                                        <a href="http://lattes.cnpq.br/4490674057492872 ">Iran Abreu Mendes</a>; 
                                        <a href="http://lattes.cnpq.br/6685565063970044">Josivania Marisa Dantas</a>; 
                                        <a href="http://lattes.cnpq.br/9961862139964562 ">Maria da Conceição Xavier de Almeida</a>; 
                                        <a href="http://lattes.cnpq.br/2527223181575594 ">Maria Estela Costa Holanda Campelo</a>; 
                                        <a href="http://lattes.cnpq.br/2947750321164221">Marlecio Maknamara da Silva Cunha</a>; 
                                        <a href="http://lattes.cnpq.br/6982452047842223 ">Tatyana Mabel Nobre Barbosa</a>.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>DESCRITOR DA LINHA: </strong> <br>			
                                        Estudos e pesquisas que problematizam a construção das ciências e sua relação com os processos formativos e as práticas sociais, nas abordagens da matemática, das ciências naturais, das linguagens, de Paulo Freire e da complexidade.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Grupo de estudos da complexidade (GRECOM); <br>
                                        b) Grupo de Estudos e Pesquisas de Práticas Educativas em Movimento (GEPEM); <br>
                                        c) Ensino de Ciências e Cultura (ECC); <br>
                                        d) Grupos de estudos e pesquisa em ensino de matemática e de língua portuguesa (CONTAR). <br>
                                    </p>

                                    <hr class="listra">

                                    <h2 align="center" class="mt-4"> EDUCAÇÃO, COMUNICAÇÃO, LINGUAGENS E MOVIMENTO </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>			
                                        <a href="http://lattes.cnpq.br/4424220937257634 ">Alessandra Cardozo de Freitas</a>; 
                                        <a href="http://lattes.cnpq.br/9283008377235258 ">José Pereira de Melo</a>; 
                                        <a href="http://lattes.cnpq.br/5255588024266396 ">Karenine de Oliveira Porpino</a>; 
                                        <a href="http://lattes.cnpq.br/8288579916239009 ">Maria das Graças Pinto Coelho</a>; 
                                        <a href="http://lattes.cnpq.br/7415412765980423 ">Marly Amarilha</a>; 
                                        <a href="http://lattes.cnpq.br/6743881635494941 ">Terezinha Petrúcia da Nóbrega</a>; 
                                        <a href="http://lattes.cnpq.br/3231870235953025">Avelino Aldo de Lima Neto</a>.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>DESCRITOR DA LINHA: </strong> <br>			
                                            Estudos e pesquisas em leitura, literatura, dispositivos midiáticos e informacionais, das linguagens, do corpo e da cultura de movimento na educação.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Corpo, fenomenologia e movimento (ESTESIA);<br>
                                        b) Corpo e cultura de movimento (GEPEC);<br>
                                        c) Ensino e linguagem;<br>
                                        d) Estudos de Mídia - Análises e Pesquisas em Cultura, Produtos e Processos Midiáticos / Práticas Sociais.
                                    </p>

                                    <hr class="listra">

                                    <h2 align="center" class="mt-4"> EDUCAÇÃO, REPRESENTAÇÕES E FORMAÇÃO DOCENTE </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>			
                                        <a href="http://lattes.cnpq.br/0341824719316863">Adir Luiz Ferreira</a>; 
                                        <a href="http://lattes.cnpq.br/1326690619078211 ">Betania Leite Ramalho</a>; 
                                        <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4730775U7">Cynara Teixeira Ribeiro</a>; 
                                        <a href="http://lattes.cnpq.br/1296070757502494">Elda Silva do Nascimento Melo</a>; 
                                        <a href="http://lattes.cnpq.br/8921901031367516 ">Isauro Beltrán Nuñez</a>; 
                                        <a href="http://lattes.cnpq.br/4006015131926244 ">Moisés Domingos Sobrinho</a>.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>DESCRITOR DA LINHA: </strong> <br>			
                                        Pesquisa sobre o docente, o estudante, suas práticas, os processos formativos, inicial e continuado de formação e desenvolvimento sócio profissional. Privilegia as abordagens teórico-metodológicas que tomam como eixo a profissionalização docente, a comunicação, os processos psicossociais e socioculturais da aquisição e produção de conhecimentos em contextos educacionais, na educação básica e no ensino superior. Centra-se em três eixos: a) processos de aprendizagem e formação da docência; b) os sistemas socioculturais, socialização e educação na escola contemporânea; c) identidade e representações sociais na educação.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Aprendizagem, formação e profissionalização docente;<br>
                                        b) Escola contemporânea e olhar sociológico;<br>
                                        c) Representações sociais e educação.
                                    </p>

                                    <hr class="listra">

                                    <h2 align="center" class="mt-4"> EDUCAÇÃO, ESTUDOS SOCIOHISTÓRICOS E FILOSÓFICOS </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>			
                                        <a href="Link Lattes;http://lattes.cnpq.br/5195640047312319 ">Antônio Basílio Novaes Thomaz de Menezes</a>; 
                                        <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4210977Z8">Azemar dos Santos Soares Junior</a>; 
                                        <a href="http://lattes.cnpq.br/4223328278394193 ">Maria Arisnete Câmara de Morais</a>; 
                                        <a href="http://lattes.cnpq.br/5015707256397317 ">Maria da Conceição Ferrer B.S. Passeggi</a>; 
                                        <a href="http://lattes.cnpq.br/7289548301555477 ">Maria Inês Sucupira Stamatto</a>; 
                                        <a href="http://lattes.cnpq.br/2624591870785039 ">Marlúcia Menezes de Paiva</a>; 
                                        <a href="http://lattes.cnpq.br/6905794496420579 ">Marta Maria de Araújo</a>; 
                                        <a href="http://lattes.cnpq.br/7542482401254815">Olivia Morais de Medeiros Neta</a>.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>DESCRITOR DA LINHA: </strong> <br>			
                                        Aborda temáticas referentes aos fundamentos históricos, filosóficos e sociopolíticos da educação. Privilegia práticas educativas em suas diversas manifestações escolares e não escolares.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Grupo de pesquisa cultura, história e filosofia da educação; <br>
                                        b) Educação de crianças, jovens e adultos e seus fundamentos sócio históricos.
                                    </p>

                                    <hr class="listra">

                                    <h2 align="center" class="mt-4"> EDUCAÇÃO, POLÍTICA E PRÁXIS EDUCATIVAS </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>			
                                        <a href="http://lattes.cnpq.br/1267050454995209 ">Alda Maria Duarte Araújo Castro</a>; 
                                        <a href="http://lattes.cnpq.br/2272273005907974 ">Antonio Cabral Neto</a>; 
                                        <a href="http://lattes.cnpq.br/2027157262023382">Gilmar Barbosa Guedes</a>;
                                        <a href="http://lattes.cnpq.br/2546503141542893 ">Luciane Terra dos Santos Garcia</a>; 
                                        <a href="http://lattes.cnpq.br/1964589133589645 ">Magna França</a>; 
                                        <a href="http://lattes.cnpq.br/0642511546307992 ">Maria Aparecida de Queiroz</a>; 
                                        <a href="http://lattes.cnpq.br/9999709754863111">Maria Goretti Cabral Barbalho</a>; 
                                        <a href="http://lattes.cnpq.br/7532911538772143">Walter Pinheiro Barbosa Junior</a>; 
                                        <a href="http://lattes.cnpq.br/1720357515433453">Dante Henrique Moura</a>.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>DESCRITOR DA LINHA: </strong> <br>			
                                        Desenvolve estudos e pesquisas numa perspectiva crítica e contextualizada, sobre as políticas de educação básica e superior, contemplando os eixos: educação e trabalho; gestão e financiamento; políticas de formação de professores e gestores.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Políticas, Gestão e Financiamento da educação básica; <br>
                                        b) Políticas da Educação Superior.
                                    </p>

                                    <hr class="listra">

                                    <h2 align="center" class="mt-4"> EDUCAÇÃO, CURRICULO E PRÁTICAS PEDAGÓGICAS </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>			
                                        <a href="http://lattes.cnpq.br/6943286950201331">Crislane Barbosa de Azevedo</a>;
                                        <a href="http://lattes.cnpq.br/1935167361851222 ">Denise Maria de Carvalho Lopes</a>;
                                        <a href="http://lattes.cnpq.br/0778953049451033 ">Erika dos Reis Gusmão Andrade</a>;
                                        <a href="http://lattes.cnpq.br/6013805360280552">Karyne Dias Coutinho</a>;
                                        <a href="http://lattes.cnpq.br/6061996250283917">Mariangela Momo</a>;
                                        <a href="http://lattes.cnpq.br/2560174506689869 ">Rosália de Fátima e Silva</a>;
                                        <a href="http://lattes.cnpq.br/5257845839536488">Vândiner Ribeiro</a>;
                                        <a href="http://lattes.cnpq.br/3521226970305887">Alessandro Augusto de Azevedo</a>.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>DESCRITOR DA LINHA: </strong> <br>			
                                        Cultura e Educação; processos de construção de conhecimentos e saberes em diferentes contextos; práticas pedagógicas e curriculares para a educação de crianças, jovens e adultos; processos de formação inicial e continuada de profissionais da educação.
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Infância, Cultura, Educação e Práticas Pedagógicas;<br>
                                        b) Currículo, Saberes e práticas educativas.
                                    </p>
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