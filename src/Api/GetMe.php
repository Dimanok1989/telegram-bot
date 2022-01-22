<?php

namespace Kolgaev\TelegramBot\Api;

use Kolgaev\TelegramBot\Objects\User;

trait GetMe
{
    /**
     * A simple method for testing your bot's authentication token. Requires no parameters.
     * Returns basic information about the bot in form of a User object.
     * 
     * @see https://core.telegram.org/bots/api#getme
     * 
     * @return \Kolgaev\TelegramBot\Response
     */
    public function getMe()
    {
        return $this->client()->post("getMe")->object(User::class);
    }
}
