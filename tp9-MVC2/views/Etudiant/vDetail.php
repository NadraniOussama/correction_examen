
<div class="main">
		 <h1>detail de l'etudiant num <?php echo $e[0] ?></h1>
		 <hr >
		 <?php
		    if(is_null($e)){
		    	echo "<h2>l'etudiant que vous rechercher ne se trouve pas dans la base de donner </h2>";
		    }else{ 

		 	echo "<h4>Code:   ".$e['code_E']."</h4></br>";
		 	echo "<h4>Code:   ".$e['first_name']."</h4></br>";
		 	echo "<h4>Code:   ".$e['last_name']."</h4></br>";
		 	echo "<h4>Code:   ".$e['filiere']."</h4></br>";
		 	echo "<h4>Code:   ".$e['note']."</h4></br>";
		 	echo "<h4>Code:   ".strtolower($e["email"])."</h4></br>";
		 	echo "<h4>Code:   ".$e['telephone']."</h4></br>";
		 	
		 	}
		 	echo "<a href=\"index.php?module=etudiant&action=modifier&codeE=".$e[0]."\"><input type=\"submit\"  value=\"modification\"  name=\"modification\"></a>	";
		 	echo "<a href=\"index.php?module=etudiant&action=supprimer&codeE=".$e[0]."\"><input type=\"submit\"  value=\"supression\"  name=\"supression\"></a>	";

		  ?>	 
</div>
