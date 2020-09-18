<?php 
session_start();
if (isset($_POST['user']) and isset($_POST['password']))
{	echo "test";
	if ($_POST['user'] == "SMI" && $_POST['password'] == "Laisser Passer")
	{
		$_SESSION['USER'] = $_POST["user"];
	}
}
header('location: Acceuil.php');