<?php
require ("models/model.php");
require ("contolers/etudiantControler.php");
// require ("view.php");
// require ("controler.php");

try{
  $originlAction = (!empty($_GET["action"]))? $_GET["action"]: "index";

 $action= (!isset($_SESSION["user"]))? $originlAction : "verifierLogin";
switch ($action) {
case 'index':
	indexAction();
 break;
case 'liste':
	listeAction();
 break;
case 'detail':
	detailAction();
 break;
case 'ajouter' :
	ajouterAction();
 break;
case 'supprimer':
	supprimerAction();
 break;
case 'modifier':
	modifierAction();
 break;
 case 'option' :
	optionAction();
 break;
 case 'verifierLogin':
	loginAction();
 break;
default:
indexAction();
 }
}
catch(Exception $e) {//need more catch and detailed exploration of exeption this is quite shit even tho i can'y grassep how to make it better 
 //  $data["errorMessage"]= $e->getMessage();
 // protoview("vError", $data);
die($e->getMessage());
}

?>
