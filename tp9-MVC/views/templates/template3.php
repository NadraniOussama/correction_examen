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
	<title> tp9</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/css.css">
<style type="text/css">
.main{
	color: <?php echo $color;?>;
}
.aside a {
	color: <?php echo $sideColor;?>;	
}
}	
</style>	
</head>
<body>
	<div class ="header" id="header">
		<section class="headercontent">
			<div class="leftside">
				<img src="public/images/images.jpg" >
				<div class="title" 	>
					<h2>SMI6</h2>
					<h4>Faculté des Sciences Dhar Mahraz, Fes.</h4>
				</div>
				<div class="date"  align="right"> 
					<?php echo afficherDate($lang); ?>
				</div>
			</div>
		</section>
	</div>
<br/>
	<div class="userdata">
		 <h5 align="right">
		 	<?php
			if(isset($_SESSION["user"])){?>vous etes connecter avec le compte <?php echo strtoupper($_SESSION["user"]);?> <a href="index.php?module=user&action=deconnexion">Disconnect</a> <?php }else{?>no connection<?php }?>   
			<a href="index.php?module=user&action=options">OPTION</a></h5>	 	
			<!-- <a href="">OPTION</a></h5>	 	 -->

	 </div>	
<br/>
	<table>
	 <tr class="maintr" >
	  <td class="side"<?php echo "style=\"background-color:".$sideBgcolor.";\"> ";?> 
		<div class="aside" >
			<h3><a href="index.php?module=index&action=index">Acceuil</a></h3>
			<h3><a href ="index.php?module=Filiere&action=liste">Gestion des filières</a></h3>
			<h3><a href ="index.php?module=Etudiant&action=liste">Gestion des étudiants</a></h3>
		</div>
  	  </td>
      <td <?php echo "style=\"background-color:".$bgcolor.";\" ";?>>

				<!--*******************************************************-->
				<!--*******************************************************-->
				<!--*******************************************************-->
				<?php
				echo $view;
				?>
				<!--*******************************************************-->
				<!--*******************************************************-->
				<!--*******************************************************-->
				<hr>
		</td>
	 </tr>
	</table>	
				<hr>
 <div class="footer">

		<p>
			&copy; copyright: SMI S6 2020 </br>
			Faculté des Sciences Dhar Mehraz </br>
					Nadrani Oussama</br>
			 nadranisama@gmail.com
		</p>
	</div>

</body>
<footer>
	<script type="text/javascript" src="public/javascript/ajax.js"></script>
</footer>
</html>
