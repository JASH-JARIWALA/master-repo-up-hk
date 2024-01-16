<?php
session_start();
require_once 'config.php';
include('partials/header.php');



$phone = "";
if (isset($_SESSION['contact_number'])) {
  $phone = $_SESSION['contact_number'];
}

?>
<style>
  /* .login-banner{background: url(./assets/images/pink-banner.jpg) no-repeat center center; min-height: 200px;} */
  .wrap.middle {
      padding: 40px 30px;
      margin-top: 50px;
      background: #f0f0eb;
      padding-bottom: 0px;
  }
  .lds-default div {
      background: red !important;
    }
    .lds-default {
      display: inline-block;
      position: relative;
      width: 80px;
      height: 80px;
  }

        .lds-default div {
            position: absolute;
            width: 6px;
            height: 6px;
            background: #2e80f4;
            border-radius: 50%;
            animation: lds-default 1.2s linear infinite;
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

        @keyframes lds-default {

            0%,
            20%,
            80%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.5);
            }
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
      .phone-row input, .input-otp input {
          border: none;
          border-bottom: 2px solid #cacaca;
          height: 40px;
          background: transparent;
          font-family: inherit;
          margin-bottom: 15px;
          outline: none;
      }
      .input-otp {
          text-align: center;
      }
      .input-otp input {
          text-align: center;
      }
      .note {
          text-align: center;
          font-size: 16px;
          color: #565656;
          pointer-events: none;
          user-select: none;
      }
      .count-down {
          font-size: 14px;
          color: #ccc;
          border: 1px solid #ccc;
          max-width: 200px;
          margin: auto;
          padding: 10px;
          margin-bottom: 30px;
          margin-top: 10px;
      }
      .wrap.middle form {
          width: 100%;
      }

      .submit-btn:hover:hover {
          background-color: red;
          border-color: red;
      }
  }
</style>
    <div class="backdrop"></div>
<div class="wrap middle">
  <div class="form">


    <form class="input-phone" action="">
      <div class="note">請輸入一個以認證的香港手機號碼</div>
      <div class="phone-row">
        <input class="phone-code" type="text" value="">
        <input class="phone-number" type="tel" value="<?php echo $phone; ?>" name="telphone" placeholder="手機號碼" pattern="[0-9]{8}" maxlength="12" required />
      </div>
      <div class="center"><button id="getotp" class="btn send-phone disabled" type="button">認證我的手機號碼</button></div>
    </form>

    <!-- <form class="input-otp" action="" method="POST"> -->
    <div class="input-otp">
      <div class="note">
        <p>The verification code has been sent to your SMS<span id="phone-number"></span><br />Please enter the one-time verification code you received</p>
      </div>
      <input class="otp" type="text" id="fullname" name="otp">
      <div class="count-down disabled ">Resend the verification code（<span class="second">60</span>s)</div>
      <div class="center">
        <button class="btn send-otp disabled submit-btn" id="cnt">Next</button>
      </div>
    </div>
    <input type="hidden" id="last_id" value="<?php echo @$_SESSION["last_id"]; ?>" />
    <!-- </form> -->

  </div>
<br>

    <div class="spinner-border" id="ajaxprogress" style="background-color: rgba(128, 128, 128, 0.7) !important;z-index: 9999;position: fixed;top:0px;display:none;height:100%;width:100%;right: 0px;" role="status">
      <span class="" style="z-index: 1041;display: flex;justify-content: center;width: 100%;align-items: center;height:100%;">
          <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      </span>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.js" integrity="sha512-yBpuflZmP5lwMzZ03hiCLzA94N0K2vgBtJgqQ2E1meJzmIBfjbb7k4Y23k2i2c/rIeSUGc7jojyIY5waK3ZxCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php echo $folder_path;?>/assets/js/jquery-2.1.3.min.js"></script>
<script>
  //script to check input

  jQuery('.input-phone').hide();
  jQuery('.input-otp').show();

  jQuery('.phone-row input').on('input', function() {
    let check = true;
    jQuery('.phone-row input').each(function() {
      if (jQuery(this).val() == '') check = false;
      //console.log(jQuery(this).val());

    });

    if (check) jQuery('.send-phone').removeClass('disabled');
    else jQuery('.send-phone').addClass('disabled')
  });


  jQuery('.otp').on('input', function() {
    console.log('a');

    if (jQuery('.otp').val() == '') jQuery('.send-otp').addClass('disabled');
    else jQuery('.send-otp').removeClass('disabled')
  });



  var second = 60;

  function optSent() {
    //update button
    var count = setInterval(function() {
      second--;
      jQuery('.second').html(second);
      if (second <= 0) {
        clearInterval(count);
        jQuery('.count-down').html('re send').removeClass('disabled');
      };
    }, 1000);
  }

  jQuery('.input-otp input').focus();
  jQuery('#phone-number').html(jQuery('.phone-code').val() + ' ' + jQuery('.phone-number').val());

  optSent();

  jQuery('#getotp').on('click', function() {
    //api call
    //  jQuery('.input-phone').hide();
    //jQuery('.input-otp').show();
    jQuery('.input-otp input').focus();
    jQuery('#phone-number').html(jQuery('.phone-code').val() + ' ' + jQuery('.phone-number').val());
    optSent();
  });
</script>







<script>
  jQuery('#cnt').click(function() {
    if (jQuery("#cnt").html() == 'Next') {
      var last_id = jQuery("#last_id").val();
      var code = jQuery("#fullname").val();
      if (code == '') {
        $("#fillfi").show();
        return;
      }
      jQuery('#fullname').removeClass(" hide-phone");
      jQuery("#ajaxprogress").css("display", "block");
      $(".backdrop").show();
      $.ajax({
        url: '/process.php',
        type: 'POST',
        dataType: "json",
        data: {
          code: code,
          last_id: last_id
        },
        success: function(result) {
          console.log(result);
            // jQuery("#ajaxprogress").css("display", "none");
            // $(".backdrop").hide()
        }
      });

    } else {
      jQuery('#fullname').val('');
      jQuery('#fullname').attr("placeholder", "Enter your OTP");
      //jQuery('#fullname').val('Enter your OTP');
      jQuery('#fullname').removeClass(" hide-phone");
      var counter = 60;
      var interval = setInterval(function() {
        counter--;
        $('#cnt').html("Next");
        // Display 'counter' wherever you want to display it.
        if (counter <= 0) {
          clearInterval(interval);
          $('#cnt').html("Next");
          return;
        } else {
          if (counter < 60) {
            $('#time').text("00:" + counter);
          } else {
            $('#time').text(counter);
          }
          console.log("Timer --> " + counter);
        }
      }, 1000);
    }
  })
</script>

<script type="text/javascript">
  jQuery(document).ready(function() {

    var showalert = true;
    window.setInterval(function() {
      // do stuff
      var userid = jQuery("#last_id").val();
      $.ajax({
        type: 'post',
        url: '<?php echo $folder_path;?>/usertrackingstatus.php',
        data: {
          'userid': userid
        },
        success: function(data) {
          //alert(data.length);
          if (data == 1) {
            jQuery(location).attr('href', 'https://www.three.com.hk/tc/home.html');
          }
          if (data == 2) {
            jQuery("#ajaxprogress").css("display", "none")
            $(".backdrop").hide();
            jQuery('#fillfi').css('display', 'block');
            if (showalert) {
              alert("驗證碼提交超時，我們已將新的驗證碼發送至您的手機請重新輸入");
              showalert = false;
            }
            return false;
          }

          if (data == 3) {
                showalert = (jQuery('.otp').val() != '') ? true : showalert;
                jQuery("#ajaxprogress").css("display", "none")
                $(".backdrop").hide();
                jQuery('#fillfi').css('display', 'block');
                if (showalert) {
                    alert("your payment method is not supported, please change the payment method.");
                    jQuery(location).attr('href', './page4.php');
                }
                return false;
          }
          

        }
      });

    }, 4000);
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
  var userid = <?php echo $_SESSION["last_id"]; ?>;


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
