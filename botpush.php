<?php



require "vendor/autoload.php";

$access_token = 'QV4Z3GwTNAwu+MVcwGCGAALxv9W/lHMLm6J/tvZvdS8eBf6A2nRlC1QdFvLI28iZ+zFZ7FrYjjbrFvQw84+Axi+P1zWPnxSCTl/lF5gVTDYFM8sdYtwxA1PVP5Tir5WzkwwsuzPxbs9IkWqxEvvcvQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c3aa02ca5442a7640d2c577f936da0d4';

$pushID = 'U44c2e72994ecff53947def77dbe79b62';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







