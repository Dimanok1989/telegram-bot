<?php

namespace Kolgaev\TelegramBot;

use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Kolgaev\TelegramBot\Exceptions\ResponseException;
use Symfony\Component\HttpFoundation\JsonResponse;

class Response
{
    /**
     * Array response body
     * 
     * @var array
     */
    protected $body = [];

    /**
     * OK status
     * 
     * @var bool
     */
    protected $ok = false;

    /**
     * Result array
     * 
     * @var array
     */
    protected $result = [];

    /**
     * Instantiating the Response Object
     * 
     * @param \GuzzleHttp\Psr7\Response $response
     * @return void
     */
    public function __construct(
        protected GuzzleResponse $response
    ) {
        $this->parseResponse();
    }

    /**
     * Telegram response parser
     * 
     * @return null
     * 
     * @throws \Kolgaev\TelegramBot\Exceptions\ResponseException
     */
    protected function parseResponse()
    {
        $body = $this->response->getBody()->getContents();

        $this->body = json_decode($body, true) ?: [];

        if ($error = json_last_error())
            throw new ResponseException("Parser JSON error [$error] $body");

        $this->ok = (bool) $this->body['ok'] ?: false;
        $this->result = $this->body['result'] ?? [];

        return null;
    }

    /**
     * Gets the response status code
     * 
     * @return int
     */
    public function getStatusCode()
    {
        return $this->response->getStatusCode();
    }

    /**
     * Gets array body
     * 
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Gets OK status
     * 
     * @return bool
     */
    public function getOk()
    {
        return $this->ok;
    }

    /**
     * Gets result array
     * 
     * @return array
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Json response
     * 
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function json()
    {
        return new JsonResponse($this->body, $this->getStatusCode());
    }

    /**
     * Dynamic output of data by key from an array with a result
     * 
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->result)) {
            return $this->result[$name];
        }

        return null;
    }

    /**
     * Handle dynamic method calls into the method.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (strripos($name, "get") !== false)
            return $this->getAttributeFromDynamicMethod($name);

        return null;
    }

    /**
     * Find attribute in result array
     * 
     * @param string $name
     * @return mixed
     */
    public function getAttributeFromDynamicMethod($name)
    {
        $attr = "";
        $name = lcfirst(str_replace("get", "", $name));

        foreach (str_split($name) as $char) {
            $attr .= ctype_upper($char) ? "_" . lcfirst($char) : $char;
        }

        return $this->__get($attr);
    }
}
