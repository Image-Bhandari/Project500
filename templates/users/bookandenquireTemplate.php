<?php
$id='0';
foreach($data as $value){
    echo 'Name  '.$value['prop_name'];
    echo 'Property Type  '.$value['prop_type'];
    echo '<br>Address     '.$value['prop_suburb'];
    $id=$value['prop_id'];
    echo '<br>Details       '.$value['prop_det'];
    echo '<br>Price     '.$value['price'];
}

?>

<form method="post" action="index.php?page=bookandenquire">
<input type="hidden" name="id" value=<?php echo $id;?>>
<input type="submit" value="Book">
</form>

<h3>Confused about this? <br>Need to find out more? <br><br> Take a chat with us and we can guide you..<br></h3>
<button><a href ="index.php?page=chatnow"> CHAT NOW </a></button>