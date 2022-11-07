<?php
  if(isset($_GET['loggout'])){
   Painel::loggout();
  }
?>
<?php Site::updateUsuarioOnline();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Painel de Controle</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>./css/style.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/css/css/all.css">
</head>
<body>

<div class="menu">
 <div class="menu-wrapper">
  <div class="box-usuario">
  <?php
    if($_SESSION['img'] == ''){
  ?>
     <div class="avatar-usuario">
       <i class="fa fa-user"></i>
     </div><!--avatar-usuario-->
  <?php }else{ ?>
     <div class="imagem-usuario">
       <img class="avatar-img" src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
     </div><!--avatar-usuario-->
  <?php } ?>
  <div class="nome-usuario">
    <p><?php echo $_SESSION['nome']; ?></p>
    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
  </div><!--nome-usuario-->
   </div><!--box-usuario-->
  <div class="items-menu">
 <h2><a<?php selecionadoMenu('home') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>home">Home</a></h2>
 <h2>Cadastro</h2>
  <a<?php selecionadoMenu('cadastrar-depoimento') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
  <a<?php selecionadoMenu('cadastrar-servico') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviços</a>
  <a<?php selecionadoMenu('cadastrar-slides') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>
  <h2>Gestao</h2>
  <a<?php selecionadoMenu('listar-depoimentos') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimento</a>
  <a<?php selecionadoMenu('listar-servicos') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
  <!--<a<?php selecionadoMenu('listar-slides') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>-->
  <h2>Galeria</h2>
  <a<?php selecionadoMenu('galeria') ?> href="<?php echo INCLUDE_PATH ?>painel/galeria">Galeria</a>
  <h2>Administracao do Painel</h2>
  <a<?php selecionadoMenu('editar-usuario') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuario</a>
  <a<?php selecionadoMenu('adicionar-usuario') ?><?php verificaPermissaoMenu(2) ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuarios</a>
  <h2>Configuraçao Geral</h2>
  <a<?php selecionadoMenu('editar') ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar">Editar</a>
  </div><!--items-menu-->
 </div><!--menus-wrapper-->
</div><!--menu-->

  <header>
    <div class="center">
      <div class="menu-btn">
        <i class="fa fa-bars"></i></a>
     </div><!--menu-btn-->

     <div class="loggout">
      <a <?php if(@$_GET['url'] == ''){ ?> style="background: #60727a;padding: 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"> <i class="fa fa-home"></i> <span>Página Inicial</span></a>
      <a <?php if(@$_GET['url'] == ''){ ?> style=" background: #60727a;padding: 15px;" <?php } ?> href="<?php echo INCLUDE_PATH ?>"> <i class="fa fa-box-open"></i> <span>Fora da Caixinha</span></a>
      <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"<i class="loggout"><i class="fas fa-times"></i><span> Sair</span></a>
     </div><!--logout-->

     <div class="clear"></div>
    </div><!--center-->
  </header>

<div class="content">

  <?php Painel::carregarPagina(); ?>
<figure class="box-content">
  <img class="clear center bt-img" src="../images/WhatsApp Image 2021-05-06 at 12.45.01 copia.jpg" alt="album">
</figure>
</div><!--content-->

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>/js/main.js"></script>
</body>
</html>
