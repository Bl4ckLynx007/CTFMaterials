<?php
$postLink0 = $_GET["POST"];
function getChannelPost($postLink, $botToken)
{
    $pattern = '/t.me\/([a-zA-Z0-9_]+)/';
    preg_match($pattern, $postLink, $matches);
    $channelUsername = $matches[1];

    $messageId = substr($postLink, strrpos($postLink, '/') + 1);

    $apiUrl = "https://api.telegram.org/bot$botToken/getChatMessage?chat_id=$channelUsername&message_id=$messageId";

    $response = file_get_contents($apiUrl);

    $data = json_decode($response, true);

    $messageText = $data['result']['text'];

    return $messageText;
}

getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
getChannelPost($postLink0,"bot_token");
$q = getChannelPost($postLink0,"bot_token");

echo("✅ORDER DONE\nCREDIT @YOUR USERNAME".$q);
//next topic is fake subs api.
//if want then dm on @tkkytrsandyoubot

//will be uploaded on 100 different msgs
?>
