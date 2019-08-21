<?php

//Google API PHP Library includes
require_once 'vendor/autoload.php';

// Set config params to acces Google API
 $client_id = '571217543637-hp5npepph3217gioqrv6mkr2b875l4fk.apps.googleusercontent.com';
 $client_secret = 'oD87pg78fc4juFmuLZetOFWJ';
 $redirect_uri = 'http://social-auth.pocktt.com';
 
//Create and Request to access Google API
$client = new Google_Client();
$client->setApplicationName("Google OAuth");
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("https://www.googleapis.com/auth/userinfo.profile");

//$objRes = new Google_Service_Oauth2($client);

$gClient = $client->authorize($_GET['code']);

$response = $gClient->get('https://www.googleapis.com/plus/v1/people/me');

echo '<pre>';
print_r($response);


?>