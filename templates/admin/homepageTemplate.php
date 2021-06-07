<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="../css/adminstyles.css">
</head>
<body>
    <header>
        <div class="logo">
           <a href="index.php"> <img src="../images/logo/logo.png" alt="Local Partners Pty Ltd"></a>
        </div>

        <nav>
            <div class="links">
                <a href="index.php?page=manageproperty">Properties</a>
                <a href="index.php?page=findclients">Clients</a>
                <a href="index.php?page=chat">Chat</a>
            </div>
            <div class="login">
                <?php
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                    echo '<b><a href="#">User: '. $_SESSION['username'] .'</a></b>' ;
                ?>
                    <form action="../public_html/index.php?page=login" method="POST">
                    <input type="submit" name="logout" value="Logout">
                    </form>
                <?php
                    }
                    else{
                        echo '<a href="index.php?page=login">Login</a>';
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