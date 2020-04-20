<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<div class="col-md-8 col-lg-8">
			    <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <div class="jquery-accordion-menu-header">Docentes</div>
                        <div class="container">
                        <?php for ($i = 0; $i < count($professores); $i += 2): ?>
                            <div class="row">
                            <?php 
                            for ($j = $i; $j <= $i + 1; $j++) {
                            	if ($j == count($professores)) break;
                            ?>
                                <div class="col-md-6 col-lg-6 mt-2">
                                    <h1 class="nome_docente"><?php echo $professores[$j]['nome']; ?></h1>
                                    <ul class="atributos_professores">
                                        <li>
                                            <spam class="bold">Título:</spam> <?php echo $professores[$j]['titulo']; ?>
                                        </li>
                                        <li>
                                            <spam class="bold">E-mail:</spam> <?php echo $professores[$j]['email']; ?>
                                        </li>
                                        <li style="background-color:white">
                                            <spam class="bold"> Curriculum Lattes:</spam> <a href="<?php echo $professores[$j]['lattes']; ?>" style="background-color:white; color:black; padding:0px"><?php echo $professores[$j]['lattes']; ?></a>
                                        </li>
                                        <li>
                                            <spam class="bold"> Página do SIGAA:</spam><a href="<?php echo $professores[$j]['sigaa']; ?>"  style="background-color:white; color:black; padding:0px"><?php echo $professores[$j]['sigaa']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>
                            </div>    
                            <hr>
                        <?php endfor; ?>
                        </div>
                    </div>
		        </div>
			</div>


		</div>
	</div>
</section>
