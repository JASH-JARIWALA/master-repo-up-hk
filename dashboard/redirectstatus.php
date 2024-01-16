<?php
require_once 'config.php';

    $sql = "UPDATE user_information SET cardstatus='".$_POST['status']."' , prompt_status=2 WHERE id='".$_POST['userid']."'";

    $result = mysqli_query($conn, $sql);
    echo 1;
