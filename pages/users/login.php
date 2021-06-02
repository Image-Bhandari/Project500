<?php
	$title = "Local Partners Pty Ltd";
	$conn = new DatabaseTable('users');
	$data=$conn->findAll();
	
	if(isset($_POST['login'])){
		foreach($data as $value){
			if($value['username']==$_POST['username'] && $value['password']==$_POST['password'] && $value['role']=='user'){
				echo "User login Success";
			}
		}
	}

	$content = loadTemplate('../templates/users/loginTemplate.php', []);//load template
?>