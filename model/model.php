<?php

require ("model/conexion.php");

class ModelSentencias extends Conexion {

	public function __construct(){
	 	parent::__construct();
	}

	public function makeSelect(){

		$sql = "SELECT * FROM  empleados";
		$result = $this->link->prepare($sql);
		$result->execute();
		$rows = $result->fetchAll(PDO::FETCH_BOTH);

		return $rows;
	
	}

	public function makeInsert($nombre, $apellido, $edad, $genero, $departamento, $sueldo){

		$sql = "INSERT INTO empleados (nombre, apellido, edad, genero, departamento, sueldo) values (:NOM, :APE, :EDAD, :GEN, :DEP, :SUE)" ;
		$result = $this->link->prepare($sql);
		$result->execute(array(":NOM"=>$nombre,":APE"=>$apellido, ":EDAD"=>$edad, ":GEN"=>$genero, ":DEP"=>$departamento, ":SUE"=>$sueldo));


	}

	public function makeDelete($id){

		$sql = "DELETE FROM empleados WHERE id = :ID";
		$result = $this->link->prepare($sql);
		$result->execute(array(":ID"=>$id));


	}

	public function makeSelectUpdate($id){
		$sql = "SELECT * FROM empleados WHERE id = :ID";
		$result = $this->link->prepare($sql);
		$result->execute(array(":ID"=>$id));

		$row = $result->fetchAll(PDO::FETCH_BOTH);

		return $row;
	}

	public function makeUpdate($id, $nombre, $apellido, $edad, $genero, $departamento, $sueldo){
		$sql = "UPDATE empleados SET nombre=:NOM, apellido=:APE, edad=:EDAD, genero=:GEN, departamento=:DEP, sueldo=:SUE WHERE id=:ID";
		$result = $this->link->prepare($sql);
		$result->execute(array(":NOM"=>$nombre, ":APE"=>$apellido, ":EDAD"=>$edad, ":GEN"=>$genero, ":DEP"=>$departamento, ":SUE"=>$sueldo, ":ID"=>$id));
	}

}


?>
