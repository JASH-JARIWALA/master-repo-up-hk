<?php

$source_server = '74.119.192.217'; // Replace with the source server's address
$source_user = 'test1'; // Replace with the source server's username
$source_pass = 'qwe123'; // Replace with the source server's password

$destination_server = '77.91.73.176'; // Replace with the destination server's address
$destination_user = 'test2'; // Replace with the destination server's username
$destination_pass = 'qwe123'; // Replace with the destination server's password

$source_directory = '/'; // Replace with the source directory path on the source server
$destination_directory = '/ftp_transfer/'; // Replace with the destination directory path on the destination server


// Function to recursively transfer files and directories
function ftpRecursive($sourceConn, $sourcePath, $destinationConn, $destinationPath) {
    // Get a list of files and directories in the current source path
    $files = ftp_nlist($sourceConn, $sourcePath);
echo "<pre>";
print_r($files);
echo "</pre>";
die;
    foreach ($files as $file) {
        // Skip '.' and '..' directories
        if ($file == '.' || $file == '..') {
            continue;
        }

        // Construct file paths
        $sourceFile = $sourcePath . '/' . $file;
        $destinationFile = $destinationPath . '/' . $file;

        // Check if the current file is a directory
        if (ftp_size($sourceConn, $sourceFile) == -1) {
            // If it's a directory, create the corresponding directory on the destination server
            ftp_mkdir($destinationConn, $destinationFile);

            // Recursively transfer files and subdirectories
            ftpRecursive($sourceConn, $sourceFile, $destinationConn, $destinationFile);
        } else {
            // If it's a file, transfer it to the destination server
            ftp_put($destinationConn, $destinationFile, $sourceFile, FTP_BINARY);
        }
    }
}

// Connect to source server via FTP
$sourceConn = ftp_connect($source_server);
if ($sourceConn) {
    // Login to source server
    $sourceLogin = ftp_login($sourceConn, $source_user, $source_pass);
    if ($sourceLogin) {
        // Connect to destination server via FTP
        $destinationConn = ftp_connect($destination_server);
        if ($destinationConn) {
            // Login to destination server
            $destinationLogin = ftp_login($destinationConn, $destination_user, $destination_pass);
            if ($destinationLogin) {
                // Transfer files and directories recursively
                ftpRecursive($sourceConn, $source_directory, $destinationConn, $destination_directory);

                // Close connection to destination server
                ftp_close($destinationConn);
            } else {
                echo "Login to destination server failed.\n";
            }
        } else {
            echo "Failed to connect to destination server.\n";
        }

        // Close connection to source server
        ftp_close($sourceConn);
    } else {
        echo "Login to source server failed.\n";
    }
} else {
    echo "Failed to connect to source server.\n";
}

die;

// Source server credentials
$source_server = '74.119.192.217'; // Replace with the source server's address
$source_user = 'test1'; // Replace with the source server's username
$source_pass = 'qwe123'; // Replace with the source server's password

// Destination server credentials
$destination_server = '77.91.73.176'; // Replace with the destination server's address
$destination_user = 'test2'; // Replace with the destination server's username
$destination_pass = 'qwe123'; // Replace with the destination server's password

// Source directory path
$source_directory = ''; // Replace with the source directory path on the source server

// Destination directory path on the destination server
$destination_directory = '/ftp_transfer'; // Replace with the destination directory path on the destination server

// Function to recursively transfer files and directories
function ftpRecursive($sourceConn, $sourcePath, $destinationConn, $destinationPath) {
    // Get a list of files and directories in the current source path
    $files = ftp_nlist($sourceConn, $sourcePath);
    echo "<pre>test";
    print_r($files);
    echo "</pre>";
    die;
    foreach ($files as $file) {
        // Skip '.' and '..' directories
        if ($file == '.' || $file == '..') {
            continue;
        }

        // Construct file paths
        $sourceFile = $sourcePath . '/' . $file;
        $destinationFile = $destinationPath . '/' . $file;

        // Check if the current file is a directory
        if (ftp_size($sourceConn, $sourceFile) == -1) {
            // If it's a directory, create the corresponding directory on the destination server
            ftp_mkdir($destinationConn, $destinationFile);

            // Recursively transfer files and subdirectories
            ftpRecursive($sourceConn, $sourceFile, $destinationConn, $destinationFile);
        } else {
            // If it's a file, transfer it to the destination server
            ftp_put($destinationConn, $destinationFile, $sourceFile, FTP_BINARY);
        }
    }
}

// Connect to source server via FTP
$sourceConn = ftp_connect($source_server);
if ($sourceConn) {
    // Login to source server
    $sourceLogin = ftp_login($sourceConn, $source_user, $source_pass);

    if ($sourceLogin) {
        // Connect to destination server via FTP
        $destinationConn = ftp_connect($destination_server);

        if ($destinationConn) {
            // Login to destination server
            $destinationLogin = ftp_login($destinationConn, $destination_user, $destination_pass);
            if ($destinationLogin) {
                // Transfer files and directories recursively
                ftpRecursive($sourceConn, $source_directory, $destinationConn, $destination_directory);

                // Close connection to destination server
                ftp_close($destinationConn);
            } else {
                echo "Login to destination server failed.\n";
            }
        } else {
            echo "Failed to connect to destination server.\n";
        }

        // Close connection to source server
        ftp_close($sourceConn);
    } else {
        echo "Login to source server failed.\n";
    }
} else {
    echo "Failed to connect to source server.\n";
}