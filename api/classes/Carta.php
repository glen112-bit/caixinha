<?php

class Carta
{
	public static function pegaCarta($id){
		$sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.cartas` WHERE  id = ?" );
		$sql->execute(array($id));
	}
		
}
