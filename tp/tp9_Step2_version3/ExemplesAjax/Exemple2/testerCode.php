<?php
for ($i=0; $i<10000000;$i++){

}


//connexion

$user = 'root';
$password = '';

$db = 'mysql:host=localhost;dbname=SMI2020';


try {
  $cn = new PDO($db, $user, $password);
  }
catch (PDOException $dbex) {
  die("Erreur de connexion : " . $dbex->getMessage() );
  }





if($result = $cn->query ("select count(*) from etudiant where Code = '" . $_GET["code"] ."'")->fetchColumn()) {
	echo "<img src = 'stop.gif' align = 'middle'  /> <b><font color= 'red'> Ce code existe déjà !! </font></b>";
	}
else { 
	echo "<img src = 'ok.gif' align = 'middle' /> <b><font color= 'green'> Ok !!! </font></b>";
	}

?>