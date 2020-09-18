<?php 
require_once("cn.php");

function getListeFilieres(){
	return getCn()->query("select* from filiere")->fetchAll();
}

function getDetailFiliere($code) {
	return getCn()->query("select * from Filiere where CodeF='$code'")-> fetch();
}

function ajouterFiliere($t){
	getCn()->prepare("insert into Filiere values (?,?)")->execute($t);	
}

function updateFiliere($t){
	getCn()->prepare("update Filiere set CodeF=?,IntituleF=? where CodeF=?")->execute($t);		
}

function supprimerFiliere($c){
	getCn()->prepare("delete from Etudiant where CodeF=?")->execute([$c]);
}
