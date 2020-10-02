<?php 
function view($p,array $data = array()){
	extract($data);
	$file="Views/".$p.".php";
	if (file_exists($file)) {
		ob_start();
		require_once($file);
		$page = ob_get_clean();
	}
	require_once('Views/template.php');
}