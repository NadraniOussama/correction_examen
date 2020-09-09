<?php 
include "haut.php";
$etudiants =getEtudiants();
?>
<h1>Rechercher des etudiants</h1>
<br><br>
<input type="text" onchange="getEtudiantByName('inneract.php',this->value)" name="rechercher">
<img src="public/img/recherche.png">
<div class="zoneAjax">
<?php
	require "inner.php";
 ?>
 </div>
 <a href="ajouter.php"><input type="button" value="Ajouter Nouveau" name=""></a>

 <?php 
 	include "bas.php"
 ?>