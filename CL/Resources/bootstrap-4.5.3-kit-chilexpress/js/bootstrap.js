

$( document ).ready(function() {
    $('.collapse').on('shown.bs.collapse', function(){
        $(this).parent().find(".open_item").removeClass("open_item").addClass("close_item");
    }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".close_item").removeClass("close_item").addClass("open_item");
    });
    document.getElementById("cookies-btn").addEventListener("click", () => {
        document.querySelector(".cookies").style.display = "none";
        setCookie("cookie-cxp", true, 7);
    });

    const setCookie = (cName, cValue, expDays) => {
        let date = new Date();
        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
    }

    const getCookie = (cName) => {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie);
        const cArr = cDecoded.split("; ");
        let value;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) value = val.substring(name.length);
        });
        return value;
    }

    const cookieMessage = () => {
        if (!getCookie("cookie-cxp")) document.querySelector(".cookies").style.display = "flex";
    }

    window.addEventListener("load", cookieMessage);
});

$( document ).ready(function() {
    $('.collapse').on('shown.bs.collapse', function(){
        $(this).parent().find(".close_item").removeClass("close_item").addClass("open_item");
    }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".open_item").removeClass("open_item").addClass("close_item");
    });
});



$(function() {



    /*card-button-radio*/
    $('.contenedor-card-button-radio input').change(function(){
        $(this).closest(".contenedor-card-button-radio").find("label").removeClass("active");
        if($(this).is(":checked")){
            $(this).closest("label").addClass("active");
        }
    });

    /*collapse-button*/
    $(".collapse-button").click(function() {
        $(this).closest("tr").toggleClass("table-active");
        $(this).toggleClass("open");
        $("#"+ $(this).attr("for")).toggle();
    });

    /*cross-sites-mobile*/
    $(".selector_mobile .item_mobile.active").click(function() {
        $(".selector_mobile .listado").toggleClass("open");
        $(this).toggleClass("open");
    });




//menu expandible
    //menu expandible - toggle
    $(".collapse-menu-expandible").click(function() {

        if ($('.menu-expandible .label').is(':visible')) {
            $('.menu-expandible').removeClass("w-100");
            $('.menu-expandible').removeClass("min-width");
            $('.menu-expandible .label').hide();
            $('.menu-expandible .sub-category').hide();
            $('.menu-expandible .icon').addClass("simple");
            $('.menu-expandible .item.category-group .category').removeClass("arrow-down");
            $('.menu-expandible .item.category-group .category').removeClass("arrow-up");
            $('.menu-expandible .footer').hide();
        }else{

            $('.menu-expandible .label').show();
            $('.menu-expandible').addClass("w-100");
            $('.menu-expandible').addClass("min-width");
            $('.menu-expandible .icon').removeClass("simple");
            $('.menu-expandible .item.category-group .category').addClass("arrow-down");
            $('.menu-expandible .footer').show();
        }
    });

    //menu expandible -  toggle sub categoria
    $(".category").click(function() {
        if($(this).next().is('.sub-category')) {
            $(this).next().toggle();
            $(this).toggleClass("active");
            $(this).toggleClass("arrow-up");
        }
    });

    //menu expandible - expandir con mouse over
    $(".menu-expandible").hover(function(){
        if ($(".menu-expandible .label").is(':hidden')) {
            $('.menu-expandible .label').show();
            $('.menu-expandible .icon').removeClass("simple");
            $('.menu-expandible').addClass("w-100");
            $('.menu-expandible').addClass("min-width");
            $('.menu-expandible .item.category-group .category').addClass("arrow-down");
            $('.menu-expandible .footer').show();
        }
    });

    //menu -  version mobile
    $(".button_menu_mobile").click(function(){
        $(".button_menu_mobile").toggleClass("open");
        $(".menu-horizontal .contenedor-derecho").toggleClass("open");
        $(".menu-horizontal-amarillo .contenedor-derecho").toggleClass("open");
        $(".menu-horizontal").toggleClass("open");
        $(".menu-horizontal-amarillo").toggleClass("open");

    });

});

$(document).ready(function() {
//progress bar light

    /*contamos cuantos items hay*/
    var items = $(".prog-bar-light .item").toArray().length;

    /*Guardamos la informacion del ultimo item*/
    var info_last_item = $(".prog-bar-light .item .point").last();

    /*guardamos el estado del ultimo item*/
    var state_last_item = "";

    /*capturamos el estado sel ultimo item*/
    if ($(".prog-bar-light .item").last().hasClass("do")){
        state_last_item = "do";
    }else if($(".prog-bar-light .item").last().hasClass("doing")){
        state_last_item = "doing";
    }else if($(".prog-bar-light .item").last().hasClass("done")){
        state_last_item = "done";
    }

    /*Eliminamos el ultimo item*/
    $(".prog-bar-light .item").last().remove();

    /*calculamos el ancho (porcentaje) de cada item*/
    var items_width = 100 / (items-1);

    /*asignamos el ancho a cada item*/
    $(".prog-bar-light .item").css( "width",items_width+'%' );

    /*incluimos el contenido del item "eliminado" en el ultimo ".item" actual*/
    $(".prog-bar-light .item").last().append(info_last_item);


    /*recorremos cada etiqueta con clase ".point" de los items*/
    $(".prog-bar-light .point").each(function(index){

        /*capturamos el ancho del contenedor*/
        var width = $(this).width();

        /*centramos el contenido con el limite del borde izquierdo*/
        $(this).css("margin-left",'-'+width/2+'px');

        /*recorremos la ultima clase ".point"*/
        if (index === (items - 1)){
            /*quitamos el margin left por defecto*/
            $(this).css("margin-left",'');
            /*centramos el contenido con el limite del borde derecho */
            $(this).css("margin-right",'-'+width/2+'px');

            $(this).addClass(state_last_item);
        }
    });


    //meenu

});




//////////////////////////////
//calcular caja isometrica
//////////////////////////////

//valores por defecto de alto, ancho y largo (cm)
var alto_default = 28;
var ancho_default = 28;
var largo_default = 28;

//aplicamos un factor para los tamaÃ±os de la caja...
//ej: si ingresan "15cm" * factor(3) en la pantalla seran 45px esos 15cm
var factor = 3; //


//ingresamos las medidas en las ayudas visuales
//$('.v-alto').html(alto + "<span style='padding-left:2px'>cm</span>");
//$('.v-ancho').html(ancho + "<span style='padding-left:2px'>cm</span>");
//$('.v-largo').html(largo + "<span style='padding-left:2px'>cm</span>");


function calcularCaja(id){

    //creamos una copia de las variables dentro de la funcion
    var alto = alto_default;
    var ancho = ancho_default;
    var largo = largo_default;



    //si alguno de los valores se completo, reemplaza el valor por defecto antes del calculo y se hacen algunos ajustes de magenes

    //alto..
    if($('#caja-alto').val()){
        alto = $('#caja-alto').val();
        //cargamos y desplegamos el texto en la ayuda visual
        $('.v-alto').html(alto + "<span style='padding-left:2px'>cm</span>");
        $('#'+id+' .plano-a .contenedor-valor-vertical').css("display", "flex");

        //ajustamos los margenes con la clase "active-horizontal"
        $('#'+id+' .contenedor-caja').addClass("active-horizontal");
    }else{
        //...mantenemos oculta la etiqueta de ayuda
        $('#'+id+' .plano-a .contenedor-valor-vertical').css("display", "none");
        //ajustamos los margenes removiendo "active-horizontal"
        $('#'+id+' .contenedor-caja').removeClass("active-horizontal");
    }

    //ancho..
    if($('#caja-ancho').val()){
        ancho = $('#caja-ancho').val();
        //cargamos y desplegamos el texto en la ayuda visual
        $('.v-ancho').html(ancho + "<span style='padding-left:2px'>cm</span>");
        $('#'+id+' .plano-a .contenedor-valor-horizontal').css("display", "flex");

        //ajustamos los margenes con la clase "active-vertical"
        $('#'+id+' .contenedor-caja').addClass("active-vertical");

    }else{
        //...mantenemos oculta la etiqueta de ayuda
        $('#'+id+' .plano-a .contenedor-valor-horizontal').css("display", "none");
        //ajustamos los margenes removiendo "active-vertical"
        $('#'+id+' .contenedor-caja').removeClass("active-vertical");
    }

    //largo..
    if($('#caja-largo').val()){
        largo = $('#caja-largo').val();
        //cargamos y desplegamos el texto en la ayuda visual
        $('.v-largo').html(largo + "<span style='padding-left:2px'>cm</span>");
        $('#'+id+' .plano-b .contenedor-valor-horizontal').css("display", "flex");
        //ajustamos los margenes con la clase "active-vertical"
        $('#'+id+' .contenedor-caja').addClass("active-vertical");

    }else{
        //...mantenemos oculta la etiqueta de ayuda
        $('#'+id+' .plano-b .contenedor-valor-horizontal').css("display", "none");
        //removemos la clase "active-vertical" solo si no se ingreso el "ancho"
        if(!$('#caja-ancho').val()){
            $('#'+id+' .contenedor-caja').removeClass("active-vertical");
        }
    }


    //calculos trigonometricos...
    //calculo ancho (eje-x) del "plano-a"
    var calc_ancho_pa = ((86.6025 * ancho) / 100) * factor;
    //calculo ancho (eje-x) del "plano-b"
    var calc_ancho_pb = ((86.6025 * largo) / 100) * factor;

    //calculo altura desde la "base a la punta inferior izquierda del plano-a"
    var calc_alt_pa = (ancho/2) * factor;
    //calculo altura desde la "base a punta inferior derecha del plano-b"
    var calc_alt_pb = (largo/2) * factor;


    //aplicacion de alto y largo del contenedor de la caja
    var caja_h = (alto * factor) + calc_alt_pa + calc_alt_pb;
    var caja_w = calc_ancho_pa + calc_ancho_pb;

    $('#'+id+' .caja-isometrica').css("height", caja_h);
    $('#'+id+' .caja-isometrica').css("width", caja_w);


    //capturamos la altura y anchura del "contenedor" de la caja
    var contenedor_h = $('#'+id+' .contenedor-caja').height();
    var contenedor_w = $('#'+id+' .contenedor-caja').width();



    //si la caja sobrepasa los limite del contenedor..
    if(caja_h >= contenedor_h || caja_w >= contenedor_w){

        var i = 0;

        //guardamos el ancho y alto actual de la caja
        var ca_h = caja_h;
        var ca_w = caja_w;

        //hacemos un loop para buscar la mejor escala
        while(i < 9) {
            //le restamos 0.1 a la escala por ciclo (la escala comienza en 1)
            var new_scale = (1-(i/10)).toFixed(1);

            //comparamos si el contenedor (ancho y alto)con la nueva escala aun es mayor que el contenedor
            if(ca_h*new_scale >= contenedor_h || ca_w*new_scale >= contenedor_w){
                //si es asi..vamos por el nuevo ciclo de comprobacion
                i++;
            }else{
                //de lo contrario...
                //alert(new_scale);
                //escalamos la caja.
                $('#'+id+' .caja-isometrica').css("transform", 'scale('+new_scale+')');
                //alert(new_scale);

                //Luego corregimos ayudas visuales en cada escala
                var font_size;
                var margin_bottom;
                var margin_left;
                var margin_left_line;
                var border_line;

                switch(new_scale.toString()) {
                    case "0.9":
                        font_size = 14;
                        margin_bottom = -35;
                        margin_left = -60;
                        margin_left_line=-14;
                        border_line = 2;
                        break;
                    case "0.8":
                        font_size = 16;
                        margin_bottom = -40;
                        margin_left = -65;
                        margin_left_line=-14;
                        border_line = 3;
                        break;
                    case "0.7":
                        font_size = 18;
                        margin_bottom = -45;
                        margin_left = -70;
                        margin_left_line=-16;
                        border_line = 3;
                        break;
                    case "0.6":
                        font_size = 22;
                        margin_bottom = -40;
                        margin_left = -85;
                        margin_left_line=-18;
                        border_line = 3;
                        break;
                    case "0.5":
                        font_size = 26;
                        margin_bottom = -40;
                        margin_left = -120;
                        margin_left_line=-22;
                        border_line = 4;
                        break;
                    case "0.4":
                        font_size = 30;
                        margin_bottom = -40;
                        margin_left = -140;
                        margin_left_line=-26;
                        border_line = 4;
                        break;
                    case "0.3":
                        font_size = 40;
                        margin_bottom = -60;
                        margin_left = -190;
                        margin_left_line=-30;
                        border_line = 5;
                        break;
                    default:
                    //alert("es default");
                }

                //aplicamos los valores segun la escala
                $('#'+id+' .contenedor-caja .caja-isometrica .valor').css("font-size", font_size);
                $('#'+id+' .contenedor-caja .contenedor-valor-horizontal .contenedor_valor').css("margin-bottom", margin_bottom);
                $('#'+id+' .contenedor-caja .contenedor-valor-vertical .valor').css("margin-left", margin_left);
                $('#'+id+' .contenedor-caja .contenedor-valor-vertical .line').css("margin-left", margin_left_line);
                $('#'+id+' .contenedor-caja .contenedor-valor-vertical .line').css({"border-left":  border_line +"px " +" dashed #ccc"});
                $('#'+id+' .contenedor-caja .contenedor-valor-horizontal .contenedor_valor').css({"border-top":  border_line +"px " +" dashed #ccc"});


                //...y quebramos la comprobacion
                break;
            }
        }

    }else{

        //alert("regreso pequeÃ±o");
        //reseteamos los valores por defecto si la caja no sobrepasa los limites del contenedor
        $('#'+id+' .contenedor-caja .caja-isometrica .valor').css("font-size", 12);
        $('#'+id+' .contenedor-caja .contenedor-valor-horizontal .contenedor_valor').css("margin-bottom", -30);
        $('#'+id+' .contenedor-caja .contenedor-valor-vertical .valor').css("margin-left", -50);
        $('#'+id+' .contenedor-caja .contenedor-valor-vertical .line').css("margin-left", -10);
        $('#'+id+' .contenedor-caja .contenedor-valor-vertical .line').css({"border-left":  2 +"px " +" dashed #ccc"});
        $('#'+id+' .contenedor-caja .contenedor-valor-horizontal .contenedor_valor').css({"border-top":  2 +"px " +" dashed #ccc"});


        //si la caja no sobrepasa los limites del contenedor...escalamos la caja a 1
        $('#'+id+' .contenedor-caja .caja-isometrica').css("transform", 'scale(1)');


    }


    //se inicia el calculo de los planos a,b y c...
    //altura
    $('#'+id+' .plano-a').css("height",alto * factor);
    $('#'+id+' .plano-b').css("height",alto * factor);

    //ancho
    $('#'+id+' .plano-b').css("width",largo * factor);
    $('#'+id+' .plano-c').css("width",largo * factor);

    //largo
    $('#'+id+' .plano-a').css("width",ancho * factor);
    $('#'+id+' .plano-c').css("height",ancho * factor);

    //se calcula la posicion del "plano a"
    $('#'+id+' .plano-a').css({'transform' : 'translate(0px,'+ calc_alt_pb +'px) skewY(30deg) scaleX(.866025)'});
    //se calcula la posicion del "plano b"
    $('#'+id+' .plano-b').css({'transform' : 'translate(' + calc_ancho_pa + 'px, ' + (calc_alt_pa + calc_alt_pb) + 'px) skewY(-30deg) scaleX(.866025)'});
    //se calcula la posicion del "plano c"
    $('#'+id+' .plano-c').css({'transform' : 'translate(0px,'+ calc_alt_pb +'px) rotate(-60deg) skewY(30deg) scaleX(.866025)'});




}
