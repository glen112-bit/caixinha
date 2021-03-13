
<?php

  $usuariosOnline = Painel::listarUsuariosOnline();

  $pegarVisitasTotais = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
	$pegarVisitasTotais->execute();
	$pegarVisitasTotais = $pegarVisitasTotais->rowCount();

 	$pegarVisitasHoje = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
	$pegarVisitasHoje->execute(array(date('Y-m-d')));
	$pegarVisitasHoje = $pegarVisitasHoje->rowCount();

	$pegaCarta = MySql::conectar()->prepare("SELECT * FROM `tb_admin.audio`");
	$pegaCarta

?>
<div class="box-content w100">
		<h2><i class="fa fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>

		<div class="box-metricas">
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Usuários Online</h2>
					<p><?php echo count($usuariosOnline); ?></p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Total de Visitas</h2>
					<p><?php echo $pegarVisitasTotais; ?></p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Visitas Hoje</h2>
					<p><?php echo $pegarVisitasHoje; ?></p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="clear"></div>
		</div><!--box-metricas-->

</div><!--box-content-->

<div class="box-content w50 left">
<h2><i class="fa fa-rocket" aria-hidden="true"></i> Usuários Online no Site</h2>

	<div class="table-responsive">
		<div class="row">
			<div class="col">
				<span>IP</span>
			</div><!--col-->
			<div class="col">
				<span>Última Ação</span>
			</div><!--col-->
			<div class="clear"></div>
		</div><!--row-->

		<?php
			foreach ($usuariosOnline as $key => $value) {

		?>
		<div class="row">
			<div class="col">
				<span><?php echo $value['ip'] ?></span>
			</div><!--col-->
			<div class="col">
				<span><?php echo date('d/m/Y H:i:s',strtotime($value['ultima_acao'])) ?></span>
			</div><!--col-->
			<div class="clear"></div>
		</div><!--row-->
		<?php } ?>
	</div><!--table-responsive-->


<div class="pagination">
    <div class="pagination-container">
        <div class="pagination-hover-overlay"></div>
        <a href="#0" class="pagination-prev">
            <span class="icon-pagination icon-pagination-prev">
                <i class="icon material-icons">
                    keyboard_arrow_left
                </i>
            </span>
        </a>

        <a href="#0" class="pagination-page-number">1</a>
        <a href="#0" class="pagination-page-number">2</a>
        <a href="#0" class="pagination-page-number">3</a>
        <a href="#0" class="pagination-page-number">4</a>
        <a href="#0" class="pagination-page-number">5</a>
        <a href="#0" class="pagination-page-number">6</a>
        <a href="#0" class="pagination-page-number">7</a>

        <a href="#0" class="pagination-next">
            <span class="icon-pagination icon-pagination-next">
                <i class="icon material-icons">
                    keyboard_arrow_left
                </i>
            </span>
        </a>
    </div>
</div>

</div><!--box-content-->

<div class="box-content w50 right">
<h2><i class="fa fa-rocket" aria-hidden="true"></i> Usuários do Painel</h2>

	<div class="table-responsive">
		<div class="row">
			<div class="col">
				<span>Nome</span>
			</div><!--col-->
			<div class="col">
				<span>Cargo</span>
			</div><!--col-->
			<div class="clear"></div>
		</div><!--row-->

		<?php
			$usuariosPainel = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`");
			$usuariosPainel->execute();
			$usuariosPainel = $usuariosPainel->fetchAll();
			foreach ($usuariosPainel as $key => $value) {

		?>
		<div class="row">
			<div class="col">
				<span><?php echo $value['nome'] ?></span>
			</div><!--col-->
			<div class="col">
				<span><?php echo pegaCargo($value['cargo']); ?></span>
			</div><!--col-->
			<div class="clear"></div>
		</div><!--row-->
		<?php } ?>
	</div><!--table-responsive-->
</div><!--box-content-->

<div class="clear"></div>

</div><!--content-->

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>/js/main.js"></script>
