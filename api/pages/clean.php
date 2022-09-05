
<section style="display:none;"  class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg');"class="banner-single"></div><!--banner-single-->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form2.jpg');"class="banner-single"></div><!--banner-single-->

	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form3.jpg');"class="banner-single"></div><!--banner-single-->
	<div class="overlay"></div><!--overlay-->

	<div class="center">

<!--
		<form method="post">
			<h2>Qual o seu melhor email?</h2>
			<input type="email" name="email">
			<input type="submit" name="acao" value="Cadastrar">
		</form>-->
	</div><!--center-->
		<div class="bullets">

		</div><!--bullets-->
</section><!--banner-container-->

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h2>Darthi Alves</h2>
				<p>
					Acessibilidade não é só ter uma rampa de acesso, pequeno vagalume!!!
					Vai muito além: é um nome abrangente que envolve diversas formas de promover
					acesso através das tecnologias assistivas (que são produtos, serviços e
					equipamentos que auxiliam a pessoa com deficiência conforme as suas necessidades.
					Como exemplo: as bengalas para deficientes visuais, placas de comunicação alternativa
					para quem perde a fala, muletas para locomoção...).
						<br>
						Como muito do preconceito que as "pessoas sem deficiências" praticam às pessoas com deficiências
					é por falta de informação,  criei este baralho com perguntas norteadores para ampliar o pensamento
					daqueles que enxergam, andam, escutam perfeitamente... "Bater papo" sobre inclusão social e
					acessibilidade em todos os seus âmbitos: comunicacional, metodológica, arquitetônica, instrumental,
					digital  e atitudinal.  Já que muitas dessas barreiras, é a própria sociedade que impõe,
					a deficiência está presente mais no ambiente, do que na própria pessoa.ue envolve diversas formas de promover

	</p>

	</div>
			<div class="w50 left">
				<img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto.png">
			</div>
			 <div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->
<div class="clear"></div>

	<section  class="especialidades">

		<div  class="center">

		<h2 class="title">Galeria</h2>
			<div class=" box-especialidade">
				<h3><i class="fas fa-audio-description"></i></h3>
				<h4>Audiodescri&ccedil;ao</h4>
		<?php
		$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
		$porPagina = 1;
		$cartas = Painel::selectA('tb_admin.cartas',($paginaAtual - 1)*$porPagina, $porPagina );
		?>
		<div class="box-content">
			<div class="wraper-table">

				<div id ="galeria" class="w33 left  table">
				<?php foreach ($cartas as $carta => $value) {?>
						<div id="target" class="center table">
							<div class="id"><?php  $value['id']; ?></div>
							<div class="nome"><?php echo $value['nome']; ?></div>
							<img src=" <?php echo BASE_DIR_AUDIO, $value ['carta']; ?>"</img>
						</div><!--table-->
				<?php   } ?>
			</div><!--table-->
				<!--	<div class=" audio"><audio controls src="<?php echo BASE_DIR_AUDIO.$value['audio'];?>"></audio></td></div>-->
				<audio controls>
					<source src="<?php echo BASE_DIR_AUDIO_CARTAS_MP3.$value['audio'];?>.mp3" type="audio/mp3">
					<source src="<?php echo BASE_DIR_AUDIO_CARTAS.$value['audio'];?>" type="audio/ogg">
					<source src="<?php echo BASE_DIR_AUDIO_CARTAS.$value['audio'];?>" type="audio/mpeg">
				</audio>
		<div class="container">

			<div class="paginacao ">
<?php
		$totalPaginas = ceil(count(Painel::selectA('tb_admin.cartas')) / $porPagina);
		for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual)
				 '<a class="page-selected" href="'.INCLUDE_PATH.'galeria?pagina='.$i.'"></a>';
					//	else
			  	echo '<a href="'.INCLUDE_PATH.'galeria?pagina='.$i.'">'.$i.'</a>';

		}
		?>




<!--<nav class= "paginador w50 center" aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
		<li class="page-item"><a class="page-link" <?echo $paginaAtual?>href="#"><?echo $paginaAtual?></a></li>
    <li type="text" class="page-item">
		<a class="page-link" href="<?php echo INCLUDE_PATH; ?>home?pagina=" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>-->

</div><!--paginacao-container-->
	</div><!--container-->
   </div><!--wraper-table-->
	 		</div><!--box-content-->
			</div><!--especialidad-->

		</div><!--center-->
	 <div class="clear"></div>
	</section><!--especialidades-->

		<section class="extras">
		<div class="center">
			<div id="depoimentos" class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos Leitores</h2>

				<div class="depoimento-single">
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.	</p>
					<p class="nome-autor">Lorem ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->

			<div id="servicos" class="w50 left servicos-container">
				<h2 class="title">Servi&ccedil;os</h2>
				<div class="servicos">
					<ul>
						<li>Lorem ipsum dolor sit amet,  consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure consectetur adipisicing elit.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
		 <div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->
