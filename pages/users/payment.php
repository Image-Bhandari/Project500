<?php
    $title="Process Payment";
    $connToInsert =new DatabaseTable("creditinfo");
    $connToUpdate = new DatabaseTable("bookings");
    if(isset($_POST['submit'])){
        unset($_POST['submit']);
        $connToInsert-> insert($_POST);
		if($connToInsert){
            header('location:index.php?page=history&book_id='.$_POST['book_id'].'&cred-detail='.$_POST['cardnumber']);

        }
    }
	$content = loadTemplate('../templates/users/paymentTemplate.php', []);//load template
?>