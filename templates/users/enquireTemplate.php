<article>

    <?php
        $id='0';
        foreach($data as $value){
            $id=$value['prop_id'];
    ?>

    <div class="propdetails">
        <h2><?php echo 'Name  '.$value['prop_name'];?></h2><br>
        
        <p> <?php foreach ($ratings as $rate){echo '<i class="fas fa-star" style="color: #ffd700;"></i> '.$rate['averages'].' · '.$rate['counts'].'<u> Reviews</u> · ';} ?> <i class="fas fa-map-marker-alt" style="color: #4c6ef5;"></i> <?php echo $value['prop_suburb'].' '.$value['prop_state'].' '.$value['prop_postCode'].' · ';?> <i class="fas fa-home" style="color: #FF385C;"></i> <?php echo $value['prop_occupancy'].' Guests · '.$value['prop_type'];?> </p>

         <!-- property image start -->
        <div class="property_pictures">
            <?php $counter=1;  foreach ($images as $imgval) { $tot=8; ?> 
                <div class="prop_picture_cont">
                    <div class="numbertext"><?php echo $counter; $counter++; echo ' / '.$tot.'';?></div>
                    <a target="_self" href="../images/<?php echo $imgval['prop_id'].'/'.$imgval['name'];?>" data-lightbox="mygallery" data-title="<?php echo $imgval['alt'];?>">
                        <img src="../images/<?php echo $imgval['prop_id'].'/'.$imgval['name'];?>">
                    </a>
                </div>
            <?php } ?>    

            <a class="prev" onclick="propViewerSlides(-1)">❮</a>
            <a class="next" onclick="propViewerSlides(1)">❯</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="property_pictures_row">
                <?php $counter=1; foreach ($image as $imgval) { ?> 
                    <div class="property_pictures_column">
                        <img class="demo cursor" src="../images/<?php echo $imgval['prop_id'].'/'.$imgval['name'];?>" style="width:100%" onclick="currentPropViewSlide(<?php echo $counter; $counter++?>)" alt="<?php echo $imgval['alt'];?>">
                    </div>
                <?php } ?>
        
            </div>
        </div>

        <!-- property image end -->

        <div class="prop-det-book">
            <div class="prop-det">
                <span><i class="fas fa-map-marker-alt" style="color: #4c6ef5"></i> <?php echo $value['prop_type'];?> <?php echo $value['prop_StreetName'].' '.$value['prop_suburb'].' '.$value['prop_state'].' '.$value['prop_postCode'];?></span>
                <span><i class="fas fa-home" style="color: #FF385C;"></i> <?php echo $value['prop_occupancy'].' Guests Recommended';?> </span>
                <span><i class="fas fa-search-location" style="color: #FF385C;"></i>Details: <?php echo $value['prop_det']; ?></span>
            </div>
            <div class="prop-book">
                <div class="prop-price">$<?php echo  $value['price'];?> / Night</div>
                <div class="prop-rating"><?php foreach ($ratings as $rat){echo '<i class="fas fa-star" style="color: #ffd700;"></i> '.$rat['averages'].' · '.$rat['counts'].'<u> Reviews</u> · ';} ?></div>
                <form method="post" action="index.php?page=book">
                    <div class="prop-date"> <label>Check-in :  </label> <input type="date" name="start_time" required></div>
                    <div class="prop-date"> <label>Checkout :  </label> <input type="date" name="end_time" required></div>

                    <input type="hidden" name="prop_id" value=<?php echo $id;?>>
                    <input type="hidden" name="status" value="Not-Confirmed">
                    <input type="submit" class="login" name="book" value="Book">
                    <input type="hidden" name="user_id" value=<?php echo $uid;?>>
                </form>
            </div>  
        </div>
    </div>
    <?php } ?>

    <form>
        <br>
        <h2> FeedBacks: </h2><br>
        <?php
            foreach($allfeedback as $value){
                $num = (int)$value['rating'];
                echo '<div class="fedbak">';
                for($i=1;$i<=(int)$value['rating'];$i++){echo '<i class="fa fa-star"  style="color: #ffd700;"></i>';}
                echo "<br>User: ".$usrData[$value['user_id']];
                echo "<br> Comment: ". $value['description'];
                echo '</div><br>';
            }
        ?>
        <br>
    </form>
<br>
    <h3>Confused about this? <br>Need to find out more? <br><br> Take a chat with us and we can guide you..<br></h3>
    <button><a href ="index.php?page=chatnow"> CHAT NOW </a></button>
</article>