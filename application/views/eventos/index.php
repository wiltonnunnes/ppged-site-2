

<section class="info-section pt-6 mt-5">
    <div class="container">
        <div class="head-box text-center">
            <h2>Eventos</h2>
            <h6 class="text-underline-primary mb-5">Todas os eventos</h6>
        </div>

        <div class="row">

            <div class="col-md-4 gedf-main visible-xs">
                <form class="form-inline mt-5 ml-3" action="<?php echo site_url('eventos'); ?>">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Buscar Evento" size="25%" name="titulo">
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

                    <?php 
                    $number_cols = 3;
                    $count = 0;
                    foreach($eventos as $eventos_item) {
                        if($count % $number_cols == 0)
                            echo '<div class="row">'; 
                        $count++;
                    ?>
                        
                        <div class="col-md-4 gedf-main">
                            <p class="text-muted size_p"><i class="fa fa-calendar"></i> <?php setlocale(LC_ALL, NULL); echo strftime('%#d de %B de %Y', strtotime($eventos_item['data'])); ?></p>
                            <a class="card-link" href="<?php echo site_url('eventos/' . $eventos_item['evento_id']); ?>">
                                <h2 class="card-title text-primary" style="margin-top: .25rem; margin-bottom: 3rem;"><?php echo $eventos_item['nome_evento']; ?></h2>
                            </a>
                        </div>

                    <?php
                        if($count % $number_cols == 0 || $count == count($eventos))
                            echo "</div>";
                    }
                    ?>

                    <nav class="offset-md-5 navNoticia text-center">
                        <?php echo $links; ?>
                    </nav>
                </div>
            </div>

            <div class="col-md-4 gedf-main hidden-xs">
                <form class="form-inline mt-5 ml-3" action="<?php echo site_url('eventos'); ?>">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Buscar Evento" size="25%" name="titulo">
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
