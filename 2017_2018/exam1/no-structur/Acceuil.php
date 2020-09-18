<?php
session_start();
if (!isset($_SESSION['USER'])) {include "autantification.php" ; exit();}
// or
#if (!isset($_SESSION['USER'])) {header('location : accauil.php')}
include "haut.php";
require_once "data.php";

?>
<div class ="main">
	<h1>Acceuil</h1>
	<div class="txt">
	<p> Ceci et le site de la faculte tu peux voire tout les etudiants et changer des notes.
	</p>
	</div>
</div>


<?php 
include 'bas.php';