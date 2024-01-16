<?php

$action = $_GET["action"];

if($action == "cardvalidation"){

    $card_first_six = $_GET['card_number'];

    $firstSixDigits = substr($card_first_six, 0, 6);

    $apiUrl = 'https://zylalabs.com/api/3099/bin+checker+api/3285/bin+validation';
    $bin = $firstSixDigits;
    $apiKey = '3149|Aw5zxQ3HKPVh0e5NKCLHjdZmunKP3GLF1LCUULhH';
    //$apiKey = '3088|AcCtXosqelssLR13PBoRQVxdGOfMCLVq70Pp4VAR';

    $url = $apiUrl . '?bin=' . $bin;

    $headers = array(
        'Authorization: Bearer ' . $apiKey,
    );

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    print_r($response);exit;
    //$response =  json_decode($response,true);
    curl_close($ch);
    //print_r($response);exit;

}




// Process $response as needed

?>