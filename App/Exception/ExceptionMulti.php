<?php

namespace App\Exception;

class ExceptionMulti
    extends ExceptionLog
    implements \Iterator
{
    protected $data = [];

    public function addErrors($data)
    {
        $this->data = $data;
    }

    public function throwErrors()
    {
        return $this->data;
    }


    public function current()
    {
        return current($this->data);
    }


    public function next()
    {
        next($this->data);
    }


    public function key()
    {
        return key($this->data);
    }


    public function valid()
    {
        return null !== key($this->data);
    }


    public function rewind()
    {
        reset($this->data);
    }
}