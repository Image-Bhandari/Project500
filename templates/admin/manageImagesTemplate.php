<article>

    <div class="manageimg">
        <div class="viewimg">Photos</div>
        <div class="viewtitle">Picture Title</div>
        <div class="viewact">Action</div>

        <?php
            $directory = "../images/".$pid;
            $images = glob($directory . "/*");
            foreach($images as $chitra){ 
        ?>
        <div class="photo-holdr">
            <img src="<?php echo $chitra?>">                
        </div>
                
        <div class="photo-title">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, itaque!</span>
            <div onclick="enable();" class="editbutton"><h5>Edit <i class="fas fa-pen"></i></h5></div>
        </div>
            
        <div class="photo-actions">
            <a href="">Update</a>
            <a href="">Delete</a>
        </div>
        
           
            <?php 
            //echo '<tr><td><img src="'.$chitra.'"></td><td></td></tr>';
            }
        ?>
</article>