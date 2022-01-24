<?php

namespace Kolgaev\TelegramBot\Objects;

use Illuminate\Support\Collection;

class BaseObject extends Collection
{
    public function __construct($data)
    {
        parent::__construct($data);
    }
}
