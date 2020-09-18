<h1>Précisez Vos préférences</h1>
<hr />
<br />

<!-- l'attribut name permet d'accèder facilement au formulaire -->

<form name = "myForm" action = "" method = "post">


<table align = "center" border ="1">
<tr>
<td>Langue :</td> <td> <select name = "langue">
<option  value =  "AR" selected>العربية</option>
<option  value =  "EN">English</option>
<option  value =  "FR">Français</option>
</select></td>
</tr>
<tr><td>template:</td>
<td>
<?php
$dir= opendir("Views/templates/");
if($dir) {
	while ($fichier  = readdir($dir)) {
		if ($fichier != "." && $fichier != ".."){?>  
		
<input type ="radio" name="template"  value ="<?= $fichier ?>" /> <?= $fichier ?><br />

<?php  }} } ?>

</td>
<tr><td colspan="2" align = "center">
<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' onclick ="javascript: history.go(-1)" />
</tr></td>
</tr>

</table>

</form>
 