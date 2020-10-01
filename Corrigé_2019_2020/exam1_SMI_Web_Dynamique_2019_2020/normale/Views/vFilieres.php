<h1 align="center">Affichage des résultats</h1>
<hr />
<b>Cliquez sur une filière pour voir les résultats </b><br />

<ol>
	<?php 
		foreach ($filieres as $fil) { ?>
		 	<li>
				<a href ="index.php?action=ResultatAction&f=<?= $fil["CodeF"]?>"><?= $fil["IntituleF"]?> </a>				
			</li>	
	<?php } ?>
</ol>