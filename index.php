$url = 'http://spaces.ru';
$ci = curl_init($url);
curl_setopt($ci, CURLOPT_RETUNRTRANSFER, 1);
$reponse = curl_exec($ci);