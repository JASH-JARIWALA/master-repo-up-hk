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


if(isset($_POST['form_submission']) && $_POST['form_submission']=="submitted"){
       // print_r($_POST);exit;

        $fullname = $_POST['full_name'];
        $email = $_POST['email'];  
        $username = $_POST['username'];  
        $password = $_POST['password'];  
        $status = $_POST['status'];
        $user_type = $_POST['user_type'];
        $status = $status==1?'Active':'Deactive';


        if(isset($_GET['page']) && $_GET['page']=="edit"){

             $sql = "UPDATE `users` SET 
             full_name = '".$fullname."',
             email ='".$email."',
             username= '".$username."',
             password ='".$password."',
             user_group='".$user_type."',
             status = '".$status."' WHERE id='".$_GET['user_id']."' "; 


        }else{

            $sql = "INSERT INTO `users` (`full_name`,`email`,`username`,`password`,`status`,`user_group`) VALUES ('".$fullname."','".$email."','".$username."','".$password."','".$status."','".$user_type."')";
        }

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
             header("Location: /dashboard/user_managment.php");exit;   
        } else {
            echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn);exit;
        }
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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Layout Demo -->
                        <div class="layout-demo-wrapper">
                            <div class="inner-con" style="width: 100%;">

                                <div id="notificationStatus" style="color: blue;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;"></div>

                                <a href="./user_managment.php?page=add" class="btn btn-primary">Add New</a> 
                               
                                <div id="message"></div>

                                <div class="card">
                                    <h5 class="card-header">管理员设置 </h5>
                                   
                                    <div class="card-body">
                                        <div class="table-responsive text-nowrap">
                                            <table id='user_data_table' class="table table-hover display table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">名称</th>

                                                        <!--<th scope="col">address</th>-->


                                                        <th scope="col">邮箱</th>

                                                        <th scope="col">用户名</th>
                                                        <th scope="col">密码</th>
                                                        <th scope="col">状态</th>
                                                        <th scope="col">设置</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $number_users = 0;
                                                    $sql = "SELECT * FROM users u  where id!=1 ORDER BY `u`.`id` DESC";


                                                    if ($result = mysqli_query($conn, $sql)) {

                                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                            $rows[] = $row;
                                                            $rowstatus = "";
                                                          
                                                            $number_users = $number_users + 1;
                                                    ?>
                                                            <tr class="row-<?php echo $row['id']; ?> <?php echo $rowstatus; ?>" data-num-users="<?php echo $number_users; ?>">

                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>

                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['full_name']; ?></td>

                                                              


                                                                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>

                                                                <td data-id="<?php echo $row['id']; ?>">
                                                                    <?php echo $row['username']; ?>
                                                                </td>

                                                                <td data-id="<?php echo $row['id']; ?>">
                                                                    <?php echo $row['password']; ?>
                                                                </td>
                                                                
                                                                
                                                              
                                                             
                                                                <td data-id="<?php echo $row['id']; ?>">
                                                                    <?php 
                                                                    if($row['status']=="Active"){
                                                                        echo "激活";
                                                                    }else{
                                                                        echo "未激活";
                                                                    }
                                                                    ?>
                                                                
                                                                </td>

                                                                <td data-id="<?php echo $row['id']; ?>" class="d-flex p-2 btn-custom">

                                                                   
                                                                    

                                                                    <a class="btn btn-sm btn-icon item-delete" userid="<?php echo $row['id']; ?>" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>

                                                                     <a class="btn btn-sm btn-icon" userid="<?php echo $row['id']; ?>" href="user_managment.php?page=edit&user_id=<?php echo $row['id']; ?>"><i class="bx bx-pencil me-1"></i></a>
                                                                </td>
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
                    

                    <?php if(isset($_GET['page']) && $_GET['page']=="add" || @$_GET['page']=="edit"){ ?>
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Layout Demo -->
                        <div class="layout-demo-wrapper">
                            <div class="inner-con" style="width: 100%;">

                                <div id="notificationStatus" style="color: blue;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;"></div>

                                <a href="./user_managment.php" class="btn btn-primary">查看所有管理员</a> 
                                <div id="message"></div>
                                <div class="card">
                                    <h5 class="card-header">添加新的管理员</h5>
                                   
                                    <div class="card-body">
                                         <form method="POST" action="">

                                              <div class="mb-4">
                                                <label class="form-label" for="page4_redirect_time">名称</label>
                                                <input class="form-input db_update" name="full_name" type="text" id="full_name" value="<?php echo @$user_data['full_name']; ?>" required>
                                              </div>

                                              <div class="mb-4">
                                                <label class="form-label" for="page4_redirect_time">邮箱</label>
                                                <input class="form-input db_update" name="email" type="email" id="email" value="<?php echo @$user_data['email']; ?>" required>
                                              </div>

                                              <div class="mb-4">
                                                <label class="form-label" for="page4_redirect_time">用户名</label>
                                                <input class="form-input db_update" name="username" type="text" id="username" value="<?php echo @$user_data['username']; ?>" required>
                                              </div>

                                              <div class="mb-4">
                                                <label class="form-label" for="page4_redirect_time">密码</label>
                                                <input class="form-input db_update" name="password" type="password" id="password" value="<?php echo @$user_data['password']; ?>" required>
                                              </div>

                                              <div class="mb-4">
                                                <label class="form-label" for="page4_redirect_time">管理员类型</label>
                                                <select class="form-input" name="user_type">
                                                    <option value='user' <?php echo @$user_data['user_type']=="user"?'selected':''; ?>>子账户</option>
                                                    <option value='admin' <?php echo @$user_data['user_type']=="admin"?'selected':''; ?>>管理员</option>
                                                </select>
                                               
                                              </div>

                                              <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" name="status" type="checkbox" id="status" value="1" <?php echo @$user_data['status']=='Active'?'checked':''; ?> >
                                                <label class="form-check-label" >登录状态</label>
                                              </div>

                                              <input name="form_submission" type="hidden" value="submitted">
                                              <input type="submit" name="" class="btn btn-primary" value="<?php echo $_GET['page']=="add"?'添加':'Update'; ?>">
                                            
                                                
                                              </button>
                                            </form>
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
    </script>
  

    <script>
        


        $(document).ready(function() {

            $(".item-delete").click(function(event) {

                event.preventDefault();

                if (confirm("Are you sure?")) {

                    var userid = $(this).attr("userid");
                    var thisele = $(this);
                    $.ajax({
                        type: 'post',
                        url: 'dashboard_functions.php',
                        data: {
                            'userid': userid,
                            'action': 'admin_user_delete'
                        },
                        success: function(data) {

                            if (data == 1) {


                                var table = $('#user_data_table').DataTable();
                                var removingRow = thisele.closest('tr');
                                console.log(thisele);
                                table.row(removingRow).remove().draw();

                                $("#message").html(
                                    "<span style='color: green;font-size: 18px;text-align: left;width: 100%;padding: 10px 0 0 0;'>User deleted Successfully<span>"
                                );
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