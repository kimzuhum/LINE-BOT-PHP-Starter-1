<?php
$access_token = 'aLr0Jr9jfBxls9yRqgkVPKLxvTp8w5fJ7YOBZQdjC211Clh/nULVm3vy6gmerIUJJQLtvSrR/IsX1hxAUZJgMsUemSJHFQPlFT3w8rwaQfXtV9C13wkQnfgxd9SWa8v/x/DWAc3TyxfaYnThBJ15TAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result; 
?>
