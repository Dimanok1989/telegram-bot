<?php

namespace Kolgaev\TelegramBot;

use GuzzleHttp\Client;

class TelegramClient
{
    /**
     * Http client
     * 
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * Response server
     * 
     * @var array
     */
    protected $response;

    /**
     * Initialisation client object
     * 
     * @param array $config
     * @return void
     */
    public function __construct($config = [])
    {
        $this->client = new Client($config);
    }

    /**
     * Send request
     * 
     * @param string $method
     * @param string $uri
     * @param array $data
     * @return \Kolgaev\TelegramBot\Response
     */
    public function sendRequest($method, $uri, $data)
    {
        $response = $this->client->request($method, $uri, $data);

        return new Response($response);
    }

    /**
     * Send POST request
     * 
     * @param string $uri
     * @param array $data
     * @return \Kolgaev\TelegramBot\Response
     */
    public function post($uri = "", $data = [])
    {
        return $this->sendRequest("POST", $uri, [
            'form_params' => $data
        ]);
    }

    /**
     * Send GET request
     * 
     * @param string $uri
     * @param array $data
     * @return \Kolgaev\TelegramBot\Response
     */
    public function get($uri = "", $data = [])
    {
        return $this->sendRequest("GET", $uri, [
            'query' => $data
        ]);
    }
}
