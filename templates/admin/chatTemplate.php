<div name="1">
<h3> Chat You Handled </h3>
<?php
foreach ($handledname as $value) {
    echo '<li><a href="index.php?page=chat&chat='. $value.'">'.$value.'</a></li><br><br>';
}
?>
</div>
<div name="2">
<div name="2.1">
<?php
$client="";
foreach ($message as $mes) {
    if($mes['message_by']==$_SESSION['username']){
        echo "You (".$_SESSION['username'].") : ". $mes['message'].'<br>';
    }
    else{
        echo "Client (".$mes['message_by'].") : ". $mes['message'].'<br>';
        $client=$mes['message_by'];
        
    }
}
?>
</div>
<br>
<br>
<br>
<div name="2.2">
<form method="post" action="index.php?page=chat">
<input type="text" name="message">
<input type="hidden" name="message_to" value=<?php if($client!=""){echo $client;} else echo " ";?>>
<input type="hidden" name="message_by" value=<?php echo $_SESSION['username'];?>>
<input type="submit" name="send" value="Send">
</form>
</div>
</div>
<div name ="3">
<h3>Requests:</h3>
<?php
foreach ($unhandledname as $value) {
    echo '<li><a href="index.php?page=chat&handle='. $value.'">'.$value.'</a></li><br><br>';
}
?>
</div>
