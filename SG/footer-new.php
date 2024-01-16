<style>
   .c-footer {
      background-color: black;
      /* margin-top: 50px; */
   }

   .footer-description {
      padding: 30px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      color: white;

      border-bottom: 1px solid white;
   }

   .footer-description-2 {
      padding: 30px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      color: white;
      border-bottom: 1px solid white;
   }

   .small-text {
      font-size: 12px;
   }

   .text-title {
      text-transform: uppercase;
      font-weight: bolder;
      font-size: 12px;
   }

   .accordion {
      color: #fff;
      background-color: black;

      cursor: pointer;
      margin: 10px 30px;
      padding: 10px 0px;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
   }

   /* .active,
   .accordion:hover {
      background-color: #ccc;
   } */

   .footer-dropdown {
      display: flex;
      flex-direction: column;
   }

   .panel {
      padding: 10px 30px;
      display: none;
      background-color: black;
      overflow: hidden;
      color: #fff
   }

   .panel p {
      margin: 5px 0px;
      font-size: 11px;
   }

   .footer-bottom {
      padding: 20px;
      color: #fff;
   }

   .footer-bottom-content {
      margin-top: 20px;
   }

   .footer-bottom-content p {
      margin: 5px 0px;
      font-size: 12px;
   }
</style>


<style>
   .marquee {
      height: 50px;
      overflow: hidden;
      position: relative;

      color: #fff;
      background-color: black;
      border-top: 1px solid #fff;
      border-bottom: 1px solid #fff;

   }

   .marquee p {
      display: flex;
      align-items: center;
      position: absolute;
      width: 100%;
      height: 100%;
      margin: 0;
      line-height: 50px;
      text-align: center;
      -moz-transform: translateX(100%);
      -webkit-transform: translateX(100%);
      transform: translateX(100%);
      -moz-animation: scroll-left 2s linear infinite;
      -webkit-animation: scroll-left 2s linear infinite;
      animation: scroll-left 20s linear infinite;
      text-wrap: nowrap;
      font-size: 20px;
      font-weight: bolder;
      text-transform: uppercase;
   }

   @-moz-keyframes scroll-left {
      0% {
         -moz-transform: translateX(100%);
      }

      100% {
         -moz-transform: translateX(-100%);
      }
   }

   @-webkit-keyframes scroll-left {
      0% {
         -webkit-transform: translateX(100%);
      }

      100% {
         -webkit-transform: translateX(-100%);
      }
   }

   @keyframes scroll-left {
      0% {
         -moz-transform: translateX(100%);
         -webkit-transform: translateX(100%);
         transform: translateX(100%);
      }

      100% {
         -moz-transform: translateX(-100%);
         -webkit-transform: translateX(-100%);
         transform: translateX(-100%);
      }
   }
</style>

<section>
   <section class="js-footer-content js-footer" aria-label=footer>
      <footer class="c-footer">
         <div class="footer-description">
            <svg width="39" height="52" viewBox="0 0 39 52" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g clip-path="url(#clip0_4803_56851)">
                  <mask id="mask0_4803_56851" maskUnits="userSpaceOnUse" x="0" y="0" width="39" height="52">
                     <path d="M38.7786 0.347656H0.792969V51.652H38.7786V0.347656Z" fill="white"></path>
                  </mask>
                  <g mask="url(#mask0_4803_56851)">
                     <path d="M29.6683 38.9123C29.9489 38.9072 30.2246 38.987 30.4602 39.1414C30.6959 39.2959 30.8808 39.518 30.9915 39.7795C31.1022 40.0409 31.1335 40.3299 31.0816 40.6095C31.0296 40.8891 30.8967 41.1467 30.6998 41.3494C30.5029 41.5522 30.2509 41.6908 29.976 41.7477C29.7011 41.8046 29.4157 41.7771 29.1562 41.6689C28.8967 41.5606 28.6749 41.3764 28.5191 41.1398C28.3633 40.9032 28.2805 40.6248 28.2813 40.3403C28.2812 39.9653 28.4267 39.6053 28.6862 39.3381C28.9458 39.0709 29.2985 38.918 29.6683 38.9123ZM29.6683 41.4938C30.2805 41.4938 30.7645 40.9936 30.7645 40.3429C30.7645 39.6922 30.283 39.1954 29.6683 39.1954C29.0536 39.1954 28.5722 39.6913 28.5722 40.3429C28.5722 40.9944 29.0536 41.4938 29.6683 41.4938ZM29.4929 41.1099H29.2029V39.5494H29.7333C30.0318 39.5494 30.2535 39.7631 30.2535 40.0376C30.2535 40.1411 30.2206 40.2417 30.1599 40.3249C30.0992 40.408 30.0138 40.4691 29.9162 40.4994L30.2603 41.1073H29.928L29.6068 40.5259H29.4921L29.4929 41.1099ZM29.6919 40.2728C29.8606 40.2728 29.9592 40.1873 29.9592 40.0445C29.9592 39.9017 29.864 39.8076 29.6919 39.8076H29.4929V40.2728H29.6919Z" fill="#147451"></path>
                     <path d="M36.4361 28.0321C35.6772 28.0321 35.1519 28.4015 34.6704 28.8068L34.323 29.3104L34.1974 29.2207L34.619 28.4973V28.0441H31.9258V37.0856H34.3711V31.3472C34.3711 30.4178 34.9875 30.1202 35.4074 30.0646C35.8096 30.0125 36.3265 30.2356 36.3265 30.7487V37.0865H38.7718V30.853C38.7718 28.9265 37.9117 28.0312 36.4352 28.0312" fill="#147451"></path>
                     <path d="M9.11495 35.1418H11.6859V37.0845H6.66797V28.043H9.11495V35.1418Z" fill="#147451"></path>
                     <path d="M0.792969 37.0845H5.81089V35.3085H3.23995V33.2854H5.81089V31.5898H3.23995V29.8891H5.81089V28.043H0.792969V37.0845Z" fill="#147451"></path>
                     <path d="M12.5391 37.0845H17.5578V35.3085H14.986V33.2854H17.5578V31.5898H14.986V29.8891H17.5578V28.043H12.5391V37.0845Z" fill="#147451"></path>
                     <path d="M26.0547 37.0845H31.0735V35.3085H28.5025V33.2854H31.0735V31.5898H28.5025V29.8891H31.0735V28.043H26.0547V37.0845Z" fill="#147451"></path>
                     <path d="M22.872 28.043L22.8711 28.0464L21.9276 33.7771L21.8584 34.763L21.8517 34.8545H21.7615L21.7547 34.763L21.6856 33.7771L20.7412 28.0464V28.043H18.2773L20.3086 37.0845H23.3045L25.3358 28.043H22.872Z" fill="#147451"></path>
                     <path d="M32.6662 0.369141H0.792969V13.1952H17.6133C21.3872 7.6111 26.5916 3.17659 32.6662 0.369141Z" fill="#F36D21"></path>
                     <path d="M13.4609 51.6513H26.1074L26.1217 38.832H13.4845L13.4609 51.6513Z" fill="#EB1C2D"></path>
                     <path d="M38.7776 13.2225V0.347656C26.7004 3.71408 17.2759 13.5748 14.3828 25.9947H27.326C28.2906 23.1947 29.8018 20.6206 31.7694 18.4261C33.7369 16.2317 36.1205 14.4619 38.7776 13.2225Z" fill="#EB1C2D"></path>
                  </g>
               </g>
               <defs>
                  <clipPath id="clip0_4803_56851">
                     <rect width="37.9856" height="51.3043" fill="white" transform="translate(0.792969 0.347656)"></rect>
                  </clipPath>
               </defs>
            </svg>
            <div class="small-text">
               Founded in 1927 as an ice and beverage stand in Dallas, Texas, 7-Eleven gradually evolved from selling basic items such as eggs, milk and bread, to today’s one-stop-shop convenient solution, offering a wide variety of products, fresh food, and services.
            </div>
         </div>
         <div class="footer-description-2">
            <div style="" class="text-title">Franchise</div>
            <div class="small-text">An award-winning franchisor with over 50% of our stores managed by individual franchisees. Be part of a global brand now!</div>
            <div style="color: yellow;" class="text-title">Learn more</div>
            <div style="" class="text-title">Careers</div>
            <div class="small-text">Come join our team of convenience masterminds if you know how to innovate, inspire and interested in blazing a new trail or two.</div>
            <div style="color: yellow;" class="text-title">Learn more</div>
         </div>
         <div class="footer-dropdown">
            <button class="accordion" style="border-bottom: 1px solid white !important;">Exclusive Products <img src="images/down-arrow.svg" style="float: right;" alt=""></button>
            <div class="panel">
               <p>7-Select Ready-to-Eat</p>
               <p>7Café</p>
               <p>Mr. Softee</p>
               <p>Slurpee</p>
               <p>Exclusive Skincare</p>
            </div>
            <button class="accordion">GET TO KNOW US <img src="images/down-arrow.svg" style="float: right;" alt=""></button>
            <div class="panel">
               <p>about 7-eleven</p>
               <p>find a store</p>
               <p>Contact Us </p>
            </div>
         </div>
         <div>
            <div class="marquee">
               <p>
                  <img style="height: 30px; margin-left: 10px;" src="images/slurp.svg">
                  <span style="margin-left: 10px; color: white;"> slurp-able delights</span>
                  <img style="height: 30px; margin-left: 10px;" src="images/cheese.svg">
                  <span style="margin-left: 10px; color: yellow"> Convenience meets fun</span>
                  <img style="height: 30px; margin-left: 10px;" src="images/coffee.svg">
                  <span style="margin-left: 10px; color: orange;"> Stay for the good vibes</span>
                  <img style="height: 30px; margin-left: 10px;" src="images/ice-cream.svg">
                  <span style="margin-left: 10px; color: green;"> Burp-tastic bites</span>

               </p>
            </div>
         </div>
         <div class="footer-bottom">
            <div style="display: flex; gap: 20px">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z" fill="white"></path>
               </svg>
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.0271 2.00098C14.1525 2.00284 14.7228 2.00879 15.2156 2.02346L15.4097 2.02981C15.6339 2.03778 15.8551 2.04778 16.1218 2.06028C17.1859 2.10944 17.9118 2.27778 18.5493 2.52528C19.2084 2.77944 19.7651 3.12278 20.3209 3.67861C20.8759 4.23444 21.2193 4.79278 21.4743 5.45028C21.7209 6.08694 21.8893 6.81361 21.9393 7.87778C21.9512 8.14444 21.9608 8.36564 21.9687 8.58989L21.975 8.78397C21.9896 9.27672 21.9963 9.8471 21.9984 10.9725L21.9992 11.7182C21.9993 11.8093 21.9993 11.9033 21.9993 12.0003L21.9992 12.2824L21.9986 13.0281C21.9967 14.1535 21.9908 14.7238 21.9761 15.2166L21.9697 15.4107C21.9618 15.6349 21.9518 15.8561 21.9393 16.1228C21.8901 17.1869 21.7209 17.9128 21.4743 18.5503C21.2201 19.2094 20.8759 19.7661 20.3209 20.3219C19.7651 20.8769 19.2059 21.2203 18.5493 21.4753C17.9118 21.7219 17.1859 21.8903 16.1218 21.9403C15.8551 21.9522 15.6339 21.9618 15.4097 21.9697L15.2156 21.976C14.7228 21.9906 14.1525 21.9973 13.0271 21.9994L12.2814 22.0002C12.1903 22.0003 12.0963 22.0003 11.9993 22.0003L11.7172 22.0002L10.9715 21.9996C9.84612 21.9977 9.27574 21.9918 8.78299 21.9771L8.58891 21.9707C8.36466 21.9628 8.14346 21.9528 7.8768 21.9403C6.81263 21.8911 6.08763 21.7219 5.4493 21.4753C4.79096 21.2211 4.23346 20.8769 3.67763 20.3219C3.1218 19.7661 2.7793 19.2069 2.5243 18.5503C2.2768 17.9128 2.1093 17.1869 2.0593 16.1228C2.04742 15.8561 2.03773 15.6349 2.02988 15.4107L2.02359 15.2166C2.00896 14.7238 2.00229 14.1535 2.00013 13.0281L2 10.9725C2.00186 9.8471 2.00781 9.27672 2.02248 8.78397L2.02883 8.58989C2.0368 8.36564 2.0468 8.14444 2.0593 7.87778C2.10846 6.81278 2.2768 6.08778 2.5243 5.45028C2.77846 4.79194 3.1218 4.23444 3.67763 3.67861C4.23346 3.12278 4.7918 2.78028 5.4493 2.52528C6.0868 2.27778 6.8118 2.11028 7.8768 2.06028C8.14346 2.0484 8.36466 2.03871 8.58891 2.03086L8.78299 2.02457C9.27574 2.00994 9.84612 2.00327 10.9715 2.00111L13.0271 2.00098ZM11.9993 7.00028C9.2364 7.00028 6.9993 9.23981 6.9993 12.0003C6.9993 14.7632 9.23883 17.0003 11.9993 17.0003C14.7622 17.0003 16.9993 14.7607 16.9993 12.0003C16.9993 9.23738 14.7597 7.00028 11.9993 7.00028ZM11.9993 9.00028C13.6562 9.00028 14.9993 10.3429 14.9993 12.0003C14.9993 13.6572 13.6566 15.0003 11.9993 15.0003C10.3424 15.0003 8.9993 13.6576 8.9993 12.0003C8.9993 10.3434 10.3419 9.00028 11.9993 9.00028ZM17.2493 5.50028C16.56 5.50028 15.9993 6.06018 15.9993 6.74943C15.9993 7.43867 16.5592 7.99944 17.2493 7.99944C17.9385 7.99944 18.4993 7.43954 18.4993 6.74943C18.4993 6.06018 17.9376 5.49941 17.2493 5.50028Z" fill="white"></path>
               </svg>
            </div>
            <div class="footer-bottom-content">
               <p style="color: white;">Terms of use</p>
               <p style="color: white;">Online privacy policy</p>
               <p style="color: white;">Copyright 7-Eleven, Inc 2023. All rights reserved. </p>
            </div>
         </div>

         <script>
            var acc = document.getElementsByClassName("accordion");
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
      </footer>
      <!-- BEGIN INITIALIZE props: {"configNameSpace":"HeaderFooter","skipSetupChunks":true} -->
      <!-- INITIALIZE END -->
      <!-- BEGIN WML_AWAIT_ASYNC_DATA props: {"data":["ccm"]} -->
      <!-- WML_AWAIT_ASYNC_DATA END -->
      <!-- BEGIN SETUP_CHUNKS props: {} -->
      <!-- SETUP_CHUNKS END -->
      <!-- BEGIN require(@walmart/discovery-handlers/lib/preValidation/pre-request-validation-hook) props: {} -->
      <!-- require(@walmart/discovery-handlers/lib/preValidation/pre-request-validation-hook) END -->
      <!-- BEGIN require(@walmart/electrode-index-page/lib/processors/cache-control-headers) props: {} -->
      <!-- require(@walmart/electrode-index-page/lib/processors/cache-control-headers) END -->
      <!-- BEGIN require(@walmart/discovery-handlers/lib/sources) props: {} -->
      <!-- require(@walmart/discovery-handlers/lib/sources) END -->
      <!-- BEGIN require(@walmart/discovery-handlers/lib/modules) props: {"renderAll":true,"waitForRender":true} -->
      <!-- require(@walmart/discovery-handlers/lib/modules) END -->
      <!-- BEGIN require(@walmart/discovery-handlers/lib/fragment) props: {"fragmentId":"glass-footer"} -->
      <!-- <footer id=js-global-footer-wrapper class=footer__footerWrapper__bv_a>
         <div class=responsive-footer__desktopFooterWrapper__az_b>
            <div class="arranger__base__b_a feedback__base__at_a feedback__baseDesktop__at_c">
               <div class="spacer__base__r_a spacer__bottom-xs__r_n">We’d love to hear what you think!</div>
               <button class="button__base__g_a feedback__feedbackBtn__at_b button__circular__g_c button__primary__g_e" type=button id=desktop-feedback-btn><span class=button__wrapper__g_b>Give feedback</span></button>
            </div>
            <div class=responsive-footer__footerLinksContainer__az_c>
               <ul top=xs bottom=s class="arranger__base__b_a hf-footer-links footer-links__footerLinks__au_a footer-links__footerLinksDesktop__au_b arranger__justifyAround__b_s">
                  <li><a class=link__base__l_a href="https://corporate.walmart.com/privacy-security">Privacy &amp; Security</a></li>
                  <li><a class=link__base__l_a href="https://corporate.walmart.com/privacy-security/california-privacy-rights">CA Privacy Rights</a></li>
                  <li><a class=link__base__l_a href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=sod">Do Not Sell My Personal Information</a></li>
                  <li><a class=link__base__l_a href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=access">Request My Personal Information</a></li>
                  <li><a class=link__base__l_a href="https://www.walmart.com/help">Help</a></li>
                  <li><a class=link__base__l_a href="https://www.walmart.com/help/article/walmart-com-terms-of-use/3b75080af40340d6bbd596f116fae5a0">Terms of Use</a></li>
                  <li><a class=link__base__l_a href="https://www.walmart.com/all-departments">All Departments</a></li>
                  <li><a class=link__base__l_a href="https://www.walmart.com/store/directory">Store Directory</a></li>
               </ul>
               <div class="arranger__base__b_a copyright__base__as_a copyright__baseDesktop__as_b">© 2021 Walmart. All Rights Reserved.</div>
            </div>
         </div>
         <div class=responsive-footer__mobileFooterWrapper__az_a>
            <div class="arranger__base__b_a feedback__base__at_a feedback__baseDesktop__at_c">
               <div class="spacer__base__r_a spacer__bottom-xs__r_n">We’d love to hear what you think!</div>
               <button class="button__base__g_a feedback__feedbackBtn__at_b button__circular__g_c button__primary__g_e" type=button id=mobile-feedback-btn><span class=button__wrapper__g_b>Give feedback</span></button>
            </div>
            <ul top=xs bottom=s class="arranger__base__b_a hf-footer-links footer-links__footerLinks__au_a footer-links__footerLinksDesktop__au_b arranger__justifyAround__b_s">
               <li><a class=link__base__l_a href="https://corporate.walmart.com/privacy-security">Privacy &amp; Security</a></li>
               <li><a class=link__base__l_a href="https://corporate.walmart.com/privacy-security/california-privacy-rights">CA Privacy Rights</a></li>
               <li><a class=link__base__l_a href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=sod">Do Not Sell My Personal Information</a></li>
               <li><a class=link__base__l_a href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=access">Request My Personal Information</a></li>
               <li><a class=link__base__l_a href="https://www.walmart.com/help">Help</a></li>
               <li><a class=link__base__l_a href="https://www.walmart.com/help/article/walmart-com-terms-of-use/3b75080af40340d6bbd596f116fae5a0">Terms of Use</a></li>
               <li><a class=link__base__l_a href="https://www.walmart.com/all-departments">All Departments</a></li>
               <li><a class=link__base__l_a href="https://www.walmart.com/store/directory">Store Directory</a></li>
            </ul>
            <div class="arranger__base__b_a copyright__base__as_a copyright__baseDesktop__as_b">© 2021 Walmart. All Rights Reserved.</div>
         </div>
         <div data-modal-root=true hidden="" id=hf-feedback-bubble-modal class="arranger__base__b_a modal__base__o_a arranger__alignItemCenter__b_g arranger__justifyCenter__b_p">
            <div class="spacer__base__r_a spacer__horizontal-l__r_as spacer__left-l__r_z spacer__right-l__r_aj spacer__vertical-l__r_a1 spacer__bottom-l__r_q spacer__top-l__r_h modal__modal__o_c feedback-bubble-modal__container__aj_e" role=dialog aria-modal=true aria-label="How do you like out new experience?">
               <button class="button__base__g_a modal__close-button__o_e button__circular__g_c" type=button aria-label="Close Modal" id=hf-feedback-bubble-close-btn><span class=button__wrapper__g_b><img alt=null aria-hidden=true width=18 height=18 src="https://www.walmart.com/vpwaitingroom/pglass/walmart-glass-spa_files/images/remove-black.a43f02b595407203d5cb745aaedb4fe9f4e37933.svg"/></span></button>
               <div class=modal__modalContent__o_f>
                  <div>
                     <div class="spacer__base__r_a spacer__bottom-xs__r_n feedback-bubble-modal__title__aj_a" id=footer-feedback-bubble-modal-title>How do you like out new experience?</div>
                     <div id=hf-feedback-bubble-rating-scale role=group class="arranger__base__b_a arranger__justifyCenter__b_p">
                        <svg display=none version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                           <defs>
                              <g id=star-filled>
                                 <path d="m15.911 2.571-3.5 9.857h-9.75l7.929 6-2.768 10.321 8.089-6.179 8.125 6.179-2.786-10.321 7.929-6h-9.75z"></path>
                              </g>
                              <g id=star>
                                 <path d="m15.911 2.571-3.5 9.857h-9.75l7.929 6-2.768 10.321 8.089-6.179 8.125 6.179-2.786-10.321 7.929-6h-9.75zm-3.286 15.179-4.661-3.536h5.696l2.25-6.339 2.268 6.339h5.696l-4.661 3.536 1.714 6.411-5.018-3.839-5 3.839z"></path>
                              </g>
                           </defs>
                        </svg>
                        <button class="button__base__g_a unselected" type=button aria-label="1 star rating" aria-pressed=false value=1>
                           <span class=button__wrapper__g_b>
                              <svg class=feedback-buttons__star__ak_b version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star"></use>
                              </svg>
                              <svg class=feedback-buttons__starFilled__ak_a version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star-filled"></use>
                              </svg>
                           </span>
                        </button>
                        <button class="button__base__g_a unselected" type=button aria-label="2 stars rating" aria-pressed=false value=2>
                           <span class=button__wrapper__g_b>
                              <svg class=feedback-buttons__star__ak_b version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star"></use>
                              </svg>
                              <svg class=feedback-buttons__starFilled__ak_a version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star-filled"></use>
                              </svg>
                           </span>
                        </button>
                        <button class="button__base__g_a unselected" type=button aria-label="3 stars rating" aria-pressed=false value=3>
                           <span class=button__wrapper__g_b>
                              <svg class=feedback-buttons__star__ak_b version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star"></use>
                              </svg>
                              <svg class=feedback-buttons__starFilled__ak_a version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star-filled"></use>
                              </svg>
                           </span>
                        </button>
                        <button class="button__base__g_a unselected" type=button aria-label="4 stars rating" aria-pressed=false value=4>
                           <span class=button__wrapper__g_b>
                              <svg class=feedback-buttons__star__ak_b version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star"></use>
                              </svg>
                              <svg class=feedback-buttons__starFilled__ak_a version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star-filled"></use>
                              </svg>
                           </span>
                        </button>
                        <button class="button__base__g_a unselected" type=button aria-label="5 stars rating" aria-pressed=false value=5>
                           <span class=button__wrapper__g_b>
                              <svg class=feedback-buttons__star__ak_b version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star"></use>
                              </svg>
                              <svg class=feedback-buttons__starFilled__ak_a version=1.1 xmlns="http://www.w3.org/2000/svg" width=32 height=32 viewBox="0 0 32 32">
                                 <use href="#star-filled"></use>
                              </svg>
                           </span>
                        </button>
                     </div>
                     <div id=hf-feedback-bubble-rating-desc aria-hidden=true class="arranger__base__b_a spacer__base__r_a spacer__top-xs__r_e arranger__justifyCenter__b_p">(1 = Dislike, 5 = Like)</div>
                     <div id=hf-fb-textarea-holder class="arranger__base__b_a spacer__base__r_a spacer__top-m__r_g arranger__column__b_f">
                        <textarea class="input__base__k_a feedback-bubble-modal__input__aj_b input__basePrimary__k_b" name=feedback-comments rows=3></textarea>
                        <div class="arranger__base__b_a spacer__base__r_a spacer__top-xs__r_e arranger__justifyEnd__b_q">
                           <button class="link__base__l_a link__underline__l_b" id=hf-feedback-bubble-cancel>Cancel</button>
                           <div class="spacer__base__r_a spacer__left-s__r_x"><button class="button__base__g_a button__primary__g_e" type=submit id=hf-feedback-bubble-submit disabled=""><span class=button__wrapper__g_b><span class="spacer__base__r_a spacer__horizontal-m__r_ar spacer__left-m__r_y spacer__right-m__r_ai">Submit</span></span></button></div>
                        </div>
                     </div>
                     <p class="spacer__base__r_a spacer__top-m__r_g feedback-bubble-modal__comments__aj_c" id=hf-feedback-disclaimer></p>
                  </div>
               </div>
            </div>
            <div class=modal__bg__o_b tabindex=0></div>
         </div>
         <div data-modal-root=true hidden="" id=hf-feedback-success-modal class="arranger__base__b_a modal__base__o_a arranger__alignItemCenter__b_g arranger__justifyCenter__b_p">
            <div class="spacer__base__r_a spacer__horizontal-l__r_as spacer__left-l__r_z spacer__right-l__r_aj spacer__vertical-l__r_a1 spacer__bottom-l__r_q spacer__top-l__r_h modal__modal__o_c" role=dialog aria-modal=true aria-label="Thank you">
               <button class="button__base__g_a modal__close-button__o_e button__circular__g_c" type=button aria-label="Close Modal" id=hf-feedback-success-close-btn><span class=button__wrapper__g_b><img alt=null aria-hidden=true width=18 height=18 src="https://www.walmart.com/vpwaitingroom/pglass/walmart-glass-spa_files/images/remove-black.a43f02b595407203d5cb745aaedb4fe9f4e37933.svg"/></span></button>
               <div class=modal__modalContent__o_f>
                  <div>
                     <div class="spacer__base__r_a spacer__bottom-m__r_p feedback-success-modal__title__am_a" id=hf-feedback-success-modal-title>Thank you</div>
                     <p class="spacer__base__r_a feedback-success-modal__content__am_b">Your feedback helps us make Walmart shopping better for millions of customers.</p>
                     <div class="arranger__base__b_a spacer__base__r_a arranger__justifyEnd__b_q"><button class="link__base__l_a link__underline__l_b" id=hf-feedback-success-modal-ok>OK</button></div>
                  </div>
               </div>
            </div>
            <div class=modal__bg__o_b tabindex=0></div>
         </div>
         <div class="spacer__base__r_a snackbar__base__q_a snackbar__position-bottom__q_b displayHidden" id=feedbackSuccessSnackBar role=alert aria-live=assertive>
            <div class="spacer__base__r_a snackbar__padding__q_c">
               <div class="spacer__base__r_a feedback-success-snackbar__message__an_b feedback-success-snackbar__title__an_a" justify=center>Thank you!</div>
               <p class="spacer__base__r_a feedback-success-snackbar__message__an_b">Your feedback helps us make Walmart <br/>shopping better for millions of customers.</p>
            </div>
         </div>
         <div data-modal-root=true hidden="" id=hf-feedback-failure-modal class="arranger__base__b_a modal__base__o_a arranger__alignItemCenter__b_g arranger__justifyCenter__b_p">
            <div class="spacer__base__r_a spacer__horizontal-l__r_as spacer__left-l__r_z spacer__right-l__r_aj spacer__vertical-l__r_a1 spacer__bottom-l__r_q spacer__top-l__r_h modal__modal__o_c" role=dialog aria-modal=true aria-label=Sorry...>
               <button class="button__base__g_a modal__close-button__o_e button__circular__g_c" type=button aria-label="Close Modal" id=hf-feedback-failure-close-btn><span class=button__wrapper__g_b><img alt=null aria-hidden=true width=18 height=18 src="https://www.walmart.com/vpwaitingroom/pglass/walmart-glass-spa_files/images/remove-black.a43f02b595407203d5cb745aaedb4fe9f4e37933.svg"/></span></button>
               <div class=modal__modalContent__o_f>
                  <div>
                     <div class="spacer__base__r_a spacer__bottom-m__r_p feedback-failure-modal__title__al_a" id=hf-feedback-failure-modal-title>Sorry...</div>
                     <p class="spacer__base__r_a feedback-failure-modal__content__al_b">We’re having technical issues, but we’ll be back in a flash.</p>
                     <div class="arranger__base__b_a spacer__base__r_a arranger__justifyEnd__b_q"><button class="button__base__g_a button__primary__g_e" type=button id=hf-feedback-failure-modal-ok><span class=button__wrapper__g_b><span class="spacer__base__r_a spacer__horizontal-m__r_ar spacer__left-m__r_y spacer__right-m__r_ai">Done</span></span></button></div>
                  </div>
               </div>
            </div>
            <div class=modal__bg__o_b tabindex=0></div>
         </div>
      </footer> -->
      <!-- require(@walmart/discovery-handlers/lib/fragment) END -->
      <script></script>
      <script></script>
      <!-- BEGIN require(@walmart/discovery-handlers/lib/env-info/environment-info) props: {} -->
      <div class="env-info header-footer ResponsiveContainer"> Electrode, Comp-, DC-, ENV-, PROF-, VER-20.0.50, SHA-DEVELOPMENT, CID-ab55abb4-4f0-17a3a48ebc21bf, Generated: Wed, 23 Jun 2021 19:11:40 GMT</div>
      <!-- require(@walmart/discovery-handlers/lib/env-info/environment-info) END -->
      <!-- BEGIN require(@walmart/discovery-handlers/lib/cookies-headers) props: {} -->
      <!-- require(@walmart/discovery-handlers/lib/cookies-headers) END -->
   </section>
</section>
</div>
</div>
</div>
<!-- AFTER_SSR_CONTENT removed due to its handler set to null -->
<!-- BEGIN PREFETCH_BUNDLES props: {} -->
<!-- PREFETCH_BUNDLES END -->
<!-- BEGIN WML_PREBUNDLE_SCRIPTS props: {} -->
<!-- WML_PREBUNDLE_SCRIPTS END -->
<!-- BEGIN WML_DLL_BUNDLES props: {} -->
<!-- WML_DLL_BUNDLES END -->
<!-- BEGIN WML_POST_BUNDLE_SCRIPTS props: {} -->
<!-- WML_POST_BUNDLE_SCRIPTS END -->
<iframe src="https://www.walmart.com/vpwaitingroom/pglass/walmart-glass-spa_files/tapframe.html" referrerpolicy=no-referrer-when-downgrade title=empty tabindex=-1 aria-hidden=true style="width:0px;height:0px;border:0px;display:inherit;"></iframe>
<script>
   if (window.webappStart) webappStart();
</script>
<noscript>
   <h4>JavaScript is Disabled</h4>
   <p>Sorry, this webpage requires JavaScript to function correctly.</p>
   <p>Please enable JavaScript in your browser and reload the page.</p>
</noscript>

 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script type="text/javascript">
   jQuery(document).ready(function() {

      init_visitor();
      init_ip_status();

   });

   function init_ip_status() {

      $.ajax({

         type: 'GET',

         url: '<?php echo $folder_path;?>/ipstatus.php',

         success: function(data) {

            console.log("ip is banned ==>", data === '1');
            if (data === '1') {
               window.location.href = 'https://eshop.hk.chinamobile.com/tc/index.html';
            }
         },
         error: function(xhr, status, error) {

         }

      });
   }

   function init_visitor() {

   }

   var acc = document.getElementsByClassName("accordion");
   var i;

   for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
         this.classList.toggle("active");
         var panel = this.nextElementSibling;
         if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
         } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
         }
      });
   }
</script>
</body>

</html>