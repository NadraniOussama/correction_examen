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

