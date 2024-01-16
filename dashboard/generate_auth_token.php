<?php 
include("./../constant.php"); 
if(isset($_GET['type']) && $_GET['type']!=""){
    echo generateAuthorizationCode($_GET['type']); 
}
$token_generated ="";
if(!empty($_POST)){

    //print_r($_POST);
    $hour ="";
    $day="";
    $week ="";
    $month="";
  
    $total_time = '0';

    if(!empty($_POST['hour']) && $_POST['hour']!="0"){ 
        $onehour_milisecond = "3600";
        $hour = $_POST['hour'] * $onehour_milisecond;  
        $total_time += $hour;
    }

    if(isset($_POST['day']) && $_POST['day']!="0"){  
        $oneday_milisecond = "86400";
        $total_time +=  $_POST['day'] * $oneday_milisecond;  
    }

    if(!empty($_POST['week']) &&  $_POST['week']!="0"){
        $oneweek_milisecond = "604800";
        $total_time +=  $_POST['week'] * $oneweek_milisecond;  
    }

    if($total_time>0){
        $currentTimestamp = time(); // Get the current timestamp in seconds
        // Add 90,000 seconds to the current timestamp
        $resultInMilliseconds = (intval($currentTimestamp) + intval($total_time));
        $token_generated = generateAuthorizationCode($resultInMilliseconds);
    }
   
}




function generateAuthorizationCode($type) {
    $code = ''; // Initialize an empty code
    $length = 3; // Length of the authorization code

    // Define characters that can be used in the code
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Generate a random code
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    $expiration = $type;
    //$expiration = ($type === 'week') ? strtotime('+1 week') : strtotime('+1 month');
    //$expiration = ($type === 'week') ? strtotime('+60 seconds') : strtotime('+1 month');

    $domain = SITE_NAME_G;

    $token = $code.":".$expiration.":"."JP".'---'.$domain;
    $token = base64_encode($token);

    return $token;
}

//echo $codeData = generateAuthorizationCode('week');exit;

//$monthCode = generateAuthorizationCode('month');

?>



<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>仪表盘</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />



  <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />

  <link rel="stylesheet" href="./assets/css/custom.css" />

<style type="text/css">
    .col-sm-6{
        margin-bottom: 15px;
    }
</style>
</head>

<body>
  <!-- Layout wrapper -->
  <div id="layout-content-him" class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->

            <div class="layout-demo-wrapper">

              <div class="container-xxl flex-grow-1 container-p-y">


                <div class="row">
                  
               
                    <div class="col-md-12 col-xl-12">
                      <div class="card bg-danger text-white mb-3">
                        <div class="card-body">
                          <h5 class="card-title text-white">防红警告!</h5>
                          <p class="card-text">您的计划已过期，请输入身份验证令牌并联系系统管理员</p>
                        </div>
                      </div>
                    </div>
       

                  <!-- Total Revenue -->
                  <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="card">
                      <div class="row row-bordered g-0">
                        <div class="col-md-8 card-body">
                          <h5 class="card-header m-0 me-2 pb-3"></h5>
                          <h3>Generate New Token</h3>

                          <?php 
                            if(!empty($error_message)){
                                echo $error_message."<br><br>";
                            }

                          ?>

                          <?php 

                          if(isset($token_generated) && $token_generated!=""){ ?>
                                <h5 class="card-header m-0 me-2 pb-3">Your Token : <?php echo $token_generated; ?></h5>
                          <?php }

                          ?>
                          
                          <form action="" method="post"> 
                            <div class="row ">
                              <div class="form-group col-sm-6">
                                <label>Hours</label>
                
                                <select name="hour" class="form-control">
                                    <option value="0">Please select Hour</option>    
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hour</option>
                                    <option value="3">3 Hour</option>
                                    <option value="4">4 Hour</option>
                                    <option value="5">5 Hour</option>
                                    <option value="6">6 Hour</option>
                                </select> 
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Days</label>
                
                                <select name="day" class="form-control">
                                    <option value="0">Please select Day</option>
                                    <?php 
                                      for ($i=1; $i <31 ; $i++) { ?>
                                        <option value="<?php echo $i;?>"><?php echo $i;?> Day</option>
                                     <?php  }
                                    ?>    
                                    
                                  
                                </select> 
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Week</label>
                
                                <select name="week" class="form-control">
                                    <option value="0">Please select week</option>    
                                    <option value="1">1 Week</option>
                                    <option value="2">2 Week</option>
                                    <option value="3">3 Week</option>
                                    <option value="4">4 Week</option>
                                </select> 
                              </div>

                              <!-- <div class="form-group col-sm-6">
                                <label>Month</label>
                
                                <select name="month" class="form-control">
                                    <option value="0">Please select month</option>    
                                    <option value="1">1 month</option>
                                    <option value="2">2 month</option>
                                    <option value="3">3 month</option>
                                    <option value="4">4 month</option>
                                </select> 
                              </div> -->
                                <br>
                              
                          </div>
                          <br>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                      </div>
                    </div>
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
                </script>2023
                , 1.0版本 ❤️

              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
  <!-- / Layout wrapper -->

</body>

</html>

  