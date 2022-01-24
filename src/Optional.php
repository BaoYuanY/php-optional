<?php

namespace yby\optional;

class Optional
{
    protected $obj = null;
    protected $default = null;

    public function __construct($obj, $default = null)
    {
        $this->obj = $obj;
        $this->default = $default;
    }

    public function __get($key)
    {
        if (is_object($this->obj)) {
            return $this->obj->{$key};
        }
        if (is_callable($this->default)) {
            $func = $this->default;
            return $func($this->obj);
        }
        return $this->default;
    }
}