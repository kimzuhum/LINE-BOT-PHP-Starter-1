<?php

$line_id = "u051cf2694a6917956289c2670a088048";
$msg = "ทดสอบการ Push Messages";
$access_token = "3aFEdZpiq4wWshuqq8KneQPghVfJwhw4Z8BlzthC4I6j3C5PG6ccvxkEM1vjIPqcxTfkDDxuP4TZu7Eea0zr36O/dAQy18VvCoYVIImzkHW9uUJvaNuhCCPKnO6bjvTAsxKHH2AdGaGrq+3ltyDcDAdB04t89/1O/w1cDnyilFU=
";

$userid = iconv("tis-620","utf-8",$line_id);
   echo $em_id . " | " . $userid . " | " . $msg . "<br>" ;
exit;
                        $messages = [
                                'type' => 'text',
                                'text' => $msg
                        ];

                        // Make a POST Request to Messaging API to reply to sender
                        $url = 'https://api.line.me/v2/bot/message/push';
                        $data1 = [
                                'to' => $userid,
                                'messages' => [$messages],
                        ];
                        $post = json_encode($data1);

						$data = array('url'=>$url,'fields'=>count($post),'field_str'=>$post,'access'=>$access_token);
						exec_curl($data);

function exec_curl($data)
{                        $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $data['access']);

                        $ch = curl_init();
						curl_setopt($ch, CURLOPT_URL,$data['url']);
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS,$data['field_str']);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        $result = curl_exec($ch);
						print_r($result);
                        curl_close($ch);
						unset($ch);

 	
}
?>
