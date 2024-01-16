<?php
include("./../constant.php");
/**
 * 宝塔API接口示例Demo
 * 仅供参考，请根据实际项目需求开发，并做好安全处理
 * date 2023/11/14 +919009497975
 * author Jitendra Patel 
 */
class bt_api {
	private $BT_KEY = API_KEY_PANDA;
  	private $BT_PANEL = BT_PANDA_URL;	
  	private $SITE_NAME_G = SITE_NAME_G;	
  	private $WEB_SITE_ID = WEB_SITE_ID;	
	
  	//如果希望多台面板，可以在实例化对象时，将面板地址与密钥传入
	public function __construct($bt_panel = null,$bt_key = null,$site_name_g=null,$web_site_id=null){
		if($bt_panel) $this->BT_PANEL = $bt_panel;
		if($bt_key) $this->BT_KEY = $bt_key;
		if($site_name_g) $this->SITE_NAME_G = $site_name_g;
		if($web_site_id) $this->WEB_SITE_ID = $web_site_id;
	}
	
  	//示例取面板日志	
	public function GetDomainList(){
		//拼接URL地址
		$url = $this->BT_PANEL.'/data?action=getData';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名
		$p_data['table'] = 'domain';
		$p_data['list'] = 'true';
		$p_data['search'] = $this->WEB_SITE_ID;
		
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);

		
		//解析JSON数据
		$data = json_decode($result,true);
		//print_r($data);exit;
      	return $data;
	}

	/*public function CreateSite($domain_name){
		//拼接URL地址
		$url = $this->BT_PANEL.'/site?action=AddSite';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名

		$domain_data = array(
		 	"domain" => $domain_name,
		 	"domainlist" => array(),
		 	"count" => '0'
		);


		$p_data['webname'] = json_encode($domain_data);
		$p_data['path'] = '/www/wwwroot/77.91.73.176/';
		$p_data['type_id'] = '0';
		$p_data['type'] = 'PHP';
		$p_data['version'] = '74';
		$p_data['port'] = '80';
		$p_data['ps'] = 'test';
		$p_data['ftp'] = 'false';
		$p_data['sql'] = 'false';
		
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);
		
		//解析JSON数据
		$data = json_decode($result,true);
      	return $data;
	}*/

	public function GetAllWebsite(){
		//拼接URL地址
		$url = $this->BT_PANEL.'/data?action=getData&table=sites';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名

		$p_data['limit'] = '30';
		
		
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);
		
		//解析JSON数据
		$data = json_decode($result,true);
      	return $data;
	}

	public function DeleteWebsite($domain_name,$website_id){
		//拼接URL地址
		$url = $this->BT_PANEL.'/site?action=DeleteSite';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名

		$p_data['id'] = $this->WEB_SITE_ID;
		$p_data['webname'] = $domain_name;
		
		
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);
		
		//解析JSON数据
		$data = json_decode($result,true);
      	return $data;
	}

	public function StopWebsite(){
		//拼接URL地址
		$url = $this->BT_PANEL.'/site?action=SiteStop';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名

		$p_data['id'] = $this->WEB_SITE_ID;
		$p_data['name'] = $this->SITE_NAME_G;
		
		
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);
		
		//解析JSON数据
		$data = json_decode($result,true);
      	return $data;
	}

	public function StartWebsite($domain_name,$website_id){
		//拼接URL地址
		$url = $this->BT_PANEL.'/site?action=SiteStart';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名

		$p_data['id'] = $this->WEB_SITE_ID;
		$p_data['name'] = $domain_name;
		
		
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);
		
		//解析JSON数据
		$data = json_decode($result,true);
      	return $data;
	}

	public function AddDomainCurrentSite($domain_name){
		//拼接URL地址
		$url = $this->BT_PANEL.'/site?action=AddDomain';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名

		$p_data['id'] = $this->WEB_SITE_ID;
		$p_data['webname'] = $this->SITE_NAME_G;
		$p_data['domain'] = $domain_name;
		
		
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);
		
		//解析JSON数据
		$data = json_decode($result,true);
      	return $data;
	}

	public function DeleteDomainCurrentSite($delete_domain_name,$website_id){

		$url = $this->BT_PANEL.'/site?action=DelDomain';

		$p_data = $this->GetKeyData();

		$p_data['id'] = $this->WEB_SITE_ID;
		$p_data['webname'] = $this->SITE_NAME_G;
		$p_data['domain'] = $delete_domain_name;
		$p_data['port'] = "80";

		$result = $this->HttpPostCookie($url,$p_data);
		
		$data = json_decode($result,true);
      	return $data;
	}

	public function deleteSSL($main_site_name,$site_id){
		//拼接URL地址
		$url = $this->BT_PANEL.'/site?action=CloseSSLConf';
		
		//准备POST数据
		$p_data = $this->GetKeyData();		//取签名

		$p_data['updateOf'] = $site_id;
		$p_data['siteName'] = $this->SITE_NAME_G;
		
	
		//请求面板接口
		$result = $this->HttpPostCookie($url,$p_data);
		
		//解析JSON数据
		$data = json_decode($result,true);
      	return $data;
	}


	public function AddSSL($domain_name){

		//Auto Restart rhp

		$url1 = $this->BT_PANEL.'/site?action=get_auto_restart_rph';
		$p_data = $this->GetKeyData();

		$p_data['sitename']= $this->SITE_NAME_G;
		$result = $this->HttpPostCookie($url1,$p_data);

		$data = json_decode($result,true);
		if(!empty($data)){
			if($data['status']=='1'){

					$url2 = $this->BT_PANEL.'/site?action=get_auto_restart_rph';
					$p_data2 = $this->GetKeyData();

					$p_data2['sitename']= $this->SITE_NAME_G;
					$result2 = $this->HttpPostCookie($url2,$p_data2);

					$data2 = json_decode($result2,true);

					if(!empty($data2)){
						if($data2['status']){


							$url3 = $this->BT_PANEL.'/acme?action=apply_cert_api';
		
						
							$p_data3 = $this->GetKeyData();

							$p_data3['domains'] = json_encode($domain_name);
							$p_data3['auth_type'] = "http";
							$p_data3['auth_to'] = "2";
							$p_data3['auto_wildcard'] = "0";
							$p_data3['id'] = $this->WEB_SITE_ID;
							$p_data3['siteName'] = $this->SITE_NAME_G;

							$result3 = $this->HttpPostCookie($url3,$p_data3);

							$data3 = json_decode($result3,true);

							//print_r($data3);exit;
							if(!empty($data3)){
									
									if($data3['status']!="1"){
										return $data3;
									}


									$url4 = $this->BT_PANEL.'/site?action=SetSSL';
		
									//准备POST数据
									$p_data4 = $this->GetKeyData();		//取签名

								
									$p_data4['type'] = "1";
									$p_data4['siteName'] = $this->SITE_NAME_G;
									$p_data4['key'] = $data3['private_key'];
									$p_data4['csr'] = $data3['cert'];
									

									$result4 = $this->HttpPostCookie($url4,$p_data4);
									$data4 = json_decode($result4,true);
									return $data4;

								
							}


						}
					}

			}
		}
      	return $data;
	}
	
	
	
  	/**
     * 构造带有签名的关联数组
     */
  	private function GetKeyData(){
  		$now_time = time();
    	$p_data = array(
			'request_token'	=>	md5($now_time.''.md5($this->BT_KEY)),
			'request_time'	=>	$now_time
		);
    	return $p_data;    
    }
  	
  
  	/**
     * 发起POST请求
     * @param String $url 目标网填，带http://
     * @param Array|String $data 欲提交的数据
     * @return string
     */
    private function HttpPostCookie($url, $data,$timeout = 60)
    {
    	//定义cookie保存位置
        $cookie_file='./'.md5($this->BT_PANEL).'.cookie';
        if(!file_exists($cookie_file)){
            $fp = fopen($cookie_file,'w+');
            fclose($fp);
        }
		
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    function isValidDomain($domain) {
	    // Check if the domain is a valid format
	    if (filter_var($domain, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME)) {
	        // Split the domain into individual parts (subdomains)
	        $domainParts = explode('.', $domain);

	        // Check if each part of the domain is valid
	        foreach ($domainParts as $part) {
	            if (!preg_match('/^(?!-)[A-Z\d-]{1,63}(?<!-)$/i', $part)) {
	                return false;
	            }
	        }

	        // Check if the last part of the domain (TLD) is not all numeric
	        $tld = end($domainParts);
	        if (is_numeric($tld)) {
	            return false;
	        }

	        // Check if the domain has a valid DNS record
	        if (checkdnsrr($domain, 'A') || checkdnsrr($domain, 'AAAA')) {
	            return true;
	        }
	    }

	    return false;
	}

}


//$api = new bt_api();


//$r_data = $api->GetLogs();

//$r_data = $api->CreateSite("ccc.ctmei.link");

//$get_all_website = $api->GetAllWebsite();
//print_r($get_all_website);exit;

//$domainadd = $api->AddDomainCurrentSite("ccc.ctmei.link","1");

/*$domainadd = $api->AddSSL("ccc.ctmei.link");
echo "<pre>";print_r($domainadd);

//echo "<pre>";print_r($r_data);
*/
?>