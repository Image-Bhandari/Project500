<?php
	$title = "Local Partners Pty Ltd";
	$connToInsert = new DatabaseTable('users');
	
	if(isset($_POST['usersubmit'])){
		var_dump($_POST);
		unset($_POST['usersubmit']);
		unset($_POST['password-re']);
		
		$connToInsert-> insert($_POST);
	}

	$content = loadTemplate('../templates/users/registerTemplate.php', []);//load template
?>