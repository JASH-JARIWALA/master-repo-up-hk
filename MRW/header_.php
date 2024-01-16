<html lang="tr" xmlns="http://www.w3.org/1999/xhtml" class=" webkit safari safari13 mobile iphone js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="MRW - Particulares">
    <meta name="description" content="MRW compañía líder en transporte urgente de paquetes hasta 80 kg, desde Andorra, España, Gibraltar, Portugal y Venezuela, en envíos nacionales e internacionales">
    <meta name="DC.Description" content="MRW compañía líder en transporte urgente de paquetes hasta 80 kg, desde Andorra, España, Gibraltar, Portugal y Venezuela, en envíos nacionales e internacionales">
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

    <title>MRW - Particulares</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $folder_path;?>/assets/images/favicon/favicon.png">
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
        background: #19133b;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        z-index: 1000;
    }

    .header .logo {
        width: 122px;
        height: 26px;
    }

    .header .menu-icon {
        height: 34px;
        width: 44px;
        padding: 7px;
        border: 1px solid gray;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header .menu-icon:hover {
        background-color: grey;
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
    }

    .side-menu li {
        display: flex;
        gap: 5px;
        padding: 10px 0px;
    }

    .side-menu-item {
        display: flex;
        align-items: center;
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
        background-color: #19133b;
        color: white;
        position: fixed;
        width: 80vw;
        transition: all 0.5s;
        height: 100vh;
    }

    .side-menu-new-parent ul li {
        padding: 10px;
        color: white;
    }

    .side-menu-new-parent ul:hover li:hover {
        color: #FE4438;
    }
</style>
<header id="header" class="header fixed-top d-flex align-items-center p-4">
    <div class="flex align-items-center justify-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <img class="logo" src="<?php echo $folder_path;?>/images/logo-mrw.png" alt="">
        </a>
        <div class="flex gap-4 align-items-center">
            <!-- <img class="search_icon" src="assets/images/magnifier.svg" alt=""> -->
            <div class="menu-icon" onclick="toggleMenu()">

                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="16" viewBox="0 0 23 16">
                    <g stroke="#fff" fill="#fff" fill-rule="evenodd" stroke="#414042" stroke-linecap="round" stroke-width="1.5">
                        <path d="M1.429.75h20M1.429 7.75h20M1.429 14.75h20" />
                    </g>
                </svg>
            </div>
            <!-- <img src="assets/images/burger-menu.svg" class="menu-icon" alt="" onclick="toggleMenu()"> -->
        </div>
    </div>
</header>

<div class="side-menu-new-parent">
    <ul class="side-menu-new" style="right: -80vw;">
        <li class="side-menu-item">
            Particulares
        </li>
        <ul class="side-menu-sub-menu">
            <li>Tus envíos</li>
            <li>Hacer un envío</li>
            <li class="side-menu-item">Seguimiento de envíos</li>
            <ul class="side-menu-sub-menu">
                <li>Seguimiento</li>
                <li>Alertas</li>
            </ul>
            <li>Servicios nacionales</li>
            <li>Servicios internacionales</li>
            <li>Servicios con descuento</li>
            <li>Promociones</li>
            <ul class="side-menu-sub-menu">
                <li>MRW Pack</li>
            </ul>
            <li>Quiero ser cliente</li>
        </ul>
        <li class="side-menu-item">Empresas</li>
        <ul class="side-menu-sub-menu">
            <li>Hazte MRW Point</li>
            <li>Servicios nacionales</li>
            <li>Servicios internacionales</li>
            <li class="side-menu-item">Burofax</li>
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
            <li class="side-menu-item">e-Commerce</li>
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
        <li class="side-menu-item">Responsabilidad Social</li>
        <ul class="side-menu-sub-menu">
            <li>Nuestra RSC</li>
            <li class="side-menu-item">MRW Solidario</li>
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
        <li class="side-menu-item">Actualidad</li>
        <ul class="side-menu-sub-menu">
            <li>Noticias</li>
            <li>Blog </li>
        </ul>
        <li class="side-menu-item">Sobre MRW</li>
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


<!-- 
<div style="position: relative;">
    <ul id="side-menu" class="side-menu" style="">
        <li class="side-menu-item">
            <div>
                Conócenos
            </div>
            <img src="assets/icons/down-arrow-svgrepo-com.svg" style="height: 10px;" alt="">
        </li>
        <ul class="side-menu-sub-menu">
            <li>
                <div class="icon">+</div>
                <div>Nuestro Propósito</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Historia</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Únete a Estafeta</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Responsabilidad Social</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Identidad Estafeta</div>
            </li>
        </ul>

        <li class="side-menu-item">
            <div>
                Servicios
            </div>
            <img src="assets/icons/down-arrow-svgrepo-com.svg" style="height: 10px;" alt="">
        </li>
        <ul class="side-menu-sub-menu">
            <li class="dropdown-header" style="font-size: 20px; ">Mensajería y Paquetería</li>


            <li class=""><strong>Nacional</strong></li>
            <li>
                <div class="icon">+</div>
                <div>Horarios garantizados</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Día siguiente</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Dos días</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Terrestre</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Multiple</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Cuenta Concentradora</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Servicios Complementarios</div>
            </li>
        </ul>

        <li class="side-menu-item">
            <div>
                Promociones
            </div>

        </li>
        <ul class="side-menu-sub-menu">
        </ul>

        <li class="side-menu-item">
            <div>
                Atención al Cliente
            </div>
            <img src="assets/icons/down-arrow-svgrepo-com.svg" style="height: 10px;" alt="">
        </li>
        <ul class="side-menu-sub-menu">

            <li>
                <div class="icon">+</div>
                <div>¿Cómo realizar un envío?</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>¿Cómo adquirir el Seguro Opcional?</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Artículos prohibidos</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Manual de empaque</div>
            </li>
            <li>
                <div class="icon">+</div>
                <div>Glosario de términos </div>
            </li>
        </ul>

        <li class="side-menu-item">
            <div>
                Blog
            </div>

        </li>
        <ul class="side-menu-sub-menu">
        </ul>

        <li class="side-menu-item">
            <div>
                Mi Estafeta
            </div>

        </li>
        <ul class="side-menu-sub-menu">
        </ul>

        <li class="side-menu-item">
            <div>
                Contacto
            </div>

        </li>
        <ul class="side-menu-sub-menu">
        </ul>
    </ul>
</div> -->


<script>
    function toggleMenu() {
        const menu = document.getElementsByClassName("side-menu-new")[0]
        // menu.hidden = !menu.hidden
        menu.style.right = menu.style.right === "-80vw" ? "0px" : "-80vw"
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