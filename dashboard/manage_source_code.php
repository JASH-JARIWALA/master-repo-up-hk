 <?php 
require_once 'config.php';

if($_SESSION["loggedin"]['user_group']!="admin"){
  echo "You have not permission to access this page";exit;
}


$countryFlags = array("CA"=>"Canada", "US"=>"United States", "BS"=>"Bahamas", "BB"=>"Barbados", "AI"=>"Anguilla", "AG"=>"Antigua and Barbuda", "VG"=>"Virgin Islands", "VI"=>"Virgin Islands", "BM"=>"Bermuda", "GD"=>"Grenada", "TC"=>"Turks and Caicos Islands", "MS"=>"Montserrat", "MP"=>"Northern Mariana Islands", "GU"=>"Guam", "AS"=>"American Samoa", "LC"=>"Saint Lucia", "DM"=>"Dominica", "VC"=>"Saint Vincent and the Grenadines", "DO"=>"Dominican Republic", "TT"=>"Trinidad and Tobago", "KN"=>"Saint Kitts and Nevis", "JM"=>"Jamaica", "PR"=>"Puerto Rico", "EG"=>"Egypt", "SS"=>"South Sudan", "MA"=>"Morocco", "DZ"=>"Algeria", "TN"=>"Tunisia", "LY"=>"Libyan Arab Jamahiriya", "GM"=>"Gambia", "SN"=>"Senegal", "MR"=>"Mauritania", "ML"=>"Mali", "GN"=>"Guinea", "CI"=>"Cote d'Ivoire", "BF"=>"Burkina Faso", "NE"=>"Niger", "TG"=>"Togo", "BJ"=>"Benin", "MU"=>"Mauritius", "LR"=>"Liberia", "SL"=>"Sierra Leone", "GH"=>"Ghana", "NG"=>"Nigeria", "TD"=>"Chad", "CF"=>"Central African Republic", "CM"=>"Cameroon", "CV"=>"Cape Verde", "ST"=>"Sao Tome and Principe", "GQ"=>"Equatorial Guinea", "GA"=>"Gabon", "CG"=>"Congo", "CD"=>"Congo", "AO"=>"Angola", "GW"=>"Guinea-Bissau", "IO"=>"British Indian Ocean Territory", "SC"=>"Seychelles", "SD"=>"Sudan", "RW"=>"Rwanda", "ET"=>"Ethiopia", "SO"=>"Somalia", "DJ"=>"Djibouti", "KE"=>"Kenya", "TZ"=>"Tanzania", "UG"=>"Uganda", "BI"=>"Burundi", "MZ"=>"Mozambique", "ZM"=>"Zambia", "MG"=>"Madagascar", "TF"=>"French Southern Territories", "YT"=>"Mayotte", "RE"=>"Reunion", "ZW"=>"Zimbabwe", "NA"=>"Namibia", "MW"=>"Malawi", "LS"=>"Lesotho", "BW"=>"Botswana", "SZ"=>"Swaziland", "KM"=>"Comoros", "ZA"=>"South Africa", "SH"=>"Saint Helena", "ER"=>"Eritrea", "AW"=>"Aruba", "FO"=>"Faroe Islands", "GL"=>"Greenland", "GR"=>"Greece", "NL"=>"Netherlands", "BE"=>"Belgium", "FR"=>"France", "ES"=>"Spain", "KY"=>"Cayman Islands", "GI"=>"Gibraltar", "PT"=>"Portugal", "LU"=>"Luxembourg", "IE"=>"Ireland", "IS"=>"Iceland", "AL"=>"Albania", "MT"=>"Malta", "CY"=>"Cyprus", "AX"=>"Åland Islands", "FI"=>"Finland", "BG"=>"Bulgaria", "HU"=>"Hungary", "LT"=>"Lithuania", "LV"=>"Latvia", "EE"=>"Estonia", "MD"=>"Moldova", "AM"=>"Armenia", "BY"=>"Belarus", "AD"=>"Andorra", "MC"=>"Monaco", "SM"=>"San Marino", "VA"=>"Holy See (Vatican City State)", "UA"=>"Ukraine", "RS"=>"Serbia", "ME"=>"Montenegro", "XK"=>"Kosovo", "HR"=>"Croatia", "SI"=>"Slovenia", "BA"=>"Bosnia and Herzegovina", "MK"=>"North Macedonia", "IT"=>"Italy", "RO"=>"Romania", "CH"=>"Switzerland", "CZ"=>"Czech Republic", "SK"=>"Slovakia", "LI"=>"Liechtenstein", "AT"=>"Austria", "GG"=>"Guernsey", "IM"=>"Isle of Man", "JE"=>"Jersey", "GB"=>"United Kingdom", "DK"=>"Denmark", "SE"=>"Sweden", "BV"=>"Bouvet Island", "NO"=>"Norway", "SJ"=>"Svalbard and Jan Mayen", "PL"=>"Poland", "DE"=>"Germany", "FK"=>"Falkland Islands (Malvinas)", "GS"=>"South Georgia and the South Sandwich Islands", "BZ"=>"Belize", "GT"=>"Guatemala", "SV"=>"El Salvador", "HN"=>"Honduras", "NI"=>"Nicaragua", "CR"=>"Costa Rica", "PA"=>"Panama", "PM"=>"Saint Pierre and Miquelon", "HT"=>"Haiti", "PE"=>"Peru", "MX"=>"Mexico", "CU"=>"Cuba", "AR"=>"Argentina", "BR"=>"Brazil", "CL"=>"Chile", "CO"=>"Colombia", "VE"=>"Venezuela", "GP"=>"Guadeloupe", "BL"=>"Saint Barthelemy", "MF"=>"Saint Martin", "BO"=>"Bolivia", "GY"=>"Guyana", "EC"=>"Ecuador", "GF"=>"French Guiana", "PY"=>"Paraguay", "MQ"=>"Martinique", "SR"=>"Suriname", "UY"=>"Uruguay", "AN"=>"Netherlands Antilles", "MY"=>"Malaysia", "AU"=>"Australia", "CX"=>"Christmas Island", "CC"=>"Cocos (Keeling) Islands", "ID"=>"Indonesia", "PH"=>"Philippines", "NZ"=>"New Zealand", "PN"=>"Pitcairn", "SG"=>"Singapore", "TH"=>"Thailand", "TL"=>"Timor-Leste", "AQ"=>"Antarctica", "HM"=>"Heard Island and Mcdonald Islands", "NF"=>"Norfolk Island", "BN"=>"Brunei Darussalam", "NR"=>"Nauru", "PG"=>"Papua New Guinea", "TO"=>"Tonga", "SB"=>"Solomon Islands", "VU"=>"Vanuatu", "FJ"=>"Fiji", "PW"=>"Palau", "WF"=>"Wallis and Futuna", "CK"=>"Cook Islands", "NU"=>"Niue", "WS"=>"Samoa", "KI"=>"Kiribati", "NC"=>"New Caledonia", "TV"=>"Tuvalu", "PF"=>"French Polynesia", "TK"=>"Tokelau", "FM"=>"Micronesia", "MH"=>"Marshall Islands", "KZ"=>"Kazakhstan", "RU"=>"Russia", "JP"=>"Japan", "KR"=>"Korea", "VN"=>"Vietnam", "KP"=>"Korea", "HK"=>"Hong Kong", "MO"=>"Macao", "KH"=>"Cambodia", "LA"=>"Laos", "CN"=>"China", "BD"=>"Bangladesh", "TW"=>"Taiwan", "TR"=>"Türkiye", "IN"=>"India", "PK"=>"Pakistan", "AF"=>"Afghanistan", "LK"=>"Sri Lanka", "MM"=>"Myanmar", "MV"=>"Maldives", "LB"=>"Lebanon", "JO"=>"Jordan", "SY"=>"Syrian Arab Republic", "IQ"=>"Iraq", "KW"=>"Kuwait", "SA"=>"Saudi Arabia", "YE"=>"Yemen", "OM"=>"Oman", "PS"=>"Palestinian Territory", "AE"=>"United Arab Emirates", "IL"=>"Israel", "BH"=>"Bahrain", "QA"=>"Qatar", "BT"=>"Bhutan", "MN"=>"Mongolia", "NP"=>"Nepal", "IR"=>"Iran", "TJ"=>"Tajikistan", "TM"=>"Turkmenistan", "AZ"=>"Azerbaijan", "GE"=>"Georgia", "KG"=>"Kyrgyzstan", "UZ"=>"Uzbekistan");

asort($countryFlags);

  $available_source_code = array();
  
  $check_site_live = array();
  $sql = "SELECT meta_key,value FROM dashboard where meta_key='front_site_live'";
    if ($result = mysqli_query($conn, $sql)) {
        $check_site_live = $result->fetch_assoc();
    }

    $sql = "SELECT source_code_name,country,id,country_code FROM source_code_manage";

    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $available_source_code[] = $row;
          
        }
    }

    if(isset($_GET['page']) && $_GET['edit_id']!=""){

        $edit_id = $_GET['edit_id'];
        $source_edit_data = array();
        $sql = "SELECT * FROM source_code_manage where id='".$edit_id."'";
        if ($result = mysqli_query($conn, $sql)) {
            $source_edit_data = $result->fetch_assoc();
        }

    }

    if(isset($_POST['edit_id']) && $_POST['edit_id']!=""){
        $source_code = $_POST['source_code_name'];
        $country_code = $_POST['country_code'];
        $country = $_POST['country'];

        $sql = "UPDATE `source_code_manage` SET source_code_name='".$source_code."',country='".$country."',country_code='".$country_code."'  WHERE id='".$_POST['edit_id']."'";
        mysqli_query($conn, $sql);
        header("Location: /dashboard/manage_source_code.php");exit;
    }

    //Add New source code 
    if (isset($_POST['source_code_name']) && !empty($_POST['country_code'])) {
      
        $source_code = $_POST['source_code_name'];
        $country_code = $_POST['country_code'];
        $country = $_POST['country'];

        $sql = "INSERT INTO `source_code_manage` (`source_code_name`,`country`,`country_code`) VALUES ('".addslashes($source_code)."','".addslashes($country)."','".$country_code."')";

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            header("Location: /dashboard/manage_source_code.php");exit;
        } else {
            echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn);exit;
        }
    }

    //Delete source code 
    if (isset($_POST['delete_code']) && !empty($_POST['delete_code'])) {
        
        $source_code_id = $_POST['delete_code'];
       
        $sql = "DELETE FROM `source_code_manage` where id='".$source_code_id."'";

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            header("Location: /dashboard/manage_source_code.php");exit;
        } else {
            echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn);exit;
        }
    }


    if (isset($_POST['front_site_live']) && !empty($_POST['front_site_live'])) {
        //$_SESSION['front_site_live'] = $_POST['front_site_live'];
       // print_r($_POST['front_site_live']);exit;
       
        $site_live = $_POST['front_site_live'];

        if(empty($check_site_live)){
            $sql = "INSERT INTO `dashboard` (`id`, `post_id`, `meta_key`, `value`, `date_created`) VALUES ('', '10020', 'front_site_live', '".$site_live."', '')";
        }else{

           $checkDir =  $_SERVER["DOCUMENT_ROOT"]."/".$site_live;
            if (is_dir($checkDir) ) {
                $sql = "UPDATE `dashboard` SET value='".$site_live."'  WHERE meta_key='front_site_live'";
                  
            }else{
                echo "Not Availbe directory in folder please add directory in project folder";  exit;
            }  
        }

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
        } else {
            echo $err = "Error: " . $sql . "<br>" . mysqli_error($conn);exit;
        }
    }

    $check_site_live = array();
    $sql = "SELECT meta_key,value FROM dashboard where meta_key='front_site_live'";
    if ($result = mysqli_query($conn, $sql)) {
        $check_site_live = $result->fetch_assoc();
    }
?>

<?php

date_default_timezone_set('Asia/Tokyo');
$time = date('Hi');


// Initialize the session

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"])){
    header("location: /admin/login.php");
    exit;
}
$theme_mode = 'day';
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

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

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
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
                            <div class="layout-demo-wrapper">
                            
                                <div class="col-xl-12">

                                <?php if(empty($_GET['page'])){ ?>
                                <div class="card">
                                    <h5 class="card-header">切换前端国家/项目</h5>
                                    <div class="card-body">
                                        <a href="./manage_source_code.php?page=add" class="btn btn-primary">添加新源码</a> <br><br>
                                        <table class="table">
                                           
                                            
                                            <tr>
                                               
                                                <th>Country</th>
                                                <th>项目</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                              
                                            </tr>

                                          <?php foreach ($available_source_code as $key => $value) { ?>
                                           <tr>
                                              <td>
                                                
                                                <img src="assets/img/country40X30/<?php echo strtolower($value['country_code']);?>.png" title="<?php echo $value['source_code_name']; ?>"> </td>
                                                <td><?php echo $value['country']; ?></td>
                                             
                                              <td>
                                                <div class="form-check form-check-inline">
                                                 <form action="" method="post">
                                                  <input id="inlineCheckbox1" name="front_site_live" class="form-check-input" type="radio"  data-style="mr-1" value="<?php echo $value['source_code_name']; ?>" <?php echo $check_site_live['value']==$value['source_code_name']?'checked':'';?> onclick="this.form.submit()" >
                                                  <label for="inlineCheckbox1" class="form-check-label">
                                                    <?php echo $check_site_live['value']==$value?'Enabled':'Disable';?></label>
                                                </form>
                                              </div>

                                              </td>


                                              <td>
                                                <div class="form-check form-check-inline">
                                                <form action="" method="post" id="delete_form_code_<?php echo $value['id']; ?>" >
                                                  <input id="delete_code" name="delete_code"  type="hidden"   value="<?php echo $value['id']; ?>" >

                                                   <a class="btn btn-sm btn-icon item-delete" href="javascript:void(0);" onclick="deleteSourceCodeconfirm('<?php echo $value['source_code_name']; ?>',<?php echo $value['id']; ?>)">
                                                    <i class="bx bx-trash me-1"></i></a>

                                                    <a class="btn btn-sm btn-icon" href="?page=edit&edit_id=<?php echo $value['id']; ?>" >
                                                    <i class="bx bx-edit me-1"></i></a>
                                                </form>

                                              </div>

                                              </td>

                                              <!--<td> 
                                                <?php
                                                echo $dir =  $_SERVER["DOCUMENT_ROOT"]."/".$value;
                                               ?>
                                                </td>
                                                <td>
                                                    <?php  if (is_dir( $dir ) ) {
                                                    echo "Availbe directory in folder";     
                                                    }else{
                                                        echo "Not Availbe directory in folder";  
                                                    }
                                                    ?>
                                                </td>-->
                                            </tr>

                                            <?php  } ?>
                                           
                                         </table>
                                       

                                    </div>
                                </div>
                               
                                <?php }?>

                                <?php if(isset($_GET['page']) && $_GET['page']=="add"){ ?>

                                    <style type="text/css">
                                        input{
                                            height: 36px !important;
                                        }
                                    </style>

                                    <div class="card">
                                        <h5 class="card-header">Manage Source Code</h5>
                                        <div class="card-body">
                                            <form action="" method="post">

                                                <div class="form-group col-sm-6">
                                                    <label class="form-label">Add New Source Code</label>
                                                    <input class="form-control" name="source_code_name" type="text" id="source_code_name" value="" placeholder="CL">
                                                </div>

                                                <br>

                                                <div class="form-group col-sm-6">
                                                    <label class="form-label">Country Code (For Flag)</label>
                                                    <select name="country_code" id="country_code" class="form-control" onChange="myNewFunction(this);">
                                                        <option>Please select</option> 
                                                         <?php foreach ($countryFlags as $key => $value) { ?>
                                                    <option value="<?php echo strtolower($key);?>"><?php echo $value; ?></option>
                                                         <?php } ?>   

                                                    </select>

                                                </div>
                                                <br>

                                                <div class="form-group col-sm-6">
                                                    <label class="form-label">Country Name</label>
                                                    <input class="form-control" name="country" type="text" id="country" value="">
                                                </div>
                                                <br>
                                                 <button type="button" class="btn btn-primary" name="name" onclick="this.form.submit()">Add</button>


                                            </form>
                                        </div>
                                    </div>
                       

                                <?php }?>


                                  <?php if(isset($_GET['page']) && $_GET['page']=="edit"){ ?>

                                    <style type="text/css">
                                        input{
                                            height: 36px !important;
                                        }
                                    </style>
                                    <?php //echo "<pre>";print_r($source_edit_data); ?>

                                    <div class="card">
                                        <h5 class="card-header">Edit Source Code</h5>
                                        <div class="card-body">
                                            <form action="" method="post">

                                                <div class="form-group col-sm-6">
                                                    <label class="form-label">Edit Source Code</label>
                                                    <input class="form-control" name="source_code_name" type="text" id="source_code_name" value="<?php echo $source_edit_data['source_code_name']; ?>" placeholder="CL">
                                                </div>

                                                <br>

                                                <div class="form-group col-sm-6">
                                                    <label class="form-label">Country Code (For Flag)</label>
                                                    <select name="country_code" id="country_code" class="form-control" onChange="myNewFunction(this);">
                                                        <option>Please select</option> 
                                                         <?php foreach ($countryFlags as $key => $value) { ?>
    <option value="<?php echo strtolower($key);?>" <?php echo strtolower($key)==$source_edit_data['country_code']?'selected':''; ?>>
                                                        <?php echo $value; ?>  </option>
                                                         <?php } ?>   

                                                    </select>

                                                </div>
                                                <br>

                                                <div class="form-group col-sm-6">
                                                    <label class="form-label">Country Name</label>
                                                    <input class="form-control" name="country" type="text" id="country" value="<?php echo $source_edit_data['country']; ?>">
                                                </div>
                                                <input type="hidden" name="edit_id" value="<?php echo $_GET['edit_id'] ?>">
                                                <br>
                                                 <button type="button" class="btn btn-primary" name="name" onclick="this.form.submit()">Update</button>


                                            </form>
                                        </div>
                                    </div>
                       

                                <?php }?>
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

    <script>
         function deleteSourceCodeconfirm(name,id) {
            // Display a confirmation dialog
            var isConfirmed = window.confirm("Are you sure you want to delete "+name+" source code ?");

            // Return true to submit the form, or false to cancel
            if(isConfirmed){
               $("#delete_form_code_"+id).submit();
            }
        }

        function myNewFunction(sel) {
            
            $("#country").val(sel.options[sel.selectedIndex].text);
                //alert(sel.options[sel.selectedIndex].text);
        }


    </script>

</body>

</html>



