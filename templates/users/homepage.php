<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
           <a href="index.php"> <img src="../images/logo/logo.png" alt="Local Partners Pty Ltd"></a>
        </div>

        <nav>
        
        <div class="userinfo">
        <?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
            echo '<b>User:</b><a href="#"> '. $_SESSION['username'] .'</a>';
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
</body>
</html>