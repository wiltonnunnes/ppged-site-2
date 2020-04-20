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
                        <div class="jquery-accordion-menu-header">Publica&ccedil;&otilde;es</div>
                        <div class="container">
                            <select class="custom-select">
                            <?php foreach ($anos as $key => $value): ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php endforeach; ?>
                            <?php foreach ($publicacoes as $publicacoes_item): ?>
                                <div class="card">
                                    <div>
                                    <img src="<?php base_url('uploads/publicacoes/' . $publicacoes_item['imagem']); ?>" alt="">
                                </div>
                                </div>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
