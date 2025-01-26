<?php

namespace AndreFelipe\FilamentPartials;

use AndreFelipe\FilamentPartials\Commands\FilamentPartialsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPartialsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-partials')
            ->hasConfigFile()
            ->hasCommand(FilamentPartialsCommand::class);
    }
}
