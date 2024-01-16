function registrate() {
    $(window).scrollTop(0);
    if ($(".menu-horizontal-amarillo").hasClass("open")) {
        $('.button_menu_mobile').trigger("click");
    }
    hiddenForms();
    $('.registro').show();
    $('.registro-form').show();
    $('#divRegistro').show();
    $(".login_registro").slideDown("slow", function () {
    });
}
function ingresa() {
    $(window).scrollTop(0);
    if ($(".menu-horizontal-amarillo").hasClass("open")) {
        $('.button_menu_mobile').trigger("click");
    }
    hiddenForms();
    $('.login').show();
    $("#divIngreso").show();
    $(".login_registro").slideDown("slow", function () {
    });
}
function cerrar_login_registro() {
    $(".login_registro").slideUp("slow", function () {
    });
}
function recuperar() {
    $(window).scrollTop(0);
    if ($(".menu-horizontal-amarillo").hasClass("open")) {
        $('.button_menu_mobile').trigger("click");
    }
    hiddenForms();
    $('.recovery').show();
    $(".login_registro").slideDown("slow", function () {
    });
    $('.recovery-form').show();
}
async function micuenta() {
    $(window).scrollTop(0);
    if ($(".menu-horizontal-amarillo").hasClass("open")) {
        $('.button_menu_mobile').trigger("click");
    }
    hiddenForms();
    if ($('#stateMicuenta').attr('value') == 'false') {
        DesactivaLinks();
        $('#aMiCuenta').attr('class', 'active');
        await LLamadaMetodosMiCuenta(1, 0);
        let parametrosFacturas = JSON.stringify({ numpagina: 1, orden: 3 });
        LLamadaMetodosMiCuenta(7, parametrosFacturas);
    } else {
        DesactivaLinks();
    }
    $('.account').show();
    $(".login_registro").slideDown("slow", function () {
    });
}
function misdirecciones() {
    $(window).scrollTop(0);
    if ($(".menu-horizontal-amarillo").hasClass("open")) {
        $('.button_menu_mobile').trigger("click");
    }
    hiddenForms();
    $('.addresses').show();
    $(".login_registro").slideDown("slow", function () {
    });
}
function contacto() {
    $(window).scrollTop(0);
    if ($(".menu-horizontal-amarillo").hasClass("open")) {
        $('.button_menu_mobile').trigger("click");
    }
    hiddenForms();
    $('.contact').show();
    $(".login_registro").slideDown("slow", function () {
    });
}
function recoveryPassConfirm() {
    $(window).scrollTop(0);
    if ($(".menu-horizontal-amarillo").hasClass("open")) {
        $('.button_menu_mobile').trigger("click");
    }
    hiddenForms();
    $('.formRecovery').show();
    $(".login_registro").slideDown("slow", function () {
    });
}
function hiddenForms() {
    $('.login').hide();
    $('.registro').hide();
    $('.account').hide();
    $('.addresses').hide();
    $('.recovery').hide();
    $('.contact').hide();
    $('#successRegisterMessage').css('display', 'none');
    $('#ErroresRegistro').css('display', 'none');
    $('#successRecoveryPassMessage').css('display', 'none');
    $('#ErroresRecuperacionPass').css('display', 'none');
}
$(document).ready(function () {

    if (window.location.pathname.split('/')[1] == 'RecuperarClave') {
        recoveryPassConfirm();
    }

    $('#Cabecera_Cabecera_txtSearch').keypress(
        function (e) {
            if (this.value.length > 11) {
                e.preventDefault();
            }
            if (e.which == 13) {
                e.preventDefault();
                if ($('#Cabecera_Cabecera_txtSearch').val() != '') {
                    $('#Cabecera_btnBuscar').click();
                } else {
                    return false;
                }
            }
        });
    $('#ContenidoPagina_Cabecera_txtSearch').keypress(
        function (e) {
            if (this.value.length > 11) {
                e.preventDefault();
            }
            if (e.which == 13) {
                e.preventDefault();
                if ($('#ContenidoPagina_Cabecera_txtSearch').val() != '') {
                    $('#ContenidoPagina_Cabecera_btnBuscar').click();
                } else {
                    return false;
                }
            }
        });
    $('#Cabecera_Cabecera_txtSearch').bind('paste keyup', function (e) {
        let text = document.getElementById('Cabecera_Cabecera_txtSearch').value;
        text = text.replace(/[^\d]/g, '');
        jQuery(this).val(text);
    });
    $('#ContenidoPagina_Cabecera_txtSearch').bind('paste keyup', function (e) {
        let text = document.getElementById('ContenidoPagina_Cabecera_txtSearch').value;
        text = text.replace(/[^\d]/g, '');
        jQuery(this).val(text);
    });
    $("#btnSerPickUp").on("click", function () {
        const element = document.getElementById("ContenidoPagina_cxpForm");
        document.getElementById('ContenidoPagina_branchType').value = "1";
        document.getElementById('ContenidoPagina_cxpForm').style.display = "block";
        $(this).addClass("active");
        $("#btnSerAgente").removeClass("active");
        element.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
    });
    $("#btnSerAgente").on("click", function () {
        const element = document.getElementById("ContenidoPagina_cxpForm");
        document.getElementById('ContenidoPagina_branchType').value = "2";
        document.getElementById('ContenidoPagina_cxpForm').style.display = "block";
        $(this).addClass("active");
        $("#btnSerPickUp").removeClass("active");
        element.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
    });
});
