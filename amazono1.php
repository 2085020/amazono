<?php
phpinfo();
exit;
include "config.php";
$message = "Hola, saludos de <b>amazono</b>";
$bot_url    = "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
$urlGetMe = "https://api.telegram.org/bot$botToke/getMe";
//$a = file_get_contents($url);

include "amazonApi.php";

$amazon = new amazonApi(AMAZON_API_KEY, AMAZON_SECRET_KEY, 'es', AMAZON_ASSOCIATE_TAG);
$amazon->returnType(amazonApi::RETURN_TYPE_ARRAY);

$response = $amazon->category('All')->responseGroup('Large')->search("oferta");
//$data = $response['Items']['Item'];
/*
if (isset($data['ASIN'])) {
  $data = array($data);
 }
*/

//var_dump($data);
echo $a;
echo AMAZON_ASSOCIATE_TAG;
