<?php


// Include the Composer autoloader to load the Telegram Bot API library
require __DIR__ . '/vendor/autoload.php';
use Longman\TelegramBot\Request;

$botApiKey = '6903293209:AAEDGJNFcaKrZGyZf7S6MBtbNCTz1kkHVzE';

$bot_api_key  = '6903293209:AAFkwUEkmnwS7BMz-mNVb04eOt088qS4i-E';
$bot_username = '@Webseller_bot';
$hook_url     = 'https://your-domain/path/to/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);
    //print_r($telegram);exit;
    $chat_id ="2113608351";
    
   /* $keyboard = [
     ['Release', 'Reject'],
     ['Page5', 'Page6'],
    ];
    
    // Convert the keyboard array into JSON format
    $replyMarkup = [
        'keyboard' => $keyboard,
        'resize_keyboard' => true,
        'one_time_keyboard' => true,
    ];*/
    
    
    $keyboard = [
        [
            ['text' => 'Release', 'callback_data' => 'release'],
            ['text' => 'Order #123', 'callback_data' => json_encode(['action' => 'view_order', 'order_id' => 123])],
            ['text' => 'Reject', 'callback_data' => 'reject'],
        ],
        [
            ['text' => 'Page5', 'callback_data' => 'page5'],
            ['text' => 'Page6', 'callback_data' => 'page6'],
        ],
    ];

    $replyMarkup = [
        'inline_keyboard' => $keyboard,
    ];

    
    
    $result = Request::sendMessage([
        'chat_id' => $chat_id,
        'text'    => 'New order get from website please check it'
      /*  'reply_markup' => $replyMarkup*/
    ]);
    
    /*
    
    $result = Request::sendPhoto([
        'chat_id' => $chat_id,
        'photo'   => Request::encodeFile('https://www.shutterstock.com/image-illustration/red-credit-card-highly-detailed-260nw-34724695.jpg'),
    ]);
    
    Request::sendChatAction([
        'chat_id' => $chat_id,
        'action'  => Longman\TelegramBot\ChatAction::TYPING,
    ]);
    
    $results = Request::sendToActiveChats(
    'sendMessage', // Callback function to execute (see Request.php methods)
        ['text' => 'Hey! Check out the new features!!'], // Param to evaluate the request
        [
            'groups'      => true,
            'supergroups' => true,
            'channels'    => false,
            'users'       => true,
        ]
    );*/

    // Set webhook
   // $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo "<pre>";print_r($e);exit;
    // log telegram errors
    echo "test";
}




/*
// Replace 'YOUR_BOT_API_TOKEN' with your actual Telegram bot API token


// Create an instance of the Telegram\Bot\Api class
$telegram = new Api($botApiKey);

// Define the chat ID of the recipient (you can replace with a valid chat ID)
$chatId = 'YOUR_CHAT_ID';

// The message you want to send
$message = 'Hello, this is a message from your Telegram bot!';

try {
    // Send the message
    $telegram->sendMessage([
        'chat_id' => "2113608351",
        'text' => $message,
    ]);

    // Message sent successfully
    echo 'Message sent successfully!';
} catch (\Telegram\Bot\Exceptions\TelegramSDKException $e) {
    // Handle any exceptions or errors that may occur during the API request
    echo 'Error: ' . $e->getMessage();
}*/