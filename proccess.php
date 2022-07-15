<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connect.php';

$name = $email = $mobile = $password = $confirm_password = '';

if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    echo "* Name is required";
}

if (!empty($_POST['email'])) {
    $email_validate = $_POST['email'];
    if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_validate)) {
        $email = $_POST['email'];
    } else {
        echo "Invalid email format";
    }
} else {
    echo "* Email is required";
}

if (!empty($_POST['mobile'])) {
    if (preg_match("/^[0-9]{10}+$/", $_POST['mobile'])) {
        $mobile = $_POST['mobile'];
    } else {
        echo "* Mobile is not valid";
    }
} else {
    echo "* Mobile is required";
}

if (!empty($_POST['password']) && !empty($_POST['confirm_password'])) {
    if ($_POST['confirm_password'] == $_POST['password']) {
        $password = $_POST['password'];
    } else {
        echo "Password doesn't match";
    }
} else {
    echo "* password is Required";
}

if (!empty($name) && !empty($email) && !empty($mobile) && !empty($mobile)) {

    $query = mysqli_query($link, 'SELECT * FROM users ORDER BY user_email') or die(mysqli_error($link));
    $mail_id = $email;
    $phone = $mobile;
    $if_exist = 0;
    while ($fetch = mysqli_fetch_array($query)) {
        if ($mail_id == $fetch['user_email'] || $phone == $fetch['user_mobile'])
            $if_exist = 1;
    }
    if ($if_exist == 1) {
        echo "User already exists...";
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sql = "INSERT INTO users (user_name,user_email,user_mobile,user_password) VALUES ('$name', '$email', '$mobile','$password');";
            if (mysqli_query($link, $sql)) {
                echo "User Created...";
                // header('location:customer_login.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            //close connection
            mysqli_close($link);
        }
    }
} else {
    echo "Recheck your details";
}
