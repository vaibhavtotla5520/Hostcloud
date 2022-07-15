<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "db_connect.php";
session_start();

if (isset($_POST['Login'])) {
    $value = mysqli_fetch_assoc(mysqli_query($link, "SELECT user_name FROM users WHERE user_email = '" . $_POST['login_email'] . "' AND user_password = '" . $_POST['login_password'] . "'"));
    if ($value) {
        $_SESSION['User'] = $value['user_name'];
        $_SESSION['loggedin'] = true;
        header("location:user_dashboard.php");
    } else {
        $_SESSION['invalid'] = "* Username and *Password are Invalid";
        header("location:index.php");
    }
}
