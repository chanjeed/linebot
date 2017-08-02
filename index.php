<?php
$strAccessToken = "PUbs71L7HzkyJJftHLy15OxgmytQj5SJMZ42U2tXi0U";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] ="Udbc348b0351b33b31c2f85dcfffd9ff6";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "Bot　を作っているの　待っててね！";
 
 
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

class LineNotify{
 const API_URL = 'https://notify-api.line.me/api/notify';
 private $token = null;
 private $http = null;
 $token = 'PUbs71L7HzkyJJftHLy15OxgmytQj5SJMZ42U2tXi0U';
$ln = new KS\Line\LineNotify($token);

$text = 'Hello Line Notify';
$ln->send($text);
?>
