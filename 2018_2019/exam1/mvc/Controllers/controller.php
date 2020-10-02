<?php 
function loginAction(){
	if($_SERVER['REQUEST_METHODE']== 'POST'){
		if(isset($_POST['login'])) $err['login'] = "veuiller entre login";
		if(isset($_POST['password'])) $err['password'] = "veuiller entre password";
		if(!isset($err)){
			if(checklogin(['login'=>$_POST['login'],'password'=>$_POST['pass']])){
				$_SESSION['login'] = $_POST['login'];
				header('location: index.php?action=liste');
			}
		}
	}
	view('vLogin',["err"=>$err]);
}

function listeAction(){
	$code= (isset($_GET['CodeF']))? $_GET['CodeF'] : "SMI";
	view('vListe',["filieres"=>getFilieres(),"etudiants"=>getEtudiants($code),"max"=>getMax($code)]);
}

function ajaxAction(){
	if (!isset($_SERVER['REQUEST_METHODE'])=='POST') throw new Exception("cette action ne peux etre afectuer que par une request post");
	
	$codef = !empty($_POST['CodeF'])? $_POST['CodeF'] : "SMI";	 
	$max = getMax($codef);
	require('Views/vInner.php');
}

function detailAction(){
	if(isset($_GET['codeE']))
		$code = $_GET['codeE'];
	else throw new Exception("vous n'aver pas entre le code d'etudiant");
	
	view('vDetail',['etudiant'=>getDetailE($code)]);
}

function deconnAction(){
	session_destroy();
	header('location: index.php');
}