<?php 
// $etudiants = getEtudiants();
// $module = getModules();
// $note =getNote($_GET[''],) # trash idea maybe
?>
<div class="main" align="center">
	<h1>ajouter note</h1>
	<form action="activeModification.php" action="post">
		<select class="left-select" name="etudiant" size="5">
		<?php for ($i=0; $i < sizeof($etudiants); $i++) { ?>
		 <option value="<?=$etudiants[$i]['CodeE']?>" ><?=$etudiants[$i]["Nom"].$etudiants[$i]["Prenom"] ?></option>
		<?php } ?>
		</select>
		<select class="right-select" name="module" size="5">
		<?php for ($i=0; $i < sizeof($modules); $i++) { ?>
		 <option value="<?=$modules[$i]['CodeM']?>" ><?=$modules[$i]["Nom"].$modules[$i]["Prenom"] ?></option>
		<?php } ?>
		</select>
		</br>
		<input type="number" name="note" placeholder="note">
		<input type="submit" name="" value="valider" >
	</form>
</div>