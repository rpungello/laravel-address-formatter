<?php

namespace Rpungello\LaravelAddressing\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\LaravelAddressing\AddressFormatter
 */
class AddressFormatter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-address-formatter';
    }
}
