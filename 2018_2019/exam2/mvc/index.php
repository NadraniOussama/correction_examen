<?php 
require_once "views.php";
require_once "EtudiantController.php";
require_once "EtudiantModels.php";
try{
	session_start();
	$action =(isset($_GET['action']))? $_GET['action'] :"index";
	$action .="Action";
	// if(!isset($_SESSION['login'])){
	// 	$action = "connAction";
	// }
	if (is_callable($action)){
		$action();
	}

}catch(Exeption $e){
	views("vError",["err"=>$e]);
}

/*
<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong> visites.';
*/
?>


