<?php

namespace Mranarola\ErrorLens\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mranarola\ErrorLens\ErrorLens
 */
class ErrorLens extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mranarola\ErrorLens\ErrorLens::class;
    }
}
