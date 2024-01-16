<style>
    .footer-wrapper {
        background: #f3f3f3;
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

    .icons img {
        height: 30px;
    }

    .icons img svg {
        fill: white !important;
    }
</style>


<footer style="display: flex; gap: 10px; background-color: #f3f3f3; color: black; padding: 20px">
    <strong style="font-weight: 900;">Envíos</strong>
    <div>Śledzenie przesyłek</div>
    <div>Zlokalizuj biuro</div>
    <div>Umów dostawę</div>
    <div>Pakowanie</div>
    <div>Usługi</div>
    <div>Dopłata za paliwo</div>
    <div>Ogólne warunki usługi</div>
    <br> <br> <br>

    <strong style="font-weight: 900;">Osoby prywatne</strong>
    <div>Twoje przesyłki</div>
    <div>Wyślij paczkę</div>
    <div>Usługi krajowe</div>
    <div>Usługi międzynarodowe</div>
    <div>MRW Pack</div>
    <br> <br> <br>

    <strong style="font-weight: 900;">Firmy</strong>
    <div>Przesyłki dla Twojej firmy</div>
    <div>Zostań punktem MRW</div>
    <div>Usługi krajowe</div>
    <div>Usługi międzynarodowe</div>
    <div>Faks pocztowy</div>
    <div>Logistyka cyfrowa</div>
    <div>e-Commerce</div>
    <div>Rozwiązania logistyczne</div>
    <div>Rozwiązania sektorowe</div>

    <br> <br> <br>

    <strong style="font-weight: 900;">Odpowiedzialność Społeczna</strong>
    Nasza działalność z zakresu CSR
    Usługi ze zniżką
    <br> <br> <br>

    <strong style="font-weight: 900;">Aktualności</strong>
    Blog
    Aktualności


    <div class="icons" style="display: flex; gap: 20px; display: flex; align-items: end; margin-top: 30px;">
        <img src="<?php echo $folder_path;?>/assets/images/socials/facebook-svgrepo-com.svg" alt="">
        <img src="<?php echo $folder_path;?>/assets/images/socials/x.svg" alt="">
        <img src="<?php echo $folder_path;?>/assets/images/socials/youtube-logo-fill-svgrepo-com.svg" alt="">
        <img src="<?php echo $folder_path;?>/assets/images/socials/linkedin-logo-svgrepo-com.svg" alt="">
        <img src="<?php echo $folder_path;?>/assets/images/socials/instagram-logo-facebook-2-svgrepo-com.svg" alt="">
    </div>

    <div style="font-weight: 900; margin-top: 20px;">Skontaktuj się z nami</div>
    <div style="font-weight: 900;">Kim jesteśmy</div>
    <div style="font-weight: 900;">Nasze biura</div>
    <div style="font-weight: 900;">Pracuj z nami</div>

    <div style="font-weight: 900; margin-top: 20px;">Obsługa klienta: @mrw_clientes</div>

    <div style="margin-top: 20px;">
        <span style="margin: 10px 20px; text-wrap: nowrap;">Prawa autorskie © MRW 2023</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">Dostępność</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">Polityka prywatności i ochrona danych</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">Informacje prawne</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">Polityka plików cookie</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">Informacje o oszustwach</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">Rozstrzyganie sporów w UE</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">Mapa strony</span>
        <span style="margin: 10px 20px; text-wrap: nowrap;">W3C-WAI</span>
        <li id="gesPymeFooter" style="display: inline-block;">
            <a title="" href="<?php echo $folder_path;?>/img/Logo_ProyectoG3-GesPyME.png" target="_blank">
                <img src="<?php echo $folder_path;?>/img/Logo_Ministerio.png" alt="">
            </a>
        </li>
    </div>

</footer>


<script>
    function toggleMenu() {
        const headder = document.getElementsByClassName("header")[0]
        const bodyContainer = document.getElementsByClassName("c_container")[0]
        const side_menu_new = document.getElementsByClassName("side-menu-new")[0]
        const header_ham = document.getElementById("header-ham")
        const header_cross = document.getElementById("header-cross")
        const c_overlay = document.getElementById("c_overlay")
        const bodyPos = bodyContainer.style.position;
        if (bodyPos === "static") {
            bodyContainer.style.position = "absolute"
        } else {
            setTimeout(() => {
                bodyContainer.style.position = "static"
            }, 500);
        }

        bodyContainer.style.left = bodyContainer.style.left === "80vw" ? "0px" : "80vw"
        side_menu_new.style.left = side_menu_new.style.left === "-80vw" ? "0px" : "-80vw"
        headder.style.left = headder.style.left === "80vw" ? "0px" : "80vw"

        header_ham.style.display = header_ham.style.display === "block" ? "none" : "block";
        header_cross.style.display = header_cross.style.display === "block" ? "none" : "block";
        c_overlay.classList.toggle("c_overlay")

    }

    var acc = document.getElementsByClassName("side-menu-item");
    var i;

    for (i = 0; i < acc.length; i++) {
        console.log(acc[i]);
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</div>
</body>