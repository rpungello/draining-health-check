<?php

namespace Rpungello\DrainingHealthCheck;

use Rpungello\DrainingHealthCheck\Commands\DrainingHealthCheckCommand;
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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_draining_health_check_table')
            ->hasCommand(DrainingHealthCheckCommand::class);
    }
}
