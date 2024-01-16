<?php
session_start();
include("config.php");
include("telegrambot.php");

function d_connection()
{ global $conn;
} 
d_connection();


// Your bot's API token
$botToken = '6903293209:AAEDGJNFcaKrZGyZf7S6MBtbNCTz1kkHVzE';

// Verify the token in the incoming request
$webhookInput = file_get_contents('php://input');


//Log generate for testing 

$update = json_decode($webhookInput, true);


// Extract chat ID and message text


$action ="";
$messageText="";
$chatId="";

 if(array_key_exists("callback_query",$update))
  {
    $messageText =  $update['callback_query']['data'];
    $chatId = $update['callback_query']['message']['chat']['id'];
    lot_log($conn,$webhookInput);
  }



  if (array_key_exists("message",$update))
  {
    $messageText = $update['message']['text'];
    $chatId = $update['message']['chat']['id'];
    lot_log($conn,$webhookInput);
  }



  $messageText = messageCondition($messageText,$chatId); 

// Process the incoming message (you can add your logic here)
$responseText = $messageText;

// Define the buttons and their labels
/*$keyboard = [
    ['Release', 'Reject'],
    ['Page5', 'Page6'],
];

// Convert the keyboard array into JSON format
$replyMarkup = [
    'keyboard' => $keyboard,
    'resize_keyboard' => true,
    'one_time_keyboard' => true,
];*/


/*
if (isset($update['callback_query'])) {
    $callbackData = $update['callback_query']['data'];

    // Process the callback data
    if ($callbackData == 'release') {
        // Handle the 'Release' button click
        $responseText = "You have successfully release you can check in admin";
    } elseif ($callbackData == 'reject') {
        // Handle the 'Reject' button click
        $responseText = "Sorry admin have rejected it";
    }
}*/

    $replyMarkup ="";
    /*$keyboard = [
        [
            ['text' => 'Release', 'callback_data' => 'release','order_id'=>'143'],
            ['text' => 'Reject', 'callback_data' => 'reject','order_id'=>'143'],
        ],
        [
            ['text' => 'Page5', 'callback_data' => 'page5'],
            ['text' => 'Page6', 'callback_data' => 'page6'],
        ],
    ];

    $replyMarkup = [
        'inline_keyboard' => $keyboard,
    ];*/


// Send a response message back to the user
$apiEndpoint = "https://api.telegram.org/bot$botToken/sendMessage";
$data = [
    'chat_id' => $chatId,
    'text' => $responseText,
    'reply_markup' => $replyMarkup
];

$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($data),
    ],
];

$context = stream_context_create($options);
$result = file_get_contents($apiEndpoint, false, $context);

// Log the result (optional)
//file_put_contents('webhook_log.txt', $result);

// Respond to Telegram with a 200 OK status code
http_response_code(200);


function messageCondition($message,$chatId){

    $conn = $GLOBALS['conn'];

    if($message=="/start"){
         $message = "Welcome to chatbot start to add your domain name";  
        return $message;
    }

    if($message=="release"){
         $message = "Thanks you have Selected release button we will update status";  
        return $message;
    }

    if($message=="reject"){
         $message = "Order has been reject due to miss details";  
        return $message;
    }

    if($message=="page5"){
         $message = "Thank my dear friend welcome to Page5";  
        return $message;
    }

    if($message=="page6"){
         $message = "Nice to meet you to dear Button 6";  
        return $message;
    }


    if (filter_var($message, FILTER_VALIDATE_URL)) {

        $checkdomainexits = checkDomainExist($conn,$message);
        if($checkdomainexits=="valid"){
             return " This domain already configured".$message;
        }

        $domainConfigure = domainConfiguer($conn,$message,$chatId);

        if($domainConfigure=="valid"){
            return "Domain configure successfully ".$message;
        }

        return "Some error in configuration";

        //return $message." yes it's valid url";
    } else {
        return "Enter a valid url";
    }

}