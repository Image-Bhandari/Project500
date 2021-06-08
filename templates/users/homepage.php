<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <script type="text/javascript" src="../css/js.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
           <a href="index.php"> <img src="../images/logo/logo.png" alt="Local Partners Pty Ltd"></a>
        </div>

        <nav>
        
        <!-- notification icon -->
        <div class="icon" onclick="toggleNotifi()">
			<img src="../images/logo/bell.png" alt=""> <span>17</span>
		</div>
		<div class="notifi-box" id="box">
			<h2>Notifications <span>17</span></h2>
			<div class="notifi-item">
				<img src="../images/logo/avatar1.png" alt="img">
				<div class="text">
				   <h4>Elias Abdurrahman</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>
        </div>

        <div class="userinfo">
        <?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
<<<<<<< Updated upstream
            echo '<b><a href="index.php?page=history">History</a></b>';
            echo '<b>User:</b><a href="index.php?page=userprofile"> '. $_SESSION['username'] .'</a>';
=======
            echo '<b>User:</b><a href="index.php?page=userprofile"> '. $_SESSION['user_id'] .'</a>';
>>>>>>> Stashed changes
?>  

            <form method="POST" action="index.php?page=login">
            <input class ="login" type="submit" value="LogOut" name="logout">
            </form>
            
                <?php
        }
                else{
                   echo '<a class="login" href="index.php?page=login">Login</a>';
                }
                    ?>
            </div>
        </nav>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>

    </footer>
    <script src="../scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
</body>
</html>