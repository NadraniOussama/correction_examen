<script src="Public/ajax.js"></script>
<h1>Liste des étudiants </h1>
<hr /><br /><br />
<Form name="myForm" action="index.php?module=Etudiant&action=listeAjax" method ="post">
<b>Filière: </b><select name="Filiere"
onChange="getStudentsWithAjax('index.php?module=Etudiant&action=listeAjax&Filiere=' + this.value, 'zoneAjax')">

		<option value=""<?= empty($selectedFiliere)? "selected":"" ?>>Tous</option>
		<?php
		foreach ($filieres as $fil) { ?>
		<option value="<?= $fil["codeF"] ?>" <?php if ($fil["codeF"]==$selectedFiliere) echo "selected"; ?>><?= $fil["IntituleF"] ?> </option>	  

<?php } ?>
</select>
</form>

<div id="zoneAjax">
<?php 
require ("vListeInner.php");
/*
	<ol>
	<?php	
		  foreach ($etudiants as $row) { ?>	
			<li>
			<a href ="index.php?module=Etudiant&action=detail&CodeE=<?= $row[0]?>"> <?= $row[1]." ".$row[2] ?></a>
			</li>	  

	<?php } ?>
	</ol>
*/
 ?>
</div>
<div align="right">
| <a href ="index.php?module=Etudiant&action=ajouter&Filiere=<?= $selectedFiliere ?>">Ajouter un étudiant</a> |

</div>