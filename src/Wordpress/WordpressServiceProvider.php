<?php

namespace Wordpress;

use Illuminate\Support\ServiceProvider;

class WordpressServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('wordpress', Wordpress::class);
    }
}
