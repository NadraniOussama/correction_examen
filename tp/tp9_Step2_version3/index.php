<?php 
try{
	session_start();
	
	//Routeur...
	$module = isset($_GET["module"])? $_GET["module"] : "Index";
	$action = isset($_GET["action"])? $_GET["action"] : "index";
	
	$Module = ucFirst($module);
	$action= $Module."_".$action."Action";
	
	//Access Control
	// if (!isset($_SESSION["Login"]) and $action != "User_optionsAction" ) {
	// 	$Module= "User";
	// 	$action= "User_connexionAction";
	// }
	
	if(file_exists("Controllers/".$Module."Controller.php")) {
		require_once ("Controllers/".$Module."Controller.php");
		if (is_callable($action)) {
			$action($_REQUEST);
		}
		else
			echo $action; exit();
			throw new Exception("Cette action n'est pas autorisée");
	}
	else
		throw new Exception("Ce module n'est pas pris en charge!...");
	
		
}
catch(Exception $e) {

	//$message = $e->getMessage();
	//require ("views/vError.php");
	afficherReponse("vError.php",["message" => $e->getMessage()]);

}
