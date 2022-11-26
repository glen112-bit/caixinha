<?php
			if(isset($_COOKIE['lembrar'])){
				$user = $_COOKIE['user'];
				$password = $_COOKIE['password'];
				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
							$info = $sql->fetch();
							//Logamos com sucesso.
							$_SESSION['login'] = true;
							$_SESSION['user'] = $user;
							$_SESSION['password'] = $password;
							$_SESSION['cargo'] = $info['cargo'];
							$_SESSION['nome'] = $info['nome']; 
							$_SESSION['img'] = $info['img'];
							header('Location: '.INCLUDE_PATH_PAINEL);
							die();
					}
				}
			
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/css/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
	<meta name="keywords" content="palavras-chave,do,meu,site">

  <link rel="<?php echo INCLUDE_PATH_PAINEL; ?> stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel de Controle</title>
</head>
<body>
 <div class="box-login">

		<?php
				if(isset($_POST['acao'])){
						$user = $_POST['user'];
						$password = $_POST['password'];
						$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
						$sql->execute(array($user,$password));
						if($sql->rowCount() == 1){
							$info = $sql->fetch();
							//logado
							$_SESSION['login'] = true;
							$_SESSION['user'] = $user;
							$_SESSION['password'] = $password;
							$_SESSION['cargo'] = $info['cargo'];
							$_SESSION['nome'] = $info['nome'];
							$_SESSION['img'] = $info['img']; 
					if(isset($_POST['lembrar'])){
						setcookie('lembrar',true,time()+(60*60*24),'/');
						setcookie('user',$user,time()+(60*60*24),'/');
						setcookie('password',$password,time()+(60*60*24),'/');
					}
							header('Location: '.INCLUDE_PATH_PAINEL);
							die();
						}else{
							//no
							echo '<div class="erro-box"><i class="fa fa-times"> </i>usuario, ou senha incorretos</div>'; 		

						}
					}
			?>
   <h2>Efetue o login:</h2>
		<form method="post">
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="password" placeholder="Senha..." required>
			<div class="form-group-login left">
				<input type="submit" name="acao" value="Logar!">
				<a style="
									padding: 0.65rem;
									cursor: pointer;
									margin-top: 10px;
									font-size: 14px;
									background: #00bfa5;
									color: white;
									border: 0;"
					 href="<?php echo INCLUDE_PATH; ?>"
						value="Home!"
						>Home!</a> 
			</div>
			<div class="form-group-login right">
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar" />
			</div>
			<div class="clear"></div>
		</form>
</div><!--box-login-->
</body>
</html>



