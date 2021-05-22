

		<h2 id ="galeria" class="title">Galeria</h2>
			<div class=" box-especialidade">
				<h3><i class="fas fa-audio-description"></i></h3>
				<h4>Audiodescriçao</h4>
		<?php
		$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
		$porPagina = 1;
		$cartas = Painel::selectA('tb_admin.cartas',($paginaAtual - 1)*$porPagina, $porPagina );
		?>
		<div class="box-content">
			<div class="wraper-table">

				<div  class="w33 left  table">
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
					<source src="<?php echo BASE_DIR_AUDIO.$value['audio'];?>" type="audio/ogg">
					<source src="<?php echo BASE_DIR_AUDIO.$value['audio'];?>" type="audio/mpeg">
				</audio>
		<div class="container">

			<div class="paginacao ">
		<?
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
