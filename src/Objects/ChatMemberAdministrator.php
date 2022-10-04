<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a chat member that has some additional privileges.
 *
 * @link https://core.telegram.org/bots/api#chatmemberadministrator
 */
class ChatMemberAdministrator extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'status' => "string",
        'user' => User::class,
        'can_be_edited' => "boolean",
        'is_anonymous' => "boolean",
        'can_manage_chat' => "boolean",
        'can_delete_messages' => "boolean",
        'can_manage_video_chats' => "boolean",
        'can_restrict_members' => "boolean",
        'can_promote_members' => "boolean",
        'can_change_info' => "boolean",
        'can_invite_users' => "boolean",
        'can_post_messages' => "boolean",
        'can_edit_messages' => "boolean",
        'can_pin_messages' => "boolean",
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
