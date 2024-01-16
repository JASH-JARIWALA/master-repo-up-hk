<html lang="tr" xmlns="http://www.w3.org/1999/xhtml" class=" webkit safari safari13 mobile iphone js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="MRW - Particulares">
    <meta name="description" content="MRW compañía líder en transporte urgente de paquetes hasta 80 kg, desde Andorra, España, Gibraltar, Portugal y Venezuela, en envíos nacionales e internacionales">
    <meta name="DC.Description" content="MRW compañía líder en transporte urgente de paquetes hasta 80 kg, desde Andorra, España, Gibraltar, Portugal y Venezuela, en envíos nacionales e internacionales">
    <!-- <meta name="description" content="Somos el socio logístico que necesitas para hacer crecer tu empresa"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
    <link rel="icon" href="<?php echo $folder_path;?>/assets/images/favicon/favicon.ico"> -->
    <link type="text/css" rel="stylesheet" href="<?php echo $folder_path;?>/assets/yurticikargo_a31.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $folder_path;?>/assets/custom.css">
    <meta name="google-site-verification" content="i1ppcHyFMEcxQB6gduwpAgmCZW2bE6x4VG1ep_-Qsgk">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="<?php echo $folder_path;?>/assets/yurticikargo_a31.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $folder_path;?>/assets/custom.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <title>Track a postal item</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $folder_path;?>/assets/images/favicon/favicon.ico">
</head>
<style>
    html {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        position: relative;
        height: 100%;
        overflow: scroll !important;
    }

    .logo {
        width: 66px;
        height: 30px;
        aspect-ratio: 11/5;
    }

    footer {
        display: block !important;
        margin: 0 !important;
    }

    .header {
        background-color: #009de0;
        background-image: linear-gradient(241deg, #009de0, #005aa8);
        /* opacity: 0; */

        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        z-index: 1000;
    }

    .header_sidemenu_active {
        background-image: linear-gradient(241deg, #05a4e8, #0571cf) !important;
    }

    .header .logo {
        width: 122px;
        height: 26px;
    }

    .header .menu-icon {
        height: 34px;
        width: 44px;
        padding: 7px;
        /* border: 1px solid gray; */
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header .menu-icon:hover {
        /* background-color: grey; */
    }

    .align-items-center {
        align-items: center;
    }

    .side-menu {
        overflow: scroll;
        /* transition: all 0.5s; */

        height: 0px;
        position: absolute;
        background-color: white;
        z-index: 1;
        width: 100%;
    }

    .side-menu li {
        display: flex;
        gap: 5px;
        padding: 10px 0px;
    }

    .side-menu-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5px;
        font-weight: 700;
        text-transform: uppercase;
    }

    /* .side-menu-item:hover {
        color: red;
    } */

    .side-menu-sub-menu {
        display: none;
    }

    .side-menu-sub-menu li {
        display: flex;
        gap: 5px;
        align-items: center;

        margin-left: 20px;
        color: gray;
    }

    .side-menu-sub-menu li .icon {
        font-size: 20px;
        font-weight: bold;
    }

    .active {
        /* background-color: #c00d0d; */
        color: #FE4438;
    }

    .side-menu-new-parent {
        /* position: relative; */
        z-index: 100;
        /* height: 100%; */
        margin-top: 50px;
    }

    .side-menu-new {
        z-index: 1000;
        background-image: linear-gradient(253deg, rgb(0, 159, 223), rgb(0, 90, 168));
        color: white;
        position: fixed;
        width: 100vw;
        /* transition: all 0.5s; */
        height: 100vh;
    }

    .side-menu-new-parent ul li {
        padding: 14px;
        color: white;
    }

    .side-menu-new-parent ul:hover li:hover {
        /* color: #FE4438; */
    }

    .smi-border {
        border-bottom: 0.5px solid #eee;
    }
</style>
<header id="header" class="header fixed-top d-flex align-items-center p-4">
    <div class="flex align-items-center justify-between">
        <div class="flex gap-4 align-items-center">
            <!-- <img class="search_icon" src="assets/images/magnifier.svg" alt=""> -->
            <div class="menu-icon" onclick="toggleMenu()">

                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="16" viewBox="0 0 23 16">
                    <g stroke="#fff" fill="#fff" fill-rule="evenodd" stroke="#414042" stroke-linecap="round" stroke-width="1.5">
                        <path d="M1.429.75h20M1.429 7.75h20M1.429 14.75h20" />
                    </g>
                </svg>
            </div>
            <img src="<?php echo $folder_path;?>/assets/new/logo-mini@2x.png" style="height: 36px; width: 32px" alt="">
            <div style="display: flex; gap:5px; align-items: center; color: white; ">
                EN
                <svg height="10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#fff" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg>
            </div>
            <!-- <img src="assets/images/burger-menu.svg" class="menu-icon" alt="" onclick="toggleMenu()"> -->
        </div>

        <div style="display: flex; gap: 8px; align-items: center; color: white;">
            <svg width="13" height="20" viewBox="0 0 13 20" xmlns="http://www.w3.org/2000/svg">

                <path d="M11.283 10.475a.682.682 0 0 0-.994-.045.763.763 0 0 0-.043 1.041 5.475 5.475 0 0 1 1.342 3.611v3.168c0 .148-.118.27-.258.27H1.663a.267.267 0 0 1-.259-.27v-3.168c0-2.943 2.285-5.332 5.09-5.332 2.566 0 4.656-2.189 4.656-4.877C11.15 2.184 9.064 0 6.498 0 3.932 0 1.843 2.189 1.843 4.877a5.1 5.1 0 0 0 .551 2.307c.184.361.61.492.955.3a.755.755 0 0 0 .285-1 3.55 3.55 0 0 1-.383-1.607c0-1.877 1.455-3.402 3.247-3.402C8.29 1.475 9.745 3 9.745 4.877c0 1.877-1.455 3.402-3.247 3.402C2.915 8.279 0 11.332 0 15.086v3.168C0 19.217.747 20 1.667 20h9.666c.92 0 1.667-.783 1.667-1.746v-3.168c0-1.713-.61-3.348-1.717-4.61z" fill="#FFF" class="fill"></path>
            </svg>
            <div>Login</div>
            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 2.33334C8.70142 2.33334 6.49702 3.24643 4.8717 4.87175C3.24639 6.49706 2.33329 8.70146 2.33329 11H5.58329C6.15793 11 6.70903 11.2283 7.11536 11.6346C7.52169 12.0409 7.74996 12.592 7.74996 13.1667V18.5833C7.74996 19.158 7.52169 19.7091 7.11536 20.1154C6.70903 20.5217 6.15793 20.75 5.58329 20.75H2.33329C1.75866 20.75 1.20756 20.5217 0.801228 20.1154C0.394899 19.7091 0.166626 19.158 0.166626 18.5833V11C0.166626 5.01676 5.01671 0.166672 11 0.166672C16.9832 0.166672 21.8333 5.01676 21.8333 11V18.5833C21.8333 19.158 21.605 19.7091 21.1987 20.1154C20.7924 20.5217 20.2413 20.75 19.6666 20.75H16.4166C15.842 20.75 15.2909 20.5217 14.8846 20.1154C14.4782 19.7091 14.25 19.158 14.25 18.5833V13.1667C14.25 12.592 14.4782 12.0409 14.8846 11.6346C15.2909 11.2283 15.842 11 16.4166 11H19.6666C19.6666 8.70146 18.7535 6.49706 17.1282 4.87175C15.5029 3.24643 13.2985 2.33334 11 2.33334ZM2.33329 13.1667V18.5833H5.58329V13.1667H2.33329ZM16.4166 13.1667V18.5833H19.6666V13.1667H16.4166Z" fill="white"></path>
            </svg>
            <img src="<?php echo $folder_path;?>/assets/new/search-icon.svg" style="height: 20px;" alt="">
        </div>

    </div>
</header>

<div class="side-menu-new-parent">
    <ul class="side-menu-new" style="right: -100vw;">
        <li class="side-menu-item smi-border">Фізічныя асобы <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg></li>
        <ul class="side-menu-sub-menu">
            <li>Вашы дасылкі</li>
            <li>Зрабіце дасылку</li>
            <li class="side-menu-item">След дасылак <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg></li>
            <ul class="side-menu-sub-menu">
                <li>След</li>
                <li>Апавяшчэнні</li>
            </ul>
            <li>Нацыянальныя паслугі</li>
            <li>Міжнародныя паслугі</li>
            <li>Паслугі з узнагародамі</li>
            <li>Прамацыя</li>
            <ul class="side-menu-sub-menu">
                <li>MRW Pack</li>
            </ul>
            <li>Я хачу стаць кліентам</li>
        </ul>

        <li class="side-menu-item smi-border">Кампаніі <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg></li>
        <ul class="side-menu-sub-menu">
            <li>Станьце MRW Point</li>
            <li>Нацыянальныя паслугі</li>
            <li>Міжнародныя паслугі</li>
            <li class="side-menu-item">Burofax <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg></li>
            <ul class="side-menu-sub-menu">
                <li>Як гэта працуе?</li>
                <li>Станці карыстальніка</li>
                <li>Доступ абанента карыстальніка</li>
                <li>Мадэльнасці</li>
                <li>Перавагі</li>
                <li>След дасылак</li>
                <li>Праверка дакументаў</li>
            </ul>
            <li>Цыфравая лагістыка</li>
            <li>Прапанова камерцыйнага прапанова</li>
            <li class="side-menu-item">электронная камерцыя <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg></li>
            <ul class="side-menu-sub-menu">
                <li>Паслуга электроннай камерцыі</li>
                <li>MRW Вяртанні</li>
                <li>Інтэграцыя</li>
            </ul>
            <li>Лагістычныя рашэнні</li>
            <li>Галоўныя рашэнні</li>
            <li>Паслугі з узнагародамі</li>
            <li>Пакаванне</li>
            <li>Дадатковыя паслугі</li>
        </ul>

        <li class="side-menu-item smi-border">Сацыяльная адказнасць <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg></li>
        <ul class="side-menu-sub-menu">
            <li>Наша RSC</li>
            <li class="side-menu-item">MRW Solidario <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg></li>
            <ul class="side-menu-sub-menu">
                <li>Сацыяльныя дасылкі</li>
                <li>Людзі з адмовай</li>
                <li>Студэнты</li>
                <li>Шматдзетныя сем'і</li>
                <li>Безробіцы</li>
                <li>Старэйшыя людзі</li>
                <li>Студэнты і выкладчыкі, якія жывуць за мяжой</li>
            </ul>
        </ul>

        <li class="side-menu-item smi-border">Актуальнасць <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg></li>
        <ul class="side-menu-sub-menu">
            <li>Навіны</li>
            <li>Блог </li>
        </ul>

        <li class="side-menu-item smi-border">Пра MRW <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg></li>
        <ul class="side-menu-sub-menu">
            <li class="side-menu-item">Хто мы <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg></li>
            <ul class="side-menu-sub-menu">
                <li>Група MRW</li>
                <li>Палітыка ўзаемадзеяння з асяроддзем</li>
                <li>Палітыка выдатнасці</li>
                <li>Палітыка роўнасці</li>
                <li>Палітыка бяспекі</li>
                <li>Пагадненні</li>
                <li>Дзяржаўныя ўстаноўкі</li>
                <li>Карпаратыўная галерэя</li>
                <li>Карпаратыўнае відэа</li>
            </ul>
            <li class="side-menu-item">Наши афісы <svg style="width: 15px; height: 18px; float: right;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg></li>
            <ul class="side-menu-sub-menu">
                <li>Знайсці афіс</li>
                <li>Андора</li>
                <li>Іспанія</li>
                <li>Гібралтар</li>
                <li>Партугалія</li>
                <li>Цэнтральныя афісы</li>
                <li>Афісы з пашыранымі часамі працы</li>
                <li>Святкі</li>
            </ul>
            <li>Працуй з намі</li>
            <li>Звяжыцеся з намі </li>
        </ul>


    </ul>
</div>


<script>
    function toggleMenu() {
        const menu = document.getElementsByClassName("side-menu-new")[0]
        const _header = document.getElementById("header")
        // menu.hidden = !menu.hidden
        menu.style.right = menu.style.right === "-100vw" ? "0px" : "-100vw";
        _header.classList.toggle("header_sidemenu_active")
    }

    var acc = document.getElementsByClassName("side-menu-item");
    var i;

    for (i = 0; i < acc.length; i++) {
        console.log(acc[i]);
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>