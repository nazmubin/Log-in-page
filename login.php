<?php
require_once('connection.php');
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login">
	<h1>Welcome</h1>
    <form method="post" action="process/login_process.php">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required"/>
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Log in</button>
    </form>
    <div class="social-login">
        <?php
        if (isset($_SESSION['message'])) {
        ?>
            <span style="color: red;"><b>
                <?php
                echo $_SESSION['message'];
                ?>
            </b></span>
        <?php
        echo '<br>';
        }
        ?>
        <a href="register.php" class="social">
            <h3>Create New Account</h3>
         </a>
    </div>
</div>
</body>
</html>