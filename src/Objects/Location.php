<?php

namespace Kolgaev\TelegramBot\Objects;

/**
 * This object represents a point on the map.
 * 
 * @property float $longitude  Longitude as defined by sender
 * @property float $latitude  Latitude as defined by sender
 * @property float $horizontal_accuracy  _Optional._ The radius of uncertainty for the location, measured in meters; 
 *                                       0-1500
 * @property integer $live_period  _Optional._ Time relative to the message sending date, during which the location
 *                                 can be updated; in seconds. For active live locations only.
 * @property integer $heading  _Optional._ The direction in which user is moving, in degrees; 1-360. For active
 *                             live locations only.
 * @property integer $proximity_alert_radius  _Optional._ The maximum distance for proximity alerts about 
 *                                            approaching another chat member, in meters. For sent live locations
 *                                            only.
 *
 * @link https://core.telegram.org/bots/api#location
 */
class Location extends BaseObject
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [
        'longitude' => "float",
        'latitude' => "float",
        'horizontal_accuracy' => "float",
        'live_period' => "integer",
        'heading' => "integer",
        'proximity_alert_radius' => "integer",
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
