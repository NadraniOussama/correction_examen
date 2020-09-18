<ol>
	<?php	
		  foreach ($etudiants as $row) { ?>	
			<li>
			<a href ="index.php?module=Etudiant&action=detail&CodeE=<?= $row[0]?>"> <?= $row[1]." ".$row[2] ?></a>
			</li>	  

	<?php } ?>
</ol>