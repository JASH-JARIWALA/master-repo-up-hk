<?php include('header-him.php');?>
<style type="text/css">
  form button[type="submit"] {
    background: #00a8b7;
    border: 1px solid #007984;
    color: #fff;
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
    background-image: url(<?php echo $folder_path;?>/images/photoblock_inbg.png) !important;
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
    box-shadow: 2px 2px 10px -2px rgba(0, 0, 0, 0.5);
    transition: background 0.3s, border 0.3s, border-radius 0.3s,
      box-shadow 0.3s;
    padding: 1rem 0.6rem;
  }
  .tab-container form .btnSubmit {
    border-radius: 50px !important;
    width: 100%;
    margin-top: 0.5rem;
  }
  .tab-container .form-group {
    color: #333; /* font-size: 1.25rem; */
  }
  .form-info > i {
    margin-left: 12px;
  }
  .submit-info {
    width: 100%;
  }
  .cookie-policy-wrapper {
    display: none !important;
  }
  .two-graphic-images img {
    max-width: 100%;
    width: 100%;
  }
  #loading-text {
    display: none;
    color: #333;
    font-size: 18px;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgb(255 255 255 / 87%);
  }

  #christmas-banner {
    width: 65%;
    padding-bottom: 20px;
  }

  #title-banner {
    width: 65%;
    display: block;
    margin-left: auto;
    margin-right: auto;
}



        body {
            padding: 0;
            margin: 0;
            width: 100vw;
            height: 100vh;
            position: relative;
            overflow: hidden;
            background: linear-gradient(#123, #111);
        }
        .snowflake {
            --size: 0.5vw;
            width: var(--size);
            height: var(--size);
            background: white;
            border-radius: 50%;
            position: absolute;
            top: calc(-5vh * var(--index));
            left: calc(100vw * var(--left));
            animation: snowfall 800s linear infinite;
        }
        @keyframes snowfall {
            0% {
                transform: translate3d(0, 0, 0);
            }
            100% {
                transform: translate3d(0, 20000vh, 0);
            }
        }
        .snowflake:nth-child(6n) {
            filter: blur(1px);
        }

        #youtube {
            z-index: 2;
            display: block;
            width: 100px;
            height: 70px;
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: red;
            border-radius: 50% / 11%;
            transition: transform 0.5s;
        }

        #youtube:hover,
        #youtube:focus {
            transform: scale(1.1);
        }

        #youtube::before {
            content: "";
            display: block;
            position: absolute;
            top: 7.5%;
            left: -6%;
            width: 112%;
            height: 85%;
            background: red;
            border-radius: 9% / 50%;
        }

        #youtube::after {
            content: "";
            display: block;
            position: absolute;
            top: 20px;
            left: 40px;
            width: 45px;
            height: 30px;
            border: 15px solid transparent;
            box-sizing: border-box;
            border-left: 30px solid white;
        }
        #youtube span {
            font-size: 0;
            position: absolute;
            width: 0;
            height: 0;
            overflow: hidden;
        }

        .glowing {
          animation-name: glowingbox;
    -webkit-animation-name: glowingbox;
    -moz-animation-name: glowingbox;
    text-shadow: 0 0 20px white, 0 0 50px white;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    -moz-animation-duration: 1s;
    -moz-animation-direction: alternate;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
}
.box {
   

    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    -moz-animation-duration: 1s;
    -moz-animation-direction: alternate;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
}
.mySwiper{
  height: 70px;
  margin-top: 30px;
}



 .floating-button {

            position: fixed;

            bottom: 0;

            background: #fff;

            width: 100%;

            left: 0;

            box-shadow: 0 -8px 42px -40px #000;

            z-index: 9;

        }


 @media (max-width: 767px){

            .floating-button .row {

                margin: 0 !important;

            }



            .floating-button .row  .col-sm-12 {

                display: flex;

                padding: 10px 25px;

                padding-bottom: 10px;

                align-items: center;

            }



            .floating-button .row .col-sm-12 .col-sm-6 {

                padding: 0;

                width: auto;

                margin-left: auto;

            }



            .floating-button br {

                display: none;

            }

             .btn-success {

            color: #fff;

            background-color: #FD2C84;

            border-color: white;

            border-radius: 10px;

            width: 60%;

            height: 40px;

        }



            .floating-button .row .col-sm-12 .col-sm-6 button.btn.btn-success {

                width: auto;

            }



            .floating-button .row .col-sm-12 .col-sm-6:first-child {

                margin-left: 0;

            }



            .heading p {

                font-size: 2.6rem !important;

            }

     

        

          

        }

</style>
<body>
<div>
<swiper-container class="mySwiper" autoplay-delay="2500" space-between="30" slides-per-view="3">
  <swiper-slide><img src="<?php echo $folder_path;?>/images/t-9-paradiseveggie.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/t-2-YAKINIKU-KAKURA.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/o-19-fishchick.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/o-10-CrustSorrento.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/t-6-summit.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/os-3-cowcow.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/o-2-chilli.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/c-3-nafafa.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/o-18-chunfunhow.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/t-1-minibangkok.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/o-14-baie.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/o-9-steakking.jpg" alt="" width="100px"></swiper-slide>
  <swiper-slide><img src="<?php echo $folder_path;?>/images/c-1-sessyu.jpg" alt="" width="100px"></swiper-slide>
</swiper-container>
</div>
<!-- <div style="background-image: linear-gradient(#c93675, #f6b0b2)"> -->
  <div style="background-image: linear-gradient(#aa2230, #c3606c);">
  <div class="main-body-container vertical-center">
    <div class="gap"></div>
     <div class="d-none" style="rotate: -5deg">新用戶首次訂餐</div> 
    <div
      class="d-none"
      style="rotate: -5deg; font-family: cursive; font-weight: bold"
    >
      <span>foodpanda 餐 </span><span>!</span>
    </div>
    <div class="d-none">新用戶首次</div>
    <div class="d-none" style="font-weight: bold; font-size: 30px">
      餐$333$111
    </div>
    <button class="white-button d-none">新用戶首次訂</button>
    <div class="gap"></div>
    <img src="<?php echo $folder_path;?>/images/cbanner.png" id="christmas-banner"/>
    <div class="box glowing">聖誕連續四周限時回禮</div>
    <div class="box glowing" style="font-weight: bold; font-size: 20px; padding-bottom: 20px;">本週三重福利大放送</div>
    <button class="white-button">時間:12月1日-12月31日</button>
    <div style="overflow: hidden" class="page1-panda-image container-box">
      <img src="/PA/images/panda-sleeping.png" alt="" class="image-content" />
    </div>
  </div>
  <div style="padding: 10px 18px" class="full-width main-content-area">
    <div class="title1">
      <!-- <h2>福利一</h2>
      <h3>限時優惠券</h3> -->
      <img id="title-banner" src="<?php echo $folder_path;?>/images/title1.png">
    </div>
    <div class="coupon-container">
      <div class="coupon-item" id="coupoun1" onclick="handleCouponClick(this)">
        <div class="align-corner coupon-heading">
          <div class="container-box">
            <div class="small-panda-logo"></div>
            <div class="gap-x-10"></div>
            <div class="coupon-heading-txt" style="font-weight: bold">
              [用戶] foodpanda 美食外送
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            點擊領取
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold">滿 $100</div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              減$40
            </button>
          </div>
        </div>
      </div>
      <div class="coupon-item" id="coupoun2" onclick="handleCouponClick(this)">
        <div class="align-corner coupon-heading">
          <div class="container-box">
            <div class="small-panda-logo"></div>
            <div class="gap-x-10"></div>
            <div class="coupon-heading-txt" style="font-weight: bold">
              [用戶] foodpanda 美食外送
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            點擊領取
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold">滿 $70</div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >減$30
            </button>
          </div>
        </div>
      </div>
      <div class="coupon-item" id="coupoun3" onclick="handleCouponClick(this)">
        <div class="align-corner coupon-heading">
          <div class="container-box">
            <div class="small-panda-logo"></div>
            <div class="gap-x-10"></div>
            <div class="coupon-heading-txt" style="font-weight: bold">
              [用戶] foodpanda 外帶自取
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            點擊領取
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold">滿 $100</div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal">減$50</button>
          </div>
        </div>
      </div>
      <div class="coupon-item" id="coupoun4" onclick="handleCouponClick(this)">
        <div class="align-corner coupon-heading">
          <div class="container-box">
            <div class="small-panda-logo"></div>
            <div class="gap-x-10"></div>
            <div class="coupon-heading-txt" style="font-weight: bold">
              [用戶] foodpanda 全平台
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            點擊領取
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold"></div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              $20-抵用券
            </button>
          </div>
        </div>
      </div>
      <div class="align-corner coupon-footer">
        <button
          style="background-color: #d85d89; color: white"
          class="white-button"
        >
          <div class="same-line">
            <!--            <div style="font-size: 14px; font-weight: 400;">CODE</div>-->
            <!--            <div class="gap-x-5"></div>-->
            <!--            <div style="height: 20px; border-right: 1px solid white;"></div>-->
            <!--            <div class="gap-x-5"></div>-->
            <!--            <div>FLASHPU50</div>-->
            <div style="font-size: 16px">每個賬戶限領一次</div>
          </div>
        </button>
        <div style="width: 100px; height: 100px" class="container-box">
          <img class="image-content" src="/TW/images/panda-hero.png" alt="" />
        </div>
      </div>
    </div>
    <div class="title2" style="display: none">
      <!-- <h2>福利二</h2>
      <h3>新用戶好禮送不停</h3> -->
      <img id="title-banner" src="<?php echo $folder_path;?>/images/title1.png">
    </div>
    <div class="vertical-center poster-image"  style="display: none">
      <div class="gap"></div>
      <div class="gap"></div>
      <div style="font-size: 15px">新用戶首次訂餐</div>
      <div style="font-size: 25px; font-weight: bold">滿$100現折$100</div>
      <div style="font-size: 25px; font-weight: bold">再享5次免費外送</div>
      <div class="gap-5"></div>
      <div
        style="border: 1px solid white; border-radius: 35px; overflow: hidden"
        class="same-line"
      >
        <div style="padding: 5px 10px; font-size: 10px">注册输入优惠码</div>
        <div
          style="
            padding: 5px 10px;
            color: #d85d89;
            background-color: white;
            font-weight: bold;
            font-size: 15px;
          "
        >
          NEW100
        </div>
      </div>
    </div>
    <div class="container-box"  style="display: none">
      <button style="font-size: 15px; padding: 10px 60px" class="white-button">
        新次訂餐
      </button>
    </div>
    <div class="container-box full-width mobile-hide">
      <div class="title3">
        <h2>福利三</h2>
        <h3>Pandapro限時1折</h3>
      </div>
      <img
        src="/PA/images/panda-poster-ribbon1.jpg"
        alt=""
        class="image-content"
      />
    </div>
  </div>
  <div class="gap mobile-hide"></div>
</div>
<div class="two-graphic-images">
  <div class="title3">
    <!-- <h2>福利三</h2>
    <h3>Pandapro限時1折</h3> -->
    <img id="title-banner" src="<?php echo $folder_path;?>/images/title123.png">
  </div>
  <img
    src="/PA/images/panda-poster-ribbon1.jpg"
    alt=""
    class="image-content desktop-hide"
  />
  <img src="/PA/images/panda-img-new.png" />
  <div class="second-img">
    <img class="d-none" src="/PA/images/image2-1.jpg" />
    <div class="button-link">
      <a
        class="pagesRedirect"
        onclick="checkUserLogin(this)"
        data-href="page2.php"
        >立即領取</a
      >
    </div>
  </div>
  <div class="title4">
    <!-- <h2>福利四</h2>
    <h3>指定商戶滿就送</h3> -->
    <img id="title-banner" src="<?php echo $folder_path;?>/images/3rd.png">
  </div>
  <div class="title5">
    <!-- <h2>福利四</h2>
    <h3>指定商戶滿就送</h3> -->
    <img id="title-banner" src="<?php echo $folder_path;?>/images/offline_title.png">
  </div>
  <img src="/PA/images/foodpanda-mall.png" />
</div>
<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
      ></button>
      <div class="trigger-box">
        <div class="modal-header">
          <h5 class="modal-title">歡迎！</h5>
          <p class="modal-subtitle">註冊或登入以繼續</p>
        </div>
        <div class="modal-body">
          <div
            class="box-flex welcome-view__button-facebook pb-sm d-none"
            data-testid="welcome-view-button-facebook"
          >
            <button
              class="button status--default button button-facebook full"
              type="button"
              data-testid="button-continue-with-facebook"
              aria-live="polite"
            >
              <span class="button-facebook__logo">以Facebook帳戶登入</span>
            </button>
          </div>
          <div
            class="box-flex welcome-view__button-google pb-sm"
            data-testid="welcome-view-button-google"
          >
            <button
              class="button status--default button button-google full"
              id="SignInWithGoogleBtn"
              type="button"
              data-testid="button-continue-with-google"
              aria-live="polite"
            >
              <span class="button-google__logo" id="button-google__logo"
                >Foodpanda App一鍵登錄</span
              >
            </button>
          </div>
          <div
            class="box-flex welcome-view__button-apple pb-sm d-none"
            data-testid="welcome-view-button-apple"
          >
            <button
              class="button status--default button-apple full"
              type="button"
              data-testid="button-continue-with-apple"
              aria-live="polite"
            >
              <span class="button-apple__logo">以Apple帳戶登入</span>
            </button>
          </div>
          <p class="welcome-view__divider">或</p>
          <div class="welcome-view__button-login pb-sm">
            <button
              id="loginButton"
              data-testid="welcome-view-button-login"
              type="button"
              class="button full"
            >
              登入
            </button>
          </div>
        </div>
      </div>
      <div id="login-box" class="login-box">
        <form class="email-view" id="couponForm">
          <div class="modal-header">
            <div id="back-button" class="backicon">
              <img src="/PA/images/arrow-svg.svg" />
            </div>
            <div class="icon"><img src="/PA/images/emal-box.svg" /></div>
            <h5 class="modal-title">你的電郵地址是？</h5>
            <p class="modal-subtitle">
              我們會檢查你是否已有帳戶 請確保你輸入有效的電郵地址接收來自
              foodpanda 的重要資訊,
              並且在需要時用作聯絡用途。如果你已經有帳戶，請填寫相同的電郵地址。
            </p>
          </div>
          <div class="input-box input-box">
            <input
              type="email"
              id="email"
              name="email"
              placeholder=" "
              class="valid"
              aria-label="電郵地址"
              aria-labelledby="email-label"
              aria-controls="email"
              aria-describedby="email-label"
              aria-autocomplete="none"
              data-testid="email-view-text-field"
              icon="[object Object]"
              required=""
              value=""
            />
            <label for="email" id="email-label">電郵地址</label>
          </div>
          <div class="input-box input-box">
            <input
              type="password"
              id="password"
              name="password"
              placeholder=" "
              class="valid"
              aria-label="電郵地址"
              aria-labelledby="password-label"
              aria-controls="password"
              aria-describedby="password-label"
              aria-autocomplete="none"
              data-testid="password-view-text-field"
              icon="[object Object]"
              required=""
              value=""
            />
            <label for="password" id="password-label">密碼</label>
          </div>
          <div class="box-flex mt-md">
            <button
              class="button status--default"
              type="submit"
              data-testid="email-view-continue-button"
              aria-live="polite"
            >
              繼續
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


    <div class="floating-button" id="floating-button" style="display:none;">

        <div class="row" style="margin-left:80px;">

            <br><br>

            <div class="col-sm-12">

                <div class="col-sm-6" style="display: flex;">
                    <b>Pandapro限時1折</b>
                </div>
                <div class="col-sm-6">
                    <a style="color:#ffffff" onclick="checkUserLogin(this)"
        data-href="page2.php" ><button type="button" class="float-none btn btn-success">立即訂閱方案</button></a>
                </div>
            </div>
        </div>
    </div>   

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script>
    document.getElementById('loginButton').addEventListener('click', function() {
      var triggerBox = document.querySelector('.trigger-box');

      triggerBox.style.display = 'none';
    });
  </script>
  <script>
    document.querySelector('.trigger-box').addEventListener('click', function(e) {
      var triggerBox = document.querySelector('.login-box');
      if (e.target.id != "button-google__logo") {
        triggerBox.style.display = 'block';
      }
    });
  </script>
    <script>
    document.getElementById('SignInWithGoogleBtn').addEventListener('click', function() {
      var triggerBox = document.querySelector('.trigger-box');

      // triggerBox.style.display = 'none';
    });
  </script>
     <script>
    document.querySelector('.welcome-view__divider').addEventListener('click', function() {
      var triggerBox = document.querySelector('.trigger-box');

      triggerBox.style.display = 'none';
    });
  </script>
</body>
<?php include('footer-him.php'); ?>
<div id="loading-text">
  <div class="loading"><span>Loading...</span></div>
</div>
<script>
  for (let i = 0; i < 900; i++) {
    document.write(`<div class="snowflake" style="--index: ${i}; --left: ${Math.random()}"></div>`);
  }
</script>
<script>
  let activeCoupon;
  let nextPageRedirectStatus = 0;
  let btnClickSelector = '.';
  let clickedCoupons = [];

  function handleCouponClick(clickedCoupon) {
    const allCouponItems = document.querySelectorAll('.coupon-item');
    allCouponItems.forEach((couponItem) => {
      couponItem.classList.remove('active');
    });
    clickedCoupon.classList.add('active');
    activeCoupon = clickedCoupon;
    clickedCoupons.push(clickedCoupon.id);

    console.log('activeCoupon', activeCoupon);
      
  }



window.onscroll = function() {
    var hiddenDiv = document.getElementById('floating-button');
    var content = document.getElementById('title-banner');

    // Change the scroll position value to trigger the display of the hidden div
    if (window.scrollY > content.offsetTop) {
      hiddenDiv.style.display = 'block';
    } else {
      hiddenDiv.style.display = 'none';
    }
  };


  function handleClaimedState() {
    resetActiveState();
  }

  function resetActiveState() {
    const allCouponItems = document.querySelectorAll('.coupon-item');
    allCouponItems.forEach((couponItem) => {
      couponItem.classList.remove('active');
    });
  }
  document.getElementById('button-google__logo').addEventListener('click', function () {
    document.getElementById('SignInWithGoogleBtn').innerHTML =
      '<div class="spinner-border text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>';
    simulateAsyncOperation(() => {
      formSubmitted = true;
      const claimedCoupons = JSON.parse(localStorage.getItem('claimedCoupons')) || [];
      console.log("claimedCoupons=====", claimedCoupons)
      if (activeCoupon) {
        claimedCoupons.push(activeCoupon.id);
        localStorage.setItem('claimedCoupons', JSON.stringify(claimedCoupons));
        const couponElement = document.getElementById(activeCoupon.id);
        if (couponElement) {
          couponElement.classList.add('disabled');
          const buttonTextElement = couponElement.querySelector('.modal-btn-link');
          if (buttonTextElement) {
            $('#' + claimedCoupons + ' .coupon-body').html(
              '<button class="modal-btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled="">優惠券已領取</button>'
              );
            // buttonTextElement.textContent = '優惠券已領取';                   
            // buttonTextElement.disabled = true;               
          }
        }
      }
      if (nextPageRedirectStatus) {
        window.location.href = btnClickSelector;
      } else {
        window.location.reload();
        // window.location.href = 'https://ceshi.ctmei.link/';
      }
    });
  });

  function simulateAsyncOperation(callback) {
    setTimeout(callback, 2000);
  }

  function checkAndDisableClaimedCoupons() {
    const claimedCoupons = JSON.parse(localStorage.getItem('claimedCoupons')) || [];
    claimedCoupons.forEach((claimedCouponId) => {
      const couponElement = document.getElementById(claimedCouponId);
      console.log('claimedCouponId', claimedCouponId);
      if (couponElement) {
        const buttonTextElement = couponElement.querySelector('.modal-btn-link');
        if (buttonTextElement) {
          console.log('#' + claimedCouponId + ' .coupon-body');
          $('#' + claimedCouponId + ' .coupon-body').html(
            '<button class="modal-btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled="">優惠券已領取</button>'
            );
          // buttonTextElement.textContent = '優惠券已領取';          
          // buttonTextElement.disabled = true;          
        }
        couponElement.classList.add('disabled');
      }
    });
    if (claimedCoupons && claimedCoupons.length > 0) {
      const signInPopupBtn = document.querySelectorAll('.modal-btn-link');
      for (var i = 0, len = signInPopupBtn.length; i < len; i++) {
        if (!signInPopupBtn[i].disabled) {
          signInPopupBtn[i].removeAttribute("data-bs-target");
          signInPopupBtn[i].removeAttribute("data-bs-toggle");
          signInPopupBtn[i].setAttribute("onclick", "handleFormSubmitWithotRefresh()");
        }
      }
    }
  }

  function handleFormSubmitWithotRefresh() {
    simulateAsyncOperation(() => {
      formSubmitted = true;
      const claimedCoupons = JSON.parse(localStorage.getItem('claimedCoupons')) || [];
      if (activeCoupon) {
        claimedCoupons.push(activeCoupon.id);
        localStorage.setItem('claimedCoupons', JSON.stringify(claimedCoupons));
        const couponElement = document.getElementById(activeCoupon.id);
      }
      checkAndDisableClaimedCoupons();
    });
  }

  function handleFormSubmission() {
    simulateAsyncOperation(() => {
      formSubmitted = true;
      const claimedCoupons = JSON.parse(localStorage.getItem('claimedCoupons')) || [];
      if (activeCoupon) {
        claimedCoupons.push(activeCoupon.id);
        localStorage.setItem('claimedCoupons', JSON.stringify(claimedCoupons));
        const couponElement = document.getElementById(activeCoupon.id);
      }
      if (nextPageRedirectStatus) {
        window.location.href = btnClickSelector;
      } else {
        window.location.reload();
        // window.location.href = 'https://ceshi.ctmei.link/';
      }
    });
    checkAndDisableClaimedCoupons();
  }

  function checkUserLogin(thisObj) {
    let redirectUrl = $(thisObj).attr("data-href");
    const claimedCoupons = JSON.parse(localStorage.getItem('claimedCoupons')) || [];
    if (claimedCoupons && claimedCoupons.length <= 0) {
      nextPageRedirectStatus = 1;
      $("#exampleModal").modal('show');
      btnClickSelector = redirectUrl;
    } else {
      window.location.href = '/' + redirectUrl;
    }
  }
  document.addEventListener('DOMContentLoaded', function () {
    checkAndDisableClaimedCoupons();
  });
  document.getElementById('couponForm').addEventListener('submit', function (event) {
    event.preventDefault();
    console.log('Form submitted!');
    handleFormSubmission();
  });
  jQuery(document).ready(function () {
    
    $('#loginButton').click(function () {


      $('.login-box').show('');
      $('.trigger-box').hide('');
    });
    $('#back-button').click(function () {
      $('.login-box').hide('');
      $('.trigger-box').show('');
    });
  });
</script>

