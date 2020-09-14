<?php if ($row = $article->fetch()){?>


<h1><?php echo $row["Titre"];?></h1>
<h3>par: <?php echo $row["prenomAuteur"] . " " . $row["nomAuteur"] . "<br />" ;?></h3>
<h4>Le: <?php echo $row["date"] . " " . $row["heure"] . " <br />";?></h4>

<?php echo $row["Contenu"];

//fin if 
}?>

<hr /><br /><br />


<?php
//affichage des commentaires

foreach ($comments as $com){

echo $com["Pseudo"] . " à dit: <br />";
echo $com["Comment"] . "<br /> <br />";

}

//affichage du formulaire
?>

<h3>Ajouter un commentaire</h3>
<form method = "post" action = "index.php?action=insertComment">

<!--champ caché contenant l'id de l'article commenté -->
<input type = "hidden" name = "idArticle" value = "<?php echo $row["idArticle"];  ?>" /> <br />
Pseudo<input type = "text" name = "Pseudo" /><br />
<textarea name = "Comment"> </textarea><br />
       <input type = "submit" value="Envoyer" />

