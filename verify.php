<?php
$access_token = '7kEbRL4K5zBY0u4x6FtF/sZQYVGmB2GxUgTL72jsRIzxc2df93uLQ96hJ89fqH42FEFrTStdm0ZnGvLxX4Rk6+GEJWUQIco1sUYwlJUertYlQ67EvVfKa4fKxVl9LHrDUpoOI6cnz6vMn6qpa7cVDwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
