<?php 
function getCn(){
	try{
		$db ="Mysql: host=localhost;dbname=exam2020";
		$user="root";
		$pwd="";
		$cn = new PDO($db,$user,$pwd);
		return $cn;
	}catch(PDOExeption $e){
		views("vError", "err"=>$e);
	}
}

function getListe(){
	return getCn()->query("SELECT *  FROM `Etudiant`")->fetchAll();
}
function getLike($str){
	return getCn()->query("SELECT * FROM `Etudiant` WHERE `Nom` LIKE '$str%' or `Prenom` LIKE '$str%'")->fetchAll();
}
function getDetail($code){
	return getCn()->query("SELECT * FROM Etudiant WHERE Code = $code ")
}
function ajouterEtudiant($t){
getCn()->exec("INSERT INTO `Etudiant` VALUES (".$t['Code'].",".$t['Nom'].",".$t['Prenom'].")");//$t is table
}
function supprimerEtudiant($code){
	getCn()->exec("DELETE FROM `Etudiant` WHERE `Code`='$code'");
}

function updateEtudiant($t){
	getCn()->exec("UPDATE `Etudiant` SET Nom =".$t['Nom']."Prenom =".$t['Prenom']."WHERE Code =".$t['Code']."  ");
}
// Etudiant(Code, Nom, Prenom)