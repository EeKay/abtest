<?php

namespace EeKay\Abtest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EeKay\Abtest\Abtest
 */
class AbtestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Abtest';
    }
}
