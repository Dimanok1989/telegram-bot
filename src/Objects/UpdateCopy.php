<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents an incoming update.
 * At most one of the optional parameters can be present in any given update.
 *
 * @link https://core.telegram.org/bots/api#update
 */
class Update extends BaseObject
{
    /**
     * The update's unique identifier. Update identifiers start from a certain positive number
     * and increase sequentially. This ID becomes especially handy if you're using Webhooks,
     * since it allows you to ignore repeated updates or to restore the correct update sequence,
     * should they get out of order. If there are no new updates for at least a week, then
     * identifier of the next update will be chosen randomly instead of sequentially.
     * 
     * @var int
     */
    public $update_id;

    /**
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\Message
     */
    public $message;

    /**
     * Optional. New version of a message that is known to the bot and was edited
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\Message
     */
    public $edited_message;

    /**
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\Message
     */
    public $channel_post;

    /**
     * Optional. New version of a channel post that is known to the bot and was edited
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\Message
     */
    public $edited_channel_post;

    /**
     * Optional. New incoming inline query
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\InlineQuery
     */
    public $inline_query;

    /**
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates
     * for your bot.
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\ChosenInlineResult
     */
    public $chosen_inline_result;

    /**
     * Optional. New incoming callback query
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\CallbackQuery
     */
    public $callback_query;

    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\ShippingQuery
     */
    public $shipping_query;

    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\PreCheckoutQuery
     */
    public $pre_checkout_query;

    /**
     * Optional. New poll state. Bots receive only updates about stopped polls and polls,
     * which are sent by the bot
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\Poll
     */
    public $poll;

    /**
     * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes
     * only in polls that were sent by the bot itself.
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\PollAnswer
     */
    public $poll_answer;
    
    /**
     * Optional. The bot's chat member status was updated in a chat. For private chats,
     * this update is received only when the bot is blocked or unblocked by the user.
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\ChatMemberUpdated
     */
    public $my_chat_member;

    /**
     * Optional. A chat member's status was updated in a chat. The bot must be an administrator
     * in the chat and must explicitly specify “chat_member” in the list of allowed_updates
     * to receive these updates.
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\ChatMemberUpdated
     */
    public $chat_member;

    /**
     * Optional. A request to join the chat has been sent. The bot must have the can_invite_users
     * administrator right in the chat to receive these updates.
     * 
     * @var null|\Kolgaev\TelegramBot\Objects\ChatJoinRequest
     */
    public $chat_join_request;

    /**
     * Attributes list classes types
     * 
     * @var array
     */
    protected $required_list = [
        'update_id',
    ];

    /**
     * Attributes list classes types
     * 
     * @var array
     */
    protected $classes_list = [
        'message' => Message::class,
        'edited_message' => Message::class,
        'channel_post' => Message::class,
        'edited_channel_post' => Message::class,
        'inline_query' => InlineQuery::class,
        'chosen_inline_result' => ChosenInlineResult::class,
        'callback_query' => CallbackQuery::class,
        'shipping_query' => ShippingQuery::class,
        'pre_checkout_query' => PreCheckoutQuery::class,
        'poll' => Poll::class,
        'poll_answer' => PollAnswer::class,
        'my_chat_member' => ChatMemberUpdated::class,
        'chat_member' => ChatMemberUpdated::class,
        'chat_join_request' => ChatJoinRequest::class,
    ];

    /**
     * Instantiating an Object
     * 
     * @param array
     * @return void
     */
    public function __construct($data = [])
    {
                
    }
}
