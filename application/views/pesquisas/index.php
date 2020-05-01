<section class="info-section">
	<div class="container">
		<div class="row">



			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <h1>Linhas de Pesquisas</h1>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    <div class="panel-group">
								    <?php foreach ($pesquisas as $pesquisas_item): ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" href="#<?php echo $pesquisas_item['pesquisa_id']; ?>"><?php echo $pesquisas_item['titulo']; ?></a>
                                            </div>
                                            <div id="<?php echo $pesquisas_item['pesquisa_id']; ?>" class="panel-collapse collapse">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="p-accordion mt-3"> 
                                                                <strong> PROFESSORES PESQUISADORES: </strong> <br>
                                                                <?php
                                                                $links = array();
                                                                foreach ($pesquisas_item['professores'] as $professores_item) {
                                                                    array_push($links, anchor($professores_item['lattes'], $professores_item['nome']));
                                                                }
                                                                echo implode("; ", $links) . '.';
                                                                ?>
                                                            </p>
                                    
                                                            <p class="p-accordion"> 
                                                                <?php echo $pesquisas_item['texto']; ?>
                                                            </p>

                                                            <p class="p-accordion"> 
                                                                <strong>GRUPOS DE PESQUISA: </strong> <br>          
                                                                a) Educação de Pessoas com Necessidades Especiais.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>