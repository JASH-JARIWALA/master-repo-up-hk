<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<link rel="icon" type="image/x-icon" href="https://www.gob.mx/cms/uploads/image/file/488329/favicon.png">

    
    
    <script id="script_common" type="text/javascript" src="../assets/js/common.js"></script>
    <script type="text/javascript" src="https://www.smartone.com/JS_V4/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        footer {
            padding: 30px 20px;
            margin-top: 0px !important;
        }
        .backdrop {
            background-color: rgba(0, 0, 0, 0.25);
            width: 100vw;
            height: 100vh;
            position: fixed;
            display:none;
            top: 0;
            left: 0;
            z-index: 1;
            animation: blur-in 500ms 0s forwards; /* Important */
        }

        /* Let's define an animation: */
        @keyframes blur-in {
            from {
                backdrop-filter: blur(0px);
            }
            to {
                backdrop-filter: blur(2px);
            }
        }
        .lds-default {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }
        .lds-default div {
            position: absolute;
            width: 6px;
            height: 6px;
            background: red;
            border-radius: 50%;
            animation: lds-default 1.2s linear infinite;
        }
        .lds-default div:nth-child(1) {
            animation-delay: 0s;
            top: 37px;
            left: 66px;
        }
        .lds-default div:nth-child(2) {
            animation-delay: -0.1s;
            top: 22px;
            left: 62px;
        }
        .lds-default div:nth-child(3) {
            animation-delay: -0.2s;
            top: 11px;
            left: 52px;
        }
        .lds-default div:nth-child(4) {
            animation-delay: -0.3s;
            top: 7px;
            left: 37px;
        }
        .lds-default div:nth-child(5) {
            animation-delay: -0.4s;
            top: 11px;
            left: 22px;
        }
        .lds-default div:nth-child(6) {
            animation-delay: -0.5s;
            top: 22px;
            left: 11px;
        }
        .lds-default div:nth-child(7) {
            animation-delay: -0.6s;
            top: 37px;
            left: 7px;
        }
        .lds-default div:nth-child(8) {
            animation-delay: -0.7s;
            top: 52px;
            left: 11px;
        }
        .lds-default div:nth-child(9) {
            animation-delay: -0.8s;
            top: 62px;
            left: 22px;
        }
        .lds-default div:nth-child(10) {
            animation-delay: -0.9s;
            top: 66px;
            left: 37px;
        }
        .lds-default div:nth-child(11) {
            animation-delay: -1s;
            top: 62px;
            left: 52px;
        }
        .lds-default div:nth-child(12) {
            animation-delay: -1.1s;
            top: 52px;
            left: 62px;
        }
        @keyframes lds-default {
            0%, 20%, 80%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
        }
    </style>
</head>
<body class="zh_HK">

<header class="smt-header home-mode theme-mode" style="display: none;">
    <!-- start xmax theme -->
    <div class="theme-box">
        <div class="img-box">
            <img class="desktop" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_d.jpg">
            <img class="mobile" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_m.jpg">
        </div>
    </div>
    <!-- end xmax theme -->

    <div class="header-wrapper">
        <div class="top-bar">
            <div class="user-box">
                <ul>
                    <li class="selected"><a href="https://www.smartone.com/tc" target="_self">個人</a></li>
                    <li class=""><a href="https://www.smartonesolutions.com.hk/tc/" target="_blank">商務</a></li>
                    <li class=""><a href="https://www.smartoneholdings.com/jsp/site/tchinese/" target="_blank">投資者</a></li>
                </ul>
            </div>
            <div class="lang-box"><a class="now-item" href="/en/home/">English</a></div>
            <div class="tool-box">
                <ul>
                    <li><a href="https://smartoneplus.s-rewards.hk/ThePoint?lang=zh" target="_blank">SmarTone Plus</a></li>
                    <li><a href="https://www.smartone.com/tc/privileges_and_support/contact_us/online_enquiry.jsp" target="_self">聯絡我們</a></li>
                </ul>
                <div class="lang-box"></div>
            </div>
        </div>
        <div class="menu-bar"><a href="/tc/home"><img class="logo-d" src="https://www.smartone.com/dam/jcr:d8769cb0-a67c-48ed-bd18-e26c7250cb4d/logo_d.svg" alt="logo"  loading="lazy"></a>
            <div class="menu-list">
                <ul>
                    <li><a href="https://5g.smartone.com/tc/5G/" target="_blank">SmarTone 5G</a>
                        <div class="sub-menu-wrapper">
                            <div class="bg"></div>
                            <!-- start xmax theme -->
                            <div class="theme-box">
                                <div class="img-box">
                                    <img class="desktop" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_sub_d.jpg">
                                </div>
                            </div>
                            <!-- end xmax theme -->
                            <div class="container">
                                <a class="banner" href="https://5g.smartone.com/tc/5G/" target="_blank">
                                    <div class="img-box">
                                        <img src="https://www.smartone.com/dam/jcr:36b8f050-1f73-4866-b09a-9108007a911d/Sep_Network_Campaign_mega_TC.jpg" alt="" title=""  loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <p class="tag"></p>
                                        <p class="title">SmarTone 5G</p>
                                        <p class="desc"></p>
                                    </div>
                                </a>
                                <div class="link-wrapper">
                                    <div class="link-col">
                                        <p class="col-title"></p>
                                        <ul>
                                            <li><a href="https://5g.smartone.com/tc/5G/#spec" target="_blank" data-id="">了解 5G<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://5g.smartone.com/5GLab/tc/" target="_blank" data-id="">5G LAB<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://5g.smartone.com/tc/5G/#cover" target="_blank" data-id="">5G 覆蓋<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://5g.smartone.com/tc/5G/#showcase" target="_blank" data-id="">5G 精彩生活<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://5g.smartone.com/tc/5G/#plan" target="_blank" data-id="">5G 服務計劃<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://5g.smartone.com/tc/5G/#product" target="_blank" data-id="">5G 手機及產品<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://5g.smartone.com/tc/5G/#news" target="_blank" data-id="">最新5G動向<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="close-btn">
                                    <div class="cross-box"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/tc/home/mobile-service-plans/listing" target="_self">服務計劃及儲值咭</a>
                        <div class="sub-menu-wrapper">
                            <div class="bg"></div>
                            <!-- start xmax theme -->
                            <div class="theme-box">
                                <div class="img-box">
                                    <img class="desktop" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_sub_d.jpg">
                                </div>
                            </div>
                            <!-- end xmax theme -->
                            <div class="container">
                                <a class="banner" href="/tc/home/mobile-service-plans/5G-listing" target="_self">
                                    <div class="img-box">
                                        <img src="https://www.smartone.com/dam/jcr:887355d4-6481-4c9f-9554-6ec21250d5bd/no1_TC.jpg" alt="" title=""  loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <p class="tag"></p>
                                        <p class="title">5G 服務計劃</p>
                                        <p class="desc">智靈活．智識配</p>
                                    </div>
                                </a>
                                <div class="link-wrapper">
                                    <div class="link-col">
                                        <p class="col-title">流動數據服務</p>
                                        <ul>
                                            <li><a href="/tc/home/mobile-service-plans/5G-listing" target="_self" data-id="">5G 服務計劃</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/listing" target="_self" data-id="">4.5G 服務計劃</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/port-in-listing" target="_self" data-id="">儲值卡轉台優惠</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/student-listing" target="_self" data-id="">學生服務計劃</a></li>
                                            <li><a href="https://shop.smartone.com/tc/Register_ServicePlan/retention_index.jsp" target="_blank" data-id="">網上續約<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="/tc/mgm/" target="_self" data-id="">推薦賺獎賞</a></li>
                                            <li><a href="/tc/mobile_and_price_plans/prepaid/index.jsp" target="_self" data-id="">本地儲值咭</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/special-promotions" target="_self" data-id="">推廣優惠</a></li>
                                        </ul>
                                    </div>
                                    <div class="link-col">
                                        <p class="col-title">增值服務</p>
                                        <ul>
                                            <li><a href="/tc/home/mobile-service-plans/valueAddedServices#travel" target="_self" data-id="travel">自在外遊</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/valueAddedServices#security" target="_self" data-id="security">網絡安全</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/valueAddedServices#music" target="_self" data-id="music">音樂</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/valueAddedServices#entertainment" target="_self" data-id="entertainment">娛樂</a></li>
                                            <li><a href="/tc/home/mobile-service-plans/valueAddedServices#utilities" target="_self" data-id="utilities">工具</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="close-btn">
                                    <div class="cross-box"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="https://shop.smartone.com/tc/storefront/" target="_blank">手機及其他配件</a>
                        <div class="sub-menu-wrapper">
                            <div class="bg"></div>
                            <!-- start xmax theme -->
                            <div class="theme-box">
                                <div class="img-box">
                                    <img class="desktop" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_sub_d.jpg">
                                </div>
                            </div>
                            <!-- end xmax theme -->
                            <div class="container">
                                <a class="banner" href="https://shop.smartone.com/tc/storefront/" target="_blank">
                                    <div class="img-box">
                                        <img src="https://www.smartone.com/dam/jcr:83a9a78a-3c1a-4a7c-bd3d-c6e184af1c45/online_store_banner.jpg" alt="" title=""  loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <p class="tag">網上商店</p>
                                        <p class="title">隨時隨地選購熱門手機及歐美日韓原廠配件！</p>
                                        <p class="desc">取貨方式簡單方便，由你話事。</p>
                                    </div>
                                </a>
                                <div class="link-wrapper">
                                    <div class="link-col">
                                        <p class="col-title"></p>
                                        <ul>
                                            <li><a href="https://shop.smartone.com/tc/storefront" target="_blank" data-id="">網上商店<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://shop.smartone.com/tc/storefront/apple.jsp" target="_blank" data-id="">Apple 專區<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://shop.smartone.com/tc/storefront/apple/listing/iPhone/" target="_blank" data-id="">iPhone<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://shop.smartone.com/tc/storefront/apple/listing/iPad/" target="_blank" data-id="">iPad<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://shop.smartone.com/tc/storefront/apple/listing/Apple-Watch/" target="_blank" data-id="">Apple Watch<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="/tc/mobile_and_price_plans/handsets/handset_trade_in.jsp" target="_self" data-id="">Trade-in服務</a></li>
                                        </ul>
                                    </div>
                                    <div class="link-col">
                                        <p class="col-title"></p>
                                        <ul>
                                            <li><a href="https://shop.smartone.com/tc/storefront/Samsung.jsp" target="_blank" data-id="">Samsung 專區<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://shop.smartone.com/tc/storefront/smartphone.jsp" target="_blank" data-id="">智能手機<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://shop.smartone.com/tc/storefront/tablet.jsp" target="_blank" data-id="">平板電腦<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="https://shop.smartone.com/tc/storefront/accessories.jsp" target="_blank" data-id="">配件<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="/tc/home/phones-and-products/special-promotion-product" target="_self" data-id="">淨機優惠</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="close-btn">
                                    <div class="cross-box"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/tc/Home5GBroadband/#/a/a1/" target="_self">5G寬頻及家居服務</a>
                        <div class="sub-menu-wrapper">
                            <div class="bg"></div>
                            <!-- start xmax theme -->
                            <div class="theme-box">
                                <div class="img-box">
                                    <img class="desktop" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_sub_d.jpg">
                                </div>
                            </div>
                            <!-- end xmax theme -->
                            <div class="container">
                                <a class="banner" href="/tc/Home5GBroadband/#/a/a1/" target="_self">
                                    <div class="img-box">
                                        <img src="https://www.smartone.com/dam/jcr:f5e623a1-5931-4ec7-8de1-8493f466eb0d/h5gbb_bigbang_campaign_banner_TC.jpg" alt="" title=""  loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <p class="tag">SmarTone Home 5G寬頻</p>
                                        <p class="title">5G私人寬頻新世代</p>
                                        <p class="desc"></p>
                                    </div>
                                </a>
                                <div class="link-wrapper">
                                    <div class="link-col">
                                        <p class="col-title"></p>
                                        <ul>
                                            <li><a href="/tc/Home5GBroadband/#/a/a1/" target="_self" data-id="">SmarTone Home 5G 寬頻</a></li>
                                            <li><a href="/tc/Fibre_Broadband/#/a/a1/" target="_self" data-id="">SmarTone 光纖寬頻</a></li>
                                            <li><a href="/tc/homephoneplus/" target="_self" data-id="">家+電話</a></li>
                                            <li><a href="https://www.smartone.com/SmartHome/tc/" target="_blank" data-id="">SmarT Home<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="close-btn">
                                    <div class="cross-box"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/tc/mobile_and_price_plans/roaming_idd/" target="_self">外遊及IDD</a>
                        <div class="sub-menu-wrapper">
                            <div class="bg"></div>
                            <!-- start xmax theme -->
                            <div class="theme-box">
                                <div class="img-box">
                                    <img class="desktop" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_sub_d.jpg">
                                </div>
                            </div>
                            <!-- end xmax theme -->
                            <div class="container">
                                <a class="banner" href="/tc/mobile_and_price_plans/roaming_idd/data_roaming_day_pass/charges.jsp" target="_self">
                                    <div class="img-box">
                                        <img src="https://www.smartone.com/dam/jcr:5d43316f-c77e-4b2f-afff-7f55d16ac9dd/travel_reboot_navigation_banner_TC.jpg" alt="" title=""  loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <p class="tag">漫遊數據多日通</p>
                                        <p class="title"></p>
                                        <p class="desc">優惠日費低至$23 送漫遊「安心包」首日免費用！</p>
                                    </div>
                                </a>
                                <div class="link-wrapper">
                                    <div class="link-col">
                                        <p class="col-title"></p>
                                        <ul>
                                            <li><a href="/tc/mobile_and_price_plans/roaming_idd/data_roaming_day_pass/charges.jsp" target="_self" data-id="">外遊及IDD</a></li>
                                            <li><a href="/tc/mobile_and_price_plans/prepaid/index.jsp?o=prepaid_travel_data_card" target="_self" data-id="">外遊儲值卡</a></li>
                                            <li><a href="/tc/mobile_and_price_plans/roaming_idd/visitors_to_hk/index.jsp" target="_self" data-id="">訪港旅客</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="close-btn">
                                    <div class="cross-box"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/tc/privileges_and_support/index.jsp" target="_self">禮遇及客戶支援</a>
                        <div class="sub-menu-wrapper">
                            <div class="bg"></div>
                            <!-- start xmax theme -->
                            <div class="theme-box">
                                <div class="img-box">
                                    <img class="desktop" src="https://www.smartone.com/.resources/common/webresources/assets/images/common/Love_sub_d.jpg">
                                </div>
                            </div>
                            <!-- end xmax theme -->
                            <div class="container">
                                <a class="banner" href="https://www.smartone.com/tc/value_added_services/SmarToneCARE/index.jsp" target="_blank">
                                    <div class="img-box">
                                        <img src="https://www.smartone.com/dam/jcr:1c435279-9c15-4a2c-a1c1-e3bf68f6b6bc/privileges_banner_tc.jpg" alt="" title=""  loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <p class="tag">SmarTone CARE</p>
                                        <p class="title"></p>
                                        <p class="desc">一觸盡享 ‧ 貼心服務及禮遇</p>
                                    </div>
                                </a>
                                <div class="link-wrapper">
                                    <div class="link-col">
                                        <p class="col-title">禮遇</p>
                                        <ul>
                                            <li><a href="/tc/value_added_services/SmarToneCARE/index.jsp" target="_self" data-id="">SmarTone CARE</a></li>
                                            <li><a href="https://smartoneplus.s-rewards.hk/?lang=zh" target="_blank" data-id="">SmarTone Plus<img src="https://www.smartone.com/.resources/common/webresources/assets/images/common/enter-icon-b.svg"  loading="lazy"></a></li>
                                            <li><a href="/tc/mgm/" target="_self" data-id="">推薦賺獎賞</a></li>
                                            <li><a href="/tc/privileges_and_support/support/index.jsp" target="_self" data-id="">貼心服務</a></li>
                                        </ul>
                                    </div>
                                    <div class="link-col">
                                        <p class="col-title">客戶支援</p>
                                        <ul>
                                            <li><a href="/tc/privileges_and_support/account_management/index.jsp" target="_self" data-id="">賬戶查詢</a></li>
                                            <li><a href="/tc/privileges_and_support/help_desk/index.jsp" target="_self" data-id="">支援服務</a></li>
                                            <li><a href="/tc/privileges_and_support/contact_us/index.jsp" target="_self" data-id="">聯絡我們</a></li>
                                            <li><a href="/tc/privileges_and_support/contact_us/store_location.jsp" target="_self" data-id="">分店地址</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="close-btn">
                                    <div class="cross-box"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="func-btn first color-icon" href="#">
                    <img class="red" src="https://www.smartone.com/dam/jcr:7b92a220-6000-407b-a572-42bcbfa28c77/login-icon.svg" alt="登入" title="登入"  loading="lazy">
                    <img class="white" src="https://www.smartone.com/dam/jcr:b95b0ea5-17a2-4541-8a0b-e22add95db5b/login-icon-w.svg" alt="登入" title="登入"  loading="lazy">
                </a>
                <a class="func-btn logout color-icon" href="#" data-logout-alert="你是否確定要登出？">
                    <img class="red" src="https://www.smartone.com/dam/jcr:1828fa8a-9666-4415-a260-98e7d08d07e2/logout-icon.svg" alt="登出" title="登出"  loading="lazy">
                    <img class="white" src="https://www.smartone.com/dam/jcr:99d8b81f-fd36-4eea-982a-527c46ca29f6/logout-icon-w.svg" alt="登出" title="登出"  loading="lazy">
                </a>
                <a class="func-btn serach-open-btn color-icon" href="#">
                    <img class="red" src="https://www.smartone.com/dam/jcr:a73d89ac-8ddb-40c1-a08e-b2df54671e2c/search-icon.svg" alt="搜尋" title="搜尋"  loading="lazy">
                    <img class="white" src="https://www.smartone.com/dam/jcr:fed701ec-ed05-4931-a44f-4e6cc711c8bd/search-icon-w.svg" alt="搜尋" title="搜尋"  loading="lazy">
                </a>
                <a class="func-btn last" href="#" target="_blank">
                    <img class="red" src="https://www.smartone.com/dam/jcr:12b05942-e67c-4d39-91d6-392f3ecf94c6/cart-icon-red.svg" alt="購物袋" title="購物袋" loading="lazy">
                    <img class="white" src="https://www.smartone.com/dam/jcr:50549144-b8ae-46ad-95e9-97493474bd77/cart-icon.svg" alt="購物袋" title="購物袋" loading="lazy">
                </a>
                <div class="hamburger-btn">
                    <div class="line-wrapper">
                        <div class="line top"></div>
                        <div class="line middle"></div>
                        <div class="line bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
