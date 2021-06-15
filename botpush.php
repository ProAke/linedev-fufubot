<?php



require "vendor/autoload.php";

$access_token = '7kEbRL4K5zBY0u4x6FtF/sZQYVGmB2GxUgTL72jsRIzxc2df93uLQ96hJ89fqH42FEFrTStdm0ZnGvLxX4Rk6+GEJWUQIco1sUYwlJUertYlQ67EvVfKa4fKxVl9LHrDUpoOI6cnz6vMn6qpa7cVDwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7b81acd4ff1bc1ed1c8ec4d89728c992';

$pushID = 'Uf0d3b0c8e196e3d31ecaac13935a9991';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
