<?php
require_once('models/conn.php');

function getDetailUser($login){
	$login = cleanDataArray($login);
	return $user = getCn()->prepare("SELECT * from user where user='?'")->fetch($login['user']);
}

function checkLogin($login){
	$login = cleanDataArray($login);
	$Rq= "SELECT count(*) from User where user = '" . $login[0] . "' and password = '" . $login[1] ."'";
	return getCn()->query($Rq)->fetchColumn();

}

function ajouterUser($login){

}
