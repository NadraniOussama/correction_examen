<?php 
require_once("cn.php");

function getDetailEtudiant($code) {
	return getCn()->query("select * from Etudiant where Code='$code'")-> fetch();
}

function getListeEtudiants($f=NULL){
	$clauseWhere= empty($f)? " ": " where Filiere = '$f' ";
	return getCn()->query("select* from etudiant " . $clauseWhere)->fetchAll();
}

function ajouterEtudiant($t){
	getCn()->prepare("insert into Etudiant values (?,?,?,?,?)")->execute($t);	
}

function updateEtudiant($t){
	getCn()->prepare("update Etudiant set Code=?, Nom=?, Prenom=?, Filiere=?, Note=? where Code=?")->execute($t);	
}

function supprimerEtudiant($c){

	$f= getCn()->query("select Filiere from Etudiant where Code='$c'")->fetchColumn();
	getCn()->prepare("delete from Etudiant where Code=?")->execute([$c]);
	return $f;
}
