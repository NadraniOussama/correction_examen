<h1>Rechercher des etudiants</h1>
<br><br>
<input type="text" name="rechercher" onchange="getStudentWithAjax('index.php?module=etudiant&action=listeAjax&recherche='+this.value, 'zoneAjax')">
<img src="public/image/loupe/png"><br>

<div classe="zoneAjax">
<?php require_once "views/vInner.php" ?>
</div>
<a href="index.php?action=ajouter"><input type="button" name="" value="Ajouter Nouveau"></a>
 

