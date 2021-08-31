<?php
$title= "Booking History";

$conn = new DatabaseTable('booking');
$booking_report=$conn->report();


$content = loadTemplate('../templates/admin/reportTemplate.php', ['booking_report'=>$booking_report]);//load template 
?>