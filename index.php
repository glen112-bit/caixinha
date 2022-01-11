<?php
//include('config_local.php');
//include('config_web_com.php');
include('config_web.php');
 ?>
<?php Site::updateUsuarioOnline();?>
<?php Site::contador();?>

<!DOCTYPE html>
<html>
<head>
	<title>Accecibilidade fora da Caixinha</title>
<!--	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/reset.css">
-->  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/css/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body>


	<?php

  /*if(isset($_POST['acao'])){
			//envie el formulario.
			if($_POST['email'] != ''){
				$email = $_POST['email'];
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					//tuddo certo
					$mail = new Email('foradacaixa.cf','test@foradacaixa.cf','121212','Glen');
					$mail->addAdress('correo@foradacaixa.cf','Glen');
					$info = array('assunto'=>'nuevo email cadastrado','corpo'=>$email);
					$mail->formatarEmail($info);
					if($mail->enviarEmail()){
						echo '<script>alert("email enviado com sucesso")</script>';
					}else{
						echo '<script>alert("algo deu errado")</script>';
					}
				}else{
					echo '<script>alert("email no valido")</script>';
				}

			}else{
				echo'<script>alert("campos vacios no son permitidos")</script>';
			}
}*/
		?>

<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;

			case 'galeria':
				echo '<target target="galeria" />';
				break;

		}
	?>
	<div class="sucesso">Formulario enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif" />
	</div><!--overlay-loading-->
<header style="padding-left:0rem">
		<div class="center">
			<div class="desktop logo left"><strong><h2><a  href="#""<?php echo INCLUDE_PATH_PAINEL; ?>"><p>oMundo<p>da<p>Darthi</p></a></h2></strong></div><!--logo-->

    	<nav class="desktop right">
				<ul>
					<li><a class="home" href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
<!--					<li><a href="<?php echo INCLUDE_PATH; ?>galeria">Galeria</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
-->					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
	<!--				<li><a href="<?php echo INCLUDE_PATH; ?>galeria">Galeria</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
 -->					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
     <div class="clear"></div>
		</div><!--center-->
<hr class="desktop">
<section style="text-align:center" class="desktop loja link">
	<div class="desktop loja ">
			<div style="color:white" class="desktop">Vamos pra Loja</div>
		<button class=" desktop ">
			 <a href="https://omundodadarthi.lojaintegrada.com.br" target="_blank"><i class="fas fa-cart-plus"></i></a>
		</button><!--button-->
	</div><!--center-->
</section>

	</header>
<div id="home" class="container-principal">
<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url != 'depoimentos' && $url != 'servicos' && $url != 'galeria'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/clean.php');
			}
		}


?>
</div><!--container-principal-->
<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
<button class="button">
	 <a href="https://omundodadarthi.lojaintegrada.com.br" target="_blank"><i class="fas fa-cart-plus"></i></a>
</button><!--button-->

	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/nuevo.js"></script>
<?php
		if($url == 'home' || $url == ''){
?>
  <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<?php  } ?>
	<?php
		if($url == 'contato' ){
?>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
<?php  } ?>
<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>
