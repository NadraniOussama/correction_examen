<?php 
function getCn(){
	static $cn;
	if(!$cn) $cn = new PDO("mysql: host=localhost;dbname=DB","root","");
	return $cn;
}

