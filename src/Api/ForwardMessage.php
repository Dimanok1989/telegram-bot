<?php

namespace Kolgaev\TelegramBot\Api;

use Kolgaev\TelegramBot\Objects\Message;

trait ForwardMessage
{
    /**
     * Use this method to forward messages of any kind. Service messages can't be forwarded.
     * On success, the sent Message is returned.
     * 
     * ```
     * $params = [
     *   'chat_id'                  => int|string,
     *   'from_chat_id'             => int|string,
     *   'disable_notification'     => bool,
     *   'protect_content'          => bool,
     *   'message_id'               => int,
     * ];
     * ```
     * 
     * @param array $params [
     * 
     *      @var int|string $chat_id  Required. Unique identifier for the target chat or username of the target
     *                                channel (in the format @channelusername)
     *      @var string $from_chat_id  Required. Unique identifier for the chat where the original message was
     *                                 sent (or channel username in the format @channelusername)
     *      @var bool $disable_notification  Optional. Sends the message silently. Users will receive a
     *                                       notification with no sound.
     *      @var bool $protect_content  Optional. Protects the contents of the sent message from forwarding
     *                                  and saving
     *      @var string $message_id  Message identifier in the chat specified in from_chat_id
     * 
     * ]
     *
     * @link https://core.telegram.org/bots/api#sendmessage
     * 
     * @return \Kolgaev\TelegramBot\Response
     */
    public function forwardMessage($params)
    {
        return $this->client()->post("forwardMessage", $params)->object(Message::class);
    }
}
