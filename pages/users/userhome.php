<?php
	$title = "Local Partners Pty Ltd";
	$conn = new DatabaseTable('properties');
	$data=$conn->findAll();

	if(isset($_POST['book_prop'])){
		if(isset($_SESSION["login"]) && $_SESSION["login"]== True){

		}
		else {
			header('location:index.php?page=login');
		}
	}

	$content = loadTemplate('../templates/users/userhomeTemplate.php', ['data'=>$data]);//load template
?>