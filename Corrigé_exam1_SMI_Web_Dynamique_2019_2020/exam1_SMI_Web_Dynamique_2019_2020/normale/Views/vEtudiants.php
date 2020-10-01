<h1>Liste des étudiants réussis de la filière: <?= $filiere ?></h1>
<hr />
<b>Nombre des étudiants réussis de cette filière : <?= $nombre ?> </b><br />
<b>Meilleure note de cette filière : <?= $max ?></b> <br />
<hr />
<table border="1" align = "center" width = "60%">
	<tr> 
		<th>Nom    </th>
		<th>Prénom </th>
		<th>Note   </th>
		<th>Mention</th>
	</tr>	
	<?php
		foreach ($etudiants as $e) { ?>
		 	<tr>
				<td> <?= $e["Nom"] ?>              </td>
				<td> <?= $e["Prenom"] ?>           </td>
				<td> <?= $e["Note"] ?>             </td>
				<td> <?= getMention($e["Note"]) ?> </td>
			</tr>	
	<?php } ?>
</table>