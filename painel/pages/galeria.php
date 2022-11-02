	<section  class="especialidades">

		<div  class="center">

			<div class=" box-especialidade">
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
<div class="center">
	<nav class= "paginador w50 center" aria-label="Page navigation example">
		<ul style="justify-content: center;" class="pagination">
			<li class="page-item">
				<a class="flecha" href="<?php INCLUDE_PATH_PAINEL ?>galeria?pagina=<?php echo $paginaAtual - 1 ?>">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>

			<li class="page-item">
				<a class="" <?php echo $paginaAtual?>href="#">
					<?php echo $paginaAtual?>
				</a>
			</li>

			<li type="text" class="page-item">
				<a class=" flecha" href="<?php echo INCLUDE_PATH_PAINEL; ?>galeria?pagina=<?php echo $paginaAtual + 1 ?>">
					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
		</ul>
	</nav>
</div>
<?php
$totalPaginas = ceil(count(Painel::selectA('tb_admin.cartas')) / $porPagina);
for($i = 1; $i <= $totalPaginas; $i++){
	if($i == $paginaAtual)
		'<a class="page-selected page-link" href="'.INCLUDE_PATH_PAINEL.'galeria?pagina='.$i.'"></a>';
	//	else
	echo '<a href="'.INCLUDE_PATH_PAINEL.'galeria?pagina='.$i.'">'.$i.'</a>';

}
?>




</div><!--paginacao-container-->
	</div><!--container-->
	 </div><!--wraper-table-->
			</div><!--box-content-->
			</div><!--especialidad-->

		</div><!--center-->
	 <div class="clear"></div>
	</section><!--especialidades-->

