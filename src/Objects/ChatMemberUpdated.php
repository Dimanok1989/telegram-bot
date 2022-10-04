<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents changes in the status of a chat member.
 *
 * @link https://core.telegram.org/bots/api#chatmemberupdated
 */
class ChatMemberUpdated extends BaseObject
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
        'old_chat_member' => ChatMember::class,
        'new_chat_member' => ChatMember::class,
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
