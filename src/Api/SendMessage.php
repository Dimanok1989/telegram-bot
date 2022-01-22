<?php

namespace Kolgaev\TelegramBot\Api;

use Kolgaev\TelegramBot\Objects\Message;

trait SendMessage
{
    /**
     * Use this method to send text messages. On success, the sent Message is returned.
     * ```
     * $params = [
     *   'chat_id'                  => int|string,
     *   'text'                     => string,
     *   'parse_mode'               => string,
     *   'entities'                 => array,
     *   'disable_web_page_preview' => bool,
     *   'disable_notification'     => bool,
     *   'protect_content'          => bool,
     *   'reply_to_message_id'      => int,
     *   'reply_markup'             => string,
     * ];
     * ```
     * 
     * @param array $params [
     * 
     *      @var int|string $chat_id  Required. Unique identifier for the target chat or username of the target
     *                                channel (in the format @channelusername)
     *      @var string $text  Required. Text of the message to be sent
     *      @var string $parse_mode  Optional. Send Markdown or HTML, if you want Telegram apps to show bold,
     *                               italic, fixed-width text or inline URLs in your bot's message.
     *      @var bool $disable_web_page_preview  Optional. Disables link previews for links in this message
     *      @var bool $disable_notification  Optional. Sends the message silently. Users will receive a
     *                                       notification with no sound.
     *      @var bool $protect_content  Optional. Protects the contents of the sent message from forwarding
     *                                  and saving
     *      @var int $reply_to_message_id  Optional. If the message is a reply, ID of the original message
     *      @var bool $allow_sending_without_reply  Optional. Pass True, if the message should be sent even
     *                                              if the specified replied-to message is not found
     *      @var string $reply_markup  Optional. Additional interface options. A JSON-serialized object for an
     *                                 inline keyboard, custom reply keyboard, instructions to remove reply keyboard
     *                                 or to force a reply from the user.
     * ]
     *
     * @link https://core.telegram.org/bots/api#sendmessage
     * 
     * @return \Kolgaev\TelegramBot\Response
     */
    public function sendMessage($params)
    {
        return $this->client()->post("sendMessage", $params)->object(Message::class);
    }
}
