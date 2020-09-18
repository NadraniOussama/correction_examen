<?php include "haut.php" ;?>

<div class="main" align="center">
	<h1>Login</h1>
	<form action="verifier.php" method="post" >
		user <input type="text" name="user" placeholder="votre login">
		password <input type="password" name="password" placeholder="password">
		<input type="submit" name="" value="verifier">
	</form>
</div>

<?php 
include 'bas.php';