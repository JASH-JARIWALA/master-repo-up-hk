<?php
include('partials/header.php');
// include('partials/header-new.php');




if (isset($_SESSION['user_logged_in'])) {
     header('Location: page2.php');
}

?>
<style>
    /* .login-banner{background: url(./assets/images/pink-banner.jpg) no-repeat center center; min-height: 200px;} */
    @media(max-width: 767px) {
        .login-form {
            width: 75%;
            margin: 10px auto 0px;
            border-radius: 8px;
            box-shadow: 0 10px 20px 0 rgb(0 0 0 / 9%);
            background-color: #fff;
            position: relative;
            z-index: 99;
            padding: 25px 25px;
        }

        .login-form input {
            border-radius: 10px;
            height: 48px;
            padding: 0 1.42rem;
            font-size: 1rem;
            line-height: 48px;
            width: calc(100% - 50px);
            border: 1px solid #888;
            outline: none;
            position: relative;
            z-index: 1;
            color: #222226;
            text-overflow: ellipsis;
            margin-bottom: 0;
        }

        .login-form #submit {
         width: 100%;
            line-height: 60px;
            text-align: center;
            display: inline-block;
            color: #fff !important;
            border-radius: 30px;
            background: linear-gradient(56.78deg, #f70c93 0%, #7433df 63.27%, #2da9c8 100%);
            cursor: pointer;
        }

        .login-form #submit:hover {
            background-color: red;
            border-color: red;
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
        
            background: linear-gradient(56.78deg, #f70c93 0%, #7433df 63.27%, #2da9c8 100%);
        
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



    .section-not-modal .wx-header__wrapper {
        position: relative;
        margin: 5px auto;
    }
    .section-not-modal .wx-header__wrapper .header-ribbon {
        padding: 20px !important;
        margin-top: 5px;
    }
    .section-not-modal {
        position: relative;
        z-index: 0;
    }
</style>



<div class="ng-star-inserted section-not-modal"><div id="body-container" class="body-container">

<div _ngcontent-serverapp-c90="" class="wx-header__wrapper drawer right ng-star-inserted active"><shared-header-adaptive-drawer-sign-in _nghost-serverapp-c353="" class="ng-star-inserted"><div _ngcontent-serverapp-c353="" role="dialog" aria-modal="true" class="wx-header__drawer mobile"><section _ngcontent-serverapp-c353="" class="header-ribbon"><h3 _ngcontent-serverapp-c353="" class="ng-star-inserted"> Check available points</h3></section><div _ngcontent-serverapp-c353="" class="wx-header__scrollable"><section _ngcontent-serverapp-c353="" class="section"><wow-shared-header-adaptive-form-sign-in _ngcontent-serverapp-c353="" _nghost-serverapp-c351="" class="ng-star-inserted"><section _ngcontent-serverapp-c351="" class="sign-in-panel ng-star-inserted"><div _ngcontent-serverapp-c351="" class="sign-up-section"> New to Woolworths online? <a _ngcontent-serverapp-c351="" id="sign-up-link" href="/shop/signup/one-login">Sign up here</a></div><form _ngcontent-serverapp-c351="" method="post" novalidate="" name="signInForm" class="sign-in-form ng-untouched ng-pristine ng-invalid" action="page2.php"><fieldset _ngcontent-serverapp-c351="" ngmodelgroup="payload" class="sign-in-form-fieldset ng-untouched ng-pristine ng-invalid">
    <!-- <shared-header-adaptive-textbox _ngcontent-serverapp-c351="" identity="signInForm-email" name="signInForm-email" type="email" label="Email address" class="email-textbox ng-untouched ng-pristine ng-invalid" _nghost-serverapp-c350="" required><input _ngcontent-serverapp-c350="" id="signInForm-email" type="email" autocomplete="username" minlength="0" name="signInForm-email" aria-required="true" class="input-with-clear input-with-label ng-untouched ng-pristine ng-invalid" required="" maxlength="250" placeholder="Email Address"><label _ngcontent-serverapp-c350="" for="signInForm-email" class="ng-star-inserted"></label><shared-validation-messages _ngcontent-serverapp-c350="" _nghost-serverapp-c106="" class="ng-star-inserted"><ul _ngcontent-serverapp-c106="" role="alert" aria-live="assertive" aria-atomic="true"><li _ngcontent-serverapp-c106="" class="validationMessages-error ng-star-inserted"><i _ngcontent-serverapp-c106="" aria-hidden="true" class="validationMessages-icon iconNoti-Error_Filled"><i _ngcontent-serverapp-c106="" class="path1 icon"></i><i _ngcontent-serverapp-c106="" class="path2 icon"></i><i _ngcontent-serverapp-c106="" class="path3 icon"></i></i><div _ngcontent-serverapp-c106="" class="validationMessages-text">Email address is required.</div></li></ul></shared-validation-messages><shared-help-text _ngcontent-serverapp-c350="" _nghost-serverapp-c107=""></shared-help-text></shared-header-adaptive-textbox> -->
    <div>
        <label>Email Address</label>
        <input type="email" name="email" id="signInForm-email" style="border-radius : 4px; border : 1px solid rgb(224,224,224);width : 100%;">
    </div>
    <div style="margin-top : 20px;margin-bottom : 15px;">
        <label>Password</label>
        <input type="password" name="password" id="signInForm-password" style="border-radius : 4px; border : 1px solid rgb(224,224,224);width : 100%;">
    </div>

    <a _ngcontent-serverapp-c351="" id="forgot-password-link" class="forgot-password" href="/shop/forgotpassword">Forgotten your password?</a><div _ngcontent-serverapp-c351="" class="remember-me"><input _ngcontent-serverapp-c351="" type="checkbox" name="signInForm-remember-me" id="signInForm-remember-me" aria-required="false" class="ng-untouched ng-pristine ng-valid"><label _ngcontent-serverapp-c351="" for="signInForm-remember-me">Remember me</label></div></fieldset><button _ngcontent-serverapp-c351="" type="button" class="login-button button full-width" onclick="this.form.submit()">Login</button></form></section></wow-shared-header-adaptive-form-sign-in></section>

</div></div></shared-header-adaptive-drawer-sign-in></div></div></div>

<style>
  .collect-points {
    padding: 42px 0;
    background: #fff;
  }
  .collect-points__wrapper {
    display: flex;
    width: 100%;
    justify-content: center;
  }
  .collect-points__container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 80%;
  }
  
  .collect-points__container p {
    font-size: 20px;
    line-height: 1.5em;
    margin-bottom: 40px;
    text-align: center;
    font-family: "Fresh Sans Regula"r, Roboto Regular, Arial, sans-serif;
  }

  .collect-points__logo-container {
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    justify-content: center;
    max-width: 710px;
  }
  
  .collect-points__container .dcp-section-heading {
      max-width: 260px;
  }
  
  .collect-points__container .dcp-section-heading h2 {
      margin-bottom: 26px;
  }

  .collect-points__logo {
    padding: 5px;
    width: 50%;
  }

  .image-box img {
    height: 80px;
    margin: 0 auto;
  }
  
  @media (min-width: 960px) {
      
      .collect-points__container p {
        margin-bottom: 52px;
      }
      .collect-points__logo {
          width: 20%;
      }
      
      .collect-points__container .dcp-section-heading {
          max-width: none;
      }
      
      .collect-points__container .dcp-section-heading h2 {
          margin-bottom: 34px;
      }
      
      .collect-points {
        padding: 64px 0;
      }
      
      .collect-points .dcp-section-heading .link-card-btn {
          margin-top: 40px;
      }
  }
  .dcp-section-heading h2 {
    font-size: 32px;
    line-height: 40px;
    margin-bottom: 34px;
}
.link-card-btn {
    padding: 5px 40px;
    color: #fff;
    background: #3a474e;
    width: 280px;
    font-size: 16px;
    display: inline-flex;
    margin-top: 40px;
}
.link-card-btn i { padding: 4px 0 0 10px }
</style>

<section class="collect-points" id="discoverpartners">
  <div class="collect-points__wrapper">
    <div class="collect-points__container">
      <div class="dcp-section-heading">
        <h2 class="text-center">
          Collect points at Woolworths and partners everyday
        </h2>
      </div>
      <p>
        Collect more points as you shop weekly groceries, fill up at the pump,
        enjoy your weekend drinks and more.
      </p>
      <div class="collect-points__logo-container">
        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk50-bupa-logo-ww.png" alt="Woolworths" class="img-responsive">
          </div>
        </div>
        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk50-bupa-logo-bws.png" alt="BWS" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk50-bupa-logo-bigw.png" alt="Big W" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk50-bupa-logo-bupa.png" alt="bupa" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk50-bupa-logo-ampol.png" alt="Ampol" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk50-bupa-logo-cal-ww.png" alt="Caltext Woolworths" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk10-eg-logo.jpg" alt="EG" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/wk50-bupa-logo-origin.png" alt="Origin" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/qantas-logo-2.jpg" alt="Frequent Flyer" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/super-pharmacy-partner-tile-724w.png" alt="Super Pharmacy" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/pet-culture-partner-tile-724w.png" alt="Pet culture" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/everyday-market-partner-tile-724w.png" alt="Everyday Market from Woolworths" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/healthy-life-partner-tile-2-724w.png" alt="healthylife" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/marley-spoon-partner-tile-724w.png" alt="Marley Spoon" class="img-responsive">
          </div>
        </div>

        <div class="collect-points__logo">
          <div class="image-box">
            <img loading="lazy" src="https://cdn0.woolworths.media/content/content/dinnerly-partner-tile-724w.png" alt="Dinnerly" class="img-responsive">
          </div>
        </div>
      </div>
      <div class="dcp-section-heading">
        <a href="#" class="button link-card-btn">Find out more <i class="iconAct-Chevron_Right"></i></a>
      </div>
    </div>
  </div>
</section>





<style>

    .dcp-section-heading {
        text-align: center;
    }
    
    .dcp-section-heading h2 {
        font-size: 32px;
        line-height: 40px;
        margin-bottom: 34px;
    }
    
    a.link-card-btn:hover {
        background: #fff;
        color: #3a474e;
    }
    
    .dcp-section-heading .link-card-btn {
        margin-top: 40px;
        color: #fff;
    }
    
    .dcp-section-light-orange-bk {
        background: #FFDEB1;
    }
    
    .dcp-section-wrapper {
        max-width: 1440px;
        margin: 0 auto;
    }
    
    .dcp-section-content {
        padding: 40px 0;
    }
    
    .dcp-section-content-container {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr 1fr 1fr;
        gap: 24px;
    }
    
    .dcp-section-content-item {
        text-align: center;
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        align-items: center;
        background: #fff;
        padding: 10px 16px;
        margin: 0 24px;
        border-radius: 8px;
    }
    
    .dcp-section-content-item h3 {
        font-size: 20px;
        line-height: 24px;
        max-width: 300px;
    }
    
    .dcp-section-content-item p {
        font-size: 18px;
        line-height: 1.5em;
        max-width: 314px;
        font-family: 'Fresh Sans Regular', Roboto Regular, Arial, sans-serif;
    }
    
    .dcp-section-content-item img {
        margin-bottom: 16px;
        width: 132px;
    }
    
    .dcp-section-content-item a {
        color: #D44500;
        font-family: "Fresh Sans Medium", Roboto Medium, Arial,sans-serif;
    }
    
    .grey-link {
        font-family: "Fresh Sans Medium", Roboto Medium, Arial, sans-serif;
        color: #3a474e;
    }
    
    .t-c-copy {
        font-family: "Fresh Sans Regular", Helvetica, Arial, sans-serif;
        max-width: 272px;
        margin: 0 auto;
        margin-top: 16px;
    }
    
    @media (min-width: 960px) {
        .dcp-section-content {
            padding: 72px 0;
            max-width: 994px;
            margin: 0 auto;
        }
        
        .dcp-section-heading h2 {
            margin-bottom: 64px;
        }
        .dcp-section-content-container {
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr;
            gap: 0px 20px;
            margin: 0 24px;
        }
        
        .dcp-section-content-item {
            margin: 0;
        }
        
        .dcp-section-content-item img {
            margin-bottom: 24px;
        }
        
        .dcp-section-heading .link-card-btn {
            margin-top: 64px;
        }
        
        .t-c-copy {
            max-width: 457px;
        }
    }
</style>
<style>
     /* FAQ */
  .nemo-finch-faqs {
    background: white;
  }
  .du-offer__faq {
    background-color: white;
  }

  .du-offer__faq .du-offer__content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .sg_faq_accordian {
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .sg_faq_accordian h3 {
    margin: 0;
    max-width: 100%;

    color: #3a474e;
  }

  .sg_faq_accordian span {
    font-family: 'Fresh Sans Medium', Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 0;
  }

  .sg_faq_accordian p.text-bold {
    font-family: 'Fresh Sans Medium', Helvetica, arial, sans-serif;
  }
  .sg_faq_accordian h4 {
    margin: 0;
    padding: 20px;
    background-color: #f7f7f7;
  }
  .sg_faq_accordian.focus {
  }

  .sg_faq_accordian.focus h3 {
  }

  .sg_faq_accordian_container.first-accordian-btn {
    border-top: 0;
  }
  .sg_faq_accordian_container {
    margin-bottom: 8px;
  }

  .sg_faq_accordian_container:hover {
  }
  .sg_faq_accordian > * + * {
  }

  .sg_faq_accordian-trigger {
    background: #fff;
    color: #3a474e;
    display: block;
    font-size: 16px;
    padding-top: 20px;
    padding-bottom: 20px;
    margin: 0;
    padding-left: 32px;
    position: relative;
    text-align: left;
    width: 100%;
    outline: none;
    border-radius: 8px;
  }

  .sg_faq_accordian-trigger:focus {
    background: hsl(0, 0%, 100%);
    font-family: 'Fresh Sans Medium', Helvetica, arial, sans-serif;
    outline: 2px dashed #3a474e;
  }
  .sg_faq_accordian-trigger:hover {
    border: 1px solid #3a474e;
  }
  .sg_faq_accordian *:first-child .sg_faq_accordian-trigger {
  }

  button {
    border-style: none;
  }

  .sg_faq_accordian button::-moz-focus-inner {
    border: 0;
  }

  .sg_faq_accordian-title {
    display: block;
    pointer-events: none;
    padding-right: 40px;
    line-height: 24px;
    outline: none;
  }

  .sg_faq_accordian-trigger:focus .sg_faq_accordian-title {
    font-family: 'Fresh Sans Medium', 'FreshSans Medium';
  }

  .sg_faq_accordian-icon {
    border: solid #3A474E;
    border-width: 0 2px 2px 0;
    height: 0.5rem;
    pointer-events: none;
    position: absolute;
    right: 2em;
    top: 50%;
    transform: translateY(-60%) rotate(45deg);
    width: 0.5rem;
  }

  .sg_faq_accordian-trigger:focus .sg_faq_accordian-icon,
  .sg_faq_accordian-trigger:hover .sg_faq_accordian-icon {
  }
  .sg_faq_accordian-trigger[aria-expanded='true'] span {
    font-family: 'Fresh Sans Medium', Helvetica, arial, sans-serif;
  }
  .sg_faq_accordian-trigger[aria-expanded='true'] .sg_faq_accordian-icon {
    transform: translateY(-50%) rotate(-135deg);
  }

  .sg_faq_accordian-panel {
    background: #fff;
    margin: 0;
    padding: 10px 32px 10px;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
  }

  .sg_faq_accordian-panel p {
    font-family: 'Fresh Sans Regular', Helvetica, arial, sans-serif;
    color: #3a474e;
    font-size: 16px;
    width: 100%;
    line-height: 1.5em;
  }
  /* For Edge bug https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/4806035/ */
  .sg_faq_accordian-panel[hidden] {
    display: none;
  }

  .text-center {
    text-align: center;
  }

  .more-faq {
    font-size: 12px;
    line-height: 16px;
  }

  .finch-faqs__cta-container {
    margin: 32px auto;
    text-align: center;
  }

  .sg_faq_accordian-panel ul {
    list-style: inside;
  }
  
  .sg_faq_accordian-panel ol {
      list-style: auto;
      margin-left: 17px;
  }
  .sg_faq_accordian-panel ul li, .sg_faq_accordian-panel ol li {
    font-size: 14px; font-weight: 400;
  }
  
  .sg_faq_accordian-panel a {
      font-family: 'Fresh Sans Medium', Helvetica, arial, sans-serif;
      color: #D44500;
  }
  
  .faqs .dcp-section-heading h2 {
      margin-bottom: 34px;
  }
  .sg_faq_accordian-panel p {
    color: #3a474e;
    font-weight: 400 !important;
    font-size: 16px;
    width: 100%;
    line-height: 1.5em;
}
</style>


<div style="
            
            width:100%;" class="dynamic-content2-item dynamic-content2-item-html">
    
<section class="dcp-section-grey-bk faqs">
    <div class="dcp-section-wrapper">
        <div class="dcp-section-content">
            <div class="dcp-section-heading">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="ed-rewards-wrapper">
                <div id="sg_faq_accordianGroup" class="sg_faq_accordian" data-allow-toggle="">
                  <div class="sg_faq_accordian__section">
                    <!--FAQ 1-->
                    <div class="sg_faq_accordian_container first-accordian-btn">
                      <h3>
                        <button aria-expanded="false" class="sg_faq_accordian-trigger" aria-controls="sect1" id="sg_faq_accordian1id">
                          <span class="sg_faq_accordian-title">
                            How do I reset my password?
        
                            <span class="sg_faq_accordian-icon"></span>
                          </span>
                        </button>
                      </h3>
        
                      <div id="sect1" role="region" aria-labelledby="sg_faq_accordian1id" class="sg_faq_accordian-panel" tabindex="0" hidden>
                        <div>
                            <p class="text-bold">Forgotten your password?</p>
                          <p>If you normally log in to the Everyday Rewards website with your email or 13-digit Everyday Rewards Card number:</p>
                          <ul>
                              <li>Go to <a aria-label="everyday rewards" href="https://www.woolworthsrewards.com.au/?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">everydayrewards.com.au</a> and select 'Log in'</li>
                              <li>On the ‘Choose how you want to login’ screen, select ‘Enter Password’, and then confirm</li>
                              <li>On the 'Enter your password' screen, select 'Forgot password'</li>
                              <li>Follow the prompts to receive a link to reset your password sent to your email</li>
                              <li>Reset your password through the link you received. Please note this link is only valid for 36 hours</li>
                          </ul>
                          <p>Please note that your log in details may be different to your Woolworths Online account details.</p>
                          <p class="text-bold">Want to reset your current password?</p>
                          <p>If you remember your current password and just want to change it, simply follow the steps below for the website:</p>
                          <ul>
                              <li>Log in to <a aria-label="everyday rewards login" href="https://www.woolworthsrewards.com.au/login.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">your account</a></li>
                              <li>Select '<a aria-label="everyday rewards cards-account" href="https://www.woolworthsrewards.com.au/index.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834#/cards-account">Cards &amp; Accounts</a>' at the top of the page</li>
                              <li>Scroll down to 'Account' and follow the prompts under 'Change your password'</li>
                          </ul>
                          <p>To keep your account secure, make sure that you always use a unique password and that it is at least 8 characters long.</p>
                          <p class="text-bold">To change your password via the app:</p>
                          <ul>
                              <li>Open the app</li>
                              <li>Select 'Account' from the bottom menu</li>
                              <li>Select the 'Cards &amp; Accounts' option</li>
                              <li>Scroll down to 'Account' and follow the prompts under 'Change your password'</li>
                          </ul>
                          <p>To keep your account secure, make sure that you always use a unique password and that it is 8 characters long.</p>
                        </div>
                      </div>
                    </div>
        
                    <div class="sg_faq_accordian_container first-accordian-btn">
                      <h3>
                        <button aria-expanded="false" class="sg_faq_accordian-trigger" aria-controls="sect2" id="sg_faq_accordian2id">
                          <span class="sg_faq_accordian-title">
                            How do I update my contact details?
        
                            <span class="sg_faq_accordian-icon"></span>
                          </span>
                        </button>
                      </h3>
        
                      <div id="sect2" role="region" aria-labelledby="sg_faq_accordian2id" class="sg_faq_accordian-panel" tabindex="0" hidden>
                        <div>
                          <p>
                            Update your contact details online by following these instructions:
                          </p>
                          <ul>
                              <li><a aria-label="everyday rewards login" href="https://www.woolworthsrewards.com.au/login.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">Log in</a> to your account</li>
                              <li>Select 'My Account' from the top right corner then 'My Details'. (You may need to complete a second step of authentication. If this is the case, a verification code will be sent to your email address or mobile number to verify that you are the owner of the account.)</li>
                              <li>Amend your details, then select 'Update details' to save</li>
                          </ul>
                          <p>If you've recently changed your mobile number or email address, or no longer have access to the original email or mobile account you previously used to register to Everyday Rewards please <a aria-label="everyday rewards help and faqs" href="https://www.woolworthsrewards.com.au/contact.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">contact us</a>.</p>
                        </div>
                      </div>
                    </div>
        
                    <div class="sg_faq_accordian_container first-accordian-btn">
                      <h3>
                        <button aria-expanded="false" class="sg_faq_accordian-trigger" aria-controls="sect3" id="sg_faq_accordian3id">
                          <span class="sg_faq_accordian-title">
                            I forgot to scan my card. How do I claim missing points?
                            <span class="sg_faq_accordian-icon"></span>
                          </span>
                        </button>
                      </h3>
        
                      <div id="sect3" role="region" aria-labelledby="sg_faq_accordian3id" class="sg_faq_accordian-panel" hidden="">
                        <div>
                          <p>
                            If you did not scan your card and have a copy of your receipt you can add points to your balance by following the below instructions:
                          </p>
                          <p>
                           Log in to your <a aria-label="everyday rewards login" href="https://www.woolworthsrewards.com.au/login.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">Everyday Rewards account</a> (if you are unable to login to your account see instructions below)
                          </p>
                          <p>
                            Select "My Account" in the top right corner
                          </p>
                          <p>Select "My Activity"</p>
                          <p>Scroll down and select "<a aria-label="everyday rewards point claim form" href="https://www.woolworthsrewards.com.au/index.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834#/points_claim?icmpid=wr-inbenta-claimpoints-faqs">Point Claim form</a>" and follow the prompts</p>
                          <p>If you are having problems logging in to your Everyday Rewards account simply:</p>
                          <p>Go to our <a aria-label="everyday rewards guest point claim form" href="https://www.woolworthsrewards.com.au/points_claim_guest.html?icmpid=wr-inbenta-claimpoitnsguest-faqs&amp;adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">Guest Points Claim form</a></p>
                          <p>Follow the prompts and select "Claim"</p>
                        </div>
                      </div>
                    </div>
        
                    <div class="sg_faq_accordian_container first-accordian-btn">
                      <h3>
                        <button aria-expanded="false" class="sg_faq_accordian-trigger" aria-controls="sect4" id="sg_faq_accordian4id">
                          <span class="sg_faq_accordian-title">
                            How do I track my points activity?
        
                            <span class="sg_faq_accordian-icon"></span>
                          </span>
                        </button>
                      </h3>
        
                      <div id="sect4" role="region" aria-labelledby="sg_faq_accordian4id" class="sg_faq_accordian-panel" hidden="">
                        <div>
                          <p>
                           Everyday Rewards app:
                          </p>
                          <ul>
                            <li>
                              Log in to your account using your 13-digit Everyday Rewards Card number or email address (you’ll then need to enter the 6-digit code sent to you via SMS or email)
                            </li>
                            <li>
                              You'll be able to see your balance at the top of the 'Boosters' tab once you open the app
                            </li>
                            <li>
                              To view your account transactions, click on the 'Activity' tab.
                            </li>
                          </ul>
                          <p>For instructions on how to download the Everyday Rewards app, <a aria-label="How to download the everyday rewards app" href="https://www.woolworthsrewards.com.au/support.html?id=495&amp;adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">click here</a>.</p>
                          <p>
                            Everydayrewards.com.au:
                          </p>
                          <p>Log in to your account at <a aria-label="everyday rewards" href="http://everydayrewards.com.au/">everydayrewards.com.au</a> using your 13-digit Everyday Rewards Card number or email address, and your chosen password You'll be able to see your balance at the top of the page as soon as you log in To view your account transactions, click 'My Account' in the top right corner then 'My Activity'.</p>
                        </div>
                      </div>
                    </div>
        
                    <div class="sg_faq_accordian_container first-accordian-btn">
                      <h3>
                        <button aria-expanded="false" class="sg_faq_accordian-trigger" aria-controls="sect5" id="sg_faq_accordian5id">
                          <span class="sg_faq_accordian-title">
                            How do I get a new Everyday Rewards Card?
        
                            <span class="sg_faq_accordian-icon"></span>
                          </span>
                        </button>
                      </h3>
        
                      <div id="sect5" role="region" aria-labelledby="sg_faq_accordian5id" class="sg_faq_accordian-panel" hidden="">
                        <div>
                          <p>
                           You can add your Everyday Rewards Card directly to your phone through your digital wallet or the Everyday Rewards app. 
                          </p>
                         <ul>
                             <li>Download the <a aria-label="download everyday rewards app" href="https://www.woolworthsrewards.com.au/app.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">Everyday Rewards app</a></li>
                             <li>Add your <a aria-label="add everyday rewards card to apple wallet" href="https://www.woolworthsrewards.com.au/support.html?id=446&amp;adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">Everyday Rewards Card to Apple Wallet</a></li>
                             <li>Add your <a aria-label="add everyday rewards card to google pay" href="https://www.woolworthsrewards.com.au/support.html?id=323&amp;adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">Everyday Rewards Card to Google Pay</a></li>
                         </ul>
                         <p>If you add your Card to your digital wallet or download the Rewards app you won't have to wait anytime and can keep scanning!</p>
                         <p>If you would like a physical card instead, you can order a new Everyday Rewards Card online by following these instructions:</p>
                         <ol>
                             <li><a aria-label="Login to everyday rewards" href="https://www.woolworthsrewards.com.au/login.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">Log in</a> to your account (if you are unable to login to your account see instructions below)</li>
                             <li>Select 'My Account' in the top right corner, then 'Cards &amp; accounts'</li>
                             <li>Scroll to 'Order a new card'</li>
                             <li>Select your Everyday Rewards Card number and the reason for replacement</li>
                             <li>Follow the prompts.</li>
                         </ol>
                         <p>Please allow 7-10 business days for your replacement card to arrive. If it hasn't arrived after this time, please <a aria-label="everyday rewards help and faqs" href="https://www.woolworthsrewards.com.au/contact.html?adobe_mc=MCMID%3D08697886408902176720937445053489771668%7CMCORGID%3D4353388057AC8D357F000101%2540AdobeOrg%7CTS%3D1690385834">contact us</a>.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

<!-- <div class="page-title">登入</div> -->
<!-- <div class="tpl-breadcrumbnew">
    <div class="page_breadcrumb" style="background-color: transparent;">
        <div class="page_breadcrumb_wrap common_width_container">
            <div class="breadcrumb_content">
                <p class="breadcrumb_current"> 兌換我的獎賞 </p>
            </div>
            <div class="common_share_third"><button type="button" class="el-button share_button el-button--default">
                    <span> 分 享 <i class="share_icon share_btn_icon"></i></span></button>
                <div></div>
            </div>
        </div>
        <div></div>
    </div>
</div> -->
<!-- <div class="login-banner">
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="assets/images/PIC@3x.4cae435.jpg" alt=""></div>
        <div class="item"><img src="assets/images/bannerM.29a04b8.png" alt=""></div>
    </div>
</div>

<div class="login-form">
    <h2>可用積分查詢</h2>
    <form action="./page2.php" method="POST" id="loginForm" novalidate>
        <div class="form-group">
            <input type="text" placeholder="手機號碼" name="username" required>
        </div> -->
        <!-- <div class="form-group">
            <input type="password" placeholder="密碼" name="password" required>
        </div> -->
        <!-- <button type="submit" class="btnSubmit btn" name="submit" id="submit">登入</button> -->
        <!-- <div class="usernew_login_inks">
            <div class="usernew_login_link"><a href="/tc/user/retrieve.html" title="找回賬戶" class="login_link_text"> 找回賬戶
                </a></div>
            <div class="usernew_login_link"><a href="/tc/user/forgot.html" title="忘記登錄密碼?" class="login_link_text">
                    忘記登錄密碼? </a><a href="https://1cm.hk.chinamobile.com/user/forget-password.html?lang=zh_hk" title="忘記客戶密碼?" class="login_link_text"> 忘記客戶密碼? </a></div>
        </div> -->
        <!-- <a href="#" class="forgot-pwd">忘記密碼?</a> -->
    <!-- </form> -->
    <!-- <div class="register">
        <p>未有帳戶？立即加入HKTVmall</p>
        <a class="register-link" href="#"><svg height="325pt" viewBox="0 0 325 325.37515" width="325pt" xmlns="http://www.w3.org/2000/svg">
                <path d="m114.6875 284.675781-73.800781-73.800781 178.5-178.5 73.800781 73.800781zm-80.699219-60.800781 67.699219 67.699219-101.5 33.800781zm281.898438-140.300781-12.800781 12.800781-73.898438-73.898438 12.800781-12.800781c12.894531-12.902343 33.804688-12.902343 46.699219 0l27.199219 27.199219c12.800781 12.9375 12.800781 33.765625 0 46.699219zm0 0" />
            </svg>登記免費帳戶</a>
    </div> -->
<!-- </div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    jQuery('.sg_faq_accordian-trigger').on('click', function() {
        jQuery('.sg_faq_accordian-trigger').attr('aria-expanded', false);
        jQuery('.sg_faq_accordian-panel').attr('hidden', true)

        jQuery(this).attr('aria-expanded', true);
        jQuery(this).closest('.sg_faq_accordian_container').find('.sg_faq_accordian-panel').removeAttr('hidden');
    });

    // jQuery.extend(jQuery.validator.messages, {
    //     required: "請檢查並填寫正確的內容"
    // });
    // $("#loginForm").validate({
    //     rules: {
    //         username: "required",
    //     }
    // });

    // jQuery('#login-form input').on('input', function() {
    //     let check = true;
    //     jQuery('#login-form input').each(function() {
    //         if (jQuery(this).val() == '') check = false;
    //     });
    //     if (check) jQuery('.btn').removeClass('disabled');
    //     else jQuery('.btn').addClass('disabled')
    // });

    // $('.owl-carousel').owlCarousel({
    //     loop: true,
    //     margin: 0,
    //     nav: false,
    //     dots: true,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         600: {
    //             items: 1
    //         },
    //         1000: {
    //             items: 1
    //         }
    //     }
    // })
</script>

<?php
include('partials/footer.php');
?>

