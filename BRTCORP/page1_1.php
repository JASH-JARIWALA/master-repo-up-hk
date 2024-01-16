<?php
session_start();
// require_once 'config.php';
//include('partials/header.php');
include('header_.php');
?>

<div>
    <div style="padding: 10px; margin: 10px 0px">
        <div style="font-size: 24px; font-weight: 700;">您的網速已暫時受限</div>
        <div style="">根據2024年香港寬頻最新條款及政策，客戶應在規定時間內完成客戶的個人身份認證，香港寬頻保留毋須通知而暫停或終止提供該服務的所有或任何服務的權利。</div>
    </div>
    <div  style="position: relative; margin: 10px; padding: 10px; border: 1px solid #00508b; display:flex; flex-direction: column; gap: 10px; font-weight: 500; font-size: 15px;">

        <div style="display: flex; justify-content: space-between;">
            <div style="display: flex; align-items: end;">
                <img src="<?php echo $folder_path;?>/images/Screenshot 2024-01-04 at 11.59.39 PM.png" style="height: 25px; margin-right: 10px;" alt="">
                <span style="color: #00508b; font-size: 20px;">極速王</span>
                <span>光纖寬頻</span>
            </div>
            <div>
                <span style="color: #00508b; font-weight: 700;">1</span> <span style="color: #b3b3b3;">/ 2</span>
            </div>
        </div>

        <div class="grid grid-rows-12 grid-flow-col gap-4">

          
          <div class="col-span-3 ">
                <div>服務地址</div>
                <div>香港</div>
                <div style="margin-top: 30px;">服務</div>
                <div style="color: #00508b;">寬頻上網</div>
                <div style=" margin-top: 20px; width: fit-content; padding: 20px; border: 1px solid gray; border-radius: 10px; text-align: center;">
                    <div>頻寬</div>
                    <div style="font-size: 20px; font-weight: 900;color: #00508b;"> <s> 1000M</s></div>
                    <div style="font-size: 20px; font-weight: 900;color: red">300M</div>
                </div>

          </div>

          <div class="col-span-5 ">
            <p style="display: none;" id="button_message">狀態：未認證
由於您還未進行身份認證，您的頻寬當前暫時限制速度爲300M，請儘快完成認證，認證完成後將在2小時內會自動恢復，感謝您的配合</p>
              
          </div>
         
        </div>



        
        <div style="margin-top: 20px; display:flex; justify-content: space-between; padding: 0px 20px;">
            <a href="page2.php"><button style=" padding: 10px 25px; width: 150px; border-radius: 5px; background-color: #F26F21; color: white">立即認證</button></a>
            <button style="padding: 10px 25px; width: 150px; border-radius: 5px; border: 1px solid #00508b; color: #00508b;" onclick="prompt_meesage_s();">詳情</button>
        </div>
        <!-- <img src="images/left-arrow-svgrepo-com.svg" style="height: 25px; position: absolute; top: 49%;" alt="">
        <img src="images/left-arrow-svgrepo-com.svg" style="height: 25px; position: absolute; top: 49%; right: 10px; rotate: 180deg;" alt=""> -->
    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    function prompt_meesage_s(){
        $("#button_message").show();
    }
</script>

<?php include('footer_.php'); ?>