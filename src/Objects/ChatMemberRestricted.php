<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 *
 * @link https://core.telegram.org/bots/api#chatmemberrestricted
 */
class ChatMemberRestricted extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'status' => "string",
        'user' => User::class,
        'is_member' => "boolean",
        'can_change_info' => "boolean",
        'can_invite_users' => "boolean",
        'can_pin_messages' => "boolean",
        'can_send_messages' => "boolean",
        'can_send_media_messages' => "boolean",
        'can_send_polls' => "boolean",
        'can_send_other_messages' => "boolean",
        'can_add_web_page_previews' => "boolean",
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
