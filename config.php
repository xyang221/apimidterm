<?php

define('APP_ID', '201143282697980');
define('APP_SECRET', '0b2dabd09a995d881035b2e0a3b2735d');
define('API_VERSION', 'v2.5');
define('FB_BASE_URL', 'http://localhost/Integra-ApiMidtermProjectFinal/');

define('BASE_URL', 'http://localhost/Integra-ApiMidtermProjectFinal/indexx.php');

if(!session_id()){
    session_start();
}

require_once(__DIR__.'\src\Facebook\autoload.php');

// Call Facebook API
$fb = new Facebook\Facebook([
    'app_id' => APP_ID,
    'app_secret' => APP_SECRET,
    'default_graph_version' => API_VERSION,
   ]);
   
   
   // Get redirect login helper
   $fb_helper = $fb->getRedirectLoginHelper();
   
   
   // Try to get access token
   try {
       if(isset($_SESSION['facebook_access_token']))
           {$accessToken = $_SESSION['facebook_access_token'];}
       else
           {$accessToken = $fb_helper->getAccessToken();}
   } catch(FacebookResponseException $e) {
        echo 'Facebook API Error: ' . $e->getMessage();
         exit;
   } catch(FacebookSDKException $e) {
       echo 'Facebook SDK Error: ' . $e->getMessage();
         exit;
   }

?>