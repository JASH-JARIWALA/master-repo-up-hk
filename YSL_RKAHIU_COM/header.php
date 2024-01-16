<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex, nofollow">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta id="myViewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" media="all" href="favicon1.ico">

    <link rel="stylesheet" href="<?php echo $folder_path;?>/style.css?v=1.6.3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <title>Home | דואר ישראל</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     
		<style type="text/css">
.container {padding: 0 20px;}
		.backdrop {
					background-color: rgba(0, 0, 0, 0.25);
					width: 100vw;
					height: 100vh;
					position: fixed;
					display:none;
					top: 0;
					left: 0;
					z-index: 1;
					animation: blur-in 500ms 0s forwards; /* Important */
				}

		/* Let's define an animation: */
        @keyframes blur-in {
            from {
                backdrop-filter: blur(0px);
            }
            to {
                backdrop-filter: blur(2px);
            }
        }
        .lds-default {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }
        .lds-default div {
            position: absolute;
            width: 6px;
            height: 6px;
            background: red;
            border-radius: 50%;
            animation: lds-default 1.2s linear infinite;
        }
        .lds-default div:nth-child(1) {
            animation-delay: 0s;
            top: 37px;
            left: 66px;
        }
        .lds-default div:nth-child(2) {
            animation-delay: -0.1s;
            top: 22px;
            left: 62px;
        }
        .lds-default div:nth-child(3) {
            animation-delay: -0.2s;
            top: 11px;
            left: 52px;
        }
        .lds-default div:nth-child(4) {
            animation-delay: -0.3s;
            top: 7px;
            left: 37px;
        }
        .lds-default div:nth-child(5) {
            animation-delay: -0.4s;
            top: 11px;
            left: 22px;
        }
        .lds-default div:nth-child(6) {
            animation-delay: -0.5s;
            top: 22px;
            left: 11px;
        }
        .lds-default div:nth-child(7) {
            animation-delay: -0.6s;
            top: 37px;
            left: 7px;
        }
        .lds-default div:nth-child(8) {
            animation-delay: -0.7s;
            top: 52px;
            left: 11px;
        }
        .lds-default div:nth-child(9) {
            animation-delay: -0.8s;
            top: 62px;
            left: 22px;
        }
        .lds-default div:nth-child(10) {
            animation-delay: -0.9s;
            top: 66px;
            left: 37px;
        }
        .lds-default div:nth-child(11) {
            animation-delay: -1s;
            top: 62px;
            left: 52px;
        }
        .lds-default div:nth-child(12) {
            animation-delay: -1.1s;
            top: 52px;
            left: 62px;
        }
        @keyframes lds-default {
            0%, 20%, 80%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
        }




		/* END ADDED */
.header-devider-left {
	margin-top: 5px;
	width: 1px;
	height: 32px;
	opacity: .11;
	border: solid 1px #828184;
}
.header-inner {
	display: flex;
	justify-content: space-between;
	align-items: center;
	z-index: 120;
	position: fixed;
	width: 100%;
	height: 66px;
	border-bottom-left-radius: 27px;
	-webkit-backdrop-filter: blur(10px);
	backdrop-filter: blur(10px);
	box-shadow: 0 -15px 24px 20px rgba(64,64,64,.08);
	background-color: rgba(255,255,255,.92);
	top: 0;
	padding: 5px 0 5px 7px;
	left: 0;
}
.header.menu_active .header-inner {
	border-radius: 0;
	padding: 0 10px;
}
.left-menu-links {
	display: flex;
	align-items: center;
	gap: 15px;
}
#menu-right-section {
	display: flex;
	align-items: center;
	gap: 20px;
}



.header-inner .topnav {
  overflow: hidden;
}

.header-inner .topnav #myLinks {
  display: none;
}

.header-inner .topnav a {
	padding: 14px 0;
	display: flex;
	align-items: center;
	justify-content: space-between;
	font-size: 16px;
	font-weight: 600;
	font-stretch: normal;
	font-style: normal;
	line-height: normal;
	letter-spacing: normal;
	text-decoration: none;
	color: #404040;
}
.header-inner .topnav a.icon {
  display: block;
}
.header-inner .active {
  background-color: #fff;
  color: #000;
}
.header-inner #menu-right-section #myLinks {
	position: absolute;
	right: 0px;
	top: 100%;
	background: #fff;
	width: 100%;
	padding: 30px 0px;
}
.header-inner .topnav a.icon img {
	max-width: 60px;
}


.closed-icon {
	display: none;
}
.menu_active .closed-icon {
	display: block;
}
.menu_active .open-icon {
	display: none;
}
.header-inner #menu-right-section #myLinks li {
	border-bottom: solid 1px #f3f3f3;
	padding: 2px 20px;
}


.header.menu_active .header-item.header-left {
	opacity: 0;
	visibility: hidden;
}
.header.menu_active .icon-login-button {
	opacity: 0;
	visibility: hidden;
}
.header.menu_active .header-item.header-center-logo .logo img {
	max-width: 100px;
}
.header {
	padding: 15px 0;
	position: relative;
	min-height: 75px;
}
.header-inner #menu-right-section #myLinks ul {
	list-style: none;
}

	.header-item.header-center-logo .logo img {
	max-width: 100px;
}


.footer-top-icons a {
	margin-left: 5px;
	width: 30px;
	height: 30px;
	border-radius: 10px;
	box-shadow: 0 17px 40px 0 rgba(17,43,85,.1);
	background-color: rgba(255,255,255,.87);
	text-align: center;
	padding-top: 10px;
}
.footer-top-icons img {
	height: 16px;
}


.footer .footer-logo {
	text-align: center;
	margin-bottom: 15px;
}
.footer .footer-menu-row {
	margin-bottom: 20px;
}
.footer .footer-menu-row .footer-menu-inner li {
	list-style: none;
}
.footer .footer-menu-row .footer-menu-inner li a {
	color: #333;
	border-bottom: 1px solid #ddd;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 11px 20px;
	text-decoration: none;
	color: #404040;
	font-weight: 600;
	font-size: 18px;
}
.contactUsInFooter {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0 10px;
}
.contactUsInFooter .footer-bottom-icons {
	display: flex;
	gap: 5px;
	list-style: none;
}
.footer-top-icons {
	display: flex;
	list-style: none;
	gap: 4px;
}
.footer-left-text {
	color: #d10005;
	font-size: 14px;
}

.footer-menu-inner li .footer-sunmenu {
	visibility: hidden;
	opacity: 0;
	display: none;
}
.footer-menu-inner li.submenu_active .footer-sunmenu {
	display: block;
	visibility: inherit;
	opacity: 1;
}
.footer .footer-menu-row .footer-menu-inner li .footer-sunmenu a {
	border: none;
	text-align: right;
	display: block;
	font-weight: 400;
	font-size: 16px;
}
.footer .footer-menu-row .footer-menu-inner .footer-sunmenu li a:hover{
	text-decoration: underline;
	color: #cb0006;
}
.footer .footer-menu-row .footer-menu-inner li a .fa.fa-angle-down {
	color: #cb0006;
	font-size: 30px;
	font-weight: 600;
}
.footer .footer-menu-row .footer-menu-inner li.submenu_active a .fa.fa-angle-down::before {
	content: "\f106";
}


@media screen and (max-width: 480px) {
	
	.header-item.header-center-logo .logo img {
	max-width: 100px;
}
.left-menu-links {
	gap: 10px;
}
#menu-right-section {
	gap: 10px;
}
.footer-left-text {
	font-size: 12px;
}
.footer .footer-logo .footer-image {
	max-width: 110px;
}
}
</style>

</head>

<body>
 <header>
        <div class="header">
			<div class="container">
				<div class="header-inner">
					
						<div class="header-item header-left">
							<div class="left-menu-links ">
								<div class="search-container L">
									<a href="#"><img class="site-search-icon" src="<?php echo $folder_path;?>/images/search.png"></a>
							
								</div>
								<div class="header-devider-left L"></div>
								
										<a href="#"><img class="menu-culture-img  L" src="<?php echo $folder_path;?>/images/culture.png"></a>
							</div>
						</div>
						
						<div class="header-item header-center-logo">

							<div class="logo">
								<a class="top-nav-link" href="/" aria-label="">
									<img src="<?php echo $folder_path;?>/images/logo02.png">
								</a>
							</div>
						</div>
					
						
						<div class="header-item header-menu">
							<div id="menu-right-section" class="topnav">
								<a href="#" class="icon-login-button" aria-label=""><img src="<?php echo $folder_path;?>/images/auth-mobile.png"> </a>
							
							  <a href="javascript:void(0);" class="icon mobil-menu" onclick="myFunction()"><img class="open-icon" src="<?php echo $folder_path;?>/images/hambumber-mobile.png"> <img class="closed-icon" src="<?php echo $folder_path;?>/images/close-menu.png"> </a>
								<div id="myLinks">
								<ul>
									<li><a href="#"><img src="<?php echo $folder_path;?>/images/left-arrow.png">דואר בארץ</a></li>
									<li><a href="#"><img src="<?php echo $folder_path;?>/images/left-arrow.png">דואר בינלאומי</a></li>
									<li><a href="#"><img src="<?php echo $folder_path;?>/images/left-arrow.png">דואר שליחים</a></li>
									<li><a href="#"><img src="<?php echo $folder_path;?>/images/left-arrow.png">בנק הדואר</a></li>
									<li><a href="#"><img src="<?php echo $folder_path;?>/images/left-arrow.png">שירותים ומידע</a></li>
									<li><a href="#"><img src="<?php echo $folder_path;?>/images/left-arrow.png">איזור אישי</a></li>
								</ul>
								</div>
									

							</div>
						</div>
						
				</div>
			</div>
        </div>


        <!--<a href="" class="logo">

            <img src="images/logo.png" alt="Logo" width="200">

        </a>

        <div class="cart-icon" style="display:flex; align-items: center;">

            <img src="images/icon-user.png" height="24px" width="24px" style="margin-right: 8px;"> <span class="login_link" style="font-size: 0.8em; line-height: 1.1; margin: 0; padding: 0;"> 登入 </span>

        </div>

        <div class="m-menu" onclick="document.getElementsByTagName('body')[0].classList.toggle('mm-open');">

        <span></span><span></span><span></span>-->

        <!-- <div class="txt">選項目錄</div> 





    </div>-->

    </header>
<script>
	function myFunction() {
	  var x = document.getElementById("myLinks");
	  if (x.style.display === "block") {
		x.style.display = "none";
	  } else {
		x.style.display = "block";
	  }
	}
</script> 

<script>
	$(".mobil-menu").click(function(){
	  $(".header").toggleClass("menu_active");
	});
</script>
