
<?php

	$cartas = Painel::selectAll('tb_admin.cartas')

?>
<div class="box-content">
	<div class="wraper-table">

		<div class="w33 left  table">
		<?php foreach ($cartas as $carta => $value) {?>
				<div id="target" class="center table">		
					<div class="id"><?php echo $value['id']; ?></div>
					<div class="nome"><?php echo $value['nome']; ?></div>
					<div class="cont"><?php echo $value ['cont']; ?></div>
					<div class="audio"><audio controls src="<?php echo BASE_DIR_AUDIO.$value['audio'];?>"></audio></td>
					</div>
				</div><!--table-->
		<?php   } ?>
	</div><!--wraper-table-->


</div><!--box-content-->
