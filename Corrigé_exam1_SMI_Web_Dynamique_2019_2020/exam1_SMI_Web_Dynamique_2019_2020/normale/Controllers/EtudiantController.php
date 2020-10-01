<?php 
require_once("Models/EtudiantManager.php");
/////////////// Les actions ////////////////
function FilieresAction() {
	$filieres= getAllFilieres() ;
	return render("vFilieres", ["filieres" => $filieres]) ;
}

function ResultatAction() {
	$f = isset($_GET["f"])? $_GET["f"] : "SMI" ;
	$variables["filiere"]= $f;
	$variables["etudiants"] = getEtudiantsReussis($f) ;
	$variables["nombre"] = count($variables["etudiants"]);
	$variables["max"] = getMeilleureNote($f);
	return render("vEtudiants", $variables) ;
}

//////////////// fonction utilitaire pour afficher ///////////////
function render ($view, array $variables) {
	extract($variables);
	$file ="Views/".$view.".php";

	if (file_exists($file)) {
		ob_start();
		require ($file);
		$view= ob_get_clean(); 
	}	

	/******template ****/
	ob_start();
	require("Views/template.php");
	$output = ob_get_clean();
		
	/**** Envoie de l'output *****/
	return $output;
}
