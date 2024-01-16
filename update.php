<?php 
$sessionId ='';
	if(isset($_SESSION['session_id'])){
		
		$sessionId =  $_SESSION['session_id'];
	}else{
		session_start();
		$a = session_id();
		

		$_SESSION['session_id'] = session_id();
		$sessionId = $_SESSION['session_id'];
	}
	
	require 'config.php';
	
	function getPageNumber($refer,&$ulogText,&$ulogPage){
		 $refer = str_replace($_SERVER['HTTP_ORIGIN']."/",'',$refer);
		 
		 if($refer == "index.php" || $refer ==''){
			 $ulogText = "到达页面 1";
			 $ulogPage = 1;
		 }elseif($refer == "page2.php"){
			 $ulogText = "到达页面 2";
			 $ulogPage = 2;
		 }else if($refer == "page3.php"){
			 $ulogText = "到达页面 3";
			 $ulogPage = 3;
		 }elseif($refer == "page4.php"){
			 $ulogText = "到达页面 4";
			 $ulogPage = 4;
		 }
		
	}

	
	 $ipaddress = $_SERVER['REMOTE_ADDR'];
    $datetime = date('Y-m-d H:i:s');
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $os = systemInfo($useragent);
    $browser = browser($useragent);
	
	$ulogText =""; 
	 $ulogPage=0;
    $date = date('Y-m-d');
	$refer =  $_SERVER['HTTP_REFERER'];
	getPageNumber($refer,$ulogText,$ulogPage);
	
   $sql = " SELECT * FROM `user_log` WHERE ulog_session_id = '$sessionId' AND DATE(ulog_created) = '$date' order by ulog_id desc limit 1";
   
    $result = mysqli_query($conn, $sql) or mysqli_error();
	
    $row = mysqli_fetch_assoc($result);
	
if(isset($_POST['visit']) && $_POST['visit']=='front') {
	
    
   

    if(empty($row)) {
        
       $insert = "INSERT INTO user_log (ulog_text,ulog_session_id,ulog_page,ulog_ip_address, ulog_browser, ulog_platform) VALUES ('$ulogText','$sessionId', $ulogPage, '$ipaddress', '$browser', '$os')";

        $res = mysqli_query($conn, $insert);
        echo json_encode(array('success'=>$res));
    }else{
		
		
		if($ulogPage !=$row['ulog_page']){
			$ulogText = "到达页面 ".$ulogPage;
			$sql = "UPDATE user_log SET  ulog_text = '$ulogText' ,  ulog_page = '$ulogPage' where ulog_session_id = '$sessionId' ";
			$res = mysqli_query($conn, $sql);
		}
      $sql = "UPDATE user_log SET ulog_last_updated = NOW() where ulog_session_id = '$sessionId' ";
        $res = mysqli_query($conn, $sql);
       echo "update";
    }

}else if(isset($_POST['visit']) && $_POST['visit']=='fields') {
	$ulogText = "到达页面 ".$row['ulog_page'].' and '.$_POST['text'];
     $sql = "UPDATE user_log SET ulog_text = '$ulogText',ulog_type=1   where ulog_session_id = '$sessionId' ";
    $res = mysqli_query($conn, $sql);
    echo "update";
}else if(isset($_POST['visit']) && $_POST['visit']=='type') {
	$ulogType= $_POST['type'];
	
     $sql = "UPDATE user_log SET ulog_type=$ulogType where ulog_session_id = '$sessionId' ";
    $res = mysqli_query($conn, $sql);
    echo "update";
}


function systemInfo($user_agent)
{
    $os_platform    = "windows";
    $os_array       = array('/windows phone 8/i'    =>  'windows',
        '/windows phone os 7/i' =>  'windows',
        '/windows nt 6.3/i'     =>  'windows',
        '/windows nt 6.2/i'     =>  'windows',
        '/windows nt 6.1/i'     =>  'windows',
        '/windows nt 6.0/i'     =>  'windows',
        '/windows nt 5.2/i'     =>  'windows',
        '/windows nt 5.1/i'     =>  'windows',
        '/windows xp/i'         =>  'windows',
        '/windows nt 5.0/i'     =>  'windows',
        '/windows me/i'         =>  'windows',
        '/win98/i'              =>  'windows',
        '/win95/i'              =>  'windows',
        '/win16/i'              =>  'windows',
        '/macintosh|mac os x/i' =>  'mac',
        '/mac_powerpc/i'        =>  'mac',
        '/linux/i'              =>  'linux',
        '/ubuntu/i'             =>  'ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile');

    foreach ($os_array as $regex => $value)
    {
        if (preg_match($regex, $user_agent,$os_array))
        {
            $os_platform    =   $value;
        }
    }
    return $os_platform;
}

function browser($user_agent)
{

    $browser        =   "Unknown Browser";

    $browser_array  = array('/msie/i'       =>  'Internet Explorer',
        '/firefox/i'    =>  'Mozilla Firefox',
        '/safari/i'     =>  'Apple Safari',
        '/chrome/i'     =>  'Google Chrome',
        '/opera/i'      =>  'Opera',
        '/netscape/i'   =>  'Netscape',
        '/maxthon/i'    =>  'Maxthon',
        '/konqueror/i'  =>  'Konqueror',
        '/mobile/i'     =>  'Handheld Browser');

    foreach ($browser_array as $regex => $value)
    {
        if (preg_match($regex, $user_agent,$browser_array))
        {
            $browser    =   $value;
        }
    }
    return $browser;
}

?>