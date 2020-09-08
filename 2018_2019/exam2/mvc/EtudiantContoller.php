<?php
/*
getListe
ajouterEtudiant
supprimerEtudiant
getLike
updateEtudiant
*/


function ajaxAction(){
	$liste = getLike ($_GET['recherche']);
	$taile = size(getListe());
	require 'Views/vInner.php';
}
function listeAction(){
	$liste =getListe(); 
	views("vListe"["etudiants"=>$liste,"taile" => size($liste)]);
}
function supprimerAction (){
	if(!isset($_GET['Code'])){
		throw new Exeption("l'etudiant que vous demander n'existe pas");
	}
	supprimerEtudiant($_GET['Code']);
	header("location: index.php?action=liste");	
}
// ****** no login and no disconnect ?? ********
function connAction(){
	// work
}

function disconnectAction(){
	session_destroy();
	header("location: index.php");
}
// most likely not neaded
function indexAction(){
	views("vIndex");
}
function ajouterAction(){
	if($_SERVER['REQUEST_METHODE'] =="POST"){
		if (!isset($_POST['Code'])) $erreur['Code'] = "code vide ";
		if(!isset($_POST['Nom'])) $erreur ['Nom'];
		if(!isset($_POST['Prenom'])) $erreur['Prenom'];
		// *************************
		if(!isset($erreur)){
			ajouterEtudiant(["Code"=>$_POST['Code'],"Nom"=>$_POST['Nom'],"Prenom"=>$_POST['Prenom']]);
			header("location: index.php?action=liste");
		} 

	}
	views("vAjouter",["err"=>$erreur]);

}
function modifierAction(){
	if($_SERVER['REQUEST_METHODE'] =="POST"){
		if (!isset($_POST['Code'])) $erreur['Code'] = "code vide ";
		if(!isset($_POST['Nom'])) $erreur ['Nom'];
		if(!isset($_POST['Prenom'])) $erreur['Prenom'];
		//**************************
		if(!isset($erreur)){
			modifierEtudiant(["Code"=>$_POST['Code'],"Nom"=>$_POST['Nom'],"Prenom"=>$_POST['Prenom']]);
			header("location: index.php?action=liste");
		} 

	}
	$etu = getEtudiant($_GET['Code']);
	views("vModier",["err"=>$erreur,"etudint" =>$etudiant]);
}