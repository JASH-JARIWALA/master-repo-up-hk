<?php
session_start();

include('header_.php');
?>
<style>
  .swiper {
    width: 100%;
    height: 100%;
  }

  .mySwiper {
    max-height: 200px;
  }

  .slider-image {
    max-height: 175px;
    margin-bottom: auto;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }


  .swiper-button-next {
    top: 95%;
    right: 28%;
    z-index: 100;
  }

  .swiper-button-prev {
    top: 95%;
    left: 28%;
    z-index: 100;
  }

  .swiper-button-next::after,
  .swiper-button-prev::after {
    font-size: 1rem !important;
    color: rgb(73 80 87 / 1);
  }

  .custom-shadow {

    filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));

  }

  .gradient-bg-btn {
    background: linear-gradient(#bef264, #14b8a6);
  }
</style>
<!-- main Start -->
<div id="center" class="main innerpage">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php
      $images = array("assets/images/slider-images/1.png", "assets/images/slider-images/2.png", "assets/images/slider-images/3.png", "assets/images/slider-images/4.png", "assets/images/slider-images/5.png", "assets/images/slider-images/6.png", "assets/images/slider-images/7.png", "assets/images/slider-images/8.png"); // replace with your image URLs
      foreach ($images as $image) {
        $image = $folder_path."/".$image;
        echo '<div class="swiper-slide"><img src="' . $image . '" alt="Slide image" class="slider-image"></div>';
      }
      ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <section class="auth-section mt-8">
    <div class="flex items-center justify-center sm:px-10 sm:py-10">
      <div class="bg-gray-100 bg-opacity-90 xl:shadow-lg rounded-lg w-full xl:w-3/4 p-10 text-gray-700">
        <div class="m-4">
          <!--<h1 class="text-center py-8 font-bold text-3xl">歡迎回來！</h1>-->
          <h1 class="text-center py-4 text-2xl font-bold">登入</h1>
        </div>
        <div class="m-4  space-y-4">
          <div class="flex justify-center">
          </div>
          <div class="flex justify-center">
            <!-- error message bag -->
          </div>
        </div>
        <form id="loginForm" method="POST" action="/page2.php">
          <input type="hidden" name="_token" value="N4wTWpW8sQI3psFe8NQ910vf3kFro7EAYVj4UoIq">
          <!--input username and password-->
          <div class="sm:p-6">
            <div><label class=""> 用戶名稱</label></div>
            <div>
              <input id="subscibleUsername" name="subscibleUsername" type="text" placeholder="你的聯絡電話，如91239123"
                class=" shadow-inner border border-gray-400 w-full rounded-full px-2 py-2 my-1 text-sm text-gray-400 focus:text-gray-700 ">
            </div>
            <!-- error message bag -->
            <div><label class="">密碼</label></div>
            <div><input id="subsciblePassword" name="subsciblePassword" type="password" placeholder="身份證號碼 或 護照號碼"
                class="border shadow-inner border-gray-400 w-full rounded-full text-sm text-gray-400 focus:text-gray-700 px-2 py-2 my-1">
            </div>
            <!-- error message bag -->
            <div class="text-xs mb-4"> * 預設密碼是你的身份證或護照號碼（例： 身份證號碼-A1234561或護照號碼 - 12345678）</div>
            <br>
            <div class="flex items-center space-x-2">
              <input type="checkbox" class="rounded-full" name="">
              <span class="text-sm"> 記住我賬戶號碼/用戶名稱</span>
            </div>
          </div>
          <br>
          <div class="flex flex-col sm:flex-row justify-center sm:space-x-2 space-y-2 sm:space-y-0">
            <button type="button"
              class="focus:outline-none text-center flex justify-center bg-gradient-to-t from-gray-300 to-gray-100 shadow rounded-full  transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none w-full lg:w-40 py-2  text-gray-700">
              <a href="/forgotPassword">
                <span class="font-medium">忘記密碼</span>
              </a>
            </button>
            <button type="submit"
              class="focus:outline-none flex items-center justify-center text-center space-x-2 gradient-bg-btn shadow rounded-full w-full lg:w-40 py-2 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none"
              wire:loading.class="cursor-wait" wire:loading.attr="disabled">
              <span class="font-medium text-white ">登入</span>
            </button>
          </div>
          <br><br>

        </form>

      </div>
    </div>
  </section>

  <section class='registration-section'>
    <div class="flex flex-col items-center">
      <div class=" w-full  mt-8 lg:text-center px-4 py-8">
        <h1 class="inline font-medium px-4 border-l-4 border-red-600 text-lg font-bold tracking-wide">登記流程</h1>

        <div class="grid lg:grid-cols-3 gap-8 mt-8">
          <div class="flex lg:flex-col items-center gap-4 lg:gap-0 lg:my-4">
            <img class="w-8 h-auto lg:w-auto lg:h-16" src="<?php echo $folder_path;?>/assets/images/svg/search.svg">
            <div>
              <h2 class="font-bold">第一步</h2>
              <h3>查詢網絡覆蓋並選擇所需服務計劃</h3>
            </div>

          </div>
          <div class="flex lg:flex-col items-center gap-4 lg:gap-0 lg:my-4">
            <img class="w-8 h-auto lg:w-auto lg:h-16" src="<?php echo $folder_path;?>/assets/images/svg/book.svg">
            <div>
              <h2 class="font-bold">第二步</h2>
              <h3>輸入基本資料及選擇安裝日期</h3>
            </div>

          </div>
          <div class="flex lg:flex-col items-center  gap-4 lg:gap-0 lg:my-4">
            <img class="w-8 h-auto lg:w-auto lg:h-16" src="<?php echo $folder_path;?>/assets/images/svg/payment.svg">
            <div>
              <h2 class="font-bold">第三步</h2>
              <h3>提交付款資料</h3>
            </div>
          </div>
        </div>

        <h4 class='mt-8'></h4>成功登記後，將有專人與你聯絡確認申請。 月費會於成功安裝後，從客戶提交的付款資料中扣除。</h4>

        <div class="flex justify-center mt-8">
          <button class="flex mx-4 items-center text-center" data-modal-toggle="faqModal">
            <h3 class=" text-red font-medium text-red-600 mr-4">常見問題</h3>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
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
