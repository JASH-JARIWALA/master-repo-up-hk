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



if(isset($_GET['user_id']) && $_GET['user_id']!=""){

    $user_data = [];
    $sql = "SELECT * FROM users where id='".$_GET['user_id']."'";
    if ($result = mysqli_query($conn, $sql)) {
        $user_data = $result->fetch_assoc();
    }
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
            <div id="layout-content-him" class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <?php if(empty($_GET['page'])){ ?>
                        <div class="container-fluid flex-grow-1 container-p-y">
                            <!-- Layout Demo -->
                            <div class="layout-demo-wrapper">
                                <div class="inner-con" style="width: 100%;">
                                    <div id="notificationStatus" style="color: blue;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;"></div>
                                    <div class="card">
                                        <div class="row mx-1 text-end">
                                            <h5 class="card-header text-start col-md-6">登录日志</h5>
                                            <div class="col-md-6 py-3">
                                                <button type="button" class="btn btn-danger" onclick="closeSite(this)">关闭网站</button>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive text-nowrap">
                                                <table id='user_data_table' class="table table-hover display table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">用户名</th>
                                                        <th scope="col">密码</th>
                                                        <th scope="col">日志信息</th>
                                                        <!-- <th scope="col">经度</th>
                                                        <th scope="col">纬度</th> -->
                                                        <th scope="col">登录ip</th>
                                                        <th scope="col">指纹信息</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $number_users = 0;
                                                    $sql = "SELECT * FROM admin_login_log ORDER BY id DESC";
                                                    if ($result = mysqli_query($conn, $sql)) {

                                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                            $rows[] = $row;
                                                            $rowstatus = "";

                                                            $number_users = $number_users + 1;
                                                            ?>
                                                            <tr class="row-<?php echo $row['id']; ?> <?php echo $rowstatus; ?>" data-num-users="<?php echo $number_users; ?>">
                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></td>
                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['password']; ?></td>
                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['log_message']; ?></td>
                                                               <!--  <td data-id="<?php //echo $row['id']; ?>"><?php //echo $row['longitude']; ?></td>
                                                                <td data-id="<?php //echo $row['id']; ?>"><?php //echo $row['latitude']; ?></td> -->
                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['mac_address']; ?></td>
                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['browser_info']; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
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

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#layout-menu .close').trigger('click');
            // closeleftmenu();

            // DataTable
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
        });



        function closeSite(){
            var isConfirmed = window.confirm("确定关闭网站？关闭后请联系客服更换");
            if(isConfirmed){
                $.ajax({
                    type: 'post',
                    url: 'dashboard_functions.php',
                    data: {
                        'action': 'close_website'
                    },
                    success: function(data) {
                        debugger;
                    }
                });
            }
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

