<?php 
require_once("models/conn.php");

function getDetail($id)
{
	$cleanId=cleanString($id);
	$result = getCn()->query("SELECT * from `etudiant` where `code_E` = '$cleanId'")->fetch();#first and only student of the query result

	if(is_null($result)) return null; else return $result;
		
};

function getListeEtudiants($filiere)
{
 if(isset($filiere))
 {
	$cleanStr=cleanString($filiere);
	return getCn()->query("SELECT * from etudiant  where  filiere ='$cleanStr';")->fetchall();
 }else{
	return getCn()->query("SELECT * from etudiant;")->fetchall();
 }
};

function supprimerEtudiant($codeE)
{
	$code=cleanString($codeE);
	$f= getCn()->query("SELECT Filiere from Etudiant where Code='$c'")->fetchColumn();
	getCn()->query("DELETE FROM `etudiant` WHERE `code_E` = '$code'");
	return $f;
};

function modifierEtudiant($data)
{
	$clean=cleanDataArray($data);
	getCn()->exec("
		UPDATE `etudiant` SET `code_E` = '".$clean["code"]."' ,
		 `first_name` = '".$clean["nom"]."',
		 `last_name` = '".$clean["prenom"]."',
		  `telephone` = '".$clean["telephone"]."',
		  `filiere` = '".$clean["filiere"]."',
		  `email` = '".$clean["email"]."',
		  `note` = ".$clean["note"]."
		   WHERE `etudiant`.`code_E` = '".$clean["code"]."';
		");
};

function ajouterEtudiant($data)
{
	$clean=cleanDataArray($data);
	$sql ="INSERT INTO `etudiant` (`code_E`, `first_name`, `last_name`, `telephone`, `email`, `filiere`, `password`, `note`) VALUES ('".$clean["code"]."', '".$clean["nom"]."', '".$ln=$clean["prenom"]."', '".$clean["telephone"]."', '".$clean["email"]."', '".$clean["filiere"]."', '".$clean["password"]."','".$clean["note"]."');";

	getCn()->exec($sql);
};
