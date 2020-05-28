<section class="info-section">
  <div class="container">
    <div class="head-box text-center mb-5">
      <h2 class="title">MAIS DO PPEGd</h2>
      <h6 class="text-underline-primary"><a href="#rowItens" data-toggle="tab">Notícias,</a> <a href="#rowItens2"
          data-toggle="tab">eventos,</a> <a href="#rowItens3" data-toggle="tab">editais</a></h6>
    </div>
    <div class="tab-content">
      <div class="row itens tab-pane" id="rowItens">
        <?php foreach ($noticias_outras as $noticias_item): ?>
        <div class="col-xs-12 col-sm-4 container-item">
          <div class="item">
            <figure class="img-cover-proportional item-img" style="cursor: pointer;">
              <a class="item-tag white-link" title=""><?php echo $noticias_item['categoria']; ?></a>
              <?php
						$imgsrc = $noticias_item['imagem'] ? 'uploads/arquivos/noticias_anpae' . $noticias_item['imagem'] : "https://via.placeholder.com/1024x768";
						echo img($imgsrc);
						?>
            </figure>
            <p class="item-date">
              <?php
						setlocale(LC_ALL, NULL);
						echo utf8_encode(strftime('%#d de %B de %Y', strtotime($noticias_item['data'])));
						?>
            </p>
            <h2 class="item-title">
              <?php 
						echo anchor(array('noticias', $noticias_item['noticia_id']), $noticias_item['titulo'], 'class="blue-link"'); 
						?>
            </h2>
            <p class="item-description">
              <?php
						$doc = new DOMDocument();
						$doc->loadHTML($noticias_item['texto']);
						echo character_limiter($doc->getElementsByTagName('p')->item(0)->textContent, 133);
						?>
            </p>
          </div>
        </div>
        <?php endforeach ?>
        <div class="clearfix"></div>
      </div>
      <div class="row itens tab-pane active" id="rowItens2">
        <?php foreach ($noticias_eventos as $noticias_item): ?>
        <div class="col-xs-12 col-sm-4 container-item">
          <div class="item">
            <figure class="img-cover-proportional item-img" style="cursor: pointer;">
              <a class="item-tag white-link" title=""><?php echo $noticias_item['categoria']; ?></a>
              <?php
						$imgsrc = $noticias_item['imagem'] ? 'uploads/arquivos/noticias_anpae' . $noticias_item['imagem'] : "https://via.placeholder.com/1024x768";
						echo img($imgsrc);
						?>
            </figure>
            <p class="item-date">
              <?php
						setlocale(LC_ALL, NULL);
						echo utf8_encode(strftime('%#d de %B de %Y', strtotime($noticias_item['data'])));
						?>
            </p>
            <h2 class="item-title">
              <?php 
						echo anchor(array('noticias', $noticias_item['noticia_id']), $noticias_item['titulo'], 'class="blue-link"'); 
						?>
            </h2>
            <p class="item-description">
              <?php
						$doc = new DOMDocument();
						$doc->loadHTML($noticias_item['texto']);
						echo character_limiter($doc->getElementsByTagName('p')->item(0)->textContent, 133);
						?>
            </p>
          </div>
        </div>
        <?php endforeach ?>
        <div class="clearfix"></div>
      </div>
      <div class="row itens tab-pane" id="rowItens3">
        <?php foreach ($noticias_editais as $noticias_item): ?>
        <div class="col-xs-12 col-sm-4 container-item">
          <div class="item">
            <figure class="img-cover-proportional item-img" style="cursor: pointer;">
              <a class="item-tag white-link" title=""><?php echo $noticias_item['categoria']; ?></a>
              <?php
						$imgsrc = $noticias_item['imagem'] ? 'uploads/arquivos/noticias_anpae' . $noticias_item['imagem'] : "https://via.placeholder.com/1024x768";
						echo img($imgsrc);
						?>
            </figure>
            <p class="item-date">
              <?php
						setlocale(LC_ALL, NULL);
						echo utf8_encode(strftime('%#d de %B de %Y', strtotime($noticias_item['data'])));
						?>
            </p>
            <h2 class="item-title">
              <?php 
						echo anchor(array('noticias', $noticias_item['noticia_id']), $noticias_item['titulo'], 'class="blue-link"'); 
						?>
            </h2>
            <p class="item-description">
              <?php
						$doc = new DOMDocument();
						$doc->loadHTML($noticias_item['texto']);
						echo character_limiter($doc->getElementsByTagName('p')->item(0)->textContent, 133);
						?>
            </p>
          </div>
        </div>
        <?php endforeach ?>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>


<section class="info-section bg-departamentos px-0" style=" padding-top: 0px; padding-bottom: 0px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-lg-6 content-half mt-md-0 pt-4">
        <div class="head-box mb-5 pl-5 mt-2">
          <h2 class="text-white">NOTÍCIAS DO PPGED</h2>
          <a href="#">
            <h6 class="text-white text-underline-rb-white">Veja todos os nossos informes <i class="fa fa-plus-circle"
                aria-hidden="true"></i></h6>
          </a>
        </div>
        <ul class="pl-5">
          <?php
						$informativo = array_shift($informativos);
						?>
          <li>
            <a href="<?php echo site_url(['informativos', $informativo['informativo_id']]); ?>" target="_blank"
              style="color: white"><i class="fa fa-file fa-white" aria-hidden="true"></i>
              <span class="list-content">
                <strong><?php echo mb_strtoupper(html_entity_decode($informativo['categoria'])); ?></strong>
                <br>Data (Ex.: <?php echo date_format(date_create($informativo['data']), "d/m/Y"); ?>)
              </span></a>
          </li>
          <?php foreach($informativos as $informativos_item): ?>
          <li>
            <a href="<?php echo site_url(['informativos', $informativos_item['informativo_id']]); ?>" target="_blank"><i
                class="fa fa-file fa-white" aria-hidden="true"></i></a>
            <span class="list-content">
              <strong><?php echo mb_strtoupper(html_entity_decode($informativos_item['categoria'])); ?></strong>
              <br>Data (Ex.: <?php echo date_format(date_create($informativos_item['data']), "d/m/Y"); ?>)
            </span>
          </li>
          <?php endforeach; ?>
          <!--
						<li>
							<a href="#" target="_blank"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
							<span class="list-content">
								<strong>NOTÍCIA</strong>
								<br>Data (Ex.: 25/12/2020)
							</span>
						</li>
						<li>
							<a href="#" target="_blank"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
							<span class="list-content">
								<strong>BOLSAS</strong>
								<br>Data (Ex.: 25/12/2020)
							</span>
						</li>
						<li>
							<a href="" target="_blank"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
							<span class="list-content">
								<strong>NOTÍCIA</strong>
								<br>Data (Ex.: 25/12/2020)	
							</span>
						</li>
						-->
        </ul>
      </div>
      <div class="col-md-6 p-0 m-0">
        <img src="<?php echo base_url('img/ce.jpg'); ?>" class="img-responsive d-none d-md-block"
          style="height:640px; width:100%;">
      </div>
    </div>
</section>

<section class="info-section pt-5" style="padding:0">
  <div class="container">
    <div class="head-box text-center">
      <h2>Revista Educação em Questão</h2>
      <h6 class="text-underline-primary mb-5"></h6>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="media media-testimonial">
          <div class="media-left">
            <a href="#">
              <img src="http://ppged.ufrn.br/images/revista-ico.png" width="650">
            </a>
          </div>
          <div class="media-body">
            <p class="text-justify" style="font-size:15px;"> A Revista Educação em Questão, editada desde 1987,
              nasceu da iniciativa de professores do Departamento de Educação da Universidade Federal do Rio Grande do
              Norte (UFRN), quando o Mestrado em Educação,
              instalado em 1978, completou nove anos formando mestres nas ...
            </p>
            <a href="http://www.revistaeduquestao.educ.ufrn.br/" target="_blank" title="Read more" class="read-more"
              style="color:#004d95; font-weight:bold;">Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>

          </div>
        </div>
      </div>
    </div>
</section>

<section class="info-section ">
  <div class="container">

    <div class="row mbr-justify-content-center">
      <div class="col-lg-6 mbr-col-md-10">
        <a href="<?php echo site_url('apresentacao'); ?>">
          <div class="wrap">
            <div class="ico-wrap">
              <span class="mbr-iconfont fa-volume-up fa"></span>
            </div>
            <div class="text-wrap vcenter">
              <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Apresentação</h2>
              <p class="mbr-fonts-style mbr-text display-6">O Programa de Pós-Graduação em Educação/CCSA/UFRN, contribui
                para o desenvolvimento da pesquisa e para a formação de pesquisadores em Educação.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6 mbr-col-md-10">
        <div class="wrap">
          <div class="ico-wrap">
            <span class="mbr-iconfont fa-calendar fa"></span>
          </div>
          <div class="text-wrap vcenter">
            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Calendário de Bancas de Defesa</h2>
            <p class="mbr-fonts-style text1 mbr-text display-6">Veja nosso calendário acadêmico com as datas dos eventos
              do PPGEd, auxiliando no planejamento mensal dos professores e alunos.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mbr-col-md-10">
        <a href="<?php echo site_url('publicacoes'); ?>">
          <div class="wrap">
            <div class="ico-wrap">
              <span class="mbr-iconfont fa-globe fa"></span>
            </div>
            <div class="text-wrap vcenter">
              <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Banco de publicações</h2>
              <p class="mbr-fonts-style text1 mbr-text display-6">Contamos com a produção atuante dos professores e
                alunos. Temos também contribuições com dissertações e teses defendidas pelos alunos do PPGEd.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6 mbr-col-md-10">
        <a href="<?php echo site_url('pesquisas'); ?>">
          <div class="wrap">
            <div class="ico-wrap">
              <span class="mbr-iconfont fa-search fa"></span>
            </div>
            <div class="text-wrap vcenter">
              <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Linhas de Pesquisa</h2>
              <p class="mbr-fonts-style text1 mbr-text display-6">A proposta pedagógica do PPGEd/UFRN estrutura-se em
                pesquisas e ensino organizados em Linhas de Pesquisa, que contemplam os objetos de estudos dos
                participantes.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6 mbr-col-md-10">
        <div class="wrap">
          <div class="ico-wrap">
            <span class="mbr-iconfont fa-book fa"></span>
          </div>
          <div class="text-wrap vcenter">
            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Livros PPGEd</h2>
            <p class="mbr-fonts-style text1 mbr-text display-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Morbi et auctor nisl. Integer a vulputate sapien, a mattis urna. Praesent eget velit lorem. Curabitur at
              magna ante. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mbr-col-md-10">
        <div class="wrap">
          <div class="ico-wrap">
            <span class="mbr-iconfont fa-folder-open fa"></span>
          </div>
          <div class="text-wrap vcenter">
            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Processo Seletivo</h2>
            <p class="mbr-fonts-style text1 mbr-text display-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Morbi et auctor nisl. Integer a vulputate sapien, a mattis urna. Praesent eget velit lorem. Curabitur at
              magna ante. </p>
          </div>
        </div>
      </div>
    </div>
</section>