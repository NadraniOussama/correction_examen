<?php
function ouvrirConnexion(){
	$user = 'root';
	$password = 'password';
	$db = 'mysql:host=localhost;dbname=ExamSMI2015';
	try {
		$cn = new PDO($db, $user, $password);
	}
	catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage() );
	}
	return $cn;
}

function insertComment($t) {
$cn = ouvrirConnexion();
$Rq = "insert into comment (pseudo,Comment,date,idArticle) values ('" . $t["Pseudo"] . "','" . $t["Comment"]  .  "'," . getDate() .  "," . $t["idArticle"] . ")";
$cn->exec($Rq);
}

function getArticle($id) {
$cn = ouvrirConnexion();
$Rq = "select * from Articles where idArticle= $id ";
$resultat = $cn->query($Rq);
return $resultat;
}

function getAllArticles() {
	$cn = ouvrirConnexion();
	return $cn->query("select * from Articles");
}

function getComments($idArticle) {
	$cn = ouvrirConnexion();
	return $cn->query("select * from Comments where idArticle= $idArticle");
}