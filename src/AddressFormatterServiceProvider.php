<?php

namespace Rpungello\LaravelAddressing;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AddressFormatterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-address-formatter')
            ->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->singleton(AddressFormatter::class, fn () => new AddressFormatter);
        $this->app->bind('laravel-address-formatter', AddressFormatter::class);
    }
}
