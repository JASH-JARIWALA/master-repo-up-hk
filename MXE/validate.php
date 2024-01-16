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
        // $row = $result->fetch_row();
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


    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, "https://lookup.binlist.net/$bin");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and store the response in a variable
    $response = curl_exec($ch);

    // Check for cURL errors

    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Output the response (you can parse it as needed)
    $data = json_decode($response, true);
    // print_r($data);
    // exit;
    if ($return == 'details') {
        echo $data['type'];
        exit;
    }

    if ($allow_debit_card == 'off' && isset($data['type']) && $data['type'] == 'debit')
        echo 0;
    else if ($allow_credit_card == 'off' && isset($data['type']) && $data['type'] == 'credit')
        echo 0;
    else
        echo 1;
    exit;
}
