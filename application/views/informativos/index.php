<section class="info-section pt-6 mt-5">
	<div class="container">
		<div class="head-box text-center">
			<h2>Informativos</h2>
			<h6 class="text-underline-primary mb-5">Todas os informativos</h6>
        </div>

        <div class="row">
			<div class="col-md-12 mb-sm-12">
                <div class="container-fluid gedf-wrapper">
                    <div class="row">

                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="h5">Notícias</div>
                                    <div class="h7">Confira aqui os informativos do PPGEd.</div>
                                    <form class="form-inline mt-5 ml-3" action="<?php echo site_url('informativos'); ?>">
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
                        
                        <?php foreach ($informativos as $informativos_item): ?>
                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> <?php echo date_format(date_create($informativos_item['data']), 'd M Y'); ?></div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title"><?php echo $informativos_item['titulo']; ?></h5>
                                    </a>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">PPGEd</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->
                        <?php endforeach; ?>

                        <nav class="offset-md-5 navNoticia">
                            <?php echo $links; ?>
                        </nav>

                    </div>
                </div>
			</div>
		</div>  
	</div>
</section>
