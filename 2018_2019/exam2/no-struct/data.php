<?php 
function getCn(){
	$db ="mysql: host=localhost;dbname=DB";
	$user ="root";
	$pwd="";
	try{
		$cn = PDO($db,$user,$pwd);
	}catch(PDOException $e){
		die("erreur de connection");
	}
	return $cn;
}

function getEtudiants(){
	return getCn()->query("SELECT * FROM Etudiant ")->fetchall();
}

function getEtudiantsLike($str){
  return getCn()->query("SELECT * FROM Etudiant 
  	where Nom like '%$str%' or Prenom like '%$str%'");
}
function getENum(){
	return getCn()->query("SELECT count(*) from Etudiant")->fetch();
}
function supprimer($Code){
	getCn()->exec("DELETE FROM Etudiant where Code = '$Code'");
}
function ajouter($t){
	getCn()->prepare("INSERT INTO Etudiant values (?,?,?)")->execute($t['Code'],$t['Nom'],$t['Prenom']);
}