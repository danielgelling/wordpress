<?php

namespace DanielGelling\Wordpress;

use Illuminate\Support\Facades\Facade;

class WordpressFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'wordpress'; }
}
