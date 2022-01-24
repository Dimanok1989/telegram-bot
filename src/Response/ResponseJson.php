<?php

namespace Kolgaev\TelegramBot\Response;

class ResponseJson extends Response
{
    /**
     * Headers
     * 
     * @var array
     */
    protected $headers = [
        'Content-Type' => "application/json",
    ];

    /**
     * Instantiating an Object
     * 
     * @param mixed $data
     * @param int $status
     * @param array $headers
     * @return void
     */
    public function __construct($data = null, $status = 200, $headers = [])
    {
        parent::__construct(
            $data,
            $status,
            array_unique(array_merge($this->headers, $headers))
        );

        $this->setContent($this->jsonContent($data));
    }

    /**
     * Array to json
     * 
     * @param mixed $data
     * @return string
     */
    public function jsonContent($data)
    {
        if ($data === null)
            $data = [];

        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
