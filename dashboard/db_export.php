<?php

require_once 'config.php';

if($_SESSION["loggedin"]['user_group']!="admin"){
  echo "You have not permission to access this page";exit;
}


// Database configuration

$hostname = $database_cred_data['db_ip'];

$username = $database_cred_data['db_user_name'];

$password = $database_cred_data['db_pass'];

$database = $database_cred_data['db_name'];



// Create a database connection

$mysqli = new mysqli($hostname, $username, $password, $database);



// Check for connection errors

if ($mysqli->connect_errno) {

    echo "Failed to connect to MySQL: " . $mysqli->connect_error;

    exit();

}



// Fetch all tables from the database

$tables = [];

$result = $mysqli->query("SHOW TABLES");



if ($result) {

    while ($row = $result->fetch_row()) {

        $tables[] = $row[0];

    }

} else {

    echo "Error: " . $mysqli->error;

    exit();

}



// Construct SQL dump for all tables

$sqlDump = '';

foreach ($tables as $table) {

    $result = $mysqli->query("SELECT * FROM `$table`");



    if ($result) {

        $sqlDump .= "DROP TABLE IF EXISTS `$table`;\n";

        $row2 = $mysqli->query("SHOW CREATE TABLE `$table`")->fetch_assoc();

        $sqlDump .= $row2['Create Table'] . ";\n";



        while ($row = $result->fetch_assoc()) {

            $sqlDump .= "INSERT INTO `$table` VALUES ('" . implode("', '", $row) . "');\n";

        }



        $sqlDump .= "\n";

    } else {

        echo "Error: " . $mysqli->error;

        exit();

    }

}



// Set headers for download

header('Content-Type: application/octet-stream');

header('Content-Disposition: attachment; filename="database_backup.sql"');

header('Content-Length: ' . strlen($sqlDump));



// Output the SQL dump for download

echo $sqlDump;



// Close the MySQL connection

$mysqli->close();