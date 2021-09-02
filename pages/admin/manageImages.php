<?php

$title="Manage Images";
$pid=0;

if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
}

if(isset($_GET['dpid'])){
if(unlink('../images/'.$pid.'/'.$_GET['dpid'].'.jpg')){
    header('location:index.php?page=manageImages&pid='.$pid);
}
else if(unlink('../images/'.$pid.'/'.$_GET['dpid'].'.jpeg')){
    header('location:index.php?page=manageImages&pid='.$pid);
}
else{echo 'Sorry Server Error.';}
}

if(isset($_POST['addPic'])){
		$target_dir = "../images/".$_POST['pid']."/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
		  echo "File is an image - " . $check["mime"] . ".";
		  $uploadOk = 1;
		} else {
		  echo "File is not an image.";
		  $uploadOk = 0;}

		  if($imageFileType != "jpg" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$temp = explode(".", $_FILES["fileToUpload"]["tmp_name"]);
    $directory = "../images/".$_POST['pid'];
    $images = glob($directory . "/*");
    $lastVal=array();
    foreach($images as $chitra){
        array_push($lastVal,(int)substr($chitra,-5,-4));
    }
    $newfilename = (max($lastVal)+1);
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename.'.jpg')){
	header('Location:index.php?page=manageImages&pid='.$_POST['pid']);
}
else{
	echo "Failed to do the operation. Please Try Again.";
}

}

}
$content = loadTemplate('../templates/admin/manageImagesTemplate.php', ['pid'=>$pid]); 

?>