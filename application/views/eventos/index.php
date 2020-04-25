<section class="info-section">
	<div class="container">
    <?php 
    $numCols = 4;
    $length = count($eventos);
    for ($r = 0; $r < $length / $numCols; $r++): 
    ?>
        <div class="row">
        <?php 
        for($c = 0; $c < $numCols; $c++) {
            $i = $c + $r * $numCols;
            if($i < $length) {
                $eventos_item = $eventos[$i];
        ?>
            <div class="col-xs-12 col-sm-3">
                <p class="item-date">
                <?php
                setlocale(LC_ALL, NULL);
                echo strftime('%#d de %B de %Y', strtotime($eventos_item['data']));
                ?>
                </p>
                <h2 class="item-title"><?php echo anchor(array('eventos', $eventos_item['evento_id']), $eventos_item['nome_evento'], 'class="blue-link"'); ?></h2>
            </div>
        <?php 
            }
        } 
        ?>
        </div>
    <?php endfor; ?>
        <nav class="text-center">
            <?php echo $links; ?>
        </nav>
	</div>
</section>