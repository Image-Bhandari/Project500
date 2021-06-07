<?php 
	$title = "Manage Properties";
	$conn = new DatabaseTable('properties');
	$data=$conn->findAll();
	if(isset($_GET['did'])){
		$del_status = $conn->delete("prop_id",$_GET['did']);
		if($del_status){
		header('Location:index.php?page=manageproperty');
		}
	}
	$content = loadTemplate('../templates/admin/managepropertyTemplate.php', ['data'=>$data]);//load template 
?>