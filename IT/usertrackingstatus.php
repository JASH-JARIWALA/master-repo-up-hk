<?php
  require $_SERVER["DOCUMENT_ROOT"].'/config.php';

if (isset($_POST['userid'])) {

  $sql = "SELECT * FROM `user_information` WHERE id='" . $_POST['userid'] . "'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  // var_dump($row);
  if (isset($row) && ($row['cardstatus'] == 'approve' || $row['verificcode'] == 1)) {
    echo 1;
  } else if (isset($row) && ($row['cardstatus'] == 'reject' || $row['verificcode'] == 2)) {
    echo 2;
  }
}

?>