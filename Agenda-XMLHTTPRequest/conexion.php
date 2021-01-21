<?php


class Conexion {

	public function conectar () {
		$cn = new PDO(
			'mysql:host=localhost;dbname=agenda',
			'root',
			'',
			array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
			)
			
		);
		return $cn;
	}

}
