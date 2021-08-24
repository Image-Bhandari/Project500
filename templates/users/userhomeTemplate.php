<article class="property-listing">

    <?php  
       foreach ($data as $value) {
    ?>

    <section class="property">
        <div class="thumbnail_images"> 
            <div class="slides fade">
                <img src="a.png" id="img_slider" alt="Image Link Broken" style="width:100%; height: 100%;">
            </div>

            <a class="prev">&#10094;</a> 
            <a class="next">&#10095;</a>
        </div>

        <div class="details">
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
            <input type="submit" value="Enquiry" class="enquir" name="book_prop">
            </form>
        </div>
    </section>

    <?php } ?>

</article>