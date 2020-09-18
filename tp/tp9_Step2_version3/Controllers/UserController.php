<?php 
require_once ("Models/UserManager.php");
require_once ("Views/Response.php");


function User_connexionAction(array $t= NULL){
	if ($_SERVER["REQUEST_METHOD"]=="POST") {	
		//valider les champs du formulaire		
		if(empty($_POST["Login"]))  $erreur["Login"] ="Le login est vide !..."   ;
		if(empty($_POST["PW"]))  $erreur["PW"] ="Le mot de passe est vide !..."   ;
		
		if (!isset($erreur)) {
			$t=[$_POST["Login"],md5($_POST["PW"])];
			if(user_exists($t)){
				//si tout est OK
				$_SESSION["Login"]= $_POST["Login"];
				header ("location: index.php?module=Index&action=index");
				//le reste du script ne sera pas exécuté, dans ce cas
			}
			else{$erreur["User"]= "Login ou mot de passe incorrect!...";}
		}
	}
	
	/*si on arrive ici, ça veut dire que la méthode n'est pas "post", donc c'est le premier affichage du formulaire, oubien, les données envoyées par post ne sont pas valide (donc le tableau $erreur est rempli (isset($erreur)==true)*/
	
	//dans ce cas, on affiche, ou réaffiche le formulaire
	$data =array();
	if (isset($erreur)) $data["erreur"]=$erreur;
	afficherReponse("User/vformLogin.php",$data);
}


function User_deconnexionAction(array $t){
	session_destroy();
	header ("location: index.php?module=Index&action=index");
}

function User_optionsAction(array $t= NULL){

	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
		if(isset($_POST["langue"])) setcookie("lang",$_POST["langue"], time()+ 3600*24*10);
		if(isset($_POST["template"])) setcookie("template",$_POST["template"], time()+ 3600*24*10);
		header("location: index.php?module=Index&action=index");
	}
	
	afficherReponse("User/vformOptions.php");
}

