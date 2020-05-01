<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <h1 style="margin-bottom: 3rem;">Editais</h1>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                    <div class="panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" href="#collapse1">Novos</a>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Edital</th>
                                                            <th>Início</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <!--<div class="list-group list-group-flush">-->
                                                    <?php foreach ($editais as $editais_item): ?>
                                                        <tr>
                                                            <td>
                                                                <a href="<?php echo base_url('uploads/arquivos/editais/' . $editais_item['arquivo']); ?>" target="_blank"><?php echo $editais_item['titulo']; ?></a>
                                                            </td>
                                                            <td><?php echo date_format(date_create($editais_item['data']), "d/m/Y"); ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" href="#collapse2">Em Andamento</a>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Edital</th>
                                                            <th>Início</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <!--<div class="list-group list-group-flush">-->
                                                    
                                                    </tbody>
                                                </table>
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" href="#collapse3">Encerrados</a>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Edital</th>
                                                            <th>Início</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <!--<div class="list-group list-group-flush">-->
                                                    
                                                    </tbody>
                                                </table>
                                                <!--</div>-->
                                            </div>
                                        </div>
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