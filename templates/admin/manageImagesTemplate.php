<section>
<table>
<tr><th>Photos</th><th>Action</th></tr>
<?php
$directory = "../images/".$pid;
$images = glob($directory . "/*");
foreach($images as $chitra){
echo '<tr><td><img src="'.$chitra.'"></td><td><a href="">Delete</a></td></tr>';
}
?>
</table>
</section>