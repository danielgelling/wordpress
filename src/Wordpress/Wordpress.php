<?php

namespace DanielGelling\Wordpress;

class Wordpress
{
    protected $foo;

    public function set($foo)
    {
        $this->foo = $foo;
    }

    public function get()
    {
        return $this->foo;
    }
}
