

<?php
 include('../config_local.php');
//  include('../config_vercel.php');
  if(Painel::logado() == false){
    include('login.php');
  }else{
    include('main.php');
  }
?>
