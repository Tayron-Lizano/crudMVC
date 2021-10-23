<?php
 require ("model/config.php");

class Conexion{

	protected $link;

	public function __construct(){

		try{
			$this->link = new PDO ("mysql:host=". HOST .";dbname=". DB, USER, PASS);
			$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $this->link;

		}catch(PDOException $e){

			die("Error: ". $e->getMessage() . "<br> Code: ". $e->getCode() . "<br> line: ". $e->getLine()); 

		}



	}

}


?>
