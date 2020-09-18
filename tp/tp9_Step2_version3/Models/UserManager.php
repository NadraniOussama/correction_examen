<?php 
require_once("cn.php");

function user_exists(array $t){
	$Rq= "select count(*) from User where user = '" . $t[0] . "' and password = '" . $t[1] ."'";
	return getCn()->query($Rq)->fetchColumn();
}