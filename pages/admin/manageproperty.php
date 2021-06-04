<?php 
	$title = "Manage Properties";
	$conn = new DatabaseTable('properties');
	$data=$conn->findAll();

	$content = loadTemplate('../templates/admin/managepropertyTemplate.php', ['data'=>$data]);//load template 
?>