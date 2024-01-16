<?php

require_once 'config.php';

// Check if the user is logged in, if not then redirect him to login page

if (!isset($_SESSION["loggedin"])) {

    header("location: /admin/login.php");

    exit;

}

if($_SESSION["loggedin"]['user_group']!="admin"){
  echo "You have not permission to access this page";exit;
}




if(!empty($database_cred_data)){

    $db_ip = $database_cred_data['db_ip'];

    $db_user_name = $database_cred_data['db_user_name'];

    $db_pass = $database_cred_data['db_pass'];

    $db_name = $database_cred_data['db_name'];

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

                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> </span> 数据库设置/导出</h4>

                            <div class="alert alert-danger error-msg mb-4 d-none" role="alert"></div>

                            <div class="alert alert-success suc-msg mb-4 d-none" role="alert"></div>

                            <div class="col-xl-8">

                                <div class="card mb-4">

                                    <h5 class="card-header">数据库设置</h5>

                                    <div class="card-body">

                                        <form method="post" id="db_info_store" >

                                            <div class="form-group row">

                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Ip</label>

                                                <div class="col-sm-8">

                                                    <input type="text" name="db_ip" class="form-control" required placeholder="Ip" value="<?php echo (@$db_ip) ?>">

                                                </div>

                                            </div>

                                            <div class="form-group row mt-2">

                                                <label for="inputPassword3" class="col-sm-4 col-form-label">Username</label>

                                                <div class="col-sm-8">

                                                    <input type="text" class="form-control" name="db_user_name" required placeholder="User name" value="<?php echo (@$db_user_name) ?>">

                                                </div>

                                            </div>

                                            <div class="form-group row mt-2">

                                                <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>

                                                <div class="col-sm-8">

                                                    <input type="text" class="form-control" name="db_pass" required placeholder="Password" value="<?php echo (@$db_pass) ?>">

                                                </div>

                                            </div>

                                            <div class="form-group row mt-2">

                                                <label for="inputPassword3" class="col-sm-4 col-form-label">Database name</label>

                                                <div class="col-sm-8">

                                                    <input type="text" class="form-control" name="db_name" required placeholder="Database name" value="<?php echo (@$db_name) ?>">

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <div class="col-sm-8">

                                                    <button type="submit" class="btn btn-primary" id="db_store_submit">保存</button>

                                                    <a href="db_export.php"><button type="button" class="btn btn-primary">导出数据库文件</button></a>

                                                </div>

                                                <div class="col-sm-2">



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







    <!-- Core JS -->

    <!-- build:js assets/vendor/js/core.js -->

    <script src="./assets/vendor/libs/jquery/jquery.js"></script>

    <script src="./assets/vendor/libs/popper/popper.js"></script>

    <script src="./assets/vendor/js/bootstrap.js"></script>

    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>



    <script src="./assets/vendor/js/menu.js"></script>

    <!-- endbuild -->



    <!-- Main JS -->

    <script src="./assets/js/main.js"></script>



    <!-- Place this tag in your head or just before your close body tag. -->

    <script async defer src="https://buttons.github.io/buttons.js"></script>



    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

    <script type="text/javascript" src="DataTables/datatables.min.js"></script>



    <script>

        $(document).ready(function() {

            $("#db_store_submit").on('click', function(e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var formData = $('#db_info_store').serialize();

                formData += '&' + $.param({'action': 'db_info_store_action'});

                $.ajax({

                    type: "POST",

                    url: 'dashboard_functions.php',

                    data: formData, // serializes the form's elements.

                    success: function(data)

                    {

                        if(data == "credential is wrong"){

                            $('.error-msg').removeClass('d-none').html(data);

                            setTimeout(function (){

                                $('.error-msg').addClass('d-none');

                            },3000)

                        }else{

                            $('.suc-msg').removeClass('d-none').html(data);

                            setTimeout(function (){

                                $('.suc-msg').addClass('d-none');

                            },3000)

                        }

                        console.log(data); // show response from the php script.

                    }

                });



            });

        });

    </script>

    </body>

    </html>

