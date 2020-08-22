<!DOCTYPE html>
<html>
<head>
	<title>faculte</title>
</head>
<body>
<img src="public/img.png" border="0" vspace="20" hspace="20" align="left">
<span class="top">SMI6</span><br />
Facult&eacute; des Sciences Dhar Mehraz, F&egrave;s </div>

<div  align="right" >
</div>
<div class="nav" >
	<a href="Acceuil.php">Acceuil</a>
	<a href="listeEtudiant.php">Etudiants</a>
	<div align="right" >Bienvenu <b><?=isset($_SESSION['USER'])? $_SESSION['USER'] : "" ?></b> <a href="deconnection.php">Deconnection</a></div>
</div>
<hr>

