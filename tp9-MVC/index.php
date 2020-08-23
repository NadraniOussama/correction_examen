<?php



try{
	session_start();

	
	$module = (!empty($_GET["module"]))? $_GET["module"]: "Index";
	$action = (!empty($_GET["action"]))? $_GET["action"]: "index";


	$Module = ucfirst($module);
	$action = $Module.'_'.$action."Action";

	//Access Control
	if (!isset($_SESSION["user"]) and $action != "User_optionsAction")# and $action != "Index_indexAction") 
	{ // and $action != "User_optionsAction" 
		$Module= "User";
		$action= "User_connexionAction";
	}

	if(file_exists('controlers/'.$module.'Controler.php'))
	{	
		require 'controlers/'.$Module.'Controler.php';
		if (is_callable($action)) 
		{
			$action($_REQUEST);
		}
		else
			throw new Exception("Cette action n'est pas autorisée =>".$action);
	}
	else throw new Exception("Ce module n'est pas pris en charge!...");
	

}
catch(Exception $e) {//need more catch and detailed exploration of exeption this is quite shit even tho i can'y grassep how to make it better 
  $errorMessage = $e->getMessage();
  require("views/vError.php");
}

?>
