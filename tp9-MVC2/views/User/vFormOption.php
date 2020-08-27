		<div class="main">
		<h1>Précisez Vos préférences</h1>
			<hr />
			<br />
			<form name = "myForm" method = "post">

			<table align = "center" border ="1">
			<tr>
			<td>Langue :</td> <td> <select name = "lang">
			<option  value =  "ar" selected>العربية</option>
			<option  value =  "en">English</option>
			<option  value =  "fr">Français</option>
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
			
			<tr><td>Couleur du texte:</td>
			<td>
			<input type ="radio" name="textClr"  value ="red" /> <span style="color:red">Rouge </span><br />
			<input type ="radio" name="textClr"  value ="green" /> <span style="color:green">vert </span><br />
			<input type ="radio" name="textClr"  value ="blue" /> <span style="color:blue">Bleu </span><br />
			<input type ="radio" name="textClr"  value ="gray" /> <span style="color:gray;">Gris </span><br />
			<input type ="radio" name="textClr"  value ="black" checked/> <span style="color:black">black </span><br />
			<input type ="radio" name="textClr"  value ="#483D8B" checked/> <span style="color:#483D8B">default </span><br />
			</td></tr>
			<tr>
			<td>Couleur d'arrière plan :</td>
			<td>
			<input type ="radio" name="bgClr"  value ="aqua" /> <span style="background:aqua">Aqua </span><br />
			<input type ="radio" name="bgClr"  value ="gold" /> <span style="background:gold">gold </span><br />
			<input type ="radio" name="bgClr"  value ="pink" /> <span style="background:pink">pink </span><br />
			<input type ="radio" name="bgClr"  value ="beige" /> <span style="background:beige">Beige </span><br />
			<input type ="radio" name="bgClr"  value ="gray" /> <span style="background:gray">Gris </span><br />
			<input type ="radio" name="bgClr"  value ="white" checked/> <span style="background:white">white </span><br />
			</td></tr>
			<tr><td>Couleur du texte de côté:</td>
			<td>
			<input type ="radio" name="sideTextClr"  value ="red" /> <span style="color:red">Rouge </span><br />
			<input type ="radio" name="sideTextClr"  value ="green" /> <span style="color:green">vert </span><br />
			<input type ="radio" name="sideTextClr"  value ="blue" /> <span style="color:blue">Bleu </span><br />
			<input type ="radio" name="sideTextClr"  value ="gray" /> <span style="color:gray;">Gris </span><br />
			<input type ="radio" name="sideTextClr"  value ="black" /> <span style="color:black">black </span><br />
			<input type ="radio" name="sideTextClr"  value ="#483D8B" checked/> <span style="color:#483D8B">default </span><br />
			</td></tr>
			<tr>
			<td>Couleur d'arrière plan de côté:</td>
			<td>
			<input type ="radio" name="sideBgClr"  value ="red" /> <span style="background:red">Rouge </span>
			<input type ="radio" name="sideBgClr"  value ="aqua" /> <span style="background:aqua">Aqua </span><br />
			<input type ="radio" name="sideBgClr"  value ="green" /> <span style="background:green">vert </span>
			<input type ="radio" name="sideBgClr"  value ="gold" /> <span style="background:gold">gold </span><br />
			<input type ="radio" name="sideBgClr"  value ="blue" /> <span style="background:blue">Bleu </span>
			<input type ="radio" name="sideBgClr"  value ="pink" /> <span style="background:pink">pink </span><br />
			<input type ="radio" name="sideBgClr"  value ="black" /> <span style="background:black">black </span>
			<input type ="radio" name="sideBgClr"  value ="beige" /> <span style="background:beige">Beige </span><br />
			<input type ="radio" name="sideBgClr"  value ="gray" /> <span style="background:gray">Gris </span><br />
			<input type ="radio" name="sideBgClr"  value ="white" checked/> <span style="background:white">white </span><br />
			</td></tr>
			<tr>

				<td colspan="2" align = "center">
			<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' onclick ="javascript: history.go(-1)" />
			</tr></td>
			</tr>

			</table>
			</form>

	</div>