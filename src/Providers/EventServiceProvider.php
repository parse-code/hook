<?php

namespace Parse\Hook\Providers;

use Illuminate\Support\ServiceProvider;
use Parse\Hook\Events;

class EventServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('eventy', function ($app) {
            return new Events();
        });
    }
}
