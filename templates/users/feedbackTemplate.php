<article class="property-listing">

    <?php  
       foreach ($fetchVal as $value) {
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
    </section>

    <?php } ?>

</article>

<div>
    <form method="POST" action="index.php?page=feedback">
    <input type="hidden" name="user_id" value="<?php echo $userID;?>">
    <input type="hidden" name="prop_id" value="<?php echo $propertyID;?>">
    
<div class="star-rating">
            <div class="star-input">
            <label><h4> Give Ratings !</h4></label>
                <input type="radio" name="rating" id="rating-5" value="5">
                <label for="rating-5" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-4" value="4">
                <label for="rating-4" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-3" value="3">
                <label for="rating-3" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-2" value="2">
                <label for="rating-2" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-1" value="1" checked>
                <label for="rating-1" class="fas fa-star"></label>
</div>
</div>
<div class="textforfeedback">
    <label>Description: </label><br>
<textarea name="description" rows="4" cols="50" value=""> </textarea><br><br>
<t><input type="submit" class="login" name="feedback" value="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;POST&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;">
       </div>
</form>
</div>