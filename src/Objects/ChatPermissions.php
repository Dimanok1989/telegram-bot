<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents a chat photo.
 *
 * @property string $can_send_messages  _Optional._ True, if the user is allowed to send text messages, contacts,
 *                                      locations and venues
 * @property string $can_send_media_messages  _Optional._ True, if the user is allowed to send audios, documents,
 *                                            photos, videos, video notes and voice notes, implies can_send_messages
 * @property string $can_send_polls  _Optional._ True, if the user is allowed to send polls, implies 
 *                                   can_send_messages
 * @property string $can_send_other_messages  _Optional._ True, if the user is allowed to send animations, games,
 *                                            stickers and use inline bots, implies can_send_media_messages
 * @property string $can_add_web_page_previews  _Optional._ True, if the user is allowed to add web page previews
 *                                              to their messages, implies can_send_media_messages
 * @property string $can_change_info  _Optional._ True, if the user is allowed to change the chat title, photo and
 *                                    other settings. Ignored in public supergroups
 * @property string $can_invite_users  _Optional._ True, if the user is allowed to invite new users to the chat
 * @property string $can_pin_messages  _Optional._ True, if the user is allowed to pin messages. Ignored in public
 *                                     supergroups
 * 
 * @link https://core.telegram.org/bots/api#chatpermissions
 */
class ChatPermissions extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'can_send_messages' => "boolean",
        'can_send_media_messages' => "boolean",
        'can_send_polls' => "boolean",
        'can_send_other_messages' => "boolean",
        'can_add_web_page_previews' => "boolean",
        'can_change_info' => "boolean",
        'can_invite_users' => "boolean",
        'can_pin_messages' => "boolean",
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
