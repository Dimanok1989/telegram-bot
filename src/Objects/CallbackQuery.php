<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard.
 * If the button that originated the query was attached to a message sent by the bot, the field message
 * will be present. If the button was attached to a message sent via the bot (in inline mode), the field
 * inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 *
 * @property string $id  Unique identifier for this query
 * @property \Kolgaev\TelegramBot\Objects\User $from  Sender
 * @property \Kolgaev\TelegramBot\Objects\Message $from  _Optional._ Message with the callback button that
 *                                                       originated the query. Note that message content
 *                                                       and message date will not be available if the
 *                                                       message is too old
 * @property string $inline_message_id  _Optional._ Identifier of the message sent via the bot in inline mode,
 *                                                that originated the query.
 * @property string $chat_instance  Global identifier, uniquely corresponding to the chat to which the message 
 *                                  with the callback button was sent. Useful for high scores in games.
 * @property string $data  _Optional._ Data associated with the callback button. Be aware that the message
 *                         originated the query can contain no callback buttons with this data.
 * @property string $game_short_name  _Optional._ Short name of a Game to be returned, serves as the unique
 *                                    identifier for the game
 * 
 * @link https://core.telegram.org/bots/api#callbackquery
 */
class CallbackQuery extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'id' => "string",
        'from' => User::class,
        'message' => Message::class,
        'inline_message_id' => "string",
        'chat_instance' => "string",
        'data' => "string",
        'game_short_name' => "string",
    ];

    /**
     * Instantiating an Object
     * 
     * @param array
     * @return void
     */
    public function __construct($data = [])
    {
        parent::__construct($data);
    }
}
