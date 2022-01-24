<?php

namespace Kolgaev\TelegramBot;

use Kolgaev\TelegramBot\Objects\Update;

class Webhook extends Update
{
    /**
     * Instantiating an Object
     * 
     * @param array $input
     * @return void
     */
    public function __construct($input = [])
    {
        parent::__construct($input);
    }
}
