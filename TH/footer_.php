<style>
    footer {
        background: #f33 none repeat scroll 0% 0%;
        position: sticky;
        top: 100%;
    }

    .footer_icon_text {
        padding: 7px 0px 20px;
        position: relative;
    }

    .btn_icon {
        padding: 0 15px;
    }

    .f_btn {
        padding: 10px 10px;
        margin: 0;
        display: inline-block;
        border-radius: 5px;
        border: 2px solid #fff;
        background-color: transparent;
        color: white;
        width: 100%;
        text-align: left;
        font-weight: 700;
    }

    i.fa-solid.fa-pen {
        font-size: 17px;
        padding: 0 8px 0 3px;
        vertical-align: middle;
    }

    .postal_icon {
        display: flex;
        padding: 8px;
    }

    .postal_img {
        width: 23px;
        height: 23px;
        padding: 0 4px;
        filter: grayscale(100%);
    }

    .copy_right {
        padding: 0 15px;
        display: flex;
    }

    .policy_text {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: -6px;
    }

    .policy_text li a {
        font-size: 14px;
        color: white;
        margin: 2px 0;
    }

    .policy_text li {
        border-right: 2px solid white;
        padding: 1px 5px;
    }

    .policy_text li:last-child {
        border: 0;
    }

    .information {
        padding: 15px 15px;
        display: flex;
        justify-content: end;
    }

    .services_contact {
        padding: 0 5px;
    }

    .services_text {
        font-size: 16px;
        color: #fff;
        font-weight: 700;
        letter-spacing: 1px;
        padding: 0 0 7px 0;
    }

    .contact_text {
        font-size: 12px;
        color: white;
        font-weight: 700;
    }

    .count_text {
        font-size: 20px;
        font-weight: 400;
        color: #fff;
    }

    .information_center {
        display: flex;
        justify-content: end;
    }

    .information_center p {
        margin: 31px 5px 0px;
        font-size: 14px;
        font-weight: 700;
        color: white;
    }

    .ginfo {
        width: 100px;
        margin: 25px 5px 0px;
        background-color: rgb(4, 25, 83);
    }
</style>
<footer>
    <div class="footer_icon_text">
        <div class="btn_icon">
            <button class="f_btn"><i class="fa-solid fa-pen"></i>สำหรับพนักงานไปรษณีย์</button>
            <div class="postal_icon">
                <a href="https://line.me/en/"><img class="postal_img" src="<?php echo $folder_path;?>/assets/images/img/line_icon.webp" alt="img"></a>
                <a href="https://www.instagram.com/"><img class="postal_img" src="<?php echo $folder_path;?>/assets/images/img/instagram_icon.webp"
                        alt="img"></a>
                <a href="https://www.facebook.com/"><img class="postal_img" src="<?php echo $folder_path;?>/assets/images/img/facebook_icon.webp"
                        alt="img"></a>
                <a href="https://twitter.com/i/flow/login"><img class="postal_img" src="<?php echo $folder_path;?>/assets/images/img/twitter_icon.webp"
                        alt="img"></a>
                <a href="https://www.youtube.com/"><img class="postal_img" src="<?php echo $folder_path;?>/assets/images/img/youtube_icon.webp"
                        alt="img"></a>
            </div>
            <div class="copy_right">
                <img src="<?php echo $folder_path;?>/assets/images/img/copy_right_img.jpg" alt="">
                <div class="policy_text">
                    <li>
                        <a href="">ตัวช่วยการเข้าถึงเว็บไซต์</a>
                    </li>
                    <li>
                        <a href="">ส่งของ</a>
                    </li>
                    <li>
                        <a href="">EMS</a>
                    </li>
                    <li>
                        <a href="">คำถามที่พบบ่อย</a>
                    </li>
                    <li>
                        <a href="">นโยบายส่วนบุคคล</a>
                    </li>
                </div>
            </div>
        </div>

        <div class="information">
            <img src="<?php echo $folder_path;?>/assets/images/img/ipv6_img.png" alt="">
            <div class="services_contact">
                <p class="services_text">สอบถามข้อมูลและบริการ</p>
                <p class="contact_text">THP CONTACT CENTER <span class="count_text">1545</span></p>
            </div>
        </div>
        <div class="information_center">
            <p>ศูนย์ข้อมูลข่าวสาร</p>
            <img class="ginfo" src="<?php echo $folder_path;?>/assets/images/img/ginfo_img.webp" alt="">
        </div>
    </div>
</footer>
