<?php
require("views/response.php"); //view
require 'models/FiliereManager.php';

function Filiere_listeAction(array $d = null){
	$filieres = getListeFilieres();
	views('Filiere/vListeFiliere.php', ['filieres' => $filieres]);
}



function Filiere_ajouterAction(array $d = null){
	$erreur = [];
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(empty($_POST['codeF'])) $erreur['codeF'] = "veuiller entrer le code de filiere ";
		if(len($_POST['codeF']) >5) $erreur['codeF'] = "l'abreviation depasse 5 charactere";

		if(empty($_POST['IntituleF'])) $erreur['IntituleF'] = "veuiller entrer le Intitule de la filiere ";

		if(!isset($erreur)){
			$data = ['codeF' => $_POST["codeF"], 'Intitule' =>$_POST['IntituleF']];
			ajouterFiliere($data);
			header('location: index.php?module=Etudiant&action=liste&codeF='.$_POST['codeF']);
		}

	}	
	views('Filiere/vFormAjouterFiliere.php');

}

function Filiere_modifierAction(array $d ){
	if(empty($_GET['codeF']))
		throw new Exception("vous n'aver pas choisie la filiere a modifier");
	$codeF = $_GET['codeF'];

	$data = [];
	$erreur = [];
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(empty($_POST['codeF'])) $erreur['codeF'] = "veuiller entrer le code de filiere ";
		if(len($_POST['codeF']) >5) $erreur['codeF'] = "l'abreviation depasse 5 charactere";

		if(empty($_POST['IntituleF'])) $erreur['IntituleF'] = "veuiller entrer le Intitule de la filiere ";

		if(!isset($erreur)){
			$data = ['codeF' => $_POST["codeF"], 'Intitule' =>$_POST['IntituleF']];
			modifierFiliere($data);
			header('location: index.php?module=Etudiant&action=liste&codeF='.$_POST['codeF']);
		}

	}	
	
	$filiere = getDetailFiliere($codeF);
	$data["filiere"] = $filiere;
	if (isset($erreur)) $data["erreur"]=$erreur;
	views('Filiere/vFormModifierFiliere.php', ["data" => $filiere, "erreur" => $erreur]);

}

function Filiere_supprimerAction(array $d){
	if (empty($d["CodeF"]))
		throw new Exception("Vous n'avez pas fourni le code de la filière à Supprimer");
	elseif(!is_string($d["CodeF"])) 
		throw new Exception("Le code fourni n'est pas valide pour une filière");
	else
		supprimerFiliere($d["CodeF"]);
	//normalement, on doit vérifier est ce que l'opération s'est bien déroulée
	//après la suppression, on affiche la liste des étudiants
	header ("location: index.php?module=filiere&action=liste");	
}