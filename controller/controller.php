<?php
//================================================================================
//   MANERA MAS OPTIMA DE CONFIGURAR UN CONTROLADOR
//================================================================================

require ("model/model.php");

class  control{
	public $modelInstance;

	public function __construct(){
		$this->modelInstance = new ModelSentencias();
	}

	public function home(){
		$select = $this->modelInstance->makeSelect();
		require ("view/home.php");
	}

	public function save(){
		require ("view/save.php");
	}

	public function update(){
		if(isset($_REQUEST['id'])){
			$id = $_GET['id'];
			$row = $this->modelInstance->makeSelectUpdate($id);
		}
		require ("view/update.php");

	}

	public function insert(){
		$nombre = htmlentities(addslashes(strtoupper($_POST['nombre']))); 
		$apellido = htmlentities(addslashes(strtoupper($_POST['apellido'])));
		$edad = htmlentities(addslashes(strtoupper($_POST['edad'])));
		$genero = htmlentities(addslashes(strtoupper($_POST['genero'])));
		$departamento = htmlentities(addslashes(strtoupper($_POST['departamento'])));
		$sueldo = htmlentities(addslashes(strtoupper($_POST['sueldo'])));


		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$this->modelInstance->makeUpdate($id, $nombre, $apellido, $edad, $genero, $departamento, $sueldo);
		}else{
			
			$this->modelInstance->makeInsert($nombre, $apellido, $edad, $genero, $departamento, $sueldo);
		}

		header("location:index.php");
	
	}

	public function delete(){
		$id = $_GET['id'];
		$this->modelInstance->makeDelete($id);

		header ("location:index.php");
	}

}

?>
