<?php
function indexAction(){
	require "views/vIndex.php";
};
function listeAction(){
	$filiere=NULL;
	if (isset($_GET['codeF'])) {
		$filiere=$_GET['codeF'];
	}
	$filieres=getfilieres();	
	$liste= getListeEtudiants($filiere);
	$e_NB= count($liste);
	$note_max= getMax($liste);
	require "views/vListe.php";
};
function detailAction(){
	if(isset($_GET["codeE"]))//controler
		$e=$_GET["codeE"];
 	$e=getDetail($e);
	require ("views/vDetail.php");
};
function supprimerAction(){# ==========================
	if(isset($_GET["codeE"])){  // controler
		$e=$_GET["codeE"];
		$filiere=getDetail($e)["filiere"];
		echo $filiere;
		supression($e);  // maybe return boolean for success check in future if not done
		$str="location: index.php?action=liste&codeF=$filiere";  # &codeF=".$filiere;
		header($str);
	}
	require("index.php?action=liste");
};
function ajouterAction(){
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		echo strlen($_POST["code"]);
		if(empty($_POST["code"]))
		    $erreur["code"]   ="Le code est vide !..."   ;
		elseif(strlen($_POST["code"]) > 4)
			$erreur["code"]   ="Le code contien plus de 4 charachter !..."   ;
		if(empty($_POST["nom"]))     $erreur["nom"]    ="Le nom est vide !...."   ;
		if(empty($_POST["prenom"]))  $erreur["prenom"] ="Le prénom est vide !..." ;
		if(empty($_POST["filiere"])) $erreur["filiere"]="La filière est vide !...";
		
		if(empty($_POST["note"]))
			$erreur["note"]="La Note est vide !...";
		elseif(!is_Numeric($_POST["note"]))
			$erreur["note"]="La Note doit être un un nombre !...";
		elseif($_POST["note"] < 0 or $_POST["note"] > 20)
			$erreur["note"]="La Note doit être entre 0 et 20 !...";

		#if(empty($_POST["Telephone"])) $erreur["Telephone"]="La filière est vide !...";
		#if(empty($_POST["Email"])) $erreur["Email"]="La filière est vide !...";

			if (!isset($erreur)) {
				$t = array('code'=>$_POST['code'],'nom'=>$_POST['nom'],'prenom'=> $_POST['prenom'],'password'=>$_POST['password'],'email'=>$_POST['email'],'filiere'=>$_POST['filiere'],'telephone'=>$_POST['telephone'],'note'=>$_POST['note']);
				ajouterEtudiant($t);
    			$major=getDetail($_POST['code'])["filiere"];
				header ("location: index.php?action=liste&codeF=$major");
			}
  	}
// $filieres= getListefilieres();
	require("Views/vformAjouter.php");
};

function modifierAction(){#================================================================
// START old modification
	if ($_SERVER["REQUEST_METHOD"]=="POST"){//controler
		if(empty($_POST["Code"]))    $erreur["Code"]   ="Le code est vide !..."   ;
		if(empty($_POST["nom"]))     $erreur["nom"]    ="Le nom est vide !...."   ;
		if(empty($_POST["Prenom"]))  $erreur["Prenom"] ="Le prénom est vide !..." ;
		if(empty($_POST["filiere"])) $erreur["filiere"]="La filière est vide !...";
		
		if(empty($_POST["Note"]))
			$erreur["Note"]="La Note est vide !...";
		elseif(!is_Numeric($_POST["Note"]))
			$erreur["Note"]="La Note doit être un un nombre !...";
		elseif($_POST["Note"] < 0 or $_POST["Note"] > 20)
			$erreur["Note"]="La Note doit être entre 0 et 20 !...";
        $filieres=getfilieres();
		#if(empty($_POST["Telephone"])) $erreur["Telephone"]="La filière est vide !...";
		#if(empty($_POST["Email"])) $erreur["Email"]="La filière est vide !...";
	    $data= array('code'=>$_POST['code'],'nom'=>$_POST['nom'],'prenom'=> $_POST['prenom'],'password'=>$_POST['password'],'email'=>$_POST['email'],'filiere'=>$_POST['filiere'],'telephone'=>$_POST['telephone'],'note'=>$_POST['note']);
	    echo "\n\n\n ".$_POST['filiere'];
    	modifier($data);
    	$major=getDetail($_POST['code'])["filiere"];
		$str="location: index.php?action=liste&codeF=$major";
	header ($str);
}else{
	if(isset($_GET["codeE"])){
		$codeE=$_GET["codeE"];
		$e=getDetail($codeE);
    }
	$str="views/vFormModifier.php";
	require ($str);
}
//END old modification
require "views/vIndex.php";
};
function receptionOption($data){//============================================================
	if(isset($_GET["lang"])) setcookie("lang",$_GET["lang"], time()+ 3600*24*10);
	if(isset($_GET["textClr"])) setcookie("textClr",$_GET["textClr"], time()+ 3600*24*10);
	if(isset($_GET["bgClr"])) setcookie("bgClr",$_GET["bgClr"], time()+ 3600*24*10);
	if(isset($_GET["sideBgClr"])) setcookie("sideBgClr",$_GET["sideBgClr"], time()+ 3600*24*10);
	if(isset($_GET["sideTextClr"])) setcookie("sideTextClr",$_GET["sideTextClr"], time()+ 3600*24*10);
};
	
function optionAction(){//===========================================================

}
function loginACtion(){
if(!isset($_POST["user"]) || !isset($_POST["password"]) ){ 	
	echo "hello yohoho";
	if(checkLogin($_POST["user"],$_POST["password"]))
	// if ($_POST["user"] != $loginS[1]['user'] || $_POST["password"] !=$loginS[1]['password'])
	{
	include("authentification.php");
	exit();
	}
}

session_start();
$_SESSION["login"]=$_POST["user"];
header ("location:index.php");
};
