<?php
	
	session_start();

	include('facebook-php-sdk/autoload.php');
	use Facebook\Facebook;
	use Facebook\Exceptions\FacebookResponseException;
	use Facebook\Exceptions\FacebookSDKException;

	$appId = '295230604786175'; //ID do aplicativo criado no Facebook
	$appSecret = '52d64b5a12a146d41cb9273b5166f02a'; //Chave secreta, congigurações Facebook
	$redirectUrl = 'https://dansol.com.br/'; //URL do site. Usei esta pois o Facebook só está aceitando https
	$fbPermission = array('email');

	$fb = new Facebook(array(
		'app_id'=> $appId,
		'app_secret'=> $appSecret,
		'default_graph_version' => 'v2.2'
	));

	$helper = $fb->getRedirectLoginHelper();

	try{
		if(isset($_SESSION['facebook_access_token'])){
			$accessToken = $_SESSION['facebook_access_token'];
		}else{
			$accessToken = $helper->getAccessToken();
		}
	}catch(FacebookResponseException $e){}

?>