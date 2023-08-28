<?php

namespace Mranarola\ErrorLens;

use Mranarola\ErrorLens\Commands\ErrorLensCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ErrorLensServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('error-lens')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_error-lens_table')
            ->hasCommand(ErrorLensCommand::class);
    }
}
