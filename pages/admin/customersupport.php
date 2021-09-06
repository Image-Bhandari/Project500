<?php
	$title = "Customer Support";
	$connToInsert = new DatabaseTable('contactform');

    $content = loadTemplate('../templates/admin/custsupTemplate.php', []);//load template
?>