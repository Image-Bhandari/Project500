<?php
	$title = "Customer Support";
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
?>