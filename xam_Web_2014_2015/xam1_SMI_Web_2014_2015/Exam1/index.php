<?php

include("model.php");

if (empty($_GET["action"])) $action = "listeArticles";
else $action = $_GET["action"];

//action lireArticle
if ($action=='lireArticle') {
	$article = getArticle($_GET["id"]);
	$comments = getComments($_GET["id"]);
	$vue = "vLireArticle.php";
}
//action listeArticles ou Autres
else  {
	$resultat = getAllArticles();
	$vue = "vListeArticles.php";
}

ob_start();
include($vue);
$page = ob_get_clean();
include("gabarit.php");
?>