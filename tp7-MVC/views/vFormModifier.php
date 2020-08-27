<?php
include "haut.php";
?>
<div class="main">
	 <h1>modifier les information de l'etudiant  <i><?php echo$e['code_E']; ?></i> </h1>
	 <hr >
	<form action="" method="post">  <!--<?php //echo"\"index.php?action=modifier&codeE=$codeE\"" ?> -->
	 Code: <?php echo$e['code_E']; ?> <input hidden required type="text" value=<?php echo"\"".$e['code_E']."\"";?> name="code"><br/>
	 Nom:  <input type="text" required value=<?php echo "\"".$e['first_name']."\"";?>  name="nom"><br/>
	 prenom: <input type="text" required value=<?php echo "\"".$e['last_name']."\"";?>  name="prenom">	<br/>
   telephone: <input type="text" required value=<?php echo "\"".$e['telephone']."\"";?> placeholder="telephone" name="telephone"> <br/>
   email: <input type="email" required value=<?php echo "\"".$e['email']."\"";?>  placeholder="email" name="email"> <br/>
	 <!-- <input hidden value=<?php echo "\"".$e['password']."\"";?> type="text" placeholder="password" name="password">	<br/>   -->
    <select id="job"  name="filiere" >
    	<option value="">choisir la filiere</option>
           <?php 
           foreach ($filieres as  $f) { // TODO : need a way to remembre choice filiere automatically
            echo "<option value=\"".$f['codeF']."\">".$f['intituler']."</option>";
             }
           ?>
    </select>   <br/></br>
   note: <input type="text" required value=<?php echo "\"".$e['note']."\"";?>   placeholder="note" name="note"> <br/>  

	<br/><br/> <input type="submit" value="valider" name="submit">
	</form>

</div>
<?php include "bas.php"; 