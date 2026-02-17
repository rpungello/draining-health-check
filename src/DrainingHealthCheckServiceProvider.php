<?php

namespace Rpungello\DrainingHealthCheck;

use Rpungello\DrainingHealthCheck\Commands\HealthAcceptCommand;
use Rpungello\DrainingHealthCheck\Commands\HealthDrainCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DrainingHealthCheckServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('draining-health-check')
            ->hasCommand(HealthDrainCommand::class)
            ->hasCommand(HealthAcceptCommand::class);
    }
}
