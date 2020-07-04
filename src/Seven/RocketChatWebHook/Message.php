<?php
declare(strict_types=1);

namespace Seven\RocketChatWebHook;

use Seven\RocketChatWebHook\Message\Attachment;

class Message
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $emoji = '';

    /**
     * @var array
     */
    protected $attachments = [];

    /**
     * @param string $text
     */
    public function __construct(string $text = '')
    {
        if ($text !== '') {
            $this->text = $text;
        }
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        if ($this->getEmoji() !== '') {
            return $this->getEmoji() . ' ' . $this->text;
        } else {
            return $this->text;
        }
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @param string $emoji
     */
    public function setEmoji(string $emoji): void
    {
        $this->emoji = $emoji;
    }

    /**
     * @param Attachment $attachment
     */
    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = (array)$attachment;
    }

    /**
     * @return array
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param array $attachments
     */
    public function setAttachments(array $attachments): void
    {
        $this->attachments = $attachments;
    }
}
