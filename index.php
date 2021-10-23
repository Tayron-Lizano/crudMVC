<?php
require("controller/controller.php");

$controlInstance = new control();

if(!isset($_REQUEST['c'])){
	$controlInstance->home();
}else{
	$action = $_REQUEST['c'];
	call_user_func(array($controlInstance, $action));

	/*ESTO es lo equivalente a mi function CALL_USER_FUNC

	 * if (isset($_REQUEST['c']== "home")){
		$controlInstance->home();
	}else if(isset($_REQUEST['c']== "save")){
		$controlInstance->save();
	}*/

}



?>


