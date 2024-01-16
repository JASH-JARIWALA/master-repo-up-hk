<style>
    .footer-wrapper {
        background: #cac4be;
        padding: 3rem 1rem 1rem 1rem;
    }

    footer.page-footer {
        max-width: 1200px;
        width: auto;
        padding-right: 2px;
        padding-left: 2px;
        margin-right: 10px;
        margin-left: 10px;
    }

    footer.container>.row-fix-margin-auto {
        padding: 29px 12px 20px 12px;
    }

    .mobile-footer {
        padding-bottom: 90px !important;
    }

    .d-block {
        display: block !important;
    }

    .no-padding {
        padding: 0 !important;
    }

    .partner-logo {
        object-fit: contain;
    }

    .footer-link {
        display: flex;
        flex-wrap: wrap;
    }

    .footer-link li {
        margin-right: .5rem;
        float: left;
        padding-left: 0 !important;
        margin-top: .25rem;
        border-right: 1px solid #414042;
        list-style: none;
        display: inline-block;
        padding-right: 7px;
    }

    .footer-items {
        padding: 20px;
        background-color: #c00d0d;
        display: flex;
        flex-direction: column;
    }

    .footer-items li {
        display: flex;
        justify-content: center;
        padding: 10px;
        border-bottom: 2px solid white;

    }

    .footer-items li a {
        color: white;
        font-size: 12px;
    }

    .footer-details {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        padding: 10px;
        color: white;
        background: linear-gradient(45deg, rgba(132, 146, 156, 1) 45%, rgba(217, 228, 237, 1) 100%)
    }

    .telcall {
        font-size: 16px;
        font-weight: bold;
    }
</style>

<footer style="background: #232529; padding-bottom: 40px; color: white;">
    <div style="padding: 40px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid white">
        <img src="<?php echo $folder_path;?>/assets/images/SLOVAK_Logo_Color_White.svg" style="width: 130px; height: 70px" alt="">
        <div onclick="topFunction()">
            <svg id="scroll" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 63 63" style="right: 10px;">
                <g id="Group_235" data-name="Group 235" transform="translate(-1536 -3883)">
                    <g class="scroll-circle" id="Ellipse_25" data-name="Ellipse 25" transform="translate(1536 3883)" fill="none" stroke="#fff" stroke-width="1">
                        <circle cx="31.5" cy="31.5" r="31.5" stroke="none"></circle>
                        <circle cx="31.5" cy="31.5" r="31" fill="none"></circle>
                    </g>
                    <g class="scroll-arrow" id="Group_234" data-name="Group 234" transform="translate(1560 4035.992) rotate(-90)">
                        <g id="Group_4" data-name="Group 4" transform="translate(117.742 0)">
                            <path id="Path_3" data-name="Path 3" d="M125.084,7.088,118.661.17a.511.511,0,0,0-.761,0,.615.615,0,0,0,0,.822L123.941,7.5,117.9,14.007a.615.615,0,0,0,0,.822.511.511,0,0,0,.761,0l6.423-6.918a.614.614,0,0,0,0-.823Z" transform="translate(-117.742 0)" fill="#fff"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <div style="margin: 40px 0px;text-align: center;">
        <h3>Odkazy</h3>

        <div style="margin-top: 30px; display: grid; grid-template-columns: auto auto; font-size: 15px;">
            <div>O spoločnosti</div>
            <div>Kariéra</div>
            <div>Prepravné služby</div>
            <div>Ochrana osobných </div>
            <div>Blog</div>
            <div>údajov</div>
        </div>
    </div>

    <h3 style="margin: 40px 0px; display: flex; justify-content:center">Kontakt</h3>
    <div style="text-align: center; padding: 0px 20px; font-size: 15px;">
        Pre rýchlejšie vybavenie požiadaviek nás kontaktujte elektronicky alebo telefonicky na linke
    </div>
    <div style="display: flex; justify-content:center; margin: 30px">

        <button style="padding: 10px 20px; color: white; background: #F58220; font-weight: bold; border-radius: 5px;">Kontaktujte nás</button>
    </div>
    <div style="margin: 40px 20px; text-align: center; ">
        <h3>Vypočítajte si cenu dopravy</h3>
        <br>
        Kalkulácia prepravných nákladov pre vaše vnútroštátne a medzinárodné zásielky.


    </div>
    <div style="display: flex; justify-content:center; margin: 30px">

        <button style="padding: 10px 20px; color: white; background: #F58220; font-weight: bold; border-radius: 5px;">Vypočítajte si cenu dopravy</button>
    </div>

    <div style="margin-top: 60px; color: #70706D; text-align: center; font-size: 15px;">
        Obchodné podmienky
        <br>
        2013 – 2023 © Slovak Parcel service
    </div>
    <div style="margin: 20px 0px; display: flex; justify-content: center; gap: 20px">
        <img src="<?php echo $folder_path;?>/assets/icons/facebook.svg" style="width:40px" alt="">
        <img src="<?php echo $folder_path;?>/assets/icons/instagram.svg" style="width:40px" alt="">
        <img src="<?php echo $folder_path;?>/assets/icons/tiktok.svg" style="width:40px" alt="">
        <img src="<?php echo $folder_path;?>/assets/icons/youtube.svg" style="width:40px" alt="">
    </div>
</footer>

<script>
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<!-- <footer style="padding: 0px;">
    <ul class="footer-items">
        <li>
            <a href="/Privacidad">Aviso de privacidad</a>
        </li>
        <li>
            <a href="/Noticias">Sala de Prensa</a>
        </li>
        <li>
            <a href="https://uneteaestafeta.com/">Únete a Estafeta</a>
        </li>
        <li>
            <a href="https://mi.estafeta.com/" rel="noopener noreferrer" target="_blank">Mi Estafeta</a>
        </li>
    </ul>
    <div class="footer-details">
        <img src="assets/icons/logotipo-estafeta-bl.svg" style="width: 238px;" alt="">
        <p class="telcall">Llámanos: 55 52708300 ó 800 (3782338)
        </p>
        <img src="assets/icons/abc.png" style="height: 30px; width: 30px;" alt="">
        <h4>Descarga nuestra aplicación</h4>
        <img src="assets/icons/google-play.svg" style="width: 310px;" alt="">
        <img src="assets/icons/app-store.svg" style="width: 310px;" alt="">
        <img src="assets/icons/huaweiconFn.png" style="width: 310px;" alt="">
    </div>
</footer> -->
<!-- <div class="footer-wrapper">
    <footer class="page-footer container">
        <div class="pb-20 d-block d-md-none gold-bg-color">
            <div class="col-12 no-padding">
                <div>
                    <div class="flex justify-between mb-4">
                        <p class="small-text mb-2 footer-link-toggle">
                            <a href="https://www.dpd.com/cz/cs/poslat-balik/" class="grey-color text-md">
                                Poslat balík </a>
                        </p>
                        <i class="fa-solid fa-plus"></i>
                        <div class="footer-link-content hidden">
                            <p class="small-text mb-2 font-light">
                                <a href="?page_id=20#registrovany_zakaznik" class="grey-color text-md">Registrovaný
                                    zákazník</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="?page_id=20#neregistrovany_zakaznik" class="grey-color text-md">Neregistrovaný
                                    zákazník</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/poslat-balik/mezinarodni-preprava/"
                                    class="grey-color text-md">Mezinárodní přeprava</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/poslat-balik/pro-eshopy/"
                                    class="grey-color text-md">Pro
                                    e-shopy</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/poslat-balik/vraceni-zasilky/"
                                    class="grey-color text-md">Vrácení
                                    zásilky</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <p class="small-text mb-2 footer-link-toggle">
                            <a href="https://www.dpd.com/cz/cs/cekam-balik/" class="grey-color text-md">
                                Čekám balík </a>
                        </p>
                        <i class="fa-solid fa-plus"></i>
                        <div class="footer-link-content hidden">
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/mydpd-my-way/" class="grey-color text-md">myDPD -
                                    Portál pro
                                    příjemce</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/"
                                    class="grey-color text-md">Výdejní
                                    místa Pickup</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/cekam-balik/boxy/"
                                    class="grey-color text-md">Samoobslužné
                                    boxy</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <p class="small-text mb-2 footer-link-toggle">
                            <a href="https://www.dpd.com/cz/cs/mydpd-my-way/" class="grey-color text-md">
                                myDPD </a>
                        </p>
                    </div>
                    <div class="flex justify-between mb-4">
                        <p class="small-text mb-2 footer-link-toggle">
                            <a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/"
                                class="grey-color text-md">
                                Společenská odpovědnost </a>
                        </p>
                        <i class="fa-solid fa-plus"></i>
                        <div class="footer-link-content hidden">
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/zijeme-pro-nasi-spolecnost/"
                                    class="grey-color text-md">Žijeme pro naší společnost</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/uhlikove-neutralni-preprava/"
                                    class="grey-color text-md">Emise CO2 snižujeme na nulu</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/dorucujeme-s-citem/"
                                    class="grey-color text-md">Ve městech doručujeme s citem</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/prichazime-s-inovacemi/"
                                    class="grey-color text-md">Přicházíme s inovacemi</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/vyhledavany-zamestnavatel/"
                                    class="grey-color text-md">Vyhledávaný zaměstnavatel</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/monitorovani-kvality-ovzdusi/"
                                    class="grey-color text-md">Program monitorování kvality ovzduší</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <p class="small-text mb-2 footer-link-toggle">
                            <a href="#" class="grey-color text-md">
                                Zákaznické aplikace </a>
                        </p>
                        <i class="fa-solid fa-plus"></i>
                        <div class="footer-link-content hidden">
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/dpdshipping/" class="grey-color text-md">DPD
                                    Shipping</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/dpd-easy/" class="grey-color text-md">DPD Easy</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <p class="small-text mb-2 footer-link-toggle">
                            <a href="https://www.dpd.com/cz/cs/o-nas/" class="grey-color text-md">
                                O nás </a>
                        </p>
                        <i class="fa-solid fa-plus"></i>
                        <div class="footer-link-content hidden">
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/pro-media/" class="grey-color text-md">Pro
                                    média</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/o-nas/nase-sluzby/" class="grey-color text-md">Naše
                                    služby</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://kariera.dpd.cz" class="grey-color text-md">Kariéra</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/e-shopper-barometer-2022/"
                                    class="grey-color text-md">Výzkum
                                    E-shopper Barometer 2022</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/kontakt/" class="grey-color text-md">Kontakt</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <p class="small-text mb-2 footer-link-toggle">
                            <a href="https://www.dpd.com/cz/cs/podpora/" class="grey-color text-md">
                                Podpora </a>
                        </p>
                        <i class="fa-solid fa-plus"></i>
                        <div class="footer-link-content hidden">
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/podpora/nejcastejsi-dotazy/"
                                    class="grey-color text-md">Nejčastější dotazy</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/podpora/aktualni-informace/"
                                    class="grey-color text-md">Aktuální
                                    informace</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/podpora/podminky-prepravy/"
                                    class="grey-color text-md">Podmínky
                                    přepravy</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/podpora/aplikace-a-nastroje/"
                                    class="grey-color text-md">Aplikace
                                    a nástroje</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/podpora/reklamace/"
                                    class="grey-color text-md">Reklamace</a>
                            </p>
                            <p class="small-text mb-2 font-light">
                                <a href="https://www.dpd.com/cz/cs/podpora/dokumenty-ke-stazeni/"
                                    class="grey-color text-md">Dokumenty ke stažení</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 no-padding">
                <div id="dpd_social_accounts_wg-3" class="widget dpd_social_accounts_wg">
                    <div class="widget__inner dpd_social_accounts_wg__inner widget-wrap">
                        <div class="mb-3">
                            <p class="text-md mb-2">Sledujte nás!</p>
                            <p class="small-text mb-2 font-light flex gap-3">
                                <a href="https://www.linkedin.com/company/dpd-cz/?originalSubdomain=cz"
                                    class="social-link primary-color mr-3" target="_blank"><img class="mb-1"
                                        data-cfsrc="assets/images/social" width="22" height="22"
                                        src="assets/images/socials/linkedIn.png">
                                </a>
                                <a href="https://www.facebook.com/dpd.cz" class="social-link primary-color mr-3"
                                    target="_blank"><img class="mb-1" data-cfsrc="assets/images/socials/facebook.png"
                                        width="22" height="22" src="assets/images/socials/facebook.png">
                                </a>
                                <a href="https://twitter.com/dpd_cz" class="social-link primary-color mr-3"
                                    target="_blank"><img class="mb-1" src="assets/images/socials/x.svg" width="22"
                                        height="22"></a>
                                <a href="https://www.instagram.com/dpd.cz/" class="social-link primary-color mr-3"
                                    target="_blank"><img class="mb-1" data-cfsrc="assets/images/socials/insta.png"
                                        width="22" height="22" src="assets/images/socials/insta.png">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="custom_html-2" class="widget_text widget widget_custom_html mb-4">
                    <div class="widget_text widget__inner widget_custom_html__inner widget-wrap">
                        <div class="textwidget custom-html-widget"><a href="#"
                                onclick="tC.privacyCenter.showPrivacyCenter();return false" class="text-sm">Cookies</a>
                        </div>
                    </div>
                </div>
                <div id="custom_html-6" class="widget_text widget widget_custom_html">
                    <div class="widget_text widget__inner widget_custom_html__inner widget-wrap">
                        <div class="textwidget custom-html-widget" style="border-bottom: 2px solid #737373">
                            <p class="flex gap-2 pb-4">
                                <br>
                                <img data-cfsrc="assets/images/partners/p1.png" class="partner-logo" alt="SDG"
                                    src="assets/images/partners/p1.png">
                                <img data-cfsrc="assets/images/partners/p2.png"
                                    alt="Ecovadis" width="100px" class="partner-logo"
                                    src="assets/images/partners/p2.png">
                                <img data-cfsrc="assets/images/partners/p3.png"
                                    class="partner-logo" alt="ESG" width="100px"
                                    src="assets/images/partners/p3.png">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer-clear col-12 bold-bg-color mb-3"></div>
            </div>
            <div class="col-12 no-padding">
                <div class="vertical-align">
                    <div class="flex items-center gap-4">
                        <img data-cfsrc="assets/images/partners/p4.png"
                            alt="" class="w-36"
                            src="assets/images/partners/p4.png"><span
                            class="text-md">&nbsp;©
                            2023 DPD</span>
                    </div>
                    <div class="col-12 footer-menu">
                        <nav class="nav d-block pt-1 small-text font-light footer-nav">
                            <ul class="footer-link">
                                <li>
                                    <a href="https://www.dpd.com/cz/cs/etika-whistleblowing/"
                                        class="grey-color text-md">Etika a
                                        whistleblowing</a>
                                </li>
                                <li>
                                    <a href="https://www.dpd.com/cz/cs/bezpecnostni-informace/"
                                        class="grey-color text-md">Bezpečnostní informace</a>
                                </li>
                                <li>
                                    <a href="https://www.dpd.com/cz/cs/vseobecne-obchodni-podminky/"
                                        class="grey-color text-md">Všeobecné obchodní podmínky</a>
                                </li>
                                <li>
                                    <a href="https://www.dpd.com/cz/cs/ochrana-osobnich-udaju/"
                                        class="grey-color text-md">Ochrana
                                        osobních údajů</a>
                                </li>
                                <li>
                                    <a href="https://www.dpd.com/cz/cs/kontakt/" class="grey-color text-md">Kontakt</a>
                                </li>
                                <li>
                                    <a href="https://www.geopost.com" class="grey-color text-md">Geopost</a>
                                </li>
                            </ul>
                            <p class="language-items text-nowrap block">
                                <select id="footer-language-select"
                                    class="footer-language-select pt-1 small-text bg-transparent text-md grey-color"
                                    name="footer-language-select" onchange="location = this.value;">
                                    <option value="https://www.dpd.com/cz/cs/" selected="">Czech</option>
                                    <option value="https://www.dpd.com/cz/en/">English</option>
                                </select>
                            </p>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div> -->