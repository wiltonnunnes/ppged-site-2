<section class="info-section pt-6 mt-5">
	<div class="container">
		<div class="head-box text-center">
			<h2>Notícias da ANPED / FORPRED</h2>
			<h6 class="text-underline-primary mb-5">Todas as notícias</h6>
        </div>

        <div class="row">

            <div class="col-md-12 gedf-main visible-xs">
                <form class="form-inline mt-5 ml-3" action="<?php echo site_url('noticias'); ?>">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Buscar Notícia" size="25%" name="titulo">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

			<div class="col-md-8 mb-sm-8">
                <div class="container-fluid gedf-wrapper">

                        <!--
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="h5">Notícias</div>
                                    <div class="h7">Confira aqui as novidades relacionadas ao PPGEd.</div>
                                    <form class="form-inline mt-5 ml-3" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Buscar Notícia" size="25%" name="titulo">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        -->
                        
                    <?php 
                    $number_cols = 3;
                    $count = 0;
                    foreach($noticias_anpae as $noticias_anpae_item) {
                        if($count % $number_cols == 0)
                            echo '<div class="row">'; 
                        $count++;
                    ?>
                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <!--<div class="card gedf-card">-->
                                <!--<div class="card-body">-->
                            <p class="text-muted size_p" style="margin-top:9%; margin-bottom:0px;"><i class="far fa-calendar"></i> <?php setlocale(LC_ALL, NULL); echo strftime('%#d de %B de %Y', strtotime($noticias_anpae_item['data'])); ?></p>
                            <a class="card-link" href="<?php echo site_url('informativos/' . $noticias_anpae_item['noticia_id']); ?>">
                                <h2 class="card-title"><?php echo $noticias_anpae_item['titulo']; ?></h2>
                            </a>
                                  <!--  
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">PPGEd</div>
                                </div>
                            </div>-->
                        </div>
                        <!-- Post /////-->
                    <?php
                        if($count % $number_cols == 0 || $count == count($noticias_anpae))
                            echo "</div>";
                    }
                    ?>

                        

                    <nav class="offset-md-5 navNoticia text-center">
                        <?php echo $links; ?>
                    </nav>
                </div>
			</div>

            <div class="col-md-4 gedf-main hidden-xs">
                <form class="form-inline mt-5 ml-3" action="<?php echo site_url('noticias'); ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Buscar Notícia" size="25%" name="titulo">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

		</div>  
	</div>
</section>
