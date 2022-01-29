<?php

namespace Kolgaev\TelegramBot\Objects;

use Illuminate\Support\Collection;

class BaseObject extends Collection
{
    /**
     * Attributes list types
     * 
     * @var array
     */
    protected $props_types = [];

    /**
     * Instantiating an Object
     * 
     * @param array
     * @return void
     */
    public function __construct($data = [])
    {
        $data = $this->setPropsTypes($data);

        parent::__construct($data);
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

    public function toArray()
    {
        $this;
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
}
