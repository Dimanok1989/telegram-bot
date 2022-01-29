<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents a chat.
 *
 * @link https://core.telegram.org/bots/api#chat
 */
class Chat extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'id' => "integer",
        'type' => "string",
        'title' => "string",
        'username' => "string",
        'first_name' => "string",
        'last_name' => "string",
        // 'photo' => ChatPhoto::class,
        'bio' => "string",
        'has_private_forwards' => "boolean",
        'description' => "string",
        'invite_link' => "string",
        'pinned_message' => Message::class,
        // 'permissions' => ChatPermissions::class,
        'slow_mode_delay' => "integer",
        'message_auto_delete_time' => "integer",
        'has_protected_content' => "boolean",
        'sticker_set_name' => "string",
        'can_set_sticker_set' => "boolean",
        'linked_chat_id' => "integer",
        // 'location' => ChatLocation::class,
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
