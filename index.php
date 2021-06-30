<?php
//$url = "https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=" . $accessToken;

//$instagramCnct = curl_init(); // инициализация cURL подключения
//curl_setopt($instagramCnct, CURLOPT_URL, $url); // адрес запроса
//curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1); // просим вернуть результат
//$response = json_decode(curl_exec($instagramCnct)); // получаем и декодируем данные из JSON
//curl_close($instagramCnct); // закрываем соединение

// обновляем токен и дату его создания в базе

$accessToken = $response->access_token; // обновленный токен

$url = "https://graph.instagram.com/me/media?fields=id,media_type,media_url,caption,timestamp,thumbnail_url,permalink&access_token=" . $accessToken;
$instagramCnct = curl_init(); // инициализация cURL подключения
curl_setopt($instagramCnct, CURLOPT_URL, $url); // адрес запроса
curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1); // просим вернуть результат
$media = json_decode(curl_exec($instagramCnct)); // получаем и декодируем данные из JSON
curl_close($instagramCnct); // закрываем соединение
