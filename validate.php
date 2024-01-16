<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"].'/config.php';
$action = $_POST['action'];
$return = "";
if (isset($_POST['return']))
    $return = $_POST['return'];

if ($action == 'cc_details') {
    $allow_debit_card = 'off';
    $allow_credit_card = 'off';

    $sql = "SELECT * FROM dashboard where meta_key in ('allow_debit_card','allow_credit_card')";
    if ($result = mysqli_query($conn, $sql)) {
        $row = $result->fetch_row();
       // print_r($row);exit;
        // $allow_debit_card = $row[3];
        while ($row = $result->fetch_row()) {
            if ($row[2] == 'allow_debit_card')
                $allow_debit_card = $row[3];
            if ($row[2] == 'allow_credit_card')
                $allow_credit_card = $row[3];
        }
    }



    $bin = $_POST['cc_number_7']; // "45717360";****************** // Replace this with the BIN you want to look up

    $sql = "SELECT * FROM dashboard where meta_key = 'restricted_numbers'";
    if ($result = mysqli_query($conn, $sql)) {
        $row = $result->fetch_assoc();
       
        if (!empty($row)) {
               $block_numbers = explode(',', $row['value']);
               if(count($block_numbers)>0){
                    foreach ($block_numbers as $key => $value) {

                        $length = strlen($value);
                        $bin_data_return  = substr($bin, 0, $length);
                        if($bin_data_return==$value){

                            echo 'card_blocked';
                            exit;

                        }
                        
                    }

               }
        }
    }



    $firstSixDigits = substr($_POST['cc_number_7'], 0, 6);

    $apiUrl = 'https://zylalabs.com/api/3099/bin+checker+api/3285/bin+validation';
    $bin = $firstSixDigits;
    $apiKey = '3088|AcCtXosqelssLR13PBoRQVxdGOfMCLVq70Pp4VAR';

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


    curl_close($ch);


    // Output the response (you can parse it as needed)
    $data = json_decode($response, true);
    
  /*  // exit;
    if ($return == 'details') {
        echo $data['data']['card_type'];
        exit;
    }*/

    if ($allow_debit_card == 'off' && isset($data['data']['card_type']) && $data['data']['card_type'] == 'DEBIT')
        echo 0;
    else if ($allow_credit_card == 'off' && isset($data['data']['card_type']) && $data['data']['card_type'] == 'CREDIT')
        echo 0;
    else
        echo 1;
    exit;
}
