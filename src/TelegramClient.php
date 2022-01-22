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
     * @return array
     */
    public function sendRequest($method, $uri, $data)
    {
        $response = $this->client->request($method, $uri, $data);

        $body = $response->getBody()->getContents();
        $content = json_decode($body, true);

        return $content ?: [$body];
    }

    /**
     * Send POST request
     * 
     * @param string $uri
     * @param array $data
     * @return array
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
     * @return array
     */
    public function get($uri = "", $data = [])
    {
        return $this->sendRequest("GET", $uri, [
            'query' => $data
        ]);
    }
}
