<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a join request sent to a chat.
 * 
 * @property \Kolgaev\TelegramBot\Objects\Chat $chat  Chat to which the request was sent
 * @property \Kolgaev\TelegramBot\Objects\User $from  User that sent the join request
 * @property integer $date  Date the request was sent in Unix time
 * @property string $bio  Optional. Bio of the user.
 * @property \Kolgaev\TelegramBot\Objects\ChatInviteLink $invite_link  Optional. Chat invite link
 *                                             that was used by the user to send the join request
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 */
class ChatJoinRequest extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'chat' => Chat::class,
        'from' => User::class,
        'date' => "integer",
        'bio' => "string",
        'invite_link' => ChatInviteLink::class,
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
