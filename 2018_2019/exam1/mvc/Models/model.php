<?php 
function getCn(){
	static $cn;
	if(!$cn) $cn = new PDO('mysql: host=localhost;dbname=DB','root','');
	return $cn;
}

function getEtudiants($fil){
	$sql = 'SELECT * from Etudiant where Note>10 and CodeF=$fil';
	return getCn()->query()->fetchALL();
}

function getFilieres(){
	return getCn()->query('SELECT * from Filiere')->fetchAll();
}

function checkUser($t){
	return getCn()->query('SELECT * from User where Login='.$t['login'].' and Pass='.$t['pass'].' ')->fetch();
}

function getDetailE($code){
	return getCn()->query('SELECT * from Etudiant where CodeE=$code')->fetch();
}
function getMax($fil){
	return getCn()->query("SELECT MAX(NOTE) from Etudiant where $fil")->getColumn();
}