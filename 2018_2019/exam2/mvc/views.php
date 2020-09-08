<?php 
function views($p, array $t = array()){
	extract($t);
	$file = "Views/".$t.".php";
	$pafe ="";
	if (file_exists($file)){
		ob_start();
		require $file;
		$page = ob_get_clean();
	}
	require "Views/template.php";
}