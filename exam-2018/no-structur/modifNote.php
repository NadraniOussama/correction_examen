<?php 
require_once "data.php";
$etudiants = getEtudiants();
$modules = getModules();
// $note =getNote($_GET[''],) # trash idea maybe
include "haut.php";
?>
<div class="main" align="center">
	<h1>ajouter note</h1>
	<form action="activeModification.php" action="post" required>
		<select class="left-select" name="CodeE" size="5">
		<?php for ($i=0; $i < sizeof($etudiants); $i++) { ?>
		 <option value="<?=$etudiants[$i]['CodeE']?>" ><?=strtoupper($etudiants[$i]["Nom"])." ".ucfirst($etudiants[$i]["Prenom"]) ?></option>
		<?php } ?>
		</select><?php if(isset($erreur['CodeE'])) echo $erreur['CodeE'];?>
		<select class="right-select" name="CodeM" size="5" requires>
		<?php for ($i=0; $i < sizeof($modules); $i++) { ?>
		 <option value="<?=$modules[$i]['CodeM']?>" ><?=$modules[$i]["Intitule"]." ".$modules[$i]["VolumeHorraire"] ?></option>
		<?php } ?>
		</select> <?php if(isset($erreur['CodeM'])) echo $erreur['CodeM'];?>
		</br>
		<input type="number" name="Note" placeholder="note"><?php if(isset($erreur['Note'])) echo $erreur['Note'];?>
		<input type="submit" name="" value="valider" >
	</form>
</div>
<?php 
include 'bas.php';