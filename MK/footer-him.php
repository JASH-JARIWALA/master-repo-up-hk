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
            top: 18px;
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
        
    </div>
    <div class="copywrite">
        <p>© А.Д. Пошта на Северна Македонија 2023</p>
    </div>
</footer>
</section>
<button class="js-scroll-to-top scroll-top icon-to-top"></button>


<!-- Karma, karma, karma, karma, karma chameleon -->

<script src="https://sc10-prod.azureedge.net/static/js/runtime~Chamaeleon.e628f9b1.js?8b4cdef39a1eeba26a6b"></script>
<script src="https://sc10-prod.azureedge.net/static/js/vendor.35e3d303.js?8b4cdef39a1eeba26a6b"></script>
<script src="https://sc10-prod.azureedge.net/static/js/Chamaeleon.efccdf41.js?8b4cdef39a1eeba26a6b"></script>
<script src="https://sc10-prod.azureedge.net/static/js/runtime~Font.bc2f4e75.js?8b4cdef39a1eeba26a6b"></script>
<script src="https://sc10-prod.azureedge.net/static/js/vendor.35e3d303.js?8b4cdef39a1eeba26a6b"></script>
<script src="https://sc10-prod.azureedge.net/static/js/Font.3b11ef5d.js?8b4cdef39a1eeba26a6b"></script>
<!-- o-o-o-o-o-o-o-o -->
</div>
<input type="hidden" value="tr" name="language" id="language">
<input type="hidden" id="googleApiKey" value="https://www.google.com/maps/embed/v1/place?key=AIzaSyDF4SZV-4eOTYKWZmw8Cs4nwfYKWpMl15Q&amp;q=">

<script async="true" type="text/javascript" src="https://www.google-analytics.com/analytics.js"></script>
<script async="true" type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=G-LM7ZJF4DD6&amp;l=dataLayer&amp;cx=c"></script>
<script type="text/javascript" src="<?php echo $folder_path;?>/assets/yurticikargo_a31.js">
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-119024172-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119024172-1');
</script>




</body>

</html>
