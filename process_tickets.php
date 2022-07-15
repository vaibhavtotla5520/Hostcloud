<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true) {
    // header("Location:intledex.php");
    exit('Something went wrong...');
}

$user_id = $user_name = '';
if (!empty($_SESSION['User']) && !empty($_SESSION['user_id'])) {
    $user_name = $_SESSION['User'];
    $user_id = $_SESSION['user_id'];
}

$title = !empty($_POST['title']) ? $_POST['title'] : '';
$query = !empty($_POST['query']) ? nl2br($_POST['query']) : '';

$uploads_dir = 'images/ticketAttachments';
$name1 = '';
if (!empty($_FILES["attachments1"])) {
    $tmp_name1 = $_FILES["attachments1"]["tmp_name"][0];
    $name1 = basename($_FILES["attachments1"]["name"][0]);
    move_uploaded_file($tmp_name1, "$uploads_dir/$name1");
}
$name2 = '';
if (!empty($_FILES["attachments2"])) {
    $tmp_name2 = $_FILES["attachments2"]["tmp_name"][0];
    $name2 = basename($_FILES["attachments2"]["name"][0]);
    move_uploaded_file($tmp_name2, "$uploads_dir/$name2");
}
$name3 = '';
if (!empty($_FILES["attachments3"])) {
    $tmp_name3 = $_FILES["attachments3"]["tmp_name"][0];
    $name3 = basename($_FILES["attachments3"]["name"][0]);
    move_uploaded_file($tmp_name3, "$uploads_dir/$name3");
}

$attachmentsFull = $name1 . '|' . $name2 . '|' . $name3;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO user_tickets (user_id,user_name,title,query,attachments) VALUES ($user_id, '$user_name', '$title','$query','$attachmentsFull');";
    require_once 'db_connect.php';
    if (mysqli_query($link, $sql)) {
        echo "Ticket Generated...";
        // header('location:customer_login.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
    //close connection
    mysqli_close($link);
}
