<?php
include 'data.php';
if($_SERVER['REQUEST_METHODE']== "POST")
	ajouter($_POST);
else die("erreur d'insertion")
header("location: acceuil.php");
?>