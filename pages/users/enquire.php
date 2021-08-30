<?php

$uid=$_SESSION['user_id'];

$conimg= new DatabaseTable('images');
$images=$conimg->findAll();
$image=$conimg->findAll();


if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
    $product_id=0;
    $availability="Available";
    if(isset($_GET['pid'])){
        $product_id=$_GET['pid'];
        
    }
    $conn = new DatabaseTable('properties');
	$data=$conn->find('prop_id',$product_id);
    $title = "Booking And Enquiring";
    $conn2 = new DatabaseTable('bookings');
    $chk=$conn2->find('prop_id',$product_id);
    $connForFeedBack = new DatabaseTable('feedbacks');
    $allfeedback=$connForFeedBack->find('prop_id',$product_id);
    foreach($chk as $key){
    if($key['prop_id']==$product_id){
        $availability="NotAvailable";
    }
}
    $getusr= new DatabaseTable ('users');
    $getallusr=$getusr->findAll();
    $usrData=[];
    foreach($getallusr as $usrs){
        $fullname = $usrs['firstname']." ".$usrs['lastname'];
        $usrData[$usrs['user_id']]=$fullname;
    }
    $ratings=$connForFeedBack->rating('prop_id',$product_id);

    $content = loadTemplate('../templates/users/enquireTemplate.php', ['usrData'=>$usrData,'allfeedback'=>$allfeedback,'data'=>$data, 'availability'=>$availability,'uid'=>$uid, 'images'=>$images, 'image'=>$image, 'ratings'=>$ratings]);//load template
}
else {
    header('location:index.php?page=login');
}

?>