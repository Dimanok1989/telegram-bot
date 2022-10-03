<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 * 
 * @property string $file_id  Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id  Unique identifier for this file, which is supposed to be the same
 *                                   over time and for different bots. Can't be used to download or reuse
 *                                   the file.
 * @property integer $width  Video width as defined by sender
 * @property integer $height  Video height as defined by sender
 * @property integer $duration Duration of the video in seconds as defined by sender
 * @property \Kolgaev\TelegramBot\Objects\PhotoSize $thumb  Optional. Animation thumbnail as defined by sender
 * @property string $file_name  _Optional._ Original animation filename as defined by sender
 * @property string $mime_type  _Optional._ MIME type of the file as defined by sender
 * @property integer $file_size  _Optional._ File size in bytes. It can be bigger than 2^31 and some programming
 *                               languages may have difficulty/silent defects in interpreting it. But it has at
 *                               most 52 significant bits, so a signed 64-bit integer or double-precision float
 *                               type are safe for storing this value.
 * 
 * @link https://core.telegram.org/bots/api#animation
 */
class Animation extends BaseObject
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
        'duration' => "integer",
        'thumb' => PhotoSize::class,
        'file_name' => "string",
        'mime_type' => "string",
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
