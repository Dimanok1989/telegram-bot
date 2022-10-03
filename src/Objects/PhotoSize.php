<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object contains information about a poll.
 *
 * @property string $file_id  Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id  Unique identifier for this file, which is supposed to be the same
 *                                   over time and for different bots. Can't be used to download or reuse
 *                                   the file.
 * @property integer $width  Photo width
 * @property integer $height  Photo height
 * @property integer $file_size  _Optional._ File size in bytes
 * 
 * @link https://core.telegram.org/bots/api#photosize
 */
class PhotoSize extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'file_id' => "string",
        'file_unique_id' => "string",
        'width' => "integer",
        'height' => "integer",
        'file_size' => "integer",
    ];

    /**
     * Instantiating an Object
     * 
     * @param  array  $data
     * @return void
     */
    public function __construct($data = [])
    {
        parent::__construct($data);
    }
}
