<?php
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
  
  //Requête
  
 $rq = "select * from etudiant where filiere = '".$_GET["filiere"]."'";;  
 $result =  $cn->query($rq);
  
 ?> 
  
 <!-- Affichage -->
<table border = '1' bordercolor = 'red' cellpadding = '10' width = '80%' align = 'center'>

<tr><th>Code</th><th>Nom</th><th>Prénom</th><th>Filière</th></tr>

<?php
  while ($row = $result->fetch()) {
  
  //affichage d'une ligne (row)
  echo "
  <tr>
  
  <td>
	<a href = 'detail.php?C=" . $row[0] . "'>" . $row[0] . "</a>  
  </td>
  
  <td> 
  <a href = 'detail.php?C=" . $row[0] . "'> " . $row[1] . "</a>
  </td> 
 
 <td> 
 <a href = 'detail.php?C=" . $row[0] . "'> " . $row[2] . "</a>
 </td> 
 
 <td> 
 <a href = 'detail.php?C=" . $row[0] . "'> " . $row[3] . "</a>
 </td> 
 
 </tr>";
  
  
  }
 echo "</table> ";
  

?>