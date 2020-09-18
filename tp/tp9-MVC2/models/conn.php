<?php
    

function getCn()
{//model
	$user = 'root';
	$password = '';
	$db = 'mysql:host=localhost;dbname=SMI2020';
	try {
		$conn = new PDO($db, $user, $password);
	}
	catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage() );
	}
	return $conn;
};

function cleanString($str)
{//model
	$str1=addslashes($str);
	$str2=strtolower($str1);
return trim($str2);
};

function cleanDataArray($data)
{//model
	$returnArray=array();
	foreach ($data as $key => $value) {
		$returnArray[$key]=(!is_null($value))? cleanString($value): "NULL";
	}
return $returnArray;
};
