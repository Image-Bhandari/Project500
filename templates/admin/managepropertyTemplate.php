
<table id="listProperties">

<p> LIST OF PROPERTIES </p>
</br>
<tr><th>Property Name</th><th>Property Location</th><th>Property Details</th><th>Edit Details</th> </tr>

<?php
foreach ($data as $value) {
    echo '<tr><td>'.$value['prop_name'].'</td><td>'.$value['prop_addr'].'</td><td>'.$value['prop_det'].'</td><td><a href="index.php?page=####&pid='.$value['prop_id'].'">Edit</a></td>';
}
?>

</table>