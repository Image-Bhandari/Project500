<?php
    $title="Provide Feedback";

    if(isset($_GET['pid'])){
        $propertyID=$_GET['pid'];
    }
    $userID=$_SESSION["user_id"];

	$content = loadTemplate('../templates/users/feedbackTemplate.php', ['i'=>$propertyID,'j'=>$userID]);//load template
?>