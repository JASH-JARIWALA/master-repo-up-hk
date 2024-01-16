<?php
date_default_timezone_set('Asia/Tokyo');
require_once 'config.php';
require_once 'aapanel_api.php';
//Create option 
$aapanel_api = new bt_api();

if($_SESSION["loggedin"]['user_group']!="admin"){
  echo "You have not permission to access this page";exit;
}


$message ="";
if (isset($_POST['add_domain']) && $_POST['add_domain']!="") {
  $domain_name = $_POST['domain_name'];

  if($aapanel_api->isValidDomain($domain_name)){
      $domain_added = $aapanel_api->AddDomainCurrentSite($domain_name);
      if(!empty($domain_added)){
          if($domain_added['status']=="1"){
              $message = $domain_added['msg'];
          }else{
              $message = $domain_added['msg'];
          } 
      }

  }else{
      $message = "Please enter a valid domain example.com";
  }
  
}

if (isset($_POST['delete_domain']) && $_POST['delete_domain']!="") {

  $delete_domain_name = $_POST['delete_domain_name'];
  $domain_delete = $aapanel_api->DeleteDomainCurrentSite($delete_domain_name);
  
  if(!empty($domain_delete)){
      if($domain_delete['status']=="true"){
          $message = $domain_delete['msg'];
      }else{
          $message = $domain_delete['msg'];
      } 
  }
}

if (isset($_POST['ssl_domain_form']) && $_POST['ssl_domain_form']!="") {


  $ssl_domain_name = $_POST['ssl_domain_name'];
  $ssl_domain_name = explode(",",$ssl_domain_name);
  //print_r($ssl_domain_name);exit;
  if(empty($ssl_domain_name['0'])){
    echo "Please select domain for SSL Install";exit;
  }
  
  //print_r($ssl_domain_name);exit;
  $ssl_domain = $aapanel_api->AddSSL($ssl_domain_name);
  //print_r($ssl_domain);exit;
  if(!empty($ssl_domain)){
      if($ssl_domain['status']=="true" || $ssl_domain['status']=="1"){
          $message = $ssl_domain['msg'];
      }else{
          $message = $ssl_domain['msg'];
      } 
  }
}


//List All Domain from Panel
$all_website = $aapanel_api->GetDomainList();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"])) {
  header("location: /admin/login.php");
  exit;
}





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


?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Add New Domian</title>

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
                  <h5 class="card-header">网站域名管理</h5>
                  <div class="card-body row">
                    <p><?php echo @$message?$message:''; ?></p>

                    <p>购买新的域名后，根据下方提供的ip进行解析，解析完成后添加并申请ssl（注意：必须解析生效才可以添加）</p>

                    <form method="POST" action="">

                      <div class="form-group col-sm-6">
                        <label class="" for="restricted_numbers">在当前站点添加新的域名</label>
                        <input class="form-control" name="domain_name" type="text" id="domain_name" value="" placeholder="example.com">
                      </div>

                      <br>
                     
                      <input name="add_domain" type="submit" value="添加域名" class="btn btn-primary" >
                      
                    </form>
                    <div class="col-sm-12"></div>
                    
                    <br>
                    <p>域名解析ip : <?php echo $_SERVER['SERVER_ADDR']; ?></p>
                    <table class="table-responsive text-nowrap table">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>域名</th>
                        <th>端口</th>
                        <th>添加时间</th>
                        <th>行动</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($all_website as $key => $value) { ?>

                        <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><input type="checkbox" name="domains_name[]" value="<?php echo $value['name']; ?>" onclick="handleCheckbox(this)"> &nbsp; <?php echo $value['name']; ?></td>
                        <td><?php echo $value['port']; ?></td>
                        <td><?php echo $value['addtime']; ?></td>
                        <td>
                              <form action="" method="post">
                                <input type="hidden" name="delete_domain" value="<?php echo $value['id']; ?>">
                                <input type="hidden" name="delete_domain_name" value="<?php echo $value['name']; ?>">
                                <input type="hidden" name="delete_domain_form" value="delete_domain_form">

                                <button onclick="this.form.submit();"><i class="bx bx-trash me-1"></i></button>

                              </form>


                              
                           
                         </td>
                      </tr>
                        
                      <?php } ?>

                      <tr>
                        <td></td>
                        <td colspan="6">SSL Install
                              <form action="" method="post">  
                                <input type="hidden" name="ssl_domain_name" value="" id="ssl_domain_form">
                                <input type="hidden" name="ssl_domain_form" value="ssl_domain_form">
                                <button onclick="this.form.submit();">添加SSL</button>
                              </form>
                        </td>
                      </tr>
                    </tbody>
                      
                    </table>

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
    var checkedValues = [];
    function handleCheckbox(checkbox) {
        if (checkbox.checked) {
            checkedValues.push(checkbox.value);
        } else {
            var index = checkedValues.indexOf(checkbox.value);
            if (index !== -1) {
                checkedValues.splice(index, 1);
            }
        }
        $("#ssl_domain_form").val(checkedValues);
        console.log("Checked Values:", checkedValues);
    }
  </script>


</body>

</html>