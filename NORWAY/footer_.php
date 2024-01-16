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

    .icons img {
        height: 30px;
    }

    .icons img svg {
        fill: white !important;
    }
</style>
<footer style="display: flex; gap: 10px; flex-direction: column; background-color: #4a1011; color: white; padding: 20px">
    <button class="w-full my-[5px] p-[10px] border border-[#ff8a5a]">
        For bedrifter
    </button>
    <button class="w-full my-[5px] p-[10px] border border-[#ff8a5a]">
        English Site
    </button>

    <ul class="flex gap-[10px] flex-col mt-[40px]">


        <li class="side-menu-item m-0 text-[#fff] font-medium text-[15px] border-b-[#ff8a5a] my-[5px]">
            <div>
                Søk etter
            </div>
            <div class='h-[15px] aspect-square relative'>
                <div class="div-2 absolute left-[50%] h-full bg-white w-[2px]"></div>
                <div class="absolute left-[50%] top-[0%]  h-full bg-white w-[2px] rotate-90"></div>
            </div>
        </li>
        <ul class="side-menu-sub-menu " style="height: 0px; color: #fff !important;">
            <li style="color: #fff !important; margin-top: 10px;">Åpningstider</li>
            <li style="color: #fff !important; margin-top: 10px;">Pakkebokser</li>
            <li style="color: #fff !important; margin-top: 10px;">Innleveringspostkasser</li>
            <li style="color: #fff !important; margin-top: 10px;">Adresser, postnummer og personer</li>
        </ul>
        <li class="side-menu-item m-0 text-[#fff] font-medium text-[15px] border-b-[#ff8a5a] my-[5px]">
            <div>
                Om oss
            </div>
            <div class='h-[15px] aspect-square relative'>
                <div class="div-2 absolute left-[50%] h-full bg-white w-[2px]"></div>
                <div class="absolute left-[50%] top-[0%]  h-full bg-white w-[2px] rotate-90"></div>
            </div>
        </li>
        <ul class="side-menu-sub-menu " style="height: 0px; color: #fff !important;">
            <li style="color: #fff !important; margin-top: 10px;">Om Posten Bring</li>
            <li style="color: #fff !important; margin-top: 10px;">Jobb i Posten</li>
            <li style="color: #fff !important; margin-top: 10px;">Kontakt oss</li>
        </ul>
        <li class="side-menu-item m-0 text-[#ff5f0] font-medium text-[15px] border-b-[#ff8a5a] my-[5px]">
            <div>
                Nyttig
            </div>
            <div class='h-[15px] aspect-square relative'>
                <div class="div-2 absolute left-[50%] h-full bg-white w-[2px]"></div>
                <div class="absolute left-[50%] top-[0%]  h-full bg-white w-[2px] rotate-90"></div>
            </div>
        </li>
        <ul class="side-menu-sub-menu " style="height: 0px; color: #fff !important;">
            <li style="color: #fff !important; margin-top: 10px;">Falske SMS og e-post</li>
            <li style="color: #fff !important; margin-top: 10px;">Priser</li>
            <li style="color: #fff !important; margin-top: 10px;">Våre vilkår</li>
            <li style="color: #fff !important; margin-top: 10px;">Nettmagasin: Enklere hverdag</li>
        </ul>
    </ul>

    <div>
        <svg class="w-[150px] h-[75px]" aria-labelledby="Logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href="#logo-posten"></use>
        </svg>
    </div>

    <div class="w-full bg-[#980000] h-[1px] my-[10px]"></div>
    <div class="my-[20px]">
        ©Posten Bring
    </div>

    <div class="flex gap-[20px] my-[20px]">
        <div class="border-b border-b-[#980000]">Personvern og sikkerhet</div>
        <div class="border-b border-b-[#980000]">Cookies</div>
    </div>

</footer>

<script>
    function toggleMenu() {
        console.log("toggle");
        const menu = document.getElementsByClassName("side-menu-new")[0]
        const sm_hb = document.getElementById("sm-hb").classList.toggle("hidden")
        const sm_close = document.getElementById("sm-close").classList.toggle("hidden")
        const header = document.getElementById("header").classList.toggle("fixed")
        // menu.hidden = !menu.hidden
        menu.style.height = menu.style.height === "0px" ? "100vh" : "0px"
    }

    var acc = document.getElementsByClassName("side-menu-item");
    var i;

    for (i = 0; i < acc.length; i++) {
        console.log(acc[i]);
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.height === "0px") {
                panel.style.height = panel.scrollHeight + "px";
            } else {
                panel.style.height = "0px";
            }
        });
    }
</script>