<?php

// START  not etudiant function
require 'models/FiliereManager.php';
require ("models/EtudiantManager.php");
require("views/response.php"); 

function getMax($liste)
{//controler
	if(isset($liste[0][7]))
	{
		$MAX=$liste[0][7];
 	 	for ($i=0; $i < count($liste) ; $i++) 
 	 	{
 	 		if($MAX < $liste[$i][7])
 	 			$MAX=$liste[$i][7];
 	 	}
 		return $MAX;
 	}
 };

 
// END  not etudiant function

function getMention($etudiant)
{
 	$note=$etudiant[7];
 	if ($note<10 && $note>=0) {
 		return "non valider";
 	}elseif ($note<12) {
 		return "asser bien";
 	}
 	elseif ($note<14) {
 		return "passable";
 	}elseif ($note<16) {
 		return "bien";
 	}elseif($note<=20) {
 		return "trés bien";
 	}elseif ($note==NULL) {
 		return "";
 	}
 	else{
 		return "la note n'est pas valable";
 	}
};

function Etudiant_listeAjaxAction(array $d){
	$filiere= !empty($d["codeF"])? $d["codeF"] : NULL;	
	
	$liste=getListeEtudiants($filiere);
	require("views/Etudiant/vListeInner.php");	
}

function Etudiant_listeAction(array $d = null){	//  needs optimisation
	$filiere=NULL;
	if (isset($_GET['codeF'])) {
		$filiere=$_GET['codeF'];
	}
	$filieres = getListeFilieres();
	$liste= getListeEtudiants($filiere);
	$e_NB= count($liste);
	$note_max= getMax($liste);
	// require "views/vListe.php";
	views("Etudiant/vListe.php", ["filieres" => $filieres ,"filiere" => $filiere, "liste" => $liste, "e_NB" =>$e_NB , "note_max" => $note_max , "filieres" => getListeFilieres()]);
};

function Etudiant_detailAction(array $d = null){ //needs optimisation
	if(!isset($_GET["codeE"]))//controler
		throw new Exception("l'etudiant que vous rechercher n'exist pas");
		
	$e=$_GET["codeE"];
 	$e=getDetail($e);
	views("Etudiant/vDetail.php",["e" => $e]);
};



function Etudiant_ajouterAction(array $d = null){	//needs optimisation
	$erreur = [];
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if(empty($_POST["code"]))
		    $erreur["code"]   ="Le code est vide !..."   ;
		elseif(strlen($_POST["code"]) > 4)
			$erreur["code"]   ="Le code contien plus de 4 character !..."   ;
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

			if (!isset($erreur)) {
				$t = array('code'=>$_POST['code'],'nom'=>$_POST['nom'],'prenom'=> $_POST['prenom'],'password'=>$_POST['password'],'email'=>$_POST['email'],'filiere'=>$_POST['filiere'],'telephone'=>$_POST['telephone'],'note'=>$_POST['note']);
				ajouterEtudiant($t);
    			$major=getDetail($_POST['code'])["filiere"];
				header ("location: index.php?module=etudiant&action=liste&codeF=$major");
			}

  	}
  	views("Etudiant/vformAjouter.php",["erreur" => $erreur, "filieres" => getListeFilieres()]);
};

function Etudiant_modifierAction(array $d = null){

	if (empty($_GET['codeE'])) 
		throw new Exception("l'etudiant que vous vouler n'exist pas");
		
	$codeE=$_GET["codeE"];

	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
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

		#if(empty($_POST["Telephone"])) $erreur["Telephone"]="La filière est vide !...";
		#if(empty($_POST["Email"])) $erreur["Email"]="La filière est vide !...";

	    $data= array('code'=>$_POST['code'],'nom'=>$_POST['nom'],'prenom'=> $_POST['prenom'],'password'=>$_POST['password'],'email'=>$_POST['email'],'filiere'=>$_POST['filiere'],'telephone'=>$_POST['telephone'],'note'=>$_POST['note']);
	    echo "\n\n\n ".$_POST['filiere'];
    	modifierEtudiant($data);
    	$major=getDetail($_POST['code'])["filiere"];
		$str="location: index.php?module=etudiant&action=liste&codeF=$major";
		header ($str);
	}else{
		
		$e=getDetail($codeE);
		
		views("Etudiant/vFormModifier.php", ["etudiant" => $e, "filieres" => getListeFilieres()]);
	}
};


	
// function optionAction()
// {

// };

function Etudiant_loginACtion(array $d = null){
	if(!isset($_POST["user"]) || !isset($_POST["password"]) )
	{ 	
		if(checkLogin($_POST["user"],$_POST["password"]))
		// if ($_POST["user"] != $loginS[1]['user'] || $_POST["password"] !=$loginS[1]['password'])
		{
		include("authentification.php");
		exit();
		}
	}

	session_start();
	$_SESSION["user"]=$_POST["user"];
	header ("location:index.php");
};

function Etudiant_supprimerAction(array $d ){

	if (empty($d["codeE"]))
		throw new Exception("Vous n'avez pas fourni le code de l'étudiant à Supprimer");
	elseif(!is_string($d["CodeE"])) 
		throw new Exception("Erreur: Le code fourni n'est pas valide");
	else
		$Filiere= supprimerEtudiant($d["CodeE"]);
			
	header("location: index.php?module=etudiant&action=liste&codeF=$filiere");
	
};