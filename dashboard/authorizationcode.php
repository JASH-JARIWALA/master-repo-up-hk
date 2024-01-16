<?php 
include("./../constant.php");
$auth_token = "";
$fileContents = file_get_contents('authtoken.txt');
if ($fileContents !== false) {
	$auth_token = $fileContents;
} else {
    echo 'Failed to read the file token file.';exit;
}

$auth_token_time = AuthorizationCode($auth_token);

function AuthorizationCode($authCodeData){
    if ($authCodeData) {
        $codeData = base64_decode($authCodeData);
        $codeDomainData = explode('---',$codeData);
        $domainName = $codeDomainData[1];
        $code = explode(':', $codeData);
        $expiration = $code[1];
        $currentDate = time();

        if ($currentDate > $expiration || $domainName != SITE_NAME_G){
        	header('Location: authorizationpage.php');exit;
        }else{
        	return $expiration;
        }
    } else {
        echo "no valid code found"; exit;
    }
}

?>
<script>
	localStorage.setItem("auth_token_time", '<?php echo $auth_token_time?>');
</script>