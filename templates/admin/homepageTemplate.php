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
            <ul>
                <li></li>
                <li>HI</li>
            </ul>
        <?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
            echo '<b>User:    </b><a href="#"> '. $_SESSION['username'] .'</a>';
?>
            <div class="login">
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