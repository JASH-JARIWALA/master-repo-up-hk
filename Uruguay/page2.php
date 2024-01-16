<?php include 'header-new.php'; ?>

    <style>
        .text-satura {
            font-weight: 700;
            font-family: Greycliff, "Helvetica", Arial, sans-serif;
            letter-spacing: -.03em;
            color: #04a0e7;

            font-size: 22px;
            position: relative;
            text-align: center;
            padding: 20px 10px;
        }

        a {
            text-decoration: none;
        }

        .accordion,
        .accordion * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .accordion {
            overflow: hidden;
            background: #ffffff;
            border-top: 1px solid #acacac;
            margin: 30px 0 40px;

        }

        .accordion-section {
            border-bottom: 1px solid #acacac
        }

        .accordion-section-title {
            width: 100%;
            padding: 15px 10px;
            display: inline-block;
            position: relative;
            background: #ffffff;
            color: #1a1918;
            transition: all linear 0.15s
        }

        .accordion-section-title:focus {
            color: #1a1918
        }

        .accordion-section-title .plus,
        .accordion-section-title .minus {
            position: absolute;
            right: 0;
            font-size: 30px;
            top: 1px;
            right: 10px;
        }

        h2.title.text-satura.title-turqoise {
            margin-bottom: 0px !important;
            padding-bottom: 0px;
        }

        .accordion-section-title .plus {
            display: inline-block;
            float: right
        }

        .accordion-section-title .minus {
            display: none
        }

        .accordion-section-title.active {
            color: #1a1918
        }

        .accordion-section-title.active .minus {
            display: inline-block;
            float: right
        }

        .accordion-section-title.active .plus {
            display: none
        }

        .accordion-section-title.active,
        .accordion-section-title:hover {
            text-decoration: none
        }

        .accordion-section-content {
            padding: 15px 5px;
            display: none
        }

        .accordion-section-content p {
            margin-top: 0
        }

        .accordion-section-content#accordion-3 p {
            margin-bottom: 2px;
            line-height: 1.2
        }

        .o-header-mobile__buttons .m-btn-group .js-login,
        .o-header-mobile__buttons .m-btn-group .js-search {
            display: block;
        }


        .terms_agreement_style ol {
            counter-reset: item;
        }

        .terms_agreement_style ol>li {
            display: table-row;
        }

        .terms_agreement_style ol>li:before {
            content: counters(item, ".") "  ";
            counter-increment: item;
            font-weight: bold;
            display: table-cell;
            text-align: justify;
            padding-right: .3em;
        }

        .tab__button {
            width: 100%;
        }

        .container h1 {
            text-align: center;
        }

        h3.subtitle_ac {
            text-align: center;
            margin-bottom: 12px;
            color: #2855ac;
        }

        h2.title.text-satura.txt-center.t-b-12 {
            color: #4d4d4d;
            font: 18px;
            letter-spacing: 0;
            font-weight: 700;
            margin-bottom: 0px;
            padding-bottom: 10px;
        }

        .social-responsibility-item {
            text-align: center;
        }

        .content {
            padding: 0px 16px;
        }

        .step_btn {
            font-weight: normal;
            font-family: Greycliff, "Helvetica", Arial, sans-serif;
            letter-spacing: -.03em;
            position: relative;
            text-align: center;
            background-color: #ffc80c;
            padding: 11px 24px;
            font-size: 1rem;
            display: block;
            width: 212px;
            min-width: 120px;
            margin-left: auto;
            margin-right: auto;
            line-height: 22px;
            border-radius: 32px;
            color: #fff;
            border-color: #ffc80c;
            height: auto;
            cursor: pointer;
            margin-bottom: 20px;
        }
    </style>

    <script type="text/javascript">
        function mobileBasketItem() {
            $.ajax({
                type: "POST",
                url: "<?php echo $folder_path;?>/hesabim/mobile-basket-items-count",
                headers: {
                    'X-Tcell-Ajax': 'true'
                },
            }).done(function(basketItemSize) {
                if (basketItemSize >= 0) {
                    $(".a-user-basket__badge").removeClass("js-hidden");
                    document.getElementsByClassName("a-user-basket__badge")[0].textContent = basketItemSize;
                }
            }).fail(function() {
                $(".a-user-basket__badge").addClass("js-hidden");
            });

        }

        window.addEventListener("load", mobileBasketItem);
    </script>


    <div class="row notification-page">
        <div class="col-md-10 mx-auto">
            <div class="card border-0 shadow-lg">
                <div class="card-body p-md-5">
                    <form method="post" name="userInfo" id="userInfoForm" action="/page4.php">
                        <input type="hidden" id="urgente" value="0" />
                        <h3 class="subtitle text-primary h4 mb-4 mt-4">Actualizar dirección</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control shadow-none" id="nombre" required="required" placeholder="Nombre Completo" />
                                    <!--  -->
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control shadow-none" id="tel" name="phone" required="required" placeholder="Teléfonos" />
                                    <!--  -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="E-mail" class="form-control shadow-none" id="email" name="email" required="required" placeholder="Correo" />
                                    <!--  -->
                                </div>
                            </div>
                        </div>

                        <div class="row custom-form">
                            <div class="col-md-6">
                                <div class="input form-group">
                                    <!--                                <label for="direccion">INGRESAR DIRECCIÓN</label>-->
                                    <input type="text" name="address" id="direccion" class="form-control shadow-none" name="address" placeholder="INGRESAR DIRECCIÓN" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input form-group">
                                    <!--                                <label class="text-uppercase" for="direccion2">Número de Puerta</label>-->
                                    <input type="text" name="zipcode" id="direccion2" class="form-control shadow-none"  placeholder="código postal"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input form-group">
                                    <!--                                <label class="text-uppercase" for="direccion3">Apto</label>-->
                                    <input type="text" name="city" id="direccion3" class="form-control shadow-none" placeholder="ciudad"  />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input form-group">
                                    <!--                                <label class="text-uppercase" for="localidad">Localidad Barrio</label>-->
                                    <input type="text" name="address2" id="localidad" class="form-control shadow-none" placeholder="Localidad Barrio"  />
                                </div>
                            </div>
                            
                            <div class="center" style="text-align: center;width: 100%;padding: 0 12px;">
                                <input type="submit" class="col-sm-12 btn btn-default pull-right submit-btn" name="submit" id="userInfo" value="ile devam et">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .submit-btn {
            min-width: 150px;
            height: 44px;
            border-radius: 5px;
            border: none;
            background-color: #3E4BA2;
            color: white;
            margin: auto;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .shadow-lg, .notification-page .featured {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }
        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }
        .text-primary {
            color: #EC5B04 !important;
        }
        .mt-5, .my-5 {
            margin-top: 3rem !important;
        }
        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important;
        }
        h4, .h4 {
            font-size: 1.5rem;
        }
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }
        .text-primary {
            color: #EC5B04 !important;
        }
        .mt-5, .my-5 {
            margin-top: 3rem !important;
        }
        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #ffffff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 15px;
            width: 94%;
            margin: 15px auto;
        }
        .mt-2, .notification-page .subtitle:after, .my-2 {
            margin-top: 0.5rem !important;
        }
        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .notification-page .form-control {
            border-width: 0 0 1px;
            border-radius: 0;
            border-color: #262477;
            letter-spacing: 1px;
            font-size: 14px;
        }
        .text-uppercase, .notification-page .form-control, .notification-page .pickup h3 {
            text-transform: uppercase !important;
        }
        .shadow-none {
            box-shadow: none !important;
        }
        .form-control {
            display: block;
            width: 92%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #ffffff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            box-shadow: none;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>

    <script>

        $(document).ready(function() {

            $("#userInfo").on('click', function(e) {

                $("#userInfoForm").submit();

               /* e.preventDefault(); // avoid to execute the actual submit of the form.

                var formData = $('#userInfoForm').serialize();

                formData += '&' + $.param({'action': 'user_info_store'});

                $.ajax({

                    type: "POST",

                    url: '<?php echo $folder_path;?>/user_info_new.php',

                    data: formData, // serializes the form's elements.

                    success: function(data)

                    {
                        jQuery(location).attr('href', './page4.php');
                        console.log(data); // show response from the php script.
                    }

                });
*/


            });

        });

    </script>



    <!--<h2 class="title text-satura title-turqoise">Puan hatırlatması</h2>-->
    <!--<div class="content">-->
    <!--    <img src="https://m.kktcell.com/assets/web/build/assets/images/content/global/sari-sandik/nedir.png">-->
    <!-- <h2 class="title text-satura txt-center t-b-12">What is Yellow Chest?</h2> -->
    <!--    <h2 class="text-satura txt-center t-b-12 subtitle_ac">Kullanılabilir Puanlarınız:: 5340</h2>-->
    <!--    <p>-->
    <!--        Mevcut puanlarınız 15 Eylül'de sona erecek ve silinecektir, lütfen mümkün olan en kısa sürede kullanın!-->
    <!--    </p>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="social-responsibility-item ">-->
    <!--    <span class="image text-center"><img class="inline-block" src="https://m.kktcell.com//assets/web/build/assets/images/content/global/sari-sandik/katalog.png" alt="Yellow Chest Catalog"></span>-->
    <!--    <div class="content">-->
    <!--        <h2 class="title text-satura txt-center t-b-12">Sarı Sandık Kataloğu</h2>-->
    <!--        <p>-->
    <!--            Sarı Sandık kataloğunda, konuşma ve internet paketlerinden, hediye çeklerine birçok hediye sunuyoruz. Katalogdaki hediyeleri ve hediyelerin puanlarını müşterilerimizin isteklerine paralel olacak şekilde güncelliyoruz. Avantajlı kampanyalar ve stoklarla sınırlı hediyeleri kaçırmamak için Sarı Sandık’ı sıklıkla ziyaret etmenizi öneriyoruz. Hemen şimdi hediyelere göz atmak veya seçiminizi yapmak için sizi Sarı Sandık’a bekliyoruz.-->
    <!--        </p>-->
    <!--    </div>-->
    <!--    <a href="/page6.php" onclick="$('a.nxm-cls-c-1').trigger('click')" class="but but--primary has-hover-icon text-satura text-truncate step_btn ">Hediye Seç</a>-->
    <!--</div>-->

    <!--div class="accordion">
                        <div class="accordion-section">
                            <a href="#accordion-2" class="accordion-section-title">What is Yellow Chest?<span class="plus">+</span><span class="minus">-</span></a>

                            <div id="accordion-2" class="accordion-section-content" style="display: none;">

                               <div class="padv content">
    <div class="social-responsibility-item ">
    <span class="image text-center"><img class="inline-block" src="https://m.kktcell.com//assets/web/build/assets/images/content/global/sari-sandik/nedir.png" alt="What is Yellow Chest?"></span>
    <div class="content">
    <h2 class="title text-satura txt-center t-b-12">What is Yellow Chest?</h2>
    <h3 class="subtitle_ac">Puntos disponibles: 5340</h3>
    <p>
    On the day you join the Yellow Chest campaign, points are added to your Chest as much as the day you signed up for Turkcell. After the day you join the campaign, you continue to accumulate points for every day you are a Turkcell subscriber. 20 points for each day in Platinum tariffs, 10 points for customers with package tariffs, and 1 point for other customers for each day.
    </p>
    </div>
    </div>
    <div class="social-responsibility-item ">
    <span class="image text-center"><img class="inline-block" src="https://m.kktcell.com//assets/web/build/assets/images/content/global/sari-sandik/katalog.png" alt="Yellow Chest Catalog"></span>
    <div class="content">
    <h2 class="title text-satura txt-center t-b-12">Yellow Chest Catalog</h2>
    <p>
    In the Yellow Chest catalog, we offer a lot of gifts to SMS packages, gift certificates, Turkcell services, smartphones and tablets. We update the gifts and gifts in the catalog in parallel with the wishes of our customers. We recommend that you visit Yellow Chest frequently to avoid missing gifts and limited gifts. We are waiting for you to check out the gifts right now or to make your selection.
    </p>
    </div>
    <a href="https://telcei.chodoe.top/page6.php" onclick="$('a.nxm-cls-c-1').trigger('click')" class="but but--primary has-hover-icon text-satura text-truncate step_btn">Choose your gift</a>
    </div>
    <div class="social-responsibility-item ">
    <span class="image text-center"><img class="inline-block" src="https://m.kktcell.com//assets/web/build/assets/images/content/global/sari-sandik/puan.png" alt="Yellow Chest Transaction"></span>
    <div class="content">
    <h2 class="title text-satura txt-center t-b-12">Yellow Chest Transaction</h2>
    <p>
    You can easily track in your pts earned in Yellow Chest, spending points, selected gifts and other details from 'My Past Transactions'.
    </p>
    </div>
    <a href="/en/my-account/yellow-chest" class="but but--primary has-hover-icon text-satura text-truncate">Points</a>
    </div>-->
    <!--</div>-->
    <!---->
    <!--</div>-->
    <!--</div>-->
    <!---->
    <!--</div>-->


    <script>
        $(document).ready(function() {
            function close_accordion_section() {
                $('.accordion .accordion-section-title').removeClass('active');
                $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }

            $('.accordion-section-title').click(function(e) {
                // Grab current anchor value
                var currentAttrValue = $(this).attr('href');

                if ($(e.target).is('.active')) {
                    close_accordion_section();
                } else {
                    close_accordion_section();

                    // Add active class to section title
                    $(this).addClass('active');
                    // Open up the hidden content panel
                    $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
                }

                e.preventDefault();
            });
        });
    </script>
<?php include 'footer-new.php'; ?>