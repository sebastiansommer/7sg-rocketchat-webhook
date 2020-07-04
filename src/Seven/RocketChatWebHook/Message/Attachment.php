<?php
declare(strict_types=1);

namespace Seven\RocketChatWebHook\Message;

/**
 * @see: https://docs.rocket.chat/api/rest-api/methods/chat/postmessage#attachments-detail
 */
class Attachment
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $ts;

    /**
     * @var string
     */
    public $thumb_url;

    /**
     * @var string
     */
    public $message_link;

    /**
     * @var string
     */
    public $collapsed;

    /**
     * @var string
     */
    public $author_name;

    /**
     * @var string
     */
    public $author_link;

    /**
     * @var string
     */
    public $author_icon;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $title_link;

    /**
     * @var string
     */
    public $title_link_download;

    /**
     * @var string
     */
    public $image_url;

    /**
     * @var string
     */
    public $audio_url;

    /**
     * @var string
     */
    public $video_url;

    /**
     * @var array
     */
    public $fields;
}
