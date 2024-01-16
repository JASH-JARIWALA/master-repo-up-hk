<?php
session_start();
// require_once '../config.php';
require $_SERVER["DOCUMENT_ROOT"].'/config.php';
if(!empty($_POST['action'])){
    error_log_store(array("重置密码请求"),$conn);
    echo "重置密码请求已接受";
    die;
}

$error = array();
$res = array();

if (empty($_POST['username'])) {
    $error[] = "用户名字段为必填项";
}

if (empty($_POST['password'])) {
    $error[] = "密码字段为必填项";
}

if (count($error) > 0) {
    error_log_store($error,$conn);
    $resp['msg'] = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from users where username = '$username'";
$query = mysqli_query($conn, $sql);

    if (!empty($_POST['captcha'] && $_POST['captcha'] === $_SESSION['CAPTCHA_CODE'])) {
    
       
    } else {
        
    $error[] = "验证码不匹配";
    error_log_store($error,$conn);
    $resp['msg'] = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
    }

if (mysqli_num_rows($query) > 0) {
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $id = $result[0]['id'];
    $user_group = $result[0]['user_group'];
    $username = $result[0]['username'];
    $dbSavedPassword = $result[0]['password'];

    if(isset($result[0]['status']) && $result[0]['status']!="Active"){
        $error[] = "您无权访问，请联系管理员";
        error_log_store($error,$conn);
        $resp['msg'] = $error;
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }

    if ($password  !=  $dbSavedPassword) {
        $error[] = "密码无效";
        error_log_store($error,$conn);
        $resp['msg'] = $error;
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    } else {

        $bool_login_limit_count = checkLoginLimitUserCount($conn,$id);
        if (!$bool_login_limit_count) {
            $error[] = "超过登录限制，请联系管理员，30分钟后重试";
            error_log_store($error,$conn);
            $resp['msg'] = $error;
            $resp['status'] = false;
            echo json_encode($resp);
            exit;
        }

      

        error_log_store(array('登录成功'),$conn);
        //session_start();
        $session_id = session_id();
        $_SESSION['loggedin'] = array("id" => $id, "username" => $username,"user_group"=>$user_group,'session_id'=>@$session_id);

        $datetime = date('Y-m-d H:i:s');
        $sql = "INSERT INTO admin_sessions (user_id, last_activity, session_id) VALUES ($id, '".$datetime."', '".$session_id."')";
        $res = mysqli_query($conn, $sql);

        $resp['redirect'] = '../dashboard';
        $resp['status'] = true;
        echo json_encode($resp);
        exit;
    }
} else {
    $error[] = "用户名不匹配";
    error_log_store($error,$conn);
    $resp['msg'] = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
}





function error_log_store($error,$conn_new){

    $data = $_POST;
    $error_msg = $error[0];
    $error_msg .= !empty($error[1]) ? ' & '. $error[1]: '';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mac_address = $_SERVER['REMOTE_ADDR'];
    $browser_info = $_SERVER['HTTP_USER_AGENT'];
    $longitude = !empty($_POST['longitude']) ? $_POST['longitude'] : '';
    $latitude = !empty($_POST['latitude']) ? $_POST['latitude'] : '';
   
  
    $sql = "INSERT INTO admin_login_log (log_message,username, password, mac_address, browser_info, longitude, latitude) VALUES ('$error_msg','$username','$password','$mac_address','$browser_info','$longitude','$latitude')";
    $res = mysqli_query($conn_new, $sql);
}

function checkLoginLimitUserCount($conn,$user_id)
{
    $sql = "select * from dashboard where meta_key = 'login_limit_count'";
    $query = mysqli_query($conn, $sql);
    $login_limit_count = 1;
    if (mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $login_limit_count = $result[0]['value'];
    }

    $sql = "SELECT COUNT(*) as user_log_count FROM user_sessions WHERE last_activity >= NOW() - INTERVAL 30 MINUTE";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    // print_r($result);exit;
    $login_count = $result[0]['user_log_count'];
    if ($login_limit_count <= $login_count)
        return false;
    else
        return true;
    }

// CREATE TABLE user_sessions (
//     session_id VARCHAR(255) PRIMARY KEY,
//     user_id INT,
//     last_activity TIMESTAMP
// );