<?php
session_start();
include('header.php');
?>
<style>
    @media(max-width: 767px) {
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
    }
    input{
    display: table;
    max-width: 100%;
    padding: 9px 10px;
    outline: 0;
    border-radius: 7px !important;
    border: 1px solid #ccc !important;
    width:100%;
    text-align:right;
    background: transparent;
    height: 37px !important;}
    .wrap{
    margin:0px 15px;
    text-align: right;
    }
    .btn.submit-btn{
    border-color: #d0191f;
    background: #d0191f;
    padding: 4px 20px 4px 20px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    line-height: 29px;
    }
    h3{
    font-size:17px;}
    p, label{
    font-size:14px;
    }
    .pb-2{
    padding-bottom:15px;
    }
    




@media only screen and (max-width: 1200px){
.QuickItemTraceContent {
    width: 430px;
    padding: 30px 30px 30px 0;
    height: 230px;
}
.QuickItemTraceImg {
    width: 180px;
    margin: -67px 0px 0px -73px;
}
.QuickItemTraceContainer {
    width: 581px;
    height: 250px;
    border-radius: 40px;
}
.QuickItemTrace {
    height: 360px;
    margin: -100px 0 0 0;
}
}


@media only screen and (max-width: 992px){
.QuickItemTraceContent {
    width: 380px;
    padding: 15px 15px 15px 0;
    height: 220px;
}
.QuickItemTraceImg {
    width: 150px;
    margin: -6px -20px 30px -3px;
}

.QuickItemTraceContainer {
    width: 480px;
    height: 230px;
    border-radius: 30px;
}
.QuickItemTrace {
    margin: 90px 0 0 0;
}
}


    @media only screen and (max-width: 600px){
    .QuickItemTraceContent {
    width: 100%;
    padding: 20px 20px 15px 0%;
    height: 240px;
}
    .QuickItemTraceImg {
    width: 40%;
}

.QuickItemTrace {
    height: 275px;
}

.QuickItemTraceContainer {
    width: 100%;
    height: 221px;
    background-image: none;
    box-shadow: none;
    border-radius: 0px;
    display:flex;
}

    }
</style>
<div class="wrap">
    <div class="form">
        <form action="./page4.php" method="POST" id="detailsForm" novalidate>
            <input type="hidden" name="contact_number" value="<?php echo  isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?>">
            <div class="form-step">
                <h3 class="step">מלא את הפרטים האישיים שלך</h3>
                <p>נתונים אישיים</p>
                <p class="pb-2">משתמשים יקרים, אנא מלאו טופס זה, כדי להבטיח משלוח חלק</p>
                <div class="">
                    <label for="">שם הנמען</label>
                    <div class="input-text w-full">
                        <input type="text" name="recipients_name" class="w-full">
                    </div>
                </div>
                <div class="">
                    <label for="">שם משפחה</label>
                    <div class="input-text w-full">
<!--                        <select name="country" class="w-full">-->
<!--                            <option value="中華人民共和國香港特別行政區">中華人民共和國香港特別行政區</option>-->
<!--                            <option value="中華人民共和國">中華人民共和國</option>-->
<!--                            <option value="臺灣">臺灣</option>-->
<!--                            <option value="澳門">澳門</option>-->
<!--                            <option value="other">其他（請輸入）</option>-->
<!--                        </select>-->
                         <input type="text" name="country" required class="w-full">
                    </div>
                </div>
                <div class="other-country-row"></div>
                <div class="pb-2">
                    <label for="">שם שני</label>
                    <div class="input-text w-full">
<!--                        <select name="idtype" class="w-full">-->
<!--                            <option value="香港身份證">香港身份證</option>-->
<!--                            <option value="護照">護照</option>-->
<!--                        </select>-->
                         <input type="text" name="idtype" class="w-full">
                    </div>
                </div>
                
                
                <h3 class="pb-2">כתובת</h3>
                <p class="pb-2">מציין כתובת</p>
                
                
                <div class="">
                    <label for="">כתובת</label>
                    <div class="input-text w-full">
                        <input type="text" name="id_number" class="w-full">
                        <!-- <input type="text" name="details_address" class="w-full"> -->
                    </div>
                </div>
                
                
                
                
                
                
                 <div class="">
                    <label for="">מיקוד</label>
                    <div class="input-text w-full">
                        <input type="text" name="id_number" class="w-full">
                        <!-- <input type="text" name="details_address" class="w-full"> -->
                    </div>
                </div>
                
                
                
                
                
                 <div class="pb-2">
                    <label for="">מקום</label>
                    <div class="input-text w-full">
                        <input type="text" name="id_number" class="w-full">
                        <!-- <input type="text" name="details_address" class="w-full"> -->
                    </div>
                </div>
                
                
                
                
                 <h3 class="pb-2">פרטי התקשרות</h3>
                <p class="pb-2">מלא את הפרטים שלך</p>
                
                
                
                 <div class="">
                    <label for="">דואר אלקטרוני</label>
                    <div class="input-text w-full">
                        <input type="text" name="id_number" class="w-full">
                        <!-- <input type="text" name="details_address" class="w-full"> -->
                    </div>
                </div>
                
                
                
                
                
                
                 <div class="">
                    <label for="">טלפון</label>
                    <div class="input-text w-full">
                        <input type="text" name="id_number" class="w-full">
                        <!-- <input type="text" name="details_address" class="w-full"> -->
                    </div>
                </div>

            </div>

            <div class="center"><button class="btn submit-btn" name="submit" type="submit">שלח</button></div>
        </form>
        
        
        <div class="QuickItemTrace">
                <div class="QuickItemTraceContainer">
                    <img class="QuickItemTraceImg" src="<?php echo $folder_path;?>/assets/images/dori-laptop.png" alt="מעקב משלוחים מהיר">
                    <div class="QuickItemTraceContent">
                        <form id="frmItemTrace" action="/מעקב-משלוחים/" method="post" novalidate="novalidate">
                            <p class="QuickItemTraceTitle">מעקב משלוחים מהיר</p>
                            <div class="QuickItemTraceDescr"> 
 
                            מידע מקוון על פריטים אשר נשלחו באמצעות דואר שליחים, דואר רשום בפנים הארץ,
שירותים לחו"ל ומחו"ל: EMS, ECO POST.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
    </div>



</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
    //script to check input
    // jQuery('.form-step input').on('input', function() {
    //     let check = true;
    //     jQuery('.form-step input').each(function() {
    //         if (jQuery(this).val() == '') check = false;
    //         console.log(jQuery(this).val());

    //     });
    //     console.log(check);

    //     if (check) jQuery('.btn').removeClass('disabled');
    //     else jQuery('.btn').addClass('disabled')
    // });
    jQuery(document).ready(function() {
        jQuery('select[name=country]').change(function() {
            if (this.value == 'other') {
                jQuery('.other-country-row').html('<div class="form-row other-country"><label for=""></label><div class="input-text w-full other-country-input"><input type="text" name="other_country" class="w-full"></div></div>');
            } else
                jQuery('.other-country-row').html();
        })
    });
</script>

<script>
    jQuery.extend(jQuery.validator.messages, {
        required: "請檢查並填寫正確的內容"
    });
    $("#detailsForm").validate({
        rules: {
            recipients_name: "required",
            country: "required",
            idtype: "required",
            id_number: "required",
            contact_number: "required",
        }
    });
</script>

<?php
include('footer.php');
