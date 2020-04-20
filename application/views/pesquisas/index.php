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
                        <div class="jquery-accordion-menu-header">Linhas de Pesquisas</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
								<?php for ($i = 0; $i < count($pesquisas); $i++): ?>

                                    <h2 align="center" class="mt-3"> <?php echo $pesquisas[$i]['titulo']; ?> </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> PROFESSORES PESQUISADORES: </strong> <br>
                                    <?php
                                    $links = array();
                                    foreach ($pesquisas[$i]['professores'] as $professores_item) {
										array_push($links, anchor($professores_item['lattes'], $professores_item['nome']));
									}
                                    echo implode(", ", $links) . '.';
                                    ?>
                                    </p>
                                    
                                    <p class="p-accordion"> 
                                        <?php echo $pesquisas[$i]['texto']; ?>
                                    </p>

                                    <p class="p-accordion"> 
                                        <strong>GRUPOS DE PESQUISA: </strong> <br>			
                                        a) Educação de Pessoas com Necessidades Especiais.
                                    </p>

                                   	<?php if ($i < count($pesquisas) - 1): ?>
                                    <hr class="listra">
                                	<?php endif; ?>
                                <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>