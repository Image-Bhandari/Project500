<?php
	$title = "Customer Support";
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && ($_SESSION['role']  == 'staff' || $_SESSION['role'] == 'admin')){
		$connToInsert = new DatabaseTable('contactform');
		$allData=$connToInsert->findAll();

		if(isset($_GET['assign'])){
			$values= [
				'cntfrmid' => $_GET['assign'],
				'staff_id' => $_SESSION['username']
			];
			$connToInsert->update($values,'cntfrmid');
			header('location:index.php?page=customersupport');
		}
		$content = loadTemplate('../templates/admin/custsupTemplate.php', ['allData'=>$allData]);//load template
	}else {
		session_unset();
		header('location:../public_html/index.php?page=login');
	}
?>