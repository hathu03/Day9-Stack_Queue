<?php

class Patient
{
    public $name;
    public $code;
    public $next;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = null;
    }
    function readNode() {
        return 'Name: '.$this->name.'Code: '.$this->code;
    }
}