<!-- Wil -->
<section class="info-section pt-6 mt-5">
    <div class="container">
        <div class="head-box">
            <h1>Publicações</h1>
        </div>

        <div class="row">

            <div class="col-md-12 gedf-main visible-xs" style="margin-bottom: 3rem;">
                <form class="form-inline mt-5 ml-3" action="<?php echo site_url('noticias'); ?>">
                    <div class="input-group input-group-lg">
                        <select class="form-control" id="ano-publicacao">
                        <?php
                        foreach ($anos as $ano) {
                            echo "<option>$ano</option>";
                        }
                        ?>
                        </select>
                        
                    </div>
                </form>
            </div>

            <div class="col-md-8 mb-sm-8">
                <div class="container-fluid gedf-wrapper" id="container-publicacoes">

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
                    foreach($publicacoes as $publicacoes_item) {
                        if($count % $number_cols == 0)
                            echo '<div class="row itens">'; 
                        $count++;
                    ?>
                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main container-item">
                            <!--<div class="card gedf-card">-->
                                <!--<div class="card-body">-->
                            
                            <div class="thumbnail">
                                <a href="#" data-toggle="modal" data-target="#professorDetails" data-id="<?php echo $publicacoes_item['publicacao_id']; ?>" class="modal-button">
                                    <?php
                                    $imageProperties = [
                                        'src' => "https://via.placeholder.com/1024x768",
                                        'style' => "width:100%"
                                    ];
                                    echo img($imageProperties);
                                    ?>
                                </a>
                            </div>
                                  <!--  
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">PPGEd</div>
                                </div>
                            </div>-->
                        </div>
                        <!-- Post /////-->
                    <?php
                        if($count % $number_cols == 0 || $count == count($publicacoes))
                            echo "</div>";
                    }
                    ?>

                        

                    
                </div>
            </div>

            <div class="col-md-4 gedf-main hidden-xs">
                <form class="form-inline mt-5 ml-3" action="<?php echo site_url('noticias'); ?>">
                    <div class="input-group input-group-lg">
                        <select class="form-control" id="ano-publicacao">
                        <?php
                        foreach ($anos as $ano) {
                            echo "<option>$ano</option>";
                        }
                        ?>
                        </select>
                        
                    </div>
                </form>
            </div>

        </div>  
    </div>
</section>

<script type="text/javascript">
    $('#ano-publicacao').change(function(){
        var $option = $('#ano-publicacao option').filter(':selected');

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                var publicacoes = JSON.parse(this.responseText);
                alert(typeof publicacoes);
            }
        };
        xmlhttp.open("GET", "<?php echo site_url(); ?>/publicacoes/" + $option.text(), true);
        xmlhttp.send();
    });
</script>