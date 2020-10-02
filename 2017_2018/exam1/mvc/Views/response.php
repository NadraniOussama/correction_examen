<?php 
function response($p, array $data){
	extract($data);
	$page = "Views/".$p;
	if(file_exists($page)){
		ob_start();
		require_once($page);
		$view=ob_get_clean();
	}
	
	ob_start();
	require "Views/template.php";
	return ob_get_clean();
}