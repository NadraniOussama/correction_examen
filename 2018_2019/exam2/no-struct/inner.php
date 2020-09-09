
Nombre d'etudiants trouver: <?=size($etudiants)?>
Nombre d'etudiants:<?=$num?>
<br>
<table>
	<tr>
		<th>Code</th><th>Nom</th><th>Prenom</th><th>Action</th>
	</tr>
	<?php foreach ($etudiants as  $e) { ?>
	<tr>
		<td><?=$e['Code'] ?></td>
		<td><?=$e['Nom']?></td>
		<td><?=$e["Prenom"]?></td>
		<td><a href="supprimer.php?code=<?=$e['Code']?>"></a></td>
	</tr>

	<?php }?> 
</table>