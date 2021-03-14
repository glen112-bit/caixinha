<?php include('config_local.php'); ?>
<?php Site::updateUsuarioOnline();?>
<?php Site::contador();?>

<!DOCTYPE html>
<html>
<head>
	<title>Accecibilidade fora da Caixinha</title>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/css/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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

  	if(isset($_POST['acao'])){
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
	}
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
<header>
		<div class="center">
			<div class="logo left"><a href="<?php echo INCLUDE_PATH_PAINEL; ?>">Accecibilidade ForadaCaixinha</a></div><!--logo-->

    	<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>galeria">Galeria</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>galeria">Galeria</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
     <div class="clear"></div>
		</div><!--center-->
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
				include('pages/home.php');
			}
		}


?>
</div><!--container-principal-->
<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
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
<script src="<?php echo INCLUDE_PATH; ?>cartas.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>
</html>
