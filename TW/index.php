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
    background-image: url(/TW/images/photoblock_inbg.png) !important;
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
<div style="background-image: linear-gradient(#c93675, #f6b0b2)">
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
    <div>週年慶連續四周限時回禮</div>
    <div style="font-weight: bold; font-size: 20px">本週四重福利大放送</div>
    <button class="white-button">時間:11月20日-12月20日</button>
    <div style="overflow: hidden" class="page1-panda-image container-box">
      <img src="/TW/images/panda-sleeping.png" alt="" class="image-content" />
    </div>
  </div>
  <div style="padding: 10px 18px" class="full-width main-content-area">
    <div class="title1">
      <h2>福利一</h2>
      <h3>限時優惠券</h3>
    </div>
    <div class="coupon-container">
      <div class="coupon-item" id="coupoun1" onclick="handleCouponClick(this)">
        <div class="align-corner coupon-heading">
          <div class="container-box">
            <div class="small-panda-logo"></div>
            <div class="gap-x-10"></div>
            <div class="coupon-heading-txt" style="font-weight: bold">
              [用戶] foodpanda 新用戶首次
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            6m ago
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold">新 $250</div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              新 $50
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
              [用戶] foodpanda 新用戶首次
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            6m ago
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold">新 $250</div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              新 $50
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
              [用戶] foodpanda 新用戶首次
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            6m ago
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold">新 $250</div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              新 $50
            </button>
          </div>
        </div>
      </div>
      <div class="coupon-item" id="coupoun4" onclick="handleCouponClick(this)">
        <div class="align-corner coupon-heading">
          <div class="container-box">
            <div class="small-panda-logo"></div>
            <div class="gap-x-10"></div>
            <div class="coupon-heading-txt" style="font-weight: bold">
              [用戶] foodpanda 新用戶首次
            </div>
          </div>
          <div class="coupon-heading-txt" style="font-size: 12px; color: gray">
            6m ago
          </div>
        </div>
        <div class="coupon-body container-box">
          <div style="font-size: 26px; font-weight: bold">新 $250</div>
          <div class="gap-x-10"></div>
          <div style="font-size: 45px; font-weight: bold">
            <button
              class="modal-btn-link"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              新 $50
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
    <div class="title2">
      <h2>福利二</h2>
      <h3>新用戶好禮送不停</h3>
    </div>
    <div class="vertical-center poster-image">
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
    <div class="container-box">
      <button style="font-size: 15px; padding: 10px 60px" class="white-button">
        新次訂餐
      </button>
    </div>
    <div class="gap-10"></div>
    <div class="gap-10"></div>
    <div class="container-box full-width mobile-hide">
      <div class="title3">
        <h2>福利三</h2>
        <h3>Pandapro限時1折</h3>
      </div>
      <img
        src="/TW/images/panda-poster-ribbon1.jpg"
        alt=""
        class="image-content"
      />
    </div>
  </div>
  <div class="gap mobile-hide"></div>
</div>
<div class="two-graphic-images">
  <div class="title3">
    <h2>福利三</h2>
    <h3>Pandapro限時1折</h3>
  </div>
  <img
    src="/TW/images/panda-poster-ribbon1.jpg"
    alt=""
    class="image-content desktop-hide"
  />
  <img src="/TW/images/foodpanda-new.jpg" />
  <div class="second-img">
    <img class="d-none" src="/TW/images/image2-1.jpg" />
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
    <h2>福利四</h2>
    <h3>指定商戶滿就送</h3>
  </div>
  <!--    <img src="/TW/images/foodpanda-mall.png">-->
  <div class="pandamart-section">
    <div class="pandamart-section-hero">
      <picture
        ><img
          src="https://images.deliveryhero.io/image/foodpanda/groceries-landing/pandamart-hero-tw.jpg?width=696&amp;height=508"
          alt="pandamart employees"
          loading="lazy"
      /></picture>
    </div>
    <div class="pandamart-section-content">
      <div class="pandamart-section-logo">
        <div data-testid="dmart-logo" class="foodpanda-dmart-logo-primary">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 276 53">
            <g fill="none">
              <path
                d="M13.161 37.119c5.257 0 8.025-3.818 8.025-8.455 0-4.638-2.768-8.456-8.025-8.456-4.705 0-8.026 3.818-8.026 8.456 0 4.637 3.321 8.455 8.026 8.455zM.154 15.844h4.981l.5 2.182.33.273.277-.273c1.661-1.636 4.428-2.727 7.195-2.727 7.195 0 13.285 5.455 13.285 13.365 0 7.909-6.09 13.364-13.285 13.364-2.712 0-5.534-1.091-7.195-2.727l-.277-.273-.33.273v13.114H.154V15.844zM38.32 37.169c1.821 0 3.437-.564 4.792-1.694 1.406-1.181 2.084-2.773 2.084-4.878v-.565h-4.74c-3.335 0-5.419 1.54-5.419 4.005 0 1.849 1.145 3.132 3.282 3.132m2.344-11.604h4.533v-1.13c0-3.081-2.137-4.52-5.106-4.52-2.396 0-4.012 1.13-4.897 3.44l-4.95-1.026c1.095-4.365 4.897-7.14 9.898-7.14 6.983 0 10.473 3.392 10.473 10.22v16.073H46.03l-.522-3.388c-1.824 2.515-4.533 3.8-8.127 3.8-4.637 0-8.077-2.722-8.077-7.857 0-5.29 4.535-8.472 11.36-8.472m15.056-9.722h4.982l.554 2.183.277.272.276-.272c1.107-1.637 3.874-2.728 6.088-2.728 6.642 0 10.516 4.364 10.516 10.364v15.821h-5.535v-15.82c-.166-3.492-1.881-5.456-5.534-5.456-3.266 0-5.977 2.617-6.088 5.782v15.494H55.72v-25.64zm39.821 4.365c-5.258 0-8.081 3.818-8.081 8.456 0 4.637 2.823 8.455 8.081 8.455 4.705 0 8.025-3.818 8.025-8.455 0-4.638-3.32-8.456-8.025-8.456zm13.007 21.275h-4.982l-.553-2.182-.277-.273-.276.273c-1.661 1.636-4.428 2.727-7.195 2.727-7.195 0-13.284-5.455-13.284-13.364 0-7.91 6.089-13.365 13.284-13.365 2.713 0 5.534 1.09 7.195 2.727l.276.273.277-.273V4.342h5.535v37.14zm13.414-4.314c1.822 0 3.438-.564 4.793-1.694 1.406-1.181 2.084-2.773 2.084-4.878v-.565h-4.741c-3.334 0-5.418 1.54-5.418 4.005 0 1.849 1.145 3.132 3.282 3.132m2.344-11.604h4.533v-1.13c0-3.081-2.137-4.52-5.106-4.52-2.396 0-4.011 1.13-4.897 3.44l-4.95-1.026c1.095-4.365 4.897-7.14 9.898-7.14 6.983 0 10.473 3.392 10.473 10.22v16.073h-4.584l-.522-3.388c-1.824 2.515-4.533 3.8-8.127 3.8-4.637 0-8.077-2.722-8.077-7.857 0-5.29 4.535-8.472 11.359-8.472"
                fill="#D8166F"
              ></path>
              <path
                fill="#D71A65"
                d="M137.037 53.794L146.288.947H276.15l-9.183 52.847z"
              ></path>
              <path
                d="M155.433 16.027h4.48l-.707 4.008h.107c.17-.362.525-.813 1.066-1.355.539-.542 1.2-1.055 1.978-1.543a12.91 12.91 0 012.674-1.246 9.849 9.849 0 013.21-.514c1.884 0 3.397.398 4.537 1.191 1.14.795 1.978 1.986 2.517 3.575 1.097-1.589 2.464-2.78 4.097-3.575 1.633-.793 3.214-1.191 4.743-1.191 1.956 0 3.498.325 4.629.975 1.129.65 1.956 1.508 2.48 2.571.522 1.067.799 2.276.826 3.628a21.57 21.57 0 01-.34 4.2l-2.635 14.947h-4.801l2.522-14.298c.172-.976.274-1.913.309-2.816.036-.903-.083-1.697-.353-2.383a3.453 3.453 0 00-1.36-1.653c-.64-.415-1.544-.623-2.72-.623-2.311 0-4.092.724-5.341 2.166-1.251 1.446-2.076 3.305-2.477 5.58L172.4 41.698h-4.8l2.369-13.432c.216-1.226.35-2.346.405-3.357.053-1.011-.04-1.887-.283-2.627-.243-.739-.675-1.318-1.295-1.734-.62-.415-1.517-.623-2.69-.623-.853 0-1.711.173-2.57.516a7.478 7.478 0 00-2.38 1.543c-.726.687-1.361 1.563-1.903 2.627-.544 1.064-.943 2.32-1.197 3.764l-2.35 13.323h-4.8l4.527-25.671zm55.679 13.323c-1.139 0-2.313.062-3.527.188a15.195 15.195 0 00-3.382.732c-1.043.361-1.932.867-2.668 1.517-.737.65-1.194 1.481-1.372 2.491-.26 1.481.04 2.546.902 3.195.863.65 2.13.975 3.802.975 1.314 0 2.474-.225 3.48-.677 1.003-.45 1.854-1.037 2.55-1.76a8.686 8.686 0 001.652-2.41c.405-.885.683-1.76.835-2.627l.288-1.624h-2.56zM199.36 19.167a16.68 16.68 0 015.194-2.842c1.89-.632 3.723-.949 5.501-.949 1.85 0 3.4.236 4.65.703 1.251.471 2.232 1.103 2.945 1.897a5.937 5.937 0 011.411 2.735c.228 1.03.243 2.104.046 3.223l-2.31 13.104a53.154 53.154 0 00-.387 2.494c-.099.756-.172 1.48-.222 2.166h-4.266c.122-1.3.297-2.6.527-3.9h-.108c-1.359 1.661-2.829 2.835-4.407 3.521-1.579.685-3.328 1.03-5.248 1.03-1.174 0-2.264-.164-3.274-.489-1.009-.324-1.857-.813-2.542-1.462-.686-.65-1.175-1.453-1.468-2.41-.295-.956-.329-2.067-.106-3.33.293-1.662.902-3.05 1.828-4.17.925-1.119 2.083-2.034 3.468-2.737 1.386-.704 2.953-1.209 4.696-1.515a31.63 31.63 0 015.494-.46h3.52l.191-1.084c.114-.65.104-1.3-.029-1.949a4.24 4.24 0 00-.81-1.76c-.406-.524-.954-.94-1.646-1.246-.694-.307-1.555-.46-2.586-.46-.925 0-1.749.09-2.475.27a12.55 12.55 0 00-2.014.677c-.615.271-1.187.587-1.714.947-.525.362-1.03.704-1.513 1.03l-2.346-3.034zm27.062-3.14h4.8l-.696 3.953h.105a9 9 0 011.61-1.868 11.057 11.057 0 012.04-1.437 11.46 11.46 0 012.328-.946 8.782 8.782 0 012.408-.352c.782 0 1.474.108 2.076.325l-1.14 5.253a11.95 11.95 0 00-1.125-.271 6.159 6.159 0 00-1.155-.108c-2.346 0-4.26.669-5.74 2.004-1.48 1.336-2.468 3.412-2.965 6.228l-2.273 12.89h-4.798l4.525-25.671zm35.738 4.225h-6.88l-2.056 11.644a46.042 46.042 0 00-.324 2.139c-.089.704-.066 1.336.068 1.895.13.56.407 1.01.827 1.354.42.344 1.091.515 2.015.515.57 0 1.165-.055 1.79-.162a5.968 5.968 0 001.758-.597l-.782 4.44c-.627.327-1.404.55-2.333.678-.93.127-1.644.19-2.142.19-1.848 0-3.233-.262-4.153-.785-.923-.523-1.55-1.201-1.884-2.031-.333-.83-.454-1.76-.36-2.79a36.7 36.7 0 01.415-3.113l2.358-13.377h-5.547l.746-4.226h5.546l1.271-7.202h4.8l-1.27 7.202h6.881l-.745 4.226z"
                fill="#FFF"
              ></path>
            </g>
          </svg>
        </div>
      </div>
      <div class="pandamart-section-text">
        <div
          class="cl-black sm:f-paragraph-small-font-size md:f-paragraph-small-font-size f-paragraph-medium-font-size sm:fw-paragraph-small-font-weight md:fw-paragraph-small-font-weight fw-paragraph-medium-font-weight sm:lh-paragraph-small-line-height md:lh-paragraph-small-line-height lh-paragraph-medium-line-height sm:ff-paragraph-small-font-family md:ff-paragraph-small-font-family ff-paragraph-medium-font-family"
        >
          <p>
            還在找最快速方便的方式訂購生鮮雜貨、零食飲料嗎？ pandamart熊貓超市
            提供你一站式商店服務，從義美到樂事、從日用品、化妝品到生鮮蔬果、零食糖果，精選上千款商品，25分鐘火速上門。
          </p>
        </div>
      </div>
      <div class="find_pandamart">Find a pandamart near you</div>
      <div class="pandamart-links-list">
        <ul>
          <li>
            <a
              href="https://www.foodpanda.com.tw/darkstore/d4dy/xiong-mao-chao-shi-zhong-shan-dian"
              >熊貓超市(中山店)</a
            >
          </li>
          <li>
            <a
              href="https://www.foodpanda.com.tw/darkstore/d5os/xiong-mao-chao-shi-nei-hu-dian"
              >熊貓超市(內湖店)</a
            >
          </li>
          <li>
            <a
              href="https://www.foodpanda.com.tw/darkstore/e0xv/xiong-mao-chao-shi-zhong-zheng-dian"
              >熊貓超市(中正店)</a
            >
          </li>
          <li>
            <a
              href="https://www.foodpanda.com.tw/darkstore/d0hh/xiong-mao-chao-shi-san-zhong-dian"
              >熊貓超市(三重店)</a
            >
          </li>
          <li>
            <a
              href="https://www.foodpanda.com.tw/darkstore/k7yc/xiong-mao-chao-shi-bei-tou-dian"
              >熊貓超市(北投店)</a
            >
          </li>
          <li>
            <a
              href="https://www.foodpanda.com.tw/darkstore/o4ti/xiong-mao-chao-shi-tai-nan-dian"
              >熊貓超市(台南店)</a
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
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
                >繼續透過 Google 帳戶操作</span
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
      <div class="login-box">
        <form class="email-view" id="couponForm">
          <div class="modal-header">
            <div id="back-button" class="backicon">
              <img src="/TW/images/arrow-svg.svg" />
            </div>
            <div class="icon"><img src="/TW/images/emal-box.svg" /></div>
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
            <label for="password" id="password-label">電郵地址</label>
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

                </div>
                <div class="col-sm-6">
                    <a style="color:#ffffff" href="/page2.php"><button type="button" class="float-none btn btn-success">立即訂閱方案</button></a>
                </div>
            </div>
        </div>
    </div>   

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

  window.onscroll = function() {
    var hiddenDiv = document.getElementById('floating-button');
    var content = document.getElementById('coupoun1');

    // Change the scroll position value to trigger the display of the hidden div
    if (window.scrollY > content.offsetTop) {
      hiddenDiv.style.display = 'block';
    } else {
     // hiddenDiv.style.display = 'none';
    }
  };

</script>