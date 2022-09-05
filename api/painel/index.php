<?php
$myUrl = $_GET['url'];
if($myUrl == 'http://localhost/caixinha/api/'){
	include('config_local.php');
} else if( $myUrl == 'https://caixinha-tau.vercel.app' ){
	include('config_vercel.php');
}else {
	include('config_web.php');
}

?>


<?php
 //include('../config_local.php');
//  include('../config_vercel.php');
  if(Painel::logado() == false){
    include('login.php');
  }else{
    include('main.php');
  }
?>
