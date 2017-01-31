<?php
$botToken = "303282760:AAGg7ig2FZzLqNvMbATTOOi-U5yi_f1Fc98";
$chat_id = "@amazono";
$message = "Hola, saludos de amazono";
$bot_url    = "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
$urlGetMe = "https://api.telegram.org/bot$botToke/getMe";
$a = file_get_contents($url);
echo $a;
