<?php

namespace Kolgaev\TelegramBot;

use GuzzleHttp\Client;
use Kolgaev\TelegramBot\Exceptions\TelegramBotException;

class Telegram
{
    public const TELEGRAM_API_URL = "https://api.telegram.org";

    /**
     * API access token
     * 
     * @var string
     */
    protected $token;

    /**
     * Client
     * 
     * @var \GuzzleHttp\Client
     */
    public $client;

    /**
     * Instantiating an Object
     * 
     * @param null|string $token
     * @return void
     * 
     * @throws \Kolgaev\TelegramBot\Exceptions\TelegramBotException
     */
    public function __construct($token = null)
    {
        if (!$this->token = $token)
            throw new TelegramBotException("Token not defined", 1);

        $this->client = new Client([
            'base_uri' =>  self::TELEGRAM_API_URL . "/bot" . $this->token . "/",
        ]);
    }
}
