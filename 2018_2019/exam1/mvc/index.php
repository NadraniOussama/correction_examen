<?php 
require_once('Controllers/Controller.php');
require_once('Models/model.php');
require_once('Views/response.php');
try{
	session_start();
	$action =(isset($_GET['action']))?:$_GET['action'] : 'login';
	$action .= "Action";
	if(isset($_SESSION['login'])){
		$action = 'loginAction';
	}
	
	if(is_callable($action)){
		$action();
	}else throw new Exception("l'action demander n'ai pas autorise");
	

}catch(Exception $e){
	view("vError",["err"=>$e->getMessage()]);
}