<article>

    <div class="manageimg">
        <div class="viewimg">Photos</div>
        <div class="viewact">Action</div>

        <?php
            $directory = "../images/".$pid;
            $images = glob($directory . "/*");
            foreach($images as $chitra){ 
        ?>
        <div class="photo-holdr">
            <img src="<?php echo $chitra?>">                
        </div>
            
        <div class="photo-actions">
            <a href="">Delete</a>
        </div>
        
           
            <?php 
            //echo '<tr><td><img src="'.$chitra.'"></td><td></td></tr>';
            } ?>
</article>