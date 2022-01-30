<?php

namespace Kolgaev\TelegramBot\Api;

trait GetMyCommands
{
    /**
     * Use this method to get the current list of the bot's commands for the given scope
     * and user language. Returns Array of BotCommand on success. If commands aren't set,
     * an empty list is returned.
     * 
     * @see https://core.telegram.org/bots/api#getmycommands
     * 
     * @return \Kolgaev\TelegramBot\Response
     */
    public function getMyCommands()
    {
        return $this->client()->post("getMyCommands");
    }
}