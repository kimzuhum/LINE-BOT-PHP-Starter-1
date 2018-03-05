<?php
 
$strAccessToken = "3aFEdZpiq4wWshuqq8KneQPghVfJwhw4Z8BlzthC4I6j3C5PG6ccvxkEM1vjIPqcxTfkDDxuP4TZu7Eea0zr36O/dAQy18VvCoYVIImzkHW9uUJvaNuhCCPKnO6bjvTAsxKHH2AdGaGrq+3ltyDcDAdB04t89/1O/w1cDnyilFU=
";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "u051cf2694a6917956289c2670a088048";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
