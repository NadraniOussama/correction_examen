<table border="1" >
 	<tr>
	 		<td>Code</td>
	 		<td>Prenom</td>
	 		<td>Nom</td>
	 		<td>filiere</td>
	 		<td>Note</td>
	 		<td>Mention</td>
	 		<td> <?php echo "<a href=\"index.php?module=etudiant&action=ajouter\"><input type=\"button\"  value=\"ajouter un etudiant\"  name=\"ajouter\"></a> "; ?></td>
	 	</tr>
	 	<?php
	 	foreach ($liste as $e) {	
		 	echo "<tr>
		 		<td><a href=\"index.php?module=etudiant&action=detail&codeE=".$e['code_E']."\">".$e['code_E']."</a></td>
		 		<td>".$e["first_name"]."</td>
		 		<td>".$e['last_name']."</td>
		 		<td>".strtoupper($e['filiere'])."</td>
		 		<td>".$e['note']."</td>
		 		<td>".getMention($e)."</td>
		 		<td>"."<a href=\"index.php?module=etudiant&action=modifier&codeE=".$e['code_E']."\"><input type=\"button\"  value=\"modification\"  name=\"modification\"></a>	".
		 	"<a href=\"index.php?module=etudiant&action=supprimer&codeE=".$e['code_E']."\"><input type=\"button\"  value=\"supression\"  name=\"supression\"></a>	"."</td>
		 	</tr>";
	 	}
	 	?>
	 </table>