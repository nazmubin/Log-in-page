<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["success"]);
unset($_SESSION["message"]);
header("Location:login.php");
