<?php
require_once('../connection.php');
session_start(); 

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($username && $password) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../index.php');
            
        } else {
            $_SESSION['message'] = "Wrong username/password combination";
            header('location: ../login.php');
        }
    }
    else{
        $_SESSION['message'] = "Login Failed";
        header('location: ../login.php');
    }
}
