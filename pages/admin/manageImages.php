<?php

$title="Manage Images";
$pid=0;

if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
}

$content = loadTemplate('../templates/admin/manageImagesTemplate.php', ['pid'=>$pid]); 

?>