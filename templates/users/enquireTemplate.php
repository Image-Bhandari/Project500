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
<form method="post" action="index.php?page=book">
<label>From: </label>
<input type="date" name="start_time">
<label>To: </label>
<input type="date" name="end_time">
<input type="hidden" name="prop_id" value=<?php echo $id;?>>
<input typpe="hidden" name="status" value="Not-Confirmed">
<input type="submit" name="book" value="Book">
<input type="hidden" name="user_id" value=<?php echo $uid;?>>
</form>

<h3>Confused about this? <br>Need to find out more? <br><br> Take a chat with us and we can guide you..<br></h3>
<button><a href ="index.php?page=chatnow"> CHAT NOW </a></button>