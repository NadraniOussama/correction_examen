<h1>Liste des filières </h1>
<hr /><br /><br />
<table border=1>
<?php	
foreach ($filieres as $f) { ?>	
<tr>
	<td>
	<a href ="index.php?module=Etudiant&action=liste&Filiere=<?= $f[0]?>"> <?= $f[1] ?></a>
	</td>
	<td>
	<a href ="index.php?module=Filiere&action=modifier&CodeF=<?= $f[0]?>">Modifier</a>
	</td>
	<td>
	<a href ="index.php?module=Filiere&action=supprimer&CodeF=<?= $f[0]?>">Supprimer</a>
	</td>
</tr>	  

<?php } ?>
</table>