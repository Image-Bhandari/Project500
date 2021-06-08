
<table id="listNotificationa">

<form method="post" action="index.php?page=addNotif">
		<input type="submit"  value="Add Notification">
</form>

<p> LIST OF Notifications </p>
</br>
<tr><th>Notification Title</th><th>Notification Message</th><th>Posted Date</th><th>Sent To</th><th>Edit Notification</th> </tr>

<?php
foreach ($data as $value) {
    echo '<tr><td>'.$value['notif_title'].'</td><td>'.$value['notif_msg'].'</td><td>'.$value['notif_date'].'</td><td>'.$value['role'].'</td><td><a href="index.php?page=notif&did='.$value['notif_id'].'" class="delete">Delete</a></td></tr>';
}

?>

</table>