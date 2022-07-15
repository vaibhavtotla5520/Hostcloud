<?php
$server = "localhost";
$db_username = "gyanotec_vaibhav";
$db_password = "2L@23totla";
$db_name = "gyanotech_hostcloud";

$link = mysqli_connect($server, $db_username, $db_password, $db_name);
$mysqli = new mysqli($server, $db_username, $db_password, $db_name);

if (!$link) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    // echo "Connection Successful";
}
