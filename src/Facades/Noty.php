<?php

namespace Sarfraznawaz2005\Noty\Facades;

use Illuminate\Support\Facades\Facade;

class Noty extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'noty';
    }
}
