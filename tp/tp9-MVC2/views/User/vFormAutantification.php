<div class="main">
 <h1>Autentification</h1>
 <hr >
<form method="post" > <!-- action="index.php?module=index&action=index"  -->
 User:  <input type="text" placeholder="user" name="user" id='user'> user2=>oussama pass=>12345678
 <br/>
 <span class="Err"><?= isset($erreur["user"])? $erreur["user"]:"" ?> </span>
 <br/>
 Password: <input type="password" placeholder="password" name="password">	<span class="Err"><?= isset($erreur["password"])? $erreur["password"]:"" ?> </span><br/>
<br/> <input type="submit" value="valider" name="envoyer">
<input type="reset" value="annuler" name="annuler">
</form>
  
 </div>