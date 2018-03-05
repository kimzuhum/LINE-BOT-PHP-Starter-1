<?php
$access_token = '3aFEdZpiq4wWshuqq8KneQPghVfJwhw4Z8BlzthC4I6j3C5PG6ccvxkEM1vjIPqcxTfkDDxuP4TZu7Eea0zr36O/dAQy18VvCoYVIImzkHW9uUJvaNuhCCPKnO6bjvTAsxKHH2AdGaGrq+3ltyDcDAdB04t89/1O/w1cDnyilFU=
';

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
