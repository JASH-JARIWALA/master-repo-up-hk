<?php

require $_SERVER["DOCUMENT_ROOT"].'/config.php';


if(!empty($_POST['action']) && $_POST['action'] == "user_info_store"){
    $ip = get_client_ip();

    $fullnamePage2 = $fullname =!empty($_POST['first_name']) ? $_POST['first_name']: '' ;

    $address=!empty($_POST['address']) ? $_POST['address']: '' ;

    $straight=!empty($_POST['straight']) ? $_POST['straight']: '' ;

    $city=!empty($_POST['city']) ? $_POST['city']: '' ;

    $country=!empty($_POST['country']) ? $_POST['country']: '' ;

    $zipcode=!empty($_POST['zipcode']) ? $_POST['zipcode']: '' ;

    $email=!empty($_POST['email']) ? $_POST['email']: '' ;

    $phone=!empty($_POST['phone']) ? $_POST['phone']: '' ;



    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO user_information (name,address,straight,city,zipcode,email,fullname, countryName, phone, date_created, date_updated,ipaddress)
	VALUES ('" . $fullnamePage2 . "','" . $address . "','" . $straight . "','" . $city . "','" . $zipcode . "','" . $email . "','" . $fullname . "', '" . $country . "',  '" . $phone . "', '" . $date . "',now(),'" . $ip . "')";


    if (mysqli_query($conn, $sql)) {

        echo "success";

        die();

    } else {

        echo "fail";

        die();

    }

}
