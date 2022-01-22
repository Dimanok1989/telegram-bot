<?php

namespace Kolgaev\TelegramBot;

use Kolgaev\TelegramBot\Exceptions\TelegramBotException;

/**
 * @see https://core.telegram.org/bots/api
 */
class Api
{
    use Api\Webhook;

    public const APP_NAME = "Kolgaev Telegram Bot (kBot)";
    public const APP_VERSION = "0.1.0";

    public const ENV_TOKEN_VARIABLE_NAME = "TELEGRAM_API_TOKEN";
    public const TELEGRAM_API_HOST_URL = "https://api.telegram.org";

    /**
     * API access token
     * 
     * @var string
     */
    protected $token;

    /**
     * Http client
     * 
     * @var TelegramClient
     */
    protected $client;

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
        if (!$this->token = $token ?: getenv(self::ENV_TOKEN_VARIABLE_NAME))
            throw new TelegramBotException("Token not defined");
    }

    /**
     * Telegram API client
     * 
     * @return \GuzzleHttp\Client
     */
    public function client()
    {
        if (!$this->client) {
            $this->client = new TelegramClient([
                'base_uri' =>  self::TELEGRAM_API_HOST_URL . "/bot" . $this->token . "/",
                'verify' => false,
                'headers' => [
                    'User-Agent' => self::APP_NAME . " v." . self::APP_VERSION,
                    'Accept' => "application/json",
                    'X-Requested-With' => "XMLHttpRequest",
                ]
            ]);
        }

        return $this->client;
    }

    /**
     * Outputs the current token
     * 
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
