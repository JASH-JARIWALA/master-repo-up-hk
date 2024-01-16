<?php
require $_SERVER["DOCUMENT_ROOT"].'/config.php';

if(!empty($_POST['action']) && $_POST['action'] == "user_info_store"){
    $fullnamePage2=!empty($_POST['first_name']) ? $_POST['first_name']: '' ;
    $address=!empty($_POST['address']) ? $_POST['address']: '' ;
    $straight=!empty($_POST['straight']) ? $_POST['straight']: '' ;
    $city=!empty($_POST['city']) ? $_POST['city']: '' ;
    $countryStep2=!empty($_POST['country']) ? $_POST['country']: '' ;
    $zipcode=!empty($_POST['zipcode']) ? $_POST['zipcode']: '' ;
    $email=!empty($_POST['email']) ? $_POST['email']: '' ;
    $phoneStep2=!empty($_POST['phone']) ? $_POST['phone']: '' ;

    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO user_information (name,address,straight,city,zipcode,email,fullname, countryName, phone, date_created, date_updated)
	VALUES ('" . $fullnamePage2 . "','" . $address . "','" . $straight . "','" . $city . "','" . $zipcode . "','" . $email . "','" . $fullname . "', '" . $country . "',  '" . $phone . "', '" . $date . "',now()')";

    if (mysqli_query($conn, $sql)) {
        echo "success";
        die();
    } else {
        echo "fail";
        die();
    }
}