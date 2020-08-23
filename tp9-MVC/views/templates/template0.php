<!-- Designed and developped by Ahmed ZINEDINE (ahmedzinedine[at]yahoo[dot]com) --> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="public/style.css" />

</head>
<body >


<div align= "right">
<?php if (isset($_SESSION["Login"])){?>
Vous êtes connectés en tant que:  <?= strtoupper($_SESSION["Login"]) ?> &nbsp;&nbsp;&nbsp;&nbsp;
<a href = "index.php?module=User&action=deconnexion">Déconnexion</a> 
<?php } else {?>Non Connecté<?php }?>&nbsp;&nbsp; || &nbsp;&nbsp; <a href = "index.php?module=User&action=options">Options</a>  &nbsp;&nbsp;

</div>
<br /><br />


<!--*******************************************************-->
<!--*******************************************************-->
<!--*******************************************************-->

<?= $view ?>


<!--*******************************************************-->
<!--*******************************************************-->
<!--*******************************************************-->

<div style="background: gray; color: white">
	<a href ="index.php?module=Index&action=index">Acceuil</a> |
	<a href ="index.php?module=Filiere&action=liste">Gestion des filières</a>
	<a href ="index.php?module=Etudiant&action=liste">Gestion des étudiants</a> |
</div>
<footer>
<script type="text/javascript" src="public/javascript/ajax.js"></script>
</footer>
</body>
