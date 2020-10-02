<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="public/css/css.css" />
</head>

<body >

<div class="top">
<img src= 'public/img/fsdm.jpg' border = '0' hspace = '20' vspace = '20' align = 'left' />
<span class="top">SMI6</span><br />
Facult&eacute; des Sciences Dhar Mehraz, F&egrave;s </div>

<h4> <?php if(isset($_SESSION['login'])){
	?><a href="index.php?action=decon">DECONNECTION</a>
	<?php }  ?> </h4>
<br /><br />

<!-- La vue pricipale -->
<?= $page ?>


<!-- le bas de page-->
<br /><hr /><br />
<div class="bas">&copy; copyright: SMI6 2020<br />Facult&eacute; des Sciences Dhar Mehraz</br>smi6@fsdmfes.ac.ma</div>
</body>
</html>
