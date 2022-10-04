<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 *
 * @link https://core.telegram.org/bots/api#chatmemberleft
 */
class ChatMemberLeft extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'status' => "string",
        'user' => User::class,
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
