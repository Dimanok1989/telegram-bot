<?php

namespace Kolgaev\TelegramBot;

use Kolgaev\TelegramBot\Objects\Update;

class Commands
{
    /**
     * Found commands
     * 
     * @var array
     */
    protected $found = [];

    /**
     * Instantiating an Object
     * 
     * @param  \Kolgaev\TelegramBot\Objects\Update $update
     * @return void
     */
    public function __construct(Update $update)
    {
        $this->findCommands($update);
    }

    /**
     * Finds a commands
     * 
     * @param  \Kolgaev\TelegramBot\Objects\Update $update
     * @return $this
     */
    public function findCommands(Update $update)
    {
        if ($this->message = $update->getMessage()) {
            $this->parseMessageEntitiesCommand($this->message->getEntities() ?: []);
        }

        return $this;
    }

    /**
     * Parses incoming message commands
     * 
     * @param  array $entities
     * @return $this
     */
    public function parseMessageEntitiesCommand($entities = [])
    {
        foreach ($entities as $row) {
            if ($row['type'] == "bot_command") {
                $this->found[] = $this->parseMessageTextCommand($row['offset'] ?? 0, $row['length'] ?? 0);
            }
        }

        return $this;
    }

    /**
     * Parses text message command
     * 
     * @param  int $offset
     * @param  int $length
     * @return string
     */
    public function parseMessageTextCommand($offset, $length)
    {
        return trim(mb_substr($this->message->getText(), $offset + 1, $length) ?: "");
    }
}
