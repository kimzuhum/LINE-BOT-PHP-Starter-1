<?php
date_default_timezone_set("Asia/Bangkok");

$strAccessToken = "T0SP3C3GuTGXd1XKSWQ0HJrENyiAVRu4/fo8vHokDtmtU0qYCKTA1U7SwD9rykeIxTfkDDxuP4TZu7Eea0zr36O/dAQy18VvCoYVIImzkHVQQ8sAHdV+p17u/97Ud24almhqwXHSlKhAvvf83CF3FQdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$objConnect = mysqli_connect("61.47.34.20","root","hs5fe","pongpark");

if($objConnect){
$sql = "SELECT * FROM tb_question WHERE ask = '" . $arrJson['events'][0]['message']['text'] . "'";
$result = mysqli_query($objConnect,$sql);
$row = mysqli_fetch_row($result);
if(!isset($row['ans'])){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = $row['ans'];
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
}
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Failed to connect.";
}
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

	mysqli_close($objConnect);
?>
