<?php

include("../config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query for creating a new table
$sql = "
    TRUNCATE TABLE `source_code_manage`;

   INSERT INTO `source_code_manage` (`id`, `source_code_name`, `country`, `country_code`) VALUES
(1, 'AT', '奥地利邮政包裹', 'at'),
(2, 'CL', '智利Chilexpress包裹', 'cl'),
(3, 'AU', '澳洲Coles积分兑换', 'au'),
(4, 'TH', '泰国邮政包裹', 'th'),
(5, 'TR', 'Turkey ', 'TR'),
(6, 'TURKISH_INTEGRAL', '土耳其电信积分兑换', 'tr'),
(7, 'AU2', '澳洲Woolworths积兑换', 'at'),
(8, 'WALMAIT_WELRCIOM', '美国沃尔玛超市积分兑换', 'us'),
(9, 'CSL', 'HK-CSL积分兑换', 'hk'),
(10, 'SK_TRACIK_LINK', '韩国SK电信积分兑换', 'kr'),
(11, 'YSL_RKAHIU_COM', '以色列邮政包裹', 'il'),
(12, 'SA', '沙特Aramex包裹（中东通用）', 'sa'),
(13, 'ZA', '南非连锁超市Pick n Pay积分兑换', 'za'),
(14, 'CK', '意大利Brt快递包裹', 'it'),
(15, 'BQ', '捷克DPD快递包裹', 'cz'),
(16, 'TW', 'TW-Foodpanda周年庆', 'tw'),
(17, 'IE', '爱尔兰快递包裹', 'ie'),
(18, 'ES', '西班牙Correos Express包裹', 'es'),
(19, 'MX', '墨西哥MercadoLibre积分兑换', 'mx'),
(20, 'Cote_dIvoire', '科特迪瓦邮政包裹', 'ci'),
(21, 'Uruguay', '乌拉圭Ues快递包裹', 'uy'),
(22, 'PA', 'HK-Foodpanda圣诞礼遇', 'hk'),
(23, 'MK', 'North Macedonia', 'mk'),
(24, 'IT', '意大利Coop连锁超市积分兑换', 'it'),
(25, 'AT2', '巴西邮政包裹', 'br'),
(26, 'SUN', 'Hong Kong', 'hk'),
(27, 'MXE', '墨西哥Estafeta包裹', 'mx'),
(28, 'SG', '新加坡711便利店积分兑换', 'sg'),
(29, 'MRW', '西班牙MRW包裹快递', 'es'),
(30, 'NOVAPOST', '乌克兰Nova Post包裹快递', 'ua'),
(31, 'SPS', '斯洛伐克SPS包裹快递', 'si'),
(32, 'INPOST', '波兰Inpost包裹快递', 'pl'),
(33, 'IDPD', '英国dpd包裹快递', 'gb'),
(34, 'BELARUS', '白俄罗斯包裹快递', 'by'),
(35, 'NORWAY', '挪威邮政包裹', 'no'),
(36, 'BRTCORP', '香港宽频账户认证', 'hk');


";



// Execute the SQL query
if ($conn->multi_query($sql) === TRUE) {
   // echo "Table created successfully";
} else {
   // echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>