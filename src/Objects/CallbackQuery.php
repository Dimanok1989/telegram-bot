<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard.
 * If the button that originated the query was attached to a message sent by the bot, the field message
 * will be present. If the button was attached to a message sent via the bot (in inline mode), the field
 * inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 *
 * @link https://core.telegram.org/bots/api#callbackquery
 */
class CallbackQuery extends BaseObject
{
}
