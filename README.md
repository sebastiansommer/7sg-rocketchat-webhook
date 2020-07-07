# 7sg-rocketchat-webhook
A PHP interface to send requests to Rocket Chat incoming webhooks.

## Install

```bash
composer require 7sg/rocketchat-webhook
```

## Usage
### Simple message

```php
use Seven\RocketChatWebHook\Message as RocketChatMessage;
use Seven\RocketChatWebHook\RocketChat;

RocketChat::setEndPoint('https:/rocketchat.url');

$message = new RocketChatMessage('Hello!');
$message->setEmoji('🥳');

RocketChat::sendMessage($message, 'webhook-hash-and-channel');
```
### Messages can also have attachments
You can find a full list of all fields [here](https://docs.rocket.chat/api/rest-api/methods/chat/postmessage#attachments-detail).
```php
$attachment = new RocketChatMessage\Attachment();
$attachment->title = 'Title';
$attachment->title_link = 'https://test.test';
$attachment->fields = [
    [
        'title' => 'Test',
        'value' => 'value'
    ]
];

$message->addAttachment($attachment);
```
