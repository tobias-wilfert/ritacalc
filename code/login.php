<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="icon"></div>
        </header>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="index.php">Sign up</a>
            </p>
        </form>
        <div id="background-shading"></div>
        <div id="background"></div>
    </body>
</html>
