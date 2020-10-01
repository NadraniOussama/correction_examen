<?php 
function getCn(){
	static $cn;
	if(!$cn) $cn= new PDO("mysql:host=localhost;dbname=SMI2020", "root", "");
	return $cn;
}

function getAllFilieres() {	
	return getCn()->query("select * from Filiere")->fetchAll();
}

function getEtudiantsReussis($filiere) {	
	return getCn()->query("select * from Etudiant where Note >=10 and Filiere ='$filiere'")->fetchAll();
}
function getMeilleureNote($filiere) {	
	return getCn()->query("select Max(Note) from Etudiant where Filiere ='$filiere'")->fetchColumn();
}

function getMention ($n) {
		
	if (0 <= $n and $n < 10)
		return "Ajourné!";
	elseif (10 <= $n && $n < 12)
		return "PASSABLE";
	elseif (12 <= $n && $n < 14)
		return "ASSEZ BIEN";
	elseif (14 <= $n && $n < 16)
		return "BIEN";
	elseif (16 <= $n && $n <= 20)
		return "TRES BIEN";
	else 
		return "Note non valide!";		
	
}
