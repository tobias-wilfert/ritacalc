<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="icon"></div>
            <div class="content">
                <!-- logged in user information -->
                <?php  if (isset($_SESSION['username'])) : ?>
                    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
                    <h2> <a href="homepage.php?logout='1'">Logout</a> </h2>
                <?php endif ?>
            </div>
        </header>
    </body>
</html>
