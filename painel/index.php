

<?php
 // include('../config.php');
 include('../config_local.php');
  if(Painel::logado() == false){
    include('login.php');
  }else{
    include('main.php');
  }
?>
