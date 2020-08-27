<?php
    
$loginS[]= array('user' => "oussama" , 'password' =>"12345678");
$loginS[]= array('user' => "moi" , 'password' =>"douz");
//need to delete the tables above
function getfilieres(){ // add ajouter sup mod
	$filieres[]=array('codeF' =>"SMI" ,'intituler' => "Science Mathematique et Informatique" );
	$filieres[]=array('codeF' =>"SMA" ,'intituler' => "Science Mathematique  Appliquer" );
	$filieres[]=array('codeF' =>"SMP" ,'intituler' => "Science Mathematique et phisique" );
	return $filieres;
};
function getMax($liste){//controler
	if(isset($liste[0][7])){
		$MAX=$liste[0][7];
 	 	for ($i=0; $i < count($liste) ; $i++) {
 	 		if($MAX < $liste[$i][7])
 	 			$MAX=$liste[$i][7];
 	 	}
 		return $MAX;
 	}
 };
 function getMention($etudiant){//controler
 	$note=$etudiant[7];
 	if ($note<10 && $note>=0) {
 		return "non valider";
 	}elseif ($note<12) {
 		return "asser bien";
 	}
 	elseif ($note<14) {
 		return "passable";
 	}elseif ($note<16) {
 		return "bien";
 	}elseif($note<=20) {
 		return "trés bien";
 	}elseif ($note==NULL) {
 		return "";
 	}
 	else{
 		return "la note n'est pas valable";
 	}
};
function getCn(){//model
	$user = 'root';
	$password = '';
	$db = 'mysql:host=localhost;dbname=SMI2020';
	try {
		$conn = new PDO($db, $user, $password);
	}
	catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage() );
	}
	return $conn;
};

function checkLogin($user,$pass){
	for ($i=0; $i <count($loginS) ; $i++) {
		if ($user!=$loginS[$i]['user'] || $pass!=$loginS[$i]['password']) {
			return true;
		}
	}
	return false;
};
function cleanString($str){//model
	$str1=addslashes($str);
	$str2=strtolower($str1);
return trim($str2);
};
function cleanDataArray($data){//model
	$return=array();
	foreach ($data as $key => $value) {
		$return[$key]=(!is_null($value))? cleanString($value): "NULL";
	}
return $return;
};
function fetchQueryResults($sql){//model
   #table etidiant:   code_E | first_name | last_name | phone | email | major | password | grade
	$conn=getCn();
	try{
	return $conn->query($sql)->fetchall();

	}catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage() );
	}
};
function executeQuery($sql){//model
	$conn=getCn();
	$conn->exec($sql);
};
function getDetail($id){//model
	$cleanId=cleanString($id);
	$result=fetchQueryResults("SELECT * from `etudiant` where `code_E` = '$cleanId'");#first and only student of the query result
	if(is_null($result))
		return null;
	return $result[0];
}
function getListeEtudiants($filiere){//model
if(isset($filiere)){
	$cleanStr=cleanString($filiere);
	return fetchQueryResults("SELECT * from etudiant  where  filiere ='$cleanStr'");#
 }else{
	return fetchQueryResults("SELECT * from etudiant;");#
 }
};
function supression($codeE){//model
	$code=cleanString($codeE);
	$conn=getCn();
	$sql="DELETE FROM `etudiant` WHERE `code_E` = '$code'";
	$conn->query($sql);
};
function modifier($data){//model
	$clean=cleanDataArray($data);
	# `password` = '".$clean["password"]."',
	executeQuery("
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
function ajouterEtudiant($data){//model
 //INSERT INTO `etidiant` (`code_E`, `first_name`, `last_name`, `phone`, `email`, `major`, `password`, `grade`) VALUES ('E_56', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

	$clean=cleanDataArray($data);

	$c=$clean["code"];
	$fn=$clean["nom"];
	$ln=$clean["prenom"];
	$phone=$clean["telephone"];
	$major=$clean["filiere"];
	$password=$clean["password"];
	$email=$clean["email"];
	$grade=$clean["note"];

	$sql ="INSERT INTO `etudiant` (`code_E`, `first_name`, `last_name`, `telephone`, `email`, `filiere`, `password`, `note`) VALUES ('$c', '$fn', '$ln', '$phone', '$email', '$major', '$password','$grade');";
	// echo $sql;
	executeQuery($sql);
};
