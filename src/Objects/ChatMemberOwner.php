<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @link https://core.telegram.org/bots/api#chatmemberowner
 */
class ChatMemberOwner extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'status' => "string",
        'user' => User::class,
        'is_anonymous' => "boolean",
        'custom_title' => "string",
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
