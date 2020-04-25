<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH . "views/templates/sideBar.php");	
				?>
			</div>

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <div class="jquery-accordion-menu-header">Processos Seletivos</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($selecoes as $selecoes_item): ?>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="https://drive.google.com/file/d/1dZ653d0_yUqdx6EX-ufNZmmW6SfbW_W6/view">MESTRADO E DOUTORADO 2019</a></td> 
                                                <td>2019.1</td>
                                            </tr>
                                        <?php endforeach: ?>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="http://www.ppged.ufrn.br/processo_seletivo_2018.php">MESTRADO E DOUTORADO 2018</a></td> 
                                                <td>2018.1</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><a href="#">MESTRADO E DOUTORADO 2017</a></td> 
                                                <td>2017.1</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><a href="#">MESTRADO E DOUTORADO 2016</a></td> 
                                                <td>2016.1</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><a href="#">MESTRADO E DOUTORADO 2015</a></td> 
                                                <td>2015.1</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>