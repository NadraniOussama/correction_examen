<?php
function getStringWeekDay($lang,$sysWDay){#model
	$jours["ar"]=["الاحد","الاثنين","الثلاثاء","الاربعاع","الخميس","الجمعة","السبت"];
	$jours["fr"]=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];
	$jours["en"]=["monday","tuesday","wednednesday","thursday","friday","saturday","sunday"];
	
	$stringWeekgDay=$jours[$lang][$sysWDay];

  return $stringWeekgDay;
}
function getStringMonth($lang,$sysMonth){#model
	 $months["ar"]=["يناير","فبراير","مارس","أبريل","مايو","يونيو","يوليو","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر"];
  	 $months["fr"]=["janvier","fevrier","mars","avril","mai","juin","juiller","aout","septembre","novembre","octobre","decembre"];
  	 $months["en"]=["january","february","march","april","may","june","july","august","september","november","october","december"];
	  
   return $months[$lang][$sysMonth];
}
function getStringDate($lang){ #model
	$sysDate=getdate();
	$stringWeekgDay=getStringWeekDay($lang,$sysDate["wday"]);
	$stringMonth=getStringMonth($lang,$sysDate["mon"]);
	// $months["ar"]=
	if ($lang=="ar") {
	 return $sysDate["year"]." $stringWeekgDay ".$sysDate["mday"]." $stringMonth";
	}else{
		return "$stringWeekgDay ".$sysDate["mday"]." $stringMonth ".$sysDate["year"];		
	}
}; 
if (isset($_GET['lang'])) {
		$lang=$_GET['lang']	;
}elseif(isset($_COOKIE['lang'])){
	$lang=$_COOKIE['lang'];
}else {
	$lang="en";
}
if(isset($_COOKIE['bgClr'])){
	   $bgcolor=$_COOKIE['bgClr'];
}else{
	$bgcolor="";
}
if(isset($_COOKIE['textClr'])){
	   $color=$_COOKIE['textClr'];
}else{
	$color="";
}
if(isset($_COOKIE['sideBgClr'])){
	   $sideBgcolor=$_COOKIE['sideBgClr'];
}else{
	$sideBgcolor="";
}
if(isset($_COOKIE['sideTextClr'])){
	   $sideColor=$_COOKIE['sideTextClr'];
}else{ 
	$sideColor="";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> TP6</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
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
				<img src="images.jpg" >
				<div class="title" 	>
					<h2>SMI6</h2>
					<h4>Faculté des Sciences Dhar Mahraz, Fes.</h4>
				</div>
				<div class="date"  align="right"> 
					<?php echo getStringDate($lang); ?>
				</div>
			</div>
		</section>
	</div>
<br/>
	<div class="userdata">
		 <h5 align="right">
		 	<?php
			if(isset($_SESSION["login"])){?>vous etes connecter avec le compte <?php echo strtoupper($_SESSION["login"]);?> <a href="index.php?action=decon">Disconnect</a> <?php }else{?>no connection<?php }?>  <a href="index.php?action=option">OPTION</a></h5>	 	
	 </div>	
<br/>
	<table>
	 <tr class="maintr" >
	  <td class="side"<?php echo "style=\"background-color:".$sideBgcolor.";\"> ";?> 
		<div class="aside" >
			<h2><a href="index.php">Acceuil</a></h2>
			<h2><a href="listEtudiant.php">Liste</a></h2>
			<h2><a href="index.php?action=ajouter">Ajouter</a></h2>
		</div>
  	  </td>
      <td <?php echo "style=\"background-color:".$bgcolor.";\" ";?>>
      	<?php echo $page;
