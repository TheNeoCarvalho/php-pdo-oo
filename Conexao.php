<?php

class Conexao {

public function Con(){
	try{
		$pdo = new PDO('mysql:host=localhost; dbname=pdo','root','', 
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	}catch(PDOException $err){
		echo "Error: $err";
	}
	return $pdo;
}

}