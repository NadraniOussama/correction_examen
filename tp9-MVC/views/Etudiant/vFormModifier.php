
<div class="main">
	 <h1>modifier les information de l'etudiant  <i><?php echo$etudiant['code_E']; ?></i> </h1>
	 <hr >
	<form action="" method="post">  <!--<?php //echo"\"index.php?module=etudiant&action=modifier&codeE=$codeE\"" ?> -->
	 Code: <?php echo$etudiant['code_E']; ?> <input hidden required type="text" value=<?php echo"\"".$etudiant['code_E']."\"";?> name="code"><br/>
	 Nom:  <input type="text" required value=<?php echo "\"".$etudiant['first_name']."\"";?>  name="nom"><br/>
	 prenom: <input type="text" required value=<?php echo "\"".$etudiant['last_name']."\"";?>  name="prenom">	<br/>
   telephone: <input type="text" required value=<?php echo "\"".$etudiant['telephone']."\"";?> placeholder="telephone" name="telephone"> <br/>
   email: <input type="email" required value=<?php echo "\"".$etudiant['email']."\"";?>  placeholder="email" name="email"> <br/>
	 <!-- <input hidden value=<?php echo "\"".$etudiant['password']."\"";?> type="text" placeholder="password" name="password">	<br/>   -->
    <select id="job"  name="filiere" >

    	<option value="">choisir la filiere</option>
      <?php 
      foreach ($filieres as $f) {
          echo "<option value=\"".$f['codeF']."\">".$f['IntituleF']."</option>";
      }
      ?>
      
    </select>   <br/></br>
   note: <input type="text" required value=<?php echo "\"".$etudiant['note']."\"";?>   placeholder="note" name="note"> <br/>  

	<br/><br/> <input type="submit" value="valider" name="submit">
	</form>
