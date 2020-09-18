<h1>Autentification</h1>


<form name = "loginForm" action = "" method = "post" >
<pre>
<span class="Err"><?= isset($erreur["User"])? $erreur["User"]:"" ?> </span>
Login    <input name ="Login" type = "text" /> <span class="Err"><?= isset($erreur["Login"])? $erreur["Login"]:"" ?> </span> 

Password <input name ="PW" type = "password" /> <span class="Err"><?= isset($erreur["PW"])? $erreur["PW"]:"" ?> </span>

         <input type = "submit" value = "Se Connecter" /> <input type = "reset" value ="Annuler" />
</pre>
</form>