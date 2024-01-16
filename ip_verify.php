<?php

include("config.php");

$servername = "localhost";
$db_username = $username;
$db_password = $password;


$conn_new = mysqli_connect($servername, $db_username, $db_password, $dbname);
if (!$conn_new) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) FROM admin_login_log where log_message = 'Reset password request' and mac_address = '".$_SERVER['REMOTE_ADDR']."'";

if ($result = mysqli_query($conn_new, $sql)) {
    $row = $result->fetch_row();
    $total_login = $row[0];
    if($total_login > 0){
        http_response_code(404);
        include('404.html'); // provide your own HTML for the error page
        die();
    }
}


