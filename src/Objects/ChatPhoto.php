<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents a chat photo.
 *
 * @property string $small_file_id  File identifier of small (160x160) chat photo. This file_id can be used
 *                                  only for photo download and only for as long as the photo is not changed.
 * @property string $small_file_unique_id  Unique file identifier of small (160x160) chat photo, which is
 *                                         supposed to be the same over time and for different bots. Can't
 *                                         be used to download or reuse the file.
 * @property string $big_file_id  File identifier of big (640x640) chat photo. This file_id can be used only
 *                                for photo download and only for as long as the photo is not changed.
 * @property string $big_file_unique_id  Unique file identifier of big (640x640) chat photo, which is supposed
 *                                       to be the same over time and for different bots. Can't be used to
 *                                       download or reuse the file.
 * 
 * @link https://core.telegram.org/bots/api#chatphoto
 */
class ChatPhoto extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'small_file_id' => "string",
        'small_file_unique_id' => "string",
        'big_file_id' => "string",
        'big_file_unique_id' => "string",
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
