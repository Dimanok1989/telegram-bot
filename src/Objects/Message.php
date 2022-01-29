<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents a message.
 *
 * @link https://core.telegram.org/bots/api#message
 */
class Message extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'message_id' => "integer",
        'from' => User::class,
        'sender_chat' => Chat::class,
        'date' => "integer",
        'chat' => Chat::class,
        'forward_from' => User::class,
        'forward_from_chat' => Chat::class,
        'forward_from_message_id' => "integer",
        'forward_signature' => "string",
        'forward_sender_name' => "string",
        'forward_date' => "integer",
        'is_automatic_forward' => "boolean",
        'reply_to_message' => Message::class,
        'via_bot' => User::class,
        'edit_date' => "integer",
        'has_protected_content' => "boolean",
        'media_group_id' => "string",
        'author_signature' => "string",
        'text' => "string",
        'entities' => "array", // MessageEntity::class
        'animation' => Animation::class,
        // 'audio' => Audio::class,
        // 'document' => Document::class,
        // 'photo' => "array", // PhotoSize::class
        // 'sticker' => Sticker::class,
        // 'video' => Video::class,
        // 'video_note' => VideoNote::class,
        // 'voice' => Voice::class,
        'caption' => "string",
        'caption_entities' => "array", // MessageEntity::class
        // 'contact' => Contact::class,
        // 'dice' => Dice::class,
        // 'game' => Game::class,
        // 'poll' => Poll::class,
        // 'venue' => Venue::class,
        // 'location' => Location::class,
        'new_chat_members' => "array", // User::class,
        'left_chat_member' => User::class,
        'new_chat_title' => "string",
        'new_chat_photo' => "array", // PhotoSize::class
        'delete_chat_photo' => "boolean",
        'group_chat_created' => "boolean",
        'supergroup_chat_created' => "boolean",
        'channel_chat_created' => "boolean",
        // 'message_auto_delete_timer_changed' => MessageAutoDeleteTimerChanged::class,
        'migrate_to_chat_id' => "integer",
        'migrate_from_chat_id' => "integer",
        'pinned_message' => Message::class,
        // 'invoice' => Invoice::class,
        // 'successful_payment' => SuccessfulPayment::class,
        'connected_website' => "string",
        // 'passport_data' => PassportData::class,
        // 'proximity_alert_triggered' => ProximityAlertTriggered::class,
        // 'voice_chat_scheduled' => VoiceChatScheduled::class,
        // 'voice_chat_started' => VoiceChatStarted::class,
        // 'voice_chat_ended' => VoiceChatEnded::class,
        // 'voice_chat_participants_invited' => VoiceChatParticipantsInvited::class,
        'reply_markup' => InlineKeyboardMarkup::class,
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
