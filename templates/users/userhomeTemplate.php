<article class="property-listing">

    <?php  
       foreach ($data as $value) {
    ?>

    <section class="property">
        <div class="details">
            <span><?php echo $value["prop_name"];?></span>
            <span>Location: <?php echo $value["prop_addr"];?></span>
            <span>Details: <?php echo $value["prop_det"];?></span>
            <span><?php echo $value["prop_occupancy"];?> Guests</span>
            <span><b>$<?php echo $value["price"];?> AUD </b>Total</span>
        </div>
        
        <div class="booking-options">
        <form method="POST" action="index.php?page=userhome">
            <input type="hidden" name="pid" value="<?php echo $value['prop_id'];?>">
            <input type="submit" value="Book Property" name="book_prop">
            <a href="#">Enquire</a>
            </form>
        </div>
    </section>

    <?php } ?>

</article>