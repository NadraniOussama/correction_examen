<?php
session_start();
if (!isset($_SESSION['USER'])) {include "autantification.php" ; exit();}
require_once "data.php";

if (!isset($_GET['CodeE'])){
	$_GET["Err"] = "l'etudiant n'est pas definie";
}
if (!isset($_GET['CodeM'])){
	$_GET["Err"] = "le module n'est pas definie";	
}
if (!isset($_GET['Note'])){
	$_GET['Err'] = "note non definie";
}
if (isset($_GET['Err'])){
	setNote($_GET['CodeE'],$_GET['CodeM'],$_GET['Note']);
	header('location: listeEtudiant.php');
}
