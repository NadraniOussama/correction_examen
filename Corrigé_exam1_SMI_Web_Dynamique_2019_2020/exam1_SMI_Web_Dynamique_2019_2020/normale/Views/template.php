<?php 
function afficherDate() {
/////La date sur le serveur
	$jours = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
	$mois = ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];
	$d = getdate();
	$d= $jours[$d["wday"]]. " " . $d["mday"] . " " . $mois[$d["mon"]-1] . " " . $d["year"];
	return $d;
}
?>

<!-- Designed and developped by Ahmed ZINEDINE (ahmedzinedine[at]yahoo[dot]com) --> 

<!-- haut de page-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="public/style.css" />
</head>

<body >

<div class="top">
<img src= 'public/images/fsdm.jpg' border = '0' hspace = '20' vspace = '20' align = 'left' />
<span class="top">SMI6</span><br />
Facult&eacute; des Sciences Dhar Mehraz, F&egrave;s </div>

<h4> <?= afficherDate() ?> </h4>
<br /><br />

<!-- La vue pricipale -->
<?= $view ?>


<!-- le bas de page-->
<br /><hr /><br />
<div class="bas">&copy; copyright: SMI6 2020<br />Facult&eacute; des Sciences Dhar Mehraz</br>smi6@fsdmfes.ac.ma</div>
</body>
</html>
