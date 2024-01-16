<?php
include("./../constant.php");
//echo getcwd();exit;
// Change to the directory where your Git repository is located
$output = "";
if($_SERVER['SERVER_ADDR'] == "127.0.0.1"){
    if(isset($_POST['download_code']) && $_POST['download_code']!=""){
        $output ="Thanks downloaded code";
    }
    /*chdir('C:\xampp\htdocs\hk5');
    exec('git pull origin j_developer');
    echo 'Update complete.';*/
}else{

    if(isset($_POST['download_code']) && $_POST['download_code']!=""){

        chdir('/www/wwwroot/'.SITE_NAME_G);
        $username = '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';
        $password = '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';
        $repository = 'https://' . rawurlencode($username) . ':' . rawurlencode($password) . '@github.com/jitupatel76877/source_code_manage3.git';

        $output = shell_exec("git checkout . 2>&1");
        $output .= shell_exec("git pull $repository master 2>&1");



        $url = 'https://'.SITE_NAME_G.'/migration/migration1.php';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        if ($response !== false) {
            // Process the response as needed
            //echo $response;
        } else {
            // Handle the error
            //echo "Failed to fetch the URL. Error: " . curl_error($curl);
        }
        curl_close($curl);

        //shell_exec('chmod /www/wwwroot/'.$_SERVER['SERVER_ADDR'].'/dashboard/authtoken.txt' 0777 2>&1');
        //shell_exec('sudo chmod 0777 /www/wwwroot/'.$_SERVER['SERVER_ADDR'].'/dashboard/authtoken.txt');   
    } 
}
?>


<?php

//require_once 'config.php';
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"])) {
    //header("location: /admin/login.php");
    //exit;
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


    <!-- Page CSS -->
    <?php if (@$theme_mode == 'night') { ?>
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
        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-width: 1px;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            
            <!-- Layout container -->
            <div id="layout-content-him" class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <?php if(empty($_GET['page'])){ ?>
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Layout Demo -->
                        <div class="layout-demo-wrapper">
                            <div class="inner-con" style="width: 100%;">

                                <div id="notificationStatus" style="color: blue;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;"></div>

                               
                               
                                <div id="message"></div>

                                <div class="card">
                                    <h5 class="card-header">同步代码</h5>
                                    
                                   
                                    <div class="card-body">
                                        <div class="table-responsive text-nowrap">
                                            <p>✈TG频道会通知更新，点击更新后会自动同步最新的代码，如未通知，则已经是最新版本，无需更新.</p>
                                           <form action="" method="post">
                                                <input type="hidden" name="download_code" value="download_code">    
                                                <input type="submit" name="submit" value="立即更新最新代码" class="btn btn-primary" onclick="return code_download_latest()">
                                           </form>
                                        </div>
                                        <?php 
                                       // echo "<pre>";print_r($output);
                                        if(!empty($output)){ ?>
                                            <br>
                                            <h4>Download Logs</h4>  
                                            <?php 

                                            if (strpos($output, 'Fast-forward') !== false) {
                                                echo "Update was successful.\n";
                                            } elseif (strpos($output, 'Already up-to-date.') !== false) {
                                                echo "No changes. Repository is already up to date.\n";
                                            } else {
                                                echo "Unknown update status. Check the update output for more details.\n";
                                            }

                                      } ?>
                                        
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!--/ Layout Demo -->
                    </div>
                    <?php } ?>
  
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

    <script type="text/javascript">
        function code_download_latest() {
            // Display a confirmation dialog
            var isConfirmed = window.confirm("Are you sure you want to download latest source code?");

            // Return true to submit the form, or false to cancel
            if(isConfirmed){
               return true;
            }else{
                return false;
            }
        }
    </script>

</body>

</html>
