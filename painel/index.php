<?php
  include('../config_web.php');
  if(Painel::logado() == false){
    include('login.php');
  }else{
    include('main.php');
  }
?>
