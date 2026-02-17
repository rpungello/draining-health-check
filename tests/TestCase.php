<?php

namespace Rpungello\DrainingHealthCheck\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Rpungello\DrainingHealthCheck\Concerns\InteractsWithDrainingState;
use Rpungello\DrainingHealthCheck\DrainingHealthCheckServiceProvider;

class TestCase extends Orchestra
{
    use InteractsWithDrainingState;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Rpungello\\DrainingHealthCheck\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            DrainingHealthCheckServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
        $this->clearDrainingState();;

        /*
         foreach (\Illuminate\Support\Facades\File::allFiles(__DIR__ . '/../database/migrations') as $migration) {
            (include $migration->getRealPath())->up();
         }
         */
    }
}
