<?php
session_start();

//Google API PHP Library includes
require_once 'vendor/autoload.php';

// Set config params to acces Google API
 //$client_id = '214940814253-fd11ba7nje065ncau0srk2p2keam69ea.apps.googleusercontent.com';
 //$client_secret = 'AIzaSyBGK442K-SxJ-5ChVV1bdIy1fMvQe4Y9Qw';
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

$objRes = new Google_Service_Oauth2($client);

echo '<pre>';
print_r($objRes);
//Add access token to php session after successfully authenticate
// $client->authenticate($_GET['code']);
//   if (isset($_GET['code'])) {
//   $_SESSION['access_token'] = $client->getAccessToken();
//   header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
// }

// //set token
// if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
//   $client->setAccessToken($_SESSION['access_token']);
// }

// //store with user data
// if ($client->getAccessToken()) {
//   $userData = $objRes->userinfo->get();
//   if(!empty($userData)) {
// 	//insert data into database
//   }
//   $_SESSION['access_token'] = $client->getAccessToken();
// } else {
//   $googleAuthUrl  =  $client->createAuthUrl();
// }
?>