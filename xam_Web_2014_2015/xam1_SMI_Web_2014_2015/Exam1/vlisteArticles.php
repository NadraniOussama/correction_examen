<h1><u>A la une:</u></h1>

<?php 
for ($i=0;$i<3;$i++) {

//if est just pour vérifier qu'il y a des articles, sinon on n'affiche rien
if ($row = $resultat->fetch()){

/*pour les " premiers article, on affiche l'image, le titre, un résumé de 200 caractères (substring), l'auteur , la date et l'heure*/
?>

<img src="images/<?php echo $row["idArticle"];?>.jpg" align= "left" />
<?php echo "<h2><a href='index.php?action=lireArticle&id=".$row["idArticle"]."'>". $row["Titre"] . "</a></h2>";

echo substr($row["Contenu"],0,200);

echo "<h4>" . $row["prenomAuteur"] . " " . $row["nomAuteur"] . ", " . $row["date"] . ", " . $row["heure"] . "</h4>";
 
//fin if
} 
//fin de la boucle for
 }
 

 /*on boucle sur le reste des articles, fetch continue du 4ème enregistrement et on affiche le titre et la date (le titre et cliquable et mène à la page lireArticle*/
 while ($row = $resultat->fetch()){
  echo "<b> <a href='index.php?action=lireArticle&id=".$row[id]."'>" . $row["titre"] . "</a></b>" . $row["date"]. "<br/>";
 }
 ?>
 