<?php
/********   générer la réponse --- Affichage ***********/ 

function AfficherReponse($vue , array $data=array()) {

extract($data);
$file ="Views/". $vue;
if (file_exists($file)) {
	ob_start();
	require ($file);
	$view= ob_get_clean(); 
}
else
	throw new Exception ("Fichier introuvable: ". $file);

require ("Config/Config.php");
$lang = isset($_COOKIE["lang"])? $_COOKIE["lang"]: $config["lang"];
$template = isset($_COOKIE["template"])? $_COOKIE["template"]:$config["active_template"];


$template= $config["templates_path"].$template;
require($template);

}

