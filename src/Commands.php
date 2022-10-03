<?php

namespace Kolgaev\TelegramBot;

use Closure;
use Kolgaev\TelegramBot\Objects\Update;

class Commands
{
    /**
     * Commands list
     * 
     * @var array
     */
    protected $commands = [];

    /**
     * Found commands
     * 
     * @var array
     */
    protected $found = [];

    /**
     * Instantiating an Object
     * 
     * @param  \Kolgaev\TelegramBot\Objects\Update  $update
     * @return void
     */
    public function __construct(Update $update)
    {
        $this->findCommands($update);
    }

    /**
     * Finds a commands
     * 
     * @param  \Kolgaev\TelegramBot\Objects\Update  $update
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
     * @param  array  $entities
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
     * @param  int  $offset
     * @param  int  $length
     * @return string
     */
    public function parseMessageTextCommand($offset, $length)
    {
        return trim(mb_substr($this->message->getText(), $offset + 1, $length) ?: "");
    }

    /**
     * Регистрация комманды
     * 
     * @param  string  $name
     * @param  mixed  $handler
     * @return $this
     */
    public function on($name, $handler)
    {
        $this->commands[$name] = $handler;

        return $this;
    }

    /**
     * Run commands execution
     * 
     * @return $this 
     */
    public function start()
    {
        foreach ($this->found as $cmd) {

            if (isset($this->commands[$cmd])) {
                $this->run($this->commands[$cmd]);
            }
        }

        return $this;
    }

    /**
     * Run command
     * 
     * @param  mixed  $cmd
     * @return $this
     */
    public function run($cmd)
    {
        if (is_string($cmd))
            return $this->runFromString($cmd);

        if ($cmd instanceof Closure)
            $cmd($this);

        return $this;
    }

    /**
     * Run command
     * 
     * @param  string  $cmd
     * @return $this
     */
    public function runFromString($cmd)
    {
        $cmd = explode("@", trim($cmd));

        $class = $cmd[0] ?? "";
        $method = $cmd[1] ?? null;

        if (class_exists($class)) {

            $object = new $cmd[0];

            if (method_exists($object, $method)) {
                $object->$method($this);
            } else if (method_exists($object, "__invoke")) {
                $object($this);
            }
        }

        return $this;
    }
}
