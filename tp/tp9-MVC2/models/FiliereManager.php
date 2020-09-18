<?php
require_once("models/conn.php");

function getListeFilieres()
{
	
	return getCn()->query("select* from filiere")->fetchAll();
};

function getDetailFiliere($id)
{	
	$clauseWhere = empty($id)? " " : "where codeF = '$id'";
	return getCn()->query("SELECT * FROM filiere ".$clauseWhere)->fetch();
}

function ajouterFiliere($data)
{
	$clean=cleanDataArray($data);
	$sql ="INSERT INTO `filiere` (`codeF`, `IntituleF`) VALUES ('".$clean["codeF"]."', '".$clean["IntituleF"]."');";

	getCn()->exec($sql);
};
function modifierFiliere($data)
{
	$data = cleanDataArray($data);
	getCn()->prepare("UPDATE filiere set codeF=?, IntituleF=? where codeF=?")->exec([$data['codeF'], $data['IntituleF'], $data['id']]);
};

function supprimerFiliere($id)
{
	getCN()->prepare("DELETE FROM filiere where codeF=?")->exec([$id]);
};
