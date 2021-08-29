<?php

    $title="Provide Feedback";
    $conn= new DatabaseTable('feedbacks');
    $userID=$_SESSION["user_id"];
    $propertyID='';
    $fetchVal=array();

    if(isset($_GET['pid'])){
        $propertyID=$_GET['pid'];
        $getVal = new DatabaseTable ('properties');
        $fetchVal=$getVal->find('prop_id',$propertyID);
    }
    

    if(isset($_POST['feedback'])){
        unset($_POST['feedback']);
        $conn-> insert($_POST);
		header('location:index.php');
    }



	$content = loadTemplate('../templates/users/feedbackTemplate.php', ['propertyID'=>$propertyID,'userID'=>$userID,'fetchVal'=>$fetchVal]);//load template
?>