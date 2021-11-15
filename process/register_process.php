<?php
require_once('../connection.php');
session_start(); 

if (isset($_POST['register'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // first check the database to make sure a user does not already exist with the same username 
    $user_check_query = "SELECT * FROM users WHERE name='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    // register user if there are no errors in the form
    if ($result) {
        $password = md5($password); //encrypt the password before saving in the database

        $query = "INSERT INTO users (id,name, password) 
  			  VALUES(1,'$username', '$password')";

        // echo $query;
        mysqli_query($conn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        header('location: ../index.php');
    }
}
?>