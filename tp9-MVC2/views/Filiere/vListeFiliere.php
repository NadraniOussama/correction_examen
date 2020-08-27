<h1>Liste Des Filière</h1>
<hr />


<?php
	for ($i=0; $i < sizeof($filieres); $i++) 
	{ 
	$codeF = $filieres[$i]['codeF'];
	echo ($i+1)."- <a href=\"index.php?module=filiere&action=modifier&codeF=$codeF\">".$filieres[$i]['codeF']."</a> : ".$filieres[$i]['IntituleF']."</br>";
	}
?>
