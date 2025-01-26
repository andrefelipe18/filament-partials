<?php

namespace AndreFelipe\FilamentPartials;

use AndreFelipe\FilamentPartials\Commands\FilamentPartialsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPartialsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-partials')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_partials_table')
            ->hasCommand(FilamentPartialsCommand::class);
    }
}
