<?php
session_start();
if (!isset($_SESSION['USER'])) {include "autantification.php" ; exit();}
require_once "data.php";

if (!isset($_GET['CodeE'])){
	$erreur['CodeE'] = "l'etudiant n'est pas definie";
}
if (!isset($_GET['CodeM'])){
	$erreur['CodeM'] = "le module n'est pas definie";	
}
if (!isset($_GET['Note'])){
	$erreur['Note'] = "note non definie";
}elseif ($_GET['Note'] >=20 || $_GET['Note'] <=0 ){
	$erreur['Note'] = "la note doit etre entre 0 et 20";
}


if (!isset($erreur)){
	setNote($_GET['CodeE'],$_GET['CodeM'],$_GET['Note']);
	header('location: listeEtudiant.php');
}else {
	include 'modifNote.php';
}
