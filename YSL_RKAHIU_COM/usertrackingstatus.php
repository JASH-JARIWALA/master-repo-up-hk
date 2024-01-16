<?php
require $_SERVER["DOCUMENT_ROOT"].'/config.php';
if (isset($_POST['page']) == 2 && $_POST['userid']) {

    $row = [];
    $sql = "SELECT * FROM dashboard where meta_key in ('page4_redirect','page4_redirect_time')";
    $page4_redirect = 'off';
    $page4_redirect_time = 0;
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            if ($row['meta_key'] == 'page4_redirect')
                $page4_redirect = $row['value'];
            if ($row['meta_key'] == 'page4_redirect_time' && $page4_redirect == 'on')
                $page4_redirect_time = $row['value'];
        }
    }

    if ($page4_redirect == 'on') {
        //die('redirect is on :' . $page4_redirect_time);
        $update_sql = "UPDATE user_information SET cardstatus = 'approve',verificcode='1' WHERE id ='" . $_POST['userid'] . "'";
        mysqli_query($conn, $update_sql);
    }

        
    $sql = "UPDATE user_information SET date_updated=now() WHERE id='" . $_POST['userid'] . "'";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM user_information WHERE id='" . $_POST['userid'] . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($row['cardstatus'] == 'approve') {
            echo 1;
        } else if ($row['cardstatus'] == 'reject') {
            if ($row['prompt_status'] === '') {
                echo 3;
                return;
            }
            if ($row['prompt_status'] === 1 || $row['prompt_status'] === '1') {
                echo 3;
                return;
            }
            echo 2;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else if (isset($_POST['id']) && isset($_POST['status'])) {
    $sql = "UPDATE user_information SET status='" . $_POST['status'] . "', date_updated=now() WHERE id='" . $_POST['id'] . "'";
    $result = mysqli_query($conn, $sql);
    echo 1;
} else {
    if ($_POST['userid']) {
        $sql = "UPDATE user_information SET date_updated=now() WHERE id='" . $_POST['userid'] . "'";
        $result = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM user_information WHERE id='" . $_POST['userid'] . "'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo $row['verificcode'];
        } else {
            echo 0;
        }
    }
}
?>
