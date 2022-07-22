<?php

namespace Rpungello\AddressFormatter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\AddressFormatter\AddressFormatter
 */
class AddressFormatter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-address-formatter';
    }
}
