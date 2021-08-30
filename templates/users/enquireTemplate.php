<article>

    <?php
        $id='0';
        foreach($data as $value){
            $id=$value['prop_id'];
    ?>

    <div class="propdetails">
        <h2><?php echo 'Name  '.$value['prop_name'];?></h2><br>
        <h4><p><?php echo $value['prop_type'];?> Located at:
        <?php echo $value['prop_StreetName'].' '.$value['prop_suburb'].' '.$value['prop_state'].' '.$value['prop_postCode'];?></p>
        <p>Recommended Guests: <?php echo $value['prop_occupancy'];?></p>
        <p>Details: <?php echo $value['prop_det']; ?></p>
        <p>Price: $<?php echo  $value['price'];?></p><br></h4>
    </div>
    <?php } ?>

    <!-- property image start -->
    <div class="property_pictures">
        <?php $counter=1;  foreach ($images as $value) { $tot=8; ?> 
            <div class="prop_picture_cont">
                <div class="numbertext"><?php echo $counter; $counter++; echo ' / '.$tot.'';?></div>
                <a target="_self" href="../images/<?php echo $value['name']?>" data-lightbox="mygallery" data-title="<?php echo $value['alt'];?>">
                    <img src="../images/<?php echo $value['name']?>">
                </a>
            </div>
        <?php } ?>    

        <a class="prev" onclick="propViewerSlides(-1)">❮</a>
        <a class="next" onclick="propViewerSlides(1)">❯</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="property_pictures_row">
            <?php $counter=1; foreach ($image as $value) { ?> 
                <div class="property_pictures_column">
                    <img class="demo cursor" src="../images/<?php echo $value['name'];?>" style="width:100%" onclick="currentPropViewSlide(<?php echo $counter; $counter++?>)" alt="<?php echo $value['alt'];?>">
                </div>
            <?php } ?>
     
        </div>
    </div>

    <!-- property image end -->

    <form method="post" action="index.php?page=book">
        <label>From  : </label>
        <input type="date" name="start_time" required><br><br>

        <label>To      :  </label>
        <input type="date" name="end_time" required><br>

        <input type="hidden" name="prop_id" value=<?php echo $id;?>><br>
        <input type="hidden" name="status" value="Not-Confirmed">
        <input type="submit" class="login" name="book" value="Book">
        <input type="hidden" name="user_id" value=<?php echo $uid;?>>
    </form><br><br>

    <form>
        <br>
        <h2> FeedBacks: </h2><br>
        <?php
            foreach($allfeedback as $value){
                $num = (int)$value['rating'];
                echo '<div class="fedbak">';
                for($i=1;$i<=(int)$value['rating'];$i++){echo '<i class="fa fa-star"></i>';}
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