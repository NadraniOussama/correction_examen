<?php
session_start();
if (!isset($_SESSION['USER'])) {include "autantification.php" ; exit();}

include "data.php";
$etudiants = getEtudiants();
include "haut.php";
?> 
<div class="main" align="center" >
	<table border="1">
		<tr>
			<th>numero</th><th>Nom</th> <th>Prenom</th>
		</tr>
	<?php for ( $i=0 ;$i<sizeof($etudiants); $i++) { #start boucle?>
		<tr>
			<td> <?=$i+1?> </td> <td> <?=$etudiants[$i]['Nom']?> </td><td> <?=$etudiants[$i]	['Prenom']?> </td>
		</tr>
	<?php } #end boocle ?>
	</table>
</div>

<?php 
include 'bas.php';
