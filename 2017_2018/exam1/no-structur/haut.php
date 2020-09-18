<?php 
function afficherDate($lang) {
/////La date sur le serveur
$jours["AR"] = array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
$jours["FR"] = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$jours["EN"] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$months["AR"]=["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو" , "يوليوز" , "غشت ", "شتنبر" ,"أكتوبر" , "نونبر" , "دجنبر"];

$months["EN"]= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$months["FR"]= ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];


$d = getdate();

$wj = $d["wday"];
$mj = $d["mday"];
$m = $d["mon"];
$y = $d["year"];

$d= $jours[$lang][$wj]. " " . $mj . " " . $months[$lang][$m-1] . " " . $y;
return $d;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>faculte</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="top">
	<img src="public/img.png" border="0" vspace="20" hspace="20" align="left">

	<span >SMI6</span><br /><br/>
	Facult&eacute; des Sciences Dhar Mehraz, F&egrave;s </div>

	<br>
	<div class="left " align="right" >Bienvenu <b><?=isset($_SESSION['USER'])? $_SESSION['USER'] : "" ?></b> <a href="deconnection.php">Deconnection</a></div>
	<div class="nav" >

		<a href="Acceuil.php">Acceuil</a>
		<a href="listeEtudiant.php">Etudiants</a>
		<a href="modifNote.php">Ajouter Note</a>

	</div>
</div>
<hr>

