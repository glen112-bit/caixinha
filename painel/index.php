

<?php
// include('../config_web_com.php');
  include('../config_local.php');
  if(Painel::logado() == false){
    include('login.php');
  }else{
    include('main.php');
  }
?>
