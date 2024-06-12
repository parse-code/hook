<?php

namespace Parse\Hook\Facades;

use Illuminate\Support\Facades\Facade;

class Hook extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Parse\Hook\Hook::class;
    }
}
