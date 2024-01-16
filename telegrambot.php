<?php

function getNewOrder($conn=""){

    $check_site_live = array();
    $sql = "SELECT * FROM user_information ORDER BY `id` DESC";
    if ($result = mysqli_query($conn, $sql)) {
        $check_site_live = $result->fetch_assoc();
    }
    return $check_site_live;
}

function getOtp($conn,$user_id){
    $data = array();
    $sql = "SELECT * FROM user_information where id=$user_id";
    if ($result = mysqli_query($conn, $sql)) {
        $data = $result->fetch_assoc();
    }
    return $data;

}

// $domain,$chat_id
function domainConfiguer($conn,$domain,$chat_id){

    $insert = "INSERT INTO bot_domain_bind (domain, chat_id,group_id) VALUES ('".$domain."', '".$chat_id."','')";

    if(mysqli_query($conn, $insert)){
        return "valid";
    }else{
        return "notvalid";
    }
}

function checkDomainExist($conn,$domain){

    $sql = "SELECT * FROM bot_domain_bind WHERE domain='" .$domain. "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return "valid"; // available domain 
    } else {
        return "notvalid"; // not availble domain
    }
}

function varifyOtp(){




}


function statusReject(){


}

function statusRelease(){

}

function lot_log($conn,$log){
    $insert = "INSERT INTO bot_log (json) VALUES ('".$log."')";

    mysqli_query($conn, $insert);
    return true;
}

















?>
