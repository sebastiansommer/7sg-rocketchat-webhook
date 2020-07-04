<?php
declare(strict_types=1);

namespace Seven\RocketChatWebHook;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class RocketChat
{
    /**
     * @var string
     */
    public static $endPoint;

    /**
     * @return string
     */
    public static function getEndPoint(): string
    {
        return self::$endPoint;
    }

    /**
     * @param string $endPoint
     */
    public static function setEndPoint(string $endPoint): void
    {
        self::$endPoint = $endPoint;
    }

    /**
     * @param Message $message
     * @param string $channel
     * @throws Exception
     */
    public static function sendMessage(Message $message, string $channel)
    {
        if (self::$endPoint === null) {
            throw new Exception('Rocket chat endpoint was not set.');
        }

        $client = new Client([
            'base_uri' => self::$endPoint,
            'headers' => [
                'User-Agent' => 'seven-rocket-chat-webhook-sdk/1.0'
            ]
        ]);

        $result = $client->post('hooks/' . $channel, [
            RequestOptions::JSON => [
                'text' => $message->getText(),
                'attachments' => $message->getAttachments()
            ]
        ]);

        if ($result->getStatusCode() !== 200) {
            throw new Exception('Unable to send message to rocket chat: ' . $result->getStatusCode());
        }
    }
}
