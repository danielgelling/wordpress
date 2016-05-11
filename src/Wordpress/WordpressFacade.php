<?php

namespace Wordpress;

use Illuminate\Support\Facades\Facade;

class WordpressFacade extends Facade
{
    public function getFacadeAccessor() { return 'wordpress'; }
}
