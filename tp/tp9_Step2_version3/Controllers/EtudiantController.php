<?php 
require_once ("Models/EtudiantManager.php");
require_once ("Models/FiliereManager.php");
require_once ("Views/Response.php");

function Etudiant_listeAction(array $t= NULL){
	$f= !empty($t["Filiere"])? $t["Filiere"] : NULL;	
	$filieres=getListeFilieres();
	$etudiants=getListeEtudiants($f);
	afficherReponse("Etudiant/vListe.php",["selectedFiliere"=>$f,"etudiants"=>$etudiants,"filieres"=>$filieres]);
}

function Etudiant_listeAjaxAction(array $t= NULL){
	$f= !empty($t["Filiere"])? $t["Filiere"] : NULL;	
	//$filieres=getListeFilieres();
	$etudiants=getListeEtudiants($f);
	//afficher sans utiliser de template
	require("Views/Etudiant/vListeInner.php");
	//afficherReponse("Etudiant/vListeInner.php",["etudiants"=>$etudiants]);
}


function Etudiant_detailAction(array $t){

	if (empty($t["CodeE"]))
		throw new Exception("Vous n'avez pas fourni le code de l'étudiant à chercher");
	elseif(!is_string($t["CodeE"])) 
		throw new Exception("Le code fourni n'est pas valide");
	else
		$etudiant= getDetailEtudiant($t["CodeE"]);

	if (empty($etudiant)){ 
		throw new Exception("Aucun étudiant trouvé!");
	}
	
	afficherReponse("Etudiant/vDetail.php",["etudiant" => $etudiant]);
}

function Etudiant_ajouterAction(array $t= NULL){
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
		//valider les champs du formulaire
		
		//le code, le nom, le prénom et la filière doivent être non vides
		//vous pouvez ajouter d'autres contraintes
		if(empty($_POST["Code"]))    $erreur["Code"]   ="Le code est vide !..."   ;
		if(empty($_POST["Nom"]))     $erreur["Nom"]    ="Le Nom est vide !...."   ;
		if(empty($_POST["Prenom"]))  $erreur["Prenom"] ="Le prénom est vide !..." ;
		if(empty($_POST["Filiere"])) $erreur["Filiere"]="La filière est vide !...";
		
		// la note doit être non vide, et il doit être un nombre entre 0 et 20
		if(empty($_POST["Note"]))
			$erreur["Note"]="La Note est vide !...";
		elseif(!is_Numeric($_POST["Note"]))
			$erreur["Note"]="La Note doit être un un nombre !...";
		elseif($_POST["Note"] < 0 or $_POST["Note"] > 20)
			$erreur["Note"]="La Note doit être entre 0 et 20 !...";
		
		
		//si aucune erreur n'est détectée, on appelle le modèle pour insérer dans la BD
		//puis en reéxecute l'action liste pour afficher la liste actualisée
		if (!isset($erreur)) {
			$t=[$_POST["Code"],$_POST["Nom"],$_POST["Prenom"],$_POST["Filiere"],$_POST["Note"]];
			ajouterEtudiant($t);
			header ("location: index.php?module=Etudiant&action=liste&Filiere=".$_POST["Filiere"]);
			//le reste du script ne sera pas exécuté, dans ce cas
		}
	}
	
	/*si on arrive ici, ça veut dire que la méthode n'est pas "post", donc c'est le premier affichage du formulaire, oubien, les données envoyées par post ne sont pas valide (donc le tableau $erreur est rempli (isset($erreur)==true)*/
	
	//dans ce cas, on affiche, ou réaffiche le formulaire
	$filieres= getListeFilieres();
	
	$data["filieres"]= $filieres;
	$data["selectedFiliere"] = isset($t["Filiere"])? $t["Filiere"]:"";
	if (isset($erreur)) $data["erreur"]=$erreur;
	afficherReponse("Etudiant/vformAjout.php",$data);
}

function Etudiant_modifierAction(array $t){

	if (empty($t["CodeE"]))
		throw new Exception("Vous n'avez pas fourni le code de l'étudiant à Modifier");
	$code=$t["CodeE"];
	 
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
		//valider les champs du formulaire
		
		//le code, le nom, le prénom et la filière doivent être non vides
		//vous pouvez ajouter d'autres contraintes
		if(empty($_POST["Code"]))    $erreur["Code"]   ="Le code est vide !..."   ;
		if(empty($_POST["Nom"]))     $erreur["Nom"]    ="Le Nom est vide !...."   ;
		if(empty($_POST["Prenom"]))  $erreur["Prenom"] ="Le prénom est vide !..." ;
		if(empty($_POST["Filiere"])) $erreur["Filiere"]="La filière est vide !...";
		
		// la note doit être non vide, et il doit être un nombre entre 0 et 20
		if(empty($_POST["Note"]))
			$erreur["Note"]="La Note est vide !...";
		elseif(!is_Numeric($_POST["Note"]))
			$erreur["Note"]="La Note doit être un un nombre !...";
		elseif($_POST["Note"] < 0 or $_POST["Note"] > 20)
			$erreur["Note"]="La Note doit être entre 0 et 20 !...";
		
		
		//si aucune erreur n'est détectée, on appelle le modèle pour insérer dans la BD
		//puis en reéxecute l'action liste pour afficher la liste actualisée
		if (!isset($erreur)) {
			$t=[$_POST["Code"],$_POST["Nom"],$_POST["Prenom"],$_POST["Filiere"],$_POST["Note"],$_POST["oldCode"]];
			updateEtudiant($t);
			header ("location: index.php?module=Etudiant&action=detail&CodeE=".$_POST["Code"]);
			//le reste du script ne sera pas exécuté, dans ce cas
		}
		
		
	}
	
	/*si on arrive ici, ça veut dire que la méthode n'est pas "post", donc c'est le premier affichage du formulaire, oubien, les données envoyées par post ne sont pas valide (donc le tableau $erreur est rempli (isset($erreur)==true)*/
	
	//dans ce cas, on affiche, ou réaffiche le formulaire
	$filieres= getListeFilieres();
	$etudiant=getDetailEtudiant($code);
	
	$data["filieres"]= $filieres;
	$data["etudiant"]= $etudiant;
	if (isset($erreur)) $data["erreur"]=$erreur;
	
	//require("Views/vformModifier.php");
	afficherReponse("Etudiant/vformModifier.php",$data);
	
}

function Etudiant_supprimerAction(array $t){

	if (empty($t["CodeE"]))
		throw new Exception("Vous n'avez pas fourni le code de l'étudiant à Supprimer");
	elseif(!is_string($t["CodeE"])) 
		throw new Exception("Erreur: Le code fourni n'est pas valide");
	else
		$Filiere= supprimerEtudiant($t["CodeE"]);
	
	header ("location: index.php?module=Etudiant&action=liste&Filiere=".$Filiere);
}
