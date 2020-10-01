<?php
require_once("Controllers/EtudiantController.php"); 
try{
	//Routeur...
	$action = isset($_GET["action"])? $_GET["action"] : "FilieresAction";
	
	//exécution de l'action
	if (is_callable($action)) {
			$page= $action();
			echo $page;
	}
	else
		throw new Exception("Cette action n'est pas autorisée");
}
catch(Exception $e) {
	die("Une erreur est survenue: " . $e->getMessage());
}
