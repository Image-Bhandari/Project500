<?php 
	$title = "Edit Client Details";

	if(isset($_GET['cid'])){
		$conn = new DatabaseTable('users');
		$dataa=$conn->find('user_id',$_GET['cid']);
		$data=$dataa->fetch();
	}

	$content = loadTemplate('../templates/admin/editClientDetailsTemplate.php', ['data'=>$data]);//load template 
?>