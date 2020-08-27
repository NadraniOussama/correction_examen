<?php

function views($vue , array $data=array()) 
{
require("Config/config.php");

extract($data);
$file ="views/". $vue;

if (file_exists($file)) 
{
	ob_start();
	require ($file);
	$view= ob_get_clean(); 
} 
else 
	throw new Exception("Fichier Introuvable!...");
		
// cookie time 
extract(cookies_css());
$lang=(isset($_COOKIE['lang']))? $_COOKIE['lang'] : "en";

$template = (isset($_COOKIE['template']))? $_COOKIE['template'] : $config['active_template'];

require($config["templates_path"].$template);
}

function cookies_css(){
	
	$bgcolor=(isset($_COOKIE['bgClr']))? $_COOKIE['bgClr'] : "";
	$color=(isset($_COOKIE['textClr']))?$_COOKIE['textClr'] : "";
	$sideBgcolor=(isset($_COOKIE['sideBgClr']))? $_COOKIE['sideBgClr'] : "";
	$sideColor=(isset($_COOKIE['sideTextClr']))? $_COOKIE['sideTextClr'] : "";

	return ["bgcolor" => $bgcolor, "color" => $color, "sideColor" => $sideColor, "sideBgcolor" => $sideBgcolor];
}