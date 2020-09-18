<?php
require 'views/response.php';
require 'models/UserManager.php';

function User_optionsAction(array $d){
	if($_SERVER['REQUEST_METHOD']=="POST")
	{

		if(isset($_POST["template"])) setcookie("template",$_POST["template"], time()+ 3600*24*10);

		if(isset($_POST["lang"])) setcookie("lang",$_POST["lang"], time()+ 3600*24*10);
		if(isset($_POST["textClr"])) setcookie("textClr",$_POST["textClr"], time()+ 3600*24*10);
		if(isset($_POST["bgClr"])) setcookie("bgClr",$_POST["bgClr"], time()+ 3600*24*10);
		if(isset($_POST["sideBgClr"])) setcookie("sideBgClr",$_POST["sideBgClr"], time()+ 3600*24*10);
		if(isset($_POST["sideTextClr"])) setcookie("sideTextClr",$_POST["sideTextClr"], time()+ 3600*24*10);

		header("location: index.php?module=Index&action=index");
	}
	views("User/vFormOption.php");
}

function User_connexionAction(array $d ){
	$erreur=[];
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		if(empty($_POST['user'])) $erreur['user'] = "veuiller entrer le code de filiere ";
		if(empty($_POST['password'])) $erreur['password'] = "veuiller entrer le code de filiere ";
		

		if(empty($erreur)){
			

			if(checkLogin([$_POST['user'],$_POST['password']])){
				echo checkLogin+([$_POST['user'],$_POST['password']]);

				// echo str(checkLogin([$_POST['user'],$_POST['password']]));
				echo $_POST['user'];
				$_SESSION["user"] = $_POST["user"];
				header("location: index.php?method=index&action=index");
				
			}else throw new Exception("password mistake reassayer");
			
		}
		
	}

	views('User/vFormAutantification.php',["erreur"=>$erreur]);
}



function User_deconnexionAction(array $t){
	session_destroy();
	header ("location: index.php?module=Index&action=index");
}

?>