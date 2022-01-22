<?php

namespace Kolgaev\TelegramBot;

class Telegram extends Api
{
    /**
     * Creating an instance of the Telegram object
     * 
     * @param null|string $token
     * @return void
     */
    public function __construct($token = null)
    {
        parent::__construct($token);
    }
}
