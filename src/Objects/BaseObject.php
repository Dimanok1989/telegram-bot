<?php

namespace Kolgaev\TelegramBot\Objects;

use Illuminate\Support\Collection;
use Kolgaev\TelegramBot\Exceptions\TelegramBotException;

class BaseObject extends Collection
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [];

    /**
     * Input data
     * 
     * @var array
     */
    protected $data;

    /**
     * Instantiating an Object
     * 
     * @param array
     * @return void
     */
    public function __construct($data = [])
    {
        $this->data = $this->setPropsTypes($data);

        parent::__construct($this->data);
    }

    /**
     * Sets classes list
     * 
     * @param array
     */
    public function setClasses($list)
    {
        $this->classes = $list;
    }

    /**
     * Returns array data
     * 
     * @return array
     */
    public function getData()
    {
        foreach ($this->items as &$item) {
            if (is_object($item) and method_exists($item, "getData"))
                $item = $item->getData();
        }

        return $this->all();
    }

    /**
     * Sets all objects
     * 
     * @return array
     */
    public function setObjects($data)
    {
        foreach ($this->classes as $key => $class) {
            if (!empty($data[$key])) {
                $data[$key] = new $class($data[$key]);
            }
        }

        return $data;
    }

    /**
     * Sets types props
     * 
     * @return 
     */
    public function setPropsTypes($data)
    {
        foreach ($data as $key => &$row) {

            if (isset($this->props_types[$key])) {
                $row = $this->setType($row, $this->props_types[$key]);
            }
        }

        return $data;
    }

    /**
     * Sets type
     * 
     * @param mixed $var
     * @param string $type
     * @return mixed
     */
    public function setType($var, $type)
    {
        if (class_exists($type))
            return new $type($var);

        if (!in_array($type, ["boolean", "bool", "integer", "int", "float", "double", "string", "array"]))
            return $var;

        if (gettype($var) == $type)
            return $var;

        return settype($var, $type);
    }

    /**
     * Dynamically access collection proxies.
     * 
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        if (!empty($this->data[$name]))
            return $this->data[$name];

        return null;
    }

    /**
     * Dynamically handle calls to the class.
     * 
     * @param string $method
     * @param array $parameters
     * @return mixed
     * 
     * @throws \Kolgaev\TelegramBot\Exceptions\TelegramBotException
     */
    public function __call($method, $parameters)
    {
        if (strpos($method, "get") === 0) {
            return $this->getDynamicallyItemKeyName(str_replace("get", "", $method));
        }

        throw new TelegramBotException("Bad call [$method] method");
    }

    /**
     * Dimanic output of the input data property
     * 
     * @param string $name
     * @return mixed
     */
    public function getDynamicallyItemKeyName($name)
    {
        $key = "";

        foreach (str_split(lcfirst($name)) as $char) {
            $key .= ctype_upper($char) ? "_" . lcfirst($char) : $char;
        }

        if (!empty($this->data[$key]))
            return $this->data[$key];

        return null;
    }
}
