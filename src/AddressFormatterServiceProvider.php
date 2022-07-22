<?php

namespace Rpungello\AddressFormatter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rpungello\AddressFormatter\Commands\AddressFormatterCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-address-formatter_table')
            ->hasCommand(AddressFormatterCommand::class);
    }
}
