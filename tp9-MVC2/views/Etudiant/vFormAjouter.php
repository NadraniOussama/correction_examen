
<div class="main">
	 <h1>Affichage des resultas</h1>
	 <hr >
   <!-- <h2><?php if(isset($_GET['r'])) if($_GET['r']=="true") echo "veuiller donner le code d'etudiant"; ?></h2> -->
	<form action="" method="post">
<!-- 0=> code_E==code |1=> first_name==nom |2=> last_name==prenom |3=> phone==telephone |4=> email |5=> major==filiere |6=> password |7=> grade==note -->
   Entrez le code:              
    <input type="text" name="code" value="<?= isset($_POST["code"])?$_POST["code"]:""?>"/> <span class="Err"><?= isset($erreur["code"])? $erreur["code"]:"" ?> </span></br>
    
   Entrez le nom:              
    <input type="text" name="nom" value="<?= isset($_POST["nom"])?$_POST["nom"]:""?>"/> <span class="Err"><?= isset($erreur["nom"])? $erreur["nom"]:"" ?> </span></br>

   Entrez le prenom:              
    <input type="text" name="prenom" value="<?= isset($_POST["prenom"])?$_POST["prenom"]:""?>"/> <span class="Err"><?= isset($erreur["prenom"])? $erreur["prenom"]:"" ?> </span></br>
  Entrez le password:              
    <input type="password" name="password" value="<?= isset($_POST["password"])?$_POST["password"]:""?>"/> <span class="Err"><?= isset($erreur["password"])? $erreur["password"]:"" ?> </span></br>
   Entrez la note:              
    <input type="text" name="note" value="<?= isset($_POST["note"])?$_POST["note"]:""?>"/> <span class="Err"><?= isset($erreur["note"])? $erreur["note"]:"" ?> </span></br>
   Entrez le telephone:              
    <input type="text" name="telephone" value="<?= isset($_POST["telephone"])?$_POST["telephone"]:""?>"/> <span class="Err"><?= isset($erreur["telephone"])? $erreur["telephone"]:"" ?> </span></br>
   Entrez l'email:              
    <input type="text" name="email" value="<?= isset($_POST["email"])?$_POST["email"]:""?>"/> <span class="Err"><?= isset($erreur["email"])? $erreur["email"]:"" ?> </span></br>
      <!-- a lil js to compare  -->
    Choisir votre filiere: <br>
    <select id="job"  name="filiere" >
    	<option value="">choisir la filiere</option>
      <?php 
      foreach ($filieres as $f) {
          echo "<option value=\"".$f['codeF']."\">".$f['IntituleF']."</option>";
      }
      ?>
    </select>   
                                <br/>
                                <br/>

    <!-- <input type="radio" value='f' name="sex">femme <br/>
    <input type="radio" value='m' name="sex">homme<br/>
    <label for="job">loisire:</label><br/>
    <input type="checkbox" value="sport" name="loisire1"> sport <br/>
    <input type="checkbox" value="lecture" name="loisire2"> lecture <br/>
    <input type="checkbox" value="musique" name="loisire3"> musique <br/>
    <textarea name="comnt"  placeholder="votre commantaire *"></textarea>
 -->


	<br/> <input type="submit" value="valider" name="submit">
	</form>

 </div>
