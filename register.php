<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentLogin Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login">
	<h1>Register Now!</h1>
    <form method="post" action="process/register_process.php" method="POST">
        <i class="login__icon fas fa-user"></i>
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required"/>
        <button type="submit" class="btn btn-primary btn-block btn-large" name="register">Register Account</button>
    </form>
    <div class="social-login">
        <a href="login.php" class="social">
            <h3>Log into Account</h3>
        </a>
    </div>
</div>
</body>
</html>