<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * Represents a location to which a chat is connected.
 * 
 * @property \Kolgaev\TelegramBot\Objects\Location $loaction  The location to which the supergroup is connected.
 *                                                            Can't be a live location.
 * @property string $loaction  Location address; 1-64 characters, as defined by the chat owner
 *
 * @link https://core.telegram.org/bots/api#chatlocation
 */
class ChatLocation extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'location' => Location::class,
        'address' => "string",
    ];

    /**
     * Instantiating an Object
     * 
     * @param array
     * @return void
     */
    public function __construct($data = [])
    {
        parent::__construct($data);
    }
}
