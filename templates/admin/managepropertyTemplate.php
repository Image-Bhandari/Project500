
<table id="listProperties">

<p> LIST OF PROPERTIES </p>
</br>
<tr><th>Property Name</th><th>Property Type</th><th>Property Location</th><th>Property Details</th><th>No. of guests allowed</th><th>Price per day</th><th>Edit Details</th> </tr>

<?php
foreach ($data as $value) {
    echo '<tr><td>'.$value['prop_name'].'</td><td>'.$value['prop_type'].'</td><td>'.$value['prop_StreetName'].' '.$value['prop_suburb'].' '.$value['prop_state'].' '.$value['prop_postCode'].'</td><td>'.$value['prop_det'].'</td><td>'.$value['prop_occupancy'].'</td><td>'.$value['price'].'</td><td><a href="index.php?page=addupdateproperty&pid='.$value['prop_id'].'">Edit</a></td>';
}
?>

</table>