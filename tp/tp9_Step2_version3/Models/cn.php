<?php 

function getCn(){
	require("Config/config.php");
	$server =$config["database_server"];
	$DB =$config["database_name"];
	$user =$config["database_user"];
	$pw =$config["database_password"];
	static $cn;
	if(!$cn) $cn= new PDO("mysql:host=$server;dbname=$DB", $user, $pw);
	return $cn;
}
