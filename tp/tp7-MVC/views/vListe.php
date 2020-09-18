<?php
include "haut.php";
?>
<div class="main">
	<?php if(!is_null($filiere)) { ?>
	 <h1>liste d'étudiant de la filiere <?php echo $filiere; ?></h1>
	 <hr/>
	 <h2>nombre d'étudiant de la filiere <?php echo $filiere." est ".$e_NB ?></h2>
	 <?php }else{ ?> 
		 	<h1>liste d'étudiant de toute les filieres <?php echo $filiere; ?></h1>
		 	<hr/>
		 	<h2>nombre d'étudiant de toute les filieres <?php echo $filiere." est ".$e_NB ?></h2>
	 <?php }?>
	 <h2> la meilleur note est <?php echo $note_max; ?></h2>

	 <hr>
	 <table border="1" >
 	<tr>
	 		<td>Code</td>
	 		<td>Prenom</td>
	 		<td>Nom</td>
	 		<td>filiere</td>
	 		<td>Note</td>
	 		<td>Mention</td>
	 		<td> <?php echo "<a href=\"index.php?action=ajouter\"><input type=\"submit\"  value=\"ajouter\"  name=\"ajouter\"> </a>un etudiant"; ?></td>
	 	</tr>
	 	<?php
	 	foreach ($liste as $e) {	
		 	echo "<tr>
		 		<td><a href=\"index.php?action=detail&codeE=".$e['code_E']."\">".$e['code_E']."</a></td>
		 		<td>".$e["first_name"]."</td>
		 		<td>".$e['last_name']."</td>
		 		<td>".strtoupper($e['filiere'])."</td>
		 		<td>".$e['note']."</td>
		 		<td>".getMention($e)."</td>
		 		<td>"."<a href=\"index.php?action=modifier&codeE=".$e['code_E']."\"><input type=\"button\"  value=\"modification\"  name=\"modification\"></a>	".
		 	"<a href=\"index.php?action=supprimer&codeE=".$e['code_E']."\"><input type=\"button\"  value=\"supression\"  name=\"supression\"></a>	"."</td>
		 	</tr>";
	 	}
	 	?>
	 </table>
	<center>
	  <form action="" method="get">
	 	<input type="text" hidden value=<?php echo "\"".$_GET['action']."\"";?> name="action">
	 	<select   name="codeF" >
    	<option value="">toute les filieres</option>
           <?php 
           foreach ($filieres as  $f) {
            echo "<option value=\"".$f['codeF']."\">".$f['intituler']."</option>";
             }
           ?>
           <input type="submit" value="envoyer" name="">
	  </form>
	</center>

<?php include "bas.php";?>