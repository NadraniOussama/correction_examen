<?php 
function getCn(){
	$user = 'root';
	$password = '';
	$db = 'mysql:host=localhost;dbname=test';

	try {
		$cn = new PDO($db, $user, $password);
	}
	catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage() );
	}
 	return $cn;
}

function getEtudiants(){
	$sql = "SELECT * FROM etudiant";
	return  getCn()->query($sql)->fetchAll();
};

