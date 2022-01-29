<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents a Telegram user or bot.
 * 
 * @property integer $id  Unique identifier for this user or bot. This number may have more than
 *                        32 significant bits and some programming languages may have
 *                        difficulty/silent defects in interpreting it. But it has at most 52
 *                        significant bits, so a 64-bit integer or double-precision float type are
 *                        safe for storing this identifier.
 * @property bool $is_bot  True, if this user is a bot
 * @property string $first_name  User's or bot's first name
 * @property string $last_name  Optional. User's or bot's last name
 * @property string $username  Optional. User's or bot's username
 * @property string $language_code  Optional. IETF language tag of the user's language
 * @property bool $can_join_groups  Optional. True, if the bot can be invited to groups. Returned only in getMe.
 * @property bool $can_read_all_group_messages  Optional. True, if privacy mode is disabled for the bot.
 *                                              Returned only in getMe.
 * @property bool $supports_inline_queries  Optional. True, if the bot supports inline queries.
 *                                          Returned only in getMe.
 * 
 * @link https://core.telegram.org/bots/api#user
 */
class User extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'id' => "integer",
        'is_bot' => "boolean",
        'first_name' => "string",
        'last_name' => "string",
        'username' => "string",
        'language_code' => "string",
        'can_join_groups' => "boolean",
        'can_read_all_group_messages' => "boolean",
        'supports_inline_queries' => "boolean",
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
