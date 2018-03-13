<?php include('server.php') ?>
<!DOCTYPE html>
<!-- Copyright (c) 2018 Tobias Wilfert --->
<html>
  <head>
    <title>Rita Calc</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="index.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
  </head>
  <body>
    <header>
      <h2><a href="login.php">Login In</a></h2>
      <div id="icon"></div>
    </header>
    <h1>Built for Students</h1>
    <h3> Built by students for students. We make it simpler to track your results so you'll have a better time at high-school.</h3>
    <!--Form-->
    <form method="post" action="register.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
    	  <label>Username</label>
    	  <input type="text" name="username" value="<?php echo $username; ?>">
    	</div>
    	<div class="input-group">
    	  <label>Email</label>
    	  <input type="email" name="email" value="<?php echo $email; ?>">
    	</div>
    	<div class="input-group">
    	  <label>Password</label>
    	  <input type="password" name="password_1">
    	</div>
    	<div class="input-group">
    	  <label>Confirm password</label>
    	  <input type="password" name="password_2">
    	</div>
    	<div class="input-group">
    	  <button type="submit" class="btn" name="reg_user">Sign up for Rita Calc</button>
    	</div>
    </form>
    <!--/Form-->
    <div id="background-shading"></div>
    <div id="background"></div>
  </body>
</html>
