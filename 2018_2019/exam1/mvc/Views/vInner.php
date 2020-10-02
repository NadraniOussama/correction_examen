
Meilleur note pour la filiere : <?=$max?>
<ol><?php foreach($etudiants as $e){
	?>
	<li><?=$e['Nom']." "$e['Prenom']. "(".$e['note']."/20)"?></li>
	<?php } ?>
</ol>