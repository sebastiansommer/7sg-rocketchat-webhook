# 7sg-rocketchat-webhook
A PHP interface to send requests to Rocket Chat incoming webhooks.

## Install

```bash
composer require 7sg/rocketchat-webhook
```

## Usage
```php
use Seven\RocketChatWebHook\Message as RocketChatMessage;
use Seven\RocketChatWebHook\RocketChat;

RocketChat::setEndPoint('https:/rocketchat.url');

$message = new RocketChatMessage('Hello!');
$message->setEmoji('🥳');

RocketChat::sendMessage($message, 'webhook-hash-and-channel');
```
