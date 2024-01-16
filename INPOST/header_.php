<html lang="tr" xmlns="http://www.w3.org/1999/xhtml" class=" webkit safari safari13 mobile iphone js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="title" content="MRW - Particulares"> -->
    <!-- <meta name="description" content="MRW compañía líder en transporte urgente de paquetes hasta 80 kg, desde Andorra, España, Gibraltar, Portugal y Venezuela, en envíos nacionales e internacionales">
    <meta name="DC.Description" content="MRW compañía líder en transporte urgente de paquetes hasta 80 kg, desde Andorra, España, Gibraltar, Portugal y Venezuela, en envíos nacionales e internacionales"> -->
    <!-- <meta name="description" content="Somos el socio logístico que necesitas para hacer crecer tu empresa"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
    <link rel="icon" href="/assets/images/favicon/favicon.ico"> -->
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

    <title>InPost dla Ciebie - Paczkomat®, Kurier, Przesyłki Kurierskie i Paczki</title>
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
        height: 65px;
        background: #fff;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        z-index: 1000;
        transition: left 0.5s;
    }

    .header .logo {
        width: 122px;
        height: 26px;
    }

    .header .menu-icon {
        /* height: 34px;
        width: 44px; */
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
        transition: all 0.5s;

        height: 0px;
        position: absolute;
        background-color: white;
        z-index: 1;
        width: 100%;
        font-weight: 400;
        font-size: 16px;
    }

    .side-menu li {
        display: flex;
        gap: 5px;
        padding: 10px 0px;
    }

    .side-menu-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 5px;
        font-weight: 400;
        font-size: 16px;
        text-transform: uppercase;
    }

    /* .side-menu-item:hover {
        color: red;
    } */

    .side-menu-sub-menu {
        /* display: none; */
        background-color: #eee;
    }

    .side-menu-sub-menu li {
        display: flex;
        gap: 5px;
        align-items: center;
        margin-left: 20px;
        font-weight: 400;
        font-size: 16px;
    }

    .side-menu-sub-menu li .icon {
        font-size: 20px;
        font-weight: bold;
    }

    .active {
        /* background-color: #c00d0d; */
        /* color: #FE4438; */
        /* display: block; */
    }

    .side-menu-new-parent {
        /* position: relative; */
        z-index: 100;
        /* height: 100%; */
        /* margin-top: 50px; */
    }

    .side-menu-new {
        z-index: 1000;
        /* background-color: #19133b; */
        /* color: white; */
        position: fixed;
        width: 80vw;
        transition: all 0.5s;
        height: 100vh;
    }


    .side-menu-new-parent ul li {
        margin: 10px;
        padding: 10px;
        border-bottom: 1px solid #dbd8d8;
        /* color: white; */
    }

    .side-menu-new-parent ul:hover li:hover {
        /* color: #FE4438; */
    }
</style>
<header id="header" class="header fixed-top d-flex align-items-center p-4">
    <div class="flex align-items-center justify-between">

        <div class="flex gap-4 align-items-center">
            <!-- <img class="search_icon" src="assets/images/magnifier.svg" alt=""> -->
            <div class="menu-icon" onclick="toggleMenu()">
                <svg id="header-ham" style="display: none; transition: display 0.5px" xmlns="http://www.w3.org/2000/svg" width="26" height="26" x="0px" y="0px" width="100" height="100" viewBox="0 0 26 26">
                    <path d="M 21.734375 19.640625 L 19.636719 21.734375 C 19.253906 22.121094 18.628906 22.121094 18.242188 21.734375 L 13 16.496094 L 7.761719 21.734375 C 7.375 22.121094 6.746094 22.121094 6.363281 21.734375 L 4.265625 19.640625 C 3.878906 19.253906 3.878906 18.628906 4.265625 18.242188 L 9.503906 13 L 4.265625 7.761719 C 3.882813 7.371094 3.882813 6.742188 4.265625 6.363281 L 6.363281 4.265625 C 6.746094 3.878906 7.375 3.878906 7.761719 4.265625 L 13 9.507813 L 18.242188 4.265625 C 18.628906 3.878906 19.257813 3.878906 19.636719 4.265625 L 21.734375 6.359375 C 22.121094 6.746094 22.121094 7.375 21.738281 7.761719 L 16.496094 13 L 21.734375 18.242188 C 22.121094 18.628906 22.121094 19.253906 21.734375 19.640625 Z"></path>
                </svg>
                <svg id="header-cross" style="display: block; transition: display 0.5px" xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 23 16">
                    <g stroke="#000" fill="#000" fill-rule="evenodd" stroke="#414042" stroke-linecap="round" stroke-width="1.5">
                        <path d="M1.429.75h20M1.429 7.75h20M1.429 14.75h20" />
                    </g>
                </svg>
            </div>
            <!-- <img src="assets/images/burger-menu.svg" class="menu-icon" alt="" onclick="toggleMenu()"> -->
        </div>
        <!-- <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0"> -->
        <img class="logo" src="<?php echo $folder_path;?>/images/new/logo.svg" style="width: 85; height: 50px;" alt="">
        <!-- </a> -->
        <div style="display: flex; gap: 5px; align-items: center;">
            <img src="<?php echo $folder_path;?>/images/new/searchBox.png" style="height: 24px;" alt="">
            <div style="font-weight: 500; font-size: 12px;">
                Śledź
                <br>
                paczkę
            </div>
        </div>
    </div>
</header>

<div class="side-menu-new-parent">
    <ul class="side-menu-new" style="left: -80vw;">
        <div style="display: flex; align-items: center; height: 65px;  border-bottom: 1px solid #dbd8d8;">
            <button style="padding: 10px;">
                <img src="<?php echo $folder_path;?>/images/new/search.png" style="height: 30px;" alt="">
                <!-- <span style="display: flex;"> -->
            </button>
            <input type="text" style="padding: 15px; " placeholder="Szukaj w InPost">
            <!-- </span> -->
        </div>
        <li class="side-menu-item">
            <div>
                Particulares
            </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
        </li>
        <ul class="side-menu-sub-menu">
            <li>Tus envíos</li>
            <li>Hacer un envío</li>
            <li class="side-menu-item">
                <div>
                    Seguimiento de envíos
                </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
            </li>
            <ul class="side-menu-sub-menu">
                <li>Seguimiento</li>
                <li>Alertas</li>
            </ul>
            <li>Servicios nacionales</li>
            <li>Servicios internacionales</li>
            <li>Servicios con descuento</li>
            <li class="side-menu-item">
                <div>
                    Promociones
                </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
            </li>
            <ul class="side-menu-sub-menu">
                <li>MRW Pack</li>
            </ul>
            <li>Quiero ser cliente</li>
        </ul>
        <li class="side-menu-item">
            <div>
                Empresas
            </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
        </li>
        <ul class="side-menu-sub-menu">
            <li>Hazte MRW Point</li>
            <li>Servicios nacionales</li>
            <li>Servicios internacionales</li>
            <li class="side-menu-item">
                <div>
                    Burofax
                </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
            </li>
            <ul class="side-menu-sub-menu">
                <li>¿Cómo funciona?</li>
                <li>Ser cliente</li>
                <li>Acceso cliente abonado</li>
                <li>Modalidades</li>
                <li>Ventajas</li>
                <li>Seguimiento de envío</li>
                <li>Verificación de documentos</li>
            </ul>
            <li>Logística Digital</li>
            <li>Solicitud de propuesta comercial</li>
            <li class="side-menu-item">
                <div>
                    e-Commerce
                </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
            </li>
            <ul class="side-menu-sub-menu">
                <li>Servicio e-Commerce</li>
                <li>MRW Devoluciones</li>
                <li>Integración</li>
            </ul>
            <li>Soluciones logísticas</li>
            <li>Soluciones sectoriales</li>
            <li>Servicios con descuento</li>
            <li>Embalajes</li>
            <li>Prestaciones complementarias</li>
        </ul>
        <li class="side-menu-item">
            <div>
                Responsabilidad Social
            </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
        </li>
        <ul class="side-menu-sub-menu">
            <li>Nuestra RSC</li>
            <li class="side-menu-item">
                <div>
                    MRW Solidario
                </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
            </li>
            <ul class="side-menu-sub-menu">
                <li>Envíos solidarios</li>
                <li>Personas con discapacidad</li>
                <li>Estudiantes</li>
                <li>Familias numerosas</li>
                <li>Personas en paro</li>
                <li>Personas mayores</li>
                <li>Estudantes e professores deslocados no estrangeiro</li>
            </ul>
        </ul>
        <li class="side-menu-item">
            <div>
                Actualidad
            </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
        </li>
        <ul class="side-menu-sub-menu">
            <li>Noticias</li>
            <li>Blog </li>
        </ul>
        <li class="side-menu-item">
            <div>
                Sobre MRW
            </div><img src="<?php echo $folder_path;?>/images/new/downArrow.png" style="height: 15px; float: right;" alt="">
        </li>
        <ul class="side-menu-sub-menu">
            <li class="side-menu-item">Quiénes somos</li>
            <ul class="side-menu-sub-menu">
                <li>Grupo MRW</li>
                <li>Política de Sostenibilidad</li>
                <li>Política de Excelencia</li>
                <li>Política de Igualdad</li>
                <li>Política de Seguridad</li>
                <li>Convenios</li>
                <li>Administraciones públicas</li>
                <li>Galería corporativa</li>
                <li>Vídeos corporativos</li>
            </ul>
            <li class="side-menu-item">Nuestras oficinas</li>
            <ul class="side-menu-sub-menu">
                <li>Localizar oficina</li>
                <li>Andorra</li>
                <li>España</li>
                <li>Gibraltar</li>
                <li>Portugal</li>
                <li>Oficinas centrales</li>
                <li>Oficinas horarios ampliados</li>
                <li>Festividades</li>
            </ul>
            <li>Trabaja con nosotros</li>
            <li>Contacta con nosotros </li>
        </ul>

    </ul>
</div>

<div style=" margin-top: 50px;"></div>

<script>
    function toggleMenu() {
        const headder = document.getElementsByClassName("header")[0]
        const bodyContainer = document.getElementsByClassName("c_container")[0]
        const side_menu_new = document.getElementsByClassName("side-menu-new")[0]
        const header_ham = document.getElementById("header-ham")
        const header_cross = document.getElementById("header-cross")
        const c_overlay = document.getElementById("c_overlay")
        const bodyPos = bodyContainer.style.position;
        if (bodyPos === "static") {
            bodyContainer.style.position = "absolute"
        }

        bodyContainer.style.left = bodyContainer.style.left === "80vw" ? "0px" : "80vw"
        side_menu_new.style.left = side_menu_new.style.left === "-80vw" ? "0px" : "-80vw"
        headder.style.left = headder.style.left === "80vw" ? "0px" : "80vw"

        header_ham.style.display = header_ham.style.display === "block" ? "none" : "block";
        header_cross.style.display = header_cross.style.display === "block" ? "none" : "block";
        c_overlay.classList.toggle("c_overlay")
        if (bodyPos === "absolute") {
            setTimeout(() => {
                bodyContainer.style.position = "static"
            }, 500);
        }
    }

    var acc = document.getElementsByClassName("side-menu-item");
    var i;

    for (i = 0; i < acc.length; i++) {
        console.log(acc[i]);
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            console.log("child", panel.style.display);
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

<body style="position: relative;">
    <style>
        .c_container {
            transition: left 0.5s;
        }

        .c_overlay {
            position: absolute;
            height: 100vh !important;
            width: 100vw !important;
            background-color: #000000;
            opacity: 0.7 !important;
            transition: all 0.5s;
        }
    </style>
    <div class="c_container" style="position: static; left:0px">