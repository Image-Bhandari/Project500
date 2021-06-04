<?php
session_start();
	include '../db/connection.php';
	
	require '../classes/databasetable.php';
	require '../functions/load_template.php';

	if(isset($_GET['page'])){
		require '../pages/admin/'.$_GET['page']. '.php';
	}
	else{
		require '../pages/admin/homepage.php'; // dost yeha arko fil rakhna parxa hai, school wala ma login theo esma ta login ekai thau bata handle huni bhayera
	}
	
	$tempVars = [
		'title' => $title,
		'content' => $content
	];
	
	echo loadTemplate('../templates/admin/homepage.php', $tempVars);

?>
