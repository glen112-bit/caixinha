<?php

  session_start();
  date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
	if($class == 'Email'){
/*			include('classes/PHPMailer/PHPMailerAutoload.php');
 */	}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);


	define('INCLUDE_PATH','https://foradacaixa.cf/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

	define('BASE_DIR_PAINEL',__DIR__.'/painel');
  define('BASE_DIR_AUDIO',INCLUDE_PATH.'cartas/');
  //conectar con banco de datos
	define('HOST','localhost');
	define('USER','admin_caixa');
	define('PASSWORD','121212');
	define('DATABASE','admin_caixa');

	//funciones
	define('NOME_EMPRESA','Glen/Code');
	//Funções do painel
	function pegaCargo($indice){
		return Painel::$cargos[$indice];
	}

  function selecionadoMenu($par){
		/*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="menu-active"';
		}
	}

	function verificaPermissaoMenu($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			echo 'style="display:none;"';
		}
	}

	function verificaPermissaoPagina($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			include('painel/pages/permissao_negada.php');
			die();
		}
	}

	function recoverPost($post){
		if(isset($_POST[$post])){
			echo $_POST[$post];
		}
	}
?>
