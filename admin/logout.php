<?php
require_once '../config.php';
session_start();
$user_id = $_SESSION["loggedin"]['id'];
$session_id = $_SESSION["loggedin"]['session_id'];

$sql = "DELETE FROM user_sessions where user_id='$user_id' AND session_id='$session_id'";
if ($result = mysqli_query($conn, $sql)) {
    $row = $conn->affected_rows;
}

unset($_SESSION["loggedin"]);

$_SESSION['loggedin'] = "";
session_destroy();
header("location: /admin/login.php");
