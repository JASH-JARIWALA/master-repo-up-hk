<style>
    footer {
        padding: 3rem 1rem 1rem 2rem;
        border-top: 1px solid #ddd;
        font-family: Barlow, sans-serif;
    }
</style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  
    <!-- <script src="assets/images/javascript/owl.carousel.js"></script> -->
    <script src="<?php echo $folder_path;?>/assets/images/javascript/owl.carousel.min.js"></script>
    <script src="<?php echo $folder_path;?>/js/colpas.js"></script>
    <script>
        $("#carousel10").owlCarousel({
            loop: true,
            margin: 25,
            nav: false,
            dots: true,
            autoplay: true,
            smartSpeed: 600,
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1150: {
                    items: 3,
                },
            },
        });
    </script>

<script>window._wml = { defaultCdnHost: "i5.walmartimages.com" };</script>


   
<script>
    $(function () {
        var owl = $('.das_sagen_slider');
        owl.owlCarousel({
            items: 1,
            loop: false,
            onInitialized: counter, 
            onTranslated: counter, 
            margin: 10,
            stagePadding: 40,
            navText: ['<span class="fas fa-chevron-left fa-2x"></span>', '<span class="fas fa-chevron-right fa-2x"></span>'],
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
        });
        function counter(event) {
            var element = event.target;       
            var items = event.item.count;     
            var item = event.item.index + 1;    

         
            if (item > items) {
                item = item - items;
            }

          
            $('#counter').html(item + '/' + items);

           
            if (item === 1) {
                $('.owl-prev').addClass('disabled');
            } else {
                $('.owl-prev').removeClass('disabled');
            }

            if (item === items) {
                $('.owl-next').addClass('disabled');
            } else {
                $('.owl-next').removeClass('disabled');
            }
        }
    });
</script>

<footer>
    <cx-page-layout section="footer" class="footer">
        <cx-page-slot position="Footer" class="Footer has-components">
            <cx-footer-navigation><cx-navigation-ui><!---->
                    <nav class="mb-8">
                        <p tabindex="-1" class="font-bold mb-4"> Help &amp; Contact <!----></p><!----><!---->
                        <div class="wrapper"><!---->
                            <div class="childs" depth="1" columns="1">
                                <nav>
                                    <cx-generic-link><a href="mailto:onlineshopping@pnp.co.za" target="_blank"
                                            rel="noopener" class="text-sm mb-2 block mb-4 opacity-70"> Send us an email
                                            <!----><!----></a>
                                        <!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav>
                                    <cx-generic-link><a href="https://wa.me/027600703037" target="_blank" rel="noopener"
                                            class="text-sm mb-2 block mb-4 opacity-70"> Send us a WhatsApp
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav>
                                    <p tabindex="-1" class="font-bold mb-4"> Call Customer Care
                                        <!---->
                                    </p><!----><!----><!---->
                                </nav>
                                <!----><!---->
                                <nav><cx-generic-link><a href="tel:0860303030" target="_blank" rel="noopener"
                                            class="text-sm mb-2 block mb-4 opacity-70"> Call 0860
                                            30 30 30
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav>
                                    <p tabindex="-1" class="font-bold mb-4"> International Customers
                                        <!---->
                                    </p><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a href="tel:027210031600" target="_blank" rel="noopener"
                                            class="text-sm mb-2 block mb-4 opacity-70"> Call
                                            +27 21 003 1600
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!----><!---->
                            </div>
                        </div><!---->
                    </nav><!----><!---->
                    <nav class="mb-8">
                        <p tabindex="-1" class="font-bold mb-4"> Company <!----></p><!----><!---->
                        <div class="wrapper"><!---->
                            <div class="childs" depth="1" columns="1">
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70" href="/careers">
                                            Careers
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70" href="/about-us">
                                            About Pick n
                                            Pay
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/peoplenplanet" target="_blank"> People &amp; Planet
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70" href="/money-mobile"
                                            target="_blank"> Money &amp; Mobile
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/smart-shopper" target="_blank"> Smart Shopper
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!----><!---->
                            </div>
                        </div><!---->
                    </nav><!----><!---->
                    <nav class="mb-8">
                        <p class="font-bold mb-3" tabindex="-1"> Services &amp; Websites <!----></p><!----><!---->
                        <div class="wrapper"><!---->
                            <div class="childs" depth="1" columns="1">
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.pnphome.co.za/" target="_blank" rel="noopener"> PnP Home
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.picknpayclothing.co.za/" target="_blank" rel="noopener">
                                            PnP Clothing
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.pnp.co.za/pnpstorefront/pnp/en/qualisave" target="_blank"
                                            rel="noopener"> PnP QualiSave
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.boxer.co.za/">
                                            Boxer Stores
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.picknpayinvestor.co.za"> Investor Relations
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!----><!---->
                            </div>
                        </div><!---->
                    </nav><!----><!---->
                    <nav class="mb-8">
                        <p class="font-bold mb-3" tabindex="-1"> Useful Information <!----></p><!----><!---->
                        <div class="wrapper"><!---->
                            <div class="childs" depth="1" columns="1">
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/privacy-portal/scams">
                                            Scams
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/privacy-portal"> Privacy
                                            Portal
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70" href="/ols-tncs">
                                            Terms and
                                            Conditions
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/returns-policy"> Refunds
                                            and
                                            Returns
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/customer-communication">
                                            Customer Communication
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70" href="/cpa">
                                            Consumer
                                            Protection Act
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/pnp-copyright">
                                            Copyright -
                                            Intellectual Property
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://pnpmerchants.zendesk.com/hc" target="_blank" rel="noopener">
                                            FAQs
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="/store-locator"> Store
                                            Locator
                                            <!----><!----></a><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.pnp.co.za/clickncollect"> Click n Collect
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!----><!---->
                            </div>
                        </div><!---->
                    </nav><!----><!---->
                    <nav class="mb-8">
                        <p class="font-bold mb-3" tabindex="-1"> Apps &amp; News <!----></p><!----><!---->
                        <div class="wrapper"><!---->
                            <div class="childs" depth="1" columns="1">
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://go.onelink.me/l1Xv/5cc99903"> Get the asap! App
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.facebook.com/Picknpay/"> Facebook
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://twitter.com/picknpay">
                                            Twitter
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.instagram.com/picknpay/"> Instagram
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!---->
                                <nav><cx-generic-link><a class="text-sm mb-2 block mb-4 opacity-70"
                                            href="https://www.youtube.com/user/PicknPayTube"> YouTube
                                            <!----><!----></a><!----><!----><!----><!----></cx-generic-link><!----><!----><!---->
                                </nav><!----><!----><!---->
                            </div>
                        </div><!---->
                    </nav><!----><!----><!----><!---->
                </cx-navigation-ui></cx-footer-navigation><!----><!----><cms-paragraph class="ng-star-inserted">
                <p resolvelink="" class="ng-star-inserted">
                <div class="cx-notice text-xs text-center">Copyright © 2023 Pick n Pay All Rights Reserved. <a
                        href="https://southafrica.payu.com/" aria-label="Read more about secure payment with PayU"
                        target="_blank">
                        <img class="m-auto" src="<?php echo $folder_path;?>/assets/images/partners/secure.png"
                            alt="PayU Logo, Secure checkout Notification" /></a>
                </div>
                </p><!---->
            </cms-paragraph><!----><!----><cms-popia-component _nghost-spartacus-app-c332=""
                class="ng-star-inserted"><!----></cms-popia-component><!----><!----><!----><!----></cx-page-slot><!----><!----></cx-page-layout>
</footer>