<?php 
	$title = "Loyal Partners";
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && ($_SESSION['role']  == 'staff' || $_SESSION['role'] == 'admin')){

		$connCF = new DatabaseTable('contactform');
		$countCustReq=$connCF->count('staff_id','NotAssigned');
		$content = loadTemplate('../templates/admin/dashboardTemplate.php', ['countCustReq'=>$countCustReq]);//load template 
	}else {
		session_unset();
		header('location:../public_html/index.php?page=login');
	}
?>