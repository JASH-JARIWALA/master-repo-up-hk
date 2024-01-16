<?php
require_once '../ip_verify.php';
//echo password_hash("9525444544", PASSWORD_DEFAULT);
session_start();

if (isset($_SESSION['loggedin'])) {
    header('Location: ../dashboard');
}

 $random_num    = md5(random_bytes(64));
  $captcha_code  = substr($random_num, 0, 6);
  // Assign captcha in session
  $_SESSION['CAPTCHA_CODE'] = $captcha_code;
  // $_SESSION['Message'] = $message;
  // print_r( $_SESSION['CAPTCHA_CODE']); die;



if (isset($_POST['send'])) {
    // Check if captcha is entered
    if (!empty($_POST['captcha'])) {
        // Validate captcha
        if ($_POST['captcha'] === $_SESSION['CAPTCHA_CODE']) {
            // Correct captcha, redirect to another page
            header("Location: another_page.php");
            exit(); // Make sure to exit after redirecting
        } else {
            // Incorrect captcha, display error message or take appropriate action
            // echo '<div class="alert alert-danger" role="alert">Incorrect captcha. Please try again.</div>';
            $_SESSION["Message"] = "Incorrect captcha. Please try again.";
            echo "Incorrect captcha. Please try again.";
        }
    } else {
        // Captcha not entered, display error message or take appropriate action
        $_SESSION["Message"] = "Please enter the captcha.";
        echo '<div class="alert alert-danger" role="alert">Please enter the captcha.</div>';
        // echo "Please enter the captcha.";
    }
}


?>

<html>

<head>


    <title>Laposte - Login</title>

    <link rel="icon" type="image/png" sizes="16x16" href="../favi.png">


    <link rel="stylesheet" href="/assets/css/style2.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


</head>

<body>


<div class="wrapper bg-white">
    <div class="h2 text-center">Login Area</div>
    <div class="h4 text-muted text-center pt-2">Enter your login details</div>
    <form id="login-form" method="POST" action="auth.php" class="pt-3">
        <div id="error-msg" class="alert alert-danger" role="alert"></div>
        <div id="progress-loading" style="text-align:center;"><img style="width:60px; height:auto;" src="../loading.gif" /></div>

        <div class="form-group py-2">
            <div class="input-field">
                    <span class="far fa-user p-2">
                    </span>
                <input type="text" value="" placeholder="Username" required name="username" id="username" class="">
            </div>
        </div>
        <div class="form-group py-1 pb-2">
            <div class="input-field">
                <span class="fas fa-lock p-2"></span>
                <input type="password" value="" placeholder="Password" required class="" name="password" id="password">
                <span class="far fa-eye-slash"></span>
            </div>
        </div>
        <div class="row">
        <div class="form-group col-6">
          <label>Enter Captcha</label>
          <input type="text" class="form-control" name="captcha" id="captcha">
        </div>
        <div class="form-group col-6">
          <label>Captcha Code</label>
          <div class="row">
              <div style="text-align: center" class="col-12">
                  <div style="font-weight: bold; box-shadow: 0 0 2px; padding: 8px 0px; letter-spacing: 5px;background: #E1C16E "><?php echo $captcha_code; ?></div>
              </div>
          </div>
        </div>
      </div>










        <div class="d-flex align-items-start">
            <!--  <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
            <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div> -->
        </div> 
        <!-- <button  id="btnSubmit" class="btn btn-block text-center my-3">Log in</button> -->
         <input name="send"  id="btnSubmit" class="btn btn-block text-center my-3" value="Log in" />










        <!-- <div class="text-center pt-3 text-muted">Not a member? <a href="#">Sign up</a></div> -->
    </form>

    <div id="reset-password-container" style="display: none;">
        <h2 class="text-center">Password Reset</h2>
        <p>Your password has been reset. Please set a new password.</p>
        <button  class="btn btn-block text-center my-3" onclick="resetPasword(this)"  id="reset-password-btn">Reset Password</button>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
    function resetPasword(){
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var username = $("#username").val();
                var password = $("#password").val();
                data = {"username":username,"password":password,"latitude": latitude, "longitude": longitude, 'action': 'reset_password'};

                $.ajax({
                    type: 'post',
                    url: '/admin/auth.php',
                    data: data,
                    success: function (data) {
                        window.location.reload();
                        $("#username, #password").val('');
                        $('#reset-password-container').hide();
                        $('#login-form').show();
                        $("#error-msg").hide();
                    }
                });
            });
        }
    }

    $(function() {
        //$("#error-msg").hide();
        //$("#progress-loading").hide();
        var attempts = 0;
        $('#btnSubmit').click(function(e) {

            $("#error-msg").hide();
            $("#progress-loading").hide();

            let self = $(this);

            e.preventDefault(); // prevent default submit behavior

            self.prop('disabled', true);

            var data = $('#login-form').serialize(); // get form data
            var test= false;
            if (test) {
            //if ("geolocation" in navigator) {
              
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    data += '&' + $.param({"latitude": latitude,"longitude":longitude});
                    // sending ajax request to login.php file, it will process login request and give response.
                    $.ajax({
                        url: '/admin/auth.php',
                        type: "POST",
                        data: data,
                        beforeSend: function() {
                            $("#progress-loading").show();
                        },
                        complete: function(){
                            $("#progress-loading").hide();
                        },

                    }).done(function(res) {
                        res = JSON.parse(res);
                        if (res['status']) // if login successful redirect user to secure.php page.
                        {
                            window.location.href = "../dashboard";
                        } else {
                            var errorMessage = '';
                            // if there is any errors convert array of errors into html string,
                            //here we are wrapping errors into a paragraph tag.
                            console.log(res.msg);
                            $.each(res['msg'], function(index, message) {
                                errorMessage += '<div>' + message + '</div>';
                            });

                            if(!errorMessage.includes('Username field is required') && !errorMessage.includes('Password field is required')) {
                                attempts++;
                                if (attempts >= 3) {
                                    // Show prompt to reset password after 3 attempts
                                    errorMessage += '<div>Maximum login attempts reached. Please reset your password.</div>';
                                    $('#password').prop('disabled', true);
                                    $('#username').prop('disabled', true);
                                    $('#reset-password-container').show();
                                    $('#login-form').hide();
                                } else {
                                    errorMessage += '<div>Incorrect username or password. Attempts left: ' + (3 - attempts) + '</div>';
                                }
                            }


                            // place the errors inside the div#error-msg.
                            $("#error-msg").html(errorMessage);
                            // show it on the browser, default state, hide
                            $("#error-msg").show();
                            // remove disable attribute to the login button,
                            //to prevent multiple form submissions
                            //we have added this attribution on login from submit
                            self.prop('disabled', false);
                        }
                    }).fail(function() {
                        alert("error");
                    }).always(function() {
                        self.prop('disabled', false);
                    });
                });
            }else{
                // sending ajax request to login.php file, it will process login request and give response.
               debugger;     
                $.ajax({
                    url: '/admin/auth.php',
                    type: "POST",
                    data: data,
                    beforeSend: function() {
                        $("#progress-loading").show();
                    },
                    complete: function(){
                        $("#progress-loading").hide();
                    },

                }).done(function(res) {
                    res = JSON.parse(res);
                    if (res['status']) // if login successful redirect user to secure.php page.
                    {
                        window.location.href = "../dashboard";
                    } else {
                        var errorMessage = '';
                        // if there is any errors convert array of errors into html string,
                        //here we are wrapping errors into a paragraph tag.
                        console.log(res.msg);
                        $.each(res['msg'], function(index, message) {
                            errorMessage += '<div>' + message + '</div>';
                        });

                        if(!errorMessage.includes('Username field is required') && !errorMessage.includes('Password field is required')) {
                            attempts++;
                            if (attempts >= 3) {
                                // Show prompt to reset password after 3 attempts
                                errorMessage += '<div>Maximum login attempts reached. Please reset your password.</div>';
                                $('#password').prop('disabled', true);
                                $('#username').prop('disabled', true);
                                $('#reset-password-container').show();
                                $('#login-form').hide();
                            } else {
                                errorMessage += '<div>Incorrect username or password. Attempts left: ' + (3 - attempts) + '</div>';
                            }
                        }

                        // place the errors inside the div#error-msg.
                        $("#error-msg").html(errorMessage);
                        // show it on the browser, default state, hide
                        $("#error-msg").show();
                        // remove disable attribute to the login button,
                        //to prevent multiple form submissions
                        //we have added this attribution on login from submit
                        self.prop('disabled', false);
                    }
                }).fail(function() {
                    alert("error");
                }).always(function() {
                    self.prop('disabled', false);
                });
            }
        });
    });
</script>


</body>

</html>
