
<table id="listStaff">

<form method="post" action="index.php?page=registerStaff">
		<input type="submit"  value="Add Staff">
</form>

<p> LIST OF STAFF </p>
</br>
<tr><th>First Name</th><th>Last Name</th><th>E-mail Address</th> </tr>

<?php
foreach ($data as $value) {
    echo '<tr><td>'.$value['firstname'].'</td><td>'.$value['lastname'].'</td><td>'.$value['email'].'</td></tr>';
}
?>

</table>