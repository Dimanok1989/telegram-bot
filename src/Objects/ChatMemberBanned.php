<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @link https://core.telegram.org/bots/api#chatmemberbanned
 */
class ChatMemberBanned extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'status' => "string",
        'user' => User::class,
        'until_date' => "integer",
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
