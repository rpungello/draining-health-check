<?php

namespace Rpungello\DrainingHealthCheck\Commands;

use Illuminate\Console\Command;
use Rpungello\DrainingHealthCheck\Concerns\InteractsWithDrainingState;

class HealthDrainCommand extends Command
{
    use InteractsWithDrainingState;

    public $signature = 'health:drain';

    public $description = 'Mark this instance as draining connections';

    public function handle(): int
    {
        $this->setDraining(true);

        return self::SUCCESS;
    }
}
