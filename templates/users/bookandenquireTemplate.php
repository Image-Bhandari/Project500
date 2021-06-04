<?php

foreach($data as $value){
    echo 'Name  '.$value['prop_name'];
    echo 'Property Type  '.$value['prop_type'];
    echo '<br>Address     '.$value['prop_addr'];

    echo '<br>Details       '.$value['prop_det'];
    echo '<br>Price     '.$value['price'];
}


?>