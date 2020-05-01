<!-- sobre -->
<section class="info-section">
    <div class="container">
        <div class="row">



            <div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <div class="jquery-accordion-menu-header">Publica&ccedil;&otilde;es</div>
                        <div class="container">
                            <div class="row">
                            
                            <?php 
                            $number_cols = 4;
                            $count = 0;
                            $width = 12 / $number_cols;
                            foreach($publicacoes as $publicacoes_item) {
                                if($count % $number_cols == 0)
                                    echo '<div class="row">'; 
                                $count++;
                            ?>

                                <div class="col-sm-<?php echo $width; ?>">
                                    <img src="<?php echo base_url('arquivos/publicacoes/' . $publicacoes_item['ano'] . '/' . $publicacoes_item['imagem']); ?>" alt="" class="img-thumbnail">
                                </div>

                            <?php
                            if($count % $number_cols == 0 || $count == count($publicacoes))
                                echo "</div>";
                            }
                            ?>
                            </div>

                        </div>
                            
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
