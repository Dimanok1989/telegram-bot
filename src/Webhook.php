<?php

namespace Kolgaev\TelegramBot;

use Closure;
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
     * @param  array  $input
     * @param  null|string  $token
     * @return void
     */
    public function __construct($input = [], $token = null)
    {
        $this->input = new Update($input);

        parent::__construct($this->input);

        $this->telegram = new Telegram($token);
    }

    /**
     * Command registration method
     * 
     * @param  \Closure  $callback
     * @return $this
     */
    public function register(Closure $callback)
    {
        $callback($this);

        return $this;
    }
}
