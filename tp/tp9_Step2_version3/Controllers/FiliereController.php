<?php 
require_once ("Models/FiliereManager.php");
require_once ("Views/Response.php");

function Filiere_listeAction(array $t= NULL){
	$filieres=getListeFilieres();
	afficherReponse("Filiere/vListeFiliere.php",["filieres"=>$filieres]);
}

function Filiere_ajouterAction(array $t= NULL){
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
		//valider les champs du formulaire
		
		//le code, le nom, le prénom et la filière doivent être non vides
		//vous pouvez ajouter d'autres contraintes
		if(empty($_POST["CodeF"]))    $erreur["CodeF"]   ="Le code est vide !..."   ;
		if(empty($_POST["Intitule"])) $erreur["Intitule"]="L'intitulé est vide !...";
				
		//si aucune erreur n'est détectée, on appelle le modèle pour insérer dans la BD
		//puis en reéxecute l'action liste pour afficher la liste actualisée
		if (!isset($erreur)) {
			$t=[$_POST["CodeF"],$_POST["Intitule"]];
			ajouterFiliere($t);
			header ("location: index.php?module=filiere&action=liste");
			//le reste du script ne sera pas exécuté, dans ce cas
		}
	}
	
	/*si on arrive ici, ça veut dire que la méthode n'est pas "post", donc c'est le premier affichage du formulaire, oubien, les données envoyées par post ne sont pas valide (donc le tableau $erreur est rempli (isset($erreur)==true)*/
	
	//dans ce cas, on affiche, ou réaffiche le formulaire
	$data = array();
	if (isset($erreur)) $data["erreur"]=$erreur;
	afficherReponse("Filiere/vformAjoutFiliere.php",$data);
}

function Filiere_modifierAction(array $t){

	if (empty($t["CodeF"]))
		throw new Exception("Vous n'avez pas fourni le code de la filiere à Modifier");
	$code=$t["CodeF"];
	 
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
		//valider les champs du formulaire
		
		//le code, le nom, le prénom et la filière doivent être non vides
		//vous pouvez ajouter d'autres contraintes
		if(empty($_POST["CodeF"]))    $erreur["CodeF"]   ="Le code est vide !..."   ;
		if(empty($_POST["Intitule"])) $erreur["Intitule"]="L'intitulé est vide !...";
		
		
		//si aucune erreur n'est détectée, on appelle le modèle pour insérer dans la BD
		//puis en reéxecute l'action liste pour afficher la liste actualisée
		if (!isset($erreur)) {
			$t=[$_POST["CodeF"],$_POST["Intitule"],$_POST["oldCode"]];
			updateFiliere($t);
			header ("location: index.php?module=filiere&action=liste");
			//le reste du script ne sera pas exécuté, dans ce cas
		}
		
		
	}
	
	/*si on arrive ici, ça veut dire que la méthode n'est pas "post", donc c'est le premier affichage du formulaire, oubien, les données envoyées par post ne sont pas valide (donc le tableau $erreur est rempli (isset($erreur)==true)*/
	
	//dans ce cas, on affiche, ou réaffiche le formulaire
	$filiere=getDetailFiliere($code);
	$data["filiere"]=$filiere;
	if (isset($erreur)) $data["erreur"]=$erreur;
	afficherReponse("Filiere/vformModifierFiliere.php",$data);
	
}

function Filiere_supprimerAction(array $t){

	if (empty($t["CodeF"]))
		throw new Exception("Vous n'avez pas fourni le code de la filière à Supprimer");
	elseif(!is_string($t["CodeF"])) 
		throw new Exception("Le code fourni n'est pas valide pour une filière");
	else
		supprimerFiliere($t["CodeF"]);
	//normalement, on doit vérifier est ce que l'opération s'est bien déroulée
	//après la suppression, on affiche la liste des étudiants
	header ("location: index.php?module=filiere&action=liste");
}
