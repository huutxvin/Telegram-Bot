<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '518924930:AAGILn7d80OP1evzrubAufWG2yNUMnytFVM';
$bot_username = 'VinsDemoBot';
$hook_url = 'https://webhayhay.com/telegrambot/huutraining/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}