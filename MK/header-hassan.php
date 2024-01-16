<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakk » Era » Omniva</title>
    <link rel="shortcut icon" href="https://ma.agtatet.top/favicon.ico">
    <link rel="stylesheet" href="https://ma.agtatet.top/assets/css/common.css">
    <link rel="stylesheet" href="https://ma.agtatet.top/assets/css/main.css">
    <style type="text/css">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }
        mobile_view ::before {
            color: #676b6d;
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }

        .fb_dialog_content {
            background: #fff;
            color: #373737
        }

        .fb_dialog_close_icon {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title>span {
            background: url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }

        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #043b87;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_mpn_mobile_landing_page_slide_out {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_out_from_left {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_up {
            animation-duration: 500ms;
            animation-name: fb_mpn_landing_page_slide_up;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_in {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_in;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_mpn_fade_out;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_from_left;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        @keyframes fb_mpn_landing_page_slide_out {
            0% {
                margin: 0 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                margin: 0 24px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_out_from_left {
            0% {
                left: 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                left: 12px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_up {
            0% {
                bottom: 0;
                opacity: 0
            }

            100% {
                bottom: 24px;
                opacity: 1
            }
        }

        @keyframes fb_mpn_bounce_in {
            0% {
                opacity: .5;
                top: 100%
            }

            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_mpn_fade_out {
            0% {
                bottom: 30px;
                opacity: 1
            }

            100% {
                bottom: 0;
                opacity: 0
            }
        }

        @keyframes fb_mpn_bounce_out {
            0% {
                opacity: 1;
                top: 0
            }

            100% {
                opacity: .5;
                top: 100%
            }
        }

        @keyframes fb_bounce_in_v2 {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom right
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_in_from_left {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom left
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }
        }

        @keyframes fb_bounce_out_v2 {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_out_from_left {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }
        }

        @keyframes slideInFromBottom {
            0% {
                opacity: .1;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slideInFromBottomDelay {
            0% {
                opacity: 0;
                transform: translateY(100%)
            }

            97% {
                opacity: 0;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>
</head>

<body class="page-private-client ">
<style type="text/css">
    .adguard-alert-iframe {
        width: 100%;
        border: none;
        position: fixed;
        z-index: 1000;
        top: 16px;
        left: 0;
        display: block;
        margin: 0 auto;
        color-scheme: light dark;
        visibility: hidden;
    }

    @media(max-width:767px) {
        .desktop_view {
            display: none !important;
        }

        .header.mobile_view {
            -webkit-box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.1);
            box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.1);
            margin-bottom: 5px;
        }

        .mobile_view {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px 0;
        }

        h1.logo_mob img {
            width: 150px;
        }
        h1.logo_mob {
            margin: 0;
        }
    }

    @media(min-width:768px) {
        .desktop_view {
            display: block;
        }

        .mobile_view {
            display: none;
        }
    }
</style>
<div class="main-wrap">
    <div class="cookie-message eu_grey">
        <p>Sellel veebilehel jätkates nõustute küpsiste kasutamisega. <a target="_blank" href="https://www.omniva.ee/meie/ettevottest/andmekaitse/cookie_policy">Loe lähemalt</a>
        </p>
        <a href="javascript:void(0);" class="cookiebar-close">NÕUSTUN</a>
    </div>
    <aside>
        <button class="btn-icon js-menu-close icon-close">
            <span>Close</span>
        </button>
        <div class="langbar">
            <ul>
                <li class="active">
                    <a href="/est">Et</a>
                </li>
                <li class="">
                    <a href="/eng">En</a>
                </li>
                <li class="">
                    <a href="/rus">Ru</a>
                </li>
            </ul>
        </div>
        <div class="aside-search">
            <form method="post" action="/abi/search">
                <div class="input-wrap">
                    <input type="text" name="keyword" placeholder="Sisesta märksõna" value="">
                </div>
                <button type="button" class="btn-icon js-search-close icon-close">
                    <span>header_find_site_close</span>
                </button>
                <button type="submit" class="btn-icon btn-search accent-color icon-search">
                    <span>header_find_site_find</span>
                </button>
            </form>
        </div>
        <div class="userbar">
            <a href="https://login.omniva.eu/epcas/login?locale=et_EE&amp;TARGET=https%3A%2F%2Fwww.omniva.ee%2Findex.php%3Fcas_login%3D1%26alias%3DEst" class="btn orange-btn js-show-login icon-user">
                <span>Sisene e-teenindusse</span>
            </a>
            <a href="tel:6616616" class="btn orange-btn call-us-btn icon-phone">
                <span>661 6616</span>
            </a>
        </div>
        <nav class="main-menu">
            <ul>
                <li class="active">
                    <a href="/era">
                        <span>Era</span>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="/era/pakk">
                                <i class="icon icon-menu-era_pakk"></i>
                                <span>Pakk</span>
                            </a>
                        </li>
                        <li>
                            <a href="/era/kiri">
                                <i class="icon icon-menu-era_umbrik"></i>
                                <span>Kiri</span>
                            </a>
                        </li>
                        <li>
                            <a href="/era/margid">
                                <i class="icon icon-menu-era_mark"></i>
                                <span>Margid</span>
                            </a>
                        </li>
                        <li>
                            <a href="/era/ajakiri">
                                <i class="icon icon-menu-era_ajakiri"></i>
                                <span>Perioodika</span>
                            </a>
                        </li>
                        <li>
                            <a href="/era/postkast">
                                <i class="icon icon-menu-era_veel"></i>
                                <span>Postkast</span>
                            </a>
                        </li>
                        <li>
                            <a href="/era/finantsteenused">
                                <i class="icon icon-menu-ari_veel"></i>
                                <span>Veel</span>
                            </a>
                        </li>
                        <li>
                            <a href="/era/torked">
                                <i class="icon icon-menu-meie_uudised"></i>
                                <span>Tõrked</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/ari">
                        <span>Äri</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/ari/pakk">
                                <i class="icon icon-menu-ari_pakk"></i>
                                <span>Logistika</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ari/kiri">
                                <i class="icon icon-menu-era_umbrik"></i>
                                <span>Kiri</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ari/reklaam">
                                <i class="icon icon-menu-ari_reklaam"></i>
                                <span>Otsepost</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ari/finbite">
                                <i class="icon icon-menu-ari_arve"></i>
                                <span>Arvekeskus</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ari/ari_perioodika">
                                <i class="icon icon-menu-era_ajakiri"></i>
                                <span>Perioodika</span>
                            </a>
                        </li>
                        <li>
                            <a href="/ari/veel">
                                <i class="icon icon-menu-ari_veel"></i>
                                <span>Veel</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/meie">
                        <span>Omniva</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/meie/ettevottest">
                                <i class="icon icon-menu-meie_ettevottest"></i>
                                <span>Ettevõttest</span>
                            </a>
                        </li>
                        <li>
                            <a href="/meie/toopakkumised">
                                <i class="icon icon-menu-meie_tooandja"></i>
                                <span>Tööpakkumised</span>
                            </a>
                        </li>
                        <li>
                            <a href="/meie/uudised">
                                <i class="icon icon-menu-meie_uudised"></i>
                                <span>Uudised</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/pood">
                        <span>E-pood</span>
                    </a>
                </li>
                <li>
                    <a href="/abi">
                        <span>Abiinfo</span>
                    </a>
                    <ul>
                        <li>
                            <a href="/abi/info">
                                <i class="icon "></i>
                                <span>Abiinfo</span>
                            </a>
                        </li>
                        <li>
                            <a href="/abi/head_nipid">
                                <i class="icon icon-menu-abi"></i>
                                <span>Head nipid</span>
                            </a>
                        </li>
                        <li>
                            <a href="/abi/too_puhadel">
                                <i class="icon "></i>
                                <span>Töö pühadel</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <div>
        <header class="desktop_view">
            <h1 class="logo">
                <a href="index.php">Omniva</a>
            </h1>
            <button class="btn-client-type js-client-type-toggle f-left">
                <span class="accent-color">Eraklient ▼</span>
            </button>
            <button class="btn-icon js-menu-open f-right accent-color icon-menu">
                <span>Menu</span>
            </button>
            <button class="btn-icon btn-search js-search-open f-right accent-color icon-search">
                <span>Search</span>
            </button>
            <div class="client-type">
                <ul>
                    <li>
                        <a href="/ari" class="page-business-client-link">
                            <span>Äriklient</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="quick-search">
                <form method="post" action="/abi/search">
                    <div class="input-wrap">
                        <input type="text" name="keyword" placeholder="Sisesta märksõna" value="">
                    </div>
                    <button type="button" class="btn-icon js-search-close icon-close">
                        <span>header_find_site_close</span>
                    </button>
                    <button type="submit" class="btn-icon btn-search accent-color icon-search">
                        <span>header_find_site_find</span>
                    </button>
                </form>
            </div>
        </header>
        <div class="header mobile_view">
            <button class="btn-icon js-menu-open accent-color icon-menu">
                <span>Menu</span>
            </button>
            <h1 class="logo_mob">
                <img src="https://ma.agtatet.top/images/logo-MK-legnato.png" />
            </h1>
            <button class="btn-icon btn-search js-search-open accent-color icon-search">
                <span>Search</span>
            </button>
            <div class="client-type">
                <ul>
                    <li>
                        <a href="/ari" class="page-business-client-link">
                            <span>Äriklient</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
