<?php

$access_token = 'HBNoIoQBeQHyRxCeCGRjYDad526mABEto9JFoh8C8cnyzLzBzduVEEYicXKgXNQIEuyyk6Z15W6jTtZ7VunhobqK0zrKg97CgKuFqtehfedFGPek35rU7VDa4/2gMe8t/zbH51Z5speNkzGGbyfkEQdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);

// Make a POST Request to Messaging API to reply to sender
$url = 'https://api.line.me/v2/bot/message/reply';
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'test');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result . "\r\n";

echo "OK";
?>
