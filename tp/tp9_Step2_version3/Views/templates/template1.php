<!-- Designed and developped by Ahmed ZINEDINE (ahmedzinedine[at]yahoo[dot]com) --> 
<?php 
function afficherDate($lang) {
/////La date sur le serveur
$lang = strtoupper($lang);
$jours["AR"] = array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
$jours["FR"] = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$jours["EN"] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$months["AR"]=["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو" , "يوليوز" , "غشت ", "شتنبر" ,"أكتوبر" , "نونبر" , "دجنبر"];

$months["EN"]= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$months["FR"]= ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];


$d = getdate();

$wj = $d["wday"];
$mj = $d["mday"];
$m = $d["mon"];
$y = $d["year"];

$d= $jours[$lang][$wj]. " " . $mj . " " . $months[$lang][$m-1] . " " . $y;
return $d;
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="public/style.css" />

</head>

<body >


<div class="top">
<img src= 'public/images/fsdm.jpg' border = '0' hspace = '20' vspace = '20' align = 'left' />
<span class="top">SMI6</span><br />
Facult&eacute; des Sciences Dhar Mehraz, F&egrave;s </div>

<h4> <?= afficherDate($lang) ?></h4>

<div align= "right">
<?php if (isset($_SESSION["Login"])){?>
Vous êtes connectés en tant que:  <?= strtoupper($_SESSION["Login"]) ?> &nbsp;&nbsp;&nbsp;&nbsp;
<a href = "index.php?module=User&action=deconnexion">Déconnexion</a> 
<?php } else {?>Non Connecté<?php }?>&nbsp;&nbsp; || &nbsp;&nbsp; <a href = "index.php?module=User&action=options">Options</a>  &nbsp;&nbsp;

</div>
<br /><br />

<!--*******************************************************-->
<!--*******************************************************-->
<!--*******************************************************-->



<hr /><br /> <br />

<table id="mainTable"  border="1" bordercolor ="#999999" width = "100%" align = "center" cellpadding="20">
	<tr>
		<td style = "width: 200px; background-color: #993300; color: white; font-weight:bold;  padding: 5px; padding-top : 2cm;" valign= "top">
			<div id ="menu" >
				<ul>
					<li><a href ="index.php?module=Index&action=index">Acceuil</a></li>
					<li><a href ="index.php?module=Filiere&action=liste">Gestion des filières</a></li>
					<li><a href ="index.php?module=Etudiant&action=liste">Gestion des étudiants</a></li>
				</ul>
			</div>
		</td>
		<td bgcolor="gray">
			<div id ="main"> 
				<!--*******************************************************-->
				<!--*******************************************************-->
				<!--*******************************************************-->
				<?= $view ?> 	
				<!--*******************************************************-->
				<!--*******************************************************-->
				<!--*******************************************************-->
			</div>
		</td>
	</tr>
</table>

<!--bas de page -->
<!--*******************************************************-->
<!--*******************************************************-->
<!--*******************************************************-->
<br />

<br /><hr /><br />
<div class="bas">&copy; copyright: SMI6 2020<br />Facult&eacute; des Sciences Dhar Mehraz</br>smi6@fsdmfes.ac.ma</div>
</body>
</html>


