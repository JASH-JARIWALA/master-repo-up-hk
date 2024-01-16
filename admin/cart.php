<?php

session_start();
$price = $_POST['total_quantity'];
$finaltotalprice = @$_POST['finaltotalprice'];
if($price) {
    $_SESSION['total_quantity'] = array("quantity" => $price,"final_price" => $finaltotalprice);
    
    return true;
}
