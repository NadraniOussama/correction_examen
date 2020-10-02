<?php
require_once "Controllers/controller";
try{
	session_start();
	$action = (isset($_GET['action']))? $_GET['action'] : "index";
	$action .= "Action";
	if(isset($_SESSION['login'])){
		$action = "loginAction";
	}
	if(is_callable($action)){
		$action();
	} else throw new Exception("l'action demander n'est pas accepter");
	
}catch(Exception $e){
	die($e->getMessage());
}
?>