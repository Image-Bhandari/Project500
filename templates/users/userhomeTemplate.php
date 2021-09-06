<article class="property-listing">

    <?php  
        foreach ($data as $value) {
            $pidjs = $value['prop_id'];
    ?>

    <section class="property">
        <div class="thumbnail_images"> 
            <div class="slides fade">
                <img src="../images/<?php echo $pidjs?>/1.jpg" id="img_slider<?php echo $pidjs; ?>" alt="Image Link Broken" style="width:100%; height: 100%;">
            </div>

            <?php
                $dir = "../images/".$pidjs;
                $img = glob($dir . "/*");
                $inf = array_diff(scandir($dir), array('.', '..')); //gets the file name in an array list
                
                $c= count($inf);
                ${'propertyimages'.$pidjs} = "[";
                for ($counter=2; $counter < $c+2; $counter++) { 
                    $a = ",";
                    if ($counter == $c+1) {$a="]";};
                    ${'propertyimages'.$pidjs} .= "'".$inf[$counter]."'".$a;
                }
            ?>

            <a class="prev" onclick="slideshow_substract('img_slider<?php echo $pidjs; ?>',slide_images<?php echo $pidjs; ?>)">&#10094;</a> 
            <a class="next" onclick="slideshow_add('img_slider<?php echo $pidjs; ?>',slide_images<?php echo $pidjs; ?>)">&#10095;</a>
        </div>

        <div class="details">
            <span><?php echo ${'propertyimages'.$pidjs}; ?></span>
            <span class="details-type">Completely Serviced <?php echo $value["prop_type"];?> located in <?php echo $value["prop_suburb"];?></span>
            <span class="details-name"><?php echo $value["prop_name"];?></span>
            <span class="details-line"></span>
            <span><?php echo $value["prop_det"];?></span>
            <div class="details-bottom">
                <span>Suitable for <?php echo $value["prop_occupancy"];?> Guests</span>
                <span><b>$<?php echo $value["price"];?></b> / Night</span>
            </div>
        </div>
        
        <div class="booking-options">
        <form method="POST" action="index.php?page=userhome">
            <input type="hidden" name="pid" value="<?php echo $value['prop_id'];?>">
            <input type="submit" value="Book" class="enquir" name="book_prop">
            </form>
        </div>
    </section>

    <script>
        const slide_images<?php echo$pidjs; ?> = <?php echo ${'propertyimages'.$pidjs}; ?>;
        console.log(slide_images<?php echo$pidjs; ?>);
    </script>

    <?php } ?>

</article>