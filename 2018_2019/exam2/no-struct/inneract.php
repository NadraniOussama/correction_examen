<?php 
$etudiants = getEtudiantsLike($_GET['rechercher']);
$num = getENum();
require "inner.php";
?>