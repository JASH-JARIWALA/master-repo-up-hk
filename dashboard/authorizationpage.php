<?php 
include("./../constant.php");  
$error_message = "";
if(isset($_POST['submit']) && $_POST['auth_token']!=""){
	$msg = trim($_POST['auth_token']);
	$authrize = AuthorizationCode($msg);
	if($authrize=="valid"){
		$filename = "authtoken.txt";
	    $save = fopen($filename, "w");
	    $msg = mb_convert_encoding($msg, 'UTF-8');
	    fwrite($save, $msg);
	    fclose($save);
	}else{
		$error_message = "Please enter valid AuthorizationCode";
	}
}

$fileContents = file_get_contents('authtoken.txt');

if ($fileContents !== false) {
	$auth_token = $fileContents;
	$check_token = AuthorizationCode($auth_token);
	if($check_token=="valid"){
		header('Location: index.php');
	}
} else {
    $error_message= 'Failed to read the file token file.';
}


function AuthorizationCode($authCodeData){
	$return = "";
    if ($authCodeData) {
        $codeData = base64_decode($authCodeData);
        $codeDomainData = explode('---',$codeData);
        $domainName = $codeDomainData[1];
        $code = explode(':', $codeData);
        $expiration = @$code[1];
        $currentDate = time();


        if ($currentDate > $expiration || $domainName != SITE_NAME_G){
           	$return ="nvalid";
        }else{
            $return ="valid";
        }
    } else {
        $return ="nvalid";
    }
    return $return;
}

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

                          <?php 
                          	if(!empty($error_message)){
                          		echo $error_message."<br><br>";
                          	}

                          ?>

                          <form action="" method="post" class="">
                          	<div class="mb-4 col-sm-6">
                      		<label class="form-label" >Enter Token Here </label>
							
							<input type="text" name="auth_token" placeholder="Add Token" class="col-sm-6">
							</div>
							<input type="submit" name="submit" value="Submit" class="btn btn-primary">

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