<?php 

include("constant.php");

$fileContents = file_get_contents(ABS_PATH.'/dashboard/authtoken.txt');
if ($fileContents !== false) {
    $auth_token = $fileContents;
    $check_token = AuthorizationCodeNEW($auth_token);

    if($check_token!="valid"){
        include("404.html");exit;
    }
} else {
    include("404.html");exit;
}


function AuthorizationCodeNEW($authCodeData){
    $return = "";
    if ($authCodeData) {
        $codeData = base64_decode($authCodeData);
        $codeDomainData = explode('---',$codeData);
        $domainName = $codeDomainData[1];
        $code = explode(':', $codeData);
        $expiration = @$code[1];
        $currentDate = time();

        if ($currentDate > $expiration || $domainName != SITE_NAME_G){
            $return ="nvalid";
        }else{
            $return ="valid";
        }
    } else {
        $return ="nvalid";
    }
    return $return;
}


/*$fileContents = file_get_contents('dashboard/authtoken.txt');
if ($fileContents !== false) {
    $auth_token = $fileContents;
    $check_token = AuthorizationCode($auth_token);
    if($check_token=="valid"){
        
    }
} else {
     echo "Authorization token expire please contact to admin";exit;
    //TOken filed and not valid
}

function AuthorizationCode($authCodeData){
    $return = "";
    if ($authCodeData) {
        $codeData = base64_decode($authCodeData);
        $code = explode(':', $codeData);
        $expiration = @$code[1];
        $currentDate = time();

        if ($currentDate > $expiration){
            $return ="nvalid";
        }else{
            $return ="valid";
        }
    } else {
        $return ="nvalid";
    }
    return $return;
}*/

?>