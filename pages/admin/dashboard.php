<?php 
	$title = "Loyal Partners";
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && ($_SESSION['role']  == 'staff' || $_SESSION['role'] == 'admin')){
		$content = loadTemplate('../templates/admin/dashboardTemplate.php', []);//load template 
	}else {
		session_unset();
		header('location:../public_html/index.php?page=login');
	}
?>