<?php

namespace cpuch\Larabite;

use cpuch\Larabite\Commands\LarabiteCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LarabiteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larabite')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larabite_table')
            ->hasCommand(LarabiteCommand::class);
    }
}
