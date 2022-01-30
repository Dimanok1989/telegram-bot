<?php

namespace Kolgaev\TelegramBot;

use Kolgaev\TelegramBot\Objects\Update;

class Webhook extends Commands
{
    /**
     * Input data
     * 
     * @var \Kolgaev\TelegramBot\Objects\Update
     */
    protected $input;

    /**
     * Telegram Client
     * 
     * @var \Kolgaev\TelegramBot\Telegram
     */
    public $telegram;

    /**
     * Instantiating an Object
     * 
     * @param array $input
     * @param null|string $token
     * @return void
     */
    public function __construct($input = [], $token = null)
    {
        $this->input = new Update($input);

        $this->telegram = new Telegram($token);

        parent::__construct($this->input);
    }
}
