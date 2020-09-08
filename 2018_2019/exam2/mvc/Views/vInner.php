Nombre d'etudiant trouver : <?=$size($etudiants)?>
Nombre totale d'etudiants : <?=$taille?>

<table>
	<tr>
		<th>Code</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Action</th>
	</tr>
	<?php foreach ($etudiants as  $e) {?>
		<tr><?=$e['Code']?></tr>	
		<tr><?=$e['Nom']?></tr>
		<tr><?=$e['Prenom']?></tr>
		<tr><a href="index.php?action=supprimer&Code=<?=$e['Code']">Supprimer</a></tr>
	<?php } ?>
	