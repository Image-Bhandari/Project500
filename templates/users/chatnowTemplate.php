<div>
    <div>
        <?php
        $agent="";
        foreach ($message as $mes) {
            if($mes['message_by']==$_SESSION['username']){
                echo "You (".$_SESSION['username'].") : ". $mes['message'].'<br>';
            }
            else{
                echo "Loyal Partners (".$mes['message_by'].") : ". $mes['message'].'<br>';
                $agent=$mes['message_by'];
                
            }
        }
        ?>
    </div>

    <br>
    <br>
    <br>

    <div>
        <form method="post" action="index.php?page=chatnow">
            <input type="text" name="message">
            <input type="hidden" name="message_to" value=<?php if($agent!=""){echo $agent;} else echo " ";?>>
            <input type="hidden" name="message_by" value=<?php echo $_SESSION['username'];?>>
            <input type="submit" name="send" value="Send">
        </form>
    </div>
</div>