<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 */
class ChatMemberMember extends BaseObject
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
